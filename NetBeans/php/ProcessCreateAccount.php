<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "database.php";
include "theme.php";
include "user.php";
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];


if(empty($firstname) || empty($lastname))
{
    echo "Both your First and Last name need to be provided; please try again";
}
if(!isset($firstname) || trim($lastname))
    
echo nl2br("\nFirst Name:" . $firstname);
echo nl2br("\nLast Name:" . $lastname);
?>