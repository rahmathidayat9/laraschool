@extends('layouts.frontend.app',[
    'title' => 'Home',
])
@section('content')
<!-- ##### Hero Area Start ##### -->
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url({{ asset('templates/frontend/clever') }}/img/bg-img/bg1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- Hero Content -->
                <div class="hero-content text-center">
                    <h2>Let's Study Together</h2>
                    <a href="#" class="btn clever-btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Cool Facts Area Start ##### -->
<section class="cool-facts-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="250ms">
                    <div class="icon">
                        <img src="{{ asset('templates/frontend/clever') }}/img/core-img/docs.png" alt="">
                    </div>
                    <h2><span class="counter">1912</span></h2>
                    <h5>Success Stories</h5>
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <div class="icon">
                        <img src="{{ asset('templates/frontend/clever') }}/img/core-img/star.png" alt="">
                    </div>
                    <h2><span class="counter">123</span></h2>
                    <h5>Dedicated Tutors</h5>
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="750ms">
                    <div class="icon">
                        <img src="{{ asset('templates/frontend/clever') }}/img/core-img/events.png" alt="">
                    </div>
                    <h2><span class="counter">89</span></h2>
                    <h5>Scheduled Events</h5>
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
                    <div class="icon">
                        <img src="{{ asset('templates/frontend/clever') }}/img/core-img/earth.png" alt="">
                    </div>
                    <h2><span class="counter">56</span></h2>
                    <h5>Available Courses</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Cool Facts Area End ##### -->

<!-- ##### Popular Courses Start ##### -->
<section class="popular-courses-area section-padding-100-0" style="background-image: url({{ asset('templates/frontend/clever') }}/img/core-img/texture.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Popular Online Courses</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Popular Course -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                    <img src="{{ asset('templates/frontend/clever') }}/img/bg-img/c1.jpg" alt="">
                    <!-- Course Content -->
                    <div class="course-content">
                        <h4>English Grammar</h4>
                        <div class="meta d-flex align-items-center">
                            <a href="#">Sarah Parker</a>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            <a href="#">Art &amp; Design</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                    </div>
                    <!-- Seat Rating Fee -->
                    <div class="seat-rating-fee d-flex justify-content-between">
                        <div class="seat-rating h-100 d-flex align-items-center">
                            <div class="seat">
                                <i class="fa fa-user" aria-hidden="true"></i> 10
                            </div>
                            <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i> 4.5
                            </div>
                        </div>
                        <div class="course-fee h-100">
                            <a href="#" class="free">Free</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Popular Course -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <img src="{{ asset('templates/frontend/clever') }}/img/bg-img/c2.jpg" alt="">
                    <!-- Course Content -->
                    <div class="course-content">
                        <h4>Vocabulary</h4>
                        <div class="meta d-flex align-items-center">
                            <a href="#">Sarah Parker</a>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            <a href="#">Art &amp; Design</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                    </div>
                    <!-- Seat Rating Fee -->
                    <div class="seat-rating-fee d-flex justify-content-between">
                        <div class="seat-rating h-100 d-flex align-items-center">
                            <div class="seat">
                                <i class="fa fa-user" aria-hidden="true"></i> 10
                            </div>
                            <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i> 4.5
                            </div>
                        </div>
                        <div class="course-fee h-100">
                            <a href="#">$20</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Popular Course -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                    <img src="{{ asset('templates/frontend/clever') }}/img/bg-img/c3.jpg" alt="">
                    <!-- Course Content -->
                    <div class="course-content">
                        <h4>Expository writing</h4>
                        <div class="meta d-flex align-items-center">
                            <a href="#">Sarah Parker</a>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            <a href="#">Art &amp; Design</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                    </div>
                    <!-- Seat Rating Fee -->
                    <div class="seat-rating-fee d-flex justify-content-between">
                        <div class="seat-rating h-100 d-flex align-items-center">
                            <div class="seat">
                                <i class="fa fa-user" aria-hidden="true"></i> 10
                            </div>
                            <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i> 4.5
                            </div>
                        </div>
                        <div class="course-fee h-100">
                            <a href="#">$45</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Popular Courses End ##### -->

<!-- ##### Best Tutors Start ##### -->
<section class="best-tutors-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>The Best Tutors in Town</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">

                    <!-- Single Tutors Slide -->
                    <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            <img src="{{ asset('templates/frontend/clever') }}/img/bg-img/t1.png" alt="">
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>Alex Parker</h5>
                            <span>Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Tutors Slide -->
                    <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            <img src="{{ asset('templates/frontend/clever') }}/img/bg-img/t2.png" alt="">
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>Alex Parker</h5>
                            <span>Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Tutors Slide -->
                    <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            <img src="{{ asset('templates/frontend/clever') }}/img/bg-img/t3.png" alt="">
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>Alex Parker</h5>
                            <span>Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Tutors Slide -->
                    <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            <img src="{{ asset('templates/frontend/clever') }}/img/bg-img/t4.png" alt="">
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>Alex Parker</h5>
                            <span>Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Tutors Slide -->
                    <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            <img src="{{ asset('templates/frontend/clever') }}/img/bg-img/t5.png" alt="">
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>Alex Parker</h5>
                            <span>Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Best Tutors End ##### -->

<!-- ##### Register Now Start ##### -->
<section class="register-now section-padding-100-0 d-flex justify-content-between align-items-center" style="background-image: url({{ asset('templates/frontend/clever') }}/img/core-img/texture.png);">
    <!-- Register Contact Form -->
    <div class="register-contact-form mb-100 wow fadeInUp" data-wow-delay="250ms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="forms">
                        <h4>Courses For Free</h4>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="site" placeholder="Site">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn clever-btn w-100">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Now Countdown -->
    <div class="register-now-countdown mb-100 wow fadeInUp" data-wow-delay="500ms">
        <h3>Register Now</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae. Donec bibendum tortor sed mi faucibus vehicula. Sed erat lorem</p>
        <!-- Register Countdown -->
        <div class="register-countdown">
            <div class="events-cd d-flex flex-wrap" data-countdown="2019/03/01"></div>
        </div>
    </div>
</section>
<!-- ##### Register Now End ##### -->

<!-- ##### Upcoming Events Start ##### -->
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Upcoming events</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Upcoming Events -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{ asset('templates/frontend/clever') }}/img/bg-img/e1.jpg" alt="">
                        <h6 class="event-date">August 26</h6>
                        <h4 class="event-title">Networking Day</h4>
                    </div>
                    <!-- Date & Fee -->
                    <div class="date-fee d-flex justify-content-between">
                        <div class="date">
                            <p><i class="fa fa-clock"></i> August 26 @ 9:00 am</p>
                        </div>
                        <div class="events-fee">
                            <a href="#">$45</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Upcoming Events -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="500ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{ asset('templates/frontend/clever') }}/img/bg-img/e2.jpg" alt="">
                        <h6 class="event-date">August 7</h6>
                        <h4 class="event-title">Open Doors Day</h4>
                    </div>
                    <!-- Date & Fee -->
                    <div class="date-fee d-flex justify-content-between">
                        <div class="date">
                            <p><i class="fa fa-clock"></i> August 7 @ 9:00 am</p>
                        </div>
                        <div class="events-fee">
                            <a href="#" class="free">Free</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Upcoming Events -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="750ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{ asset('templates/frontend/clever') }}/img/bg-img/e3.jpg" alt="">
                        <h6 class="event-date">August 3</h6>
                        <h4 class="event-title">Creative Leadership</h4>
                    </div>
                    <!-- Date & Fee -->
                    <div class="date-fee d-flex justify-content-between">
                        <div class="date">
                            <p><i class="fa fa-clock"></i> August 3 @ 9:00 am</p>
                        </div>
                        <div class="events-fee">
                            <a href="#">$45</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Upcoming Events End ##### -->

<!-- ##### Blog Area Start ##### -->
<section class="blog-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>From Our Blog</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Blog Area -->
            <div class="col-12 col-md-6">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                    <img src="{{ asset('templates/frontend/clever') }}/img/blog-img/1.jpg" alt="">
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <a href="#" class="blog-headline">
                            <h4>English Grammer</h4>
                        </a>
                        <div class="meta d-flex align-items-center">
                            <a href="#">Sarah Parker</a>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            <a href="#">Art &amp; Design</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                    </div>
                </div>
            </div>

            <!-- Single Blog Area -->
            <div class="col-12 col-md-6">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <img src="{{ asset('templates/frontend/clever') }}/img/blog-img/2.jpg" alt="">
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <a href="#" class="blog-headline">
                            <h4>English Grammer</h4>
                        </a>
                        <div class="meta d-flex align-items-center">
                            <a href="#">Sarah Parker</a>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            <a href="#">Art &amp; Design</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop