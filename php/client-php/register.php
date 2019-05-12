<?php

    $id = filter_input(INPUT_POST, 'id');
    $usertype = filter_input(INPUT_POST, 'usertype');
    $first = filter_input(INPUT_POST, 'first');
    $last = filter_input(INPUT_POST, 'last');
    $psw = filter_input(INPUT_POST, 'psw');
    $email = filter_input(INPUT_POST, 'email');

    if (!empty($id) || !empty($usertype) || !empty($first) || !empty($last) || !empty($email) || !empty($psw)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "web_lab";
        
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        
        if(mysqli_connect_error()) {
        die('Connection Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO user(id_number, user_type, first_name, last_name, password, email)
            values ('$id', '$usertype', '$first', '$last', '$psw', '$email')";
            if($conn->query($sql)) {
                echo "Record success!";
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