<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
        aria-label="Slide 6"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
        aria-label="Slide 7"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"
        aria-label="Slide 8"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img\nasgor.png') }}" class="img-fluid" style="height: 400px; width: 1600px; object-fit: cover"
          alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Nasi Goreng</h5>
          <p>Cobain Beberapa Menu Nasi Goreng Di Cafetaria Ini</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img\roti.png') }}" class="img-fluid" style="height: 400px; width: 1600px; object-fit: cover"
          alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Hidangan Roti</h5>
          <p>Ada Roti Lapis, Roti Bakar, Pokoknya Lengkap Deh</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img\kopi.png') }}" class="img-fluid" style="height: 400px; width: 1600px; object-fit: cover"
          alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Kopi</h5>
          <p>Ngopi Dulu Di Cafetaria Biar Semangat Kuliahnya</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img\juice.png') }}" class="img-fluid" style="height: 400px; width: 1600px; object-fit: cover"
          alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Juice</h5>
          <p>Beragam Aneka Rasa Ada Disini</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img\dishes.png') }}" class="img-fluid" style="height: 400px; width: 1600px; object-fit: cover"
          alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Dishes</h5>
          <p>Aneka Gorengan Cocok Untuk Menemani Aktivitas Anda </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img\dimsum.png') }}" class="img-fluid" style="height: 400px; width: 1600px; object-fit: cover"
          alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Hidangan Dimsum</h5>
          <p>Tersedia 3 Aneka Rasa</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img\mi.png') }}" class="img-fluid" style="height: 400px; width: 1600px; object-fit: cover"
          alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Hidangan Mie</h5>
          <p>Mau Makan Mie?, Ada Kok Di Cafetaria Ini</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img\salad.png') }}" class="img-fluid" style="height: 400px; width: 1600px; object-fit: cover"
          alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Salad Buah</h5>
          <p>Dijamin Segar karena Dipilih Dari Buah Yang Terbaik</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div><!-- End Carousel -->

  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Del Cafetaria - Aplikasi Pemesanan Makanan Dan Minuman
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-2 text-center">
        <p style="font-family: Lato, sans-serif; font-size: 16px;">
          Aplikasi pemesanan makanan dan minuman yang mudah dan praktis. Nikmati beragam menu makanan dan minuman
          favorit Anda dengan beberapa klik. Pesan dan Bayar pesanan Anda dengan mudah melalui aplikasi ini.</p>
      </blockquote>
      <div class="d-flex justify-content-center">
        <a href="pages-order.php" class="btn btn-primary">Buat Order</a>
      </div>
    </div>
  </div>
</main>