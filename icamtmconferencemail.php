<?php
$from = "embotvm2017@rgcb.res.in";
$headers = "From:". $from . "\r\n"."Bcc: lekshmir@rgcb.res.in \r\n".
'Reply-To: embotvm2017@rgcb.res.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$name=$_REQUEST['name'];
$lname=$_REQUEST['lname'];

$email=$_REQUEST['email'];

$password=$_REQUEST['password'];

$to=$email;

$sub="EMBO Conference Payment Confirm";

$subject =$sub;

$message="Dear $name $lname,\n\n".
"Thank you for registering ICTMI conference 2016 \n".
"This is your registration confirmation letter. SAVE THIS EMAIL! \n\n".
"Your Registration ID: ".$password ."\n".
"Please keep the registration ID safely.If you have any question about your registration, you will need to refer to your Registration ID.\n\n".
"If the payment mode in Demand Draft, send the print-out of online application form along with Demand Draft to Organizing secretariat, ICTMI 2016, Rajiv Gandhi Centre for Biotechnology, Thycaud PO, Poojappura, Thiruvananthapuram 695 014, Kerala, India: Ph:0471-2529588.\n\n".
"Registration will be VALID only when Registration Fee is paid. \n\n".
"Thanking you \n".
"Organizing Secretariat, ICTMI 2016";


$mail_sent = @mail( $to, $subject, $message,$headers,"-f$from" );


echo "<script type='text/javascript'> 

 		window.location='success.php' 

		</script>";

?>
