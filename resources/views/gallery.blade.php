<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Main CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Yacko School - Gallery</title>\

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
                <button class="dropdown-toggle h-100 btn-cos"  style="color: rgba(255, 255, 255, 0.55); background: transparent; border: transparent;" onMouseOver="this.style.color='rgba(255, 255, 255, 0.7)'"
  onMouseOut="this.style.color='rgba(255, 255, 255, 0.55)'" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                  Tour & Travel
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="/tour&travel">Info</a></li>
                  <li><a class="dropdown-item" href="#">Another Action</a></li>
                  <li><a class="dropdown-item" href="#">Another Another Action</a></li>
                </ul>
              </div>
            <li class="nav-item bd-cos">
              <a class="nav-link" href="/service">Service</a>
            </li>
            <li class="nav-item bd-cos">
              <a class="nav-link active" href="/gallery">Gallery</a>
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
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/image/bg-gallery.png" class="d-block w-100" alt="Our Gallery">
          </div>
        </div>
    </div>

    <div class="row mx-0 mw-100">
      <div class="col-4 my-5 mx-auto text-center">
        <img src="assets/image/404notfound.png" alt="Candi Borobudur" class="mw-100">
      </div>
      <div class="col-4 my-5 mx-auto text-center">
        <img src="assets/image/404notfound.png" alt="Masjid Baiturahman" class="mw-100">
      </div>
      <div class="col-4 my-5 mx-auto text-center">
        <img src="assets/image/404notfound.png" alt="Danau Toba" class="mw-100">
      </div>
    </div>
    <div class="row mx-0 mw-100">
      <div class="col-4 my-5 mx-auto text-center">
        <img src="assets/image/404notfound.png" alt="Candi Borobudur" class="mw-100">
      </div>
      <div class="col-4 my-5 mx-auto text-center">
        <img src="assets/image/404notfound.png" alt="Masjid Baiturahman" class="mw-100">
      </div>
      <div class="col-4 my-5 mx-auto text-center">
        <img src="assets/image/404notfound.png" alt="Danau Toba" class="mw-100">
      </div>
    </div>
    <div class="row mx-0 mw-100">
      <div class="col-4 my-5 mx-auto text-center">
        <img src="assets/image/404notfound.png" alt="Candi Borobudur" class="mw-100">
      </div>
      <div class="col-4 my-5 mx-auto text-center">
        <img src="assets/image/404notfound.png" alt="Masjid Baiturahman" class="mw-100">
      </div>
      <div class="col-4 my-5 mx-auto text-center">
        <img src="assets/image/404notfound.png" alt="Danau Toba" class="mw-100">
      </div>    
    <!-- Akhir Body  -->

    <!-- Main JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
