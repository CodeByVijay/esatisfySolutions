<?php
session_start();
$conn = mysqli_connect('localhost','root','12345','cms');
if(!$conn){
    echo "Error : ". mysqli_connect_error();
}
?>