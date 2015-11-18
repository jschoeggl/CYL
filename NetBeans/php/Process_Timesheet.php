<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "TimeSheet.php";
$TimeSheet = new TimeSheet();
$TimeSheet->search = $_POST["search"];
$TimeSheet->startDate = $_POST["startDate"];
$TimeSheet->endDate = $_POST["endDate"];
$TimeSheet->startTime = $_POST["startTime"];
$TimeSheet->endTime = $_POST["endTime"];
$TimeSheet->totalHours = $_POST['totalHours'];
$TimeSheet->comments = $_POST["comments"];



if ($TimeSheet->validate()) {
    echo ("Is Valid");
} else {
    echo("Try again");
}
?>