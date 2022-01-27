@extends('index')

@section('content')

<h1 class="mt-4">users</h1>

@if(session()->has('success'))
<p class="alert alert-success">{{session()->get('success')}}</p>
@endif


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">role</th>
      
    </tr>
  </thead>
  <tbody> 
    @foreach ($users as $key=>$user)
    <tr>
      
      <td>{{$key+1}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->role}}</td>
      
     
     
    </tr>
    @endforeach
  </tbody>
</table>
@endsection