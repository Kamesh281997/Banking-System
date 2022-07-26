<?php 
error_reporting(0);
$x=1;
$link = mysqli_connect("localhost", "root", "", "grip1");
if($link === false)
die("ERROR: Could not connect. " . mysqli_connect_error());
$name = mysqli_real_escape_string($link, $_POST['nam']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$account = mysqli_real_escape_string($link, $_POST['acc']);
$address = mysqli_real_escape_string($link, $_POST['add']);
 


$contact = mysqli_real_escape_string($link, $_POST['contact']);
$query = mysqli_real_escape_string($link, $_POST['query']);



$checkbox1 = $_POST['c1'];
    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  

     
// attempt insert query execution
$sql = "INSERT INTO contact (Name, Email, Account_No,Address,Contact_No,Type_Of_Ac,Query) VALUES ('$name', '$email', '$account','$address','$contact','$chk','$query')";
if(mysqli_query($link, $sql))
echo "Records added successfully.";
else
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
mysqli_close($link);
?>