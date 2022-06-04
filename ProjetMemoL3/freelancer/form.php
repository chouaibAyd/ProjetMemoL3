<?php

if(isset($_POST['submit'])){
$service = $_POST['service'];
$title = $_POST['title'];
$info = $_POST['info'];
$budget = $_POST['budget'];
$contact = $_POST['contact'];
$date = $_POST['date'];





$sql = "INSERT INTO work(service, title, infos, duration, budget, contact)
     VALUES ('$service', '$title', '$info', '$date', '$budget', '$contact')";

  mysqli_query($conn, $sql);
}