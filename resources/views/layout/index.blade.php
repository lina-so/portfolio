<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">
    <title>Portfolio</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/css/nice-select.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!--================ Start Header Area =================-->
    <header class="header_area">
        <div class="main_menu">
            @include('layout.sections.nav')
        </div>
    </header>
    <!--================ End Header Area =================-->

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            @include('layout.sections.hello')
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start About Us Area =================-->
    <section class="about_area section_gap">
        <div class="container">
            @include('layout.sections.about')
        </div>
    </section>
    <!--================ End About Us Area =================-->

    <!--================ Srart Experience Area =================-->
    <section class="brand_area section_gap_bottom">
        <div class="container">
            @include('layout.sections.experience')
        </div>
    </section>
    <!--================ End Experience Area =================-->

    <!--================ Start Skills Area =================-->
    <section class="features_area">
        @include('layout.sections.skills')
    </section>
    <!--================ End Skills Area =================-->

    <!--================Start projects Area =================-->

    @include('layout.sections.project', [
        'title' => 'quality work',
        'label' => 'Recently done project',
    ])


    <!--================End Portfolio Area =================-->

    <!--================ Start Testimonial Area =================-->
    {{-- <div class="testimonial_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>client say about me</h2>
						<p>Is give may shall likeness made yielding spirit a itself togeth created after sea is in beast <br>
							 beginning signs open god you're gathering ithe</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testi_slider owl-carousel">
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="{{ asset('assets/img/testimonials/t1.jpg') }}" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">

        						<img src="{{ asset('assets/img/testimonials/t2.jpg') }}" alt="">

        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">

        						<img src="{{ asset('assets/img/testimonials/t1.jpg') }}" alt="">

        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">

        						<img src="{{ asset('assets/img/testimonials/t2.jpg') }}" alt="">

        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">

        						<img src="{{ asset('assets/img/testimonials/t1.jpg') }}" alt="">

        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">

        						<img src="{{ asset('assets/img/testimonials/t2.jpg') }}" alt="">

        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
			</div>
		</div>
	</div> --}}
    <!--================ End Testimonial Area =================-->

    <!--================ Start Newsletter Area =================-->
    <section class="newsletter_area">
        @include('layout.sections.newsletter')
    </section>
    <!--================ End Newsletter Area =================-->

    <!--================Footer Area =================-->
    <footer class="footer_area">
        <x-footer.footer />
    </footer>
    <!--================End Footer Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/stellar.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('assets/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>
