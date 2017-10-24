<?php

$con = mysqli_connect("192.168.1.16", "check", "check", "hareesh");

mysqli_select_db($con,"hareesh")
        
$user = $_POST['user'];        
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysqli_query($con, "SELECT * FROM details WHERE 
user='$_POST[user]'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        if($newpassword=$confirmnewpassword)
      
  $res = mysqli_query($con,"UPDATE details SET pass='$_POST[newpassword]' where user='$_POST[user]'");
        if($res)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }

      ?>