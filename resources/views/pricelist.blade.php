@include('layouts.head')
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--[if lt IE 9]>
	<script src="dist/html5shiv.js"></script>
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Odoo Responsive Price Table</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/pricelist.css">


</head>
<body>
	<div class="row mb-5 justify-content-center">
        <div class="col-12 text-center">
		<br>
        	<h2 class="font-weight-light text-black display-4">Pricelist</h2>
        </div>
    </div>

	<section id="pricePlans">
		<br>
		<ul id="plans"  >
			<li class="plan" >
				<ul class="planContainer">
					<li class="title"><h2>Silver Wedding</h2></li>
					<li class="price"><p>IDR 4000K</p></li>
					<li>
						<ul class="options">
							<li>2x <span>Photographers</span></li>
							<li>1x <span>Cinematic Videographer</span></li>
							<li>8x Hours <span>Duration</span></li>
							<li>Long<span> HD Video</span></li>
							<li>Wedding<span> Album 20x30 cm</span></li>
							<li>Frame<span> Canvas 40x60 cm</span></li>
							<li>All Files <span> in Flashdrive</span></li>
							<li><strong>FREE <span>Social Media Cinematic Video</span></strong></li>
							<li><strong>FREE <span>15 Edited Photos</span></strong></li>
						</ul>
					</li>
					<li class="button"><a href="#">BOOK NOW</a></li>
				</ul>

			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2 class="bestPlanTitle">Gold Wedding</h2></li>
					<li class="price"><p class="bestPlanPrice">IDR 7000K</p></li>
					<li>
						<ul class="options">
							<li>2x <span>Photographers</span></li>
							<li>2x <span>Cinematic Videographer</span></li>
							<li>8 Hours <span>Duration</span></li>
							<li>Long<span> HD Video</span></li>
							<li>2x <span>Wedding Album 20x30 cm</span></li>
							<li>2x <span>Frame Canvas 40x60 cm</span></li>
							<li>All Files <span> in Flashdrive</span></li>
							<li><strong>FREE <span>Social Media Cinematic Video</span></strong></li>
							<li><strong>FREE <span>30 Edited Photos</span></strong></li>
						</ul>
					</li>
					<li class="button"><a class="bestPlanButton" href="#">ORDER NOW</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Silver Engagement</h2></li>
					<li class="price"><p>IDR 2000K</p></li>
					<li>
						<ul class="options">
							<li>1x <span>Photographer</span></li>
							<li>1x <span>Cinematic Videographer</span></li>
							<li>4 Hours <span>Duration</span></li>
							<li>All Files <span> in Flashdrive and Cloud</span></li>
							<li><strong>FREE <span>Social Media Cinematic Video</span></strong></li>
							<li><strong>FREE <span>15 Edited Photos</span></strong></li>
						</ul>
					</li>
					<li class="button"><a href="#">BOOK NOW</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Gold Engagement</h2></li>
					<li class="price"><p>IDR 3500K</p></li>
					<li>
						<ul class="options">
							<li>1x <span>Photographer</span></li>
							<li>1x <span>Cinematic Videographer</span></li>
							<li>1x <span>XD Camera Videographer</span></li>
							<li>4 Hours <span>Duration</span></li>
							<li>Full Event <span>Video</span></li>
							<li>All Files <span> in Flashdrive and Cloud</span></li>
							<li><strong>FREE <span>Social Media Cinematic Video</span></strong></li>
							<li><strong>FREE <span>30 Edited Photos</span></strong></li>
						</ul>
					</li>
					<li class="button"><a href="#">ORDER NOW</a></li>
				</ul>
			</li>
		</ul> <!-- End ul#plans -->
	</section>

	<div class="row mb-5 justify-content-center">
        <div class="col-12 text-center">
          <br><br><br>
          <a href='{{url("/download")}}' class="btn btn-danger btn-fill py-2 px-3 rounded-10" ><i class="fa fa-download"></i>Download as Pdf</a>
        </div>
      </div>
@include('layouts.footer')
</body>
</html>
