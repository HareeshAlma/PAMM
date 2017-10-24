<?php
session_start();
$drug1 = $_SESSION['drug1'];


//$drug = $_POST['drug'];

$con = mysqli_connect("localhost", "root", "", "project");

mysqli_select_db($con,"project");



$result = mysqli_query($con,"select * from drugs where drug='$drug1'");
echo "<table>";
echo "<tr>";
echo "<td style='padding-left:10px'>";

while($row = mysqli_fetch_assoc($result))
{
echo "SHARED BY :";
echo "<br>";
foreach($row as $key => $val){
        
       echo $key . ": " . $val . "<BR />";

    }
echo "<br>";
}


echo "</td>";
echo "</tr>";

//echo "SORRY, THE DRUG REQUESTED IS NOT AVAILABLE TILL NOW";

//echo "<tr>";

//echo "<td>";
//echo "stats:";
//$result2 = mysqli_query($con,"select min(recommend) from drugs where //drug='$drug1'");
//while($row2 = mysqli_fetch_array($result2))
//{
//echo $val;
//}
//echo "</td>";
//echo "</tr>";
echo "</table>";

?>
