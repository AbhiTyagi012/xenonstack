<?php include('inc/header.php')?>
	<!--=================== PAGE-TITLE ===================-->
	<div class="page-title" style="background-image: url(assets/img/contact-banner.jpg);">
		<div class="container">
			<h1 class="title-line-left">Contact Us</h1>
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li>Contact Us</li>
				</ul>
			</div>
		</div>
	</div>
	<!--================= PAGE-TITLE END =================-->

	<!--================= PAGE-CONTACTS =================-->
	<section class="page-contacts">
		<div class="container">
			<h2 class="title-line-left">Get in Touch</h2>
			<div class="row">
				<div class="col-12 col-sm-8">
					<form id="contactformchagd" method="post" action="#" name="contactform" onsubmit="return validateContactForms()">
						<ul class="form-cover">
							<li class="inp-name"><input id="name" type="text" name="your_name" placeholder="First Name"></li><div class="error" id="nameErr_contact"></div>
							<li class="inp-name"><input id="last-name" type="text" name="your_last_name" placeholder="Last Name"></li><div class="error" id="lnameErr_contact"></div>
							<li class="inp-phone"><input id="phone" type="tel" name="your_phone" placeholder="Phone"></li><div class="error" id="mobileErr"></div>
							<li class="inp-email"><input id="email" type="email" name="your_email" placeholder="E-mail"></li><div class="error" id="emailErr_contact"></div>
							<li class="inp-text"><textarea id="comments" name="your_message" placeholder="Message"></textarea></li><div class="error" id="messageErr_contact"></div>
						</ul>     
						<div class="checkbox-wrap">
							<div class="checkbox-cover">
								<input type="checkbox">
								<p>By using this form you agree with the storage and handling of your data by this website.</p>
							</div>
						</div>
						<div class="btn-form-cover">
							<button id="#submit" name="submit" type="submit" value="submit" class="btn">Submit</button>
						
						</div>
					</form>
				
				</div>
				<div class="col-12 col-sm-4 page-cont-info">
					<div class="cont-info-item">
						<i class="fas fa-map-marker-alt"></i>
						<h5>Address</h5>
						<p>DPT-110 , First Floor, Okhla Phase - I Area, <br> Phase - 1, 
New Delhi, Delhi 110020</p>
					</div>
					<div class="cont-info-item">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<h5>Phones</h5>
						<ul class="cont-phone">
							<a href="tel:+919911607755">+91 9911607755</a> <br>
							<a href="tel:+918448015101">+91 8448015101</a>
						</ul>
					</div>
					<div class="cont-info-item">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<h5>Email</h5>
						<ul class="cont-email">
							<a href="mailto:deepak@aceexhibitions.co.in">deepak@aceexhibitions.co.in</a>
					
							<a href="mailto:events1@aceexhibitions.co.in">events1@aceexhibitions.co.in</a>
						</ul>
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

    
        $name = $_POST['your_name'];
        $l_name = $_POST['your_last_name'];
        $phone = $_POST['your_phone'];
        $email = $_POST['your_email'];
        $content=$_POST['your_message'];
            $to = "ceo@aceexhibitions.co.in,ceo@acem7.com,events@m7creations.com,Events1@aceexhibitions.co.in,adityanamansingh@gmail.com";
        
            $subject = "BVTech Contact Enquiry";
            
            $headers = 'MIME-Version: 1.0';
            
            $headers = 'Content-type: text/html; charset=iso-8859-1';
                
        
            // $mail->From = 'Bigtobiggerconsulting@gmail.com';
            // $mail->FromName = "COMVAC"; // Name to indicate where the email came from when the recipient received
            // $mail->AddAddress("adityanamansingh@gmail.com");
            // // $mail->AddCC("info@bigtobigger.com");
            // $mail->AddCC("adityanamansingh@gmail.com");
            // $mail->WordWrap = 50; // set word wrap
            // $mail->IsHTML(true); // send as HTML
            // $mail->Subject = "COMVAC Contact Enquiry"; //used for mail subject
          $message .='<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body style="background-color:#f6f6f6; box-sizing: border-box; font-family: " Poppins", sans-serif;"><div style="margin:0px auto;background: #f3f3f3;padding: 10px;"><div
          style="border: 1px solid #ccc;background-color:#fff;clear:both;color:#666;line-height:32px;max-width:500px;margin:50px auto;border-radius:5px 5px 5px 5px"><div
          style="color:#fff;text-align:center;padding:0px 0px 0px;background-repeat:no-repeat;background-position:center;background-size:183px;background-image: url('.SITE_URL.'assets/img/logo.png);background-color:#fff;width:100%;height:125px;border-radius:5px 5px 0px 0px"></div><div
          style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0px;padding-left:0;font-size:15px"><img src="'.SITE_URL.'assets/img/message.png"
          style=" display: block; margin: 0 auto;width: 100px; padding-top: 15px;"><table cellpadding="0" cellspacing="0"
          style="width: 100%;margin: 8px 1px;font-size: 12px;font-size:12px"><tbody>
          
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">First Name</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left; ">'.$name.'</td></tr>
          
           <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Last Name</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left; ">'.$l_name.'</td></tr>
          
          
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Email</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$email.'</td></tr>
          
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Phone</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$phone.'</td></tr>
          <tr><td style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url('.SITE_URL.'assets/img/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Message</td><td
          style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$content.'</td></tr></tbody></table><p
          style="padding: 10px 30px;font-weight: 600;text-align: center;font-size: 14px;margin-bottom: 0;background-repeat:no-repeat;background-position:center;background-color:#FDB913;background: #FDB913;color: #000;text-transform: capitalize;">BVTech | All right reserved</p></div></div></div></div></body></html>';
            $t = mail($to,$subject,$message,$headers);
            
           if($t)
           {
               echo "<script type='text/javascript'>alert('Your message has been saved successfully.We will contact you soon.')</script>";  
                echo "<script> window.location.href = 'contact-us.php';</script>"; 
            
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

 function validateContactForms() {
debugger;

 var name = document.contactform.your_name.value;
 
 var lname = document.contactform.your_last_name.value;
 
 var email = document.contactform.your_email.value;

 var mobile = document.contactform.your_phone.value;

 var message = document.contactform.your_message.value;

 var nameErr_contact = lnameErr_contact = emailErr_contact = messageErr_contact =  mobileErr = true;
    
    
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
  printError("lnameErr_contact", "Please enter your last name");
  } else {
    var regex = /^[a-zA-Z\s]{3,50}$/;                     
         if(regex.test(lname) === false) {
             printError("lnameErr_contact", "Please enter a valid last name. Input is too short (min 3) or too big (max 50).");
     } else {
         printError("lnameErr_contact", "");
         lnameErr_contact = false;
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
     
    
    
  if(( nameErr_contact || lnameErr_contact || emailErr_contact || messageErr_contact ||  mobileErr ) == true) {
       return false;
     } 
     else {
         
     }
 };
</script>