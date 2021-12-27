<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParckingVehical;
use App\Models\parkingslot;
use Illuminate\Support\Carbon;
use App\Models\VehicalType;


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
            'parking'=>$request->parking,
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
}
