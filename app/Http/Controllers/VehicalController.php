<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParckingVehical;
use App\Models\Parkingslot;
use Illuminate\Support\Carbon;
use App\Models\VehicalType;
use App\Models\checkout;
use App\Models\Report;



class VehicalController extends Controller
{
    //<h1 class="mt-4">vehical list</h1>
    //<p><button type="button" class="btn btn-primary btn-sm">Small button</button></p>
    public function vehical(){
        $ParckingVehicals=ParckingVehical::with ('parkingslot')->get();
        return view('admin.layouts.vehicaltype',compact('ParckingVehicals'));
    }

    
    public function addvehical(){

        $slots = parkingslot::all();
       $vehical_type = VehicalType::all();
        return view('admin.layouts.addvehical',compact('slots','vehical_type')); 
    }
    
 
    public function add(Request $request){
        // dd($request->all());
        ParckingVehical::create([
            'vehical_type_id'=>$request->vehical_type_id,
            'Entry_time'=>$request->Entry_time,
            'car_number'=>$request->car_number,
            'driver_phone_number'=>$request->driver_phone_number,
            'Slot_number_id'=>$request->slot_number_id,
            'out'=>$request->out,
            'In'=>$current_date_time = Carbon::now(),
        ]);
        return redirect()->back()->with('msg','created succesfully');
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


    // public function update(Request $request,$id){
    //     // dd($request->all());
    //    $ParkingVehicale = ParckingVehical::find($id);
    //    $ParkingVehicale->update([
    //         'vehical_name'=>$request->name,
    //         'duration'=>$request->duration,
    //         'owner'=>$request->vehical_owner,
    //         'driver'=>$request->driverr,
    //         'out'=>$current_date_time = Carbon::now()->toDateTimeString(),
    //     ]);
    //     return redirect()->back();
   // }

   public function selectslot(){
       return view('admin.layouts.selectslot');
   }
   public function slot(){

        $slots=Parkingslot::all();
      
        return view('admin.layouts.parkingslot',compact('slots'));
  }

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
    public function dashboard(){
        return view('admin.layouts.dashboarddesign');
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


 public function parkingoutupdate(Request $request,$id)
 {
    $parckingVehical=ParckingVehical::find($id);
    if($parckingVehical){
        $parckingVehical->update([
            'out'=>$request->out,
            
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

    $parking=ParckingVehical::find($request->parking_id);

    $parking->update([
'out'=>now()
    ]);

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



//report 17 jan
public function report(){
    $parckingVehicals = ParckingVehical::where('out','=',null)->get();

    $parking=Checkout::all();

    return view('admin.layouts.report',compact('parckingVehicals','parking'));
}


}