
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css" media="screen" /> 
  <meta name=keywords content="SmartRArts Paintings Art childrens art class art workshop Indian Japanese Mexican Gond Aboriginal Madhubani Art Masters Painting around world Painting kids classes  " />
    <meta name=description SmartRArts />
    <title>Smart"R"Arts : Kids Art classes- Students Gallery Page</title>
    <style>
      * {
        box-sizing: border-box;      
      }
      
      .flex-container {
        display: flex;    
        background-image:url("image2/backg2.jpg");
        background-repeat: no-repeat, repeat;
        background-size: cover; 
      }
      .flex-container > div {
        margin: 1px;
        padding: 10px;
        padding-bottom:30px;
        font-size: 18px;     
      }
      /* The expanding image container */
      .container {
        position: relative;
        display: none;
      }

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}
.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
/* Modal Content (image) */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 700px;
}
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {

}
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}


      /* Expanding image text */
      #imgtext {
        position: absolute;
        bottom: 15px;
        left: 15px;
        color: white;
        font-size: 20px;
      }

      /* Closable button inside the expanded image */
      .close cursor {
        position: absolute;
        top: 10px;
        right: 35px;
        color: white;
        font-size: 35px;
        cursor: pointer;
      }

    .close:hover,
    .close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}
.mySlides {
  display: none;
}  

/* Card Based Layout - Base styles */

body {
  margin: auto;
  width:100%;
  color:black;
 
}

body,
button,
input,
select,
textarea {
	color: black;
	font-family: 'Comfortaa', Arial, sans-serif;
  font-size: 20px;
	line-height: 1.5;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	clear: both;
  font-family: 'Patua One', sans-serif;
  letter-spacing: 2px;
}

h2 {
  font-size: 1rem;
  color: #007489;
  text-indent: 1em;
  font-weight:bold;
}

p {
	margin-bottom: 1.5em;
  color: #898989;
  font-size:20px;
}

.masthead p, .masthead p a {
  color: white;
}

.site-title {
  color: white;
  text-align:center;
}

.card img {
	display: block;
	border: 0;
	width: 100%;
	height: 280px;
}
.div-text{
  font-family:cursive;
  font-weight:bold;
  color:brown;
  
}
.card {
	background: white;
  margin-bottom: 7em;	
  float:left;
  height:100%;
  width:100%;
  border:black;
}

.card a {
	color: black;
	text-decoration: none;
}

.card a:hover {
	box-shadow: 3px 3px 8px hsl(0, 0%, 80%);
}

.card-content {
  padding: 0.9em;
  height:100%;
  width:100%;
}

.main-area{
  
  width:100%;
  
  margin-bottom: 0px;
  }

.card-content h2 {
	margin-top: 0;
	margin-bottom: .5em;
	font-weight: bold;
}

.card-content p {
  font-size: 20px;
  height:100%;
}
.bg-image {
  /* The image used */
  background-image: url("image/back3.jpg");
  /* Full height */
  height: 100px; 
  width:100%;
    /* Center and scal2e the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  /*background-color: rgb(0,0,0);  Fallback color */
  /*background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  /*border: 3px solid #f1f1f1;*/
  position: relative;
  top: 81%;
  left: 16%;
  transform: translate(-50%, -50%);
  text-indent: 1em;
  width: 55%;
  padding: 0px;
  text-align: center;
}

/* Flexbox stuff */

@media screen and (min-width: 40em) {
    .cards {
        display:flex;
        flex-wrap:wrap;
        justify-content: space-between;
        margin-top: -1em;
    }

    .card {
        display: flex;
        flex: 0 1 calc(50% - .5em);
        margin-bottom: 1em;
    }
}

@media screen and (min-width: 60em) {
    .cards {
        margin-top: 0px;
        margin-left: 2em;
        margin-right: 2em;
    }
    
    .card {
        flex: 0 1 calc(25% - 1em);
        margin-bottom: 2em;
        float:left;
    }
}

.centered {
    margin: 0 auto;
    padding: 0 1em;
}

@media screen and (min-width: 52em) {
    .centered {
        max-width: 52em;
    }
}
.section-title {
  font-size: 32px;
  color:black;
  font-family: 'Roboto Condensed', sans-serif;
  text-transform: uppercase;
  text-align: center;
  font-weight: 700;
   padding-top:10;
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
</style>
</head>


<body>
<?php include("./includes/header.php") ?>
<body>
<!--Header Image-->

 

<h2 class="section-title" >Students Artworks</h2><br>
    <div class="section-title-divider"></div><br><br>  
</div> 

     
<section class="cards"> 
        <article class="card">                                   
                      <div class="card-content" style=" font-size: 20px">
                        <img  src="./image/stud/fl4.jpg"  alt="painting Class">
                        <br>
                        <div class="card-footer">
                          
                            <a href="./smarts/flowerst1.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black"> Flowers with water colors</button> </a>
                        </div>
                        </div><!-- .card-content -->                 
                </article><!-- .card -->
           
            <article class="card">                                 
                    <div class="card-content" style=" font-size: 20px">
                        <img  src="image/stud/el1.jpg"  alt="Painting Class">   <br>
                        <div class="card-footer">
                                  <a href="./smarts/elephantst.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black"> Elephant drawing</button></a>
                      </div><!-- .card-content -->    </div>                         
                  </article><!-- .card --> 
                  <article class="card">                                   
                      <div class="card-content" style=" font-size: 20px">
                        <img  src="image/stud/pa01.jpg"  alt="painting Class">   <br>
                        <div class="card-footer">
                            <a href="./smarts/peacockst.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black"> Peacock drawing </button> </a>
                        </div><!-- .card-content -->  </div>
                        </article><!-- .card -->                 
          
           
</section>

<div class="div-text"  >
<strong><h2>   Culture Based</h2></strong>
</div>      
<section class="cards"> 

                <article class="card">                                   
                      <div class="card-content" style=" font-size: 20px">
                        <img  src="image/stud/st3.jpg"  alt="Drawing Class">   <br>
                        <div class="card-footer">
                            <a href="./smarts/madhust.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black"> Madhubani Indian painting</button></a></div>
                        </div><!-- .card-content -->                   
                </article><!-- .card -->

                <article class="card">                                 
                    <div class="card-content" style=" font-size: 20px">
                        <img  src="image/stud/ma.jpg"  alt="Painting Class">   <br>
                        <div class="card-footer">
                                  <a href="./smarts/africanst.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black"> African Massai  </button></a>
                      </div><!-- .card-content Madhyubani--></div>                             
                  </article>                    
                  <article class="card">                                   
                      <div class="card-content" style=" font-size: 20px">
                        <img  src="image/stud/mex8.jpg"  alt="Drawing Class">   <br>
                        <div class="card-footer">
                            <a href="./smarts/amatast.html"class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black"> Mexican Amate bark  </button></a>
                        </div><!-- .card-content -->  </div>                 
                </article><!-- .card -->
                                          
                    
                <article class="card">                                 
                    <div class="card-content" style=" font-size: 20px">
                        <img  src="image/stud/eg6.jpg"  alt="Painting Class">   <br>
                        <div class="card-footer">
                                  <a href="./smarts/egyptst.html"class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black">Egypt King TUT drawing </button></a>
                      </div><!-- .card-content --> </div>                            
                  </article><!-- .card -->      
                  <article class="card">                                   
                      <div class="card-content" style=" font-size: 20px">
                      
                        <img  src="image/stud/sy5.jpg"  alt="painting Class">   <br>
                        <div class="card-footer">
                            <a href="./smarts/syd.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black">Sydney opera house </button></a>
                        </div><!-- .card-content --> </div>                
                </article><!-- .card -->
                
                                    
                    <article class="card">                                   
                      <div class="card-content" style=" font-size: 20px">
                        <img  src="image/stud/koi1.jpg"  alt="painting Class">   <br>
                        <div class="card-footer">
                            <a href="./smarts/koist.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black"> Koi fish drawing </button></a>
                        </div><!-- .card-content --></div>                 
                </article><!-- .card -->                                
</section>

<div class="div-text" >
<h2>    Art Masters</h2>
</div>      
<section class="cards">             
                  <article class="card">                                   
                      <div class="card-content" style=" font-size: 20px">
                        <img  src="image/stud/win.jpg"  alt="painting Class">   <br>
                        <div class="card-footer">
                            <a href="./smarts/wilsonst.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black"> Wilson Homer  </button></a>
                        </div><!-- .card-content -->  </div>               
                </article><!-- .card -->
                </article><!-- .card -->                      
                    <article class="card">                                   
                      <div class="card-content" style=" font-size: 20px">
                        <img  src="image/stud/ro4.jpg"  alt="painting Class">   <br>
                        <div class="card-footer">
                            <a href="./smarts/romerost.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black"> Romero Britto </button> </a>
                        </div><!-- .card-content -->     </div>            
                </article><!-- .card -->
                <article class="card">                                 
                    <div class="card-content" style=" font-size: 20px">
                        <img  src="image/stud/oko1.jpg"  alt="Painting Class">   <br>
                        <div class="card-footer">
                          <a href="./smarts/Okoffeest.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black"> O'Koffee Flower </button></a>
                      </div><!-- .card-content -->   </div>                          
                  </article><!-- .card -->  
                            
</section>
<div class="div-text" >
  <h2>    Mediums</h2>
</div>             
<section class="cards">            
 
                <article class="card">                                 
                    <div class="card-content" style=" font-size: 20px">
                        <img  src="image/stud/wa4.jpg"  alt="Painting Class">   <br>
                        <div class="card-footer">
                                  <a href="./smarts/landscapest.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black">Watercolor Lanscape </button> </a>
                      </div><!-- .card-content -->   </div>                          
                  </article><!-- .card -->
                  <article class="card">                                 
                    <div class="card-content" style=" font-size: 20px">   <br>
                        <img  src="image/stud/acr3.jpg"  alt="Painting Class">
                        <div class="card-footer">
                                  <a href="./smarts/acrylicst.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black">Acrylic painting </button></a>
                      </div><!-- .card-content -->  </div>                           
                  </article><!-- .card -->
                <article class="card">                                   
                      <div class="card-content" style=" font-size: 20px">   <br>
                        <img  src="image/stud/pas6.jpg"  alt="painting Class">
                        <div class="card-footer">
                            <a href="./smarts/stlillst.html" class="boxed-btn1-white-1"><button class="btn btn-info" style="padding:5px;color:black"> Pastel Still life </button> </a>
                        </div><!-- .card-content -->  </div>               
                </article><!-- .card -->
   </section>

 
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
