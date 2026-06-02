@extends('layouts.master')

@section('title', 'Students')

@section('content')

<h2>Students List</h2>

<table id="students-table" class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
</table>

@endsection

