<%-- 
    Document   : dataMySQL
    Created on : May 16, 2019, 1:11:01 PM
    Author     : Evans
--%>

<%@page import="java.sql.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Room Reservations</title>
    </head>
    <body>
        <%
        
            
            String fname = request.getParameter("first");
            String lname = request.getParameter("last");
            String email = request.getParameter("email");
            String pdw = request.getParameter("psw");
            
        try{
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/mysql", "root", "SurePass123");
            
            Statement stat = con.createStatement();
            stat.executeUpdate("insert into user(first_name,last_name,password,email)values('"+fname+"', '"+lname+"', '"+pdw+"', '"+email+"', CURDATE() )");
            out.println("data insterted");
        }catch(Exception e){
            out.println(e);
        }
        
        %>
    </body>
</html>
