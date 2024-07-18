@extends('user.master.index')
@section('hero')
<div class="untree_co-hero overlay" style="background-image: url('{{ asset('diet') }}/images/image/hero1.jpg'); height:60vh; min-height:10px;">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent" style="display: flex; justify-content: center; margin-top: -50px;">
                    <li class="breadcrumb-item">
                        <a href="{{ route('welcome') }}" class="text-center" style="color: rgb(108, 108, 137);">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: rgb(108, 108, 137;">About</li>
                </ol>
            </nav>
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="margin-top: -200px">About</h1>
            <p class="mb-4 text-white" data-aos="fade-up" data-aos-delay="200" style="margin-top: -20px">Lorem ipsum dolor sit, amet 
                consectetur adipisicing 
                elit. Distinctio, aut?
            </p>
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
              </div>
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-1"></div>
                <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap">
                  <span class="play-wrap"><span class="icon-play"></span></span>
                  <img src="{{ asset('diet') }}/images/img-school-4-min.jpg" alt="Image" class="img-fluid rounded">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="untree_co-section">
        <div class="container">
          <div class="row justify-content-between">
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
              <div class="bckg"></div>
              {{-- <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap"> --}}
                {{-- <span class="play-wrap"><span class="icon-play"></span></span> --}}
                <img src="{{ asset('diet') }}/images/img-school-1-min.jpg" alt="Image" class="img-fluid rounded">
            </div>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection