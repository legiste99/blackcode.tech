<!DOCTYPE html>
<html lang="en">

<!-- head -->
    <x-head/>
<!-- end head -->

	<body>

		<!-- loader -->
		<x-loader/>
		<!-- end loader -->

		<!-- navbar -->
		<x-navbar/>
		<!-- end navbar -->


		<!-- intro -->
		<div id="home" class="intro">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="content">
							{{--<h5>{BlackCode}</h5>--}}
							<h1>Empowering </h1>
                            <h2>Your Digital Journey</h2>
							<p>At Blackcode, we're passionate about providing innovative web and software solutions
                                that help individuals and small businesses achieve their goals. With a team of
                                experienced developers, designers, and project managers, we work closely with our
                                clients to understand their unique needs and develop customized solutions that
                                exceed their expectations.</p>
							<ul>
								{{--<li><a href="#features"><button class="button">Learn More </button></a></li>--}}
								<li><a href="#services">View our services <i class="las la-chevron-circle-down"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="content-image">
							<img src="{{asset('img/person.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end intro -->

		<!-- features -->
		<div id="features" class="features">
			<div class="container">
				<div class="content">
					<div class="row">
						<div class="col-md-6">
							<div class="content-box">
								<div class="icon">
									<i class="las la-graduation-cap"></i>
								</div>
								<div class="text">
									<h5>Quality & Reliable solutions</h5>
									<p>We pride ourselves on delivering quality and reliable solutions that our clients can count on to help them achieve their goals and stay ahead of the competition. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="content-box">
								<div class="icon">
									<i class="la la-tty"></i>
								</div>
								<div class="text">
									<h5>Customer Focused</h5>
									<p>Our friendly and knowledgeable support team is always available to answer questions, provide guidance, and help our clients make the most of our solutions.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="content-box">
								<div class="icon">
									<i class="la la-mouse"></i>
								</div>
								<div class="text">
									<h5>Creative Approach</h5>
									<p>Our creative team is dedicated to crafting visually stunning and engaging websites and software that capture our clients' brand identity and leave a lasting impression on their audience.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="content-box">
								<div class="icon">
									<i class="la la-biking"></i>
								</div>
								<div class="text">
									<h5>Agile</h5>
									<p>Using agile methodologies, we work collaboratively with our clients to ensure our solutions are flexible, scalable, and continuously evolving to meet their changing needs.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end features -->

		<!-- services -->
		<div id="services" class="services text-center">
			<div class="container">
				<div class="title">
					<h5>Services</h5>
					<h2>We provide the best services</h2>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="content">
							<i class="la la-edit"></i>
							<h5>Design</h5>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content content-center">
							<i class="la la-code"></i>
							<h5>Programming</h5>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content">
							<i class="la la-bullhorn"></i>
							<h5>Marketing</h5>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end services -->

		<!-- portfolio -->
		<div id="project" class="portfolio">
			<div class="container">
				<div class="title text-center">
					<h5>Portfolio</h5>
					<h2>See our awesome done project</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<a href="img/portfolio1.jpg" class="popup-image"><img src="img/portfolio1.jpg" alt=""></a>
						<div class="text">
							<h5>Design Art</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
						</div>
					</div>
					<div class="col-md-6">
						<a href="img/portfolio2.jpg" class="popup-image"><img src="img/portfolio2.jpg" alt=""></a>
						<div class="text">
							<h5>Marketing</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<a href="img/portfolio3.jpg" class="popup-image"><img src="img/portfolio3.jpg" alt=""></a>
						<div class="text shadow-2xl">
							<h5>Creative Design</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
						</div>
					</div>
					<div class="col-md-6">
						<a href="img/portfolio4.jpg" class="popup-image"><img src="img/portfolio4.jpg" alt=""></a>
						<div class="text shadow-2xl">
							<h5>Programming</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end portfolio -->

		<!-- pricing -->
		<div id="pricing" class="pricing">
			<div class="container">
				<div class="title">
					<h5>Pricing</h5>
					<h2>Choose our pricing</h2>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="content shadow">
							<h5>Design</h5>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
							<h2>$89</h2>
							<div class="divider"></div>
							<ul>
								<li><i class="la la-check"></i> Free Support</li>
								<li><i class="la la-check"></i> Update</li>
								<li><i class="la la-check"></i> Revision</li>
								<li><i class="la la-check"></i> Unlimited</li>
							</ul>
							<button class="button">Get Started</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content shadow content-center">
							<h5>Programming</h5>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
							<h2>$99</h2>
							<div class="divider"></div>
							<ul>
								<li><i class="la la-check"></i> Free Support</li>
								<li><i class="la la-check"></i> Update</li>
								<li><i class="la la-check"></i> Revision</li>
								<li><i class="la la-check"></i> Unlimited</li>
							</ul>
							<button class="button">Get Started</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content shadow">
							<h5>Marketing</h5>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
							<h2>$69</h2>
							<div class="divider"></div>
							<ul>
								<li><i class="la la-check"></i> Free Support</li>
								<li><i class="la la-check"></i> Update</li>
								<li><i class="la la-check"></i> Revision</li>
								<li><i class="la la-check"></i> Unlimited</li>
							</ul>
							<button class="button">Get Started</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end pricing -->

		<!-- testimonial -->
		<div id="testimonial" class="testimonial">
			<div class="container">
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="content shadow-2xl">
								<p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Voluptas quis vel asperiores incidunt illum placeat ab, ex iste reprehenderit ipsa commodi reiciendis</p>
								<div class="icon">
									<i class="las la-quote-right"></i>
								</div>
								<div class="text">
									<h5>John Doe</h5>
									<span>Directur</span>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="content shadow-2xl">
								<p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Voluptas quis vel asperiores incidunt illum placeat ab, ex iste reprehenderit ipsa commodi reiciendis</p>
								<div class="icon">
									<i class="las la-quote-right"></i>
								</div>
								<div class="text">
									<h5>Mario</h5>
									<span>Marketing</span>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="content shadow-2xl">
								<p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Voluptas quis vel asperiores incidunt illum placeat ab, ex iste reprehenderit ipsa commodi reiciendis</p>
								<div class="icon">
									<i class="las la-quote-right"></i>
								</div>
								<div class="text">
									<h5>Wesley</h5>
									<span>Programming</span>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="content shadow-2xl">
								<p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Voluptas quis vel asperiores incidunt illum placeat ab, ex iste reprehenderit ipsa commodi reiciendis</p>
								<div class="icon">
									<i class="las la-quote-right"></i>
								</div>
								<div class="text">
									<h5>Rami</h5>
									<span>Designer</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end testimonial -->

		<!-- contact -->
		<div id="contact" class="contact text-center">
			<div class="container">
				<h5>Give us a call</h5>
				<h2>+61 3 8376 6284</h2>
				<p>contact@domain.com </p>
				<p> 121 King Street, Melbourne Victoria 3000 Australia </p>
				<ul>
					<li><a href=""><i class="la la-facebook"></i></a></li>
					<li><a href=""><i class="la la-twitter"></i></a></li>
					<li><a href=""><i class="la la-linkedin"></i></a></li>
					<li><a href=""><i class="la la-youtube"></i></a></li>
				</ul>
			</div>
		</div>
		<!-- end contact -->


		<!-- script -->
		<x-script/>
        <!-- end script -->

	</body>
</html>
