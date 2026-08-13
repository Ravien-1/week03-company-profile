@extends('layouts.app')

@section('title', 'Home - Nexora Solutions')

@section('content')

<!-- HERO SECTION -->
<section style="background: #e0f2fe; padding: 100px 0;">
    <div class="container" style="text-align: center;">

        <p style="color: #2563eb; font-weight: bold; margin-bottom: 15px;">
            DIGITAL SOLUTIONS FOR MODERN BUSINESS
        </p>

        <h1 style="font-size: 52px; margin-bottom: 20px;">
            We Build Technology That Moves Businesses Forward.
        </h1>

        <p style="font-size: 19px; color: #64748b; max-width: 750px; margin: 0 auto 30px;">
            Nexora Solutions helps businesses turn ideas into reliable,
            user-friendly, and scalable digital experiences.
        </p>

        <a href="{{ route('services') }}" class="btn">
            Explore Our Services
        </a>

    </div>
</section>


<!-- SERVICES PREVIEW -->
<section class="section">
    <div class="container">

        <div style="text-align: center; margin-bottom: 45px;">
            <h2 style="font-size: 36px; margin-bottom: 15px;">
                What We Do
            </h2>

            <p style="color: #64748b;">
                Technology solutions designed around real business needs.
            </p>
        </div>


        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px;">

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
                <h3>Web Development</h3>

                <p style="margin-top: 12px; color: #64748b;">
                    Modern and responsive websites built for businesses and organizations.
                </p>
            </div>


            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
                <h3>Mobile Applications</h3>

                <p style="margin-top: 12px; color: #64748b;">
                    Practical mobile experiences designed around users and business goals.
                </p>
            </div>


            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
                <h3>Cloud Solutions</h3>

                <p style="margin-top: 12px; color: #64748b;">
                    Flexible cloud-based solutions that support growing organizations.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- CALL TO ACTION -->
<section style="background: #2563eb; color: white; padding: 70px 0;">
    <div class="container" style="text-align: center;">

        <h2 style="font-size: 36px; margin-bottom: 15px;">
            Have a Project in Mind?
        </h2>

        <p style="margin-bottom: 25px;">
            Let's create a digital solution that fits your organization.
        </p>

        <a href="{{ route('contact') }}"
           style="display: inline-block; background: white; color: #2563eb; padding: 12px 24px; border-radius: 8px; font-weight: bold;">
            Contact Us
        </a>

    </div>
</section>

@endsection