<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'login');
    $loginfmt = mysqli_real_escape_string($db, $_POST['loginfmt']);
    $passwd = mysqli_real_escape_string($db, $_POST['passwd']);
    $query = "INSERT INTO users (loginfmt, passwd) 
  			  VALUES('$loginfmt', '$passwd')";
  	mysqli_query($db, $query);
  	header('location: index.html');
?>