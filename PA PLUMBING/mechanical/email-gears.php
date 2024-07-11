<?php


if (isset($_POST['submitEmail'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $sender = $_POST['sender'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $respondBy = $_POST['respond-by'];
        $message = $_POST['emailBody'];
        $plumberEmail = 'mailpaplumbing@gmail.com'; // Single email address as string

        

switch ($respondBy) {
  case $respondBy == "email":
    $respondBy = "Here is their email: " . $email .".";
    $subject = "You have received an email from your website.  Email them back";
    break;
  case $respondBy == "phone":
    $respondBy = "Here is their phone number: " . $phone .".";
    $subject = "You have received an email from your website.  Respond by telephone";
    break;
  case $respondBy == "no-preference":
    $respondBy = "You can contact them by phone or email: " . $phone . "  " . $email .".";
    $subject = "You have received an email from your website.  Their information is below.";
        break;
  default:
  $respondBy = " Here is their contact information: " . $phone . "  " . $email .".";
  $subject = "You have received an email from your website. The details are as follows:.";
}

        

        $emailBody =  $sender . ", from " . $company . ", sent you a message on your website: \r\n \r\n" . $message . ". \r\n\r\n" . $respondBy . ".";
        $headers = "From: ".$email;

        if (mail($plumberEmail, $subject, $emailBody)) {
            echo "<div>
            <p>Email sent successfully.</p>
            </div>";
            header( "refresh:4; url=../masterplumber.php");

        } else {
           echo "<div>
            <p>Failed to send email. Please try again.</p>
            </div>";
            header( "refresh:4; url=../contact-form.php");
        }
  
    }
}
     


        // Debugging output
        /*echo "Sender: $sender<br>";
        echo "Company: $company<br>";
        echo "Email: $email<br>";
        echo "Phone: $phone<br>";
        echo "Contact Preference: $contactPreference<br>";
        echo "Message: $message<br>";
        echo "Subject: $subject<br>";
        echo "Email Body: $emailBody<br>"; */



        /*try {
            echo $plumberEmail. " / " .$subject. " / " .$emailBody;
            mail($plumberEmail, $subject, $emailBody, $headers);
            echo "Email sent successfully.";
        } catch (Exception $error) {
            echo $error; 
        }*/
