@extends('layout')

@section('title', 'Home')

@section('content')
<div class="card">
    <h2>Home Page</h2>
    <p>Welcome! This page is opened by the <code>/</code> route in <code>routes/web.php</code>.</p>
    <p>Try these URLs:</p>
    <ul>
        <li><a href="/hello/Nancy">/hello/Nancy</a> — one wildcard</li>
        <li><a href="/student/Nancy/BCA">/student/Nancy/BCA</a> — two wildcards</li>
        <li><a href="/category/technology">/category/technology</a> — optional wildcard</li>
        <li><a href="/product/2">/product/2</a> — wildcard selects product content</li>
    </ul>
</div>
@endsection
