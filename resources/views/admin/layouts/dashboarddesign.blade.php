@extends('index')

@section('content')


<div class="row">
  <div class="col-lg-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h1 class="card-title">Parking slot </h1>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Maximum slot for parking. </p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>


<div class="col-lg-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h1 class="card-title"> Available parking slot </h1>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Maximum slot for parking. </p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
$progress = $this->user->userActivities()->select('date')
                ->groupBy('date')
                ->get()->count();

</div>

<div class="col-lg-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h1 class="card-title">In active parking slot </h1>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Maximum slot for parking. </p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>
</div>

@endsection