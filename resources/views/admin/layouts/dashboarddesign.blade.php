@extends('index')

@section('content')


<div class="row" style="margin-top: 60px;">
  <div class="col-lg-4" style="margin-bottom: 20px;">
<div class="card" style="width: 18rem; background-color: #4b6cb7;">
  <div class="card-body">

    <h4 class="card-title" style="padding-bottom: 10px;">Parking slot </h4>
    <h6 class="card-subtitle mb-2 text-muted" style="padding-bottom: 10px;">Card subtitle</h6>
    <p class="card-text">Maximum slot for parking: {{$parking}} </p>
   
  </div>
</div>
</div>


<div class="col-lg-4" style="margin-bottom: 20px;">
<div class="card" style="width: 18rem; background-color: #F9D423;">
  <div class="card-body">
    <h4 class="card-title" style="padding-bottom: 10px;">  Parking slot in use </h4>
    <h6 class="card-subtitle mb-2 text-muted" style="padding-bottom: 10px;">Card subtitle</h6>
    <p class="card-text">{{$park}} </p>
   
  </div>
</div>
</div>


<div class="col-lg-4" style="margin-bottom: 20px;">
<div class="card" style="width: 18rem; background-color: #add100;">
  <div class="card-body">
    <h4 class="card-title" style="padding-bottom: 10px;"> Free parking slot </h4>
    <h6 class="card-subtitle mb-2 text-muted" style="padding-bottom: 10px;">Card subtitle</h6>
    <p class="card-text">{{$freeslot}} </p>
   
  </div>
</div>
</div>


<div class="col-lg-4" style="margin-bottom: 20px;">
<div class="card" style="width: 18rem; background-color: #11FFBD;">
  <div class="card-body">
    <h4 class="card-title" style="padding-bottom: 10px;">In active parking slot </h4>
    <h6 class="card-subtitle mb-2 text-muted" style="padding-bottom: 10px;">Card subtitle</h6>
    <p class="card-text">Maximum slot for parking.{{$parkstatus}} </p>
    
  </div>
</div>
</div>
</div>

@endsection