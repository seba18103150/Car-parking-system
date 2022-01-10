@extends('index')

@section('content')

<h1 class="mt-4">vehical_type</h1>

<!-- <p><button type="button" class="btn btn-primary btn-sm">Add vehical</button></p> -->
<p><a href="{{route('admin.vehical.typeform')}}"  type='table' class="btn btn-success">vehical type</a></p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">vehical_type</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($vehicaltypes as $key=>$vehicaltype)
    
    <tr>
      
      <td>{{$key+1}}</td>
      <td>{{$vehicaltype->vehical_type}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection