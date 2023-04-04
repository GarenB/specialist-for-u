<?php
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SpecialistForU</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>

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

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
  <ul class=carousel-indicators>
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="carousel-pictures" src="index/One1.jpg" >
      <div class="carousel-caption">
        <h1 class="display-2">SpecialistForU</h1>
        <h3>Find your specialist!</h3>
				<div class="row buttonsOfCarousel" >
					<form class="SeparateButtonOfCarousel" method="post" action='login.php'>
						<button  class="btn btn-outline-light btn-lg">Login</button>
					</form>
					<form class="SeparateButtonOfCarousel" method="post" action='register.php'>
						<button class="btn btn-primary btn-lg">Register</button>
					</form>
				</div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="carousel-pictures" src="index/p15.jpg" >
      <div class="carousel-caption">
        <h3 class="display-2" id="ayoo1">Hire Qualified Specialists</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="carousel-pictures" src="index/p24.jpg" >
      <div class="carousel-caption">
        <h3 class="display-2" id="ayoo2">Get The Job Done !</h3>
      </div>
    </div>
  </div>
</div>


<!--- Jumbotron -->





		  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <div class="ziss">
			<p class="lead">YOU'RE A SPECIALIST AND YOU WANT TO BE ON OUR WEBSITE ?</p>
      <div class="lead2">
      <h6 >we will contact you shortly by email</h6>
      </div>
      <form  method='post' action='apply.php'>
         <button class="btn btn-outline-secondary btn-lg" id=apple>Click here</button>
       </form>
      </div>
		</div>




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






<!--- Welcome Section -->
<figure>
  <div class="fixed-wrap">
    <div id="fixed">
			<div class="container-fluid padding">
			  <div class="row welcome text-center">
			    <div class="col-12">
			      <h1 id="mycolora1" class="display-4">Welcome</h1>
			    </div>
			    <hr>
			    <div class="col-12">
			      <p id="mycolora2" class="lead WWO">Welcome to SpecialistForU,  the website which lets you find a specialist whenever you need one.</p>
			    </div>
			  </div>
			</div>
    </div>
  </div>
</figure>






<!--- Three Column Section -->
<?php
/*<div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fas fa-code"></i>
      <h3>HTML5</h3>
      <p>Built with the latest version of HTML, HTML5.</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fas fa-bold"></i>
      <h3>BOOTSRAP</h3>
      <p>Built with the latest version of Bootstrap, Bootsrap 4.</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fab fa-css3"></i>
      <h3>CSS3</h3>
      <p>Built with the latest version of CSS, CSS3.</p>
    </div>
    </div>
  </div>
  <hr class="my-4">
</div>
*/
?>

<!--- Two Column Section -->
<div class="container-fluid padding TwoColumnSection1">
  <div class="row padding">
    <div class="col-lg-6">
      <h2>Why to choose us</h2>
      <p>SpecialistForU is a website where users can search for a specialist, read comments about him, and leave a review.</p>
      <p>Our website facilitates the interaction between qualified specialists and people who need a professional for repairs.</p>
      <p>It is a win-win situation for the specialists and for the clients because the specialists have a much bigger audience and clients find a trustworthy man to do the job.</p>
      <br>
      <a href="#" class="btn btn-primary">Learn More</a>
    </div>
    <div class="col-lg-6">
      <img src="index/p17.jpg" id="paddingphoto1" class="img-fluid">
    </div>
  </div>
</div>
<hr class="my-4">
<!--- Fixed background -->
<figure>
  <div class="fixed-wrap">
    <div id="fixed">
    </div>
  </div>
</figure>


<!--- Meet the team -->
<div class="container-fluid padding TwoColumnSection2">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">Meet the team</h1>
    </div>
    <hr>
  </div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
  <div class="row padding">
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="index/p22.jpg">
        <div class="card-body">
          <h4 class="card-title">Garen Boyadjian</h4>
          <p class="card-text">Garen is an established entrepreneur since the 2000's .</p>
          <a href="#" class="btn btn-outline-secondary">See Profile</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="index/p19.jpg">
        <div class="card-body">
          <h4 class="card-title">Garen Boyadjian</h4>
          <p class="card-text">Garen is a designer with almost 10 years of experience.</p>
          <a href="#" class="btn btn-outline-secondary">See Profile</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="index/p20.jpg">
        <div class="card-body">
          <h4 class="card-title">Garen Boyadjian</h4>
          <p class="card-text">Garen is a web developer with 10 years of experience.</p>
          <a href="#" class="btn btn-outline-secondary">See Profile</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
  <div class="row padding">
    <div class="col-lg-6">
      <h2>Our Philosophy</h2>
      <p>We know that the most important thing is the satisfaction of the customers who trust our services and the specialists that feature in our website. </p>
      <p>We read people's reviews and take the comments very siriously.</p>
      <p>Our priority is that people who need help will easily find it and have the job done.</p>
    <br>
    </div>
    <div class="col-lg-6" id="ayo">
      <img src="index/p11.jpg" class="img-fluid">
    </div>
  </div>
  <hr class="my-4">
</div>

<!--- Connect -->
<div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-12">
      <h2>Follow Us</h2>
    </div>
    <div class="col-12 social">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-google-plus-g"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</div>

<!--- Footer -->
<footer>
  <div class="container-fluid padding">
    <div class="row text-center">
      <div class="col-md-4">
        <img src="index/specialist1.png">
        <hr class="light">
        <p>555-555-5555</p>
        <p>SpecialistForU@gmail.com</p>
        <p>100 Street Name</p>
        <p>Mzher, Lebanon</p>
      </div>
      <div class="col-md-4">
        <hr class="light">
        <h5>About us</h5>
        <hr class="light">
        <p>News</p>
        <p>Term of Use</p>
        <a href="contactUs.php">Contact us</a>
      </div>
      <div class="col-md-4">
        <hr class="light">
        <h5>Service Area</h5>
        <hr class="light">
        <p>Beirut, Lebanon</p>
        <p>Jounieh, Lebanon</p>
        <p>Saida, Lebanon</p>
        <p>Sour, Lebanon</p>
      </div>
      <div class="col-12">
        <hr class="light-100">
        <h5>&copy; 2019 SpecialistForU</h5> <h10>All Rights Reserved</h10>
      </div>
    </div>
  </div>
</footer>



</body>
</html>
