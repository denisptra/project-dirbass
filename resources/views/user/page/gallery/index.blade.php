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
                    <li class="breadcrumb-item active" aria-current="page" style="color: rgb(108, 108, 137;">Gallery</li>
                </ol>
            </nav>
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="margin-top: -200px">Gallery</h1>
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

@section('gallery')
<div class="untree_co-section">
    <div class="container">
        <h2 class="line-bottom text-center mb-5" style="margin-top: -2%">Image</h2>
      <div class="row">
      
        @foreach ($gallery as $item)
        <div class="col-md-6 col-lg-4 item">
          <a href="{{ asset('storage/images/gallery/' . $item->image) }}" class="item-wrap fancybox mb-4" data-fancybox="gal" data-aos="fade-up" data-aos-delay="0">
            <span class="icon-search2"></span>
            <img class="img-fluid"  src="{{ asset('storage/images/gallery/' . $item->image) }}" style="height: 250px">
          </a>
        </div>
        @endforeach
      </div>
    </div>
</div> 
@endsection
