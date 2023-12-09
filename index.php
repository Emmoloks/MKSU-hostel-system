<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKSU HOSTEL Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
        .h-font{
            font-family: 'Merienda', cursive;
        }

        /* Chrome, Safari, Edge, Opera */
           input::-webkit-outer-spin-button,
           input::-webkit-inner-spin-button {
           -webkit-appearance: none;
           margin: 0;
          }

        /* Firefox */
           input[type=number] {
            -moz-appearance: textfield;
           }

           .custom-bg{
            background-color: #2ec1ac;
           }
           .custom-bg:hover{
            background-color: #279e8c;
           }
           .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
           }
           @media screen and (max-width: 575px) {
            .availability-form{
              margin-top: 0px;
              padding: 0 35px;
            }
            
            
           }



    </style>

</head>
<body class="bg-light">


<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Machakos University</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <div class="d-flex">
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
        Login
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
        Register
        </button>
      </div>
    </div>
  </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form>
             <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-circle fs-3 me-2"></i>User Login
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
     <label class="form-label">Email address</label>
     <input type="email" class="form-control shadow-none">
     </div>
     <div class="mb-4">
     <label class="form-label">Password</label>
     <input type="password" class="form-control shadow-none">
     </div>
     <div class="d-flex align-items-center justify-content-between">
        <button type="submit" class="btn-dark shadow-none">LOGIN</button>
        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
     </div>

      </div>
        </form>
    </div>
  </div>
</div>


<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form>
             <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-lines-fill fs-3 me-2"></i>
        User Registration
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Note: Your details must match with your ID (School ID, National ID)
        that will be required during check-in. 
      </span>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Name</label>
         <input type="text" class="form-control shadow-none">
          </div>
         <div class="col-md-6 p-0">
          <label class="form-label">Email</label>
         <input type="email" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Phone Number</label>
         <input type="number" class="form-control shadow-none">
          </div>
         <div class="col-md-6 p-0 mb-3">
          <label class="form-label">Picture</label>
         <input type="file" class="form-control shadow-none">
          </div>
          <div class="col-md-12 p-0 mb-3">
          <label class="form-label">Address</label>
         <textarea class="form-control shadow-none" rows="1"></textarea>
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Admission Number</label>
         <input type="number" class="form-control shadow-none">
          </div>
         <div class="col-md-6 p-0 mb-3">
          <label class="form-label">Course</label>
         <input type="text" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Password</label>
         <input type="password" class="form-control shadow-none">
          </div>
         <div class="col-md-6 p-0 mb-3">
          <label class="form-label">Confirm Password</label>
         <input type="password" class="form-control shadow-none">
          </div>
        </div>
      </div>
      <div class="text-centre my-1">
        <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
      </div>
      </div>
        </form>
    </div>
  </div>
</div>

<!--Carousel -->

<div class="container-fluid px-lg-4 mt-4">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/ADS_1874.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/2.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/2.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/ADS_1874.jpg" class="w-100 d-block">
      </div>
    </div>
  </div>
</div>

<!-- Check Availabilty form -->

<div class="container availability-form">
  <div class="row">
    <div class="col-lg-l2 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-in</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-out</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:500;">Gender</label>
          <select class="form-select shadow-none">
          <option value="1">Female</option>
         <option value="2">Male</option>
         </select>
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:500;">Year of Study</label>
          <select class="form-select shadow-none">
          <option value="1">1st</option>
         <option value="2">2nd</option>
         <option value="3">3rd</option>
         <option value="4">4th</option>
         </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
    </form>
    </div>
  </div>
</div>

<!-- Our Rooms -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-hold h-font">OUR HOSTELS</h2>

<br><br><br>
<br><br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });
  </script>

</body>
</html>