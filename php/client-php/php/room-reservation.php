<?php
    session_start();

    $room = filter_input(INPUT_POST, 'room');
    $time = filter_input(INPUT_POST, 'time');
    $date = filter_input(INPUT_POST, 'date');
    $comment = filter_input(INPUT_POST, 'comment');

    if (!empty($room) || !empty($time) || !empty($date) || !empty($comment)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "web_lab";
        
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        
        if(mysqli_connect_error()) {
        die('Connection Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO reservation(room_number, time_res, date_res, purpose)
            values ('$room', '$time', '$date', '$comment')";
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