<?php

/*
 * Configuration information is stored here.
 */
 
 $user='root';
 $pass='';
 $db='icsd15133';
 

link = new mysqli('localhost',$user,$pass,$db)or die("Unable to connect to the database");
// if connection is successful then it will go through and print the message below . 
mysqli_query($link,'SET NAMES utf8');
echo "Succesful Connection!";
?>
