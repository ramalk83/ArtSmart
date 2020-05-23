
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css" media="screen" /> 
  <meta name=keywords content="SmartRArts Paintings Art childrens art class art workshop Indian Japanese Mexican Gond Aboriginal Madhubani Art Masters Painting around world Painting kids classes  " />
    <meta name=description SmartRArts />
    <title>Smart"R"Arts : Kids Art classes - Contact </title>

<style>
   

  /* Contact Section
  --------------------------------*/
  #contact {
    background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(197, 193, 193, 0.7)), url("image/contactbg.jpg") fixed center center no-repeat;
    max-width: 100%;    
    background-size:cover; 
    background-position: center;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    position: relative;
    color: rgb(63, 62, 62);
    padding-top:10px;
    margin-top:0px;
   }
  
  #contact .info {
    color: #222;
  }
  
  #contact .info i {
    font-size: 32px;
    color: rgb(6, 85, 177);
    float: left;
  }
  
  

 
  #contact .info p {
    padding: 0 0 10px 50px;
    margin-bottom: 20px;
    line-height: 22px;
    font-size: 16px;
    font-weight:500;
  }
  
  #contact .info .email p {
    padding-top: 5px;
  }
  
  #contact .social-links {
    padding-bottom: 20px;
  }
  
  #contact .social-links a {
    font-size: 18px;
    display: inline-block;
    background: rgb(4, 150, 218);
    color: #fff;
    line-height: 1;
    padding: 6px 0 8px 0;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
  }
  
  #contact .social-links a:hover {
    background: #55b03f;
    color: #fff;
  }
  .section-title {
  font-size: 32px;
  color:black;
  font-family: 'Roboto Condensed', sans-serif;
  text-transform: uppercase;
  text-align: center;
  font-weight: 700;
   padding-top:5px;
   margin-top:0px;
   padding-bottom:0;
   margin:0;
}

.section-description {
  text-align: center;
  margin-bottom: 20px;
 
  font-size:18px;
}

.section-title-divider {
  width: 180px;
  height: 3px;
  background: #03C4EB;
  margin: 0 auto;
  margin-bottom: 10px;
}
  #contact .form #sendmessage {
    color: rgb(8, 52, 133);
    border: 1px solid rgb(5, 36, 102);
    display: none;
    text-align: center;
    padding: 15px;
    font-weight: 600;
    margin-bottom: 15px;
  }
  
  #contact .form #errormessage {
    color: red;
    display: none;
    border: 1px solid red;
    text-align: center;
    padding: 15px;
    font-weight: 600;
    margin-bottom: 15px;
  }
  
  #contact .form #sendmessage.show, #contact .form #errormessage.show, #contact .form .show {
    display: block;
  }
</style>
</head>
<body style="background-color:black;"> 

<!--==========================
  Contact Section
  ============================-->
    
<?php
  $result="";
if(isset($_POST['submit'])) {

 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    // validation expected data exists
    if(!isset($_POST['fname']) ||
        !isset($_POST['phno']) ||
        !isset($_POST['email']) ||
        
        !isset($_POST['subject'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
  if(!preg_match($emailto,$emailfrom)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
     $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The  Name you entered does not appear to be valid.<br />';
  }
   
  if(strlen($subject) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
require "phpmailer/PHPMailer/PHPMailerAutoload.php";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true; 

$mail->SMTPSecure = 'ssl'; 
$mail->Host = 'mail.smartrarts.com';
$mail->Port = 465;  
$mail->Username = 'smarts@smartrarts.com';
$mail->Password = 'SaiArt2o17';   

 $mail->IsHTML(true);
        $mail->From=$_POST['email'];
        $mail->FromName=$_POST['name'];
        $mail->Sender=$_POST['email'];
        $mail->AddReplyTo($_POST['email'], $_POST['name']);
        $mail->Subject = "Form Submission :".$_POST['subject'];
        $mail-> Body= 'Name : '.$_POST['name'].
               '<br> Email : '.$_POST['email'].
               '<br> Message : '.$_POST['Message'].'</h1>';
        $mail->AddAddress($to);

$to='smarts@smartrarts.com';

if(!$mail->send()) 
{
    $result="Something went wrong.Please try again !";
} 
else 
{
    $result="Thanks".$_POST['name']." Message has been sent successfully";
    unset($name,$email,$subject,$message);
    header("Location:contact.php?mailsend");
}
  

}
?>
 <!--==========================
  Contact Section
  ============================-->
  <section id="contact" class=" wow fadeInUp"  >    
            <div class="container-fluid  wow fadeInUp">
                    <div class="row">
                      <div class="col-md-12" style=" padding-top: 5px; padding-bottom: 10px;">
                        <h3 class="section-title" >Contact Us</h3>
                          <div class="section-title-divider"></div><br><br>
                        <p class="section-description">We would like to hear from you ! </p>     </div>
                    </div><br>
             <div class="row justify-content-center">           
                <div class="col-lg-3 col-md-4">              
                    <div class="info">
                      <div>
                            
                            <h4><b>Our Contact </b></h4>
                          </div>
              
                          <div class="email">
                            <i class="fa fa-envelope"></i>
                            <p>smarts@smartrarts.com</p>
                          </div>
              
                        
                        </div> 
              
    
            </div>
    
            <div class="col-lg-5 col-md-8">
              <div class="form">
               <h5 class="text-center font-weight-bold text-success"><?= $result; ?></h5>
                <form action="contact.php" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control required" value="" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                    
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control required" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                   
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control required" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                   
                  </div>
                  <div class="form-group">
                    <textarea class="form-contrl required" name="message" rows="5" cols="80" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                   
                  </div>
                  <div class="text-center "><button type="submit" name="submit" class="btn-primary" style="padding:10px;">Send Message</button></div>
                </form>
              </div>
            </div>
          </div>
        </div><br>
      </section><!-- #contact -->
    

<br><br>



</body>
</html>
