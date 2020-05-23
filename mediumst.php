

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart"R"Arts Painting types</title>
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
    margin-top:1px;
    height:70px;   
    background-color: black;
    background-size:cover;
    text-align:center;
    color:white;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif ;
    font-size:22px;
    color:white;
    float:center;
  }

  .card-footer  {
  background-color:lightgray;
  color:black;
  
  text-align:center;
  font-size:15px;
  font-weight:bold;
  padding: 15px 15px;
 
  border-style: 2px solid;
  border-radius: 2px;
  margin-bottom: 5px;
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
 width:150px;
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
 
       <strong><h1  style="color:white">Different Mediums </h1></strong>         
               
    
</div><!-- .masthead -->

<!--Class details-->
<div class="container">
<div class="card-deck">
  <div class="card" >
  
        <img class="card-img-top" src="image/gallery2.jpg" style="height:450px"  alt="Card image cap">
        
        <div class="card-body">
          
          
          <div class="card-footer">
          <a style="color:white"class="card-title" href="./painting/watermy.php" > Watercolor Paintings</a>
          </div>
      </div>
</div>

  <div class="card" >
 
        <img class="card-img-top" src="image/oilflex2.jpg"  style="height:450px"  alt="Card image cap">
        <div class="card-body">
       
          <div class="card-footer">
          <a style="color:white" class="card-title" href="./painting/acrylicmy.php" > Acrylic painting </a>
          </div>
      </div></div>

  


  <div class="card" >
 
        <img class="card-img-top" src="image/oilflex1.jpg" style="height:450px"  alt="Card image cap">
        <div class="card-body">
        
          
          <div class="card-footer">
          <a style="color:white" class="card-title" href="./painting/oilpaint.php" > Oil paintings </a>
          </div>
      </div>
</div></div>            

<div class="card-deck">

  <div class="card" >

        <img class="card-img-top" src="image/pastelback.jpg" style="height:450px"  alt="Card image cap">
        <div class="card-body">
               
          <div class="card-footer">
          <a style="color:white" class="card-title" href="./painting/pastelmy.php" > Pastel works </a>
          </div>
      </div>
</div>          

           


  <div class="card" >

        <img class="card-img-top" src="image/pencilback.jpg" style="height:450px" alt="Card image cap">
        <div class="card-body">
         <div class="card-footer">
          <a style="color:white" class="card-title" href="./painting/pencildrawingst.php" > Pencil & Charcoal Drawings</a>
          </div>
      </div>
</div>           
</div></div>
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
