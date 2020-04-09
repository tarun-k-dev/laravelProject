<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ManTarYudh Hospital</title>
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> <img src="{{asset('img/favicon.png')}}" alt=""> ManTarYudh Hospital</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/doctor">Doctors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact</a>
                                </li>

                                @if (Route::has('login'))
                                        @auth
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/home') }}">Dr {{ Auth::user()->name }}'s Dashboard</a>
                                        </li>
                                        @else
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                                        </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                                </li>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </ul>
                        </div>
                        <!-- <a class="btn_2 d-none d-lg-block" href="#">HOT LINE- 108</a> -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>We are here for your care</h5>
                            <h1>Best Care &
                                Best Doctors</h1>
                            <p>ManTarYudh Hospital has emerged as Asia’s foremost integrated healthcare services provider and
                                 has a robust presence across the healthcare ecosystem, including Hospitals, Pharmacies, Primary Care
                                  & Diagnostic Clinics and several retail health models. </p>
                            <a href="#appointment" class="btn_2">Make an appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="{{asset('img/banner_img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->


    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="{{asset('img/icon/feature_1.svg')}}" alt=""></span>
                            <h4>Ward Facilities</h4>
                            <p> One of the distinguishing factors that marks hospitals unique, with respect to other health facilities;
                                such as, clinics and care centers is that they provide both inpatient and outpatient care provisions.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="{{asset('img/icon/feature_2.svg')}}" alt=""></span>
                            <h4>Nursing</h4>
                            <p>Nurses employed by hospitals function as connecting bridges between doctors and the patients they treat.
                                Nurses look after the overall well being of patients.
                                They ensure that all health related instructions given by doctors are implemented and followed by patients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="{{asset('img/service.png')}}" alt="">
                        </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="{{asset('img/icon/feature_1.svg')}}" alt=""></span>
                            <h4>Out Patient Department(OPD)</h4>
                            <p>OPD (Outpatient Department) as one of the core services rendered. A set of skilled doctors along with technicians must be available,
                                 who can assist patients in preliminary diagnosis and related treatments.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="{{asset('img/icon/feature_2.svg')}}" alt=""></span>
                            <h4>Intensive Care Unit(ICU)</h4>
                            <p>ICU facilities for patients suffering from adverse health conditions.
                                 ICUs need to be equipped with modern technical apparatus and skilled professionals who can render best services.
                                  Depending on the type of hospital and services they focus on, there can be different types of ICUs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part end-->


    <!--::regervation_part start::-->
    <section id="appointment" class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form action="{{asset('php/insert.php')}}" method="POST">
                            <h2>Make an Appointment</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" id="inputPassword4"
                                        placeholder="Email address" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="service" class="form-control" id="Select" required>
                                        <option selected hidden value="">Select service</option>
                                        <option value="Neurologist">Neurologist</option>
                                        <option value="Gynecologist">Gynecologist</option>
                                        <option value="Urologist">Urologist</option>
                                        <option value="Gastroenterologist">Gastroenterologist</option>
                                        <option value="Cardiologist">Cardiologist</option>
                                    </select>
                                </div>
                                <div class="form-group time_icon col-md-6" required>
                                    <select name="time" class="form-control" id="Select2">
                                        <option value="" hidden selected>Time</option>
                                        <option value="8 AM TO 10AM">8 AM TO 10AM</option>
                                        <option value="10 AM TO 12PM">10 AM TO 12PM</option>
                                        <option value="12PM TO 2PM">12PM TO 2PM</option>
                                        <option value="2PM TO 4PM">2PM TO 4PM</option>
                                        <option value="4PM TO 6PM">4PM TO 6PM</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="note" class="form-control" id="Textarea" rows="4"
                                        placeholder="Your Note " required></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <button type="submit" class="button button-contactForm btn_1">Make an Appointment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                        <img src="{{asset('img/reservation.png')}}" alt="" class="reservation_img_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->


    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"><b>ManTarYudh Hospital</b></a>
                        <p>We are here for your care. </p>
                        <div class="social_logo">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Doctors</a></li>
                            <li><a href="#">Log In</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                        <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                          </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- owl carousel js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <!-- contact js -->
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
