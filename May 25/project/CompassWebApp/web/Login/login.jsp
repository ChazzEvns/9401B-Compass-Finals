<%-- 
    Document   : login
    Created on : May 17, 2019, 1:38:50 AM
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
            String userid = request.getParameter("uname");    
            String pwd = request.getParameter("pass");
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/dbname",
                    "root", "dbpass");
            Statement st = con.createStatement();
            ResultSet rs;
            rs = st.executeQuery("select * from members where uname='" + userid + "' and pass='" + pwd + "'");
            if (rs.next()) {
                session.setAttribute("userid", userid);
                //out.println("welcome " + userid);
                //out.println("<a href='logout.jsp'>Log out</a>");
                response.sendRedirect("success.jsp");
            } else {
                out.println("Invalid password <a href='index.jsp'>try again</a>");
            }
        %>
    </body>
</html>
