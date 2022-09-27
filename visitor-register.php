<?php include('inc/header.php')?>
<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/img/register-banner.jpg);">
	<div class="container">
		<h1 class="title-line-left">Visitors Registration</h1>
		<div class="breadcrumbs">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Visitors Registration</li>
			</ul>
		</div>
	</div>
</div>
<!--================= PAGE-TITLE END =================-->
<section class="page-contacts">
	<div class="container">
		<h2 class="title-line-left">Registration</h2>
		<div class="row">
			<div class="">
				<form id='contactformchan' action="#" method="post" name="contactformd" onsubmit="return validateVisitorForms()">
					<div class="form-cover">
						<div class="col-md-4">
							<div class="form_groupss">
								<ul>
									<li>
										<i class="fas fa-user"></i>
										<input type="radio" name="salutation" value="Mr."> Mr.
									</li>
									<li>
										<i class="fas fa-female"></i>
										<input type="radio" name="salutation" value="Ms."> Ms.
									</li>
									<li>
										<i class="fas fa-user"></i>
										<input type="radio" name="salutation" value="Mrs."> Mrs.
									</li>
									<li>
										<i class="fas fa-user"></i>
										<input type="radio" name="salutation" value="Dr."> Dr.
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form_groups">
								<i class="fas fa-user"></i>
								<input id="name" type="text" name="your_name" placeholder="Name">
							</div>
							<div class="error" id="nameErr_contact"></div>
						</div>
						<div class="col-md-4">
							<div class="form_groups">
								<i class="fas fa-building"></i>
								<input id="company" type="text" name="your_company_name" placeholder="Company Name">
							</div>
							<div class="error" id="lnameErr_contact"></div>
						</div>
						<div class="col-md-4">
							<div class="form_groups">
								<i class="fas fa-building"></i>
								<input id="designation" type="text" name="your_designation" placeholder="Designation">
							</div>
								<div class="error" id="desigErr_contact"></div>
						</div>
						<div class="col-md-4">
							<div class="form_groups">
								<i class="fas fa-phone"></i>
								<input id="phone" type="tel" name="your_phone" placeholder="Phone">
							</div>
							 <div class="error" id="mobileErr"></div>
						</div>
						<div class="col-md-4">
							<div class="form_groups">
								<i class="fas fa-phone"></i>
								<input id="phone" type="tel" name="alternate_number" placeholder="Alternate Phone">
							</div>
							<div class="error" id="amobileErr"></div>
						</div>
						<div class="col-md-4">
							<div class="form_groups">
								<i class="fas fa-globe"></i>
								<input id="country" type="text" name="your_country" placeholder=" Country">

							</div>
							 <div class="error" id="countryErr"></div>
						</div>
						<div class="col-md-4">
							<div class="form_groups">
								<i class="fas fa-envelope"></i>
								<input id="email" type="email" name="your_email" placeholder="email">

							</div>
							 <div class="error" id="emailErr_contact"></div>
						</div>
						<div class="col-md-4">
							<div class="form_groups">
								<i class="fab fa-diaspora"></i>
								<select name="interested_areas[]" title="Areas Interested In" class="selectpicker show-tick" data-live-search="true" multiple
									data-max-options="5">
									<option disabled >Areas Interested In</option>
									
									<option value="Material handling">
										Material handling
									</option>

									<option value="Metal suppliers">
										Metal suppliers
									</option>
									<option value="Plate and structural fabricating">
										Plate and structural fabricating
									</option>
									<option value="Press brakes">
										Press brakes
									</option>
									<option value="Punching">
										Punching
									</option>
									<option value="Resistance welding">
										Resistance welding
									</option>
									<option value="Robotics">
										Robotics
									</option>
									<option value="Roll forming">
										Roll forming
									</option>
									<option value="Safety and environmental">
										Safety and environmental
									</option>
									<option value="Saws">
										Saws
									</option>
									<option value="Software, machine controls">
										Software, machine controls
									</option>
									<option value="Stamping">
										Stamping
									</option>
									<option value="Thermal spraying">
										Thermal spraying
									</option>
									<option value="Tool and die">
										Tool and die
									</option>
									<option value="Tooling">
										Tooling
									</option>
									<option value="Tube and pipe fabricating or welding">
										Tube and pipe fabricating or welding
									</option>
									<option value="Tube and pipe producing">
										Tube and pipe producing
									</option>
									<option value="Waterjet">
										Waterjet
									</option>
									<option value="Welding consumables">
										Welding consumables
									</option>
									<option value="Welding machines">
										Welding machines
									</option>
									<option value="Featured technologies">
										Featured technologies
									</option>
									<option value="Additive manufacturing/3D printing">
										Additive manufacturing/3D printing
									</option>
									<option value="Arc Welding">
										Arc welding
									</option>
									<option value="Assembly">
										Assembly
									</option>
									<option value="Automation">
										Automation
									</option>
									<option value="Bending and forming">
										Bending and forming
									</option>
									<option value="Brazing and soldering">
										Brazing and soldering
									</option>
									<option value="Business services">
										Business services</option>
									<option value="Coil processing">
										Coil processing</option>
									<option value="Cutting">
										Cutting</option>
									<option value="Fastening and joining">
										Fastening and joining
									</option>
									<option value="Finishing/paint and powder coating">
										Finishing/paint and powder coating
									</option>
									<option value="Finishing/plating">
										Finishing/plating
									</option>
									<option value="Gases and gas equipment">
										Gases and gas equipment
									</option>
									<option value="Hydroforming">
										Hydroforming
									</option>
									<option value="Inspection and testing">
										Inspection and testing
									</option>
									<option value="Job shop/contract manufacturing">
										Job shop/contract manufacturing
									</option>
									<option value="Lasers">
										Lasers
									</option>
									<option value="Lubrication">
										Lubrication
									</option>
									<option value="Maintenance and repair">
										Maintenance and repair
									</option>
								</select>
							</div>
							
						</div>
						<div class="col-md-12">
							<div class="form_groups">
								<i class="fas fa-comment"></i>
								<textarea id="comments" name="your_message" placeholder="Message"></textarea>

							</div>
							<div class="error" id="areaErr_contact"></div>
						</div>

						<div class="col-md-12">
							<div class="btn-form-cover ">
								<button id="#submit" type="submit" name="submit" value="submit" class="btn w-100"
									style="width:100%;">Submit</button>
							</div>
						</div>

					</div>


				</form>
				<div id="message"></div>
			</div>

		</div>
	</div>



	</div>
	</div>

</section>

<!--================= PAGE-CONTACTS END =================-->


<!--================= PAGE-CONTACTS =================-->
<section class="page-contacts">
	<div class="container">
		<h2 class="title-line-left">Visitors enquiries</h2>
		<div class="row">
				<div class="col-12 col-sm-6  mt-2  page-cont-info">
				<div class="cont-info-item">
					<i class="fas fa-user"></i>
					<h5>Anupreet Singh Jaggi</h5>
					<p><a href="tel:+918448015101">8448015101</a></p>
					<p><a href="mailto:events@m7creations.com">events@m7creations.com</a></p>

				</div>
			</div>
			<div class="col-12 col-sm-6 mt-2 page-cont-info">
				<div class="cont-info-item">
					<i class="fas fa-user"></i>
					<h5>Kumar Deepak</h5>
					<p><a href="tel:+919911607755">9911607755</a></p>
					<p>	<a href="mailto:deepak@m7creations.com">deepak@m7creations.com</a></p>

				</div>
			</div>


		</div>
	</div>




</section>
<!--================= PAGE-CONTACTS END =================-->



<!--===================== FOOTER =====================-->


<?php include('inc/footer.php')?>

<?php 


if(isset($_POST['submit'])){

    //PHP Mailer
    require 'phpmailer/mail.php';
    
        
        $Array = $_POST['interested_areas'];
        $List = implode(', ', $Array);
        
        $gender = $_POST['salutation'];
        $name = $_POST['your_name'];
        $designation =  $_POST['your_designation'];
        $company_name = $_POST['your_company_name'];
        $phone = $_POST['your_phone'];
        $alt = $_POST['alternate_number'];
        $country = $_POST['your_country'];
        $email = $_POST['your_email'];
        $content=$_POST['your_message'];
        
            // $mail->From = 'Bigtobiggerconsulting@gmail.com';
            // $mail->FromName = "BVTECH"; // Name to indicate where the email came from when the recipient received
            // $mail->AddAddress("adityanamansingh@gmail.com");
            // // $mail->AddCC("info@bigtobigger.com");
            // $mail->AddCC("adityanamansingh@gmail.com");
            // $mail->AddCC("ssing648@gmail.com");
            // $mail->WordWrap = 50; // set word wrap
            // $mail->IsHTML(true); // send as HTML
            $to = "ceo@aceexhibitions.co.in,ceo@acem7.com,events@m7creations.com,Events1@aceexhibitions.co.in,adityanamansingh@gmail.com";
        
            $subject = "BVTECH Visitor Enquiry";
            
            $headers = 'MIME-Version: 1.0';
            
            $headers = 'Content-type: text/html; charset=iso-8859-1';
                
            
          $message .='<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body style="background-color:#f6f6f6; box-sizing: border-box; font-family: " Poppins", sans-serif;"><div style="margin:0px auto;background: #f3f3f3;padding: 10px;"><div
          style="border: 1px solid #ccc;background-color:#fff;clear:both;color:#666;line-height:32px;max-width:500px;margin:50px auto;border-radius:5px 5px 5px 5px"><div
          style="color:#fff;text-align:center;padding:0px 0px 0px;background-repeat:no-repeat;background-position:center;background-size:183px;background-image: url('.SITE_URL.'assets/img/logo.png);background-color:#fff;width:100%;height:125px;border-radius:5px 5px 0px 0px"></div><div
          style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0px;padding-left:0;font-size:15px"><img src="'.SITE_URL.'assets/img/message.png"
          style=" display: block; margin: 0 auto;width: 100px; padding-top: 15px;"><table cellpadding="0" cellspacing="0"
          style="width: 100%;margin: 8px 1px;font-size: 12px;font-size:12px"><tbody>
          
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Full Name</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left; ">'.$gender.' '.$name.'</td></tr>
          
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Company Name</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left; ">'.$company_name.'</td></tr>
          
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Designation</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left; ">'.$designation.'</td></tr>
          
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Email</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$email.'</td></tr>
          
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Phone</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$phone.'</td></tr>
          
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Alternate Phone</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$alt.'</td></tr>
          
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Country</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$country.'</td></tr>
          
           
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Areas Of Interest</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$List.'</td></tr>
          
          
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Message</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$content.'</td></tr></tbody></table><p
          style="padding: 10px 30px;font-weight: 600;text-align: center;font-size: 14px;margin-bottom: 0;background-repeat:no-repeat;background-position:center;background-color:#FDB913;background: #FDB913;color: #000;text-transform: capitalize;">BVTECH | All right reserved</p></div></div></div></div></body></html>';
            $t = mail($to,$subject,$message,$headers);
            
           if($t)
            {
               echo "<script type='text/javascript'>alert('Your message has been saved successfully.We will contact you soon.')</script>";  
                echo "<script> window.location.href = 'visitor-register.php';</script>"; 
            
            } else {

                $mailError = $mail->ErrorInfo;
                echo"hhh";
                   }



}
?>


<script>
function printError(elemId, hintMsg) {
 document.getElementById(elemId).innerHTML = hintMsg;
 }

 function validateVisitorForms() {
debugger;

 var name = document.contactformd.your_name.value;
 
 var lname = document.contactformd.your_company_name.value;

 var desig = document.contactformd.your_designation.value;
 
 var email = document.contactformd.your_email.value;

 var mobile = document.contactformd.your_phone.value;

 var a_num = document.contactformd.alternate_number.value;
 
 var country = document.contactformd.your_country.value;

 var message = document.contactformd.your_message.value;

 var nameErr_contact = lnameErr_contact = emailErr_contact = messageErr_contact =  mobileErr = amobileErr = countryErr = desigErr_contact = true;
    
    
if(name == "") {
  printError("nameErr_contact", "Please enter your first name");
  } else {
    var regex = /^[a-zA-Z\s]{3,50}$/;                     
         if(regex.test(name) === false) {
             printError("nameErr_contact", "Please enter a valid first name. Input is too short (min 3) or too big (max 50).");
     } else {
         printError("nameErr_contact", "");
         nameErr_contact = false;
         }
     }
     
if(lname == "") {
  printError("lnameErr_contact", "Please enter your company name");
  } else {
    var regex = /^[a-zA-Z\s]{3,50}$/;                     
         if(regex.test(lname) === false) {
             printError("lnameErr_contact", "Please enter a valid company name. Input is too short (min 3) or too big (max 50).");
     } else {
         printError("lnameErr_contact", "");
         lnameErr_contact = false;
         }
     }
    
if(country == "") {
  printError("countryErr", "Please enter your country");
  } else {
    var regex = /^[a-zA-Z\s]{3,50}$/;                     
         if(regex.test(country) === false) {
             printError("countryErr", "Please enter a valid country name. Input is too short (min 3) or too big (max 50).");
     } else {
         printError("countryErr", "");
         countryErr = false;
         }
     }
     
     
     if(desig == "") {
  printError("desigErr_contact", "Please enter your designation");
  } else {
    var regex = /^[a-zA-Z\s]{3,50}$/;                     
         if(regex.test(desig) === false) {
             printError("desigErr_contact", "Please enter a valid designation. Input is too short (min 3) or too big (max 50).");
     } else {
         printError("desigErr_contact", "");
         desigErr_contact = false;
         }
     }
     


    
    
    
    
    
    
if(email == "") {
     printError("emailErr_contact", "Please enter your email address");
 } else {
       
     var regex = /^\S+@\S+\.\S+$/;
     if(regex.test(email) === false) {
         printError("emailErr_contact", "Please enter a valid email address");
     } else{
             printError("emailErr_contact", "");
             emailErr_contact = false;
         }
     }


    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid mobile number in the format 3123456789 without spaces,dashes or acess code (+)");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
    
     if(a_num == "") {
        printError("amobileErr", "Please enter your alternate mobile number");
    } else {
        var regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if(regex.test(a_num) === false) {
            printError("amobileErr", "Please enter a valid mobile number in the format 3123456789 without spaces,dashes or acess code (+)");
        } else{
            printError("amobileErr", "");
            amobileErr = false;
        }
    }

  
    
  
    if(message == "") {
        printError("messageErr_contact", "Please enter message");
    } else {
      
		var regex = /^[\w\W\s]{20,200}$/g;
		
        if(regex.test(message) === false) {
            printError("messageErr_contact", "Please enter your message. Input is too short (min 20) or too big (max 200).");
        } else {
            printError("messageErr_contact", "");
            messageErr_contact = false;
        }
    }
     
    
    
  if(( nameErr_contact || lnameErr_contact || emailErr_contact || messageErr_contact ||  mobileErr || amobileErr || countryErr || desigErr_contact) == true) {
       return false;
     } 
     else {
         
     }
 };
</script>