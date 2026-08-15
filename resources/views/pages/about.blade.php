@extends('layouts.app')

@section('title', 'About Us - Nexora Solutions')

@section('content')

<!-- PAGE HEADER -->
<section style="background: #eff6ff; padding: 80px 0; text-align: center;">
    <div class="container">

        <p style="color: #2563eb; font-weight: bold; margin-bottom: 12px;">
            ABOUT NEXORA
        </p>

        <h1 style="font-size: 48px; margin-bottom: 15px;">
            Technology With Purpose
        </h1>

        <p style="color: #64748b; max-width: 700px; margin: auto; font-size: 18px;">
            We combine technology, creativity, and practical thinking
            to help organizations build better digital experiences.
        </p>

    </div>
</section>


<!-- COMPANY HISTORY -->
<section class="section">
    <div class="container">

        <div style="max-width: 850px; margin: auto;">

            <h2 style="font-size: 34px; margin-bottom: 20px;">
                Our Story
            </h2>

            <p style="color: #64748b; line-height: 1.8; margin-bottom: 20px;">
                Nexora Solutions was created with a simple goal: to make
                technology more practical and accessible for growing businesses.
                What started as a small team focused on web solutions developed
                into a company offering a wider range of digital services.
            </p>

            <p style="color: #64748b; line-height: 1.8;">
                Today, Nexora focuses on creating reliable digital solutions
                that help organizations improve their online presence,
                streamline their processes, and connect with their customers.
            </p>

        </div>

    </div>
</section>


<!-- MISSION & VISION -->
<section style="background: white; padding: 70px 0;">
    <div class="container">

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">

            <div style="padding: 35px; border-radius: 12px; background: #f8fafc;">
                <h2 style="font-size: 30px; margin-bottom: 15px;">
                    Our Mission
                </h2>

                <p style="color: #64748b; line-height: 1.7;">
                    To provide dependable and user-focused technology solutions
                    that help businesses solve problems, improve their services,
                    and achieve their digital goals.
                </p>
            </div>


            <div style="padding: 35px; border-radius: 12px; background: #eff6ff;">
                <h2 style="font-size: 30px; margin-bottom: 15px;">
                    Our Vision
                </h2>

                <p style="color: #64748b; line-height: 1.7;">
                    To become a trusted technology partner known for creating
                    meaningful, innovative, and sustainable digital solutions.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- CORE VALUES -->
<section class="section">
    <div class="container">

        <div style="text-align: center; margin-bottom: 45px;">

            <h2 style="font-size: 36px; margin-bottom: 15px;">
                Our Core Values
            </h2>

            <p style="color: #64748b;">
                The principles that guide how we work.
            </p>

        </div>


        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px;">

            <div style="text-align: center; padding: 30px;">
                <h3>Innovation</h3>
                <p style="color: #64748b; margin-top: 10px;">
                    We continuously look for better ways to solve problems.
                </p>
            </div>

            <div style="text-align: center; padding: 30px;">
                <h3>Integrity</h3>
                <p style="color: #64748b; margin-top: 10px;">
                    We value honesty, responsibility, and transparency.
                </p>
            </div>

            <div style="text-align: center; padding: 30px;">
                <h3>Collaboration</h3>
                <p style="color: #64748b; margin-top: 10px;">
                    We believe strong results come from working together.
                </p>
            </div>

            <div style="text-align: center; padding: 30px;">
                <h3>Excellence</h3>
                <p style="color: #64748b; margin-top: 10px;">
                    We aim to deliver quality work in everything we build.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- TEAM -->
<section style="background: #0f172a; color: white; padding: 80px 0;">
    <div class="container">

        <div style="text-align: center; margin-bottom: 45px;">

            <h2 style="font-size: 36px; margin-bottom: 15px;">
                Meet Our Team
            </h2>

            <p style="color: #cbd5e1;">
                A small team with different skills working toward one goal.
            </p>

        </div>


        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px;">

            <div style="background: #1e293b; padding: 30px; border-radius: 12px; text-align: center;">
                <h3>Ravien Ongkiko (Pogi)</h3>
                <p style="color: #93c5fd; margin-top: 8px;">
                    Managing Director
                </p>
            </div>

            <div style="background: #1e293b; padding: 30px; border-radius: 12px; text-align: center;">
                <h3>Drake Natividad</h3>
                <p style="color: #93c5fd; margin-top: 8px;">
                    Lead Developer
                </p>
            </div>

            <div style="background: #1e293b; padding: 30px; border-radius: 12px; text-align: center;">
                <h3>Benjamin Abadier</h3>
                <p style="color: #93c5fd; margin-top: 8px;">
                    UI/UX Designer
                </p>
            </div>

        </div>

    </div>
</section>

@endsection