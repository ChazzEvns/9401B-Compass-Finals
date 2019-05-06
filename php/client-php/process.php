<?php
    $error='';

    if (isset($_POST['submit'])) {
        if(empty($_POST['user']) || empty($_POST['pass'])) {
            $error = "Username or Password invalid";
        } else {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            
            $conn("localhost", "root", "");
            $db = mysqli_select_db($conn, "web_lab");
            
            $query = mysqli_query($conn, "SELECT * FROM user WHERE pass='$password' AND user='$id_number'");
            
            $rows = mysqli_num_rows($query);
            if ($rows == 1) {
                header("Location: Register.html");
            } else {
                $error = "Username and Password invalid";
            }
            mysqli_close($conn);
        }
    }
/**
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $user = stripcslashes($user);
    $pass = stripcslashes($pass);
    $user= mysql_real_escape_string($user);
    $pass = mysql_real_escape_string($pass);

    mysqli_connect("localhost", "root", "", "web_lab");

    $result = mysql_query("select * from web_lab where username = '$id_number' and password = '$password'") or die("Failed to query database" . mysql_error());

    $row = mysql_fetch_array($result);
    if ($row['username'] == $id_number && $row['password'] == $password) {
        echo "Login success! Welcome " . $row['first_name'];
    } else {
        echo "Failed to login..";
    }
**/
?>