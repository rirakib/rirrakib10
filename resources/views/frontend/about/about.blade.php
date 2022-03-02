@extends('layout.frontend')
@section('frontend_content')
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img src="{{asset('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <h3>Web Developer &amp; UI/UX Designer</h3>
                    <p class="fst-italic">
                        Asslamualaykum, I'm Md. Rakibul Islam. I'm a fullstack developer.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> 28 December 1999</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Website:</strong> www.rirrakib10.com</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> +088 01826 549148</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> Rangpur, Bangladesh</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> 23</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong> Honours (2018-2019)</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>PhEmailone:</strong> rirrakib10@gmail.com
                                </li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                            </ul>
                        </div>
                    </div>
                    {{-- <p>
                        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci
                        omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque
                        neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni
                        laudantium dolores.
                    </p> --}}
                    <a href="" class="btn btn-primary">Download CV</a>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
        @include('frontend.about.skill')
    <!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
         @include('frontend.about.fact')
    <!-- End Facts Section -->

    <!-- ======= Testimonials Section ======= -->
        @include('frontend.about.testimonial')
    <!-- End Testimonials Section -->

</main><!-- End #main -->
@endsection