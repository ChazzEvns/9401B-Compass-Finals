<!-- This php file is the reservation script for the client/user (coded by Mr. Laban) -->
<?php
    session_start();

    $room = filter_input(INPUT_POST, 'room');
    $time = filter_input(INPUT_POST, 'time');
    $date = filter_input(INPUT_POST, 'date');
    $comment = filter_input(INPUT_POST, 'comment');

    if (!empty($room) || !empty($time) || !empty($date) || !empty($comment)) { //this will require the user to input and empty field
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "web_lab";
        
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname); //connection for database and php file
        
        if(mysqli_connect_error()) {
        die('Connection Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO reservation(room_number, time_res, date_res, purpose)
            values ('$room', '$time', '$date', '$comment')"; //sql query that will insert the inputs of users to the databse
            if($conn->query($sql)) {
                echo "Reservation success!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    } else {
    echo "All fields are required";
    die();
    }
?>