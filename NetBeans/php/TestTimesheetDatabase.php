<?php

include 'TimesheetDatabase.php';
include 'Timesheet.php';

#$connection = getconnection();
$timesheet = new TimeSheet();
$timesheet->startdate = "11111995";
$timesheet->enddate="11121995";
$timesheet->starttime="1130";
$timesheet->endtime="1230";
$timesheet->totalhours=25;
$timesheet->comments="test comment";


$totalhours=12;
$stardate="11/12/1995";



#insertTimesheet($timesheet);
#updateTimesheet(6, $startdate, $enddate, $starttime, $endtime, $totalhours, $comment);
#deleteTimesheet(4);
echo ("test done");


?>

