<?php
  if (isset($_POST['submit'])){
    session_start();
    session_unset();
    session_destroy();
    //header("Location: ../index.php");
     echo "<script>window.location.href='\index.php'; alert('You logged out !');</script>";
    exit();
  }
