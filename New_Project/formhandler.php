<?php
session_start();
// $auto_sum;
$answer = $_SESSION["auto_sum"];
// echo "captcha value".$answer;
/* Form Handling*/
if (isset($_POST['submit_contact']) ) {
    $name = trim($_POST["name"]);
    $mobile = trim($_POST["mobile"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);


    $to = "camwelsolution@gmail.com,sales.camwel@gmail.com,camwelbis@gmail.com";
    $subject = "Enquiry From Caplus.com ";
    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: caplus.com' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $full_message = "<html>
                        <head><title>Enquiry Data</title></head>
                        <body>
                        <table>
                            <tr>
                            <td>Name</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $name</td>
                            </tr>
                            <tr>
                            <td>Email Id</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $email</td>
                            </tr>
                            <tr>
                            <td>Mobile No</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $mobile</td>
                            </tr>
                            <tr>
                            <td>Message</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $message</td>
                            </tr>
							
                        </table>
                        </body>
                        </html>";
    $user = $email;
    $user_subject = "Thank You $name";
    $user_headers = 'From: caplus.com' . "\r\n";
    $user_message = "Dear $name.\nWelcome to camwel Solution LLP\n We have got your query.We will reach you soon.\nThank You!";
    $uanswer = intval(trim($_POST["uanswer"]));
    if ($uanswer == $answer) {
        if (mail($to, $subject, $full_message, $headers)) {
            mail($user, $user_subject, $user_message, $user_headers);
            $_SESSION["response"] = "<h3>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>We have got your query. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 '></i><span> +91
                9028388889/+91 9572852742</span></span></p>
                <p>Thank You!</p></blockquote>";
        } else {
            echo $name . $mobile . $whatsapp . $email . $need . $message;
            $_SESSION["response"] = "<h3>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 '></i><span> +91
                9028388889/+91 9572852742</span></span></p>
                <p>Please, try again!</p><p>Thank You!</p></blockquote>";
        }
    } else {
        $_SESSION["response"] = "<h3>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>You have entered wrong <u class='text-warning'>captcha value</u>. Please Enter the correct value.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone  px-2 '></i><span> +91
            9028388889/+91 9572852742</span></span></p>
            <p>Please, try again!</p><p>Thank You!</p></blockquote>";
    }
    header("Location:thankyou.php");
} 




 