<!DOCTYPE html>
<html>
<head>
<title>My Bookings</title>

</head>
<body>
    
    <h1>My resteraunt</h1>
    <!---Booking form--->
    <form method="Post" action="book.php">
        <label>Name</label>
        <input type="text" name="namebox" required>
        <label>Date</label>
        <input type="date" name="datebox">
        <label>Time</label>
        <input type="time" name="timebox">
        <input type="hidden" value="book" name="book">
        <input type="submit" value="book">
        
    </form>
    
    
    <h2>Search for booking</h2>
    <!---search booking--->
    
    
</body>
</html>

<?php



?>