@extends('user.master.index')

@section('hero')
<div class="untree_co-hero overlay" style="background-image: url('{{ asset('diet') }}/images/image/hero1.jpg'); height:60vh; min-height:10px;">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-transparent" style="display: flex; justify-content: center; margin-top: -50px;">
                <li class="breadcrumb-item">
                  <a href="{{ route('welcome') }}" class="text-center" style="color: rgb(108, 108, 137);">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: rgb(108, 108, 137);">
                    <a href="{{ route('karya') }}" class="text-center" style="color: rgb(108, 108, 137);">Karya</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: rgb(108, 108, 137);">Detail karya</li>
              </ol>
            </nav>
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="margin-top: -200px">Detail Karya</h1>
            <p class="mb-4 text-white" data-aos="fade-up" data-aos-delay="200" style="margin-top: -20px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, aut?</p>
          </div>
        </div>
      </div>
    </div> 
  </div> 
</div>
@endsection

@section('artikel')
<div class="services-section">
  <h2 class="line-bottom text-center mb-4" style="margin-top: -2%">Detail Karya</h2>
  <div class="row justify-content-center mb-5">
    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
      {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, error?</p> --}}
    </div>
  </div>
  <div class="container" style="border-radius: 10px">
    <div class="row justify-content-between">
      <div class="col-lg-12 mb-lg-0">
        <div class="untree_co-section bg-white" style="margin-top:-3%;">
          <div class="container p-5">
            <div class="row" style="margin-top:-9%;">
              <!-- First Card -->
              <div class="col-12 col-sm-6 col-md-6 col-lg-12 mb-4 mb-lg-0">
                <div class="inicard">
                  {{-- <img src="{{ asset('storage/images/news/' . $news->image) }}" alt="Image" class="img-fluid" style="height:500px; width:100%;"> --}}
                  <img src="https://picsum.photos/200" alt="Image" class="img-fluid" style="height:500px; width:100%;">
                  <div class="inicard-body">
                    <h3 class="mt-4">{{ $creation->title }}</h3>
                    <p class="mt-4">{{ $creation->description }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

