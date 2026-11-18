@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="subhero contact-heading">
    <div class="container">
        <p class="kicker">03 / YOUR TURN</p>
        <h1>Let's start<br><em>something good.</em></h1>
        <p class="muted">Questions, feedback or a fresh idea? Drop us a message.</p>
    </div>
</section>
<section class="container form-layout">
    <div class="form-aside">
        <div class="section-label">GET IN TOUCH</div>
        <h2>We’re all<br><em>ears.</em></h2>
        <p class="muted">Fill in the form and tell us a little about what you need. We look forward to hearing from you.</p>
        <p class="contact-email">hello@novastudio.example</p>
    </div>
    <form class="inquiry-form" method="GET" action="{{ route('contact') }}">
        <label for="name">01 — YOUR NAME</label>
        <input id="name" name="name" type="text" placeholder="Your name" required>
        <label for="email">02 — EMAIL ADDRESS</label>
        <input id="email" name="email" type="email" placeholder="you@example.com" required>
        <label for="subject">03 — SUBJECT</label>
        <input id="subject" name="subject" type="text" placeholder="What would you like to discuss?">
        <label for="message">04 — YOUR MESSAGE</label>
        <textarea id="message" name="message" rows="4" placeholder="Write something..." required></textarea>
        <button class="button" type="submit">Send inquiry <span>↗</span></button>
        @if(request()->has('name'))
            <p class="notice">Thanks, {{ request('name') }}! This is a demo form and does not store submissions.</p>
        @endif
    </form>
</section>
@endsection
