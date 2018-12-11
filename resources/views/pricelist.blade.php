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

	<section id="pricePlans" >
		<ul id="plans" >
			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Wedding</h2></li>
					<li class="price"><p>$1500</p></li>
					<li>
						<ul class="options">
							<li>1x <span>Installation</span></li>
							<li>Odoo <span>documentation</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>1x <span>option 5</span></li>
						</ul>
					</li>
					<li class="button"><a href="#">ORDER NOW</a></li>
				</ul>

			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2 class="bestPlanTitle">Bundle 2</h2></li>
					<li class="price"><p class="bestPlanPrice">$3000</p></li>
					<li>
						<ul class="options">
							<li>2x <span>option 1</span></li>
							<li>Free <span>option 2</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>2x <span>option 5</span></li>
						</ul>
					</li>
					<li class="button"><a class="bestPlanButton" href="#">ORDER NOW</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Bundle 3</h2></li>
					<li class="price"><p>$4500</p></li>
					<li>
						<ul class="options">
							<li>2x <span>option 1</span></li>
							<li>Free <span>option 2</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>3x <span>option 5</span></li>
						</ul>
					</li>
					<li class="button"><a href="#">ORDER NOW</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Bundle 4</h2></li>
					<li class="price"><p>$10'000</p></li>
					<li>
						<ul class="options">
							<li>2x <span>option 1</span></li>
							<li>Free <span>option 2</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>5x <span>option 5</span></li>
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
