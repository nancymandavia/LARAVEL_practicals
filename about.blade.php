@extends('layouts.app')

@section('title', 'About')

@section('content')
<section class="subhero">
    <div class="container">
        <p class="kicker">02 / A LITTLE ABOUT US</p>
        <h1>Built on ideas.<br><em>Powered by people.</em></h1>
    </div>
</section>
<section class="container about-body">
    <div class="section-label">OUR PURPOSE</div>
    <div>
        <h2>Communication<br>without the <em>complication.</em></h2>
        <p class="muted">NOVA is a sample contact inquiry website created to make communication simple and approachable. Visitors can learn about the platform and find a clear way to get in touch.</p>
        <p class="muted">This page also demonstrates Laravel Blade inheritance. The common header and footer come from one parent layout, while this page provides its own title and content through Blade sections.</p>
        <a class="button" href="{{ route('contact') }}">Say hello <span>↗</span></a>
    </div>
</section>
@endsection
