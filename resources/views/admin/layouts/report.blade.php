@extends('index')

@section('content')



<h1 class="mt-4">Report</h1>

<div id="divToPrint">
       
    <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">



<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">slot_price</th>
      <th scope="col">Total_time</th>
      <th scope="col">Charge</th>
      <th scope="col">paymenttype</th>
      <th scope="col">Slot_name</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach ($parking as $key=>$parcking)
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


<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

@endsection