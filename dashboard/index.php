<?php
    session_start();
    if(isset($_SESSION['id'])){

    }else{
        header('Location: ../admin');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/dashboard.sty.css">
    <!-- 
    - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <h1>Dashboard</h1>
        <div class="selectors">
            <a class="card add" href="../eimgupload.php">ADD EVENT IMAGES</a>
        </div>
        <table class="event-table" id="event-table">
            <thead>
                <tr>
                    <th>Topic</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once('../include/dbh.inc.php');

                    $sql = "SELECT * FROM `event_pic`;";

                    $result = mysqli_query($con, $sql);

                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['eve_id'];
                            $topic = $row['topic'];
                            $description = $row['description'];
                            $image = $row['image'];
                            $date = $row['date'];

                            echo "<tr>
                            <td>{$topic}</td>
                            <td>{$description}</td>
                            <td>{$image}</td>
                            <td>{$date}</td>
                            <td><button class='delete-btn' data-id='$id'>Delete</button></td></td>
                        </tr>";

                        }
                    }
                ?>
            </tbody>
        </table>
    </main>
    <script>
        // Function to handle button click
        function handleClick(id) {
            // Create a form element
            const form = document.createElement('form');
            form.method = 'POST'; // Set method to POST
            form.action = '../include/deletevent.inc.php'; // Set the action URL

            // Create a hidden input field to store the ID
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'id'; // Name of the input field
            input.value = id; // Value of the input field

            // Append the input field to the form
            form.appendChild(input);

            // Append the form to the document body
            document.body.appendChild(form);

            // Submit the form
            form.submit();
        }

        // Get all delete buttons
        const deleteButtons = document.querySelectorAll('.delete-btn');

        // Add click event listener to each delete button
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Get the ID from the data-id attribute
                const id = this.getAttribute('data-id');
                
                // Call the handleClick function to submit the form with the ID
                handleClick(id);
            });
        });
    </script>
    
</body>
</html>