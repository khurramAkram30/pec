<?php
include_once ("conn.php");
use PHPMailer\PHPMailer\PHPMailer;

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$designation = $_POST['designation'];
$university = $_POST['university'];
$country = $_POST['country'];
$speaker_confernce = $_POST['speaker-conference'];
$short_desc = $_POST['short-desc'];
$delivery = $_POST['delivery'];
$paperfile = $_FILES["paperfile"]["name"];
$member_name = $_POST['member-name'];

$sql = 'INSERT INTO paper_submission (`first_name`,`last_name`,`email`,`phone`,`designation`,`university`,`country`,`speaker_conference`,`short_description`,`mode_delivery`,`abstract_paper`,`committee_members_name`) VALUES 
("'.$fname.'","'.$lname.'","'.$email.'","'.$phone.'","'.$designation.'","'.$university.'","'.$country.'","'.$speaker_confernce.'","'.$short_desc.'","'.$delivery.'","'.$paperfile.'","'.$member_name.'")';
// echo $sql;
$result = mysqli_query($conn, $sql);



if($result){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["paperfile"]["name"]);  
    if (move_uploaded_file($_FILES["paperfile"]["tmp_name"], $target_file)) {
        // echo "<script>alert('The file ". basename( $_FILES["imagee"]["name"]). " has been uploaded.');</script>";
    }

    if(isset($_POST['fname']) && isset($_POST['email'])){

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
    
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
        $mail->setFrom('deans.conference@pec.org.pk', 'Pakistan Engineering Council'); //from email
        $mail->addAddress("deans.conference@pec.org.pk");
        $mail->Subject = ("PEC Submission");
        // $mail->Body = $message;
        if($speaker_confernce == 'Speaker'){
        $mail->Body = '<b>First Name :</b> '.$_POST['fname'].'
                    <br><b>Last Name :</b> '.$_POST['lname'].'
                    <br><b>Email :</b> '.$_POST['email'].'
                    <br><b>Phone no :</b> '.$_POST['phone'].'
                    <br><b>Designation :</b> '.$_POST['designation'].'
                    <br><b>Affiliation / University :</b> '.$_POST['university'].'
                    <br><b>Country :</b> '.$_POST['country'].'
                    <br><b>Types of attendence :</b> '.$_POST['speaker-conference'].'
                    <br><b>Short Description :</b> '.$_POST['short-desc'].'
                    <br><b>Intended mode of delivery :</b> '.$_POST['delivery'];
        }

            if($speaker_confernce == 'General Audience'){
                $mail->Body = '<b>First Name :</b> '.$_POST['fname'].'
                        <br><b>Last Name :</b> '.$_POST['lname'].'
                        <br><b>Email :</b> '.$_POST['email'].'
                        <br><b>Phone no :</b> '.$_POST['phone'].'
                        <br><b>Designation :</b> '.$_POST['designation'].'
                        <br><b>Affiliation / University :</b> '.$_POST['university'].'
                        <br><b>Country :</b> '.$_POST['country'].'
                        <br><b>Types of attendence :</b> '.$_POST['speaker-conference'];
            }

            if($speaker_confernce == 'Committee Members'){
                $mail->Body = '<b>First Name :</b> '.$_POST['fname'].'
                            <br><b>Last Name :</b> '.$_POST['lname'].'
                            <br><b>Email :</b> '.$_POST['email'].'
                            <br><b>Phone no :</b> '.$_POST['phone'].'
                            <br><b>Designation :</b> '.$_POST['designation'].'
                            <br><b>Affiliation / University :</b> '.$_POST['university'].'
                            <br><b>Country :</b> '.$_POST['country'].'
                            <br><b>Types of attendence :</b> '.$_POST['speaker-conference'].';
                            <br><b>Committee Members Name :</b> '.$_POST['member-name'];
                }

        
        // $mail->Body = 'Thanks for submitting your Contact Form.';

        //Attach an image file (optional)
        if($speaker_confernce == 'Speaker'){
            // $att =

        $mail->addAttachment("uploads/".$paperfile);
        //send the message, check for errors
        // if (!$mail->send()) {
        //     echo 'Mailer Error: ' . $mail->ErrorInfo;
        // }
        }

       if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
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
    
        // exit(json_encode(array("status" => $status, "response" => $response)));
    }
    // echo '<script>alert("Form submitted succesfully");window.open("index.php", "_self");</script>';

}else{
    echo $sql;
}
?>