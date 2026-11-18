@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="container hero-content">
        <p class="kicker"><span class="pulse"></span> CREATIVE CONNECTIONS START HERE</p>
        <h1>Make your next<br><em>big idea</em> happen.</h1>
        <p class="intro">A modern space to ask questions, share your thoughts and connect with our team. Tell us what you have in mind.</p>
        <a href="{{ route('contact') }}" class="button">Start a conversation <span>↗</span></a>
        <div class="hero-stamp">THINK<br>CREATE<br>CONNECT<span>✳</span></div>
    </div>
    <div class="hero-bottom container">
        <span>INDEPENDENT THINKING. OPEN COMMUNICATION.</span>
        <span>SCROLL TO EXPLORE ↓</span>
    </div>
</section>
<section class="container intro-section">
    <div class="section-label">01 / WHAT WE BELIEVE</div>
    <div>
        <h2>Every good project<br>begins with a <em>hello.</em></h2>
        <p class="muted">We believe clear communication makes everything better. Whether you have a question, an idea or feedback, we want to hear it.</p>
        <a class="text-link" href="{{ route('about') }}">Get to know us ↗</a>
    </div>
</section>
<section class="contact-strip">
    <div class="container strip-inner">
        <p>HAVE SOMETHING ON YOUR MIND?</p>
        <a href="{{ route('contact') }}">Let's make it happen <span>↗</span></a>
    </div>
</section>
@endsection
