@extends('layouts.app')

@section('title', 'Home - Nexora Solutions')

@section('content')

<section class="section">
    <div class="container">
        <div class="card" style="text-align: center; padding: 70px 30px;">

            <p style="color: #2563eb; font-weight: bold;">
                WELCOME TO NEXORA SOLUTIONS
            </p>

            <h1 style="font-size: 48px; margin: 15px 0;">
                Smart Technology Solutions for Modern Businesses
            </h1>

            <p style="max-width: 700px; margin: 0 auto 30px;">
                Nexora Solutions helps businesses improve their digital
                operations through reliable, practical, and modern technology
                solutions.
            </p>

            <a href="{{ route('services') }}" class="btn">
                Explore Our Services
            </a>

        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <h2 style="text-align: center; margin-bottom: 35px;">
            Why Choose Nexora?
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">

            <div class="card">
                <h3>Reliable</h3>
                <p>
                    We focus on dependable technology solutions that support
                    everyday business operations.
                </p>
            </div>

            <div class="card">
                <h3>Innovative</h3>
                <p>
                    We use modern technologies and practical approaches to
                    solve digital challenges.
                </p>
            </div>

            <div class="card">
                <h3>Customer-Focused</h3>
                <p>
                    Our solutions are designed around the needs and goals
                    of each organization.
                </p>
            </div>

        </div>

    </div>
</section>

@endsection