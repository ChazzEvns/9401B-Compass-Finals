<!-- This php file is for the registration of the users (coded by Mr. Laban) -->
<?php
    $id = filter_input(INPUT_POST, 'id');
    $usertype = filter_input(INPUT_POST, 'usertype');
    $first = filter_input(INPUT_POST, 'first');
    $last = filter_input(INPUT_POST, 'last');
    $psw = filter_input(INPUT_POST, 'psw');
    $email = filter_input(INPUT_POST, 'email');

    if (!empty($id) || !empty($usertype) || !empty($first) || !empty($last) || !empty($email) || !empty($psw)) { //this will require the user to input and empty field
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "web_lab";
        
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname); //connection for database and php file
        
        if(mysqli_connect_error()) {
        die('Connection Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO user(id_number, user_type, first_name, last_name, password, email)
            values ('$id', '$usertype', '$first', '$last', '$psw', '$email')"; //sql query that will insert the inputs of users to the databse
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