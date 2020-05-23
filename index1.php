<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart"R"Arts Document</title>
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
  <!-- Add this css File in head tag-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

  <link rel="stylesheet" href="./css/style.css" media="screen" /> 
  <style>
.text {
  background-color:white;
  
  color: black;
  font-size: 3vw; 
  font-weight: bold;
  margin: 0 auto;
  padding: 8px;
  width: 45%;
  text-align: center;
  position: absolute;
  top: 20%;
  left: 12%;  

}
/* Mobile Styles */
@media only screen and (max-width: 400px) {
  .carousel-caption{
    font-size:20px;
   

  }
  .text{
    font-size:18px;
  }
}

/* Tablet Styles */
@media only screen and (min-width: 401px) and (max-width: 860px) {
  .carousel-caption{
    font-size:20px;
    
   
}
carousel-caption h3,h2{
    font-size:20px;
}
}
/* Desktop Styles */
@media only screen and (min-width: 961px) {
  .carousel-caption{
    font-size:30px;
    position: relative;
   top:30
}
carousel-caption h3,h2{
    font-size:40px;
}
}
</style>
</head>
<body>
<?php include("./includes/header.php") ?>
<!--Header-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>    
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="margin: 30px 10px 10px 40px; padding: 10px 10px 10px 20px;">
    <div class="item active">   
    <h2  ><div class="text">Welcome to Smart"R"Arts</div></h2>
    <div class="carousel-content"> 
        <img src="./image/back (1).png" alt="New york" style="width:100%;height:60%">   
        <div class="carousel-caption">
      
          <h3 class="animated bounceInLeft" style="color:black;top:30px;animation-delay: 2s">"Every child is an artist"</h3>
        </div>     
    </div>  </div>
    <div class="item">
        <img src="./image/back (6).jpg" alt="New york" style="width:100%;height:60%">       
        <div class="carousel-caption">

          <h3 class="animated zoomIn" style="animation-delay: 2s">Smarts"R"Arts mission to teach arts to every kids and make them a successful Artist.</h3>
        </div>
      </div>
      <div class="item">
      <h2  ><div class="text">Welcome to Smart"R"Arts</div></h2>
        <img src="./image/back (4).jpg" alt="New york" style="width:100%;height:40%">  
        <div class="carousel-caption">
        
          
        </div>      
      </div>
    </div>  
   

    <!-- Left and right controls -->
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
  </div>


<!--Class details-->
<div class="card-deck">
  <div class="card">
        <img class="card-img-top" src="image/f (16).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Drawing</h4>
          <p class="card-text">Learn the artistic styles, drawing tools will be teached in this class. 
                           Drawing provides a foundation for art. Observe and understand the objects you draw, with a focus on how to look at an object.
                          Students will better understand the fundamentals of drawing various objects.</p>
          <div class="card-footer">
          <a href="classes.php" > DETAILS </a>
          </div>
      </div>
</div>

<div class="card">
        <img class="card-img-top" src="image/f (11).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Painting</h4>
          <p class="card-text">Kids can learn about Watercolor,Acrylic and Oil painting in this classes 
          Learn color theory principles.Learn the basic elements of art: tone, lines, shape, perspective, movement, and positive and negative space. Create Landscape,Seascape and still life during the class.</p>
          <div class="card-footer">
          <a href="classes.php" > DETAILS </a>
        </div>
  </div> </div>

<div class="card">
        <img class="card-img-top" src="image/f (18).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Pastel Drawing</h4>
          <p class="card-text">Whether you are completely new to pastel painting or looking to build on the foundation of knowledge you already have, Pastel Painting Lessons is a wonderful journey into the world of pastels. 
            we will help you to gain confidence with the medium and learn to create, simple yet dynamic compositions. 
       <div class="card-footer">
       <a href="classes.php" > DETAILS </a>
        </div>
      </div> </div>

</div>


<div class=" col-lg-12  col-md-12 col-sm-12 col-xs-12">
<a  href="studentworks.php"><img  style="margin-left:10%;width:80%;height:450px;padding-top:30px;padding-bottom:30px;" src="image/Galleryback.jpg" ></a>
</div>

</div>


<!--Image Slider----->

<section   class="carousel slide"  data-ride="carousel" id="postsCarousel"style="margin-left:30px;">
 
    <div class=" carousel-inner col-lg-12  col-md-12 col-sm-12 col-xs-12">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img style="margin-top:80px;height:600px;padding-bottom:80px"class="img-fluid" src="image/mywork/ac13.jpg" alt="Carousel 1">
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img style="margin-top:80px;height:600px;padding-bottom:80px"class="img-fluid" src="image/mywork/f (15).jpg" alt="Carousel 2">
                    </div>
                   
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img style="margin-top:80px;height:600px;padding-bottom:80px"class="img-fluid" src="image/mywork/f (24).jpg" alt="Carousel 3">
                    </div>
                  
                </div>
            </div>
</div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img style="margin-top:80px;height:600px;padding-bottom:80px" class="img-fluid" src="image/mywork/stud1.jpg" alt="Carousel 4">
                    </div>
                  
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img style="margin-top:80px;height:600px;padding-bottom:80px" class="img-fluid" src="image/mywork/stud2.jpg" alt="Carousel 5">
                    </div>
                   
                </div>
            </div>
            <div class="col-md-4 fadeIn wow">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img style="margin-top:80px;height:600px;padding-bottom:80px" class="img-fluid" src="image/mywork/stud3.jpg" alt="Carousel 6">
                    </div>
                   
                </div>
            </div>
        </div>

    <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img style="margin-top:80px;height:600px;padding-bottom:80px" class="img-fluid" src="image/mywork/ac2.jpg" alt="Carousel 4">
                    </div>
                  
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                    <img style="margin-top:80px;height:600px;padding-bottom:80px" class="img-fluid" src="image/mywork/ac3.jpg" alt="Carousel 4">
                    </div>
                   
                </div>
            </div>
            <div class="col-md-4 fadeIn wow">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                    <img style="margin-top:80px;height:600px;padding-bottom:80px" class="img-fluid" src="image/mywork/ac4.jpg" alt="Carousel 4">
                    </div>
                   
                </div>
            </div>
        </div>

    <div class="row row-equal carousel-item m-t-0" >
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                    <img style="margin-top:80px;height:600px;padding-bottom:80px" class="img-fluid" src="image/mywork/ac5.jpg" alt="Carousel 4">
                    </div>
                  
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                    <img style="margin-top:80px;height:600px;padding-bottom:80px" class="img-fluid" src="image/mywork/ac6.jpg" alt="Carousel 4">
                    </div>
                   
                </div>
            </div>
            <div class="col-md-4 fadeIn wow">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                    <img style="margin-top:80px;height:600px;padding-bottom:80px" class="img-fluid" src="image/mywork/ac7.jpg" alt="Carousel 4">
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                    <img style="margin-top:80px;height:600px;padding-bottom:80px" class="img-fluid" src="image/mywork/ac8.jpg" alt="Carousel 4">
                    </div>
                  
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                    <img style="margin-top:80px;height:600px;padding-bottom:80px" class="img-fluid" src="image/mywork/ac9.jpg" alt="Carousel 4">
                    </div>
                   
                </div>
            </div>
            <div class="col-md-4 fadeIn wow">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                    <img style="margin-top:80px;height:600px;padding-bottom:80px" class="img-fluid" src="image/mywork/ac10.jpg" alt="Carousel 4">
                    </div>
                   
                </div>
            </div>
       
    </div>
    
</section>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid" style="background-color:black;margin-top:0px; ">
  <h1 class="text-center">CONTACT US</h1><br/><br/>
  <div class="row">
    
    <div class="col-sm-10 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" style="font-size:15px" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email"  style="font-size:15px" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments"  style="font-size:15px" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-danger" style="margin-left:45%;width:230px;font-size:20px;color:black;" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--footer-->
<?php
 include("./includes/footer.php");
  ?>
      

   
    <style>
        body {
                background-color: lightgray;
                color: #FFFFFF;
            }
            
    </style>
</body>
</html>