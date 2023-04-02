<?php
  $page_title = "Videos Home";
  include 'includes/header.php';
?>
    <br><br><br><br>
   <div class="container">
     <div>
       <h2>
       <p style="font-size: 30px; color: darkgrey; text-align: center;">Welcome to the page where you can easily wathch your favourite videos</p>
     </h2>
     </div>
   </div>
    
    <div class="container">
     <div class="row align" >
     <div class="col-12">
      <div class="card">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images\1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images\2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images\3.jpg" alt="Third slide">
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
        <div class="card-body align">
          <h6 class="card-title text">Videos</h6>
            <a class="btn btn-primary" href="video.php">Click Here</a>
        </div>
      </div>
    </div>
  
   
  </div>
  <div class="col-md-4">
        <h2 style="font-size: 30px; color: darkgrey;">CREATE ACCOUNT</h2>
        
        <p><a class="btn btn-primary" href="registration.php" role="button">SIGN UP &raquo;</a></p>
      </div>

   </div>

<?php
  
  include 'includes/footer.php';
?>