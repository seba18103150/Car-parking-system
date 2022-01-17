@extends('index')

@section('content')

<h1 class="mt-4">Parking</h1>

<!-- <p><button type="button" class="btn btn-primary btn-sm">Add vehical</button></p> -->
<table class="table">
  <thead>
    <tr><p><a href="{{route('vehical.addvehical')}}"  type='table' class="btn btn-success">Add vehical</a></p>

      <th scope="col">Id</th>
      <th scope="col">Vehical_type</th>
      <th scope="col">Entry_time</th>
      <th scope="col">Car_number</th>
      <th scope="col">Driver_phone_number</th>
      <th scope="col">Slot_name</th>
      <th scope="col">Out</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach ($ParckingVehicals as $key=>$parckingVehical)
    <tr>
      
      <td>{{$key+1}}</td>
      <td>{{optional($parckingVehical->vehicalType)->vehical_type}}</td>
      <td>{{$parckingVehical->Entry_time}}</td>
      <td>{{$parckingVehical->car_number}}</td>
      <td>{{$parckingVehical->driver_phone_number}}</td>
      <td>{{optional($parckingVehical->parkingslot)->name}}</td>
      <td>{{$parckingVehical->out}}</td>
      <td>       
         <a href="{{route('vehical.parking.out',$parckingVehical->id)}}"  type='table' class="btn btn-success">Checkout</a>
      <a class="btn btn-info" href="{{route('vehical.parking.delete', $parckingVehical->id)}}">Delete</a>

</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection