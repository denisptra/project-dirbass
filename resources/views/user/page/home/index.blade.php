@extends('user.master.index')

@section('hero')
<div class="untree_co-hero overlay" style="background-image: url('{{ asset('diet') }}/images/image/heroutama.jpg');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center ">
          <div class="col-lg-9 text-center ">
            <a href="#" href="https://vimeo.com/342333493" data-fancybox data-aos="fade-up" data-aos-delay="0"
              class="caption mb-4 d-inline-block">Watch the video</a>
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">"be strong in order to oppress the weak"</h1>
            <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Explore
                courses</a></p>
          </div>
        </div>
      </div>
    </div> <!-- /.row -->
  </div> <!-- /.container -->
</div>
@endsection

@section('about')
<div class="services-section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-12 mb-5 mb-lg-0">
        <div class="untree_co-section">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-lg-5 mb-5">
                <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">About Us</h2>
                <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                  right at the coast of the Semantics, a large language ocean.</p>
                <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
                  <li>Separated they live</li>
                  <li>Bookmarksgrove right at the coast</li>
                  <li>large language ocean</li>
                </ul>

                <div class="row count-numbers mb-5">
                  <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <span class="counter d-block"><span data-number="12023">0</span><span>+</span></span>
                    <span class="caption-2">No. Students</span>
                  </div>
                  <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <span class="counter d-block"><span data-number="49">0</span><span></span></span>
                    <span class="caption-2">No. Teachers</span>
                  </div>
                  <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <span class="counter d-block"><span data-number="12">0</span><span></span></span>
                    <span class="caption-2">No. Awards</span>
                  </div>
                </div>

                <p data-aos="fade-up" data-aos-delay="200">
                  <a href="#" class="btn btn-primary mr-1">Admission</a>
                  <a href="{{ route('about') }}" class="btn btn-outline-primary">Read More</a>
                </p>
              </div>
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-1"></div>
                {{-- <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap">
                  <span class="play-wrap"><span class="icon-play"></span></span> --}}
                  <img src="{{ asset('diet') }}/images/img-school-4-min.jpg" alt="Image" class="img-fluid rounded">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('artikel')
<div class="untree_co-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h2 class="line-bottom text-center mb-4">Popular News</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
          texts.</p>
      </div>
    </div>
      <div class="row">
        @foreach ($news->slice(0,4) as $new)
          <div class="bro col-md-3 mb-4">
            <a href="{{ route('news.show', $new->id) }}" class="card shadow" style="height: 400px">
              <img src="{{ asset('storage/images/news/' . $new->image) }}" alt="Image" class="card-img-top" style="height:200px; object-fit: cover;">
              <div class="card-body">
                <h3>{{ Str::limit($new->title, 27) }}</h3>
                <p>{{ Str::limit($new->content, 50) }}</p>
              </div>
            </a>
          </div> 
        @endforeach
      </div>
  </div> <!-- /.container -->
</div> 
@endsection

@section('karya')
<div class="untree_co-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h2 class="line-bottom text-center mb-4">Karya</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
          texts.</p>
      </div>
    </div>
      <div class="row">
        @foreach ($creation->slice(0,4) as $new)
          <div class="bro col-md-3 mb-4">
            <a href="{{ route('karya.show', $new->id) }}" class="card shadow" style="height: 420px">
              {{-- <img src="{{ asset('storage/images/creation/' . $new->image) }}" alt="Image" class="card-img-top" style="height:200px; object-fit: cover;"> --}}
              <img src="https://picsum.photos/200" alt="Image" class="card-img-top" style="height:200px; object-fit: cover;">
              <div class="card-body">
                <h3>{{ Str::limit($new->title, 27) }}</h3>
                <p class="mt2">{{ Str::limit($new->description, 50) }}</p>
              </div>
            </a>
          </div>
        @endforeach
      </div>
  </div>
</div>
@endsection

@section('hero2')
<div class="untree_co-section pt-0 bg-img overlay"
  style="background-image: url('{{ asset('diet') }}/images/image/hero2.jpg');">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-lg-7">
        <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">Education for Tomorrow's Leaders</h2>
        <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains,
          far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        <p><a href="#" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">Enroll Now</a></p>
      </div>
    </div>
  </div>
</div> <!-- /.untree_co-section -->
@endsection

@section('testi')
<div class="untree_co-section bg-light mb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 text-center mx-auto">

        <h3 class="line-bottom mb-4">Testimonials</h3>
        <div class="owl-carousel wide-slider-testimonial">
          <div class="item">
            <blockquote class="block-testimonial">

              <p>
                &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                language ocean.&rdquo;</p>
              <div class="author">
                <img src="{{ asset('diet') }}/images/person_1.jpg" alt="Free template by TemplateUX">
                <h3>John Doe</h3>
                <p class="position">CEO, Founder</p>
              </div>
            </blockquote>
          </div>

          <div class="item">
            <blockquote class="block-testimonial">

              <p>
                &ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline
                of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the
                Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>
              <div class="author">
                <img src="{{ asset('diet') }}/images/person_2.jpg" alt="Free template by TemplateUX">
                <h3>James Woodland</h3>
                <p class="position">Designer at Facebook</p>
              </div>
            </blockquote>
          </div>

          <div class="item">
            <blockquote class="block-testimonial">

              <p>
                &ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              <div class="author">
                <img src="{{ asset('diet') }}/images/person_3.jpg" alt="Free template by TemplateUX">
                <h3>Rob Smith</h3>
                <p class="position">Product Designer at Twitter</p>
              </div>
            </blockquote>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
@section('contact')
<div class="untree_co-section">
  <div class="container">
    <h2 class="line-bottom mb-5 text-center mx-auto">Countact Us</h2>
    <div class="row mb-5">
      <div class="col-lg-4 mb-5 order-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-info">
           <img src="{{ asset('diet') }}/images/image/contact.png" alt="Image" class="img-fluid rounded mt-2" style="height:320px">
        </div>
      </div>
      <div class="col-lg-7 mr-auto order-1" data-aos="fade-up" data-aos-delay="200">
        <form action="#">
          <div class="row">
            <div class="col-6 mb-3">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="col-6 mb-3">
              <input type="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="col-12 mb-3">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="col-12 mb-3">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>

            <div class="col-12">
              <input type="submit" value="Send Message" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> <!-- /.untree_co-section -->
@endsection
@section('peta')
<div class="untree_co-section" style="margin-top: -13%">
  <div class="container"> 
    <h2 class="line-bottom mb-5 text-center mx-auto">Maps</h2>
    <div class="row mb-3">
      <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3407424765423!2d106.7984650740981!3d-6.34991006212181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee8e5eb41255%3A0xcb00fb6c3926e845!2sPondok%20Pesantren%20Luhur%20Al-Tsaqafah!5e0!3m2!1sid!2sid!4v1721013821173!5m2!1sid!2sid"
      width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div> <!-- /.untree_co-section -->

@endsection