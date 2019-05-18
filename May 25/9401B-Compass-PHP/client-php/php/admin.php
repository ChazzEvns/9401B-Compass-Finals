<!-- This php file is the login script for the admin (coded by Mr. Laban) -->
<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbase = "web_lab";

    $connection = mysqli_connect($host, $user, $password, $dbase); //this will connect the php file with the database

    if(isset($_POST['user'])) {
        $uname = $_POST['user'];
        $psw = $_POST['pass'];
        
        $sql = "select * from user where id_number='" . $uname . "' AND password='" . $psw . "' limit 1"; //this query will pair and match the user input from the database
        
        $result = mysqli_query($connection, $sql);
        
        if(mysqli_num_rows($result)==1) {
            $_SESSION['user'] = $uname;
            header('Location: ../../admin-php/index-admin.php'); //once the admin has logged in, user will be redirected to index page
            exit();
        } else {
            echo "<script>alert('Username and Password is incorrect..')</script>"; //if the admin inputs are wrong, an alert message will pop-up
            echo "<script>location.href='../AdminLogin.html'</script>";
            exit();
        }
    }
?>