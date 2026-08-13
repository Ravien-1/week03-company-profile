@extends('layouts.app')

@section('title', 'Services - Nexora Solutions')

@section('content')

<!-- PAGE HEADER -->
<section style="background: #eff6ff; padding: 80px 0; text-align: center;">
    <div class="container">

        <p style="color: #2563eb; font-weight: bold; margin-bottom: 12px;">
            OUR SERVICES
        </p>

        <h1 style="font-size: 48px; margin-bottom: 15px;">
            Technology Solutions for Your Business
        </h1>

        <p style="color: #64748b; max-width: 700px; margin: auto; font-size: 18px;">
            From websites to cloud solutions, we provide practical technology
            services designed to support your organization's goals.
        </p>

    </div>
</section>


<!-- SERVICES -->
<section class="section">
    <div class="container">

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">

            <!-- SERVICE 1 -->
            <div style="background: white; padding: 35px; border-radius: 14px; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">

                <div style="font-size: 42px; margin-bottom: 20px;">
                    💻
                </div>

                <h2 style="font-size: 24px; margin-bottom: 12px;">
                    Web Development
                </h2>

                <p style="color: #64748b; line-height: 1.7;">
                    We create responsive and user-friendly websites that help
                    businesses establish a strong online presence.
                </p>

            </div>


            <!-- SERVICE 2 -->
            <div style="background: white; padding: 35px; border-radius: 14px; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">

                <div style="font-size: 42px; margin-bottom: 20px;">
                    📱
                </div>

                <h2 style="font-size: 24px; margin-bottom: 12px;">
                    Mobile Development
                </h2>

                <p style="color: #64748b; line-height: 1.7;">
                    We design practical mobile applications that provide
                    convenient experiences for users on different devices.
                </p>

            </div>


            <!-- SERVICE 3 -->
            <div style="background: white; padding: 35px; border-radius: 14px; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">

                <div style="font-size: 42px; margin-bottom: 20px;">
                    🎨
                </div>

                <h2 style="font-size: 24px; margin-bottom: 12px;">
                    UI/UX Design
                </h2>

                <p style="color: #64748b; line-height: 1.7;">
                    We design clean and intuitive interfaces focused on
                    usability, accessibility, and user experience.
                </p>

            </div>


            <!-- SERVICE 4 -->
            <div style="background: white; padding: 35px; border-radius: 14px; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">

                <div style="font-size: 42px; margin-bottom: 20px;">
                    ☁️
                </div>

                <h2 style="font-size: 24px; margin-bottom: 12px;">
                    Cloud Solutions
                </h2>

                <p style="color: #64748b; line-height: 1.7;">
                    We help organizations use cloud technologies to improve
                    flexibility, accessibility, and scalability.
                </p>

            </div>


            <!-- SERVICE 5 -->
            <div style="background: white; padding: 35px; border-radius: 14px; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">

                <div style="font-size: 42px; margin-bottom: 20px;">
                    🛡️
                </div>

                <h2 style="font-size: 24px; margin-bottom: 12px;">
                    Cybersecurity
                </h2>

                <p style="color: #64748b; line-height: 1.7;">
                    We help businesses strengthen their digital security
                    practices and protect important information.
                </p>

            </div>


            <!-- SERVICE 6 -->
            <div style="background: white; padding: 35px; border-radius: 14px; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">

                <div style="font-size: 42px; margin-bottom: 20px;">
                    💡
                </div>

                <h2 style="font-size: 24px; margin-bottom: 12px;">
                    IT Consulting
                </h2>

                <p style="color: #64748b; line-height: 1.7;">
                    We provide technology guidance to help organizations
                    choose practical solutions for their needs.
                </p>

            </div>

        </div>

    </div>
</section>


<!-- CTA -->
<section style="background: #0f172a; color: white; padding: 70px 0;">
    <div class="container" style="text-align: center;">

        <h2 style="font-size: 34px; margin-bottom: 15px;">
            Need a Technology Partner?
        </h2>

        <p style="color: #cbd5e1; margin-bottom: 25px;">
            Tell us what you're trying to build and let's explore a solution.
        </p>

        <a href="{{ route('contact') }}"
           style="display: inline-block; background: #2563eb; color: white; padding: 12px 24px; border-radius: 8px; font-weight: bold;">
            Get in Touch
        </a>

    </div>
</section>

@endsection