<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/Styles.css" />
    </head>
    <body>
        <div class="divisorHead">
             <a style="text-decoration:none" class="headheadbar" href="../Room-reservation.html"> Home </a> &nbsp;
             <a style="text-decoration:none" class="headheadbar" href="my-reservations.php"> My Reservations </a> &nbsp;  
        </div>
        <div class="loginForm">
            <div class="login-header">
                <h1 class="upper-header">SAMCIS</h1>
                <h1 class="lower-header">Classrooms</h1>
                <h1 class="sub-header">Room Reservation</h1>
            </div>
                        <!-- Page Content -->
            <div class="container-fluid">                
                <div class="table-responsive">
                <h3 class="mt-4">Reservation Requests</h3>
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th>Reservee</th>
                      <th>ID number</th>
                      <th>Classroom</th>
                      <th>Time</th>
                      <th>Date</th>
                      <th>Request Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $dbase = "web_lab";

                        $connection = mysqli_connect($host, $user, $password, $dbase);

                        if ($connection -> connect_error) {
                            die("Connection failed:" . $connection -> connect_error);
                        }

                        $sql = "select room_number, time_res, date_res from reservation";
                        $result = $connection -> query($sql);

                        if ($result -> num_rows > 0) {
                            echo "<table>";
                            while ($row = $result -> fetch_assoc()) {
                                echo "<tr><td>" . $row['room_number'] . "</td><td>" . $row['time_res'] . "</td><td>" . $row['date_res'] . "</td></tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "No results.";
                        }

                        $connection -> close();

                    ?>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
                </div>
            </div>
            <!-- End of Page Content -->
        </div>
    </body>
</html>