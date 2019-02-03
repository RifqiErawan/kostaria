@extends('layouts.master')

@section('content')
<div class="page-header" style="background-image: url('assets/img/home/bedroom.jpg'); background-repeat: no-repeat; background-position: left bottom;">
  <div class="content-center">
    <div class="row row-grid justify-content-between align-items-center text-left">
      <div class="col-lg-6 col-md-6">
        <h1 class="text-white">Mau Cari Kos Kosan?
          <br/>
          <span class="text-white"></span>
        </h1>
        <p class="text-white mb-3">Dapatkan Info Kost Murah, Kost Harian, Kost Bebas dan Info Kosan lainnya di Kostaria.id!</p>
        <div class="btn-wrapper mb-3">
          <p class="category text-success d-inline">Segera Hadir</p>
          <a href="#" class="btn btn-success btn-link btn-sm"><i class="tim-icons icon-minimal-right"></i></a>
        </div>
        <div class="btn-wrapper">
          <div class="button-container">
            <button href="https://kostaria.id/url/line" class="btn btn-icon btn-simple btn-round btn-neutral">
              <i class="fab fa-line"></i>
            </button>
            <button href="https://kostaria.id/url/ig" class="btn btn-icon btn-simple btn-round btn-neutral">
              <i class="fab fa-instagram"></i>
            </button>
            <button href="https://kostaria.id/url/wa" class="btn btn-icon btn-simple btn-round btn-neutral">
              <i class="fab fa-whatsapp"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- <div class="col-lg-4 col-md-5">
        <img src="assets/img/etherum.png" alt="Circle image" class="img-fluid">
      </div> -->
    </div>
  </div>
</div>
@endsection
