<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="blog management">
	<meta name="author" content="Khandoker Anan">
	<meta name="description" content="Lazyblog system">
	<meta property="og:title" content="Lazyblog Landing Page">
	<meta property="og:description" content="Sign up now to start blogging">
	<meta property="og:type" content="website">
	<meta property="og:image" content="./assets/images/common/og-image.jpg">

	<link rel="stylesheet" href="./assets/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css">
	<link rel="stylesheet" href="./assets/css/theme.min.css">
	<link rel="stylesheet" href="./assets/css/utility.min.css">
	<link rel="stylesheet" href="./assets/css/demo/saas.css">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet">

	<title>Lazyblog</title>
</head>

<body data-mobile-nav-breakpoint="1199" data-mobile-nav-style="minimal" data-mobile-nav-scheme="light"
	data-mobile-nav-trigger-alignment="right" data-mobile-header-scheme="light" data-mobile-logo-alignment="default"
	data-mobile-nav-align="left">
	<div id="wrap">

		<div class="lqd-sticky-placeholder hidden"></div>
		<header id="site-header" class="main-header" data-sticky-header="true" data-sticky-values-measured="false">
			<div class="lqd-head-sec-wrap relative lqd-hide-onstuck pt-5 pb-45 pl-160 md:hidden"
				style="background:linear-gradient(270deg, rgb(61, 155, 252) 0%, rgb(123, 64, 228) 25.15923566878981%, rgb(245, 58, 139) 50%, rgb(238, 112, 74) 74.8407643312102%, #ddd24c 100%);">
				<div class="lqd-head-sec container flex items-stretch">
					<div class="col w-full flex justify-end text-end pr-5 pl-15">
						<div class="ld-fancy-heading flex items-center">
							<p class="ld-fh-element mb-0 text-12 text-white">Sign up without credit card information and
								use free for 12 months.</p>
						</div>
					</div>
					<div class="col w-full flex text-start pr-15 pl-5">
						<div class="header-module module-button py-10">
							<a href="<?= base_url('register') ?>" class="btn btn-naked text-13 leading-1em text-white-80">
								<span class="btn-txt" data-text="Learn more">Sign Up FREE</span>
								<span class="btn-icon">
									<i class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="lqd-head-sec-wrap relative -mt-40 bg-white module-bottom md:hidden">
				<div class="lqd-head-sec container-fluid flex items-stretch p-0">
					<div class="col lqd-head-col">
						<div class="header-module module-logo no-rotate navbar-brand-plain py-25">
							<a class="navbar-brand text-18" href="#" rel="home">
								<span class="navbar-brand-inner">
									<!-- <img class="logo-default" src="./assets/images/demo/saas/logo/logo.svg"
										alt="LandingHub Theme"> -->
									<h2>Lazyblog </h2>
								</span>
							</a>
						</div>
					</div>
					<div class="col lqd-head-col">
						<div class="header-module module-primary-nav static">
							<div class="navbar-collapse lqd-submenu-cover h-full" aria-expanded="false"
								role="navigation">
								<ul class="main-nav lqd-menu-counter-right main-nav-hover-underline-1 items-stretch justify-center reset-ul flex h-full"
									data-localscroll="true" data-localscroll-options='{"itemsSelector":"> li > a"}'>
									<li>
										<a class="text-gray-500 font-medium" href="#banner">Home</a>
									</li>

									<li>
										<a class="text-gray-500 font-medium" href="#testimonials">Features</a>
									</li>
									<li>
										<a class="text-gray-500 font-medium" href="#pricing">
											<span>Our Users</span>
											<span class="link-badge text-primary">NEW</span>
										</a>
									</li>
									<li class="  menu-item-has-children">
										<a class="text-gray-500 font-medium" href="#help">
											<span>FAQ</span>

										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col lqd-head-col text-end justify-end lg:hidden">
						<div class="header-module module-button">
							<a href="<?= base_url('login') ?>"
								class="btn btn-solid btn-sm border-none bg-slate-100 rounded-100 text-14 leading-1/25em text-black"
								>
								<span class="btn-txt" data-text="Join Hubz">Sign In</span>
								<span class="btn-icon">
									<i class="lqd-icn-ess icon-md-arrow-forward"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="lqd-head-sec-wrap relative lqd-hide-onstuck module-line md:hidden">
				<div class="lqd-head-sec container-fluid flex items-stretch p-0">
					<div class="col lqd-head-col">
						<div class="w-full h-1px mb-55">
							<span class="w-full relative block border-top border-black-10"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="lqd-stickybar-wrap lqd-stickybar-left pointer-events-none md:hidden">
				<div class="lqd-stickybar w-full h-full relative flex justify-center items-center vertical-rl">
					<div class="col lqd-head-col"></div>

					<div class="col lqd-head-col"></div>
				</div>
			</div>
			<div class="lqd-stickybar-wrap lqd-stickybar-right pointer-events-none md:hidden">
				<div class="lqd-stickybar w-full h-full relative flex justify-center items-center vertical-rl">
					<div class="col lqd-head-col"></div>
					<div class="col lqd-head-col justify-center text-center text-center pr-0 pl-0">
						<div class="header-module flex-col py-10 rotate-180">
							<div class="lqd-scrl-indc" data-lqd-scroll-indicator="true">
								<a class="pointer-events-auto text-black" href="#wrap" data-localscroll="true"
									data-lqd-interactive-color="true">
									<span class="lqd-scrl-indc-inner flex items-center">
										<span class="lqd-scrl-indc-txt">scroll</span>
										<span class="lqd-scrl-indc-line bg-black w-1 h-60 relative">
											<span
												class="lqd-scrl-indc-el inline-block w-10 h-10 absolute -top-5 -left-5 rounded-8"></span>
										</span>
									</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col lqd-head-col text-end justify-end">
						<div class="header-module module-button py-10">
							<a href="#modal-mini"
								class="btn btn-naked btn-icon-custom-size btn-icon-circle btn-icon-solid pointer-events-auto ml-20 font-family-inherit"
								data-lity="#modal-mini" data-lqd-interactive-color="true">
								<span class="btn-icon bg-red-500 text-white text-22 w-50 h-50">
									<i class="lqd-icn-ess icon-speech-bubble"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="lqd-mobile-sec">
				<div class="lqd-mobile-sec-inner navbar-header flex items-stretch">
					<div class="lqd-mobile-modules-container"></div>
					<button type="button"
						class="navbar-toggle collapsed nav-trigger style-mobile flex relative items-center justify-end border-none bg-transparent p-0"
						data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#lqd-mobile-sec-nav"
						aria-expanded="false"
						data-bs-toggle-options='{"changeClassnames":  {"html": "mobile-nav-activated"} }'>
						<span class="sr-only">Menu</span>
						<span class="bars inline-block relative z-1">
							<span class="bars-inner flex flex-col w-full h-full">
								<span class="bar inline-block"></span>
								<span class="bar inline-block"></span>
								<span class="bar inline-block"></span>
							</span>
						</span>
					</button>
					<a class="navbar-brand flex justify-start" href="#">
						<span class="navbar-brand-inner">
							<img class="logo-default" src="./assets/images/demo/saas/logo/logo.svg"
								alt="LandingHub Theme">
						</span>
					</a>
				</div>
				<div class="lqd-mobile-sec-nav w-full absolute z-10">
					<div class="mobile-navbar-collapse collapse navbar-collapse bg-white" id="lqd-mobile-sec-nav"
						aria-expanded="false" role="navigation">
						<ul class="reset-ul lqd-mobile-main-nav main-nav text-black" data-localscroll="true"
							data-localscroll-options='{"itemsSelector":"> li > a"}'>
							<li>
								<a class="text-gray-500 font-medium" href="#banner">Home</a>
							</li>

							<li>
								<a class="text-gray-500 font-medium" href="#testimonials">Features</a>
							</li>
							<li>
								<a class="text-gray-500 font-medium" href="#pricing">
									<span>Our Users</span>
									<span class="link-badge text-primary">NEW</span>
								</a>
							</li>
							<li class="  menu-item-has-children">
								<a class="text-gray-500 font-medium" href="#help">
									<span>FAQ</span>

								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>

		<main class="content bg-repeat bg-center" id="lqd-site-content"
			style="background-image: url(./assets/images/demo/saas/bg/bg-pattern.svg);">
			<div id="lqd-contents-wrap">

				<!-- Start Banner -->
				<section class="lqd-section banner flex items-center justify-center pt-35 pb-50" id="banner">
					<div class="w-full h-full absolute pointer-events-none">
						<div class="ld-particles-container lqd-particles-as-bg">
							<div class="ld-particles-inner" id="lqd-particles-banner" data-particles="true"
								data-particles-options='{"particles": {"number": {"value" : 5} , "color": {"value" : ["#fdc14c", "#fd5c4c", "#48bb0f", "#fda44c"]} , "shape": {"type" : ["circle", "edge", "triangle", "polygon"]} , "opacity": {"random": true} , "size": {"value" : 5} , "move": {"out_mode": "out"}} , "interactivity" : [], "retina_detect": true}'>
							</div>
						</div>
					</div>
					<div class="lqd-imggrp-container w-full absolute pointer-events-none top-20percent left-0"
						data-move-element='{ "target":  ".container", "type":  "insertBefore" }' data-parallax="true"
						data-parallax-from='{"y" : 114}' data-parallax-to='{"y" : -122}'
						data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'>
						<div class="lqd-imggrp-single relative">
							<div
								class="lqd-imggrp-img-container inline-flex max-w-full relative items-center justify-center">
								<figure>
									<img width="43" height="279"
										src="./assets/images/demo/saas/banner/Mask-Group-3@2x.jpg" alt="shape">
								</figure>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 text-center">
								<div class="module-title flex flex-wrap justify-center px-15percent"
									data-custom-animations="true"
									data-ca-options='{"triggerHandler": "inview", "animationTarget": "all-childs", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 35, "rotationX" : 10, "rotationY" : 25, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"y" : 0, "rotationX" : 0, "rotationY" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'>
									<div class="ld-fancy-heading max-w-full">
										<h1 class="ld-fh-element mb-0/35em lqd-highlight-underline lqd-split-lines Tracking-0 font-semibold leading-1em text-70"
											data-split-text="true" data-split-options='{"type": "lines"}'>
											Create Your Own Blog
											<span class="gradient-word"
												style="background-image: linear-gradient(to right, #3D9BFC, #7B40E4, #F53A8B, #EE704A, #2DDD4F);">
												Easily
											</span>
										</h1>
									</div>
									<div class="ld-fancy-heading max-w-full">
										<p class="ld-fh-element mb-0/5em lqd-split-lines text-18 leading-30 text-slate-700"
											data-split-text="true" data-split-options='{"type": "lines"}'>
											No more complex codes or boring designs. Creating an attractive and
											functional site has never been easier.
										</p>
									</div>
									<div class="w-full h-20"></div>
									<a href="<?= base_url('register') ?>"
										class="btn btn-solid btn-hover-txt-switch btn-hover-txt-switch-y border-none px-1em mx-10 mb-10 bg-primary rounded-100 text-17 leading-1/5em text-white hover:bg-black"
										data-lity="#contact-modal">
										<span class="inline-flex  py-1/15em px-2/1em items-center">
											<span class="btn-txt" data-text="Sign up free" data-transition-delay="true"
												data-delay-options='{"elements":  ".lqd-chars", "delayType":  "animation", "startDelay":  0, "delayBetween":  32.5}'
												data-split-text="true"
												data-split-options='{"type":  "chars, words"}'>Sign up free</span>
											<span class="btn-icon">
												<i class="lqd-icn-ess icon-md-arrow-forward"></i>
											</span>
										</span>
									</a>

								</div>
							</div>

							<div class="col col-12 col-xl-10 offset-xl-1">
								<div class="lqd-imggrp-container relative mb-2em transition-all"
									data-custom-animations="true"
									data-ca-options='{"triggerHandler": "inview", "animationTarget": ".lqd-imggrp-single", "duration": "1800", "startDelay": "1450", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 80, "scaleX" : 0.85, "scaleY" : 0.85, "opacity" : 0} , "animations": {"y" : 0, "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
									<div class="lqd-imggrp-inner flex flex-wrap justify-center">
										<div
											class="lqd-imggrp-single block absolute module-shape-1 -right-100 -left-100 -bottom-230">
											<div
												class="lqd-imggrp-img-container max-w-full relative flex items-center justify-center">
												<figure>
													<img width="953" height="659"
														src="./assets/images/demo/saas/banner/BG-Lines.svg" alt="shape">
												</figure>
											</div>
										</div>

										<div class="lqd-imggrp-single block absolute module-shape-2 top-10percent -left-5percent"
											data-roundness="8">
											<div class="lqd-imggrp-img-container max-w-full relative flex items-center justify-center"
												data-parallax="true" data-parallax-from='{"y" : -11, "rotationZ" : -1}'
												data-parallax-to='{"y" : 185, "rotationZ" : 15}'
												data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'>
												<figure>
													<img width="38" height="59"
														src="./assets/images/demo/saas/banner/1@2x.png"
														alt="banner image">
												</figure>
											</div>
										</div>
										<div class="lqd-imggrp-single block absolute module-shape-3 top-70percent -right-5percent"
											data-roundness="8">
											<div class="lqd-imggrp-img-container max-w-full relative flex items-center justify-center"
												data-parallax="true" data-parallax-from='{"y" : 99, "rotationZ" : -1}'
												data-parallax-to='{"y" : -165, "rotationZ" : 15}'
												data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'>
												<figure>
													<img width="59" height="61"
														src="./assets/images/demo/saas/banner/2@2x.png"
														alt="banner image">
												</figure>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Banner -->

				<!-- Start Section Navigation -->

				<!-- End Section Navigation -->

				<!-- Start Clients Marquee -->
				<!-- <section class="lqd-section clients clients-marquee pb-35">
					<div class="container-fluid">
						<div class="row justify-center">
							<div class="col col-12 col-md-6 text-center">
								<div class="ld-fancy-heading mb-25">
									<p class="ld-fh-element mb-0/5em text-14 text-green-700">Transforming the Remote
										Working</p>
								</div>
							</div>
							<div class="col col-12">
								<div
									class="carousel-container lqd-marquee-carousel lqd-fade-sides -mr-15 -ml-15 transition-all">
									<div class="carousel-items"
										data-lqd-flickity='{"marquee": true, "wrapAround": true, "equalHeightCells": true, "middleAlignContent": true, "cellAlign": "center", "draggable": true}'>
										<div
											class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15">
											<div class="carousel-item-inner">
												<div class="carousel-item-content">
													<figure>
														<img width="96" height="29"
															src="./assets/images/demo/saas/clients/amazon-2.svg"
															alt="clients">
													</figure>
												</div>
											</div>
										</div>
										<div
											class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15">
											<div class="carousel-item-inner">
												<div class="carousel-item-content">
													<figure>
														<img width="84" height="36"
															src="./assets/images/demo/saas/clients/marvel-6.svg"
															alt="clients">
													</figure>
												</div>
											</div>
										</div>
										<div
											class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15">
											<div class="carousel-item-inner">
												<div class="carousel-item-content">
													<figure>
														<img width="76" height="27"
															src="./assets/images/demo/saas/clients/nike-4.svg"
															alt="clients">
													</figure>
												</div>
											</div>
										</div>
										<div
											class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15">
											<div class="carousel-item-inner">
												<div class="carousel-item-content">
													<figure>
														<img width="87" height="20"
															src="./assets/images/demo/saas/clients/amd-logo-1.svg"
															alt="clients">
													</figure>
												</div>
											</div>
										</div>
										<div
											class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15">
											<div class="carousel-item-inner">
												<div class="carousel-item-content">
													<figure>
														<img width="127" height="24"
															src="./assets/images/demo/saas/clients/dropcam-1-1.svg"
															alt="clients">
													</figure>
												</div>
											</div>
										</div>
										<div
											class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15">
											<div class="carousel-item-inner">
												<div class="carousel-item-content">
													<figure>
														<img width="76" height="27"
															src="./assets/images/demo/saas/clients/nike-4.svg"
															alt="clients">
													</figure>
												</div>
											</div>
										</div>
										<div
											class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15">
											<div class="carousel-item-inner">
												<div class="carousel-item-content">
													<figure>
														<img width="87" height="20"
															src="./assets/images/demo/saas/clients/amd-logo-1.svg"
															alt="clients">
													</figure>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->
				<!-- End Clients Marquee -->

				<!-- Start Features -->
				<section class="lqd-section features pt-35 pb-45" id="features">
					<div class="container">
						<div class="row">
							<div class="col col-12 col-md-6 col-lg-3 text-center">
								<div class="flex flex-col items-center justify-center mb-30">
									<div class="lqd-imggrp-single mb-30">
										<div
											class="lqd-imggrp-img-container relative inline-flex items-center justify-center">
											<figure class="w-full">
												<img width="167" height="144"
													src="./assets/images/demo/saas/features/Group-32406@2x.png"
													alt="features">
											</figure>
										</div>
									</div>
									<div class="ld-fancy-heading">
										<h3 class="ld-fh-element mb-1/25em text-18">Customized Dashboard</h3>
									</div>

								</div>
							</div>
							<div class="col col-12 col-md-6 col-lg-3 text-center">
								<div class="flex flex-col items-center justify-center mb-30">
									<div class="lqd-imggrp-single mb-30 mt-30 sm:mt-0" data-shadow-style="3"
										data-roundness="4">
										<div
											class="lqd-imggrp-img-container relative inline-flex items-center justify-center">
											<figure class="w-full">
												<img width="177" height="114"
													src="./assets/images/demo/saas/features/img-4@2x.png"
													alt="features">
											</figure>
										</div>
									</div>
									<div class="ld-fancy-heading">
										<h3 class="ld-fh-element mb-1/25em text-18">Easy WYSIWYG</h3>
									</div>

								</div>
							</div>
							<div class="col col-12 col-md-6 col-lg-3 text-center">
								<div class="flex flex-col items-center justify-center mb-30">
									<div class="lqd-imggrp-single mb-30 mt-15 sm:mt-0" data-roundness="4">
										<div
											class="lqd-imggrp-img-container relative inline-flex items-center justify-center">
											<figure class="w-full">
												<img width="156" height="130"
													src="./assets/images/demo/saas/features/Group-32818@2x.png"
													alt="features">
											</figure>
										</div>
									</div>
									<div class="ld-fancy-heading">
										<h3 class="ld-fh-element mb-1/25em text-18">See Audience</h3>
									</div>

								</div>
							</div>
							<div class="col col-12 col-md-6 col-lg-3 text-center">
								<div class="flex flex-col items-center justify-center mb-30">
									<div class="lqd-imggrp-single mb-30 mt-25 sm:mt-0">
										<div
											class="lqd-imggrp-img-container relative inline-flex items-center justify-center">
											<figure class="w-full">
												<img width="193" height="119"
													src="./assets/images/demo/saas/features/img-6@2x.jpg"
													alt="features">
											</figure>
										</div>
									</div>
									<div class="ld-fancy-heading">
										<h3 class="ld-fh-element mb-1/25em text-18">Create Author Page</h3>
									</div>

								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Features -->

				<!-- Start Use Cases -->
				<!-- <section class="lqd-section use-cases pt-75 pb-35 bg-slate-300" id="usecases">
					<div class="container">
						<div class="row justify-center">
							<div class="col col-12 col-lg-8 text-center">
								<div class="module-title mb-55">
									<div class="ld-fancy-heading module-title-11vw">
										<h2 class="ld-fh-element mb-0/5em text-42">Automate your notifications.</h2>
									</div>
									<div class="ld-fancy-heading">
										<p
											class="ld-fh-element mb-0/5em px-10percent leading-1/5em text-18 text-gray-500 lg:px-0">
											Import a pre-built section block with a single click or save your own custom
											block to re-use on other pages.</p>
									</div>
								</div>
							</div>
							<div class="col col-12">
								<div class="lqd-tabs lqd-tabs-style-13 flex flex-row-reverse mb-30 md:flex-col"
									data-tabs-options='{"trigger": "click"}'>
									<nav class="lqd-tabs-nav-wrap lqd-tabs-nav-has-btn">
										<ul class="reset-ul lqd-tabs-nav flex flex-col" role="tablist">
											<li data-bs-controls="lqd-use-case-item-1" role="presentation">
												<a class="flex flex-wrap items-center mb-1em text-black active"
													href="#lqd-use-case-item-1" aria-expanded="false"
													aria-controls="lqd-use-case-item-1" role="tab" data-bs-toggle="tab">
													<span class="lqd-tabs-nav-txt text-16 font-semibold">Visual Site
														Editor</span>
													<span class="lqd-tabs-nav-ext">Adjust responsive spacing, change
														font size, hide sections on specific devices, append custom
														column width.</span>
												</a>
											</li>
											<li data-bs-controls="lqd-use-case-item-2" role="presentation" class="">
												<a class="flex flex-wrap items-center mb-1em text-black"
													href="#lqd-use-case-item-2" aria-expanded="false"
													aria-controls="lqd-use-case-item-2" role="tab" data-bs-toggle="tab">
													<span class="lqd-tabs-nav-txt text-16 font-semibold">Responsive
														Settings</span>
													<span class="lqd-tabs-nav-ext">Adjust responsive spacing, change
														font size, hide sections on specific devices, append custom
														column width.</span>
												</a>
											</li>
											<li data-bs-controls="lqd-use-case-item-3" role="presentation" class="">
												<a class="flex flex-wrap items-center mb-1em text-black"
													href="#lqd-use-case-item-3" aria-expanded="false"
													aria-controls="lqd-use-case-item-3" role="tab" data-bs-toggle="tab">
													<span class="lqd-tabs-nav-txt text-16 font-semibold">Live Theme
														Customizer</span>
													<span class="lqd-tabs-nav-ext">Adjust responsive spacing, change
														font size, hide sections on specific devices, append custom
														column width.</span>
												</a>
											</li>
											<li data-bs-controls="lqd-use-case-item-4" role="presentation" class="">
												<a class="flex flex-wrap items-center mb-1em text-black"
													href="#lqd-use-case-item-4" aria-expanded="false"
													aria-controls="lqd-use-case-item-4" role="tab" data-bs-toggle="tab">
													<span class="lqd-tabs-nav-txt text-16 font-semibold">Hub
														Collection</span>
													<span class="lqd-tabs-nav-ext">Adjust responsive spacing, change
														font size, hide sections on specific devices, append custom
														column width.</span>
												</a>
											</li>
											<li data-bs-controls="lqd-use-case-item-5" role="presentation" class="">
												<a class="flex flex-wrap items-center mb-1em text-black"
													href="#lqd-use-case-item-5" aria-expanded="false"
													aria-controls="lqd-use-case-item-5" role="tab" data-bs-toggle="tab">
													<span class="lqd-tabs-nav-txt text-16 font-semibold">Backend
														mode</span>
													<span class="lqd-tabs-nav-ext">Adjust responsive spacing, change
														font size, hide sections on specific devices, append custom
														column width.</span>
												</a>
											</li>
										</ul>
										<div class="lqd-tabs-nav-btn-wrap">
											<a href="https://www.youtube.com/watch?v=WaSvMAl4zPw"
												class="fresco btn btn-naked btn-icon-left btn-icon-custom-size btn-icon-circle btn-icon-solid text-16 font-semibold text-primary">
												<span class="btn-txt" data-text="See How it Works">See How it
													Works</span>
												<span class="btn-icon text-10 mr-15 w-20 h-20 bg-primary text-white">
													<i class="lqd-icn-ess icon-ion-ios-play"></i>
												</span>
											</a>
										</div>
									</nav>
									<div class="lqd-tabs-content pr-2/5rem md:p-0">
										<div id="lqd-use-case-item-1" role="tabpanel"
											class="lqd-tabs-pane fade active show">
											<div class="container-fluid p-0">
												<div class="row">
													<div class="col col-12 col-xl-9 offset-xl-2">
														<div class="w-full relative flex flex-col flex-grow-1">
															<figure
																class="inline-flex max-w-full justify-center flex-grow-1 rounded-4">
																<img class="rounded-inherit sm:w-full" width="1192"
																	height="842"
																	src="./assets/images/demo/saas/use-case/img-6@2x-1.jpg"
																	alt="use case">
															</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="lqd-use-case-item-2" role="tabpanel" class="lqd-tabs-pane fade">
											<div class="container-fluid p-0">
												<div class="row">
													<div class="col col-12 col-xl-9 offset-xl-2">
														<div class="w-full relative flex flex-col flex-grow-1">
															<figure
																class="inline-flex max-w-full justify-center flex-grow-1 rounded-4">
																<img class="rounded-inherit sm:w-full" width="522"
																	height="435"
																	src="./assets/images/demo/saas/use-case/Group-32818@2x.png"
																	alt="use case">
															</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="lqd-use-case-item-3" role="tabpanel" class="lqd-tabs-pane fade">
											<div class="container-fluid p-0">
												<div class="row">
													<div class="col col-12 col-xl-9 offset-xl-2">
														<div class="w-full relative flex flex-col flex-grow-1">
															<figure
																class="inline-flex max-w-full justify-center flex-grow-1 rounded-4">
																<img class="rounded-inherit sm:w-full" width="1192"
																	height="842"
																	src="./assets/images/demo/saas/use-case/img-6@2x-1.jpg"
																	alt="use case">
															</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="lqd-use-case-item-4" role="tabpanel" class="lqd-tabs-pane fade">
											<div class="container-fluid p-0">
												<div class="row">
													<div class="col col-12 col-xl-9 offset-xl-2">
														<div class="w-full relative flex flex-col flex-grow-1">
															<figure
																class="inline-flex max-w-full justify-center flex-grow-1 rounded-4">
																<img class="rounded-inherit sm:w-full" width="522"
																	height="435"
																	src="./assets/images/demo/saas/use-case/Group-32818@2x.png"
																	alt="use case">
															</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="lqd-use-case-item-5" role="tabpanel" class="lqd-tabs-pane fade">
											<div class="container-fluid p-0">
												<div class="row">
													<div class="col col-12 col-xl-9 offset-xl-2">
														<div class="w-full relative flex flex-col flex-grow-1">
															<figure
																class="inline-flex max-w-full justify-center flex-grow-1 rounded-4">
																<img class="rounded-inherit sm:w-full" width="1192"
																	height="842"
																	src="./assets/images/demo/saas/use-case/img-6@2x-1.jpg"
																	alt="use case">
															</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col col-12">
								<div class="lqd-imggrp-single w-full flex flex-col relative flex-grow-1">
									<div class="lqd-imggrp-img-container absolute right-0 left-0 -top-110">
										<figure>
											<img width="1256" height="287"
												src="./assets/images/demo/saas/use-case/Decorative-BG@2x-1024x234.png"
												alt="shape">
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->
				<!-- End Use Cases -->

				<!-- Start Solutions -->
				<!-- <section class="lqd-section solutions pt-100 pb-45" id="solutions">
					<div class="container">
						<div class="row">
							<div class="col col-12">
								<div class="lqd-tabs lqd-tabs-style-2 flex flex-col-reverse mb-30"
									data-tabs-options='{"trigger": "click"}'>
									<nav class="lqd-tabs-nav-wrap">
										<ul class="reset-ul lqd-tabs-nav flex items-center flex-wrap" role="tablist">
											<li data-bs-controls="lqd-solution-item-1" role="presentation"
												class="mt-2em py-0">
												<a class="text-16 font-semibold text-gray-500 active"
													href="#lqd-solution-item-1" aria-expanded="false"
													aria-controls="lqd-solution-item-1" role="tab" data-bs-toggle="tab">
													<span
														class="iconbox iconbox-square flex-row items-center justify-start text-start">
														<span class="iconbox-icon-wrap mr-30">
															<span
																class="iconbox-icon-container w-85 h-85 text-30 bg-slate-100 rounded-30 text-slate-900">
																<i
																	class="lqd-icn-ess icon-lqd-envelope absolute-center"></i>
															</span>
														</span>
														<span class="contents flex flex-col pr-1/5rem md:pr-0">
															<span
																class="iconbox-title mt-0 mb-0 text-16 font-semibold -tracking-0/02em">Adjustable
																Personal Preferences</span>
														</span>
													</span>
													<span class="lqd-tabs-nav-progress">
														<span class="lqd-tabs-nav-progress-inner"></span>
													</span>
												</a>
											</li>
											<li data-bs-controls="lqd-solution-item-2" role="presentation"
												class="mt-2em py-0">
												<a class="text-16 font-semibold text-gray-500"
													href="#lqd-solution-item-2" aria-expanded="false"
													aria-controls="lqd-solution-item-2" role="tab" data-bs-toggle="tab">
													<span
														class="iconbox iconbox-square flex-row items-center justify-start text-start">
														<span class="iconbox-icon-wrap mr-30">
															<span
																class="iconbox-icon-container w-85 h-85 text-30 bg-slate-100 rounded-30 text-slate-900">
																<i
																	class="lqd-icn-ess icon-lqd-compass absolute-center"></i>
															</span>
														</span>
														<span class="contents flex flex-col pr-1/5rem md:pr-0">
															<span
																class="iconbox-title mt-0 mb-0 text-16 font-semibold -tracking-0/02em">Cloud
																Data Save Synchronization</span>
														</span>
													</span><span class="lqd-tabs-nav-progress">
														<span class="lqd-tabs-nav-progress-inner"></span>
													</span>
												</a>
											</li>
											<li data-bs-controls="lqd-solution-item-3" role="presentation"
												class="mt-2em py-0">
												<a class="text-16 font-semibold text-gray-500"
													href="#lqd-solution-item-3" aria-expanded="false"
													aria-controls="lqd-solution-item-3" role="tab" data-bs-toggle="tab">
													<span
														class="iconbox iconbox-square flex-row items-center justify-start text-start">
														<span class="iconbox-icon-wrap mr-30">
															<span
																class="iconbox-icon-container w-85 h-85 text-30 bg-slate-100 rounded-30 text-slate-900">
																<i
																	class="lqd-icn-ess icon-lqd-laptop absolute-center"></i>
															</span>
														</span>
														<span class="contents flex flex-col pr-1/5rem md:pr-0">
															<span
																class="iconbox-title mt-0 mb-0 text-16 font-semibold -tracking-0/02em">Team
																Management And Collaboration</span>
														</span>
													</span><span class="lqd-tabs-nav-progress">
														<span class="lqd-tabs-nav-progress-inner"></span>
													</span>
												</a>
											</li>
										</ul>
									</nav>
									<div class="lqd-tabs-content pb-35 -mr-15 -ml-15">
										<div id="lqd-solution-item-1" role="tabpanel"
											class="lqd-tabs-pane fade active Show">
											<div class="container-fluid">
												<div class="row">
													<div class="col col-12 col-lg-6 col-xl-5 self-center">
														<div
															class="module-content w-full relative flex flex-col justify-center flex-grow-1 pr-5percent lg:pr-0">
															<div class="ld-fancy-heading">
																<h6 class="ld-fh-element mb-2em">
																	<a href="#">
																		<img src="./assets/images/demo/saas/lable/Group-32402.svg"
																			alt="theme option" width="110" height="19">
																	</a>
																	<span>Next Generation</span>
																</h6>
															</div>
															<div class="ld-fancy-heading module-title-10vw">
																<h2 class="ld-fh-element mb-0/35em lqd-highlight-underline lqd-highlight-grow-left lqd-highlight-reset-onhover text-decoration-default text-50"
																	data-inview="true" data-transition-delay="true"
																	data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
																	<span>No more messy</span>
																	<mark class="lqd-highlight">
																		<span
																			class="lqd-highlight-txt">distribution</span>
																		<span
																			class="lqd-highlight-inner bg-blue-200 left-0">
																			<svg class="hidden"
																				xmlns="http://www.w3.org/2000/svg"
																				width="235.509" height="13.504"
																				viewbox="0 0 235.509 13.504"
																				aria-hidden="true"
																				preserveaspectratio="none">
																				<path
																					d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z"
																					transform="translate(0 0.002)">
																				</path>
																			</svg>
																		</span>
																	</mark>
																	<span>lists.</span>
																</h2>
															</div>
															<div class="ld-fancy-heading">
																<p class="ld-fh-element mb-0/5em text-17 leading-1/5em">
																	Open a beautiful store, increase your conversion
																	rates and boost your sales in minutes with
																	object-oriented UX. Adjust responsive spacing,
																	change font size, hide sections on specific devices,
																	append custom column width.</p>
															</div>
														</div>
													</div>
													<div class="col col-12 col-lg-6 col-xl-7">
														<div
															class="w-full relative flex flex-col justify-center flex-grow-1 pl-10percent md:pl-0">
															<figure class="inline-flex flex-grow-1 vertical-top">
																<img width="1280" height="798"
																	src="./assets/images/demo/saas/solution/Support@2x.png"
																	alt="solution">
															</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="lqd-solution-item-2" role="tabpanel" class="lqd-tabs-pane fade">
											<div class="container-fluid">
												<div class="row">
													<div class="col col-12 col-lg-6 col-xl-5 self-center">
														<div
															class="module-content w-full relative flex flex-col justify-center flex-grow-1 pr-5percent lg:pr-0">
															<div class="ld-fancy-heading">
																<h6 class="ld-fh-element mb-2em">
																	<a href="#">
																		<img src="./assets/images/demo/saas/lable/Group-32402.svg"
																			alt="theme option" width="110" height="19">
																	</a>
																	<span> Next Generation</span>
																</h6>
															</div>
															<div class="ld-fancy-heading">
																<h2 class="ld-fh-element mb-0/35em lqd-highlight-underline lqd-highlight-grow-left lqd-highlight-reset-onhover text-decoration-default text-50"
																	data-inview="true" data-transition-delay="true"
																	data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
																	<span>Cloud Data Save</span>
																	<mark class="lqd-highlight">
																		<span
																			class="lqd-highlight-txt">Synchronization.</span>
																		<span
																			class="lqd-highlight-inner bg-blue-200 left-0">
																			<svg class="hidden"
																				xmlns="http://www.w3.org/2000/svg"
																				width="235.509" height="13.504"
																				viewbox="0 0 235.509 13.504"
																				aria-hidden="true"
																				preserveaspectratio="none">
																				<path
																					d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z"
																					transform="translate(0 0.002)">
																				</path>
																			</svg>
																		</span>
																	</mark>
																</h2>
															</div>
															<div class="ld-fancy-heading">
																<p class="ld-fh-element mb-0/5em text-17 leading-1/5em">
																	Open a beautiful store, increase your conversion
																	rates and boost your sales in minutes with
																	object-oriented UX. Adjust responsive spacing,
																	change font size, hide sections on specific devices,
																	append custom column width.</p>
															</div>
														</div>
													</div>
													<div class="col col-12 col-lg-6 col-xl-7">
														<div
															class="w-full relative flex flex-col justify-center flex-grow-1 pl-10percent md:pl-0">
															<figure class="inline-flex flex-grow-1 vertical-top">
																<img width="522" height="435"
																	src="./assets/images/demo/saas/solution/Group-32818@2x.png"
																	alt="solution">
															</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="lqd-solution-item-3" role="tabpanel" class="lqd-tabs-pane fade">
											<div class="container-fluid">
												<div class="row">
													<div class="col col-12 col-lg-6 col-xl-5 self-center">
														<div
															class="module-content w-full relative flex flex-col justify-center flex-grow-1 pr-5percent lg:pr-0">
															<div class="ld-fancy-heading">
																<h6 class="ld-fh-element mb-2em">
																	<a href="#">
																		<img src="./assets/images/demo/saas/lable/Group-32402.svg"
																			alt="theme option" width="110" height="19">
																	</a>
																	<span>Next Generation</span>
																</h6>
															</div>
															<div class="ld-fancy-heading module-title-10vw">
																<h2 class="ld-fh-element mb-0/35em lqd-highlight-underline lqd-highlight-grow-left lqd-highlight-reset-onhover text-decoration-default text-50"
																	data-inview="true" data-transition-delay="true"
																	data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
																	<mark class="lqd-highlight">
																		<span
																			class="lqd-highlight-txt">Management</span>
																		<span
																			class="lqd-highlight-inner bg-blue-200 left-0">
																			<svg class="hidden"
																				xmlns="http://www.w3.org/2000/svg"
																				width="235.509" height="13.504"
																				viewbox="0 0 235.509 13.504"
																				aria-hidden="true"
																				preserveaspectratio="none">
																				<path
																					d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z"
																					transform="translate(0 0.002)">
																				</path>
																			</svg>
																		</span>
																	</mark>
																	<span>And Collaboration</span>
																</h2>
															</div>
															<div class="ld-fancy-heading">
																<p class="ld-fh-element mb-0/5em text-17 leading-1/5em">
																	Open a beautiful store, increase your conversion
																	rates and boost your sales in minutes with
																	object-oriented UX. Adjust responsive spacing,
																	change font size, hide sections on specific devices,
																	append custom column width.</p>
															</div>
														</div>
													</div>
													<div class="col col-12 col-lg-6 col-xl-7">
														<div
															class="w-full relative flex flex-col justify-center flex-grow-1 pl-10percent md:pl-0">
															<figure class="inline-flex flex-grow-1 vertical-top">
																<img width="1192" height="842"
																	src="./assets/images/demo/saas/solution/img-6@2x-1.jpg"
																	alt="solution">
															</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->
				<!-- End Solutions -->



				<!-- Start Text Image Box -->
				<section class="lqd-section text-image-box pt-120 pb-30">
					<div class="container">
						<div class="row">
							<div class="col col-12 col-lg-5 self-center">
								<div class="module-content w-full relative flex flex-col flex-grow-1 justify-center">
									<div class="ld-fancy-heading">
										<h6 class="ld-fh-element mb-2em">
											<a href="#">
												<img src="./assets/images/demo/saas/lable/Group-32402.svg"
													alt="theme option" width="110" height="19">
											</a>
											<span>Next Generation</span>
										</h6>
									</div>
									<div class="ld-fancy-heading module-title-11vw">
										<h2 class="ld-fh-element mb-0/35em lqd-highlight-underline lqd-highlight-grow-left lqd-highlight-reset-onhover text-decoration-default text-50"
											data-inview="true" data-transition-delay="true"
											data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
											<span>Track your daily</span>
											<mark class="lqd-highlight">
												<span class="lqd-highlight-txt">activity.</span>
												<span class="lqd-highlight-inner bg-blue-200 left-0">
													<svg class="hidden" xmlns="http://www.w3.org/2000/svg"
														width="235.509" height="13.504" viewbox="0 0 235.509 13.504"
														aria-hidden="true" preserveaspectratio="none">
														<path
															d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z"
															transform="translate(0 0.002)"></path>
													</svg>
												</span>
											</mark>
										</h2>
									</div>
									<div class="ld-fancy-heading">
										<p class="ld-fh-element mb-0/5em text-17 leading-1/5em">The latest design trends
											meet hand-crafted templates in Hub Collection. Use pre-built sections to
											speed up your design process.</p>
									</div>
								</div>
							</div>
							<div class="col col-12 col-lg-7 flex items-stretch">
								<div
									class="w-full relative flex flex-col flex-grow-1 pl-5percent justify-center transition-all lg:pl-0">
									<div class="lqd-imggrp-single relative transition-all" data-hover3d="true">
										<div class="lqd-imggrp-img-container max-w-full flex relative items-center justify-center"
											data-stacking-factor="1">
											<figure class="w-full">
												<img width="1256" height="719"
													src="./assets/images/demo/saas/text-image-box/img-10@2x.jpg"
													alt="text box image">
											</figure>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Text Image Box -->



				<!-- Start Testimonials -->
				<section class="lqd-section testimonials pt-120 pb-120 bg-slate-500" id="testimonials">
					<div class="lqd-imggrp-container absolute bottom-5 pointer-events-none"
						data-move-element='{ "target":  ".container", "type":  "insertBefore" }' data-parallax="true"
						data-parallax-from='{"x" : 63}' data-parallax-to='{"x" : 0}'
						data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'>
						<div class="lqd-imggrp-inner flex flex-wrap">
							<div class="lqd-imggrp-single" data-float="ease-in">
								<div
									class="lqd-imggrp-img-container max-w-full relative  inline-flex items-center justify-center">
									<figure class="w-full">
										<img width="111" height="182"
											src="./assets/images/demo/saas/testimonials/Mask-Group-1@2x.png"
											alt="Image">
									</figure>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row items-center">
							<div class="col col-12 col-lg-6">
								<div class="ld-fancy-heading">
									<h6 class="ld-fh-element mb-2em">
										<a href="#">
											<img src="./assets/images/demo/saas/lable/Group-32402.svg"
												alt="theme option" width="110" height="19">
										</a>
										<span>Next Generation</span>
									</h6>
								</div>
								<div class="ld-fancy-heading module-title-10vw">
									<h2 class="ld-fh-element mb-0/35em text-50">Trusted by global companies.</h2>
								</div>
								<div class="ld-fancy-heading">
									<p class="ld-fh-element mb-0/5em text-17 leading-1/5em mr-10percent">Install any
										demo or template with a single click. You can mix and match all the demos.</p>
								</div>
								<div class="flex flex-wrap -mr-15 -ml-15">
									<div
										class="w-50percent flex flex-col justify-start items-start flex-auto px-15 sm:w-full">
										<div class="lqd-counter lqd-counter-default text-blue-900 mb-0/5rem">
											<div class="lqd-counter-element relative mb-0 text-44 font-bold"
												data-enable-counter="true"
												data-counter-options='{"targetNumber": "1m+"}'>
												<span>1m+</span>
											</div>
										</div>
										<div class="ld-fancy-heading">
											<p class="ld-fh-element mb-0/5em text-14 text-blue-700">Installations</p>
										</div>
										<div class="flex mb-0">
											<figure class="max-w-full inline-flex flex-col flex-grow-1">
												<div class="max-w-full inline-flex flex-col vertical-top mb-10">
													<img width="94" height="14"
														src="./assets/images/demo/saas/testimonials/stars.svg"
														alt="stars">
												</div>
											</figure>
										</div>
									</div>
									<div
										class="w-50percent flex flex-col justify-start items-start flex-auto px-15 sm:w-full">
										<div class="lqd-counter lqd-counter-default text-blue-900 mb-0/5rem">
											<div class="lqd-counter-element relative mb-0 text-44 font-bold"
												data-enable-counter="true"
												data-counter-options='{"targetNumber": "4.58"}'>
												<span>4.58</span>
											</div>
										</div>
										<div class="flex mb-0">
											<figure class="max-w-full inline-flex flex-col flex-grow-1">
												<div class="max-w-full inline-flex flex-col vertical-top mb-10">
													<img width="94" height="14"
														src="./assets/images/demo/saas/testimonials/stars.svg"
														alt="stars">
												</div>
											</figure>
										</div>
										<div class="ld-fancy-heading">
											<p class="ld-fh-element mb-0/5em text-14 text-blue-700">The Best Rated App
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col col-12 col-lg-6">
								<div
									class="carousel-container carousel-nav-left carousel-nav-mobile-centercarousel-nav-md carousel-dots-left carousel-dots-mobile-center carousel-dots-style1 carousel-dots-mobile-outside lqd-carousel-fade">
									<div class="carousel-items"
										data-lqd-flickity='{"cellAlign": "left", "prevNextButtons": false, "pageDots": true, "groupCells": true, "wrapAround": true, "fade": true, "pauseAutoPlayOnHover": false, "buttonsAppendTo": "self", "addSlideNumbersToArrows": false, "dotsIndicator": "numbers", "numbersStyle": "line", "dotsAppendTo": "self"}'>
										<div class="carousel-item has-width">
											<div class="carousel-item-inner">
												<div class="carousel-item-content">
													<div class="container-fluid p-0">
														<div class="row">
															<div class="col col-12">
																<div
																	class="lqd-testi flex flex-wrap lqd-testi-details-sm lqd-testi-avatar-72 mb-30">
																	<div class="lqd-testi-quote mb-1/5em">
																		<blockquote class="text-24">
																			<p>
																				<span class="text-20 leading-30">Install
																					any demo or template with a single
																					click. You can mix and match all the
																					demos &amp; templates. Every demo
																					can be turned into one or
																					multi-page. You can also use the
																					shop features for all demos.</span>
																			</p>
																		</blockquote>
																	</div>
																	<div class="lqd-testi-info w-full">
																		<div
																			class="lqd-testi-details flex flex-row items-center justify-start">
																			<figure class="lqd-testi-avatar mr-25">
																				<img class="rounded-full" width="136"
																					height="136"
																					src="./assets/images/demo/saas/testimonials/Image@2x.jpg"
																					alt="avatar">
																			</figure>
																			<div class="lqd-testi-np">
																				<h3 class="font-medium">Martin Sanez
																				</h3>
																				<h4 class="font-weight-light">Nike
																					Designer</h4>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="carousel-item has-width">
											<div class="carousel-item-inner">
												<div class="carousel-item-content">
													<div class="container-fluid p-0">
														<div class="row">
															<div class="col col-12">
																<div
																	class="lqd-testi flex flex-wrap lqd-testi-details-sm lqd-testi-avatar-72 mb-30">
																	<div class="lqd-testi-quote mb-1/5em">
																		<blockquote class="text-24">
																			<p>
																				<span class="text-20 leading-30">Install
																					any demo or template with a single
																					click. You can mix and match all the
																					demos &amp; templates. Every demo
																					can be turned into one or
																					multi-page. You can also use the
																					shop features for all demos.</span>
																			</p>
																		</blockquote>
																	</div>
																	<div class="lqd-testi-info w-full">
																		<div
																			class="lqd-testi-details flex flex-row items-center justify-start">
																			<figure class="lqd-testi-avatar mr-25">
																				<img class="rounded-full" width="136"
																					height="136"
																					src="./assets/images/demo/saas/testimonials/Image@2x.jpg"
																					alt="avatar">
																			</figure>
																			<div class="lqd-testi-np">
																				<h3 class="font-medium">Martin Sanez
																				</h3>
																				<h4 class="font-weight-light">Nike
																					Designer</h4>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="carousel-item has-width">
											<div class="carousel-item-inner">
												<div class="carousel-item-content">
													<div class="container-fluid p-0">
														<div class="row">
															<div class="col col-12">
																<div
																	class="lqd-testi flex flex-wrap lqd-testi-details-sm lqd-testi-avatar-72 mb-30">
																	<div class="lqd-testi-quote mb-1/5em">
																		<blockquote class="text-24">
																			<p>
																				<span class="text-20 leading-30">Install
																					any demo or template with a single
																					click. You can mix and match all the
																					demos &amp; templates. Every demo
																					can be turned into one or
																					multi-page. You can also use the
																					shop features for all demos.</span>
																			</p>
																		</blockquote>
																	</div>
																	<div class="lqd-testi-info w-full">
																		<div
																			class="lqd-testi-details flex flex-row items-center justify-start">
																			<figure class="lqd-testi-avatar mr-25">
																				<img class="rounded-full" width="136"
																					height="136"
																					src="./assets/images/demo/saas/testimonials/Image@2x.jpg"
																					alt="avatar">
																			</figure>
																			<div class="lqd-testi-np">
																				<h3 class="font-medium">Martin Sanez
																				</h3>
																				<h4 class="font-weight-light">Nike
																					Designer</h4>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Testimonials -->

				<!-- Start Pricing -->
				<section class="lqd-section pricing pt-100 pb-50" id="pricing">
					<div class="container">
						<div class="row justify-center">
							<div class="col col-12 col-lg-6 text-center">
								<div class="w-full relative flex flex-col px-15 mb-30" data-custom-animations="true"
									data-ca-options='{"triggerHandler": "inview", "animationTarget": "all-childs", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 30, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"y" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'>
									<div class="ld-fancy-heading module-title-11vw">
										<h2 class="ld-fh-element mb-0/5em text-50">FREEMIUM PRICE MODEL</h2>
									</div>
									<div class="ld-fancy-heading">
										<p class="ld-fh-element mb-0/5em px-5percent leading-30 text-18 lg:px-0">It's
											completely free now for upcoming users. So Sign up now to get 12 months
											unlimited access.</p>
									</div>
								</div>
							</div>
							<div class="col col-12 relative">
								<div class="lqd-imggrp-single z-2 absolute top-0 -left-35" data-float="ease">
									<div
										class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
										<figure>
											<img width="128" height="168"
												src="./assets/images/demo/saas/pricing/img-22@2x.png" alt="shape">
										</figure>
									</div>
								</div>




							</div>
						</div>
				</section>
				<!-- End Pricing -->

				<!-- Start Subscribe -->
				<section class="lqd-section subscribe" id="subscribe" data-custom-animations="true"
					data-ca-options='{"triggerHandler": "inview", "animationTarget": ".animation-element, p, .btn", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 65, "scaleX" : 0.85, "scaleY" : 0.85, "rotationX" : -35, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"y" : 0, "scaleX" : 1, "scaleY" : 1, "rotationX" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'>
					<div class="w-full h-full absolute top-0 left-0 pointer-events-none">
						<div class="ld-particles-container lqd-particles-as-bg w-full h-340 absolute -top-120 left-0">
							<div class="ld-particles-inner w-full h-full absolute top-0 left-0" id="lqd-subscribe-bg"
								data-particles="true"
								data-particles-options='{"particles": {"number": {"value" : 13} , "shape": {"type" : ["image"], "image": {"src": "https:\/\/saaspro.liquid-themes.com\/wp-content\/uploads\/2021\/01\/Path@2x.png", "width" : 110, "height" : 67}} , "opacity": {"random": true} , "size": {"value" : 62, "random": true} , "move": {"enable": true, "direction": "right", "speed" : 1, "random": true, "out_mode": "out"}} , "interactivity" : [], "retina_detect": true}'>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col col-12">
								<div class="module-col w-full relative flex flex-wrap items-center justify-between bg-white shadow-lg py-40 pr-90 pl-90 bg-no-repeat bg-center rounded-10 animation-element"
									style="background-image: url(./assets/images/demo/saas/subscribe-bg/Mask-Group-1.svg);">
									<div class="w-50percent md:w-full text-start md:text-center">
										<div class="ld-fancy-heading">
											<p class="ld-fh-element mb-0/5em text-18 leading-1/25em">more complex codes
												or boring designs. Creating an attractive and functional site has never
												been easier.</p>
										</div>
									</div>
									<div class="w-50percent md:w-full text-end md:text-center">
										<a href="<?= base_url('register') ?>"
											class="btn btn-solid border-thin btn-hover-swp items-center px-0/25em bg-blue-900 rounded-100 text-18 font-medium text-white hover:bg-black"
											data-lity="#contact-modal">
											<span class="inline-flex items-center py-0/85em px-1/5em">
												<span class="btn-txt" data-text="Sign up free">Sign up free</span>
												<span class="btn-icon">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
												<span class="btn-icon">
													<i class="lqd-icn-ess icon-md-arrow-forward"></i>
												</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Subscribe -->

				<!-- Start Help -->
				<section class="lqd-section help pt-70" id="help">
					<div class="container">
						<div class="row">
							<div class="col col-12 col-md-8">
								<div class="ld-fancy-heading module-title-10vw">
									<h2 class="ld-fh-element mb-0/35em leading-1/1em text-44">Frequently Asked
										Questions.</h2>
								</div>
							</div>
							<div class="col col-12 col-md-4 text-end md:text-start">
								<div class="ld-fancy-heading">
									<p class="ld-fh-element mb-0/5em text-15 text-black">
										<span>Support Team</span>
										<img src="./assets/images/demo/saas/help/Images@2x.jpg" alt="help" width="93"
											height="44">
									</p>
								</div>
							</div>
							<div class="col col-12 mt-50">
								<div class="accordion accordion-lg accordion-title-underlined accordion-expander-lg mb-2em"
									id="accordion-help" role="tablist" aria-multiselectable="true">
									<div class="accordion-item panel mb-10">
										<div class="accordion-heading" role="tab" id="heading-lqd-item-1"
											data-id="lqd-item-1">
											<h4 class="accordion-title text-18 leading-1/5em text-black"
												data-bs-controls="lqd-item-1">
												<a class="collapsed" data-bs-toggle="collapse"
													data-bs-parent="#accordion-help" href="#lqd-item-1"
													aria-expanded="false" aria-controls="lqd-item-1">
													<span>End-to-end encryption for business messages for iOS
														Devices</span>
													<span class="accordion-expander text-purple-500 text-22 absolute">
														<i class="lqd-icn-ess icon-ion-ios-add"></i>
														<i class="lqd-icn-ess icon-ion-ios-remove"></i>
													</span>
												</a>
											</h4>
										</div>
										<div id="lqd-item-1" class="accordion-collapse collapse" role="tabpanel"
											aria-labelledby="heading-lqd-item-1" data-bs-parent="#accordion-help">
											<div class="accordion-content">
												<div class="ld-fancy-heading">
													<p class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0">
														Ultimate shop experience. Effortlessly build high-converting
														online shops and start selling in a few minutes.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item panel mb-10">
										<div class="accordion-heading" role="tab" id="heading-lqd-item-2"
											data-id="lqd-item-2">
											<h4 class="accordion-title text-18 leading-1/5em text-black"
												data-bs-controls="lqd-item-2">
												<a class="collapsed" data-bs-toggle="collapse"
													data-bs-parent="#accordion-help" href="#lqd-item-2"
													aria-expanded="false" aria-controls="lqd-item-2">
													<span>Sending media, documents, location and contacts</span>
													<span class="accordion-expander text-purple-500 text-22 absolute">
														<i class="lqd-icn-ess icon-ion-ios-add"></i>
														<i class="lqd-icn-ess icon-ion-ios-remove"></i>
													</span>
												</a>
											</h4>
										</div>
										<div id="lqd-item-2" class="accordion-collapse collapse" role="tabpanel"
											aria-labelledby="heading-lqd-item-2" data-bs-parent="#accordion-help">
											<div class="accordion-content">
												<div class="ld-fancy-heading">
													<p class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0">
														Ultimate shop experience. Effortlessly build high-converting
														online shops and start selling in a few minutes.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item panel mb-10">
										<div class="accordion-heading" role="tab" id="heading-lqd-item-3"
											data-id="lqd-item-3">
											<h4 class="accordion-title text-18 leading-1/5em text-black"
												data-bs-controls="lqd-item-3">
												<a class="collapsed" data-bs-toggle="collapse"
													data-bs-parent="#accordion-help" href="#lqd-item-3"
													aria-expanded="false" aria-controls="lqd-item-3">
													<span>Get insights on key metrics like response time and issue
														volume</span>
													<span class="accordion-expander text-purple-500 text-22 absolute">
														<i class="lqd-icn-ess icon-ion-ios-add"></i>
														<i class="lqd-icn-ess icon-ion-ios-remove"></i>
													</span>
												</a>
											</h4>
										</div>
										<div id="lqd-item-3" class="accordion-collapse collapse" role="tabpanel"
											aria-labelledby="heading-lqd-item-3" data-bs-parent="#accordion-help">
											<div class="accordion-content">
												<div class="ld-fancy-heading">
													<p class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0">
														Ultimate shop experience. Effortlessly build high-converting
														online shops and start selling in a few minutes.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item panel mb-10">
										<div class="accordion-heading" role="tab" id="heading-lqd-item-4"
											data-id="lqd-item-4">
											<h4 class="accordion-title text-18 leading-1/5em text-black"
												data-bs-controls="lqd-item-4">
												<a class="collapsed" data-bs-toggle="collapse"
													data-bs-parent="#accordion-help" href="#lqd-item-4"
													aria-expanded="false" aria-controls="lqd-item-4">
													<span>Calling unavailable in some countries</span>
													<span class="accordion-expander text-purple-500 text-22 absolute">
														<i class="lqd-icn-ess icon-ion-ios-add"></i>
														<i class="lqd-icn-ess icon-ion-ios-remove"></i>
													</span>
												</a>
											</h4>
										</div>
										<div id="lqd-item-4" class="accordion-collapse collapse" role="tabpanel"
											aria-labelledby="heading-lqd-item-4" data-bs-parent="#accordion-help">
											<div class="accordion-content">
												<div class="ld-fancy-heading">
													<p class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0">
														Ultimate shop experience. Effortlessly build high-converting
														online shops and start selling in a few minutes.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item panel mb-10">
										<div class="accordion-heading" role="tab" id="heading-lqd-item-5"
											data-id="lqd-item-5">
											<h4 class="accordion-title text-18 leading-1/5em text-black"
												data-bs-controls="lqd-item-5">
												<a class="collapsed" data-bs-toggle="collapse"
													data-bs-parent="#accordion-help" href="#lqd-item-5"
													aria-expanded="false" aria-controls="lqd-item-5">
													<span>Problems sending or receiving messages</span>
													<span class="accordion-expander text-purple-500 text-22 absolute">
														<i class="lqd-icn-ess icon-ion-ios-add"></i>
														<i class="lqd-icn-ess icon-ion-ios-remove"></i>
													</span>
												</a>
											</h4>
										</div>
										<div id="lqd-item-5" class="accordion-collapse collapse" role="tabpanel"
											aria-labelledby="heading-lqd-item-5" data-bs-parent="#accordion-help">
											<div class="accordion-content">
												<div class="ld-fancy-heading">
													<p class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0">
														Ultimate shop experience. Effortlessly build high-converting
														online shops and start selling in a few minutes.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item panel ">
										<div class="accordion-heading" role="tab" id="heading-lqd-item-6"
											data-id="lqd-item-6">
											<h4 class="accordion-title text-18 leading-1/5em text-black"
												data-bs-controls="lqd-item-6">
												<a class="collapsed" data-bs-toggle="collapse"
													data-bs-parent="#accordion-help" href="#lqd-item-6"
													aria-expanded="false" aria-controls="lqd-item-6">
													<span>How to restore your chat history?</span>
													<span class="accordion-expander text-purple-500 text-22 absolute">
														<i class="lqd-icn-ess icon-ion-ios-add"></i>
														<i class="lqd-icn-ess icon-ion-ios-remove"></i>
													</span>
												</a>
											</h4>
										</div>
										<div id="lqd-item-6" class="accordion-collapse collapse" role="tabpanel"
											aria-labelledby="heading-lqd-item-6" data-bs-parent="#accordion-help">
											<div class="accordion-content">
												<div class="ld-fancy-heading">
													<p class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0">
														Ultimate shop experience. Effortlessly build high-converting
														online shops and start selling in a few minutes.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="lqd-imggrp-container relative transition-all mb-2em">
									<div class="lqd-imggrp-inner flex flex-wrap">
										<div
											class="lqd-imggrp-single block absolute transition-all -right-80 bottom-250">
											<div class="lqd-imggrp-img-container inline-flex max-w-full relative items-center justify-center"
												data-parallax="true" data-parallax-from='{"y" : 65, "rotationZ" : -30}'
												data-parallax-to='{"y" : -106, "rotationZ" : 23}'
												data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'>
												<figure>
													<img width="64" height="47"
														src="./assets/images/demo/saas/help/img-12@2x.png" alt="shape">
												</figure>
											</div>
										</div>
										<div
											class="lqd-imggrp-single block absolute transition-all -left-80 bottom-400">
											<div class="lqd-imggrp-img-container inline-flex max-w-full relative items-center justify-center"
												data-parallax="true" data-parallax-from='{"y" : -54, "rotationZ" : 26}'
												data-parallax-to='{"y" : 95, "rotationZ" : -19}'
												data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'>
												<figure>
													<img width="38" height="59"
														src="./assets/images/demo/saas/help/1@2x.png" alt="shape">
												</figure>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Help -->



				<!-- Start Download -->
				<section class="lqd-section download pt-15" id="download" data-custom-animations="true"
					data-ca-options='{"triggerHandler": "inview", "animationTarget": ".animation-element, h2, .btn", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 65, "scaleX" : 0.85, "scaleY" : 0.85, "rotationX" : -35, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"y" : 0, "scaleX" : 1, "scaleY" : 1, "rotationX" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'>
					<div class="container">
						<div class="row">
							<div class="col col-12" data-parallax="true"
								data-parallax-from='{"y" : 100, "scaleX" : 1.2, "scaleY" : 1.2}'
								data-parallax-to='{"y" : 0, "scaleX" : 1, "scaleY" : 1}'
								data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom-=650 top"}'>
								<div
									class="module-col w-full relative flex flex-wrap items-center justify-between bg-blue-900 py-55 px-90 -mb-100 rounded-10 shadow-lg animation-element">
									<div class="w-65percent text-start md:w-full md:text-center">
										<div class="ld-fancy-heading module-title-10vw">
											<h2 class="ld-fh-element mb-0 text-46 font-bold leading-1em text-white">Join
												Hub and increase your productivity.</h2>
										</div>
									</div>
									<div class="w-35percent text-end md:w-full md:text-center">
										<a href="#contact-modal"
											class="btn btn-solid btn-hover-txt-switch btn-hover-txt-switch-y btn-lg circle border-thin bg-white rounded-100 text-1em text-black hover:text-white hover:bg-black"
											data-lity="#contact-modal">
											<span class="btn-txt" data-text="Get Started" data-transition-delay="true"
												data-delay-options='{"elements":  ".lqd-chars", "delayType":  "animation", "startDelay":  0, "delayBetween":  32.5}'
												data-split-text="true"
												data-split-options='{"type":  "chars, words"}'>Get Started</span>
											<span class="btn-icon">
												<i class="lqd-icn-ess icon-md-arrow-forward"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Download -->

			</div>
		</main>

		<footer id="site-footer" class="main-footer py-100 bg-repeat bg-center text-slate-400"
			style="background-image: url(./assets/images/demo/saas/bg/bg-pattern.svg); background: linear-gradient(0deg, #f7fafe 0%, rgb(255, 255, 255) 100%);">
			<section class="lqd-section px-110 pt-80 flex flex-wrap relative md:px-0">
				<div class=" container">
					<div class="row items-center">
						<div class="col col-12 col-md-3 text-center">
							<div class="w-full flex flex-col relative mb-10">
								<figure
									class="max-w-full relative inline-flex justify-start vertical-top mb-35 sm:justify-center">
									<img class="max-w-full h-auto vertical-top border-inherit"
										src="./assets/images/demo/saas/logo/logo-3.svg" alt="Hub Saas Pro">
								</figure>
							</div>
						</div>
						<div class="col col-12 col-md-9">
							<div class="flex -mr-15 -ml-15 justify-end">
								<div class="lqd-fancy-menu lqd-menu-td-none relative flex flex-col mb-30">
									<ul class="reset-ul inline-nav sm:text-center">
										<li class="mx-15">
											<a class="text-16 text-slate-400 justify-start" href="#">Management</a>
										</li>
										<li class="mx-15">
											<a class="text-16 text-slate-400 justify-start" href="#">Reporting</a>
										</li>
										<li class="mx-15">
											<a class="text-16 text-slate-400 justify-start" href="#">Tracking</a>
										</li>
										<li class="mx-15">
											<a class="text-16 text-slate-400 justify-start" href="#">Subscribe</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col col-12">
							<div class="w-full relative flex flex-col items-center justify-center pt-25">
								<div class="w-full border-top border-black-10 mb-35"></div>
							</div>
						</div>
						<div class="col col-12 col-md-8 text-start sm:text-center">
							<div class="ld-fancy-heading mb-30">
								<p class="ld-fh-element mb-0/5em text-13 leading-30">These Terms will be applied fully
									and affect to your use of this Website. By using this Website, you agreed to accept
									all terms and conditions written in here. You must not use this Website if you
									disagree with any of these Website Standard Terms and Conditions.</p>
							</div>
						</div>
						<div class="col col-12 col-md-4 flex items-center">
							<div class="w-full mb-35 text-end sm:text-center">
								<ul class="social-icon social-icon-border-none text-36">
									<li>
										<a class="text-slate-400" href="#" target="_blank">
											<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
												<path
													d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
													fill="currentColor" />
											</svg>
										</a>
									</li>
									<li>
										<a class="text-slate-400" href="#" target="_blank">
											<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
												<path
													d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
													fill="currentColor" />
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
		</footer>
	</div>

	<!-- Contact modal -->
	<div id="contact-modal" class="lity-modal lqd-modal lity-hide" data-modal-type="fullscreen">
		<div class="lqd-modal-inner">
			<div class="lqd-modal-head"></div>
			<section class="lqd-modal-content link-black bg-center bg-cover bg-norepeat"
				style="background-image: url(./assets/images/common/modal-bg.jpeg);">
				<div class="container min-h-100vh flex items-center flex-wrap">
					<div class="w-55percent relative flex flex-col sm:w-full">
						<div class="flex flex-col items-start justify-center py-10 pr-100 pl-10 module-content">
							<div class="ld-fancy-heading">
								<h2 class="ld-fh-element mb-0/5em text-122 text-black leading-0/8em font-medium">Send a
									<span>message.</span>
								</h2>
							</div>
							<div class="ld-fancy-heading">
								<p class="ld-fh-element text-18  mb-0/5em">We're here to answer any question you may
									have.</p>
							</div>
							<div class="w-full flex flex-row flex-grow-1 gap-10 module-info sm:flex-col sm:flex-wrap">
								<div class="w-50percent flex flex-col gap-10">
									<div class="ld-fancy-heading relative">
										<h6
											class="ld-fh-element text-14 font-bold text-black mb-0/5em tracking-0  mb-0/5em inline-block relative">
											careers</h6>
									</div>
									<div class="ld-fancy-heading relative">
										<p
											class="ld-fh-element text-16 leading-1/2em mb-0/5em  mb-0/5em inline-block relative">
											Would you like to join our growing team?</p>
									</div>
									<div class="ld-fancy-heading relative">
										<p
											class="ld-fh-element mb-0/5em inline-block relative text-16 font-bold leading-1/2em text-black">
											careers@hub.com</p>
									</div>
								</div>
								<div class="w-50percent flex flex-col gap-10 pl-15 sm:pl-0">
									<div class="ld-fancy-heading relative">
										<h6
											class="ld-fh-element text-14 font-bold text-black mb-0/5em tracking-0  mb-0/5em inline-block relative">
											Feedbacks</h6>
									</div>
									<div class="ld-fancy-heading relative">
										<p
											class="ld-fh-element text-16 leading-1/2em mb-0/5em  mb-0/5em inline-block relative">
											Have a project in mind? Send a message.</p>
									</div>
									<div class="ld-fancy-heading relative">
										<p class="ld-fh-element mb-0/5em inline-block relative">
											<span class="text-16 font-bold leading-1/2em text-black">info@hub.com
											</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w-45percent relative flex flex-col sm:w-full module-form">
						<div
							class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-lg lqd-contact-form-button-block p-10 sm:p-0">
							<div role="form">
								<div class="screen-reader-response">
									<p role="status" aria-live="polite" aria-atomic="true"></p>
								</div>
								<form action="./assets/php/mailer.php" method="post" class="lqd-cf-form"
									novalidate="novalidate" data-status="init">
									<div class="row -mr-15 -ml-15">
										<div class="col col-12 col-md-6 px-15">
											<p>
												<span class="lqd-form-control-wrap text">
													<input class="text-13 text-black border-black-20 bg-transparent"
														type="text" name="name" value="" size="40" aria-required="true"
														aria-invalid="false" placeholder="What's your name?">
												</span>
											</p>
										</div>
										<div class="col col-12 col-md-6 px-15">
											<p>
												<span class="lqd-form-control-wrap email">
													<input class="text-13 text-black border-black-20 bg-transparent"
														type="email" name="email" value="" size="40"
														aria-required="true" aria-invalid="false"
														placeholder="Email address">
												</span>
											</p>
										</div>
										<div class="col col-12 col-md-6 px-15">
											<p>
												<span class="lqd-form-control-wrap tel">
													<input class="text-13 text-black border-black-20 bg-transparent"
														type="text" name="topic" value="" size="40" aria-required="true"
														aria-invalid="false" placeholder="Select a Discussion Topic">
												</span>
											</p>
										</div>
										<div class="col col-12 col-md-6 px-15">
											<p>
												<span class="lqd-form-control-wrap text">
													<input class="text-13 text-black border-black-20 bg-transparent"
														type="text" name="budget" value="" size="40"
														aria-required="true" aria-invalid="false"
														placeholder="What's your budget?">
												</span>
											</p>
										</div>
										<div class="col col-12 px-15">
											<p>
												<span class="lqd-form-control-wrap textarea">
													<textarea class="text-13 text-black border-black-20 bg-transparent"
														name="message" cols="10" rows="6" aria-required="true"
														aria-invalid="false"
														placeholder="Tell us about your project"></textarea>
												</span>
											</p>
										</div>
										<div class="col col-12 text-center px-15">
											<input type="submit" value="— send message"
												class="lqd-cf-form-control text-16 uppercase font-medium leading-1em tracking-1 font-bold bg-primary text-white rounded-100 border-none">
											<p class="mt-1/25em text-black">— copy email: info@liquid-themes.com</p>
										</div>
									</div>
								</form>
								<div class="lqd-cf-response-output"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="lqd-modal-foot"></div>
		</div>
	</div>
	<!-- Contact modal -->

	<!-- Mini Contact Modal -->
	<div id="modal-mini" class="lqd-modal lity-hide" data-modal-type="box">
		<div class="lqd-modal-inner">
			<div class="lqd-modal-head"></div>
			<div class="lqd-modal-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col col-12 p-0">
							<div class="ld-fancy-heading">
								<h3 class="ld-fh-element mb-1em text-18">Send a message</h3>
							</div>
							<div class="w-full relative mb-35">
								<span class="w-full block border-top border-gray-100"></span>
							</div>
							<div
								class="lqd-contact-form lqd-contact-form-inputs-round lqd-contact-form-button-block lqd-contact-form-button-round mb-2em">
								<div role="form" lang="en-US">
									<div class="screen-reader-response">
										<p role="status" aria-live="polite" aria-atomic="true"></p>
									</div>
									<form action="./assets/php/mailer.php" method="post" class="lqd-cf-form"
										novalidate="novalidate" data-status="init">
										<p>
											<span class="lqd-form-control-wrap block mb-20">
												<input
													class="text-slate-200 text-size-inherit font-medium bg-gray-100 rounded-4 border-none px-2em"
													type="text" name="name" value="" size="40" aria-required="true"
													aria-invalid="false" placeholder="Name">
											</span>
											<span class="lqd-form-control-wrap block mb-20">
												<input
													class="text-slate-200 text-size-inherit font-medium bg-gray-100 rounded-4 border-none px-2em"
													type="email" name="email" value="" size="40" aria-required="true"
													aria-invalid="false" placeholder="Email Address">
											</span>
											<span class="lqd-form-control-wrap block mb-20">
												<textarea
													class="text-slate-200 text-size-inherit font-medium bg-gray-100 rounded-4 border-none px-2em"
													name="message" cols="10" rows="4" aria-invalid="false"
													placeholder="Message"></textarea>
											</span>
										</p>
										<p>
											<input type="submit" value="Send a message"
												class="has-spinner text-14 font-medium h-40 border-none bg-primary text-white">
										</p>
									</form>
									<div class="lqd-cf-response-output"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="lqd-modal-foot"></div>
		</div>
	</div>
	<!-- Mini Contact Modal -->

	<!-- Hub wordpress -->


	<script src="./assets/vendors/jquery.min.js"></script>
	<script src="./assets/vendors/jquery-ui/jquery-ui.min.js"></script>
	<script src="./assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="./assets/vendors/fastdom/fastdom.min.js"></script>
	<script src="./assets/vendors/fresco/js/fresco.js"></script>
	<script src="./assets/vendors/lity/lity.min.js"></script>
	<script src="./assets/vendors/gsap/minified/gsap.min.js"></script>
	<script src="./assets/vendors/gsap/utils/CustomEase.min.js"></script>
	<script src="./assets/vendors/gsap/minified/DrawSVGPlugin.min.js"></script>
	<script src="./assets/vendors/gsap/minified/ScrollTrigger.min.js"></script>
	<script src="./assets/vendors/draw-shape/liquidDrawShape.min.js"></script>
	<script src="./assets/vendors/animated-blob/liquidAnimatedBlob.min.js"></script>
	<script src="./assets/vendors/fontfaceobserver.js"></script>
	<script src="./assets/vendors/gsap/utils/SplitText.min.js"></script>
	<script src="./assets/vendors/particles.min.js"></script>
	<script src="./assets/vendors/flickity/flickity.pkgd.min.js"></script>
	<script src="./assets/vendors/flickity/flickity-fade.min.js"></script>
	<script src="./assets/vendors/isotope/isotope.pkgd.min.js"></script>
	<script src="./assets/vendors/isotope/packery-mode.pkgd.min.js"></script>
	<script src="./assets/js/liquid-gdpr.min.js"></script>
	<script src="./assets/js/theme.min.js"></script>
	<script src="./assets/js/liquid-ajax-contact-form.min.js"></script>

	<!-- Start custom cursor -->
	<div class="lqd-cc lqd-cc--inner fixed pointer-events-none"></div>
	<div
		class="lqd-cc--el lqd-cc-solid lqd-cc-explore flex items-center justify-center rounded-full fixed pointer-events-none">
		<div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
		<div class="lqd-cc-solid-txt flex justify-center text-center relative">
			<div class="lqd-cc-solid-txt-inner">Explide</div>
		</div>
	</div>
	<div
		class="lqd-cc--el lqd-cc-solid lqd-cc-drag flex items-center justify-center rounded-full fixed pointer-events-none">
		<div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
		<div class="lqd-cc-solid-ext lqd-cc-solid-ext-left inline-flex items-center">
			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
				style="width: 1em; height: 1em;">
				<path fill="currentColor"
					d="M19.943 6.07L9.837 14.73a1.486 1.486 0 0 0 0 2.25l10.106 8.661c.96.826 2.457.145 2.447-1.125V7.195c0-1.27-1.487-1.951-2.447-1.125z">
				</path>
			</svg>
		</div>
		<div class="lqd-cc-solid-txt flex justify-center text-center relative">
			<div class="lqd-cc-solid-txt-inner">Drag</div>
		</div>
		<div class="lqd-cc-solid-ext lqd-cc-solid-ext-right inline-flex items-center">
			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
				style="width: 1em; height: 1em;">
				<path fill="currentColor"
					d="M11.768 25.641l10.106-8.66a1.486 1.486 0 0 0 0-2.25L11.768 6.07c-.96-.826-2.457-.145-2.447 1.125v17.321c0 1.27 1.487 1.951 2.447 1.125z">
				</path>
			</svg>
		</div>
	</div>
	<div class="lqd-cc--el lqd-cc-arrow inline-flex items-center fixed top-0 left-0 pointer-events-none">
		<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M60.4993 0V4.77005H8.87285L80 75.9207L75.7886 79.1419L4.98796 8.35478V60.4993H0V0H60.4993Z" />
		</svg>
	</div>
	<div class="lqd-cc--el lqd-cc-custom-icon rounded-full fixed pointer-events-none">
		<div class="lqd-cc-ci inline-flex items-center justify-center rounded-full relative">
			<svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
				style="width: 1em; height: 1em;">
				<path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
					d="M16.03 6a1 1 0 0 1 1 1v8.02h8.02a1 1 0 1 1 0 2.01h-8.02v8.02a1 1 0 1 1-2.01 0v-8.02h-8.02a1 1 0 1 1 0-2.01h8.02v-8.01a1 1 0 0 1 1.01-1.01z">
				</path>
			</svg>
		</div>
	</div>
	<div class="lqd-cc lqd-cc--outer fixed top-0 left-0 pointer-events-none"></div>
	<!-- End custom cursor -->

	<template id="lqd-temp-sticky-header-sentinel">
		<div class="lqd-sticky-sentinel invisible absolute pointer-events-none"></div>
	</template>
	<template id="lqd-snickersbar">
		<div class="lqd-snickersbar flex flex-wrap lqd-snickersbar-in" data-item-id>
			<div class="lqd-snickersbar-inner flex flex-wrap items-center">
				<div class="lqd-snickersbar-detail">
					<p class="hidden lqd-snickersbar-addding-temp my-0">Adding {{itemName}} to cart</p>
					<p class="hidden lqd-snickersbar-added-temp my-0">Added {{itemName}} to cart</p>
					<p class="my-0 lqd-snickersbar-msg flex items-center my-0"></p>
					<p class="my-0 lqd-snickersbar-msg-done flex items-center my-0"></p>
				</div>
				<div class="lqd-snickersbar-ext ml-4"></div>
			</div>
		</div>
	</template>
	<div class="lity" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1"
		data-modal-type="default">
		<div class="lity-wrap" data-lity-close role="document">
			<div class="lity-loader" aria-hidden="true">Loading...</div>
			<div class="lity-container">
				<div class="lity-content"></div>
			</div>
			<button class="lity-close" type="button" aria-label="Close (Press escape to close)"
				data-lity-close>&times;</button>
		</div>
	</div>
</body>

</html>