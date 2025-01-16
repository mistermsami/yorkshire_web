@php
    $pagename = 'About Us';
@endphp
@extends('layout.layout')

@section('title')
    {{ $pagename }}
@endsection

@section('head')
    <style>
        .aboutmain_sec {
            padding-top: 20px;
            background-color: #f3f1ee
        }

        .aboutmain_sec h2 {
            font-size: 50px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px !important;
        }

        .aboutmain_sec .aboutsideimg {
            height: 600px;
        }

        .aboutsecond_sec {
            padding: 80px 0 40px 0;
            background-color: #fff;
        }

        .aboutsecond_sec .profile-widget {
            background-color: #f3f1ee;
            border-radius: 20px;
        }

        .aboutsecond_sec .aboutsideimg {
            border-radius: 15px;
        }

        .aboutsecond_sec .section-header {
            margin-bottom: 30px !important;
        }

        .aboutthird_sec {
            padding: 80px 0 40px 0;
        }

        .aboutthird_sec .profile-widget {
            border-radius: 20px;
        }

        .aboutthird_sec .aboutsideimg {
            border-radius: 15px;
        }

        .aboutthird_sec .section-header {
            margin-bottom: 30px !important;
        }
    </style>
@endsection

@section('maincontent')
    <!-- Popular Section -->
    <section class="section aboutmain_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div>

                        <div class="section-header ">
                            {{-- <p>Our Services</p> --}}
                            <h2>Contact Us</h2>
                            <h3 style="font-size: 34px; font-weight: 600;">Feel Free to contact Us!</h3>
                        </div>
                        <div class="about-content">
                            <p><b>We’re challenging the outdated notion that real men shrug their shoulders and carry
                                    on.</b></p>
                            <p>
                                By empowering men with all the information and choices they need to proactively own their
                                wellbeing, we can turn a corner. We’re here to be your own personal manual. A guide to
                                owning your health and happiness. Giving you all the tools you need to be good to you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Doctor Widget -->
                    <div class="profile-widget">
                        <div class="doc-img aboutsideimg">
                            <img class="img-fluid" alt="User Image" src="assets/img/aboutus.png">
                            {{-- <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a> --}}
                        </div>

                    </div>
                    <!-- /Doctor Widget -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Popular Section -->

    <!-- Popular Section -->
    <section class="section aboutsecond_sec">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <!-- Login Tab Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>Contact <span>Form</span></h3>
                                </div>
                                <form action="https://dreamguys.co.in/demo/doccure/index.html">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">NAme</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="email" class="form-control floating">
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Subject</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <textarea name="message" rows="5" id="" class="form-control floating" style="height: 100px"></textarea>
                                        <label class="focus-label">Message</label>
                                    </div>
                                    <div style="margin-top: 100px">

                                        <button class="btn btn-primary btn-block btn-lg login-btn"
                                            type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Login Tab Content -->

                </div>
            </div>

        </div>
    </section>
    <!-- /Popular Section -->
    <!-- Popular Section -->
    <section class="section aboutsecond_sec" style="padding: 0; margin: 0;">
        <div class="">

            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9582106.12236644!2d-15.012343587457918!3d54.10244278649341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2s!4v1736983464311!5m2!1sen!2s" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>

        </div>
    </section>
    <!-- /Popular Section -->
@endsection
