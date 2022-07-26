<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <style>
body{
    background-image:url("15.jpg");
}
.kjh{
    font-size: 15px;
    display: block;
    margin-top:100px;
width: 800px;
height:400px;

  border: 3px solid black;
  position: static;
background-color:skyblue;
  float: center;
  
  border: 3px solid #73AD21;
  padding: 10px;
  
}
.io{
    font-size: 35px;  
font-weight:bold;
color:black;
}
        </style>
</head>
<body   >
  
   <center>
<div class ="kjh">
<?php
error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "grip1");
if($link === false)
die("ERROR: Could not connect. " . mysqli_connect_error());
$sql = "SELECT * FROM Customers";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<th><b> CUSTOMERS INFORMATION</b></th>";
echo "</tr>";
echo "<table>";
echo "<tr>";
echo "<th> Account_No</th>";
echo "<th> first_name</th>";
echo "<th>last_name</th>";
echo "<th>email_address</th>";
echo "<th>Current_Balance</th>";
echo "<th>Address</th>";
echo "<th>Contact_No.</th>";
echo "<th>Branch</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['Account_No'] . "</td>";
echo "<td>" . $row['First_Name'] . "</td>";
echo "<td>" . $row['Last_Name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['Current_Balance'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['Contact_no'] . "</td>";
echo "<td>" . $row['Branch_Name'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_free_result($result);
} else{
echo "No records matching your query were found.";
}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?> 
</div>
<BR>
<div class="io">
<a class="nav-link active" aria-current="page" href="index.html"  font="80px">Back</a>
</div>
</center>

</body>
</html>

