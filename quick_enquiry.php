
<?php
if(isset($_POST['contactform'])){
	$to = "rathoddarshan23@gmail.com"; 
	$subject = "Enquiry Form";
	$message = 'Hello, Admin'; 
	$message .='<br/><br/>';
	$message .='Following are the details for Contact Form.';
	$message .='<br/><br/>';
	$message .="<table>";
	$message .="<tr><td>Name </td><td>:</td><td>".$_POST['name']."</td></tr>";
	$message .="<tr><td>Email </td><td>:</td><td>".$_POST['email']."</td></tr>";	
	$message .="<tr><td>Phone </td><td>:</td><td>".$_POST['phone']."</td></tr>";
	$message .="<tr><td>Message </td><td>:</td><td>".$_POST['message']."</td></tr>";
	$message .='</table>';

	$from = $_POST['email'];
	
	$rn = "\r\n";
	$headers = "MIME-Version: 1.0" . $rn;
	$headers .= "Content-type:text/html;charset=iso-8859-1" . $rn;
	$headers .= "From:" . "Tecnika";
	
	$suc = @mail($to,$subject,$message,$headers);
	if($suc){
		echo 1;
	}else{
		echo 0;
	}
}	
?>
