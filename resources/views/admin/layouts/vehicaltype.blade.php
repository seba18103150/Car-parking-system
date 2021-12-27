@extends('index')

@section('content')

<h1 class="mt-4">Parking</h1>

<!-- <p><button type="button" class="btn btn-primary btn-sm">Add vehical</button></p> -->
<p><a href="{{route('vehical.addvehical')}}"  type='table' class="btn btn-success">Add vehical</a></p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">vehical_type_id</th>
      <th scope="col">Entry_time</th>
      <th scope="col">car_number</th>
      <th scope="col">driver_phone_number</th>
      <th scope="col">slot_number_id</th>
      <th scope="col">parking</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach ($ParckingVehicals as $ParckingVehical)
    <tr>
      
      <td>{{$ParckingVehical->id}}</td>
      <td>{{$ParckingVehical->vehical_type_id}}</td>
      <td>{{$ParckingVehical->Entry_time}}</td>
      <td>{{$ParckingVehical->car_number}}</td>
      <td>{{$ParckingVehical->driver_phone_number}}</td>
      <td>{{$ParckingVehical->Slot_number_Id}}</td>
      <td>{{$ParckingVehical->parking}}</td>
      
      <td>{{$ParckingVehical->out}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection