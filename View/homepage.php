<?php 

require 'includes/header.php';

?>



<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>

    <h3>Challenge your friends and create lifelong memories</h3><br>
    



    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="d-flex justify-content-center w-100 h-100">
            <img class="d-block w-100" src="View/images/mountain.png"alt="First slide">
            <div class="carousel-caption">
        <h4>Enjoy climing! </h4>
        <p>Get a wonderful view on top of a mountain..</p>
      </div>
        
        </div>
    </div>
    <div class="carousel-item">
    <div class="d-flex justify-content-center w-100 h-100">
          <img class="d-block w-100" src="View/images/cowcoww.jpg" alt="Second slide">
          <span class="border border-info"></span>
          <div class="carousel-caption">
        <h3>Fun times!</h3>
        <p>Make a selfie with new friends..</p>    
      </div>

        </div>
    </div>
    <div class="carousel-item">
    <div class="d-flex justify-content-center w-100 h-100">
          <img class="d-block w-100" src="View/images/library.jfif"alt="Third slide">
          <div class="carousel-caption">
        <h3>Libraries are only to read,ups?</h3>
        <p>Make some exeptions..</p>
      </div>
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
    
<h5>Got some cool inspirations already? Sign up now and get challenged!</h5><br>
    <form action="index.php?page=signup" method="post">
        <button type="submit" class="btn btn-outline-secondary btn-lg" id="loginbtn" name="loginbtn">Sign up</button>
    </form>
</section>
<style>
    body {
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        background-color: #FCFCFC;
    }

    section {
        text-align: center;
        /* height: 100vh; */
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    h3 {
        color:  grey;
        opacity: 0.9;
    }

    footer {
        text-align: center;
        margin-bottom: 5px;
    }

    .btn {
        background-color: #F15A24 !important;
        border: #F15A24;
        color: #FFFFFF !important;
    }

    button:hover {
        background-color: #DB4A1A !important;

    }

    .d-block {
    max-width:40%;
    max-height:30%;
    }

</style>


<?php require 'includes/footer.php'?>