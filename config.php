<?php

$connect_db = mysqli_connect("localhost", "root", "", "crudphp");

if(!$connect_db){
    echo "Connection Error From Database";
}

?>