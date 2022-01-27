@extends('index')

@section('content')

<form action="{{route('vehical.report.search')}}" method="get">


<h1 class="mt-4">Report</h1>

       

    <div class="mb-8">
    <label for="exampleInputPassword1" class="form-label">Start_time</label>
    <input name="Start_time" type="date" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-8">
    <label for="exampleInputPassword1" class="form-label">End_time</label>
    <input name="End_time" type="date" class="form-control" id="exampleInputPassword1">
  </div>

  <!-- <tr><p><a href="{{route('vehical.addvehical')}}"  type='table' class="btn btn-success">search</a></p> -->



<!-- <p><a href="{{route('vehical.report.search')}}"  type='table' class="btn btn-success">search</a></p> -->
<button type="submit" class="btn btn-primary">search</button>

</div>
<p style="text-align:right;" >

<input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">
</p>
<div id="divToPrint">
<!-- <P>Car parking list</P> -->


<h1> Payment list of Parking. </h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Slot_price(BDT)</th>
      <th scope="col">Total_time(Hour)</th>
      <th scope="col">Charge(BDT)</th>
      <th scope="col">Paymenttype</th>
      <th scope="col">Slot_name</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach ($reportData as $key=>$parcking)
    <tr>
      
      <td>{{$key+1}}</td>
      <td>{{$parcking->slot_price}}</td>
      <td>{{$parcking->total_time}}</td>
      <td>{{$parcking->charge}}</td>
      <td>{{$parcking->paymenttype}}</td>
      <td>{{$parcking->slot_name}}</td>

      <td>       

</td>
      
    </tr>
    @endforeach
  </tbody>

</table>
</div>

<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
</form>


@endsection