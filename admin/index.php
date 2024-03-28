<?php
    SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/admin.sty.css">
    <!-- 
    - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="event-photo-input">
            <form action="../include/admin.inc.php" method='post' enctype="multipart/form-data">
                <label for="username">User name</label>
                <input type="text" id="username" placeholder="Enter username" name="username">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter password" name="password">
                <?php
                    if(isset($_SESSION['error'])){
                        echo "<p style='font-size:16px; color: red; margin:auto;'>{$_SESSION['error']}</p>";
                        unset($_SESSION['error']);
                        session_destroy();
                    }else{
                        echo "";
                    }
                ?>
                
                <button name='submit' id='submit' class="btn submit">Log in</button>
            </form>
        </div>
    </main>
    <script>
        const username = document.getElementById('username');
        const password = document.getElementById('password');
        const submit = document.getElementById('submit');

        submit.addEventListener('click', checked);

        function checked(event) {
            if (username.value === "") {
                event.preventDefault();
                alert("Please enter a username");
                username.focus();
                return false;
            } else if (password.value === "") {
                event.preventDefault();
                alert("Please enter password");
                password.focus();
                return false;
            } else {
                // If all conditions are met, submit the form
                document.querySelector('form').submit();
                return true;
            }
        }
    </script>


</body>
</html>