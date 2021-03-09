<!--start Including header-->
<?php
include './mainInclude/header.php';
?>

<!--End Including header-->

<!-- header slider form here -->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://k6u8v6y8.stackpathcdn.com/blog/wp-content/uploads/2015/10/Best-Cycling-Routes-in-India.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4"></h3>
          <p class="lead"></p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://img2.storyblok.com/4098x1200/smart/filters:format(jpeg)/f/53624/4096x1280/04c6a60e17/green-mountains-of-glencoe-in-the-scottish-highlands.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4"></h3>
          <p class="lead"></p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://i.pinimg.com/originals/dc/a4/02/dca402d2fb36d4441eed792193e612da.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4"></h3>
          <p class="lead"></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>


<!-- slider ends here -->



<!--start text banner-->

<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm-3">
      <h5 class="ml-5"><i class="fas fa-box-open ml-5"></i>Packages</h5>
    </div>
    <div class="col-sm-3">
      <h5 class="ml-5"><i class="fas fa-photo-video ml-5"></i>Gallary</h5>
    </div>
    <div class="col-sm-3">
      <h5 class="ml-5"><i class="fas fa-comments ml-5"></i> Feedback</h5>
    </div>
    <div class="col-sm-3">
      <h5 class="ml-5"><i class="fas fa-hotel ml-5"></i>Hotel</h5>
    </div>
  </div>
</div>

<!--End text banner-->

<!--start Packages-->
<div class="container mt-5 pt-4 pb-4" style="background-color: #ededed;">
  <div class="row">
    <div class="col-sm-4">
      <h5 class="text-center">Benificial Packages</h5>
      <!--start Most benifical Packages 1st card deck-->
      <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;" >
          <div class="card">
            <img src="image/packages/pa3.jpg" class="card-img-top" alt="Packages" />
            <div class="card-body text-center">
              <h5 class="card-title">Book on best price</h5>
              <center><p class="card-text">Enjoy Huge Discount </p></center>
           </div>
           <div class="card-footer">
             <p class="card-text d-inline">price:<small><del> 10000 </del></small> <span
               class="font-weight-bolder">6000</span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#"> Book Now</a>

             </div>
           </div>
         </a>
       </div>
     </div>

     <div class="col-sm-4">
       <h5 class="text-center">luxury Hotel </h5>
  <!--start Most benifical Packages 2nd card deck-->
  <div class="card-deck mt-4">
    <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;" >
      <div class="card">
        <img src="image/Hotel/ho3.jpg" class="card-img-top" alt="Packages" />
        <div class="card-body text-center">
          <h5 class="card-title">Book on best price</h5>
          <p class="card-text">Enjoy Huge Discount</p>
        </div>
        <div class="card-footer">
         <p class="card-text d-inline">price:<small><del> 5000</del></small> <span
           class="font-weight-bolder"> 2000</span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#"> Book Now</a>
         </div>
       </div>
     </a>
   </div>
     </div>

     <div class="col-sm-4">
       <h5 class="text-center">Adventure Activities</h5>
  <!--start Most benifical Packages 3rd card deck-->
  <div class="card-deck mt-4">
    <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;" >
      <div class="card">
        <img src="image/Adventure/Rafting.jpg" class="card-img-top" alt="Packages" />
        <div class="card-body text-center">
          <h5 class="card-title">Book on best price</h5>
          <p class="card-text">Enjoy Huge Discount</p>
        </div>
        <div class="card-footer">
         <p class="card-text d-inline">price:<small><del> 5000</del></small> <span
           class="font-weight-bolder"> 2000</span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#"> Book Now</a>

         </div>
       </div>
     </a>
   </div>
     </div>

   </div>
    <div class="text-center m-4">
  <a class="btn btn-danger btn-sm" href="packages.php">View All Packages</a>
</div>
 </div>
 <!--end of Packages-->


<!--Start Testimonial-->
<section class="testimonials py-5 text-white px-1 px-md-5 mt">
  <img src="https://raw.githubusercontent.com/solodev/testimonial-slider-fullwidth/master/solodev-logo-stacked.png" class="icon-overlay" />
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="pt-2 text-center font-weight-bold">See What Our Customers Says</h2>

        <div class="carousel-controls testimonial-carousel-controls">
          <div class="control d-flex align-items-center justify-content-center prev mt-3"><i class="fa fa-chevron-left"></i></div>
          <div class="control d-flex align-items-center justify-content-center next mt-3"><i class="fa fa-chevron-right"></i></div>

          <div class="testimonial-carousel">
            <div class="h5 font-weight-normal one-slide mx-auto">
              <div class="testimonial w-100 px-3 text-center d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                <div class="message text-center blockquote w-100">"They’ve been consistent throughout the years and grown together with us. Even as they’ve grown, they haven’t lost sight of what they do.
                   Most of their key resources are still with them, which is also a testament to their organization."</div>
                <div class="blockquote-footer w-100 text-white">Prem Shankar, Delhi</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- slider close -->

<!--end of Testimonial-->





    <!--start Including Footer-->
    <?php
    include './mainInclude/footer.php';
    ?>

    <!--End Including Footer-->
