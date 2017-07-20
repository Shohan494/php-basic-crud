<?php
include_once 'connect.php';
include_once 'crud.php';

$newConnect = new databaseConnect();
$newConnect->dbConnect();

?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
.centered {padding-top: 20px;}
form {
    width: 750px;
    margin: 0 auto;
}
body{
 background-color: #AFDEE4;
}
</style>
</head>
<body>  
<h2 style='text-align: center'>Student Name : XYZ</h2>
<h2 style='text-align: center'>Group No : 23124124</h2>
<hr>

<div class="centered">
<h2 style='text-align: center'>Registration Form</h2>

<?php

$queryname = $queryroll = $querycity = $querygender = $checkstatusmale =
  $checkstatusfemale = "";

if(isset($_POST['submit2']))
  {
   $searchvalue = $_POST['search'];
   echo $searchvalue;
     
   $result = mysqli_query($newConnect->dbConnect(), "SELECT * from std_info WHERE name = '$searchvalue'") or die("Data Didn't Inserted Succesfully");

    $row = mysqli_fetch_array($result);

    $queryname = $row['name'];
    $queryroll = $row['roll'];
    $querygender = $row['gender'];
    $querycity = $row['city'];

    echo $queryname;
    echo "--";
    echo $queryroll;
    echo "--";
    echo $querycity;
    echo "--";
    echo $querygender;
    echo "--";
    echo "--";

    if ($querygender == "male"){
    $checkstatusmale = "checked='checked'";
    $checkstatusfemale = "";
    } else {
      $checkstatusfemale = "checked='checked'";
      $checkstatusmale = "";
    }

echo "status male --";
  echo $checkstatusmale;
  echo "--";
  echo "status female --";
  echo $checkstatusfemale;


}



echo "<form method='post'>
  Name: <input type='text' name='name' value='$queryname'>
  Roll Number: <input type='text' name='roll' value='$queryroll'>
  <br><br>
  <!--
  Course Code: <input type='text' name='courseCode' value=''>
  Course Name: <input type='text' name='courseName' value=''>
  Credit Hours: <input type='text' name='creditHours' value=''>
  -->
  City: <input type='text' name='city' value='$querycity'>
  <br><br>

  Gender:
  <input type='radio' name='gender' $checkstatusmale value='male'>Male
  <input type='radio' name='gender' $checkstatusfemale value='female'>Female
  <br><br>


  <input type='submit' name='submit' value='Save'>
  <br><br>
</form>

<form method='post'>
  Search: <input type='text' name='search' value=''>
  <input type='submit' name='submit2' value='Search'>
</form>";

if(isset($_POST['submit2']))
  {
   $searchvalue = $_POST['search'];
   echo $searchvalue;
     
   $result = mysqli_query($newConnect->dbConnect(), "SELECT * from std_info WHERE name = '$searchvalue'") or die("Data Didn't Inserted Succesfully");

    $row = mysqli_fetch_array($result);

    $queryname = $row['name'];
    $queryroll = $row['roll'];
    $querygender = $row['gender'];
    $querycity = $row['city'];

    echo $queryname;
    echo $queryroll;
    echo $querycity;
    echo $querygender;

  }


?>
</div>
</body>
</html>


<?php
//$crud = new CRUD();

if(isset($_POST['submit']))
  {
   $name = $_POST['name'];
   $roll = $_POST['roll'];
   $city = $_POST['city'];
   $gender = $_POST['gender'];

   echo $name;
   echo $roll;
   echo $city;
   echo $gender;
     
    mysqli_query($newConnect->dbConnect(), "INSERT INTO std_info(name,roll,city,gender) VALUES('$name', '$roll', '$city', '$gender')") or die("Data Didn't Inserted Succesfully");

    header("location:index.php");

  }



?>

