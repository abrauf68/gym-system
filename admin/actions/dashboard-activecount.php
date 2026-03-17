<?php

$servername="localhost";
$uname="supersof_gym";
$pass="supersof_gym";
$db="supersof_gym";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM members WHERE status ='Active'";
                $query = $conn->query($sql);

                echo "$query->num_rows";
?>