<?php
error_reporting(0); 
$email = $_POST['email'];
$newpassword = $_POST['newpassword'];
if($_POST['submit']=='Send')
{

$con = mysqli_connect('localhost','root','','project') or die(mysqli_error);
mysqli_select_db($con,'project');
//$query="select * from details where email='$email' and //activation_code='$code'";

$result = mysqli_query($con,"select * from details where email='$email'") or die(error);

if(mysqli_num_rows($result))
{
echo "done";
mysqli_query($con,"update details set password='$newpassword' where email='$email'");
 
echo "<script type='text/javascript'>\n";
echo "alert('your details are update successfully');\n";
echo 'window.location= "sign-in.html"';
echo "</script>"; 

}

else
{
echo "sorry try again";
}
}
?>


<html>
<body>
<form action="newpassword.php" method="POST">
Enter you email: <input type="text" name="email">
Enter you new password: <input type="text" name="newpassword">

<input type="submit" name="submit" value="Send">
</form>
</body>
</html>