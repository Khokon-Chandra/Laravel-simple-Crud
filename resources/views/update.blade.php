@extends('layout')
@section('content')
<div class="container">

    <div class="col-md-6 offset-md-3 my-5 bg-light shadow p-3">
    <div class="d-flex justify-content-between mt-5">
        <h3>Edit Student</h3>
        <a class='btn btn-outline-primary' href="{{url('/')}}">Student List</a>
    </div>
    <input id="updateId" type="hidden" value="{{$student->id}}">
    <div class="mb-3 form-group">
        <label>Name</label>
        <input id="name" type="text" value="{{$student->name}}" class="form-control">
    </div>
    <div class="mb-3 form-group">
        <label>Email Address</label>
        <input id="email" type="email" value="{{$student->email}}" class="form-control">
    </div>
    <div class="mb-3 form-group">
        <label>Roll</label>
        <input id="roll" type="number" value="{{$student->roll}}" class="form-control">
    </div>

    <div class="mb-3 form-group">
        <input id="update" type="button" value="Update Now" class="btn btn-primary">
    </div>

    </div>

<script type="text/javascript" src="{{asset('/js/axios.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/custom.js')}}"></script>
</div>
@stop 