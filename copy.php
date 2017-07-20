<?php
session_start();
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

$queryname = $queryroll = $querycity = $querygender = $querycoursecode = $querycoursename = $querycredithours = $checkstatusmale = $querystdname =
  $checkstatusfemale = $searchvalue = "";

if(isset($_POST['submit2']))
  {
   $searchvalue = $_POST['search'];
   $_SESSION['search'] = $_POST['search'];
     
   $result = mysqli_query($newConnect->dbConnect(), "SELECT * from std_info WHERE name = '$searchvalue'") or die("Data Didn't Inserted Succesfully");

   $result2 = mysqli_query($newConnect->dbConnect(), "SELECT * from std_course WHERE stdname = '$searchvalue'") or die("Data Didn't Inserted Succesfully");

    $row = mysqli_fetch_array($result);

    $queryname = $row['name'];
    $queryroll = $row['roll'];
    $querygender = $row['gender'];
    $querycity = $row['city'];

    $row2 = mysqli_fetch_array($result2);

    $querystdname = $row2['stdname'];
    $querycoursecode = $row2['coursecode'];
    $querycoursename = $row2['coursename'];
    $querycredithours = $row2['credithours'];

    if ($querygender == "male"){
    $checkstatusmale = "checked='checked'";
    $checkstatusfemale = "";
    } else {
      $checkstatusfemale = "checked='checked'";
      $checkstatusmale = "";
    }

}



echo "<form method='post'>
  Name: <input type='text' name='name' id='unique' value='$queryname'>
  Roll Number: <input type='text' name='roll' value='$queryroll'>
  <br><br>
  Course Code: <input type='text' name='coursecode' value='$querycoursecode'>
  Course Name: <input type='text' name='coursename' value='$querycoursename'>
  <br><br>
  Credit Hours: <input type='text' name='credithours' value='$querycredithours'>
  <br><br>
  City: <input type='text' name='city' value='$querycity'>
  <br><br>

  Gender:
  <input type='radio' name='gender' $checkstatusmale value='male'>Male
  <input type='radio' name='gender' $checkstatusfemale value='female'>Female
  <br><br>


  <input type='submit' name='submit' value='Save'>
  <br><br>

  Search: <input type='text' name='search' value=''>
  <input type='submit' name='submit2' value='Search'>

  <input type='submit' name='update' value='Update'>

  <input type='submit' name='delete' value='Delete'>
</form>";

?>
</div>
</body>
</html>


<?php

if(isset($_POST['submit']))
  {
   $name = $_POST['name'];
   $roll = $_POST['roll'];
   $city = $_POST['city'];
   $gender = $_POST['gender'];

  $stdname = $_POST['stdname'];
  $coursecode = $_POST['coursecode'];
  $coursename = $_POST['coursename'];
  $credithour = $_POST['credithours'];
     
   mysqli_query($newConnect->dbConnect(), "INSERT INTO std_info(name,roll,city,gender) VALUES('$name', '$roll', '$city', '$gender')") or die("Data Didn't Inserted Succesfully");

   mysqli_query($newConnect->dbConnect(), "INSERT INTO std_course(stdname, coursecode, coursename, credithour) VALUES('$stdname', '$coursecode', '$coursename, '$credithour')") or die("Data Didn't Inserted Succesfully");

    header("location:index.php");

  }


if(isset($_POST['update']))
  {  
   $name = $_POST['name'];
   $roll = $_POST['roll'];
   $city = $_POST['city'];
   $gender = $_POST['gender'];

  $stdname = $_POST['stdname'];
  $coursecode = $_POST['coursecode'];
  $coursename = $_POST['coursename'];
  $credithour = $_POST['credithours'];
  
  $new = $_SESSION['search'];


  mysqli_query($newConnect->dbConnect(), "UPDATE std_info SET name = '$name', roll = '$roll', city = '$city', gender = '$gender' WHERE name = '$new' " ) or die(mysqli_error($newConnect->dbConnect() ));
  header("location:index.php");

    mysqli_query($newConnect->dbConnect(), "UPDATE std_course SET name = '$stdname', coursecode = '$coursecode', coursename = '$coursename', credithour = '$credithour' WHERE name = '$new' " ) or die(mysqli_error($newConnect->dbConnect() ));
  header("location:index.php");
  }

if(isset($_POST['update']))
  {  
   $name = $_POST['name'];
   $roll = $_POST['roll'];
   $city = $_POST['city'];
   $gender = $_POST['gender'];

  $stdname = $_POST['stdname'];
  $coursecode = $_POST['coursecode'];
  $coursename = $_POST['coursename'];
  $credithour = $_POST['credithours'];
  
  $new = $_SESSION['search'];

  mysqli_query($newConnect->dbConnect(), "UPDATE std_info SET name = '$name', roll = '$roll', city = '$city', gender = '$gender' WHERE name = '$new' " ) or die(mysqli_error($newConnect->dbConnect() ));
  header("location:index.php");

    mysqli_query($newConnect->dbConnect(), "UPDATE std_course SET name = '$stdname', coursecode = '$coursecode', coursename = '$coursename', credithour = '$credithour' WHERE name = '$new' " ) or die(mysqli_error($newConnect->dbConnect() ));
  header("location:index.php");
  }


?>


