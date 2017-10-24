<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email id:</td><td><input type='text' name='email'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{ 
 $con = mysqli_connect("192.168.1.16", "check", "check", "hareesh");
 mysqli_select_db($con,'hareesh') or die(mysql_error($con));
 $email=$_POST['email'];
 $result = mysqli_query($con,"select * from details where email='".$email."' ") or die(mysqli_error($con));
 $p=mysqli_affected_rows($con);
 if($p!=0) 
 {
  $res=mysqli_fetch_array($result);
  $to=$res['email'];
  $subject='Remind password';
  $message='Your password : '.$res['pass']; 
  $headers='From:hareeshreddy0506@gmail.com';
  $m=mail($to,$subject,$message,$headers);
  if($m)
  {
    echo'Check your inbox in mail';
  }
  else
  {
   echo'mail is not send';
  }
 }
 else
 {
  echo'You entered mail id is not present';
 }
}
?>
</body>
</html>