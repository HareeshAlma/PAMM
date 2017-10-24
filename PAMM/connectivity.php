<?php

$database="hareesh";//database name

    


$con = mysqli_connect("192.168.1.16", "check", "check", "hareesh");


    if (!$con)
    {
    die('Could not connect: ' . mysqli_connect_error());
    }
    

mysqli_select_db($con,"$database");

/*
$ID = $_POST['user']; 
$Password = $_POST['pass'];
 */

function Signin()
{

if(!empty($_POST['user']))

{ 
$con = mysqli_connect("192.168.1.16", "check", "check", "hareesh");
$result = mysqli_query($con , "SELECT * FROM details where user = '$_POST[user]' AND pass = '$_POST[pass]'");

$row = mysqli_fetch_array($result);

if(!empty($row['user']) AND !empty($row['pass'])) 
{ 

   $_SESSION['user'] = $row['pass']; 
echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly logged in, click ok');\n";
echo 'window.location= "home.html"';
echo "</script>"; 
//Redirect();
} 
else

{
echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
echo '<img src="../admin/upload/' . $display_img . '" width="120px" height="120px" />'; 
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




