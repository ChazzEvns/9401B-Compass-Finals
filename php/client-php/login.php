<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_lab";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    echo("connection");
    
    if (isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $query = "SELECT * FROM `user` WHERE username='" . $user . "' AND password='" . $pass . "'";
        
        $result = mysqli_query($conn, $query);
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
                echo '<script type="text/javascript"> alert("You are logged in")</script>';
            }
            if(mysqli_num_rows($result) > 0) {
                ?>
                 <script type="text/javascript">window.location.href="Register.html"</script>
                <?php
            } else {
                echo 'no result';
            }
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