<?php
session_start();
$_SESSION['mail']=$_POST['email'];

$var = $_SESSION['mail'];


$database="project";//database name



$con = mysqli_connect("localhost", "root", "", "project");

$image = "image.jpg";
    if (!$con)
    {
    die('Could not connect: ' . mysqli_connect_error());
    }
    

mysqli_select_db($con,"$database");



/*
$ID = $_POST['email']; 
$Password = $_POST['password'];
 */

function Signin()
{

if(!empty($_POST['email']))

{ 
$con = mysqli_connect("localhost", "root", "", "project");
$result = mysqli_query($con , "SELECT * FROM details where email = '$_POST[email]' AND password = '$_POST[password]'");

$row = mysqli_fetch_array($result);

if(!empty($row['email']) AND !empty($row['password'])) 
{ 

   $_SESSION['email'] = $row['password'];
echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly logged in, click ok');\n";
echo 'window.location= "homee.html"';
echo "</script>"; 
//Redirect();
} 
else

{
echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
echo '<img src="image.jpg" />'; 
}

}
}

if(isset($_POST['submit']))
{
	Signin();
}

//function Redirect()
//{
//$url = 'www.google.com';    
//echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

//print( '<a href="http://mylink.com/path/">Click Me</a>' );
//}









mysqli_close($con);
?>


<html lang="en">
<head>

<title>This is a test</title>


<style type="text/css">
body
{
background-image:url('<?php echo $image ?>');
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<p>This is a test.</p>

</body>
</html>

