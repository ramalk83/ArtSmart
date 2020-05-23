
<head>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

<style type="text/css">



.carousel .item {
	color: #999;
	overflow: hidden;
    min-height: 120px;
	font-size: 19px;
}
.carousel .media {
	position: relative;
	padding: 0 0 0 20px;
	margin-left: 20px;
}
.carousel .media img {
	width: 75px;
	height: 75px;
	display: block;
	border-radius: 50%;
	box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    border: 2px solid #fff;
}
.carousel .testimonial {
    color: #fff;
    position: relative;    
	background:rgba(0, 0, 0, 0.8);
	padding: 40px;
	margin: 0 0 20px 20px;
}
.carousel .testimonial::before, .carousel .testimonial::after {
	content: "";
	display: inline-block;
	position: absolute;
	left: 0;
	bottom: -20px;
}
.carousel .testimonial::before {
    width: 20px;
    height: 20px;
	background: #9b9b9b;
	box-shadow: inset 12px 0 13px rgba(0,0,0,0.5);
}
.carousel .testimonial::after {
    width: 0;
    height: 0;
    border: 10px solid transparent;
    border-bottom-color: #fff;
    border-left-color: #fff;
}
.carousel .item .row > div:first-child .testimonial {
	margin: 0 20px 20px 0;
}
.carousel .item .row > div:first-child .media {
	margin-left: 0;
}
.carousel .testimonial p {
	text-indent: 40px;
    line-height: 21px;
	margin: 0;
}
.carousel .testimonial p::before {
	content: '\94';
    color: #fff;
    font-weight: bold;
    font-size: 68px;
    line-height: 70px;
    position: absolute;
    left: -25px;
    top: 0;
}
.carousel .overview {
	padding: 3px 0 0 15px;
}
.carousel .overview .details {
	padding: 5px 0 8px;
	color:black;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #ff5555;
}
.carousel .carousel-control {
	width: 30px;
	height: 30px;
    background: #666;
    text-shadow: none;
	top: 4px;
}
.carousel-control i {
	font-size: 16px;
}
.carousel-control.left {
	left: auto;
	right: 40px;
}
.carousel-control.right {
	left: auto;
}


.star-rating li {
	padding: 0 2px;
}
.star-rating i {
	font-size: 14px;
	color: orange;
}
</style>
</head>
<body>
<div class="container-fluid" style=" background-color:rgb(236, 229, 234);">
	<div class="row">
		<div class="col-sm-12">			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
            <h3 class="section-title" style="padding-top:27px">Reviews</h3>
                          <div class="section-title-divider"></div><br><br>
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner" style="font-family: 'PT Sans Narrow'">
					<div class="item carousel-item active">
						<div class="row">
							<div class="col-sm-6">
								<div class="testimonial">
									<p>My son loves this class. He looks forward to it every week. Extracurricular activities aren't just for the big kids. Thank you for enhancing our child's education.</p>
								</div>
								<div class="media">
									<div class="media-left d-flex mr-3">
										<img src="./image/stud/oko2.jpg" alt="">										
									</div>
									<div class="media-body">
										<div class="overview">
											<div class="name"><b>Prema Anand</b></div>
											<div class="details">Parent</div>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>										
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="testimonial">
									<p>SMART"r"ARTS has improved my son's drawing ability and has renewed his love for art. We are so happy. Thanks for helping my child.</p>
								</div>
								<div class="media">
									<div class="media-left d-flex mr-3">
										<img src="./image/stud/pa2.jpg" alt="">
									</div>
									<div class="media-body">
										<div class="overview">
											<div class="name"><b>Antonio Moreno</b></div>
											<div class="details">Parent</div>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>			
					</div>
					<div class="item carousel-item">
						<div class="row">
							<div class="col-sm-6">
								<div class="testimonial">
									<p>Every time my daughter went home with her drawings i was really amazed on her creations! Thanks for introducing to her the techniques and styles of art!</p>
								</div>
								<div class="media">
									<div class="media-left d-flex mr-3">
										<img src="./image/stud/ma2.jpg" alt="">										
									</div>
									<div class="media-body">
										<div class="overview">
											<div class="name"><b>Michael Holz</b></div>
											<div class="details">Parent</div>											
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>										
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="testimonial">
									<p>We love the classes! My kids enjoy the time and have improved their art skills significantly since beginning the sessions. We tell everyone we know about these classes!”</p>
								</div>
								<div class="media">
									<div class="media-left d-flex mr-3">
										<img src="./image/stud/fl2.jpg" alt="">										
									</div>
									<div class="media-body">
										<div class="overview">
											<div class="name"><b>Venna Kumar</b></div>
											<div class="details">Parent</div>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>			
					</div>
					<div class="item carousel-item">
						<div class="row">
							<div class="col-sm-6">
								<div class="testimonial">
									<p>My kids have been in the program for a few years and LOVE IT!! Helps concentration & imagination.</p>
								</div>
								<div class="media">
									<div class="media-left d-flex mr-3">
										<img src="./image/stud/ro2.jpg" alt="">										
									</div>
									<div class="media-body">
										<div class="overview">
											<div class="name"><b>Martin Sommer</b></div>
											<div class="details">Parent</div>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>										
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="testimonial">
									<p>This class is so wonderful. My 8year old daughter has drawn some amazing things.</p>
								</div>
								<div class="media">
									<div class="media-left d-flex mr-3">
										<img src="./image/stud/el2.jpg" alt="">										
									</div>
									<div class="media-body">
										<div class="overview">
											<div class="name"><b>John Williams</b></div>
											<div class="details">Parent</div>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-chevron-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-chevron-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>
</body>
                               		                            