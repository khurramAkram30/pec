<?php
include_once ("../conn.php");
use PHPMailer\PHPMailer\PHPMailer;





    $update='UPDATE  our_sponsors SET status ="2"
    WHERE id='.$_GET['id'];
    $result=mysqli_query($conn ,$update);
    if($result){
        // echo"<pre>";
        // print_r($result);
        
    $sql = 'SELECT * FROM `our_sponsors` WHERE id='.$_GET['id'];
    $resultMain = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($resultMain)) {
        // echo"<pre>";
        // print_r($row);
    // if(isset($row['first_name']) && isset($row['email'])){
        
        // echo$row['first_name'];
        require_once "./PHPMailer/src/PHPMailer.php";
        require_once "./PHPMailer/src/SMTP.php";
        require_once "./PHPMailer/src/Exception.php";
    
        $mail = new PHPMailer();
    
        //smtp settings
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.gmail.com"; // host name
        $mail->SMTPAuth = true;
        $mail->Username = "deans.conference@pec.org.pk";
        $mail->Password = 'rfqmoekyhqsdbjtz';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
    
        //email settings
        $mail->isHTML(true);
        $mail->setFrom('deans.conference@pec.org.pk', 'PEC Conference Sponsor'); //from email
        $mail->addAddress($row['email']);
        $mail->Subject = ("Nonacceptance");
        // $mail->Body = $message;
        $mail->Body = ' <b>Dear, Mr.  '.$row['first_name'].''.$row['last_name'].'</b><br>
        Email : '.$row['email'].'<br>
        Phone : '.$row['phone'].'<br>
        <b>Message: Your Sponsorship for PEC Conference has been Rejected.</b> 
        
        
        ';
        
        if($mail->send()){
            // $status = "success";
            // $response = "Email is sent!";
            echo '<script>
             alert("Sent Successfully");
            window.location = "index.php";
            </script>';
        }
        
        else
        {
            $status = "failed";
            $response = "Something is wrong: <br>" . $mail->ErrorInfo;
        }
    
        exit(json_encode(array("status" => $status, "response" => $response)));
       
    }
    }        

    
        ?>