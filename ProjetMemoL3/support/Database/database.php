<?php
$conns = mysqli_connect('localhost' , 'root' , '' , 'projet');

if(!$conns){
echo 'Error: ' . mysqli_connect_error();

}