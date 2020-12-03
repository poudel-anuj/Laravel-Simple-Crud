@extends('layout')
@section('content')
<div class="col-sm-6">

<form method="post" action ="/update" >
@csrf
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name"  class="form-control" value="{{$data->name}}" placeholder="Name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{$data->email}}"  placeholder="Email">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address"  class="form-control" value="{{$data->address}}" placeholder="Address">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div>
@stop