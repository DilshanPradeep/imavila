<?php
session_start();

if (isset($_POST['submit'])) {
    include_once('dbh.inc.php');

    $sql = "SELECT * FROM admin";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $user = $row['username'];
        $password = $row['password'];

        if ($user == $_POST['username'] && $password == $_POST['password']) {
            $_SESSION['id'] = $user;
            header('Location: ../dashboard');
        } else {
            $_SESSION['error'] = "Username or password incorrect";
            header('Location: ../admin');
            exit();
        }
    }
} else {
    header('Location: ../admin');
    exit();
}
?>
