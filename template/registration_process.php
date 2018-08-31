<?php

//CAS222, Misti D. Ace Project - registration_process.php

$EmailFrom = trim(stripslashes($_POST['email']));
$EmailTo = "vexingbox@gmail.com";
$Subject = "Ace Event Registration";
$Name = trim(stripslashes($_POST['name']));
$Phone = trim(stripslashes($_POST['phone']));
$Regtype = trim(stripslashes($_POST['regtype']));
$Eventtype = trim(stripslashes($_POST['eventtype']));
$Ecname = trim(stripslashes($_POST['ecname']));
$Ecphone = trim(stripslashes($_POST['ecphone']));
$Shirtsize = trim(stripslashes($_POST['shirtsize']));
$Gender = trim(stripslashes($_POST['gender']));
$Comments = trim(stripslashes($_POST['comments']));
$current_date = date("Y-m-d");

$validationOK=true;
if ($EmailFrom=="") $validationOK=false;
if ($Phone=="") $validationOK=false;
if (!$validationOK) { print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
exit; }

$myFilePath = "contacts/";
$myFileName = "registration-data.csv";
$myPointer = fopen ($myFilePath.$myFileName, "a+");
$form_data = $current_date . "," . $EmailFrom . "," . $Name . "," . $Phone . "," . $Comments . "\n";
str_replace(",", "", $Name) . "," . $Phone . "\n";
fputs ($myPointer, $form_data);
fclose ($myPointer);

// This section of PHP prepares the email body text. This is the fourth and final required element to compose and send an email message from a server-side script.

$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Regtype: ";
$Body .= $Regtype;
$Body .= "\n";
$Body .= "Eventtype: ";
$Body .= $Eventtype;
$Body .= "\n";
$Body .= "Eventtype: ";
$Body .= $Eventtype;
$Body .= "\n";
$Body .= "Ecname: ";
$Body .= $Ecname;
$Body .= "\n";
$Body .= "Ecphone: ";
$Body .= $Ecphone;
$Body .= "\n";
$Body .= "Shirtsize: ";
$Body .= $Shirtsize;
$Body .= "\n";
$Body .= "Gender: ";
$Body .= $Gender;
$Body .= "\n";
$Body .= $Comments;
$Body .= "\n";

// This is the sendmail function which send an email message from the server to the email address listed in the $EmailTo variable above.

$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// If the page validates and there are no errors in the PHP, this line redirect to ok.html page, which is the "success page" for the form submission.

if ($success){ print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.html\">"; } else{ print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">"; }

?>