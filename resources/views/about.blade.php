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
        .aboutmain_sec h2{
            font-size: 50px;
            font-weight: 700;
            margin-bottom:15px;
        }
        p{
            font-size: 16px !important;
        }
        .aboutmain_sec .aboutsideimg{
            height: 600px;
        }
        .aboutsecond_sec{
            padding: 80px 0 40px 0;
            background-color: #fff;
        }
        .aboutsecond_sec .profile-widget{
            background-color: #f3f1ee;
            border-radius: 20px;
        }
        .aboutsecond_sec .aboutsideimg{
            border-radius: 15px;
        }
        .aboutsecond_sec .section-header{
            margin-bottom: 30px !important;
        }
        .aboutthird_sec{
            padding: 80px 0 40px 0;
        }
        .aboutthird_sec .profile-widget{
            border-radius: 20px;
        }
        .aboutthird_sec .aboutsideimg{
            border-radius: 15px;
        }
        .aboutthird_sec .section-header{
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
                            <h2>About Us!</h2>
                            <h3 style="font-size: 34px; font-weight: 600;">This feels good,</h3>
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
        <div class="container">
            <div class="row">
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
                <div class="col-lg-6 d-flex align-items-center">
                    <div>

                        <div class="section-header">
                            {{-- <p>Our Services</p> --}}
                            <h2 style="font-size: 40px; font-weight: 700; margin-bottom:15px;">
                                Nearly 90% of men don't seek help unless they have a serious problem.
                            </h2>
                            {{-- <h3 style="font-size: 34px; font-weight: 600;">This feels good,</h3> --}}
                        </div>
                        <div class="about-content">
                            <p>
                                This stat sucks. It’s actually quite scary. We’re here to fix it as best we can.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Popular Section -->
    <!-- Popular Section -->
    <section class="section aboutthird_sec">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 d-flex align-items-center">
                    <div>

                        <div class="section-header">
                            {{-- <p>Our Services</p> --}}
                            <h2 style="font-size: 40px; font-weight: 700; margin-bottom:15px;">
                                What we believe
                            </h2>
                            {{-- <h3 style="font-size: 34px; font-weight: 600;">This feels good,</h3> --}}
                        </div>
                        <div class="about-content">
                            <p>
                                The first step is to open up and talk - no issue too embarrassing, no subject too taboo. Then to embrace holistic solutions, avoiding quick fixes. Looking after yourself from top to bottom, inside and out.
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
        <div class="container">
            <div class="row">
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
                <div class="col-lg-6 d-flex align-items-center">
                    <div>

                        <div class="section-header">
                            {{-- <p>Our Services</p> --}}
                            <h2 style="font-size: 40px; font-weight: 700; margin-bottom:15px;">
                                From meh to YEAH!
                            </h2>
                            {{-- <h3 style="font-size: 34px; font-weight: 600;">This feels good,</h3> --}}
                        </div>
                        <div class="about-content">
                            <p>
                                We’re no strangers to the pitfalls of ignoring your well-being.
                            </p>
                            <p>
                                We started Manual because we spent years sweeping everything under the carpet until everything piled up and the carpet wore out.
                            </p>
                            <p>
                                Overweight, anxious, unable to sleep, run down and fatigued are just some of the problems we’d stacked up between us. Not a pretty sight.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Popular Section -->
@endsection
