@extends('index')

@section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

@if($errors->any())

@foreach($errors->all() as $er)
<p class="alert alert-danger">{{$er}}</p>
@endforeach

@endif



<form action="{{route('vehical.add')}}" method="post">

  @csrf

  <div class="mb-5">

  </div>

  <div class="mb-3">
  <select class="form-select" name="vehical_type_id" aria-label="Default select example">
  <option selected disabled>Selected vehical type</option>
  @foreach($vehical_type as $data)
  <option value={{$data->id}}>{{$data->vehical_type}}</option>
  @endforeach
</select>
  </div>
  @php
  $current = date("Y-m-d H-i-s");
  @endphp
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Entry_time</label>
    <input name="Entry_time" value="{{$current}}" readonly type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">car_number</label>
    <input name="car_number" type="integer" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">driver_phone_number</label>
    <input required name="driver_phone_number" type="integer" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Selected Slot Name</label>
  <select name="slot_number_id" class="form-control" id="exampleInputPassword1">
      @foreach ($slots as $slot)

      <option value="{{$slot->id}}">{{$slot->name}}</option>
      @endforeach
</select>
<!-- </select> -->
  </div>


  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">park</label>
    <input name="parking" type="integer" class="form-control" id="exampleInputPassword1">
  </div> -->
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">driver</label>
    <input name="out" type="datetime" class="form-control" id="exampleInputPassword1">
  </div> -->
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection