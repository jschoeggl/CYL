<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getConnection(){
    $servername = "127.0.0.1";
    $dbname = "cyl";
    $username = "root";
    $password = "admin";
    try{
        $connection = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (Exception $ex) {
        echo"EXCEPTION: Connection failed :" . $ex->getMessage();
    }
    return $connection;
}
function insertUser($firstname, $lastname){
    try{
        $connection = getConnection();
        $sql = "INSERT INTO user (firstname, lastname)" . "VALUES ('$firstname', '$lastname')";
        $connection->exec($sql);
        $connection = null;
    } catch (Exception $ex) {
        echo 'EXCEPTION : Insert failed : '. $e->getMessage();
    }
}
//function getUserById($id) {
//    try{
//        $connection = getConnection();
//        $sql = "SELECT * FROM user WHERE id = $id";
//        $result = $connection->query($sql);
//        $user = new User();
//        foreach ($result as $row){
//            $user->id = $row['id'];
//            $user->firstname = $row['firstname'];
//            $user->lastname = $row['lastname'];
//            break;
//        }
//        $connection = null;
//    } catch (Exception $ex) {
//        echo "EXCEPTION : Select failed : " . $e->getMessage();
//    }
//    return $user;
//}
//function updateUser($id, $firstname, $lastname){
//    try{
//        $connection = getConnection();
//        $sql = "UPDATE user SET firstname = '$firstname', lastname = '$lastname' WHERE id = $id";
//        $result = $connection->exec($sql);
//        $connection = null;
//    } catch (Exception $ex) {
//        echo "EXCEPTION : Update failed : " . $e->getMessage();
//    }
//    $user = new User();
//    $user->id = $id;
//    $user->firstname = $firstname;
//    $user->lastname = $lastname;
//    return $user;
//}
//function deleteUser($id){
//    try{
//        $connection = getConnection();
//        $sql = "DELETE FROM user WHERE id = $id";
//        $result = $connection->exec($sql);
//        $connection = null;
//    } catch (Exception $ex) {
//        echo "EXCEPTION : Delete failed : " . $e->getMessage();
//    }
//}

?>
