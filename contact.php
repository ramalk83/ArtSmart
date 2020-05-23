
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
<?php
 include("./includes/header.php");
?>
<!--==========================
  Contact Section
  ============================-->
    
<?php
  $result="";
if(isset($_POST['submit'])) {
    unset($result);

 if (!preg_match("/^\S+@[A-Za-z0-9_.-]+\.[A-Za-z]{2,6}$/",$femail))
    {
      unset($_GET['do']);
      $message = "Primary Email Address is incorrect. Please try again.";
     
    }

$fname = $_POST['name'];
$femail = $_POST['email'];
$f2email = $_POST['email'];
$subj=$_POST['subject'];


$myemail = "smarts@rl2020.com";
$emess = "Name: ".$fname."\n";
$emess.= "Email: ".$femail."\n";
$ehead = "From: ".$femail."\r\n";
$subj = "An Email from ".$fname." ".$subj."!";
$mailsend=mail("$myemail","$subj","$emess","$ehead");
$message = "Email was sent.";

    $result="Thanks  ".$_POST['name']." . Message has been sent successfully";
    unset($name,$email,$subject,$message);
  
  
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
                            <p>smarts@rl2020.com</p>
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

<?php
 include("./includes/footer.php");
?>

</body>
</html>
