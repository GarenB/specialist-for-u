<?php

session_start();

if(isset($_POST['submit'])){

  include 'dbh.inc.php';

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  //Error handlers
  //Check if inputs are empty
  if(empty($uid) || empty($pwd)){
    header("Location: ../index.php?login=empty");
    exit();
  }
  else{
    $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1){
      //header("Location: ../index.php?login=error");
      echo "<script>window.location.href='\login.php'; alert('This account does not exist !');</script>";
      exit();
    }
    else{
      if($row = mysqli_fetch_assoc($result)){
        //De-hashing the password
        $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
        if ($hashedPwdCheck == false){
        //  header("Location: ../index.php?login=error");
          echo "<script>window.location.href='\login.php'; alert('Password is incorrect !');</script>";
          exit();
        }
        elseif($hashedPwdCheck == true){
          //Log in the user here
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_first'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_uid'] = $row['user_uid'];
          //header("Location: ../index.php?login=success");
          echo "<script>window.location.href='\index.php';alert('You successfuly logged in !');</script>";
          exit();
        }
      }
    }
  }

}
else{
  header("Location: ../index.php?login=error");
  exit();
}
