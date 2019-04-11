<?php 
include('includes/header.php');
include('includes/navigation.php'); ?>

<div class="section">
    <div class="container">
        <div class="row">

        <div class="col-lg">
        <div class="card">
          <div class="img-container">
          <img src="img/cat1.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body small-cards">
           <p class="card-text">Østeuropæiske katte</p>
          </div>
          </div>
        </div>
        <div class="col-lg">
        <div class="card">
        <div class="img-container">
          <img src="img/cat2.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body small-cards">
           <p class="card-text">Sydamerikanske katte</p>
          </div>
          </div>
        </div>
        <div class="col-lg">
        <div class="card">
        <div class="img-container">
          <img src="img/cat3.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body small-cards">
           <p class="card-text">Scandinaviske katte</p>
          </div>
          </div>
        </div>

</div>
<div class="section">
      <div class="card text-center">
        <div class="card-header">
          Featured Cats
        </div>
        <div class="card-body">
          <h5 class="card-title">Take a look at our special cats! </h5>
          <p class="card-text">Cats world have a large amounts of cats for adoptions</p>
          <a href="#" class="mybtn btn btn-primary">Special Cats</a>
        </div>
        <div class="card-footer text-muted">
          11-04-2019
        </div>
      </div>
      
        </div>
    </div>
  </div>

</div>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
      
      <ul class="list-group">
      <h3>Cats in slide</h3>
        <li class="list-group-item">British Shorthair</li>
        <li class="list-group-item">Bengal Cat</li>
        <li class="list-group-item">Maine Coon</li>
        <li class="list-group-item">Siamese Cat</li>
        <li class="list-group-item">Norwegian Forest</li>
      </ul>
      </div>

      <div class="col-md-8">
     <?php include('includes/carousel.php'); ?>
      </div>
   
      </div>
    </div>
  </div>


<?php include('includes/footer.php'); ?>