<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
require("db1.php");

$str = "select * from emp";
echo $str;
echo "<br>";
$result = mysqli_query($ans,$str) or die(mysqli_error($ans));
//pre tag is used for proper format output
echo "<pre>";
 print_r($result);
echo "</pre>";
//fetching data from database in 3 different format
	//while( $record = mysqli_fetch_row($result)){
    //while( $record = mysqli_fetch_assoc($result)){
	echo "<table border = 1 class = table> ";
   while( $record = mysqli_fetch_assoc($result)){
		//echo "<pre>";
		//print_r($record);
		//echo "</pre>";
		echo "<tr>";
		echo "<td>";
		echo $record['id'];
		echo "</td>";
		echo "<td>";
	    echo $record['name'];
		echo "</td>";
		echo "<td>";
		echo $record['age'];
		echo "</td>";
		echo "</tr>";
	}
	echo "</table>";

?>