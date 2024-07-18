@extends('user.master.index')
@section('hero')
<div class="untree_co-hero overlay" style="background-image: url('{{ asset('diet') }}/images/image/hero2.jpg'); height:60vh; min-height:10px;">
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
                    <li class="breadcrumb-item active" aria-current="page" style="color: rgb(108, 108, 137;">Karya</li>
                </ol>
            </nav>
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="margin-top: -200px">Karya</h1>
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

@section('karya')
<div class="untree_co-section">
    <div class="container mb-5">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4"style="margin-top: -2%">Karya</h2>
          {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
            texts.
        </p> --}}
        </div>
      </div>
      <div class="row">
        <a href="">
            <div class="col-12 col-sm-6 col-md-6 col-lg-8 mb-4 mb-lg-0">
              <div class="custom-media">
                <img src="{{ asset('diet') }}/images/img-school-1-min.jpg" alt="Image" class="img-fluid" style="height:225px; width:100%;">
                <div class="custom-media-body">
                  <h3>Education Program Title</h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                  <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                    <a href="#" class="text-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>
        </a>
        <a href="">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="custom-media">
                  <img src="{{ asset('diet') }}/images/img-school-2-min.jpg" alt="Image" class="img-fluid" style="height:200px; width:100%;">
                  <div class="custom-media-body">
                    <h3>Education Program Title</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                    <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                      <a href="#" class="text-primary">Read More</a>
                    </div>
                  </div>
                </div>
            </div>
        </a>
      </div>
      <hr class="mb-5 mt-5">
      <div class="row">
        <a href="">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="custom-media">
                <img src="{{ asset('diet') }}/images/img-school-1-min.jpg" alt="Image" class="img-fluid" style="height:200px">
                <div class="custom-media-body">
                  <h3>Education Program Title</h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                  <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                    <a href="#" class="text-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>
        </a>
        <a href="">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="custom-media">
                  <img src="{{ asset('diet') }}/images/img-school-2-min.jpg" alt="Image" class="img-fluid" style="height:200px">
                  <div class="custom-media-body">
                    <h3>Education Program Title</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                    <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                      <a href="#" class="text-primary">Read More</a>
                    </div>
                  </div>
                </div>
            </div>
        </a>
        <a href="">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="custom-media">
                  <img src="{{ asset('diet') }}/images/img-school-3-min.jpg" alt="Image" class="img-fluid" style="height:200px">
                  <div class="custom-media-body">
                    <h3>Education Program Title</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                    <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                      <a href="#" class="text-primary">Read More</a>
                    </div>
                  </div>
                </div>
            </div>
        </a>
        <a href="">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="custom-media">
                  <img src="{{ asset('diet') }}/images/img-school-4-min.jpg" alt="Image" class="img-fluid" style="height:200px">
                  <div class="custom-media-body">
                    <h3>Education Program Title</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                    <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                      <a href="#" class="text-primary">Read More</a>
                    </div>
                  </div>
                </div>
            </div>
        </a>
      </div>
      <hr class="mb-5 mt-5">
      <div class="row">
        <a href="">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="custom-media">
                <img src="{{ asset('diet') }}/images/img-school-1-min.jpg" alt="Image" class="img-fluid" style="height:200px">
                <div class="custom-media-body">
                  <h3>Education Program Title</h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                  <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                    <a href="#" class="text-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>
        </a>
        <a href="">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="custom-media">
                  <img src="{{ asset('diet') }}/images/img-school-2-min.jpg" alt="Image" class="img-fluid" style="height:200px">
                  <div class="custom-media-body">
                    <h3>Education Program Title</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                    <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                      <a href="#" class="text-primary">Read More</a>
                    </div>
                  </div>
                </div>
            </div>
        </a>
        <a href="">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="custom-media">
                  <img src="{{ asset('diet') }}/images/img-school-3-min.jpg" alt="Image" class="img-fluid" style="height:200px">
                  <div class="custom-media-body">
                    <h3>Education Program Title</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                    <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                      <a href="#" class="text-primary">Read More</a>
                    </div>
                  </div>
                </div>
            </div>
        </a>
        <a href="">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="custom-media">
                  <img src="{{ asset('diet') }}/images/img-school-4-min.jpg" alt="Image" class="img-fluid" style="height:200px">
                  <div class="custom-media-body">
                    <h3>Education Program Title</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
                    <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                      <a href="#" class="text-primary">Read More</a>
                    </div>
                  </div>
                </div>
            </div>
        </a>
      </div>
      <hr class="mb-5 mt-5">
    </div>
</div> 
@endsection