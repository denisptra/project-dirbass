@extends('user.master.index')
@section('hero')
<div class="untree_co-hero overlay" style="background-image: url('{{ asset('diet') }}/images/image/hero4.jpg'); height:60vh; min-height:10px;">
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
                    <li class="breadcrumb-item active" aria-current="page" style="color: rgb(108, 108, 137;">Member</li>
                </ol>
            </nav>
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="margin-top: -200px">Member</h1>
            <p class="mb-4 text-white" data-aos="fade-up" data-aos-delay="200" style="margin-top: -20px">On this page, you'll find profiles of each team member, including their names, city, and motivations.
            </p>
          </div>
        </div>
      </div>
    </div> <!-- /.row -->
  </div> <!-- /.container -->
</div>
@endsection
{{-- {{ route('karya.show', $new->id) }} --}}

@section('member')
    <div class="untree_co-section">
        <div class="container">
            <h2 class="line-bottom text-center mb-5" style="margin-top: -2%">Member</h2>
            <div class="d-flex flex-wrap justify-content-center">
                <div class="col-md-6 col-lg-3 mb-4">
                  <div class="card shadow"  style="border-radius: 10px;">
                    <img src="https://i.pinimg.com/236x/2c/9f/dd/2c9fddce9c01177893ff3ec19b5f09c8.jpg" class="card-img-top" alt="..." style="height: 260px; border-radius: 10px 10px 0 0;">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">Ahmad khasim ali</h6>
                      <small class="card-text">Bandung</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                  <div class="card shadow" style="border-radius: 10px;">
                    <img src="https://i.pinimg.com/736x/29/69/86/296986bcef7b734a06510221f96b26e7.jpg" class="card-img-top" alt="..." style="height: 260px; border-radius: 10px 10px 0 0;">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">Ahmad khasim ali</h6>
                      <small class="card-text">Bandung</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                  <div class="card shadow" style="border-radius: 10px;">
                    <img src="https://i.pinimg.com/736x/01/b5/db/01b5dbf4eb3fbcee821d5f6367a68140.jpg" class="card-img-top" alt="..." style="height: 260px; border-radius: 10px 10px 0 0;">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">Ahmad khasim ali</h6>
                      <small class="card-text">Bandung</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                  <div class="card shadow" style="border-radius: 10px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkALMVn1CW_3l1gcVY25Xu--1TJMwtW5R0aEUbMy_T4XepJQ8ymtoP-ZFI5tEXxm4Ah1o&usqp=CAU" class="card-img-top" alt="..." style="height: 260px; border-radius: 10px 10px 0 0;">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">Ahmad khasim ali</h6>
                      <small class="card-text">Bandung</small>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div> 
@endsection