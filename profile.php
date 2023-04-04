<?php
    session_start();
 ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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
<!-- Display Specialist Cards -->


  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">Our Specialists</h1>
    </div>
    <hr>
  </div>


<?php

    include 'dbh.inc.php';

    $_Count=0;
    $_Count2=0;
    $_Count3=0;
    $_Count4=0;
    $sql = "SELECT * FROM specialist1";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck >0){


      while($row = mysqli_fetch_assoc($result)){

    $sql2="SELECT * FROM review WHERE review_specialist_id= $row[specialist_id]";
    $result2=mysqli_query($conn, $sql2);
    $resultCheck2 = mysqli_num_rows($result2);

    if($resultCheck2>0){
       while($row2 = mysqli_fetch_assoc($result2)){

         $_Count+= $row2['review_rating'];
         $_Count2+=1;

       }
       $_Count3=$_Count/$_Count2;
       $_Count4=(round($_Count3,0,PHP_ROUND_HALF_DOWN));
       $_Count5=(round($_Count3,1));

       if($_Count4==null OR $_Count4==0){
         echo"
                    <div class='col-md-4 WTF'>
                      <div class='card'>
                        <img class='card-img-top WWTF' src='specialists/".$row['specialist_photo'].".jpg'>
                        <div class='card-body'>
                          <h4 class='card-title'>".$row['specialist_first']."</h4>
                          <h4 class='card-title'>".$row['specialist_last']."</h4>
                          <div class='kiks'>
                          <x-star-rating>
                            <div class='star'></div>
                            <div class='star'></div>
                            <div class='star'></div>
                            <div class='star'></div>
                            <div class='star'></div>
                          </x-star-rating>
                          <p class='card-text'>".$_Count5." based on ".$_Count2." reviews</p>
                          </div>
                          <p class='card-text'>".$row['specialist_specialisation']."</p>
                          <p class='card-text'>".$row['specialist_number']."</p>
                          <p class='card-text'>".$row['specialist_city']."</p>
                          <form class='btn' method='post' action='DisplayReview.php'>
                          <button class='btn btn-outline-secondary' type='submit' name='Specialist_ID' value='$row[specialist_id]'>See Review </button>
                          </form>

                          <form class='btn' method='post' action='ReviewStar.php'>
                          <button class='btn btn-outline-secondary' type='submit' name='Specialist_ID' value='$row[specialist_id]'>Write Review </button>
                          </form>
                        </div>
                      </div>
                  </div>
                </div>


       ";
       }
       else if($_Count4==1){
         echo"
                    <div class='col-md-4 WTF'>
                      <div class='card'>
                        <img class='card-img-top WWTF' src='specialists/".$row['specialist_photo'].".jpg'>
                        <div class='card-body'>
                          <h4 class='card-title'>".$row['specialist_first']."</h4>
                          <h4 class='card-title'>".$row['specialist_last']."</h4>
                          <div class='kiks'>
                          <x-star-rating>
                            <div class='star full'></div>
                            <div class='star'></div>
                            <div class='star'></div>
                            <div class='star'></div>
                            <div class='star'></div>
                          </x-star-rating>
                          <p class='parev'>".$_Count5." stars based on ".$_Count2." reviews</p>
                          </div>
                          <p class='card-text'>".$row['specialist_specialisation']."</p>
                          <p class='card-text'>".$row['specialist_number']."</p>
                          <p class='card-text'>".$row['specialist_city']."</p>
                          <form class='btn' method='post' action='DisplayReview.php'>
                          <button class='btn btn-outline-secondary' type='submit' name='Specialist_ID' value='$row[specialist_id]'>See Review </button>
                          </form>

                          <form class='btn' method='post' action='ReviewStar.php'>
                          <button class='btn btn-outline-secondary' type='submit' name='Specialist_ID' value='$row[specialist_id]'>Write Review </button>
                          </form>
                        </div>
                      </div>
                  </div>
                </div>


       ";
       }
       else if($_Count4==2){
         echo"
                    <div class='col-md-4 WTF'>
                      <div class='card'>
                        <img class='card-img-top WWTF' src='specialists/".$row['specialist_photo'].".jpg'>
                        <div class='card-body'>
                          <h4 class='card-title'>".$row['specialist_first']."</h4>
                          <h4 class='card-title'>".$row['specialist_last']."</h4>
                          <div class='kiks'>
                          <x-star-rating>
                            <div class='star full'></div>
                            <div class='star full'></div>
                            <div class='star'></div>
                            <div class='star'></div>
                            <div class='star'></div>
                          </x-star-rating>
                          <p class='parev'>".$_Count5." stars based on ".$_Count2." reviews</p>
                          </div>
                          <p class='card-text'>".$row['specialist_specialisation']."</p>
                          <p class='card-text'>".$row['specialist_number']."</p>
                          <p class='card-text'>".$row['specialist_city']."</p>
                          <form class='btn' method='post' action='DisplayReview.php'>
                          <button class='btn btn-outline-secondary' type='submit' name='Specialist_ID' value='$row[specialist_id]'>See Review </button>
                          </form>

                          <form class='btn' method='post' action='ReviewStar.php'>
                          <button class='btn btn-outline-secondary' type='submit' name='Specialist_ID' value='$row[specialist_id]'>Write Review </button>
                          </form>
                        </div>
                      </div>
                  </div>
                </div>


       ";
       }
       else if($_Count4==3){
         echo"
                    <div class='col-md-4 WTF'>
                      <div class='card'>
                        <img class='card-img-top WWTF' src='specialists/".$row['specialist_photo'].".jpg'>
                        <div class='card-body'>
                          <h4 class='card-title'>".$row['specialist_first']."</h4>
                          <h4 class='card-title'>".$row['specialist_last']."</h4>
                          <div class='kiks'>
                          <x-star-rating>
                            <div class='star full'></div>
                            <div class='star full'></div>
                            <div class='star full'></div>
                            <div class='star'></div>
                            <div class='star'></div>
                          </x-star-rating>
                          <p class='parev'>".$_Count5." stars based on ".$_Count2." reviews</p>
                          </div>
                          <p class='card-text'>".$row['specialist_specialisation']."</p>
                          <p class='card-text'>".$row['specialist_number']."</p>
                          <p class='card-text'>".$row['specialist_city']."</p>
                          <form class='btn' method='post' action='DisplayReview.php'>
                          <button class='btn btn-outline-secondary' type='submit' name='Specialist_ID' value='$row[specialist_id]'>See Review </button>
                          </form>

                          <form class='btn' method='post' action='ReviewStar.php'>
                          <button class='btn btn-outline-secondary' type='submit' name='Specialist_ID' value='$row[specialist_id]'>Write Review </button>
                          </form>
                        </div>
                      </div>
                  </div>
                </div>


       ";
       }
       else if($_Count4==4){
         echo"
                    <div class='col-md-4 WTF'>
                      <div class='card'>
                        <img class='card-img-top WWTF' src='specialists/".$row['specialist_photo'].".jpg'>
                        <div class='card-body'>
                          <h4 class='card-title'>".$row['specialist_first']."</h4>
                          <h4 class='card-title'>".$row['specialist_last']."</h4>
                          <div class='kiks'>
                          <x-star-rating>
                            <div class='star full'></div>
                            <div class='star full'></div>
                            <div class='star full'></div>
                            <div class='star full'></div>
                            <div class='star'></div>
                          </x-star-rating>
                          <p class='parev'>".$_Count5." stars based on ".$_Count2." reviews</p>
                          </div>
                          <p class='card-text'>".$row['specialist_specialisation']."</p>
                          <p class='card-text'>".$row['specialist_number']."</p>
                          <p class='card-text'>".$row['specialist_city']."</p>
                          <form class='btn' method='post' action='DisplayReview.php'>
                          <button class='btn btn-outline-secondary' type='submit' name='Specialist_ID' value='$row[specialist_id]'>See Review </button>
                          </form>

                          <form class='btn' method='post' action='ReviewStar.php'>
                          <button class='btn btn-outline-secondary' type='submit' name='Specialist_ID' value='$row[specialist_id]'>Write Review </button>
                          </form>
                        </div>
                      </div>
                  </div>
                </div>


       ";
       }
       else if($_Count4==5){
         echo"
                    <div class='col-md-4 WTF'>
                      <div class='card'>
                        <img class='card-img-top WWTF' src='specialists/".$row['specialist_photo'].".jpg'>
                        <div class='card-body'>
                          <h4 class='card-title'>".$row['specialist_first']."</h4>
                          <h4 class='card-title'>".$row['specialist_last']."</h4>
                          <div class='kiks'>
                          <x-star-rating>
                            <div class='star full'></div>
                            <div class='star full'></div>
                            <div class='star full'></div>
                            <div class='star full'></div>
                            <div class='star full'></div>
                          </x-star-rating>
                          <p class='parev'>".$_Count5." stars based on ".$_Count2." reviews</p>
                          </div>
                          <p class='card-text'>".$row['specialist_specialisation']."</p>
                          <p class='card-text'>".$row['specialist_number']."</p>
                          <p class='card-text'>".$row['specialist_city']."</p>
                          <form class='btn' method='post' action='DisplayReview.php'>
                          <button class='btn btn-outline-secondary' type='submit' name='Specialist_ID' value='$row[specialist_id]'>See Review </button>
                          </form>

                          <form class='btn' method='post' action='ReviewStar.php'>
                          <button class='btn btn-outline-secondary' type='submit' name='Specialist_ID' value='$row[specialist_id]'>Write Review </button>
                          </form>
                        </div>
                      </div>
                  </div>
                </div>


       ";
       }

       $_Count=0;
       $_Count2=0;
       $_Count4=0;




}
}
}
