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

@section('member')
    <div class="untree_co-section">
        <div class="container">
            <h2 class="line-bottom text-center mb-5" style="margin-top: -2%">Member</h2>
            <div class="d-flex flex-wrap justify-content-center">
              <!-- Card Anggota -->
              @foreach ($member as $item)    
              <div class="col-md-6 col-lg-3 mb-4">
                <div class="card border-0 shadow" style="border-radius: 10px;">
                  <img src="{{ asset('images/male/' . $item->image) }}" class="card-img-top" alt="..." style="height: 300px; border-radius: 10px 10px 0 0;">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{ $item->user->name }}</h5>
                    <p class="card-text">{{ $item->city }}</p>
                    <p class="card-text">{{ $item->motivation }}</p>
                   <a href="{{ route('member.show', $item->id) }}"> <button class="btn btn-primary">Lihat Profil</button></a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div>
    </div> 
@endsection