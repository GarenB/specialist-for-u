<?php
    session_start();
    if (isset($_SESSION['u_id'])){
    $YOURID=$_SESSION['u_id'];
  //  echo $YOURID;
}
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

<!--Display Review-->

<?php

    include 'dbh.inc.php';
    $Special_ID = $_POST['Specialist_ID'];




 $sql1 = "SELECT * FROM review WHERE review_specialist_id = $Special_ID" ;
 $result1 = mysqli_query($conn, $sql1);
 $resultCheck1 = mysqli_num_rows($result1);
 if($resultCheck1 >0){
           while($row1 = mysqli_fetch_assoc($result1)){


             $sql2="SELECT * FROM users WHERE user_id= $row1[review_user_id]";
             $result2=mysqli_query($conn, $sql2);
             $resultCheck2 = mysqli_num_rows($result2);
             if($resultCheck2>0){
               while($row2=mysqli_fetch_assoc($result2)){

                if($row1['review_rating']==null OR $row1['review_rating']==0){
                  echo"

                  <div class='media'>
                    <div class='media-body'>
                    <x-icons-rating1>
                      <div class='icons'></div>
                    </x-icons-rating1>
                      <h5 class='mt-0 font-weight-bold' id='coulor'>".$row2['user_first']." ".$row2['user_last']."</h5>
                      <div class='yesem'>
                      <div>
                      <x-star-rating1>
                        <div class='star'></div>
                        <div class='star'></div>
                        <div class='star'></div>
                        <div class='star'></div>
                        <div class='star'></div>
                      </x-star-rating1>
                        </div>
                      ".$row1['review_text']."
                        </div>

                    </div>
                  </div>

                  ";
                }

                else if($row1['review_rating']==1){
                    echo"

                    <div class='media'>
                      <div class='media-body'>

                      <x-icons-rating1>
                        <div class='icons'></div>
                      </x-icons-rating1>
                        <h5 class='mt-0 font-weight-bold' id='coulor'>".$row2['user_first']." ".$row2['user_last']."</h5>

                        <div class='yesem'>
                        <div>
                        <x-star-rating1>
                          <div class='star full'></div>
                          <div class='star'></div>
                          <div class='star'></div>
                          <div class='star'></div>
                          <div class='star'></div>
                        </x-star-rating1>
                        </div>
                        ".$row1['review_text']."

                        </div>
                      </div>
                    </div>

                    ";
                  }
                 else   if($row1['review_rating']==2){
                     echo"

                     <div class='media'>
                       <div class='media-body'>
                       <x-icons-rating1>
                         <div class='icons'></div>
                       </x-icons-rating1>
                         <h5 class='mt-0 font-weight-bold' id='coulor'>".$row2['user_first']." ".$row2['user_last']."</h5>
                         <div class='yesem'>
                         <div>
                         <x-star-rating1>
                           <div class='star full'></div>
                           <div class='star full'></div>
                           <div class='star'></div>
                           <div class='star'></div>
                           <div class='star'></div>
                         </x-star-rating1>
                           </div>
                         ".$row1['review_text']."
                           </div>

                       </div>
                     </div>

                     ";
                   }
                   else   if($row1['review_rating']==3){
                       echo"

                       <div class='media'>
                         <div class='media-body'>
                         <x-icons-rating1>
                           <div class='icons'></div>
                         </x-icons-rating1>
                           <h5 class='mt-0 font-weight-bold' id='coulor'>".$row2['user_first']." ".$row2['user_last']."</h5>
                           <div class='yesem'>
                           <div>
                           <x-star-rating1>
                             <div class='star full'></div>
                             <div class='star full'></div>
                             <div class='star full'></div>
                             <div class='star'></div>
                             <div class='star'></div>
                           </x-star-rating1>
                             </div>
                           ".$row1['review_text']."
                             </div>

                         </div>
                       </div>

                       ";
                     }
                     else if($row1['review_rating']==4){
                         echo"

                         <div class='media'>
                           <div class='media-body'>
                           <x-icons-rating1>
                             <div class='icons'></div>
                           </x-icons-rating1>
                             <h5 class='mt-0 font-weight-bold' id='coulor'>".$row2['user_first']." ".$row2['user_last']."</h5>
                             <div class='yesem'>
                             <div>
                             <x-star-rating1>
                               <div class='star full'></div>
                               <div class='star full'></div>
                               <div class='star full'></div>
                               <div class='star full'></div>
                               <div class='star'></div>
                             </x-star-rating1>
                               </div>
                             ".$row1['review_text']."
                               </div>

                           </div>
                         </div>

                         ";
                       }
                       else if($row1['review_rating']==5){
                           echo"

                           <div class='media'>
                             <div class='media-body'>
                             <x-icons-rating1>
                               <div class='icons'></div>
                             </x-icons-rating1>
                               <h5 class='mt-0 font-weight-bold' id='coulor'>".$row2['user_first']." ".$row2['user_last']."</h5>
                               <div class='yesem'>
                               <div>
                               <x-star-rating1>
                                 <div class='star full'></div>
                                 <div class='star full'></div>
                                 <div class='star full'></div>
                                 <div class='star full'></div>
                                 <div class='star full'></div>
                               </x-star-rating1>
                                 </div>
                               ".$row1['review_text']."
                                 </div>

                             </div>
                           </div>

                           ";
                         }
                        if (isset($_SESSION['u_id'])){
                         if($YOURID==$row1['review_user_id']){
                          // echo $YOURID;
                          // echo $row1['review_user_id'];
                          // echo $row1['review_text'];
                          // echo "'.$row1[review_text].'";
                           echo"


                           <form class='hos'  method='post' action='updatereview.php'>
                            <input type='hidden' name='user_ID' value= $_SESSION[u_id]>
                            <input type='hidden' name='text' value= '".$row1['review_text']."'>
                            <input type='hidden' name='rating' value= $row1[review_rating]>
                            <input type='hidden' name='reviewID' value= $row1[review_id]>

                            <button class=' btn btn-outline-secondary' type='submit' name='SpecialistID' value='$Special_ID'>Edit</button>
                           </form>

                           <form class='hos'  method='post' action='delete.inc.php'>
                          <button class=' btn btn-outline-secondary' type='submit' name='Delete' value= $row1[review_id]>Delete</button>
                           </form>

                           ";
                         }

                       }
               }
             }






}

}
