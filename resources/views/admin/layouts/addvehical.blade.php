@extends('index')

@section('content')



<form action="{{route('vehical.add')}}" method="post">
  @csrf
  <div class="mb-3">
  <select class="form-select" name="vehical_type_id" aria-label="Default select example">
  <option selected disabled>Selected vehical type</option>
  @foreach($vehical_type as $data)
  <option value={{$data->id}}>{{$data->vehical_type}}</option>
  @endforeach
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Entry_time</label>
    <input name="Entry_time" type="datetime-local" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">car_number</label>
    <input name="car_number" type="integer" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">driver_phone_number</label>
    <input name="driver_phone_number" type="integer" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Selected Slot Number</label>
  <select name="slot_number_id" class="form-control" id="exampleInputPassword1">
@foreach ($slots as $slot)

<option value="{{$slot->id}}">{{$slot->id}}</option>
@endforeach
</select>
<!-- </select> -->
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">park</label>
<!-- <select name="parking" id="">
@foreach ($slots as $slot)
<option value="{{$slot->id}}">{{$slot->id}}</option>
@endforeach
</select> -->
    <input name="parking" type="integer" class="form-control" id="exampleInputPassword1">
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">driver</label>
    <input name="out" type="datetime" class="form-control" id="exampleInputPassword1">
  </div> -->
  <!-- <div class="mb-3 form-check">
    <input  type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection