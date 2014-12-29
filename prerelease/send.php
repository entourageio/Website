<?php

$EmailFrom = "team@entourage.io";
$EmailTo = "team@entourage.io";
$Subject = "Email Addresses";
$email = Trim(stripslashes($_POST['email'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
echo '<script type="text/javascript">'; 
echo 'alert("Thank you for connecting!  The app is coming soon!");'; 
echo 'window.location.href = "index.html";';
echo '</script>';
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>