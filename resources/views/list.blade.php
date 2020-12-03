@extends('layout')
@section('content')
<h2>Restaurant page is here</h2>
    <!-- get session status from the add function (flash session) -->
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td>
        <a href ="/delete/{{$item->id}}">Delete</a>
        <a href ="/edit/{{$item->id}}"> | Edit</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
@stop