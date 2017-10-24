

<?php 
error_reporting(0);
$email=$_POST['email'];
if($_POST['submit']=='Send')
{
$con = mysqli_connect('localhost','root','','project') or die(mysqli_error);
mysqli_select_db($con,'project');
$query="select * from details where email='$email'";
$result=mysqli_query($con,"select * from details where email='$email'") or die(error);
if(mysqli_num_rows($result))
{
echo "mail sent";
$code=rand(100,999);
$subject="forgot password";
$message="You activation link is: forgot.php";
mail($email, $subject, $message);
echo $code;
mysqli_query($con,"update details set activation_code=$code WHERE email='$email'");

echo "<script type='text/javascript'>\n";
echo "alert('please reset your details');\n";
echo 'window.location= "newpassword.php"';
echo "</script>"; 


}

else
{
echo "No user exist with this email id";
}
}
?>
<html>
<body>
<form action="forgot.php" method="post">
Enter you email ID: <input type="text" name="email">
<input type="submit" name="submit" value="Send">
</form>
</body>
</html>