<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKSU HOSTEL Web-HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <?php require('inc/links.php'); ?>
    <style>
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


<?php require('inc/header.php'); ?>

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

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">

    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="images/hostel-1.jpg" class="card-img-top">

  <div class="card-body">
    <h5>Girls Hostel</h5>
    <h6 class="mb-4">5000ksh per semester</h6>
    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        4 houses
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Water 24/7
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Laundry Area
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Free Wifi
      </span>
    </div>

    <div class="facilities mb-4">
    <h6 class="mb-1">Facilities</h6>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
        Television
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Chilling Area
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Hostel mess
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Kitchenette
      </span>
    
    </div>
    <div class="rating mb-4">
    <h6 class="mb-1">Rating</h6>
    <span class="badge rounded-pill bg-light">
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
    </span>  
    </div>
    <div class="d-flex justify-content-evenly mb-2">  
      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    </div> 
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">

    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="images/hostel-2.jpg" class="card-img-top">

  <div class="card-body">
    <h5>Boys Hostel</h5>
    <h6 class="mb-4">5000ksh per semester</h6>
    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        4 houses
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Water 24/7
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Laundry Area
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Free Wifi
      </span>
    </div>

    <div class="facilities mb-4">
    <h6 class="mb-1">Facilities</h6>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
        Television
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Chilling Area
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Hostel mess
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Kitchenette
      </span>
    
    </div>
    <div class="rating mb-4">
    <h6 class="mb-1">Rating</h6>
    <span class="badge rounded-pill bg-light">
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
    </span>  
    </div>
    <div class="d-flex justify-content-evenly mb-2">  
      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    </div> 
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">

    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="images/hostel-3.jpg" class="card-img-top">

  <div class="card-body">
    <h5>Boys Hostel</h5>
    <h6 class="mb-4">5000ksh per semester</h6>
    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        4 houses
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Water 24/7
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Laundry Area
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Free Wifi
      </span>
    </div>

    <div class="facilities mb-4">
    <h6 class="mb-1">Facilities</h6>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
        Television
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Chilling Area
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Hostel mess
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        Kitchenette
      </span>
    
    </div>
    <div class="rating mb-4">
    <h6 class="mb-1">Rating</h6>
    <span class="badge rounded-pill bg-light">
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
    </span>  
    </div>
    <div class="d-flex justify-content-evenly mb-2">  
      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    </div> 
    </div>
    </div>
    </div>
    
    

    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Hostels >>></a>
    </div>
  </div>
</div>

<!-- Our Facilities -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-hold h-font">OUR FACILITIES</h2> 

<div class="container">
  <div class="row justify-content-evenly ps-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-centre bg-white rounded shadow py-4 my-3">
      <img src="images/wifi-image.jpg" width="80px">
    </div>
    <div class="col-lg-2 col-md-2 text-centre bg-white rounded shadow py-4 my-3">
      <img src="images/star.png" width="80px">
    </div>
    <div class="col-lg-2 col-md-2 text-centre bg-white rounded shadow py-4 my-3">
      <img src="images/wifi-image.jpg" width="80px">
    </div>
    <div class="col-lg-2 col-md-2 text-centre bg-white rounded shadow py-4 my-3">
      <img src="images/wifi-image.jpg" width="80px">
    </div>
    <div class="col-lg-2 col-md-2 text-centre bg-white rounded shadow py-4 my-3">
      <img src="images/wifi-image.jpg" width="80px">
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>

    </div>
  </div>
</div>

<!-- Testimonials -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-hold h-font">TESTIMONIALS</h2>


<div class="container mt-5">
<div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center p-4">
          <img src="images/star.png" width="30px">
          <h6 class="m-0 ms-2"> Random user1</h6>
        </div>
        <p>
          rwrwrwrwrwrwrxvzjxhklhhcbnlkvhlvn,cnnlccccccccccccccccccclcllclcllcllcllc
          jcjcjjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjjc
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center p-4">
          <img src="images/star.png" width="30px">
          <h6 class="m-0 ms-2"> Random user1</h6>
        </div>
        <p>
          rwrwrwrwrwrwrxvzjxhklhhcbnlkvhlvn,cnnlccccccccccccccccccclcllclcllcllcllc
          jcjcjjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjjc
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center p-4">
          <img src="images/star.png" width="30px">
          <h6 class="m-0 ms-2"> Random user1</h6>
        </div>
        <p>
          rwrwrwrwrwrwrxvzjxhklhhcbnlkvhlvn,cnnlccccccccccccccccccclcllclcllcllcllc
          jcjcjjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjcjjc
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>


<!-- Reach Us -->


<h2 class="mt-5 pt-4 mb-4 text-center fw-hold h-font">REACH US</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
    <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3942900473594!2d37.260194073960214!3d-1.5308533984548096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f8724f42e161f%3A0xaf5f3242fb4d6ecb!2sMachakos%20University!5e0!3m2!1ssw!2ske!4v1702318882028!5m2!1ssw!2ske" loading="lazy"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel: +254740868876" class="d-inline-block mb-2 text-decoration-nonetext-dark">
        <i class="bi bi-telephone-fill"></i> +254741396861
        </a>
        <br>
        <a href="tel: +254740868876" class="d-inline-block text-decoration-nonetext-dark">
        <i class="bi bi-telephone-fill"></i> +254741396861
        </a>
      </div>
      <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <a href="#" class="d-inline-block">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-twitter-x me-1"></i> Twitter
        </span>
        </a>
        <br>
        <a href="#" class="d-inline-block">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-facebook me-1"></i> Facebook
        </span>
        </a>
        <br>
        <a href="#" class="d-inline-block">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-youtube me-1"></i> Youtube
        </span>
        </a>
      </div>
    </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>



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

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>

</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              