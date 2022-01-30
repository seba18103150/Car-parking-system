@extends('index')

@section('content')

<h1 class="mt-4">parking slot</h1>

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

<!-- <p><button type="button" class="btn btn-primary btn-sm">Add vehical</button></p> -->
<p><a href="{{route('vehical.selectslot.form')}}"  type='table' class="btn btn-success">Add slot</a></p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <!-- <th scope="col">description</th> -->
      <th scope="col">price</th>
      <th scope="col">Status</th>
      <th scope="col">action</th>
      
    </tr>
  </thead>
  <tbody> 
    @foreach ($slots as $key=>$slot)
    <tr>
      
      <td>{{$key+1}}</td>
      <td>{{$slot->name}}</td>
      <!-- <td>{{$slot->description}}</td> -->
      <td>{{$slot->price}}</td>
      <td>{{$slot->Status}}</td>
      
     
      <td>
        <div>
        <a href="{{route('vehical.parkingslot.edit', $slot->id)}}"  type='table' class="btn btn-info">Edit</a>
        <a class="btn btn-danger" href="{{route('vehical.parkingslot.delete', $slot->id)}}">Delete</a>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection