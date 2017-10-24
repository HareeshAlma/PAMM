<?php
session_start();
$var = $_SESSION['mail'];
echo $var;
$con = mysqli_connect("localhost", "root", "", "project");
mysqli_select_db($con,"project");


$drug = $_POST['drug'];
$uses = $_POST['uses'];
$gender = $_POST['sex'];
$recommend = $_POST['recommend'];
$satisfaction = $_POST['satisfaction'];



mysqli_query($con,"INSERT INTO drugs (email,drug,uses,gender,recommend,satisfaction)VALUES ('$var','$drug','$uses','$gender','$recommend','$satisfaction')");

echo "<script type='text/javascript'>\n";
echo "alert('thanks for sharing your experience');\n";
echo 'window.location= "homee.html"';
echo "</script>"; 



?>