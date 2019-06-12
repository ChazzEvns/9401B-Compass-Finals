<?php

$host="localhost";
$user="root";
$password="";
$db="web_lab";

$conn = mysqli_connect($host, $user, $password, $db);
?>
<?php
if(isset($_POST['logout'])){
    echo "done";
    mysql_close($conn);
     header("Location: ../client-php/LoginSignUp.html");
    }
    elseif(isset($_POST['add'])){
        echo "done";
    mysql_close($conn);
     header("Location: add.php");
    
}

?>