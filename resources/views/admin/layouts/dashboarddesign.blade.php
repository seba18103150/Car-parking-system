@extends('index')

@section('content')


<div class="row" style="margin-top: 60px;">
  <div class="col-lg-4">
<div class="card" style="width: 18rem; background-color: #556270;">
  <div class="card-body">

    <h4 class="card-title" style="padding-bottom: 10px;">Parking slot </h4>
    <h6 class="card-subtitle mb-2 text-muted" style="padding-bottom: 10px;">Card subtitle</h6>
    <p class="card-text">Maximum slot for parking. </p>
   
  </div>
</div>
</div>


<div class="col-lg-4">
<div class="card" style="width: 18rem; background-color: #F9D423;">
  <div class="card-body">
    <h4 class="card-title" style="padding-bottom: 10px;"> Available parking slot </h4>
    <h6 class="card-subtitle mb-2 text-muted" style="padding-bottom: 10px;">Card subtitle</h6>
    <p class="card-text">Maximum slot for parking. </p>
   
  </div>
</div>


</div>

<div class="col-lg-4">
<div class="card" style="width: 18rem; background-color: #11FFBD;">
  <div class="card-body">
    <h4 class="card-title" style="padding-bottom: 10px;">In active parking slot </h4>
    <h6 class="card-subtitle mb-2 text-muted" style="padding-bottom: 10px;">Card subtitle</h6>
    <p class="card-text">Maximum slot for parking. </p>
    
  </div>
</div>
</div>
</div>

@endsection