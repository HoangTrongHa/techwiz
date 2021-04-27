@extends('client.app')
@section('css')
<style>
.bd-example { 
 
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    border-width: 0.2rem;
        border-top-width: 0.2rem;
        border-right-width: 0.2rem;
        border-bottom-width: 0.2rem;
        border-left-width: 0.2rem;
    padding: 1.5rem;
        padding-top: 1.5rem;
        padding-right: 1.5rem;
        padding-bottom: 1.5rem;
        padding-left: 1.5rem;
  border-color: #F7F7F9;
    border-top-color: #F7F7F9;
    border-right-color: #F7F7F9;
    border-bottom-color: #F7F7F9;
    border-left-color: #F7F7F9;
}

[class^="col-"] {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    background-color: rgba(86, 61, 124, 0.15);
    border: 1px solid rgba(86, 61, 124, 0.2);
}

.row
{
padding: 1.5rem;
margin-right: 0px;
margin-bottom: 0px;
margin-left: 0px;
border-width: 0.2rem;
}

.centered
{
  display:flex;
  justify-content:center;
  align-items:center;
}

.size
{
   font-size: 14.3px;
   line-height: 2;
}
</style>
@endsection
@section("content")
<div class="row">
    <div class="col-sm-16">
      <h1 class="centered">Now tell us your body's metrics</h1>
      <div class="row">
        <div class="col-xs-8 col-sm-6">
        <FORM NAME="myform" action="{{ route('updateBmi') }}" method="POST" >
            @csrf
            @method('post')
         <h1><span class="label label-default centered">Enter Your Height and Weight </span></h1>
            <div class="row">
                <div class="col-xs-6"><div class="input-group">
              <span class="input-group-addon">Weight</span>
              <INPUT TYPE="text" Id="number1" class="form-control" aria-label="Amount (to the nearest dollar)" VALUE="" onkeyup="sum()"/> 
              <span class="input-group-addon">kg</span>
             </div></div>
                <div class="col-xs-6"><div class="input-group">
            <span class="input-group-addon">Height</span>
            <INPUT TYPE="text" ID="number2" class="form-control" aria-label="Amount (to the nearest dollar)" VALUE="" onkeyup="sum()"/>
            <span class="input-group-addon">cm</span>
            </div></div>
            </div>
            <div class="row">
                 <div class="col-sm-16">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"> Your BMI is </span>
                    <input type="text" class="form-control" id="result" name="result" aria-describedby="basic-addon1">
                  </div>
                </div>
            </div>
            <button type="submit">Submit</button>
        </FORM>
        </div>
      </div>
    </div>
</div>
@endsection
@section('script')
<script>
    function sum() {            
            var num1 = document.getElementById('number1');
            var num2 = document.getElementById('number2');
            if (num1.value !== '')
            {
                if (num2.value !== '') {
                  var  a= parseInt(num1.value,0);
                  var b= parseInt(num2.value,0);
                   var sum = (a/(b*b))*10000;
                    document.getElementById('result').value = sum;
                } 
              }
        }
</script>
@endsection