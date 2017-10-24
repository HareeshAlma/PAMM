<?php

$database="project"; //database name
$firstname=$_POST['firstname'];//this values comes from html file after submitting 
$lastname=$_POST['lastname'];
$email=$_POST['email'];    
//$user=$_POST['user'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

$con = mysqli_connect("localhost", "root", "", "project");//for wamp //3rd feild is balnk


    if (!$con)
    {
    die('Could not connect: ' . mysqli_connect_error());
    }
    

mysqli_select_db($con,"$database");




//$query = "INSERT INTO info (first,last)VALUES ('$first','$last')";
//mysqli_query($query);

if($password == $confirmpassword)
{
mysqli_query($con,"INSERT INTO details (firstname,lastname,email,password,confirmpassword) 
VALUES ('$firstname','$lastname','$email','$password','$confirmpassword')");

echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly registered');\n";
echo 'window.location= "index.html"';
echo "</script>"; 
}
else
{
echo "passwords not match";
}
mysqli_close($con);
?>
