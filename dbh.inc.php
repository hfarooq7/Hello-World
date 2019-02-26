<?php

$dbServername = "lamp.scim.brad.ac.uk";
$dbUsername = "hfarooq7";
$dbPassword = "hfarooq7";
$dbName = "hfarooq7";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$query = "SELECT * FROM student";
$result = mysqli_connect($connect, $query);
$chart_data = '';
while($row - mysqli_connect($result))
{
  $chart_data .= "{NameID:'".$row["Name"]."', AddressID:".$row["Address"].",HouseNameNo:".$row["House Name No"].",FirstName:".$row["First Name"].",Surname:".$row["Surname"].", TelNo:".$row["Telephone"]."},";
}
$chart_data = substr($chart_data, 0, -2);
 ?>
