<?php

class databaseConnect
{
  function dbConnect() {
	  $connect = mysqli_connect("localhost", "root", "shohan", "umsphp");
	  if (!$connect) {
	      die('Could not connect to database!');
	  } else {
	      $this->myconn = $connect;
	      echo 'Connection established!';}
	  return $this->myconn;
  }

  function closeDb() {
    mysqli_close($myconn);
    echo 'Connection closed!';
  }
}

?>