@extends('layouts.frontend.app',[
    'title' => 'Artikel',
])
@section('content')
<section class="blog-area blog-page section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="blog-catagories mb-70 d-flex flex-wrap justify-content-between">

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url({{ asset('templates/frontend/clever') }}/img/bg-img/bc1.jpg);">
                        <a href="#">
                            <h6>Art &amp; Design</h6>
                        </a>
                    </div>

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url({{ asset('templates/frontend/clever') }}/img/bg-img/bc2.jpg);">
                        <a href="#">
                            <h6>Business</h6>
                        </a>
                    </div>

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url({{ asset('templates/frontend/clever') }}/img/bg-img/bc3.jpg);">
                        <a href="#">
                            <h6>IT &amp; Software</h6>
                        </a>
                    </div>

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url({{ asset('templates/frontend/clever') }}/img/bg-img/bc4.jpg);">
                        <a href="#">
                            <h6>Languages</h6>
                        </a>
                    </div>

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url({{ asset('templates/frontend/clever') }}/img/bg-img/bc5.jpg);">
                        <a href="#">
                            <h6>Programming Languages</h6>
                        </a>
                    </div>

                    <!-- Single Catagories -->
                    <div class="single-catagories bg-img" style="background-image: url({{ asset('templates/frontend/clever') }}/img/bg-img/bc6.jpg);">
                        <a href="#">
                            <h6>psychology</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Blog Area -->
            <div class="col-12 col-lg-6">
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
            <div class="col-12 col-lg-6">
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

            <!-- Single Blog Area -->
            <div class="col-12 col-lg-6">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                    <img src="{{ asset('templates/frontend/clever') }}/img/blog-img/3.jpg" alt="">
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
            <div class="col-12 col-lg-6">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <img src="{{ asset('templates/frontend/clever') }}/img/blog-img/4.jpg" alt="">
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
            <div class="col-12 col-lg-6">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                    <img src="{{ asset('templates/frontend/clever') }}/img/blog-img/5.jpg" alt="">
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
            <div class="col-12 col-lg-6">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <img src="{{ asset('templates/frontend/clever') }}/img/blog-img/6.jpg" alt="">
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

        <div class="row">
            <div class="col-12">
                <div class="load-more text-center mt-100 wow fadeInUp" data-wow-delay="1000ms">
                    <a href="#" class="btn clever-btn btn-2">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
@stop