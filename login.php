<?php
  session_start();
  if(isset($_POST))
  $conn = new mysqli("localhost", "root" ,"" ,"college");        
  $username = $_POST['email'];
  $pwd = $_POST['password'];  
  $_SESSION["user"] = $username;      
  //$usertype = $_POST['usertype'];
  if($conn ->connect_error){
    die("failed to connect");
  } else {
  $stmt = $conn->prepare("SELECT * FROM logininfo WHERE `rollno` = '$username' && `password`= '$pwd'");
  $stmt -> execute();
  
  $stmt_result = $stmt->get_result();
  
  
  if($stmt_result->num_rows==1){
    $_SESSION["user"] = $username;
    $row = $stmt_result->fetch_assoc();
    $usertype = $row['type'];
    
    //$row = array($stmt_result->fetch_row());
    if($usertype==="student"){
    header('location: ./Student/Main/Main.html');
    } else if($usertype==="teacher"){
      header('location: ./Teacher/TMain/Main.html');
    } else if($usertype==="admin"){
      header('location: ./Admin/adminMain.html');
    } else {
      header('location: ./Invalid.html');
    }
  }else{
    header('location: ./Invalid.html');
  }
}
?>