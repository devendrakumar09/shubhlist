@extends('Layout.app')
@section('css')
    <link rel="stylesheet" href="{{asset('Template/css/about-us.css')}}" type="text/css">
@endsection
@section('main')
<div class="container">
    <!-------------------------------breadcrumb------------------------------------>
    <div class="c ">
        <div class="container ">
            <div class="nb-page-title-wrap" style="background-image: url({{asset('Template/img/cropped-bg_title.jpg')}})">
                <div class="container layout-content">
                    <h1>Contact Us</h1>
                    <nav class="woocommerce-breadcrumb">
                        <a href="/">Home</a>&nbsp;/&nbsp;Contact Us
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------breadcrumb------------------------------------>

    <!-------------------------------Map------------------------------------>
    <div class="map-df">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.9495236433704!2d-118.40712828562852!3d34.070808180600864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bc08794c86a1%3A0x20650f3dea85178a!2s102580%20Santa%20Monica%20Blvd%2C%20Beverly%20Hills%2C%20CA%2090210%2C%20USA!5e0!3m2!1sen!2sin!4v1623309912950!5m2!1sen!2sin"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
    </div>
    <!-------------------------------Map------------------------------------>


    <!-------------------------------Contact Form------------------------------------>
    <div class="contact-form">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="contact-field">
                        <h3>CONTACT US </h3>
                        <form action="{{route('contact-form')}}" method="POST" >
                            @csrf
                            <input type="text" placeholder="Full Name" name="name">
                            <input type="text" placeholder="Email" name="email">
                            <input type="text" placeholder="Office/Mobile" name="number">
                            <textarea placeholder="Tell Us More" name="msg"></textarea>
                            <button type="submit"> Send Message </button>
                        </form>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="cont-side">

                        <div class="whole">
                            <div class="box">
                                <div class="box1">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3>SAY HELLO</h3>
                                <p>Adelaide@demo.com</p>
                                <p>Adelaide123@demo.com</p>
                            </div>
                        </div>

                        <div class="whole">
                            <div class="box">
                                <div class="box1">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3>CALL ME</h3>
                                <p>+0 (899) 123-456789</p>
                                <p>+0 (899) 123-456789</p>
                            </div>
                        </div>

                        <div class="whole">
                            <div class="box">
                                <div class="box1">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3>ADDRESS</h3>
                                <p>121 King Street, Melbourne Victoria
                                    3000 Australia</p>
                            </div>
                        </div>

                        <div class="whole">
                            <div class="box">
                                <div class="box1">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3>WORKING ON</h3>
                                <p>Mon – Fri: 9:00AM- 6:00PM</p>
                                <p>Sat-Sun: Off</p>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-------------------------------Contact Form------------------------------------>
</div>
@endsection
