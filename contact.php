<?php
    $title = " Contact | LECORE PLY";
     $meta ="Contact | LECORE PLY ";

   
  ?>
  <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lecoreply";
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection

?>
<?php include('inc/header.php')?>






        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2>Contact</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--Contact section start-->
        <div class="conact-section section pt-85 pt-lg-65 pt-md-55 pt-sm-45 pt-xs-35  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-wrap">
                            <h3 class="contact-title">Write Us</h3>
                            <form id="-form" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="name-fild-padding mb-sm-30 mb-xs-30">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-form-style mb-20">
                                                        <label class="fild-name">Name</label>
                                                        <input name="name" id="name" placeholder="" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="contact-form-style mb-20">
                                                        <label class="fild-name">Email</label>
                                                        <input name="email" id="email" placeholder="" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="contact-form-style mb-20">
                                                        <label class="fild-name">Phone No.</label>
                                                        <input  id="phone1" name="phone1" placeholder="" type="number">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="contact-form-style bl">
                                            <label class="fild-name pl-15">Message</label>
                                            <textarea class="pl-15" name="msg1" id="msg1" placeholder="Type your message here.."></textarea>
                                            <button type="submit"  name="submit" class="blob">Submit<i class="fa fa-long-arrow-alt-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Contact section end-->
        <!--Contact Map section start-->
        <div class="contact-map-section section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d876.1996750127871!2d77.295753429195!3d28.54576969890327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce40496eb087d%3A0xc655360e3291d145!2sSector%208%2C%20Pocket%208%2C%20Jasola%2C%20New%20Delhi%2C%20Delhi%20110025!5e0!3m2!1sen!2sin!4v1645533063519!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!--Contact Map section End-->

        
<?php include('inc/footer.php')?>
<?php

if(isset($_POST['submit'])){

    require 'phpmailer/mail.php';
    

   $param_name = $_POST['name'];
   $param_email = $_POST['email'];
   $param_phone = $_POST['phone1'];
   $param_msg = $_POST['msg1'];

   
   $sql = "INSERT INTO `contact`(`name`,`email`,`phone`,`msg`)VALUES('$param_name','$param_email','$param_phone','$param_msg')";
   if ($db->query($sql) === TRUE) {

    $mail->From = 'serveremailmessage@gmail.com';
    $mail->FromName = "LecorePly WEB ADMIN"; // Name to indicate where the email came from when the recipient received
    $mail->AddAddress("lecoreplywood@gmail.com");
    $mail->AddBCC("");
    $mail->AddCC("mehultyagi101@gmail.com");
    $mail->WordWrap = 50; // set word wrap
    $mail->IsHTML(true); // send as HTML
    
    $mail->SMTPDebug = true;
    $mail->do_debug = 2;
    $mail->Subject = "100Plywood Contact Enquiry"; //used for mail subject
    $mail->Body = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body style="background-color:#f6f6f6; box-sizing: border-box; font-family: " Poppins", sans-serif;"><div style="margin:0px auto;background: #f3f3f3;padding: 10px;"><div
      style="border: 1px solid #ccc;background-color:#fff;clear:both;color:#666;line-height:32px;max-width:500px;margin:50px auto;border-radius:5px 5px 5px 5px"><div
      style="color:#fff;text-align:center;padding:0px 0px 0px;background-repeat:no-repeat;background-position:center;background-size:183px;background-image: url(https://lecoreply.com/assets/images/logo.png);background-color:#000;width:100%;height:125px;border-radius:5px 5px 0px 0px"></div><div
      style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0px;padding-left:0;font-size:15px"><img src="https://lecoreply.com/assets/images/message.png"
      style=" display: block; margin: 0 auto;width: 100px; padding-top: 15px;"><table cellpadding="0" cellspacing="0"
      style="width: 100%;margin: 8px 1px;font-size: 12px;font-size:12px"><tbody><tr><td
      style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url(https://lecoreply.com/assets/images/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Name</td><td
      style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left; ">'.$param_name.'</td></tr><tr><td
      style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url(https://lecoreply.com/assets/images/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Email</td><td
      style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$param_email.'</td></tr>
      
      <tr><td
      style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url(https://lecoreply.com/assets/images/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Phone Number</td><td
      style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$param_phone.'</td></tr><tr><td
      style="border-bottom:1px solid #eeee;text-align:left;padding: 10px;color: #000;width: 171px;font-weight:bold;font-size: 15px;background: url(https://lecoreply.com/assets/images/dots.png);background-size: 3px;background-repeat: no-repeat;background-position: right;">Message</td><td
      style="border-bottom:1px solid #eeee;font-size: 17px;padding: 10px;color: #000;text-align: left;">'.$param_msg.'</td></tr></tbody></table><p
      style="padding: 10px 30px;font-weight: 600;text-align: center;font-size: 14px;margin-bottom: 0;background-repeat:no-repeat;background-position:center;background-color:#000;background: #000;color: #fff;text-transform: capitalize;">Lecore Plywood  | All right reserved</p></div></div></div></div></body></html>';
       

    if($mail->Send())
    {
       echo "<script type='text/javascript'>alert('Your message has been saved successfully.We will contact you soon.')</script>";  
        echo "<script> window.location.href = 'contact.php';</script>"; 
    
    } else {

        $mailError = $mail->ErrorInfo;
        echo "<script type='text/javascript'>alert('There is an issue with the form you filled. Please try again.')</script>";
echo "<script> window.location.href = 'contact.php';</script>";
           }
  
  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }


  
   
       
   
}


?>