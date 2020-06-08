<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified Bootstrap CSS -->
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
		<!-- Style Css-->
		<link rel="stylesheet" href="style.css">
		
	
		<!-- bxSlider Javascript file -->

<!-- bxSlider CSS file -->
<link href="jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
		
		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="jquery.bxslider/jquery.bxslider.min.js"></script>
		<script src="./bootstrap/js/bootstrap.min.js"></script>
	</head>
<body>
		<!-- HEADER START-->
	<div class="col-md-12 bg_img">
			<!--<img src="images/sky_bg.jpg">-->
		<div class="container">
			<div class="col-md-4 logo">
				<img src="images/CHURCH.png" class="img-responsive">
			</div>
			<div class="col-md-8 top_menu">
				<div class=" menu_links ">
					<nav class="navbar navbar-default">
						<div class=" menu_links">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed no_padding" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- links Start-->
							<div class=".bottom_menu navbar-collapse no_padding" id="bs-example-navbar-collapse-1">
								<ul class="nav links navbar-nav">

									<li><a href="#" class="active">Home</a></li>
									<li><a href="about_us.php">About us </a></li>
									<li><a href="contact_us.php">Contact us</a></li>
									<li><a href="register.php">Register</a></li>
									<li><a href="login.php">Login</a></li>




								</ul>
							</div>
						</div>
					</nav>

				</div>
			</div>
	    </div>
	</div>
		<!-- HEADER END-->


		<!--SLIDER START-->
			<div class="container">
                <div class="col-md-12 no-padding col-sm-12 slider">

                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">

                          <ol class="carousel-indicators2">
                                   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                                   <li data-target="#myCarousel" data-slide-to="2"></li>
                                   <li data-target="#myCarousel" data-slide-to="3"></li>
                          </ol>

                        <!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/Rectangle-4.jpg"  alt="Chania">
                </div>

                <div class="item">
                    <img src="images/Rectangle-4.jpg"  alt="Flower">
                </div>

                <div class="item">
                    <img src="images/Rectangle-4.jpg"  alt="Flower">
                </div>

                <div class="item">
                    <img src="images/Rectangle-4.jpg"  alt="Flower">
                </div>





            <!--	<a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>-->


		<!--</div>
        <div id="clear"></div>
    </div>


</div>
</div>
		<!--SLIDER END-->


		<!-- CONTENT START-->
    <div class="container">
		<div class="text_submit">
			<form>
				<input  type="text" class="text" value="SEARCH..."
					   onBlur="if(this.value=='')this.value='SEARCH...'"
					   onFocus="if(this.value=='SEARCH...')this.value=''" />
				<button type="button" class="plus">+</button>
				<button type="button" class="submit"><i class="fa fa-search"></i></button>
			</form>
	    </div>
	</div>

		<!-- CONTENT END-->

		<!-- CONTENT START-->

     <div class="container no-padding">
		 <div class="col-md-12 no-padding">

				<div class="col-md-4 col-sm-4 contents_divs ">
					 <div class="content">
						 <p>Content</p>
					 </div>
					 <div class="images">
						 <img src="images/e.jpg" class="img-responsive">
					 </div>

					<div class="icon-img">
						<img src="images/Shape-2-copy-2.png" class="img-responsive">
					</div>

					<div class="contents_divs_text">
						<p>Curabitur metus nunc</p>
					</div>

					<div class="content_text">
						<p>In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself")
							is a filler text
							commonly used to demonstrate the graphic elements of a document or visual presentation. </p>
					</div>
					<button type="button" class="read_more">Read more</button>
				</div>




				 <div class="col-md-4 col-sm-4 contents_divs">
					 <div class="content">
						 <p>More Content</p>
					 </div>
					 <div class="images">
						 <img src="images/e0a70f72bdae9885bfc32d7cd19a26a1_M.jpg" class="img-responsive">
					 </div>
					 <div class="icon-img">
						 <img src="images/Shape-2-copy-2.png" class="img-responsive">
					 </div>

					 <div class="contents_divs_text">
						 <p>Prion depibus cursus odio</p>
					 </div>

					 <div class="content_text">
						 <p>In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself")
							 is a filler text
							 commonly used to demonstrate the graphic elements of a document or visual presentation. </p>
					 </div>
					 <button type="button" class="read_more">Read more</button>
				 </div>



			 <div class="col-md-4 col-sm-4 contents_divs ">
				 <div class="content">
					 <p>Yet More Content</p>
				 </div>
				 <div class="images">
					 <img src="images/e0.jpg" class="img-responsive">
				 </div>
				 <div class="icon-img">
					 <img src="images/Shape-2-copy-2.png" class="img-responsive">
				 </div>

				 <div class="contents_divs_text">
					 <p>Vivamus faucibus semper</p>
				 </div>

				 <div class="content_text">
					 <p>In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself")
						 is a filler text
						 commonly used to demonstrate the graphic elements of a document or visual presentation. </p>
				 </div>
				 <button type="button" class="read_more">Read more</button>
			 </div>

		 </div>
	 </div>

		<div class="container no-padding">
			<div class="bg_img2">
				<img src="images/blockquote.png">
					<div class="txt">
						<p>In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself")
							is a filler text
							commonly used to demonstrate the graphic elements of a document or visual presentation. </p>
					</div>
				<div class="img2">
					<img src="images/home_church_book.png" class="img-responsive">
				</img>
			</div>
		</div>

			<!--<div class="container no-padding">
				<div class="col-md-12 bg_img3">
					<div class="col-md-6 about_div">
						<h1>About our church</h1>
						<p>In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated
							as "pain itself")
							is a filler text commonly used to demonstrate the graphic elements of a document or visual
							presentation.
							Replacing meaningful content with placeholder text allows viewers to focus on graphic
							aspects such as font,
							typography, and page layout without being distracted by the content. It also reduces the
							need for the
							designer to come up with meaningful text, as they can instead use quickly-generated lorem
							ipsum.</p>
					</div>
					<div class="col-md-4 img3">
						<img src="images/holy_bible.png" class="img-responsive">
					</div>
				</div>

			</div>-->
			<!-- CONTENT END-->

			<!--FOOTER START-->

				<div class="col-md-12 footer_div">
					<div class="col-md-8 top_menu">
						<div class=" menu_links ">
							<!--<nav class="navbar navbar-default">
								<div class=" menu_links">
									<!-- Brand and toggle get grouped for better mobile display -->
									<!--<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed no_padding" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<!-- links Start-->
									<!--<div class=".bottom_menu navbar-collapse no_padding" id="bs-example-navbar-collapse-1">-->
										<ul class="nav links navbar-nav">

											<li><a href="#" class="active">Home</a></li>
											<li><a href="about_us.php">About us </a></li>
											<li><a href="contact_us.php">Contact us</a></li>
											<li><a href="#">Register</a></li>
											<li><a href="#">Login</a></li>




										</ul>


						</div>
					</div>

				</div>



			<!--FOOTER END-->




</body>


</html>