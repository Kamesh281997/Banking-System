<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
error_reporting(0);

$x=1;
$link = mysqli_connect("localhost", "root", "", "grip1");
if($link === false)
die("ERROR: Could not connect. " . mysqli_connect_error());
$fname = mysqli_real_escape_string($link, $_POST['fname']);
$lname = mysqli_real_escape_string($link, $_POST['lname']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$balance = mysqli_real_escape_string($link, $_POST['balance']);
 


$address = mysqli_real_escape_string($link, $_POST['address']);
$contact = mysqli_real_escape_string($link, $_POST['contact']);
$branch = mysqli_real_escape_string($link, $_POST['branch']);



     
// attempt insert query execution
$sql = "INSERT INTO customers (First_Name, Last_Name,email,Current_Balance,Address,Contact_No, Branch_Name) VALUES ('$fname','$lname', '$email','$balance', '$address','$contact','$branch')";
if(mysqli_query($link, $sql))
echo "Records added successfully.";
else
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
mysqli_close($link);
?>