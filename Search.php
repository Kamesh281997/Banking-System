<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body{
    background-image:url("13.jpg");
    height: 100%;
    background-repeat: no-repeat;
}

th{
    font-size: 25px;
}
.hl{
    font-size: 25px;
    font-weight: bold;
    display: block;
    
  margin: auto;
  border: 3px solid black;
  position: static;
  background-image:url("12.jpg");
  float: right;
  width: 400px;
  border: 3px solid #73AD21;
  padding: 10px;
  height: 500px;
}
.lk{
    font-size: 25px;
    font-weight: bold;
    display: block;
    width: 400px;
  margin: auto;
  border: 3px solid black;
  position: static;
  background-image:url("12.jpg");
  height: 500px;

  float: left;
  
  border: 3px solid #73AD21;
  padding: 10px;
}
.txet{
    height:100%;
   background-position: center;
background-repeat: no-repeat;
background-size: cover;
    font-size: 30px;
    font-style: italic;
    font-family: "Times New Roman", Times, serif;
    color:magenta;
}

    </style>

</head>
<body>
<center>
    <br><br>
    <div class="txet">
<form action="" method="post">
   
<input type="text" name="sea1">
<input type="submit" name="submit" value="Search" style=" font-size: 20px " style=" color:magenta">

</form>
</div>
<br>

    <div class="lk">
<?php
error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "grip1");
if($link === false)
die("ERROR: Could not connect. " . mysqli_connect_error());
$sql = "SELECT * FROM Customers";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<th> CUSTOMERS INFORMATION</th>";
echo "</tr>";
echo "<table>";
echo "<tr>";
echo "<th> Account_No</th>";
echo "<th> first_name</th>";
echo "<th>last_name</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['Account_No'] . "</td>";
echo "<td>" . $row['First_Name'] . "</td>";
echo "<td>" . $row['Last_Name'] . "</td>";

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
<div class="hl">
<?php
 error_reporting(0);
$con=new mysqli("localhost", "root","", "grip1");
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $value=$_POST["sea1"];
        $sql="SELECT * FROM `customers` WHERE First_Name='$value'";

        $res=$con->query($sql);

        while($row=$res->fetch_assoc()){
            echo  '<b>Account_No</b>:: '.$row["Account_No"];echo "<br><br>";
            echo  '<b>First Name</b>:: '.$row["First_Name"];echo "<br><br>";
            echo '<b>Last Name</b>::    '.$row["Last_Name"];echo "<br><br>";
            echo  '<b>Email</b>::  '. $row["email"] ;echo "<br><br>";
            echo  '<b>Current Balance</b>::  '. $row["Current_Balance"] ;echo "<br><br>";
            echo  '<b>Address</b>:: '. $row["Address"];echo "<br><br>";
            echo  '<b>Contact no.</b>::  '. $row["Contact_no"] ;echo "<br><br>";
            echo  '<b>Branch Name</b>::  '. $row["Branch_Name"] ;echo "<br><br>";
            }       

        }
?>
</div>
<a class="nav-link active" aria-current="page" href="index.html" color="red" font="40px">Back</a>
</center>

</body>
</html>