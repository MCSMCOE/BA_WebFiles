<?php

require_once "../phpmailer/class.phpmailer.php";
if(isset($_POST['name']) && !empty($_POST['state']) && !empty($_POST['district']) && !empty($_POST['mobile']) && !empty($_POST['branch']) && !empty($_POST['email']) ){
	
	 $name = $_POST['name'];
	 $state = $_POST['state'];  
	 $district = $_POST['district'];  
	 $mobile = $_POST['mobile'];  
	 $branch = $_POST['branch'];  
	 $email = $_POST['email'];
	 
	 $timestamp = $_POST['timestamp']; 
	 
	 
	 
	 
	 	
           

                $message = '<html><head>
                <title>New Admission Enquiry Request from'.$name.' | BIT Home</title>
                </head>
                <body>';
               			
				
              $message .= '

<div>

			<table width="100%" bgcolor="#eaeaea" cellpadding="0" cellspacing="0" border="0" id="">
				<tbody>
					<tr>
						<td style="padding-top:10px">
							<table width="630" cellpadding="15" bgcolor="#ffffff" cellspacing="0" border="0" align="center" class="m_-4089786782410533463devicewidth" style="padding-top:2em;border-top-left-radius:7px;border-top-right-radius:7px;border-bottom:1px solid #cccccc;margin:0 auto">
								<tbody>
									<tr>
										<td width="100%">

											<table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
												<tbody>

													<tr>
														<td>

															<img src="../images/bhead.png" alt="" width="576" height="81" class="m_-4089786782410533463logo CToWUd" style="display:block;border:none;outline:none;text-decoration:none" border="0">
															</a>
														</td>
														 

													</tr>
												</tbody>
											</table>



										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>

  <table width="100%" bgcolor="#eaeaea" cellpadding="0" cellspacing="0" border="0" id="">
				<tbody>
					<tr>
						<td>
							<table width="630" cellpadding="0" cellspacing="0" border="0" align="center" class="" style="background:#ffffff;margin:0 auto">
								<tbody>
									<tr>
										<td width="100%" style="padding:30px">
											<table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="">
												<tbody>
													<tr>
													  <td>
															<h4>Visitor - Information</h4>
														  <p class="" style="color:#4a4a4a;font-family:Helvetica,arial,sans-serif;font-size:16px;line-height:25px;margin-top:15px;margin-bottom:0px;padding:0">															 
															 
															
															
															<b>Name : </b>'.$name.'<br>															
															<b>Place : </b>'.$district.','.$state.'<br>														
															<b>Branch : </b>'.$branch.'<br>
															<b>Mobile : </b>'.$mobile.'<br>
															<b>Date & Time : </b>'.$timestamp.'<br>
															<b>Email : </b>'.$email.'<br><br>
																														
																				
															  
															 <a href="https://docs.google.com/spreadsheets/d/1cnPZzktBT0Pleqz8l6TVJPVxrGM_FFL-gydPapdpTUo/edit#gid=0" target="_blank" class="btn btn-dark btn-theme-colored" data-toggle="tooltip" data-placement="top" title="Tooltip on top"> Proceed to view all responses</a>
															 
															 
															
														  </p>
														 
														</td>
														

													</tr>

												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>

			
			
			<table width="100%" bgcolor="#eaeaea" cellpadding="0" cellspacing="0" border="0" id="m_-4089786782410533463backgroundTable">
				<tbody>
					<tr>
						<td>
							<table width="630" cellpadding="0" cellspacing="0" border="0" align="center" class="m_-4089786782410533463devicewidth" style="margin:0 auto">
								<tbody>
									<tr>
										<td width="100%">
											<table width="630" cellpadding="0" cellspacing="0" border="0" align="center" class="m_-4089786782410533463devicewidth">
												<tbody>
													<tr>
														<td align="center" valign="middle">
															<p style="font-family:Helvetica,arial,sans-serif;font-size:11px;padding:7px 0;color:#ababab;margin:0">&copy; 2018 &nbsp; kascsathy</p>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>
</div>
</div>';
				
				
                $message .= "</body></html>";
               
                $mail = new PHPMailer(true);
				
                $mail->IsSMTP();
                
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "ssl";
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465; 
	
	
               $mail->Username = 'digitalmarketing@kascsathy.ac.in';
                $mail->Password = 'digital@2018';

                $mail->SetFrom('digitalmarketing@kascsathy.ac.in', 'Website Support');
                
				
				$mail->AddAddress('infodesk@kascsathy.ac.in','InfoDesk BIT');
				$mail->addCC('vijayfranklinj@kascsathy.ac.in ', 'Dr Vijay Franklin');
				$mail->addCC('webmaster@kascsathy.ac.in', 'Webmaster BIT');
				
				
				

                $mail->Subject = trim("New Admission Enquiry Request from $name");
                $mail->MsgHTML($message);

                try {
                    $mail->send();
						
					
					
                    $msg = "An email has been sent for verification.";
                    $msgType = "success";
					
					
					
					
                } catch (Exception $ex) {
                    $msg = $ex->getMessage();
                    $msgType = "warning";
					
					
                }
				header('location:thankyou.html');
				
}
else
{
				//header('location:error.html');
}
           
		

?>
