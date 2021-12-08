<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Main CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Yacko School - Tour & Travel</title>

    <!-- Favicons -->
    <link href="assets/image/logo-sekolah.png" rel="icon">
    <link href="assets/image/logo-sekolah.png" rel="apple-touch-icon">

    <!-- Main Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">

  </head>
  <body>
    <!--  Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background: linear-gradient(206.34deg, #000031 -22.46%, #0057A5 105.59%);">
      <div class="container-fluid mx-5 mx-5-ys">
        <a class="navbar-brand" href="/">
          <img src="assets/image/logo-sekolah.png" alt="Logo Yacko School" class="d-inline-block align-text-top lg-ys">
          <a href="/" class="text-white">YACKO SCHOOL</a>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item bd-cos">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item bd-cos">
              <a class="nav-link" href="/product">Product</a>
            </li>
            <div class="dropdown bd-cos my-nav">
                <button class="dropdown-toggle h-100 btn-cos"  style="background: transparent; border: transparent;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                  Tour & Travel
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item active" href="/tour&travel">Info</a></li>
                  <li><a class="dropdown-item" href="#">Another Action</a></li>
                  <li><a class="dropdown-item" href="#">Another Another Action</a></li>
                </ul>
              </div>
            <li class="nav-item bd-cos">
              <a class="nav-link" href="/service">Service</a>
            </li>
            <li class="nav-item bd-cos">
              <a class="nav-link" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item my-cos" style="padding-left: 5px; padding-right: 5px;">
              <a class="nav-link btn btn-secondary" style="background: rgba(255, 255, 255, 0.233); color: yellow; border: none; border-radius: 50px;" href="/login">Login</a>
            </li>
            <li class="nav-item my-cos"  style="padding-left: 5px; padding-right: 5px;">
              <a class="nav-link btn btn-secondary" style="background: transparent; color: yellow; border-color: rgb(240, 240, 240); border-radius: 50px" href="/registrasi">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Main Body -->
    <div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/image/bg-tour-travel.png" class="d-block w-100">
          </div>
        </div>
    </div>
    
    <div>
      <img src="assets/vector/Rectangle 16.png" class="rounded mx-auto d-block my-3" alt="vektor-strip">
    </div>
    <div>
      <h3 class="text-center my-5">Paket Tour pilihan</h3>
    </div>
    <div class="container">
      <div class="row">
        <div class="col my-5 mx-1 text-center">
          <a href="#"><img src="assets/image/paket-pilihan/pexels-tomáš-malík-4090091 1.png" alt="Candi Borobudur" class="mw-100"></a>
          <h4 class="my-3">Rp.3.400.000</h4>
          <hr style="color: yellow; height: 3px; opacity: 1;">
          <h4>Candi Borobudur</h4>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-style: normal; font-weight: 100;">Magelang, Jawa Tengah</h4>
        </div>
        <div class="col my-5 mx-1 text-center">
          <a href="/informasi"><img src="assets/image/paket-pilihan/Blog-Masjid-Raya-Baiturrahman-Aceh-28 1.png" alt="Masjid Baiturahman" class="mw-100"></a>
          <h4 class="my-3">Rp.3.400.000</h4> 
          <hr style="color: yellow; height: 3px; opacity: 1;">
          <h4>Masjid Baiturahman</h4>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-style: normal; font-weight: 100;">Banda Aceh</h4>   
        </div>
        <div class="col my-5 mx-1 text-center">
          <a href="#"><img src="assets/image/paket-pilihan/Blog-Danau-Toba-Medan-DWSP-21 1.png" alt="Danau Toba" class="mw-100"></a>
          <h4 class="my-3">Rp.3.400.000</h4>
          <hr style="color: yellow; height: 3px; opacity: 1;">
          <h4>Danau Toba</h4>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-style: normal; font-weight: 100;">Sumatra Utara</h4>
        </div>
      </div>
    </div>
     
    <div class="container">
      <div class="row">
        <div class="col my-5 mx-1 text-center">
          <a href="#"><img src="assets/image/paket-pilihan/Blog-Istana-Maimun-Medan-13 1.png" alt="Istana Maimon" class="mw-100"></a>
          <h4 class="my-3">Rp.3.400.000</h4>
          <hr style="color: yellow; height: 3px; opacity: 1;">
          <h4>Istana Maimon</h4>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-style: normal; font-weight: 100;">Medan</h4>
        </div>
        <div class="col my-5 mx-1 text-center">
          <a href="#"><img src="assets/image/paket-pilihan/Blog-Gedung-Sate-Bandung-15 1.png" alt="Gedung Sate" class="mw-100"></a>
          <h4 class="my-3">Rp.3.400.000</h4>
          <hr style="color: yellow; height: 3px; opacity: 1;">
          <h4>Gedung Sate</h4>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-style: normal; font-weight: 100;">Bandung</h4>
        </div>
        <div class="col my-5 mx-1 text-center">
          <a href="#"><img src="assets/image/paket-pilihan/Blog-Lawang-Sewu-Semarang-01 1.png" alt="Lawang Sewu" class="mw-100"></a>
          <h4 class="my-3">Rp.3.400.000</h4>
          <hr style="color: yellow; height: 3px; opacity: 1;">
          <h4>Lawang Sewu</h4>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-style: normal; font-weight: 100;">Semarang</h4>
        </div>
      </div>
    </div>
  
    <div class="container">
        <div class="row">
          <div class="col my-auto mx-5 text-center">
            <img src="assets/image/paket-pilihan/cs.png" class="img-fluid w-50" alt="...">
            <h5 style="color: yellow;">Bantuan Staff lokal</h5>
            <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto sit adipisci impedit vel quaerat, nesciunt ea assumenda beatae pariatur, hic perspiciatis exercitationem blanditiis nostrum ratione culpa dolores tempore accusantium dolorem dolorum voluptas neque. Magnam ea nemo explicabo nam earum, hic illum distinctio sequi tenetur cumque ipsa nobis velit commodi. Culpa?</p>
          </div>
          <div class="col my-auto mx-5 text-center">
            <img src="assets/image/paket-pilihan/pesawat.png" class="img-fluid w-100" style="padding-bottom: 10%; padding-top: 30%;" alt="...">
            <h5 style="color: yellow;">Kemudahan perjalanan</h5>
            <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto sit adipisci impedit vel quaerat, nesciunt ea assumenda beatae pariatur, hic perspiciatis exercitationem blanditiis nostrum ratione culpa dolores tempore accusantium dolorem dolorum voluptas neque. Magnam ea nemo explicabo nam earum, hic illum distinctio sequi tenetur cumque ipsa nobis velit commodi. Culpa?</p>
          </div>
          <div class="col my-auto mx-5 text-center">
            <img src="assets/image/paket-pilihan/koper 1.png" class="img-fluid w-50" style="padding-bottom: 3%; padding-top: 10%;" alt="...">
            <h5 style="color: yellow;">Aman & Terpercaya</h5>
            <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto sit adipisci impedit vel quaerat, nesciunt ea assumenda beatae pariatur, hic perspiciatis exercitationem blanditiis nostrum ratione culpa dolores tempore accusantium dolorem dolorum voluptas neque. Magnam ea nemo explicabo nam earum, hic illum distinctio sequi tenetur cumque ipsa nobis velit commodi. Culpa?</p>
          </div>
        </div>
      </div>
    <!-- Akhir Body  -->

    <!-- Main JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/edec6b96b7.js" crossorigin="anonymous"></script>
  </body>
</html>
