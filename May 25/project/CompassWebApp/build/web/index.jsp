<%-- 
    Document   : index
    Created on : May 11, 2019, 1:01:59 AM
    Author     : Evans
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link rel="stylesheet" type="text/css" href="css/Styles.css" />
    </head>
    <body>
        <div class="loginForm">
            <div class="login-header">
                <h1 class="upper-header">SAMCIS</h1>
                <h1 class="lower-header">Classrooms</h1>
            </div>
            <div class="forms">
                <form action="Login/login.jsp" method="POST">
                    <label for="username">ID number:</label>
                    <input type="text" id="username" name="user">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="pass">
                    <div id="lower">
                        <button class="button button1" type="submit" id="login-btn" name="login">Login</button>
                        
                        <a class="register" href="Register/Register.jsp">Register</a>
                    </div><!--/ lower-->
                </form>
            </div>
        </div>
    </body>
</html>
<a href="../../../../../Program Files/Apache Software Foundation/Tomcat 8.5/conf/tomcat-users.xml"></a>