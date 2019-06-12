<?php

$host="localhost";
$user="root";
$password="";
$db="web_lab";

$conn = mysqli_connect($host, $user, $password, $db);

if(isset($_POST['submit'])){
    $room = mysqli_real_escape_string($conn, $_POST['roome']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    
$sql = "INSERT INTO `room`( `room_number`, `status`, `time_res`) VALUES ( `$room`, `$status`, `$time`);";
$result = mysqli_query($conn, $sql);    
    if($result > 0){
        while($row = mysqli_fetch_array($result))
        {
          
            header("Location: accounts.php");
            
        }
    }
    
    
   


    }else { //fall to connect
     echo 'Error';
    
    }


?>