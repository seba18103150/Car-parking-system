@extends('index')

@section('content')

</div>
<p style="text-align:right;" >

<input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">
</p>
<div id="divToPrint">
<h4>Parking Total Amount :BDT(Taka)</h4>
<p></p>
<p>Slot_price: {{$parking-> slot_price}}</p>
<p>Total_time: {{$parking->total_time}} </p>
<p>Charge: {{$parking->charge}}</p>
<p>Paymenttype:  {{$parking->paymenttype}}</p>
<p>Slot Name: {{$parking->slot_name}}</p>
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
@endsection