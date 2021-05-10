@extends('layout')
@section('content')
<div class="container my-5">

     <div class="d-flex justify-content-between mb-3">
        <h3> Students List</h3>
        <a class='btn btn-outline-primary' href="{{url('/add-new')}}">Add New</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student )
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->created_at}}</td>
                    <td>
                        <a href="{{url('/edit/')."/".$student->id}}">Edit</a>
                        <a style="cursor:pointer" class="text-danger" id="delete" name="{{$student->id}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


<script type="text/javascript" src="{{asset('/js/axios.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/custom.js')}}"></script>
</div>
@stop 