@extends('frontend.layout')

@section('main_content')


<section class="index-banner contact-banner inner-banner">
	<div class="container">
		<div class="text-box" data-aos="zoom-in" data-aos-duration="1300">
			<h1 class="heading">Contact Us</h1>
		</div>
	</div>
	<div class="index-abs-wrap" data-aos="zoom-in" data-aos-duration="1200">
		<div class="abs-img-1 abs-img">
			<img src="assets/images/index-banner-abs-1.png" alt="img" class="img-fluid">
		</div>
		<div class="abs-img-2 abs-img">
			<img src="assets/images/index-banner-abs-2.png" alt="img" class="img-fluid">
		</div>
	</div>
</section>

<section class="index-sec-4 contact-sec-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 col-12 order-lg-1 order-md-2 order-2">
				<div class="content-box"  data-aos="fade-right" data-aos-duration="1000">
					<div class="text-box">
						<h1 class="heading">Contact Us</h1>
						<h1 class="sub-heading">Give a Helping Hand for a Needy People.</h1>
						<p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
					</div>
					<div class="text-box-2">
						<p class="call-icon"><i class="fas fa-phone-alt"></i></p>
						<p class="tagline">
							Have any question about donation?
							<span>Call us now : <span class="number">(123) 123 1234</span></span>
						</p>
					</div>
					<div class="text-box-2">
						<p class="call-icon"><i class="fas fa-envelope"></i></p>
						<p class="tagline">
							Have any question about donation?
							<span>Emial us now : <a href="#!" class="number">info@helpinghand.com</a></span>
						</p>
					</div>
					<div class="text-box-2 address-box">
						<p class="call-icon"><i class="fas fa-map-marker-alt"></i></p>
						<p class="tagline">
							Address : US, New York.
							<span>Lorem Ispum, Dummy, US, New York,  Street no : 12345</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-12 col-12 order-lg-2 order-md-1 order-1">
				<div class="contact-form" data-aos="fade-left" data-aos-duration="1000">
					<h1 class="heading">Get in touch</h1>
					<form>
						<div class="form-group">
							<input type="name" name="" placeholder="Name*" required>
						</div>
						<div class="form-group">
							<input type="email" name="" placeholder="Email*" required>
						</div>
						<div class="form-group">
							<input type="tel" name="" placeholder="Phone Number*" required>
						</div>
						<div class="form-group">
							<textarea>Message</textarea>
						</div>
						<button class="send-btn purple-btn">SEND</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="index-sec-3">
	<div class="container">
		<div class="index-content">
			<div class="content-box">
				<div class="text-box" data-aos="fade-right" data-aos-duration="1300">
					<h1 class="heading">Help Other People</h1>
					<h1 class="sub-heading">Our Fingerprints on the Lives  We Touch never Fade.</h1>
				</div>
				<a href="#!" class="purple-btn" data-aos="fade-left" data-aos-duration="1300">Start Donating</a>
			</div>
		</div>
		<div class="index-3-abs">
			<img src="assets/images/index-sec-3-abs-img.png" alt="img" class="img-fluid">
		</div>
	</div>
</section>

<section class="index-sec-5 contact-sec-2">
	<div class="container">
		<div class="text-box">
			<h1 class="heading">Our Testimonial</h1>
			<p class="tagline">Client Feedback</p>
		</div>
		<div class="client-slider-wrap">
			<div class="swiper-container mySwiper client-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="slide-card">
							<div class="img-box">
								<img src="assets/images/client-img.png" alt="img" class="img-fluid">
								<p class="name"> John Doe <br>
									<span>Client</span>
								</p>
							</div>
							<p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="slide-card">
							<div class="img-box">
								<img src="assets/images/client-img.png" alt="img" class="img-fluid">
								<p class="name"> John Doe <br>
									<span>Client</span>
								</p>
							</div>
							<p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="slide-card">
							<div class="img-box">
								<img src="assets/images/client-img.png" alt="img" class="img-fluid">
								<p class="name"> John Doe <br>
									<span>Client</span>
								</p>
							</div>
							<p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="next"><i class="fas fa-chevron-right"></i></div>
		<div class="prev"><i class="fas fa-chevron-left"></i></div>
	</div>
</section>

@stop
