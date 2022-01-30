@extends('index')

@section('content')

@if(session()->has('message'))
  <p> class="alert alert-success">
  {{session()->get('message')}}
</p>
@endif


@if($errors->any())

@foreach($errors->all() as $er)
<p class="alert alert-danger">{{$er}}</p>
@endforeach

@endif

<form action="{{route('vehical.addparkingslot')}}" method="post">
  @csrf
  
 

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">description</label>
    <input name="description" type="text" class="form-control" id="exampleInputPassword1">
  </div> -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input name="price" type="integer" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <input name="Status" type="text" class="form-control" id="exampleInputPassword1">
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