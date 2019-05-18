<!DOCTYPE html>
<html>
    <head>
        <title>SAMCIS classrooms | reservations</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- Custom JS -->
        <script src="./js/main.js" type="text/javascript" rel="javascript"></script>
        
        <!-- Custom CSS -->
        <link href="./css/style.css" type="text/css" rel="stylesheet">
    </head>
    
    <body>
        
      <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
          <div class="sidebar-heading"><img src="images/Logo.png" id="logo"></div>
          <div class="list-group list-group-flush">
            <a href="./index-admin.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="./reservations.php" class="list-group-item list-group-item-action bg-light">Reservations</a>
            <a href="./accounts.php" class="list-group-item list-group-item-action bg-light">Accounts</a>
          </div>
        </div>
        <!-- End of Sidebar -->

        
        <div id="page-content-wrapper">
            <!-- Navigation bar -->
            <div id="nav-bar">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Logout</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                </nav>
            </div>
            <!-- End of Navigation bar -->
            
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

      </div>
    </body>
</html>