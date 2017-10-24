<?php
session_start();
$drug1 = $_SESSION['drug1'];



$con = mysqli_connect("localhost", "root", "", "project");

mysqli_select_db($con,"project");

echo "<table>";

echo "<tr>";

echo "<td>";
echo "RECOMMENDED :";
echo "<br>";


$result2 = mysqli_query($con,"select min(recommend) from drugs where drug='$drug1'");
while($row2 = mysqli_fetch_array($result2))
{
foreach($row2 as $key => $val){
        
          }
echo "lowest rating : ";
echo $val;
}
echo "</td>";
echo "</tr>";

echo "<tr>";

echo "<td>";


$result2 = mysqli_query($con,"select max(recommend) from drugs where drug='$drug1'");
while($row2 = mysqli_fetch_array($result2))
{
foreach($row2 as $key => $val){
        
          }
echo "highest rating : ";
echo $val;
}
echo "</td>";
echo "</tr>";



echo "<tr>";

echo "<td>";

$result2 = mysqli_query($con,"select avg(recommend) from drugs where drug='$drug1'");
while($row2 = mysqli_fetch_array($result2))
{
foreach($row2 as $key => $val){
        
          }
echo "average rating : ";
echo $val;
}
echo "</td>";
echo "</tr>";


echo "<tr height=30px>";
echo "<td>";
echo " ";
echo "</td>";
echo "</tr>";







echo "<tr>";

echo "<td>";
echo "SATISFACTION :";
echo "<br>";


$result2 = mysqli_query($con,"select min(satisfaction) from drugs where drug='$drug1'");
while($row2 = mysqli_fetch_array($result2))
{
foreach($row2 as $key => $val){
        
          }
echo "lowest rating : ";
echo $val;
}
echo "</td>";
echo "</tr>";

echo "<tr>";

echo "<td>";


$result2 = mysqli_query($con,"select max(satisfaction) from drugs where drug='$drug1'");
while($row2 = mysqli_fetch_array($result2))
{
foreach($row2 as $key => $val){
        
          }
echo "highest rating : ";
echo $val;
}
echo "</td>";
echo "</tr>";



echo "<tr>";

echo "<td>";

$result2 = mysqli_query($con,"select avg(satisfaction) from drugs where drug='$drug1'");
while($row2 = mysqli_fetch_array($result2))
{
foreach($row2 as $key => $val){
        
          }
echo "average rating : ";
echo $val;
}
echo "</td>";
echo "</tr>";








echo "</table>";

?>
