<?php
include_once("../conn.php");

if(isset($_POST["btnSubmit"])){
$name = $_POST["name"];
$schdate =$_POST["Date"];
$startTime= $_POST["startTime"];
$endTime= $_POST["EndTime"];
$img=$_FILES['Img']['tmp_name'];

for ($i = 0; $i < count($name); $i++) {
    if ($_FILES['Img']['name'][$i] !='') {
        $image =$_FILES['Img']['name'];
        $sql = "INSERT INTO day_schedule (Ds_name,Ds_date,Ds_starttime,Ds_endtime,DS_image,DS_status)
        VALUES ('$name[$i]', '$schdate[$i]','$startTime[$i]','$endTime[$i]','$image[$i]',0)";
        $result=mysqli_query($conn, $sql);
    // echo $image[$i];
        if ($result) {
            // $target = "images/".basename($_FILES['Img']['name'][$i]);
            // move_uploaded_file($_FILES['Img']['name'][$i], $target);
            // $path = $image[$i];
            // move_uploaded_file($path,"images/".$image);
            $target_dir = "images/";
            $target_file = $target_dir . basename($_FILES["Img"]["name"][$i]);  
            if (move_uploaded_file($_FILES["Img"]["tmp_name"][$i], $target_file)) {
                // echo "<script>alert('The file ". basename( $_FILES["imagee"]["name"]). " has been uploaded.');</script>";
            }
           
      
            echo '<script>
            alert("Record inserted sucessfully");
           window.location = "Day_Schedule.php";
           </script>';;
            // echo "<script>window.open('Day_schedule.php', '_self')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
else{
    $sql1 = "INSERT INTO day_schedule (Ds_name,Ds_date,Ds_starttime,Ds_endtime,DS_image,DS_status)
     VALUES ('$name[$i]', '$schdate[$i]','$startTime[$i]','$endTime[$i]','No image',0)";
    $result1=mysqli_query($conn, $sql1);

    if ($result1) {
        echo '<script>
        alert("Record inserted sucessfully");
       window.location = "Day_schedule.php";
       </script>';
        // echo "New record created successfully";
        // echo "<script>window.open('Day_schedule.php', '_self')</script>";
    } else {
        echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
    }
}



  }

}

?>