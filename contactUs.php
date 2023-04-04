<?php
    session_start();
 ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="style.css" rel="stylesheet">

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img  src="index/specialist1.png"> </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.php">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Specialists</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
<?php
 if (isset($_SESSION['u_id'])){
   echo"  <li class='nav-item'>
   <form  method='post' action='logout.inc.php'>
      <button  class='nav-link btn btn-outline-secondary' type='submit' name='submit'>Logout</button>
    </form>
       </li>
   ";
 }
?>
      </ul>

    </div>

  </div>
</nav>


  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">Contact Us</h1>
    </div>
    <hr>
  </div>

<!-- Registor -->
<form action="contactus.inc.php" method="post" class="main-form needs-validation" novalidate>
  <div class="form-group">
    <label for="e-mail">Email</label>
    <input type="text" name="email" id="username" class="form-control">
    <div class="invalid-feedback">Invalide Email</div>
  </div>
  <div class="form-group">
    <textarea class='form-control animated' cols='50' id='new-review' name='text' placeholder='Enter your comments here...' rows='5' required></textarea>
    <div class="invalid-feedback">Invalide Comment</div>
  </div>


  <button class="btn btn-outline-primary" type="submit" name="contactus">Submit</button>
</form>

<script>
  var form=document.querySelector('.needs-validation');

  form.addEventListener('submit', function(event){
    if(form.checkValidity()=== false){
      event.preventDefault();
      event.stopPropagation();
    }
    form.classList.add('was-validated');
  })
</script>
