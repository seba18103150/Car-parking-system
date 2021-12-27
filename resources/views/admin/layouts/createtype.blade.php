@extends('index')

@section('content')


<form action="{{route('admin.vehical.store')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">vehical type</label>
    <input name="vehical type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection