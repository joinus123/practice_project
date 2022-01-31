<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Helping Hand Adapt</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="assets/images/fav-icon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/aos.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/stellarnav.min.css" />
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="assets/css/calendar-style.css" />
	<link rel="stylesheet" href="assets/css/calendar-theme.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/responsive.css" />
</head>
<body>
	<header>
		<div class="header-top">
			<div class="container">
				<div class="logo-box">
					<a href="index.php">
						<img src="assets/images/header-logo.png" alt="img" class="img-fluid">
					</a>
				</div>
				<div class="top-row">
					<ul class="list-unstyled">
						<li>
							<a href="#!">
								<span><i class="fas fa-phone-alt"></i></span>
								+ (123) 123 1234
							</a>
						</li>
						<li>
							<a href="#!">
								<span><i class="fas fa-envelope"></i></span>
								info@helpinghand.com
							</a>
						</li>
						<li>
							<a href="#!">
								<span><i class="fas fa-map-marker-alt"></i></span>
								Lorem Ispum, US, Street
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- RESPONSIVE NAVIGATION -->
		<div class="header-bottom">
			<div class="container">
				<div class="navigation-wrap">
					<div id="main-nav" class="stellarnav custom-nav">
						<ul>
							<li><a href="{{url('/')}}" class="active"><span>Home</span></a></li>
							<li><a href="{{route('aboutus-page')}}">About Us</a></li>
							<li><a href="{{route('service-page')}}">Services</a></li>
							<li><a href="{{route('events-page')}}">Events</a></li>
							<li><a href="{{route('get-involved-page')}}">Get Involved</a></li>
							<li><a href="{{route('monthly-giving-page')}}">Monthly Giving</a></li>
							<li><a href="{{route('contact-us-page')}}">Contact Us</a></li>
							<li><a href="javascript:void(0)" id="donate" class="donate-btn green-btn">Donate</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- RESPONSIVE NAVIGATION -->
	</header>


    <div>
        @yield('main_content')
    </div>

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="footer-row">
                    <div class="footer-col-1">
                        <div class="logo-box">
                            <a href="index.php">
                                <img src="assets/images/header-logo.png" alt="img" class="img-fluid">
                            </a>
                        </div>
                        <p class="tagline">Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do.</p>
                    </div>
                    <div class="footer-col-2">
                        <h1 class="heading">Explore</h1>
                        <ul class="list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="donor.php">Donor</a></li>
                            <li><a href="support.php">Support</a></li>
                            <li><a href="donate.php">Start Donating</a></li>
                        </ul>
                    </div>
                    <div class="footer-col-3">
                        <h1 class="heading">Contact Us</h1>
                        <ul class="list-unstyled">
                            <li><a href="#!"><i class="fas fa-phone-alt"></i> (123) 123 1234</a></li>
                            <li><a href="#!"><i class="fas fa-envelope"></i> info@helpinghand.com</a></li>
                            <li><a href="#!"><i class="fas fa-map-marker-alt"></i> Lorem Ispum, Dummy, US, Street no : 12345</a></li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h1 class="heading">News Letter</h1>
                        <ul class="list-unstyled">
                            <li><p>Keep up with our latest news Subscribe to our newsletter</p></li>
                            <li>
                                <form>
                                    <input type="email" name="" placeholder="Email Address">
                                    <a href="#!" class="send-btn"><i class="far fa-paper-plane"></i></a>
                                </form>
                            </li>
                            <li class="social-icon">
                                <a href="#!" class="social-item"><i class="fab fa-facebook-f"></i></a>
                                <a href="#!" class="social-item"><i class="fab fa-instagram"></i></a>
                                <a href="#!" class="social-item"><i class="fab fa-twitter"></i></a>
                                <a href="#!" class="social-item"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-buttom">
            <p class="tagline">Copyright © 2021. Helping Hand Adapt. All Right Reserved.</p>
        </div>
    </footer>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/stellarnav.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/calendar.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>

    $(".appendVal").click(function(){
        var store = $(this).val();
        // alert(store);
        var inputval = $("#give-amount").val(store);
    });


    </script>

    <script>
      AOS.init({
          disable: 'tablet'
      });
    </script>

    @yield('script')



    </body>
    </html>

