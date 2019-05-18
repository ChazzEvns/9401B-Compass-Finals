<%-- 
    Document   : Reserve
    Created on : May 14, 2019, 6:13:25 PM
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
        <div class="divisorHead">
        
     <a style="text-decoration:none" class="headheadbar" href="index.html"> Home </a> &nbsp;
     <a style="text-decoration:none" class="headheadbar" href="MyLife/mylife.html"> My Reservations </a> &nbsp;
            
        </div>
            <div id="divisorPP">
             <p> 
        Available classrooms
        for today (current date)
                </p>
                <div id="he"><p>
        Room                        
        </p>
                    </div>
                <div id="she"><p>Timeslot</p></div>
            </div>
            <div id="heading">
                <h1> Reservation Form</h1>
            </div>
                        <form>
                            <div id="formone">
                            <label for="reservee"><b>Reservee:</b></label>
                            <input type="text" name="Reservee" required>
                            </div>
                            <div id="formone">
                            <label for="id"><b>ID Number:</b></label>
                            <input type="text" name="id" required>
                            </div>
                            <div id="formtwo">
                            <label for="time"><b>Time:</b></label>
                            <select>
                                <option value="eight">8:00 - 9:00</option>
            <option value="nine">9:00 - 10:00</option>
            <option value="ten">10:00 - 11:00</option>
            <option value="eleven">11:00 - 12:00</option>
                            </select>

                            <label for="date"><b>Date:</b></label>
                            <input type="date" placeholder="MM/DD/YY" name="date" required>
                            </div>


                </form>
                <div id="formone">
                    <h2 id="h2pwe">Purpose for reservation</h2>
                    <textarea rows="4" cols="50" name="comment" form="usrform">Be specific with your reasons...</textarea>
                </div>
                <div class="button">
                    <button id="button1">Register</button>
                </div>
    </body>
</html>
