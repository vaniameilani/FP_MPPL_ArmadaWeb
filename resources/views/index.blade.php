@extends('layouts.main')

@section('title', 'ARMADA')
@section('container')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <!-- <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner">
      <!-- <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="C:\xampp\htdocs\MPPL_Armada\public\armada.svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#931a25"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>KURSUS MENGEMUDI ARMADA</h1>
            <p> V </p>
          </div>
        </div>
      </div> -->
      <div class="carousel-item active" style="background-color: #931a25">
        <!-- <img class="bd-placeholder-img" width="100%" height="100%" src="{{url('/img/armada.jpg')}}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img> -->
        
        <div class="container">
          <div class="carousel-caption">
            <div class="row py-lg-5">
                <h1 class="fw-bold">KURSUS MENGEMUDI "ARMADA"</h1>
                <div class="col-lg-6 col-md-3 mx-auto">
                <p>Dengan pengalaman 5 tahun di bidangnya<br>Siap menjadikan anda pengemudi yang mahir</p>
              </div>
            </div>  
          </div>
        </div>
      </div>
      <!-- <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#931a25"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
    </div> -->
    </div>

    <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a> -->
  </div>

  <div class="container marketing">
    <div class="row">
      <div class="col-md-8">
        <article class="blog-post" id="about">
          <h2 class="blog-post-title" style="color: #f0c38e">Tentang</h2>

          <p>Alasan kenapa kursus mengemudi "Armada" menjadi tempat kursus pilihan, adalah  :</p>
          <ol>
            <li>Kami menyajikan materi secara lengkap sesuai dengan UU no 22 tahun 2009 tentang tata tertib belalu lintas</li>
            <li>Di kursus mengemudi Armada adalah tempat kursus pertama dan satu-satunya yang menyediakan unit tanpa pedal bantuan sehingga full murni keahlian siswa benar-benar diasah atau dilatih</li>
            <li>Instruktur yang berpengalaman d bidangnya, serta pelayanan yang ramah sehingga siswa tidak tegang atau takut saat awal sampai selesai latihan.</li>
          </ol>
        </article><!-- /.blog-post -->

        <hr style="width:90%; margin-left:10px">

        <article class="blog-post" id="gallery">
          <h2 class="blog-post-title" style="color: #f0c38e">Gallery</h2>
          <div class="row">
            <img src="{{url('/img/armada1.jpg')}}" class="img-thumbnail" style="width:400px;height:400px;" alt="a">
            <img src="{{url('/img/armada2.jpg')}}" class="img-thumbnail" style="width:400px;height:400px;" alt="a">
          </div>
        </article>
  
        <hr class="mt-3" style="width:90%; margin-left:10px">

        <article class="blog-post">
          <div class="row">
            <div class="col-lg-5" id="others">
              <h2 class="blog-post-title" style="color: #f0c38e">Alamat</h2>
              <p>Jalan Panglima Sudirman No.83<br>Purworejo<br>Kota Pasuruan<br>Jawa Timur 67116<br>Indonesia</p>
            </div>
            <div class="col-lg-3 ms-5">
              <h2 class="blog-post-title" style="color: #f0c38e">Jam Buka</h2>
              <p> Buka Setiap hari mulai jam 07.00 - 17.00 </p>
            </div>
          </div>
        </article>
      </div>

      <div class="col-md-4">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="font-italic" style="color: #f0c38e">Info Tambahan</h4>
          <p class="mb-0">Berdiri sejak tahun 2016. Mampu bersaing didaerah sekitar didalam jasa Kursus Mengemudi yang berkualitas terbaik juga macam modelnya mobilnya.</p>
        </div>

        <div class="p-4">
          <h4 class="font-italic" style="color: #f0c38e">Contact</h4>
          <ol class="list-unstyled">
            <li><a href="https://www.facebook.com/kursusArmadaqw/"><ion-icon name="logo-facebook"></ion-icon> Facebook</a> </li>
            <li><a href="https://wa.me/c/62895366365878"><ion-icon name="logo-whatsapp"></ion-icon> Whatsapp</a> </li>
          </ol>
        </div>
      </div>

    </div><!-- /.row -->
  </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Hello, Vaniameith!</h1>
            </div>
        </div>
    </div> -->
@endsection
 