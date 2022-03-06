<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Testimonials</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach(DB::table('testimonials')->get() as $testimonial)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{asset('images/testimonial/'.$testimonial->image)}}" class="testimonial-img" alt="">
                        <h3>{{$testimonial->name}}</h3>
                        <h4>{{$testimonial->position}}</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{$testimonial->description}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->
                @endforeach
                

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>