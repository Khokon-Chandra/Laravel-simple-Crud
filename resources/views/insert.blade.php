@extends('layout')
@section('content')

<div class="container">

    <div class="col-md-6 offset-md-3 my-5 bg-light shadow p-3">
    <div class="d-flex justify-content-between mt-5">
        <h3>Add New Students</h3>
        <a class='btn btn-outline-primary' href="{{url('/')}}">Student List</a>
    </div>
    <div class="mb-3 form-group">
        <label>Name</label>
        <input id="name" type="text" class="form-control">
    </div>
    <div class="mb-3 form-group">
        <label>Email Address</label>
        <input id="email" type="email" class="form-control">
    </div>
    <div class="mb-3 form-group">
        <label>Class</label>
        <input id="class" type="number" class="form-control">
    </div>

    <div class="mb-3 form-group">
        <input id="insert" type="button" value="Add Student" class="btn btn-primary">
    </div>

    </div>

<script type="text/javascript" src="{{asset('/js/axios.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/custom.js')}}"></script>
</div>
@stop 