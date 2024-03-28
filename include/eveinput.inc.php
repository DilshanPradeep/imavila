<?php
    session_start();

    include_once('dbh.inc.php');

    //image upload
    $file_name = $_FILES['eveimage']['name'];
    $tempname =  $_FILES['eveimage']['tmp_name'];
    $folder = '../assets/images/eventimage/'.$file_name;


    // POST values from the POST parameters
    $topic = $con->real_escape_string($_POST["evetopic"]);
    $description = $con->real_escape_string($_POST["evedes"]);
    $date = $con->real_escape_string($_POST["evedate"]);

    $sql = "INSERT INTO event_pic(topic, description, image, date) VALUES (
        '$topic', '$description', '$file_name', '$date')";


    move_uploaded_file($tempname, $folder);

    $result = mysqli_query($con, $sql);
    
    if($result){
        header('Location: ../dashboard');
    }else{
        header('Location: ../eimgupload.php');
    }
    


?>