<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParckingVehical;
use App\Models\Parkingslot;
use Illuminate\Support\Carbon;
use App\Models\VehicalType;
use App\Models\Checkout;
use App\Models\Report;
use App\Models\User;



class VehicalController extends Controller
{
    //<h1 class="mt-4">vehical list</h1>
    //<p><button type="button" class="btn btn-primary btn-sm">Small button</button></p>
    public function vehical(){
        $ParckingVehicals=ParckingVehical::with ('parkingslot')->get();
        return view('admin.layouts.vehicaltype',compact('ParckingVehicals'));
    }

    
    public function addvehical(){

        $slots = parkingslot::where('Status','!=','booked')->get() ;
        
       $vehical_type = VehicalType::all();
        return view('admin.layouts.addvehical',compact('slots','vehical_type')); 
    }
    
 
    public function add(Request $request){
        // dd($request->all());
            $request->validate([
                'driver_phone_number'=>'required|numeric|digits:11',
            ]);
     

        $ifout=  Parkingslot::where('id',$request->slot_number_id)->where('Status','!=','Active')->first();
        Parkingslot::where('id',$request->slot_number_id)->update([
            'Status'=>"Active"
        ]);
        $ifAvailable=  Parkingslot::where('id',$request->slot_number_id)->where('Status','!=','booked')->first();
        if($ifAvailable)
        {
            ParckingVehical::create([
                'vehical_type_id'=>$request->vehical_type_id,
                'Entry_time'=>$request->Entry_time,
                'car_number'=>$request->car_number,
                'driver_phone_number'=>$request->driver_phone_number,
                'Slot_number_id'=>$request->slot_number_id,
                'out'=>$request->out,
                'In'=>$current_date_time = Carbon::now(),
            ]);
            
    //status book
            Parkingslot::where('id',$request->slot_number_id)->update([
                'Status'=>"booked"
            ]);
    
            return redirect()->back()->with('msg','created succesfully');
        }
      
        return redirect()->back()->with('msg','Already Booked.');
       
    }


    // vehical type
    public function vehicaltype(){
        $vehicaltypes = VehicalType::all();

        return view('admin.layouts.typesofvehical',compact('vehicaltypes')); 
    }

    public function vehicaltypestore(){
        //dd("o");
        return view('admin.layouts.typeofvehical'); 
    }
    public function vehicaltypeform(){
        //dd("o");
        return view('admin.layouts.createtype'); 
    }

    public function vehicalstore(Request $request){
        // dd($request->all());
        VehicalType::create([
            'vehical_type'=>$request->vehical_type,
            
        ]);

        return redirect()->back()->with('msg','vehical type created succesfully');

    }


   //select slot
   public function selectslot(){
       return view('admin.layouts.selectslot');
   }
   public function slot(){

        $slots=Parkingslot::all();
      
        return view('admin.layouts.parkingslot',compact('slots'));
  }


//add slot
        public function addparkingslots(Request $request)
        {

            $countSlot = Parkingslot::count('id');
           if( $countSlot < 20){
            Parkingslot::create([
                'name'=>$request->name,
                'description'=>$request->description,
                'price'=>$request->price,
                'Status'=>$request->Status,
            ]);
            return redirect()->route('vehical.parkingslot');
           }else{
              
            return redirect()->back();  
           }

           
    }
    public function parkingslotDelete($id){
        Parkingslot::find($id)->delete();
        return redirect()->back()->with('success', 'Delete done');
    }

    public function parkingslotedit($id){
        $slot=Parkingslot::find($id);
        if($slot){
            return view('admin.layouts.parkingslotEditform',compact('slot'));
        }
    }
    public function parkingslotupdate(Request $request,$id)
    {
        $slot=Parkingslot::find($id);
        if($slot){
            $slot->update([
                'name'=>$request->name,
                'description'=>$request->description,
                'price'=>$request->price,
                'Status'=>$request->Status,
            ]);
               return redirect()->back()->with('msg','update done');
        }

     
    }

    //dashboard design

    public function dashboard(){
        
        $park = ParckingVehical::where('out','=',null)->count();
        $parking =parkingslot::count();

        $freeslot = $parking-$park;

        $parkstatus = parkingslot::where('Status','=','inactive')->count();

        // dd($park);
        return view('admin.layouts.dashboarddesign',compact('park','parking','freeslot','parkstatus'));

    }

    public function parkingout($id){

        $parckingVehical=ParckingVehical::find($id);
        $slot=Parkingslot::find($parckingVehical->Slot_number_Id);
        $hourdiff = abs((int)round((strtotime($parckingVehical->Entry_time) - strtotime(now()))/3600));
        // dd($hourdiff);
        $charge=$hourdiff*$slot->price;
  
        if($parckingVehical){
            return view('admin.layouts.parkingout',compact('parckingVehical','charge','hourdiff',
        'slot'));
        }
    }


// parkingoutupdate

 public function parkingoutupdate(Request $request,$id)
 {
     //dd($id);
    $parckingVehical=ParckingVehical::find($id);
    if($parckingVehical){
        $parckingVehical->update([
            'out'=>$request->out,
            //'status'=>'active'
            
        ]);
        
           return redirect()->back()->with('msg','update done');
    }  
    
 }
 //parking delete
 public function parkingDelete($id){
    ParckingVehical::find($id)->delete();
    return redirect()->back()->with('success', 'Delete done');
}

//new parking
public function newparking(){

    $parckingVehicals = ParckingVehical::where('out','=',null)->get();
    return view('admin.layouts.newparking',compact('parckingVehicals'));
}



//parking checkout
public function checkout(Request $request)
   { 
    //    dd($request->all());

//parking out status change

    $parking=ParckingVehical::find($request->parking_id);
    // dd($parking->Slot_number_Id);

    Parkingslot::where('id',$parking->Slot_number_Id)->update([
        'Status'=>'available'
    ]);

    $parking->update(['out'=>now()]);

      Checkout::create([
        'slot_price'=>$request->slot_price,
        'total_time'=>$request->total_time,
        'charge'=>$request->total_charge,
        'paymenttype'=>$request->type,
        'remarks'=>$request->Remarks,
        'slot_name'=>$request->slot_name,
        
    ]);
    return redirect()->back()->with('msg','payment succesfully');
   }



   //user

   public function user(){
       $users=User::all();
       return view ('admin.layouts.user',compact('users'));
   }



//report 17 jan
public function report(){
    // $parckingVehicals = ParckingVehical::where('out','=',null)->get();

    $reportData=Checkout::all();

    return view('admin.layouts.report',compact('reportData'));
}

public function Search(Request $request){

//    dd($request->all());

   $fromDate=$request->Start_time;
   $toDate=$request->End_time;

$reportData=Checkout::whereDate('created_at','>=',$fromDate)
->whereDate('created_at','<=',$toDate)
->get();

//dd($reportData);

return view('admin.layouts.report',compact('reportData'));

}

}