@extends('app')

@section('content')
<section class="about-section">
    <div class="container">
        <div class="row">                
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">Tentang Mlijo.id</span>
                        <h2>Mlijo.id Menghadirkan produk <br>Sehat, Segar & Halal</h2>
                    </div>
                    <div class="text"><p>Dampak pandemi Covid-19, Indonesia diprediksi akan menghadapi tantangan dalam memenuhi pasokan pangan. Food and Agriculture Organization (FAO) menyatakan bahwa social distancing menjadi salah satu penghambat di sektor pangan. Pemberlakuan pembatasan pergerakan manusia secara otomatis membuat individu lebih aktif mencari solusi yang memungkinkan teknologi untuk membantu memenuhi kebutuhan pangan sehari-hari.</p>

                    <p>Saat ini banyak konsumen yang dihadapkan pada rak-rak kosong maupun permintaan tinggi ketika mencari produk-produk di toko offline. Permasalahan ini memaksa konsumen untuk mencari solusi alternatif dalam memenuhi kebutuhan pangan yakni secara online.</p>
                    
                    <p>Mlijo.id hadir untuk memudahkan keluarga dalam memenuhi kebutuhan pangan dengan memberdayakan Mlijo. Melalui Mlijo.id diharapkan mampu menggerakan ekonomi Petani dan masyarakat luas khususnya kelas bawah melalui high quality product sehingga masyarakat lebih sehat.</p></div>
                    <div class="btn-box">
                        <a href="#" class="theme-btn btn-style-one">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12" id="dekstop">
                <div class="inner-column wow fadeInLeft">
                    <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img src="{{ asset('packages/about/tenantsayur.jpg') }}" alt=""></a></figure>
                    <figure class="image-2"><a href="#" class="lightbox-image" data-fancybox="images"><img src="{{ asset('packages/about/tenantbuah.jpg') }}" alt=""></a></figure>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection