<?php

$connect_db = mysqli_connect("localhost", "root", "", "crudphp");

if($connect_db){
    echo "database connect successfully";
} else {
    echo "Error From Database";
}

?>