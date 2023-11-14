<?php
require "email.php";

$name1=isset($_REQUEST['your-name'])?$_REQUEST['your-name']:'name';

$email1=isset($_REQUEST['your-email'])?$_REQUEST['your-email']:'email';

$phone1=isset($_REQUEST['your-phone'])?$_REQUEST['your-phone']:'phone';

$company1=isset($_REQUEST['your-company'])?$_REQUEST['your-company']:'company';


$text1=isset($_REQUEST['your-message'])?$_REQUEST['your-message']:'message';
/*$page=isset($_REQUEST['page'])?$_REQUEST['page']:'page';*/

$mail = new EMail;
$mail->Username = 'webtestmuru@gmail.com';
$mail->Password = 'webtest@123';
$mail->SetFrom("webtestmuru@gmail.com","WEB");	// Name is optional

$mail->AddCc("","");
$mail->AddTo("murugeshm30@gmail.com","MURUGESH"); 
$mail->Subject = "Message From Website";
$mail->Message =
 	"<table style='width: 100%; font-family: helvetica' cellpadding='20' cellspacing='1' border='0'>
      <thead style= 'background:#000; text-align:left;'>
		<tr style= 'color: white; font-family: helvetica;'>
		  <th>DETAILS</th><th>CONTACTS</th>              
		</tr>
      </thead>
		  
	  <tbody>
		<tr style='color: #222;'>
				 <td>Name</td><td>$name1</td>
				</tr>
				
				<tr>
				  <td>Email</td><td>$email1</td>
				</tr>
				
				<tr>
				  <td>phone</td><td>$phone1</td>
				</tr>
				
				<tr>
				  <td>company</td><td>$company1</td>
				</tr>
				
				<tr>
				  <td>Message</td><td>$text1</td>
				</tr>
				
			  </tbody>
	</table>";

//Optional stuff 
$mail->ContentType = "text/html";        		// Defaults to "text/plain; charset=iso-8859-1"
$mail->Headers['X-SomeHeader'] = 'abcde';		// Set some extra headers if required
$mail->ConnectTimeout = 30;		// Socket connect timeout (sec)
$mail->ResponseTimeout = 8;		// CMD response timeout (sec)

$success = $mail->Send();
if($success){
	echo "Thank you";
}else{
	echo "failed";
}
?>