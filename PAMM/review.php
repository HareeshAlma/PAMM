




<?php

$con = mysqli_connect("localhost","root","","project");

mysqli_select_db($con,"project");


$result = mysqli_query($con,"select distinct drug from drugs");
echo "<u>";
echo "LIST OF DRUGS";
echo "</u>";
echo "<br>";
while($row = mysqli_fetch_array($result))
{

echo $row['drug'];
echo "<br>";

}


?>















