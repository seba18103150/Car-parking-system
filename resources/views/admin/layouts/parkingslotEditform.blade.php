@extends('index')

@section('content')

@if(session()->has('msg'))
  <p class="alert alert-success">
  {{session()->get('msg')}}
</p>
@endif

<form action="{{route('vehical.parkingslot.update',$slot->id)}}" method="post">
  @csrf
  @method('put')
  <div>



  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input value="{{$slot->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">description</label>
    <input value="{{$slot->description}}" name="description" type="text" class="form-control" id="exampleInputPassword1">
  </div> -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input value="{{$slot->price}}" name="price" type="integer" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <input value="{{$slot->Status}}" name="Status" type="text" class="form-control" id="exampleInputPassword1">
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