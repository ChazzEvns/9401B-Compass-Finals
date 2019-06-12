<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbase = "web_lab";

    $connection = mysqli_connect($host, $user, $password, $dbase);

    if(isset($_POST['user'])) {
        $uname = $_POST['user'];
        $psw = $_POST['pass'];
        
        $sql = "select * from user where id_number='" . $uname . "' AND password='" . $psw . "' limit 1";
        
        $result = mysqli_query($connection, $sql);
        
        if(mysqli_num_rows($result)==1) {
            $_SESSION['user'] = $uname;
            header('Location: ../Room-reservation.html');
            exit();
        } else {
            echo "<script>alert('Username and Password is incorrect..')</script>";
            echo "<script>location.href='../LoginSignUp.html'</script>";
            exit();
        }
    }
?>