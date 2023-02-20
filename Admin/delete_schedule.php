<?php
include_once ("../conn.php");

        if(isset($_GET['deleteid'])){
            $id=$_GET['deleteid'];
          
            $query= "DELETE from day_schedule WHERE id = $id";

            $result=mysqli_query($conn,$query);
            if($result){
                echo '<script> alert("Record has been deleted");
                window.location = "Day_Schedule.php";</script>';
            }else {
                echo $query;
            }
            }

        ?>