<?php
require('dbconnect.php'); 
if($_POST["book"]=="book"){
      
        $name=$_POST["namebox"];
        $date=$_POST["datebox"];
        $time=$_POST["timebox"];
        
        //echo $name;
        
        $sql = "INSERT INTO bookings (name, date, time) VALUES ('$name', '$date', '$time')" ;
        if(mysqli_query($conn,$sql)){
            echo 'thanks for the booking';
        }
        else {
            echo "ERRROR ".$sql." ".mysqli_error($conn);
        }
}

function display_all(){
    require('dbconnect.php'); 
    $myquery = "SELECT * FROM bookings";
    $result = mysqli_query($conn, $myquery);
       if(mysqli_query($conn,$myquery)){
            echo 'thanks for the booking';
        }
        else {
            echo "ERROR ".$sql." ".mysqli_error($conn);
        }
         if ($result->num_rows>0){
             while($row=$result->fetch_assoc()){
                 echo " Name " .$row["name"]. " Date ".$row["date"]. " Time ".$row["time"]. "<br/>";
             }   
         }
}//End function
display_all();
        
?>