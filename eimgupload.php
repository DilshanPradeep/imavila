<?php
    session_start();
    if(isset($_SESSION['id'])){

    }else{
        header('Location: ../dashboard');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/eimageup.sty.css">
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
            <form action="include/eveinput.inc.php" method='post' enctype="multipart/form-data">
                <label for="evetopic">Topic</label>
                <input type="text" id="evetopic" placeholder="Enter topic" name="evetopic">
                <label for="evedes">Description</label>
                <input type="text" id="evedes" placeholder="Enter description" name="evedes">
                <label for="eveimage">Upload an image</label>
                <input type="file" id="eveimage" name="eveimage">
                <label for="evedate">Select event date</label>
                <input type="date" id="evedate" name="evedate">
                <button id='submit' class="btn submit">Submit</button>
            </form>
        </div>
    </main>
    <script>
        const topic = document.getElementById('evetopic');
        const description = document.getElementById('evedes');
        const image = document.getElementById('eveimage');
        const date = document.getElementById('evedate');
        const submit = document.getElementById('submit');
        const cancel = document.getElementById('cancel');

        submit.addEventListener('click', checked);

        function checked(event) {
            if (topic.value === "") {
                event.preventDefault();
                alert("Please enter a topic");
                topic.focus();
                return false;
            } else if (description.value === "") {
                event.preventDefault();
                alert("Please enter description");
                description.focus();
                return false;
            } else if (image.value === "") {
                event.preventDefault();
                alert("Please submit an image");
                image.focus();
                return false;
            } else if (date.value === "") {
                event.preventDefault();
                alert("Please select event date");
                date.focus();
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