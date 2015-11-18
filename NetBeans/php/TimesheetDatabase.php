<?php

include 'TimesheetDatabaseConnect.php';

//todo -> change insert parameters to just user or timesheet 
function insertTimesheet($timesheet) {
    try {
        $connection = getconnection();
        $sql = "INSERT INTO timesheet (startdate, enddate, starttime, endtime,totalhours, comment)"
                . "VALUES('$timesheet->startDate','$timesheet->endDate','$timesheet->startTime','$timesheet->endTime',"
                . "$timesheet->totalhours,'$timesheet->comment')";


        
        $connection->exec($sql);
        $timesheet->id = $connection->lastInsertId();
        $connection = null;     
        return $id;
    } catch (Exception $ex) {
        echo "EXCEPTION: Insert failed: " . $ex->getMessage();
    }
}

function retrieve($id) {
    try {
        $connection = getconnection();
        $sql = "SELECT FROM timesheet WHERE id = $id";
        $result = $connection->query($sql);
        $timesheet = new Timesheet();
        foreach ($result as $row) {
            $timesheet->$row(id);
            $timesheet->$row(startdate);
            $timesheet->$row(enddate);
            $timesheet->$row(starttime);
            $timesheet->$row(endtime);
            $timesheet->$row(totalhours);
            $timesheet->$row(comment);
            $timesheet->$row(studentid);
            break;
        }
        $connection = null;
    } catch (Exception $e) {
        echo "EXCEPTION: Select failed : " . $e->getMessage;
    }
    return timesheet;
}

function updateTimesheet($id, $startdate, $enddate, $starttime, $endtime, $totalhours, $comment) {
    try {
        $connection = getconnection();
        $sql = "UPDATE timesheet SET startdate='$startdate',enddate= '$enddate',starttime='$starttime', endtime='$endtime',"
                . "totalhours= $totalhours, comment='$comment' WHERE id=$id";
        $result = $connection->exec($sql);
        $connection = null;
    } catch (Exception $e) {
        echo "EXCEPTION : Update failed: " . $e->getMessage();
    }
    $timesheet = new TimeSheet();
    $timesheet->id = $id;
    $timesheet->startDate = $startdate;
    $timesheet->endDate = $enddate;
    $timesheet->startTime = $starttime;
    $timesheet->totalHours = $totalhours;
    $timesheet->comment = $comment;
    return $timesheet;
}

function deleteTimesheet($id) {
    try {
        $connection = getconnection();
        $sql = "DELETE FROM timesheet WHERE id = $id";
        $result = $connection->exec($sql);
        $connection = null;
    } catch (Exception $e) {
        echo "EXCEPTION: Delete failed : " . $e->getMessage();
    }
}

?>