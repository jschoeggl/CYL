<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Time Sheet</title>
        <link rel="stylesheet" href="../css/johnstyles.css">
        <script src="../js/johnscripts.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <?php
        // put your code here
        include"../header.html";
        ?>
        <main>
            <form method="post" action="Process_Timesheet.php">
                Search<input type="text" name="search" value="search..."><br/>
                <button type="button">Create New Service Adventure</button> <br/>
                Start Date: <input type="text" name="startDate"><br/>
                End Date: <input type="text" name="endDate"><br/>
                Start Time: <input type="text" name="startTime"><br/>
                End Time: <input type="text" name="endTime"><br/>
                Total Hours: <input type="text" name="totalHours"><br/>
                Comments (500 Characters):<br/>
                <input type="text" name="comments"><br/>
                <button type="submit">Submit</button>
                <!--create new event, add partner organization--> 
                <!-- emulate this -> http://coloradoyoungleaders.org/track-hours/ -->
            </form>
        </main> 
        <?php
        include"../footer.html";
        ?>
    </body>
</html>

