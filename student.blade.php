@extends('layout')

@section('title', 'Student Details')

@section('content')
<div class="card">
    <h2>Student Details</h2>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Course:</strong> {{ $course }}</p>
    <p>Both values come from <code>/student/{name}/{course}</code>.</p>
</div>
@endsection
