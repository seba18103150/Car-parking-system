@extends('index')

@section('content')

<form action="{{route('vehical.ckeckout.payment')}}" method="post">
@csrf
<!-- @if(session()->has('msg'))
  <p class="alert alert-success">
  {{session()->get('msg')}}
</p>
@endif

<!-- <form action="{{route('vehical.parkingout.update',$parckingVehical->id)}}" method="post">
  @csrf -->
  <!-- @method('put') -->
  

  <!-- <div class="mb-3"> --> -->
    <!-- <label for="exampleInputEmail1" class="form-label">out</label> -->
    <!-- <input value="{{$parckingVehical->out}}" name="out" type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
</div> -->



</div>
  <div class="mb-3">


    <label for="exampleInputPassword1" class="form-label">Slot Price</label>

    <input name="slot_price" value="{{$slot->price}}"  readonly type="integer" class="form-control" id="exampleInputPassword1">
        <label for="exampleInputPassword1" class="form-label">Total_time</label>
<input name="total_time" value="{{$hourdiff}}"  readonly type="integer" class="form-control" id="exampleInputPassword1">
<label for="exampleInputPassword1" class="form-label">Total amount</label>

    <input name="total_charge" value="{{$charge}}"  readonly type="integer" class="form-control" id="exampleInputPassword1">

  </div>




  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">payment type</label>
  <select class="form-select" name="type" aria-label="Default select example">


      <option value="null">select payment type</option>
      <option value="CASH">CASH</option>
      <option value="Nagad">Nagad</option>     
       <option value="Bkash">Bkash</option>

    
</select>



  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Remarks</label>
    <input name="Remarks" type="text" class="form-control" id="exampleInputPassword1">
  </div>
 
  
  <button type="submit" class="btn btn-primary"> payment Submit</button>
</form>

@endsection