@php
    $pagename = 'Home';
@endphp
@extends('layout.layout')

@section('title')
    {{ $pagename }}
@endsection

@section('head')
    <style>
        .home_main_heading h1 {
            font-size: 55px !important;
            font-weight: bold
        }

        .belowheadinghome {
            position: absolute;
            margin-left: -12%;
        }

        .belowheadinghome img {
            width: 200px;
            margin-bottom: -55px;
        }

        .doc-img img {
            height: 350px
        }

        .doc-img h3 {
            position: absolute;
            top: 0;
            padding: 15px 10px 0 10px;
            font-weight: 600;
        }

        /* .resultcard{
                    border: 1px solid #15558d
                } */
        .resultcard img {
            height: 400px;
            margin: 0;
            padding: 0
        }

        .compairimg1 {
            margin: 0;
            padding: 0;
            border-right: 1px solid #fff
        }

        .compairimg2 {
            margin: 0;
            padding: 0;
        }

        .clients_review {
            background-color: #f8f9fa;
        }

        .clinic_fratures {
            background-color: #fff;
        }

        .results {
            background-color: #f3f1ee;
        }

        .results .slick-slide {
            transform: scale(.8);
            opacity: .6
        }

        .results .slick-current {
            transform: scale(1.2);
            opacity: 1;
        }


        @media only screen and (max-width: 768px) {

            .home_main_heading h1 {
                font-size: 40px !important;
            }
        }
    </style>
@endsection

@section('maincontent')
    <!-- Home Banner -->
    <section class="section section-search">
        <div class="container">
            <div class="">
                <div class="banner-header home_main_heading">
                    <h1>Men’s health.
                        <br> The way it should be!
                        <span type="underline" class="belowheadinghome"><img alt="scribble-underline"
                                srcset="https://cdn.manual.co/rebrand/shared/images/uncategorized/scribble_underline.svg 640w, https://cdn.manual.co/rebrand/shared/images/uncategorized/scribble_underline.svg 750w, https://cdn.manual.co/rebrand/shared/images/uncategorized/scribble_underline.svg 828w, https://cdn.manual.co/rebrand/shared/images/uncategorized/scribble_underline.svg 1080w, https://cdn.manual.co/rebrand/shared/images/uncategorized/scribble_underline.svg 1200w, https://cdn.manual.co/rebrand/shared/images/uncategorized/scribble_underline.svg 1920w, https://cdn.manual.co/rebrand/shared/images/uncategorized/scribble_underline.svg 2048w, https://cdn.manual.co/rebrand/shared/images/uncategorized/scribble_underline.svg 3840w"
                                src="https://cdn.manual.co/rebrand/shared/images/uncategorized/scribble_underline.svg"
                                decoding="async" data-nimg="future-fill" loading="lazy"></span>
                    </h1>
                    {{-- <p>Discover the best doctors, clinic & hospital the city nearest to you.</p> --}}
                </div>



            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- Popular Section -->
    <section class="section section-doctor">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="section-header ">
                        <p>Our Services</p>
                        <h2 style="font-size: 40px; font-weight: 700;">Choose what to solve</h2>
                    </div>
                    {{-- <div class="about-content">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum.</p>
                        <p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'
                            will uncover many web sites still in their infancy. Various versions have evolved over the
                            years, sometimes</p>
                        <a href="javascript:;">Read More..</a>
                    </div> --}}
                </div>
                <div class="col-lg-8">
                    <div class="doctor-slider slider">

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="doctor-profile.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-01.jpg">
                                    <h3>Hair Transplant</h3>
                                </a>
                                {{-- <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a> --}}
                            </div>

                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="doctor-profile.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-02.jpg">
                                    <h3>Laiser Hair Removal</h3>
                                </a>
                                {{-- <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a> --}}
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="doctor-profile.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
                                    <h3>Weight Loss</h3>
                                </a>
                                {{-- <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a> --}}
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="doctor-profile.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
                                    <h3>Face Facial</h3>
                                </a>
                                {{-- <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a> --}}
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Popular Section -->

    <!-- Availabe Features -->
    <section class="section section-features clinic_fratures">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 features-img">
                    <img src="assets/img/features/feature.png" class="img-fluid" alt="Feature">
                </div>
                <div class="col-md-7">
                    <div class="section-header">
                        <h2 class="mt-2">Availabe Features in Our Clinic</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. </p>
                    </div>
                    <div class="features-slider slider">
                        <!-- Slider Item -->
                        <div class="feature-item text-center">
                            <img src="assets/img/features/feature-01.jpg" class="img-fluid" alt="Feature">
                            <p>Patient Ward</p>
                        </div>
                        <!-- /Slider Item -->

                        <!-- Slider Item -->
                        <div class="feature-item text-center">
                            <img src="assets/img/features/feature-02.jpg" class="img-fluid" alt="Feature">
                            <p>Test Room</p>
                        </div>
                        <!-- /Slider Item -->

                        <!-- Slider Item -->
                        <div class="feature-item text-center">
                            <img src="assets/img/features/feature-03.jpg" class="img-fluid" alt="Feature">
                            <p>ICU</p>
                        </div>
                        <!-- /Slider Item -->

                        <!-- Slider Item -->
                        <div class="feature-item text-center">
                            <img src="assets/img/features/feature-04.jpg" class="img-fluid" alt="Feature">
                            <p>Laboratory</p>
                        </div>
                        <!-- /Slider Item -->

                        <!-- Slider Item -->
                        <div class="feature-item text-center">
                            <img src="assets/img/features/feature-05.jpg" class="img-fluid" alt="Feature">
                            <p>Operation</p>
                        </div>
                        <!-- /Slider Item -->

                        <!-- Slider Item -->
                        <div class="feature-item text-center">
                            <img src="assets/img/features/feature-06.jpg" class="img-fluid" alt="Feature">
                            <p>Medical</p>
                        </div>
                        <!-- /Slider Item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Availabe Features -->

    <!-- Clinic and Specialities -->
    <section class="section section-specialities clients_review">
        <div class="container-fluid">
            <div class="section-header text-center">
                <h2>See what our clients say about us!</h2>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="doctor-slider slider">

                        <!-- Doctor Widget -->
                        <div class="profile-widget pt-4 pb-4" style="width: 100%; display: inline-block;">
                            <div class="d-flex justify-content-center w-100">
                                <div class="avatar avatar-xxl">
                                    <img class="avatar-img rounded-circle" alt="User Image"
                                        src="assets/img/patients/patient8.jpg">
                                </div>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    Ruby Perrin
                                </h3>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p class="speciality text-justify">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation. Curabitur non nulla sit amet nisl tempus
                                </p>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->
                        <!-- Doctor Widget -->
                        <div class="profile-widget pt-4 pb-4" style="width: 100%; display: inline-block;">
                            <div class="d-flex justify-content-center w-100">
                                <div class="avatar avatar-xxl">
                                    <img class="avatar-img rounded-circle" alt="User Image"
                                        src="assets/img/patients/patient8.jpg">
                                </div>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    Ruby Perrin
                                </h3>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p class="speciality text-justify">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation. Curabitur non nulla sit amet nisl tempus
                                </p>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->
                        <!-- Doctor Widget -->
                        <div class="profile-widget pt-4 pb-4" style="width: 100%; display: inline-block;">
                            <div class="d-flex justify-content-center w-100">
                                <div class="avatar avatar-xxl">
                                    <img class="avatar-img rounded-circle" alt="User Image"
                                        src="assets/img/patients/patient8.jpg">
                                </div>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    Ruby Perrin
                                </h3>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p class="speciality text-justify">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation. Curabitur non nulla sit amet nisl tempus
                                </p>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->
                        <!-- Doctor Widget -->
                        <div class="profile-widget pt-4 pb-4" style="width: 100%; display: inline-block;">
                            <div class="d-flex justify-content-center w-100">
                                <div class="avatar avatar-xxl">
                                    <img class="avatar-img rounded-circle" alt="User Image"
                                        src="assets/img/patients/patient8.jpg">
                                </div>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    Ruby Perrin
                                </h3>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p class="speciality text-justify">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation. Curabitur non nulla sit amet nisl tempus
                                </p>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->
                        <!-- Doctor Widget -->
                        <div class="profile-widget pt-4 pb-4" style="width: 100%; display: inline-block;">
                            <div class="d-flex justify-content-center w-100">
                                <div class="avatar avatar-xxl">
                                    <img class="avatar-img rounded-circle" alt="User Image"
                                        src="assets/img/patients/patient8.jpg">
                                </div>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    Ruby Perrin
                                </h3>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p class="speciality text-justify">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation. Curabitur non nulla sit amet nisl tempus
                                </p>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Clinic and Specialities -->

    <!-- Availabe Features -->
    <section class="section section-features results">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h2 class="mt-2">Results from Our Clinic</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. </p>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-10">
                            <div class="features-slider slider">
                                <!-- Slider Item -->
                                <div class="card resultcard">
                                    <div class="row">
                                        <div class="col-md-6 compairimg1">
                                            <img src="assets/img/features/feature-01.jpg" class="img-fluid"
                                                alt="Feature">
                                        </div>
                                        <div class="col-md-6 compairimg2">
                                            <img src="assets/img/features/feature-02.jpg" class="img-fluid"
                                                alt="Feature">
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slider Item -->
                                <!-- Slider Item -->
                                <div class="card resultcard">
                                    <div class="row">
                                        <div class="col-md-6 compairimg1">
                                            <img src="assets/img/features/feature-01.jpg" class="img-fluid"
                                                alt="Feature">
                                        </div>
                                        <div class="col-md-6 compairimg2">
                                            <img src="assets/img/features/feature-02.jpg" class="img-fluid"
                                                alt="Feature">
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slider Item -->
                                <!-- Slider Item -->
                                <div class="card resultcard">
                                    <div class="row">
                                        <div class="col-md-6 compairimg1">
                                            <img src="assets/img/features/feature-01.jpg" class="img-fluid"
                                                alt="Feature">
                                        </div>
                                        <div class="col-md-6 compairimg2">
                                            <img src="assets/img/features/feature-02.jpg" class="img-fluid"
                                                alt="Feature">
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slider Item -->
                                <!-- Slider Item -->
                                <div class="card resultcard">
                                    <div class="row">
                                        <div class="col-md-6 compairimg1">
                                            <img src="assets/img/features/feature-01.jpg" class="img-fluid"
                                                alt="Feature">
                                        </div>
                                        <div class="col-md-6 compairimg2">
                                            <img src="assets/img/features/feature-02.jpg" class="img-fluid"
                                                alt="Feature">
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slider Item -->
                                <!-- Slider Item -->
                                <div class="card resultcard">
                                    <div class="row">
                                        <div class="col-md-6 compairimg1">
                                            <img src="assets/img/features/feature-01.jpg" class="img-fluid"
                                                alt="Feature">
                                        </div>
                                        <div class="col-md-6 compairimg2">
                                            <img src="assets/img/features/feature-02.jpg" class="img-fluid"
                                                alt="Feature">
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slider Item -->
                                <!-- Slider Item -->
                                <div class="card resultcard">
                                    <div class="row">
                                        <div class="col-md-6 compairimg1">
                                            <img src="assets/img/features/feature-01.jpg" class="img-fluid"
                                                alt="Feature">
                                        </div>
                                        <div class="col-md-6 compairimg2">
                                            <img src="assets/img/features/feature-02.jpg" class="img-fluid"
                                                alt="Feature">
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slider Item -->


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Availabe Features -->
@endsection
