@extends('layout')

@section('title', 'Category')

@section('content')
<div class="card">
    <h2>Category: {{ $category }}</h2>
    <p>Try <code>/category/technology</code> or <code>/category/student-life</code>.</p>
    <p>If you visit <code>/category</code>, the default category is General.</p>
</div>
@endsection
