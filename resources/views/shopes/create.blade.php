@extends('layouts.app')
@section('content')
<div class="continer">
<div class="col-md-9">
<form  action="/shopes/store" method='POST' >
@csrf
<div class="form-group">
<leabl for="name">name</leabl>
<input name="name" type="text" class='form-control'>
</div>
<div class="form-group">
<leabl for="phoneNumber">phone number</leabl>
<input name="phoneNumber" type="text" class='form-control'>
</div>
<div class="form-group">
<leabl for="descrption">descrption</leabl>
<input name="descrption" type="text" class='form-control'>
</div>
<div class="form-group">
<button type='submit' class='form-control'>add</button>
</div>
<div class="form-group">
<button type='reset' class='form-control'>cancel</button>
</div>
</form>
</div>
</div>
@endsection