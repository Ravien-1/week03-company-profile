@extends('layouts.app')

@section('title', 'Contact - Nexora Solutions')

@section('content')

<section style="background: #eff6ff; padding: 80px 0; text-align: center;">
    <div class="container">

        <p style="color: #2563eb; font-weight: bold; margin-bottom: 12px;">
            GET IN TOUCH
        </p>

        <h1 style="font-size: 48px; margin-bottom: 15px;">
            Let's Start a Conversation
        </h1>

        <p style="color: #64748b; max-width: 700px; margin: auto; font-size: 18px;">
            Have a project, question, or idea? Send us a message and
            our team will be happy to hear from you.
        </p>

    </div>
</section>


<section class="section">
    <div class="container">

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">

            <!-- CONTACT INFORMATION -->
            <div>

                <h2 style="font-size: 32px; margin-bottom: 25px;">
                    Contact Information
                </h2>

                <div style="margin-bottom: 25px;">
                    <h3>📍 Address</h3>
                    <p style="color: #64748b; margin-top: 8px;">
                        123 Innovation Avenue, Santa Rosa, Laguna, Philippines
                    </p>
                </div>

                <div style="margin-bottom: 25px;">
                    <h3>✉️ Email</h3>
                    <p style="color: #64748b; margin-top: 8px;">
                        hello@nexora.test
                    </p>
                </div>

                <div style="margin-bottom: 25px;">
                    <h3>📞 Phone</h3>
                    <p style="color: #64748b; margin-top: 8px;">
                        +63 912 345 6789
                    </p>
                </div>

                <div>
                    <h3>🌐 Social Media</h3>

                    <p style="margin-top: 10px;">
                        <a href="#" style="color: #2563eb;">Facebook</a>
                        &nbsp; | &nbsp;
                        <a href="#" style="color: #2563eb;">LinkedIn</a>
                        &nbsp; | &nbsp;
                        <a href="#" style="color: #2563eb;">Instagram</a>
                    </p>
                </div>

            </div>


            <!-- CONTACT FORM -->
            <div style="background: white; padding: 35px; border-radius: 14px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">

                <h2 style="font-size: 30px; margin-bottom: 25px;">
                    Send Us a Message
                </h2>

                <form>

                    <div style="margin-bottom: 18px;">
                        <label for="name" style="display: block; margin-bottom: 8px; font-weight: bold;">
                            Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            placeholder="Enter your name"
                            style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 8px;"
                        >
                    </div>


                    <div style="margin-bottom: 18px;">
                        <label for="email" style="display: block; margin-bottom: 8px; font-weight: bold;">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            placeholder="Enter your email"
                            style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 8px;"
                        >
                    </div>


                    <div style="margin-bottom: 18px;">
                        <label for="subject" style="display: block; margin-bottom: 8px; font-weight: bold;">
                            Subject
                        </label>

                        <input
                            type="text"
                            id="subject"
                            placeholder="What can we help you with?"
                            style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 8px;"
                        >
                    </div>


                    <div style="margin-bottom: 22px;">
                        <label for="message" style="display: block; margin-bottom: 8px; font-weight: bold;">
                            Message
                        </label>

                        <textarea
                            id="message"
                            rows="5"
                            placeholder="Write your message here..."
                            style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 8px; resize: vertical;"
                        ></textarea>
                    </div>


                    <button
                        type="button"
                        class="btn"
                        style="border: none; cursor: pointer;"
                    >
                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </div>
</section>


<section style="background: #e0f2fe; padding: 60px 0;">
    <div class="container" style="text-align: center;">

        <h2 style="font-size: 32px; margin-bottom: 15px;">
            We're Ready to Help
        </h2>

        <p style="color: #64748b;">
            Let's discuss how technology can help your organization grow.
        </p>

    </div>
</section>

@endsection