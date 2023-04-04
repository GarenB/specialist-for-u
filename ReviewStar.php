<?php
    session_start();
    include 'dbh.inc.php';
    $Special_ID = $_POST['Specialist_ID'];
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
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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



<!--Star Review-->
<?php /*
<form class="rating" action="displayReviews.php">
  <input  type="radio" name="star" id="star1" value="1"><label for="star1"></label>
  <input  type="radio" name="star" id="star2" value="2"><label for="star2"></label>
  <input  type="radio" name="star" id="star3" value="3"><label for="star3"></label>
  <input  type="radio" name="star" id="star4" value="4"><label for="star4"></label>
  <input  type="radio" name="star" id="star5" value="5"><label for="star5"></label>
  <input type="submit"/>
</form>
*/
 ?>




<!--Button to Send rating-->
<?php
  if (isset($_SESSION['u_id'])){
  echo "
<form  method='post' action='review.inc.php'>
  <div class='rating'>
    <input  type='radio' name='star' id='star1' value='5'><label for='star1'></label>
    <input  type='radio' name='star' id='star2' value='4'><label for='star2'></label>
    <input  type='radio' name='star' id='star3' value='3'><label for='star3'></label>
    <input  type='radio' name='star' id='star4' value='2'><label for='star4'></label>
    <input  type='radio' name='star' id='star5' value='1'><label for='star5'></label>
  </div>

 <div class='btn'>
   <textarea class='form-control animated' cols='50' id='new-review' name='comment' placeholder='Enter your review here...' rows='5'></textarea>
 </div>
 <input type='hidden' name='user_ID' value= '$_SESSION[u_id]'>
 <button class='btn' type='submit' name='SpecialistID' value='$Special_ID'>Send</button>

</form>
";
}
else echo"
<h2 id='megha2'>Please sign in or login to review</h2>
<form id='megha' method='post' action='register.php'>
  <button class='btn btn-primary btn-lg'>Register</button>
</form>
<form id='megha3' method='post' action='login.php'>
  <button class='btn btn-outline btn-lg'>Login</button>
</form>


";
?>
