<?php
$conn = mysqli_connect('localhost' , 'root' , '' , 'projet');

if(!$conn){
echo 'Error: ' . mysqli_connect_error();

}