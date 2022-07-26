<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 

<style>
body{
    background-image:url("20.jpg");
    height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}

.trns{
    font-size: 25px;
    font-weight: bold;
    display: block;
    color:purple;
    background-image:url("19.jpg");
    height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
  margin: auto;
  border: 3px solid black;
  position: static;
  
  width: 700px;
  float:left;
  border: 3px solid #73AD21;
  padding: 10px;
  height: 800px;
  clear: both;
}
.trns input {
  width: 100%;
  clear: both;
}
#hd{
    font-size: 35px;
    font-weight: bold;
    text-align:center;
    color:blue;
    
}
#bc{
    font-size: 35px;
    font-weight: bold;
    text-align:center;
    color:black;
    
    float:center;

}
#lllk{
    font-size: 30px;

    text-align:center;
    color:white;
    background:green;
}
.yu{
    display:inline;
    height:300px;
    width:300px;
    float: right;
    margin-top:10px;
}
</style>

</head>
<body>


    <div id="hd">
<h2>Money Transfer</h2>
</div>
<div class="trns">
<form action="<?php $_PHP_SELF ?>" method="post">
   
<label>From</label><br><br>
   <label>Account Number</label>
<input type="text" name="search2"><br><br>
<label>First Name</label>
<input type="text" name="search3"><br><br>
<label>Last Name</label>
<input type="text" name="search4"><br><br>
<label>To</label><br><br>
<label>Account Number</label>
<input type="text" name="search5"><br><br>
<label>First Name</label>
<input type="text" name="search6"><br><br>
<label>Last Name</label>
<input type="text" name="search7"><br><br>

<label>Amount</label>
<input type="text" name="search8"><br>
<br>
<br>
<input type="submit" name="submit" value="Submit" style=" font-size: 20px " style=" color:magenta">
<br>
<a id="bc" aria-current="page" href="index.html"  font="80px">Back</a>
    
</div>
<div >
    <br>
<center>
<div class="yu">
<div class="tenor-gif-embed" data-postid="12511873" data-share-method="host" data-aspect-ratio="1" data-width="100%"><a href="https://tenor.com/view/friday-pay-day-still-waiting-waiting-for-bank-transfer-waiting-to-get-paid-gif-12511873">Friday Pay Day GIF</a>from <a href="https://tenor.com/search/friday-gifs">Friday GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
    <div class="tenor-gif-embed" data-postid="18331346" data-share-method="host" data-aspect-ratio="0.83125" data-width="100%"><a href="https://tenor.com/view/money-donald-duck-cash-counting-gif-18331346">Money Donald Duck GIF</a>from <a href="https://tenor.com/search/money-gifs">Money GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
</div>

</center>
</div>

<?php
error_reporting(0);
$value=$_POST["search2"];
$value1=$_POST["search3"];
$value2=$_POST["search4"];
$value3=$_POST["search5"];
$value4=$_POST["search6"];
$value5=$_POST["search7"];
$value6=$_POST["search8"];
$con=new mysqli("localhost", "root","", "grip1");
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        
        $sql="SELECT * FROM `customers` WHERE Account_No='$value' AND First_Name='$value1' AND Last_Name='$value2'";
        $sql1="SELECT * FROM `customers` WHERE Account_No='$value3' AND First_Name='$value4' AND Last_Name='$value5'";
        $res=$con->query($sql);
        $res1=$con->query($sql1);
        while($row=$res->fetch_assoc()  ){
            while($row1=$res1->fetch_assoc()){
                if($value6<=$row["Current_Balance"]){
                    $sql7="INSERT INTO transfer VALUES($value,'$value1','$value2',$value3,'$value4','$value5',$value6)";

                $v=$row["Current_Balance"];
            
                $w=$row1["Current_Balance"];
                $b=$w+$value6;
                $sql3="UPDATE `customers` SET Current_Balance=$b WHERE Account_No=$value3";
                
                $sql5="UPDATE `customers` SET Current_Balance=$v-$value6 WHERE First_Name='$value1'";
               $an= $row["Account_No"];
               $fn=$row["First_Name"];
               $ln=$row["Last_Name"];
               $an1= $row1["Account_No"];
               $fn1=$row1["First_Name"];
               $ln1=$row1["Last_Name"];
                
                
                

if(mysqli_query($con, $sql5)){
    if(mysqli_query($con, $sql3)){
        echo '<script>alert("Records added successfully")</script>';

    }
}
else
echo "ERROR: Could not able to execute $sql5. " . mysqli_error($con);

mysqli_close($con);

                }else{
                    echo '<script>alert("InSufficient Balance")</script>';
                   
                }
            
        }    
        }
      
        }
?>



</form>
<br>

</body>
</html>