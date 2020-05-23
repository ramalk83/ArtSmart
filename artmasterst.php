

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name=keywords content="SmartRArts Paintings Art childrens artclass ArtMasters artworkshop Indian Japanese Mexican Gond Aboriginal Madhubani Art Masters Painting around world Painting kids classes  " />
    <meta name=description SmartRArts />
    <title>Smart"R"Arts : Kids Art classes -Famous Art masters</title>
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
  <link rel="stylesheet" href="./css/style.css" media="screen" /> 
  <style>
  body {
   color:black;
 }
 .masthead1 {
    margin-top:5px;
    height:69px;   
    background-color: black;
    background-size:cover;
    text-align:center;
    color:white;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif ;
    font-size:24px;
    color:white;
    float:center;
  }

  .card-footer  {
  background-color:lightgray;
  color:black;
  
  text-align:center;
  font-size:15px;
 
  padding: 20px 20px;
 
  border-style: 2px solid;
  border-radius: 2px;
  margin-bottom: 10px;
  border-color:gray;
  }
.card-title
{
  background-color:black;
  color:white;
  
  text-align:center;
  font-size:19px;
  font-weight:bold;
  padding: 5px 5px;
 
  border-style: 2px solid;
  border-radius: 2px;
  margin-bottom: 5px;
  border-color:gray;
}
</style>

</head>

<body>
<?php
include("./includes/header.php");
?>

<div class="masthead1">  
       <strong><h1  style="color:white">Famous Artist </h1></strong>                      
    
</div><!-- .masthead -->

<!--Class details-->

<div class="card-deck">
  <div class="card" >
  <h4 class="card-title" style="color:white" > Winslow Homer</h4>
        <img class="card-img-top" src="image/mywork/winslow2.jpg" style="height:450px"  alt="Card image cap">        
        <div class="card-body">      
          <div class="card-footer">
          <a href="./painting/wilslowmy.php" > DETAILS </a>
          </div>
      </div>
</div>

  <div class="card">
  <h4 class="card-title" style="color:white" > Romero Britto</h4>
        <img class="card-img-top" src="image/mywork/romero.jpg"  style="height:450px"  alt="Card image cap">
        <div class="card-body">
       
          <div class="card-footer">
          <a href="./painting/romero.php" > DETAILS </a>
          </div>
      </div></div>

  


  <div class="card" >
  <h4 class="card-title" style="color:white">  O'Koffee</h4>
        <img class="card-img-top" src="image/mywork/okof.jpg" style="height:450px"  alt="Card image cap">
        <div class="card-body">
        
          
          <div class="card-footer">
          <a href="./painting/okof.php" > DETAILS </a>
          </div>
      </div>
</div></div>            

<div class="card-deck">

  <div class="card">
  <h4 class="card-title" style="color:white">  VanGogh </h4>
        <img class="card-img-top" src="image/mywork/vangogh.jpg" style="height:450px"  alt="Card image cap">
        <div class="card-body">
               
          <div class="card-footer">
          <a href="./painting/vangoghmy.php" > DETAILS </a>
          </div>
      </div>
</div>          

           


  <div class="card">
  <h4 class="card-title" style="color:white">  Monet </h4>
        <img class="card-img-top" src="image/mywork/monet.jpg" style="height:450px" alt="Card image cap">
        <div class="card-body">
         <div class="card-footer">
          <a href="./painting/monet.php" > DETAILS </a>
          </div>
      </div>
</div>           



  <div class="card">
  <h4 class="card-title" style="color:white"> Picasso </h4>
        <img class="card-img-top" src="image/mywork/picasso1.jpg" style="height:450px"  alt="Card image cap">
        <div class="card-body">
         
          
          <div class="card-footer">
          <a href="./painting/picasso.php" > DETAILS </a>
          </div>
      </div>
</div>
</div>
  <?php
 include("./includes/footer.php");
  ?>

<script>
    function openModal(){
      document.getElementById('myModal').style.display = "block";
    }
    function closeModal(){
      document.getElementById('myModal').style.display = "none";
    }
   var slideIndex=1;
   showSlides(slideIndex);

   function plusSlides(n){
     showSlides(slideIndex+=n);
   }
   function currentSlide(n){
     showSlides(slideIndex=n);
   }
   function plusSlides(n){
     showSlides(slideIndex+=n);
   }  
   function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
  </script>
  
  </body>
</html>
