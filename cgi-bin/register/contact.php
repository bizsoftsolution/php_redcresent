<?php
$body="";		
if(isset($_REQUEST['name']))
{
	if((!empty($_REQUEST['name16']))&&(!empty($_REQUEST['name17'])) )
	{
		echo '<script type="text/javascript">alert("Please Select Only one T-Shirt Size");window.location="index.html";</script>';
	}
	else{
	$conn = mysqli_connect("localhost","red_register_for","test123!@#","red_register_form");
	//$upload_image=$_FILES["file"]["name"];
	//$folder="images/register/";
	//move_uploaded_file($_FILES["file"]["tmp_name"], "$folder".$_FILES["file"]["name"]);
	$target_dir = "import/upload/register/";
	$file_db = $_FILES["file"]["name"];
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
	
	$t_shirt="";
	if(isset($_REQUEST['name16']))
	$t_shirt = $_REQUEST['name16'];
	
	$kt_shirt="";
	if(isset($_REQUEST['name17']))
	$kt_shirt = $_REQUEST['name17'];

	$sql = "INSERT INTO tbl_registration_form (full_name, ic_passport_no, age, sex, nationality, race, dob, contact_number, email_id, billing_address, post_code, city, state, country, payment_method, school_name, t_shirt_adult, t_shirt_kids, emergency_contact_name, emergency_contact_no, emergency_contact_relationship,photo, parent_name, parent_ic_no) VALUES ('".$_REQUEST['name']."', '".$_REQUEST['name1']."', '".$_REQUEST['name2']."', '".$_REQUEST['name3']."', '".$_REQUEST['name4']."', '".$_REQUEST['name5']."', '".$_REQUEST['name6']."', '".$_REQUEST['name7']."', '".$_REQUEST['name8']."', '".$_REQUEST['name9']."', '".$_REQUEST['name10']."', '".$_REQUEST['name11']."', '".$_REQUEST['name12']."', '".$_REQUEST['name13']."', '".$_REQUEST['name14']."', '".$_REQUEST['name15']."', '".$t_shirt."', '".$kt_shirt."', '".$_REQUEST['name18']."', '".$_REQUEST['name19']."', '".$_REQUEST['name20']."','".$file_db."', '".$_REQUEST['name21']."', '".$_REQUEST['name22']."');";
		if ($conn->query($sql) === TRUE) {
			
			$body='<h1 style="text-align:center;">Malaysian Red Crescent, Klang District</h1>
			<h2 style="text-align:center;">Run Humanity</h2>

			<table border="1" cellpadding="30" cellspacing="">
				<tr>
					<td col-span="2">Registration Form</td>
				</tr>
				<tr>
					<td>FULL NAME</td>
					<td>'.$_REQUEST['name'].'</td>
					<td>IC/PASSPORT NO</td>
					<td>'.$_REQUEST['name1'].'</td>
					
				</tr>

				<tr>
					<td>AGE</td>
					<td>'.$_REQUEST['name2'].'</td>
					<td>SEX</td>
					<td>'.$_REQUEST['name3'].'</td>
				</tr>

				<tr>
					<td>NATIONALITY</td>
					<td>'.$_REQUEST['name4'].'</td>
					<td>RACE</td>
					<td>'.$_REQUEST['name5'].'</td>
				</tr>

				<tr>
					<td>DATE OF BIRTH</td>
					<td>'.$_REQUEST['name6'].'</td>
					<td>CONTACT NUMBER</td>
					<td>'.$_REQUEST['name7'].'</td>
					
				</tr>

				<tr>
					<td>EMAIL-ID</td>
					<td>'.$_REQUEST['name8'].'</td>
					<td>MAILING ADDRESS</td>
					<td>'.$_REQUEST['name9'].'</td>
				</tr>

				<tr>
					<td>POST CODE</td>
					<td>'.$_REQUEST['name9'].'</td>

					<td>CITY</td>
					<td>'.$_REQUEST['name10'].'</td>
					
				</tr>
				<tr>
					<td>STATE</td>
					<td>'.$_REQUEST['name11'].'</td>

					<td>COUNTRY</td>
					<td>'.$_REQUEST['name12'].'</td>
					
				</tr>
				<tr>
					<td>COUNTRY</td>
					<td>'.$_REQUEST['name13'].'</td>

					<td>PAYMENT METHOD</td>
					<td >'.$_REQUEST['name14'].'</td>
					
				</tr>
				<tr>
					<td>SCHOOL NAME</td>
					<td colspan="3">'.$_REQUEST['name15'].'</td>
					
				</tr>
				<tr>
					<td>T-SHIRT SIZE CHART(ADULT)</td>
					<td>'.$t_shirt.'</td>

					<td>T-SHIRT SIZE CHART(KIDS)</td>
					<td>'.$kt_shirt.'</td>
					
				</tr>
				<tr>
					<td colspan="3"><h1>EMERGENCY CONTACT</h1><td>
				</tr>
				<tr>
					<td>CONTACT NAME</td>
					<td>'.$_REQUEST['name18'].'</td>

					<td>CONTACT NUMBER</td>
					<td>'.$_REQUEST['name19'].'</td>
					
				</tr>
				<tr>
					<td colspan="2">RELATIONSHIP</td>
					<td colspan="2">'.$_REQUEST['name20'].'</td>
					
				</tr>

			</table>';		
}

		
		date_default_timezone_set('Etc/UTC');

		require 'include/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->isSMTP();
		//$mail->SMTPDebug = 2;
		//$mail->Debugoutput = 'html';
		$mail->Host ="sg2plcpnl0114.prod.sin2.secureserver.net";
		$mail->Port = 465;
		//$mail->isSMTP();
		//$mail->Host = 'relay-hosting.secureserver.net';
		//$mail->Port = 25;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';
		//$mail->SMTPAuth = false;
		$mail->Username = "mail@redcrescentklang.com";
		$mail->Password = "test123!@#";
		$mail->setFrom('mail@redcrescentklang.com', 'redcrescentklang');
		$mail->addReplyTo('mail@redcrescentklang.com', 'redcrescentklang');
		$mail->addAddress('jasper_0214@yahoo.com.sg', 'Register Form');
		$mail->addAddress('enquiry.rfh@gmail.com', 'Register Form');
		//$mail->addAddress('anitha.bizsoft@gmail.com', 'Register Form');
		//$mail->addAddress('govindarajselvam90@gmail.com', 'Register Form');
		$mail->Subject = 'redcrescentklang Register Form';
		if (isset($_FILES['file']) &&
			$_FILES['file']['error'] == UPLOAD_ERR_OK) {
			$mail->AddAttachment($_FILES['file']['tmp_name'],
								 $_FILES['file']['name']);
			}
		$mail->msgHTML($body);
		
		if (!$mail->send()) {

			echo "<script>javascript: alert('test msgbox')></script>";
			//echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
				echo '<script type="text/javascript">alert("Message Send  Successfully");window.location="index.html";</script>';
			
		}

			
	}
			}

	