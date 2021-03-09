
<!--start social follow-->
<div class="container-fluid bg-danger mt-5">
  <div class="row text-white text-center p-1">
    <div class="col-sm">
      <a class="text-white social-hover" href="https://www.facebook.com/vaccation.planner/"></i class="fab fa-facebook-f"></i>Facebook</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"></i class="fab fa-twitter"></i>Twitter</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"></i class="fab fa-whatsapp"></i>WhatsApp</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"></i class="fab fa-instagram"></i>instagram</a>
    </div>
  </div>
</div>




<!--End social follow-->

<!--Start before footer Effect-->

<div class="container-fluid p-4" style="background-color:#ADFF2F">
  <div class="container" style="background-color:#A52A2A">
    <div class="row text-center">
      <div class="col-sm">
        <h5>About us</h5>
        <p>Vaction planner provide you the best service
          and best facility with experience guide which is helped
        in your trip to guide or tracking.</P>
      </div>
      <div class="col-sm">
        <h5>Category</h5>
        <a class="text-dark" href="packagedetails.php">summer package</a><br />
        <a class="text-dark" href="#">winter package</a><br />
        <a class="text-dark" href="#">Honeymoon package</a><br />
        <a class="text-dark" href="#">weekend Holiday package</a><br />

      </div>
      <div class="col-sm">
        <h5>contact Us</h5>
        <p>Vactionplanner Pvt Ltd <br> Near Noida Sector59 Metro<br>
          Noida,Uttar Pradesh<br> ph. +91-9709592101 </p>
        </div>
      </div>
    </div>


<!--End before footer Effect-->



<!--Start Footer-->

<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">copyright &copy;2021|| Designed by
    Vacation_planner||<a href="#login" data-bs-toggle="modal"
     data-bs-target="#adminRegLogin">Admin Login</a> </small>
  </footer>

<!--End Footer-->

<!--Start client Registration   -->


<!-- Modal -->
<div class="modal fade" id="CliRegsignup" tabindex="-1" aria-labelledby="CliRegsignupLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="CliRegsignupLabel">Welcome to Vacation_planner</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!--start client Registration form-->
<?php
include 'clientRegistration.php';
 ?>

      <!--End client Registration form-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"
         data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary"
         onclick="addcli()">sign up</button>
      </div>
    </div>
  </div>
</div>

<!--End Client Registration-->

<!--Start client Login modal   -->


<!-- Modal -->
<div class="modal fade" id="CliRegLogin" tabindex="-1" aria-labelledby="CliRegLoginLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="CliRegLoginLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!--start client Login form-->
      <?php
include 'clientLoginform.php';
       ?>
      <!--start client Login form-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="CliLoginBtn"  onclick="addcli()">Login</button>
      </div>
    </div>
  </div>
</div>

<!--End Client login modal-->

<!--Start Admin Login modal   -->

<!-- Modal -->
<div class="modal fade" id="adminRegLogin" tabindex="-1" aria-labelledby="adminRegLoginLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"
         id="adminRegLoginLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--start Admin  Login form-->
        <form id="adminLoginForm">
    <div class="form-group">
      <i class="fas fa-envelope"></i><label for="adminLogmail"
      class="pl-2 font-weight-bold">Email</label><input type="email"
      class="form-control" placeholder="Email"
      name="adminLogmail" id="adminLogmail">

    </div>

    <div class="form-group">
      <i class="fas fa-key"></i><label for="adminLogpass"
      class="pl-2 font-weight-bold">password</label><input type="password"
      class="form-control" placeholder="password"
      name="adminLogpass" id="adminLogpass">
    </div>
</form>

<!--End client login form-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>

<!--End Admin login modal-->





<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/all.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/ajaxrequest.js"></script>

<!--
<script type="text/javascript">
  $(document).ready(function() {
  $(".testimonial-carousel").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true,
    prevArrow: $(".testimonial-carousel-controls .prev"),
    nextArrow: $(".testimonial-carousel-controls .next")
  });
});



</script>
-->
</body>
</html>
