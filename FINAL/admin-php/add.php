<html>
<head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../client-php/css/Styles.css" />
    </head>
    <body>
        <div class="loginForm">
            <div class="login-header">
                <h1 class="upper-header">SAMCIS</h1>
                <h1 class="lower-header">Classrooms</h1>
                <h1 class="sub-header">Add a room</h1>
            </div>
    <div class="forms">

<form action="adddata.php" method="POST">
                   
            
<label for="room"><b>Room    :</b></label><input type="text" placeholder="Enter Room Number" name="roome" required>
                
<label for="room"><b>Status  :</b></label><select name="status" required>
                          <option selected hidden value="">Select Availability</option>
                          <option value="Available">Available</option>
                          <option value="Not Available">Not Available</option>
                        </select>
                
<label for="room"><b>Time    :</b></label><input type="text" placeholder="Enter Room Number" name="time" required>
                    
    
                    <div class="button">
                        <button id="button1" name="submit">Add</button>
                    </div>  
                </form>

        </div>
 
        </div>
        
</body>
</html>