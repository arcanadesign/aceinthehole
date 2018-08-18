<?php

//CAS222, Misti D. Ace Project - contact_process.php

$EmailFrom = trim(stripslashes($_POST['email']));
$EmailTo = "misti.dodgens15@pcc.edu";
$Subject = "Ace Info Request";
$Name = trim(stripslashes($_POST['name']));
$Phone = trim(stripslashes($_POST['phone']));
$Inquirytype = trim(stripslashes($_POST['inquirytype']));
$Comments = trim(stripslashes($_POST['comments']));
$current_date = date("Y-m-d");

$validationOK=true;
if ($EmailFrom=="") $validationOK=false;
if ($Phone=="") $validationOK=false;
if (!$validationOK) { print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
exit; }

// email body text

$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Inquiry Type: ";
$Body .= $Inquirytype;
$Body .= "\n";
$Body .= $Comments;
$Body .= "\n";

// sendmail function

$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// success redirect

if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}

?>