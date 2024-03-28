<?php
    session_start();
    if(isset($_SESSION['id'])){
        include_once('dbh.inc.php');

        $eve_id= $_POST['id'];
        $sql = "DELETE FROM `event_pic` WHERE `eve_id` = '$eve_id';";

        $result = mysqli_query($con, $sql);

        if($result){
            header('Location: ../dashboard');
        }
    }else{
        header('Location: ../dashboard');
        exit();
    }
?>