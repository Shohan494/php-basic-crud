<?php

class CRUD
{
    public function __construct()
    {
       //$db = new DB_con();
    }
    
    public function create($name, $roll, $city, $gender)
    {
        mysqli_query(mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD), "INSERT INTO std_info(name,roll,gender,city) VALUES('$name', '$roll', '$city', '$gender'") or die(mysqli_error(mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD)) );
        header("Location: index.php");
    }
    public function read()
    {
        return mysqli_query("SELECT * FROM users");
    }
    
    public function delete($id)
    {
        mysqli_query("DELETE FROM users WHERE user_id=" . $id);
    }
    
    public function update($fname, $lname, $city, $id)
    {
        mysqli_query("UPDATE users SET first_name='$fname', last_name='$lname', user_city='$city' WHERE user_id=" . $id);
    }
}
?>