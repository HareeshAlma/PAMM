<?php

$database="project";//database name

    


$con = mysqli_connect("localhost", "root", "", "project");


    if (!$con)
    {
    die('Could not connect: ' . mysqli_connect_error());
    }
    

mysqli_select_db($con,"$database");

function Signin()
{
if(2==3)
{
echo "hello";
}
else
{
echo "got it";
}
}


	Signin();


mysqli_close($con);
?>




