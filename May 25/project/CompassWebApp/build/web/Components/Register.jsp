<%-- 
    Document   : Register
    Created on : May 14, 2019, 3:25:01 PM
    Author     : Evans
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link rel="stylesheet" type="text/css" href="../css/Styles.css" />
    </head>
    <body>
        <div class="loginForm">
            <div class="login-header">
                <h1 class="upper-header">SAMCIS</h1>
                <h1 class="lower-header">Classrooms</h1>
                <h1 class="sub-header">Register</h1>
            </div>
            <div class="forms">
                <form action="register.php" method="POST">
                   
                    <label for="id"><b>ID Number:</b></label>
                    <input type="text" placeholder="Enter Id Number" name="id" required>

                    <label for="first"><b>Firstname:</b></label>
                    <input type="text" placeholder="Enter Firstname" name="first" required>
                    
                    <label for="last"><b>Lastname:</b></label>
                    <input type="text" placeholder="Enter Lastname" name="last" required>
                    
                    <label for="user"><b>Usertype:</b></label>
                    <select name="usertype" required>
                      <option selected hidden value="">Select user type</option>
                      <option value="Student">Student</option>
                      <option value="Teacher">Teacher</option>
                    </select>
                    <br>
                    
                    <label for="email"><b>Email:</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>
                   
                <label for="psw"><b>Password:</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <label for="psw-repeat"><b>Repeat Password:</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                    <div id="lower">
                        <button class="button button1" type="submit">Register</button>
                    </div><!--/ lower-->
                </form>
            </div>
        </div>
    </body>
</html>
