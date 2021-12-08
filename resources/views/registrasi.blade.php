<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Main CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Yacko School - Formulir Pendaftaran</title>

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
              <a class="nav-link" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item my-cos" style="padding-left: 5px; padding-right: 5px;">
              <a class="nav-link btn btn-secondary" style="background: rgba(255, 255, 255, 0.233); color: yellow; border: none; border-radius: 50px;" href="/login">Login</a>
            </li>
            <li class="nav-item my-cos"  style="padding-left: 5px; padding-right: 5px;">
              <a class="nav-link btn btn-secondary active" style="background: transparent; color: yellow; border-color: rgb(240, 240, 240); border-radius: 50px" href="/registrasi">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

<!-- Main Body -->
<div id="carouselExampleSlidesOnly" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="margin-top: 8%;">
<!-- Akhir Body  -->

<!-- FORM -->
<div class="container col-xl-6">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12"></div>
     <div class="arrow-left"></div>
      <div class="m-5 form-bagus">
       <div class="judul-form w-auto p-0">
        <br>
          <h3>Registrasi</h3>
          </div>
           <form class="p-4">
            <div class="form-group">
             <label for="exampleFormControlInput1" class="mx-0 fs-4 m-2">Nama Lengkap</label>
              <input type="text" class="form-control mx-0 w-100" id="exampleFormControlInput1" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" placeholder="">
               </div>
              <div class="form-group">
             <label for="exampleFormControlInput1" class="mx-0 fs-4 m-2">No Handphone</label>
            <input type="text" class="form-control mx-0 w-100" id="exampleFormControlInput1" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" placeholder="">
           </div>
          <div class="form-group">
         <label for="exampleFormControlInput1" class="mx-0 fs-4 m-2">E-mail</label>
        <input type="text" class="form-control mx-0 w-100" id="exampleFormControlInput1" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" placeholder="">
      </div>
       <div class="form-group">
        <label for="exampleFormControlInput1" class="mx-0 fs-4 m-2">Password</label>
         <input type="password" class="form-control mx-0 w-100" id="exampleFormControlInput1" style="background-color: rgba(255, 255, 255, 0.5); font-size: 20px; border-bottom: 2px solid; border-radius: 3px; color: rgb(14, 24, 170); border-color: rgb(123 123 123 / 50%);" placeholder="">
          </div>
           <button type="button" class="btn-success mw-100 w-100 my-3">Submit</button>
            </form>
           </div>
          </div>
         <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12 col-12"></div>
        </div>
       </div>
      </div>
     </div>

    <!-- Main JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
