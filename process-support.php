<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "steven.place@gmail.com";
    $email_subject = "Support Request from Stebesplace.com";
     
     
    
     
    $first_name = $_POST['fname']; 
    $last_name = $_POST['lname']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $company = $_POST['company']; 
    $message = $_POST['message']; 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($first_name).' '.clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Company: ".clean_string($company)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
     
     
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
<?php
}
?>