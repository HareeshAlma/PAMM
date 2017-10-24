<?php

$database="hareesh"; //database name
$fname=$_POST['fname'];//this values comes from html file after submitting 
$lname=$_POST['lname'];
$email=$_POST['email'];    
$user=$_POST['user'];
$pass=$_POST['pass'];


$con = mysqli_connect("192.168.1.16", "check", "check", "hareesh");//for wamp //3rd feild is balnk


    if (!$con)
    {
    die('Could not connect: ' . mysqli_connect_error());
    }
    

mysqli_select_db($con,"$database");




//$query = "INSERT INTO info (first,last)VALUES ('$first','$last')";
//mysqli_query($query);

mysqli_query($con,"INSERT INTO details (fname,lname,email,user,pass) 
VALUES ('$fname','$lname','$email','$user','$pass')");

echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly registered');\n";
echo 'window.location= "index.html"';
echo "</script>"; 


mysqli_close($con);
?>
