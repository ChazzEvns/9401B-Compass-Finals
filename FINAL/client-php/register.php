<?php

$host="localhost";
$user="root";
$password="";
$db="web_lab";

$conn = mysqli_connect($host, $user, $password, $db);

if(isset($_POST['submit'])){
    echo "User submitted.";
    
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $usertype = mysqli_real_escape_string($conn, $_POST['usertype']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['psw']);
    $password2 = mysqli_real_escape_string($conn, $_POST['psw-repeat']);

     
    if($_POST['psw'] == $_POST['psw-repeat']){
     //create users
    
     $sql = "INSERT INTO `user`( id_number, user_type, first_name, last_name, password, email) VALUES ( '$id', '$usertype', '$first', '$last', '$password', '$email')";
    
    mysqli_query($conn, $sql);
     header("Location: LoginSignUp.html");


    }else { //fall to connect
     echo 'Error';
    
    }
}

?>