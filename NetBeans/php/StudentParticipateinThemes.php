<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="../js/richardscripts.js"></script> 
        <link rel="stylesheet" href="../css/richardstyles.css">
        <title>Student Participate in Themes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style> table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td{
                padding: 15px;
            }
        </style>
        
    </head>
    <body>
        <?php
        include '../header.html';
        ?>
        <main>     
            <h2> Current Course for Denver Chapter</h2>
           <table style="width:100%">
                <tr>
                    <td><input type="text" placeholder="Search..."</td>
                    <td><input value="Search" type="Submit"</td>
                    <td><select>
                            <option value="Theme #1">Theme #1</option>
                            <option value="Theme #2">Theme #2</option>
                            <option value="Theme #3">Theme #3</option>
                            <option value="Theme #4">Theme #4</option>
                        </select></td>
                </tr>
                <tr>
                    <th>Student Training Online</th>
                    <td>Emotional Intelligence - Student Training Outline</td>
                    <td><input value="Rate" type="Submit"</td>
                    <td><input value="Download" type="Submit"</td>
                </tr>
            </table>
            <form action="ProcessCreateAccount.php" method = "post">
                First Name:<br>
                <input type="text" name="firstname">
                <br>
                Last Name:<br>
                <input type="text" name="lastname">
                <input value="Submit" type="Submit">
                
            </form>
        </main>
        <?php
        include '../themeaside.html';
        include '../footer.html';
        ?>
    </body>
</html>
