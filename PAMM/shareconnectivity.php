<?php
//include 'sign-inconnectivity.php';


$database="project"; //database name
$drug=$_POST['drug'];//this values comes from html file after submitting 
$uses=$_POST['uses'];    
//$email=$_POST['email'];
//$user=$_POST['user'];


$con = mysqli_connect("localhost", "root", "", "project");//for wamp //3rd feild is balnk


    if (!$con)
    {
    die('Could not connect: ' . mysqli_connect_error());
    }
    

mysqli_select_db($con,"$database");

//$result_1 = mysqli_query($con,"SELECT * FROM details WHERE email = '$_POST//[email]'");
//$row1 = mysqli_fetch_row($result_1);
//$m = $row1[0];


//$query = "INSERT INTO info (first,last)VALUES ('$first','$last')";
//mysqli_query($query);

//$m = mysqli_query($con,"select email from details where email = '$_POST[email]'");

//mysqli_query($con,"INSERT INTO drugs (email) 
//SELECT email FROM details);
 //VALUES ('$email','$drug','$uses')");
$result = mysqli_query($con,"select email from details");
echo "$result";
echo "<script type='text/javascript'>\n";
//echo "alert('thanks for sharing your experience');\n";
//echo 'window.location= "home1.html"';
echo "</script>"; 


mysqli_close($con);
?>
