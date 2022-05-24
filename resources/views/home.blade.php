<!DOCTYPE html>
<html lang="en">
<head>
  
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

	<title>Sonata | Responsive Multipurpose Bootstrap Theme</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
 	@include('include.header_assets')
     
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
           <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js"></script>      
	<![endif]-->

</head>
<body id="header6">

<div class="outer-wrapper" id="page-top">
	<div class="header-wrap">

		<!-- HEADER -->
		<header id="header-main">
		<div class="container">
			<div class="navbar yamm navbar-default">
				<div class="navbar-header">
					<button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand"><img src="{{ URL::asset('public/images/basic/logo.png') }}" width="40" alt=""/></a>
					</div>

				<!-- SEARCH -->
				<div class="header-x pull-right">
					<div class="s-search">
						<div class="ss-trigger"><i class="icon-search2"></i></div>
						<div class="ss-content">
							<span class="ss-close icon-cross2"></span>
							<div class="ssc-inner">
								<form>
									<input type="text" placeholder="Type Search text here...">
									<button type="submit"><i class="icon-search2"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="page-scroll"><a href="#page-top">Home</a></li>
						<li class="page-scroll"><a href="#1">About Us</a></li>
						<li class="page-scroll"><a href="#2">Services</a></li>
						<li class="page-scroll"><a href="#3">Portfolio</a></li>
						<li class="page-scroll"><a href="#4">Features</a></li>
						<li class="page-scroll"><a href="#6">Testimonial</a></li>
						<li class="page-scroll"><a href="#7">Pricing</a></li>
                        <li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
								Elements							</a>
							<ul class="dropdown-menu" role="menu">
								<li class="dropdown-submenu">
									<a href="shortcodes.html">Shortcodes</a>								</li>
								<li class="dropdown-submenu">
									<a href="headerstyle1.html">Header Style 1</a>								</li>
								<li class="dropdown-submenu">
									<a href="headerstyle2.html">Header Style 2</a>								</li>
								<li class="dropdown-submenu">
									<a href="headerstyle3.html">Header Style 3</a>								</li>
								
								<li class="dropdown-submenu">
									<a href="headerstyle4.html">Header Style 4</a>								</li>
							<li class="dropdown-submenu">
									<a href="headerstyle5.html">Header Style 5</a>								</li>
							
							</ul>
						</li>
						                        <li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
								Blog							</a>
							<ul class="dropdown-menu" role="menu">
								<li class="dropdown-submenu">
									<a href="blog-2column.html">Blog 2 Column</a>								</li>
								<li class="dropdown-submenu">
									<a href="blog-3column.html">Blog 3 Column</a>								</li>
								<li class="dropdown-submenu">
									<a href="blog-left-sidbar.html">Blog with Left Sidebar</a>								</li>
								<li class="dropdown-submenu">
									<a href="blog-right-sidebar.html">Blog with Right Sidebar</a>								</li>
								
								<li class="dropdown-submenu">
									<a href="blog-single.html">Blog Single</a>								</li>
							</ul>
						</li>
						<li class="page-scroll"><a href="#" data-toggle="modal" data-target="#modalContact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	</div>

	<!-- SLIDER -->
	<div class="slider-wrap">
		<div class="tp-banner-container">
			<div class="tp-banner" >
				<ul>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on"  data-title="Ken Burns Slide">
						<!-- MAIN IMAGE -->
						<img src="{{ URL::asset('public/images/dummy.png') }}"  alt="2" data-lazyload="{{ URL::asset('public/images/slider/1/3.jpg') }}" data-bgposition="right top" data-kenburns="off" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
 						<div class="tp-caption customin customout tp-resizeme"
							data-x="left" data-hoffset="60"
							data-y="170"
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="1000"
							data-start="500"
							data-easing="Back.easeInOut"
							data-endspeed="300"
							style="font-size:80px;color:#fff;text-transform:uppercase;font-weight: 800 !important;letter-spacing: 0px;line-height: 120% !important;"
							>We Are <br>
							<span style="color:rgb(3, 102, 141)">Creative</span> Agency
						</div>
					
						<a href="#" class="tp-caption small_title  customin customout tp-resizeme"
							data-x="left" data-hoffset="70"
							data-y="400"
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="1600"
							data-start="900"
							data-easing="Back.easeInOut"
							data-endspeed="300" style="	background: #000;
							padding:18px 28px;
							color: #fff;
							text-transform: uppercase;
							border: none;
							font-size: 13px;
							letter-spacing: 2px;
							border-radius: 0px;
							display: table;
							transition: .4s;
							
							">Buy now</a>
						
						
					</li>
					
					<!-- SLIDE  -->
										<li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on"  data-title="Ken Burns Slide">
						<!-- MAIN IMAGE -->
						
						<img src="{{ URL::asset('public/images/dummy.png') }}"  alt="2" data-lazyload="{{ URL::asset('public/images/slider/1/1.jpg') }}" data-bgposition="right top" data-kenburns="off" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
						<div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="280" data-hoffset="0" data-x="center"
							style="    color: #000;
							text-transform: uppercase;
							font-size: 40px;
							letter-spacing: 6px;
							font-family: Montserrat;
							font-weight: 400;
							"
							>
							Sonata Premium Template
						</div>
						<div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="350" data-hoffset="0" data-x="center"
							style="    color: #228dff;
							font-size: 13px;
							text-transform: uppercase;
							letter-spacing: 10px;
							"
							>
							ready to use for everyone
						</div>
						<a href="http://www.ckthemes.com/html/Sonata/Sonata/index.html" target="_blank" class="tp-caption lfb tp-resizeme rs-parallaxlevel-0"
							data-x="center"
							data-y="400"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500"
							data-start="1200"
							data-easing="Power3.easeInOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							data-linktoslide="next"
							style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;padding:15px 28px;
							color: #fff;
							text-transform: uppercase;
							border: none;
							background:#228dff;
							font-size: 12px;
							letter-spacing: 3px;
							font-family: Montserrat;
							border-radius: 0px;
							display: table;
							transition: .4s;
							;">Download Now</a>
					</li>
					</ul>
				<div class="tp-bannertimer"></div>
			</div>
		</div>
	</div>

	<!-- INNER CONTENT -->

	<div class="container-fluid no-padding">
    	<div class="pattern-grey padding30">
			<div class="container">
				<div class="row cta-dark">
					<div class="col-md-9">
						<h2 style="color: #000"><span>Welcome To Sonata</span> - Business HTML Template</h2>
						<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  id lobortis. Vestibulum quam elit, dapibus ac augue ut.</p>
					</div>
					<div class="col-md-3">
						<a href="#" class="button btn-lg pull-right">Download</a>
					</div>
				</div>
			</div>
		</div>
		<div class="padding50">
		<div class="" id="1"></div>
    <section id="about-section2">
		<div class="container">
			<div class="welcome-content text-center">
				<h3>Welcome to Sonata</h3>
				<p class="lead">The best looking template with mindblowing features</p>
			</div>
		</div>
		
		
		<div class="space10"></div>
		<div class="container padding50">
			<div class="services">
				<div class="row">
					<div class="col-md-3">
						<div class="service-content text-center">
							<span><i class="icon-monitor"></i></span>
							<div class="services-content">
								<h2>Responsive Design</h2>
								<p>Curabitur eleifend leo justo id risus vel imperdiet justo a cursus risusauctor ullamcorper elit a feugiat.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-content text-center">
							<span><i class="icon-cog3"></i></span>
							<div class="services-content">
								<h2>Fully Customizable</h2>
								<p>Curabitur eleifend leo justo id risus vel imperdiet justo a cursus risusauctor ullamcorper elit a feugiat.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-content text-center">
							<span><i class="icon-layout"></i></span>
							<div class="services-content">
								<h2>unlimited Layouts</h2>
								<p>Curabitur eleifend leo justo id risus vel imperdiet justo a cursus risusauctor ullamcorper elit a feugiat.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-content text-center">
							<span><i class="icon-support"></i></span>
							<div class="services-content">
								<h2>Live Support</h2>
								<p>Curabitur eleifend leo justo id risus vel imperdiet justo a cursus risusauctor ullamcorper elit a feugiat.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
      
      </div>
	</div>
	
		<div class="space70"></div>
		<div class="parallax-bg5 padding30" id="4">
			<div class="container">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="white">Our Features</h2>
					<p class="white">Sed dapibus, leo ut placerat bibendum, ligula ligula consectetur eros, sed efficitur justo ex ut risus. Integer nec eros non elit finibus dictum quis sit amet augue.</p>
				</div>
				<div class="features">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div>
									<div class="space30"></div>
									<img src="{{ URL::asset('public/images/feature-img.png') }}" class="img-responsive" alt="">
 								</div>
							</div>
							<div class="col-md-6">
								<div class="fc-main">
									<div class="feature-content space50">
										<i class="fa fa-hdd-o"></i>
										<div class="fc-inner">
											<h2 class="white">Fully Equiped Infrastructure</h2>
											<p class="lite-white">Morbi vel imperdiet justo, a cursus risus. Sed auctor ullamcorper elit a feugiat. </p>
										</div>
									</div>
									<div class="feature-content space50">
										<i class="icon-pencil2"></i>
										<div class="fc-inner">
											<h2 class="white">Modern Techniques</h2>
											<p class="lite-white">Morbi vel imperdiet justo, a cursus risus. Sed auctor ullamcorper elit a feugiat. </p>
										</div>
									</div>
									<div class="feature-content space50">
										<i class="icon-user"></i>
										<div class="fc-inner">
											<h2 class="white">Experienced Team</h2>
											<p class="lite-white">Morbi vel imperdiet justo, a cursus risus. Sed auctor ullamcorper elit a feugiat. </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	
		<div class="clearfix"></div>
		<div class="padding80 border-top">
			<div class="container" id="2">
			<div class="col-md-8 col-md-offset-2 text-center space50">
				<h2>Our Services</h2>
				<p>Sed dapibus, leo ut placerat bibendum, ligula ligula consectetur eros, sed efficitur justo ex ut risus. Integer nec eros non elit finibus dictum quis sit amet augue.</p>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="icon-monitor"></i>
						</div>
						<div class="feature-box-info">
							<h4>Web Design</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing metus elit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="icon-layout"></i>
						</div>
						<div class="feature-box-info">
							<h4>Branding</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing metus elit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="icon-cog3"></i>
						</div>
						<div class="feature-box-info">
							<h4>SEO</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing metus elit.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="space20"></div>
			<div class="row">
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="icon-camera"></i>
						</div>
						<div class="feature-box-info">
							<h4>Photography</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing metus elit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="icon-lightbulb"></i>
						</div>
						<div class="feature-box-info">
							<h4>Internet Marketing</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing metus elit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="icon-strategy"></i>
						</div>
						<div class="feature-box-info">
							<h4>UI Design</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing metus elit.</p>
						</div>
					</div>
				</div>
			</div>
						<div class="space20"></div>

			<div class="row">
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="icon-monitor"></i>
						</div>
						<div class="feature-box-info">
							<h4>Web Design</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing metus elit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="icon-layout"></i>
						</div>
						<div class="feature-box-info">
							<h4>Branding</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing metus elit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="icon-cog3"></i>
						</div>
						<div class="feature-box-info">
							<h4>SEO</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing metus elit.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="space20"></div>
			
		</div></div>
		
	
		
		<div class="pattern-grey">
		<div id="stats1" class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="stats1-info">
						<i class=" icon-camera"></i>
						<p><span class="count count1">499</span></p>
						<h2>Photos Taken</h2>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="stats1-info">
						<i class="icon-lock"></i>
						<p><span class="count count1">1123</span></p>
						<h2>New Members</h2>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="stats1-info">
						<i class="icon-trophy"></i>
						<p><span class="count count1">187</span></p>
						<h2>Competitions</h2>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="stats1-info">
						<i class="icon-telescope"></i>
						<p><span class="count count1">923</span></p>
						<h2>Job Openings</h2>
					</div>
				</div>
			</div>
		</div>
		</div>
			
	<div class="container padding70">
			<div class="section-info ">
				<div class="col-md-6">
					<h4>Why Choose Us</h4>
					<div class="space30"></div>
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne1">
									Lorem ipsum dolor sit amet consectetur adipiscing elit
									<span class="fa fa-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapseOne1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Etiam cursus pellentesque neque, eget ullamcorper augue eleifend a. In sit amet pulvinar purus. Ut in nibh tortor. Nullam quis magna sed nunc facilisis blandit vel at erat. Donec blandit et nulla sed lacinia. Quisque ullamcorper tincidunt ante, ut feugiat felis consectetur ut.</p>
								</div>
							</div>
						</div>
						<div class="clearfix space10"></div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo1">
									Curabitur et diam vitae dolor aliquet et in massa
									<span class="fa fa-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapseTwo1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Nam ullamcorper imperdiet luctus. Vestibulum tincidunt malesuada mi, in posuere augue cursus nec. Morbi et vehicula risus, fermentum lacinia justo. Etiam tellus arcu, eleifend tristique enim rutrum iaculis risus, id tincidunt dui fringilla sed bibendum lorem.</p>
								</div>
							</div>
						</div>
						<div class="clearfix space10"></div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree1">
									Proin faucibus sem sed dapibus dapibus
									<span class="fa fa-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapseThree1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Etiam cursus pellentesque neque, eget ullamcorper augue eleifend a. In sit amet pulvinar purus. Ut in nibh tortor. Nullam quis magna sed nunc facilisis blandit vel at erat. Donec blandit et nulla sed lacinia. Quisque ullamcorper tincidunt ante, ut feugiat felis consectetur ut.</p>
								</div>
							</div>
						</div>
						<div class="clearfix space10"></div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour1">
									Lorem ipsum dolor sit amet consectetur adipiscing elit
									<span class="fa fa-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapseFour1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Etiam cursus pellentesque neque, eget ullamcorper augue eleifend a. In sit amet pulvinar purus. Ut in nibh tortor. Nullam quis magna sed nunc facilisis blandit vel at erat. Donec blandit et nulla sed lacinia. Quisque ullamcorper tincidunt ante, ut feugiat felis consectetur ut.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>Skills we are having</h4>
					<div class="space30"></div>
					<div id="skills">
						<div class="b-progress-bar" data-capacity="100" data-value="97">
							<div class="progress-label">Web Design - 97%</div>
							<div class="progress-scale">
								<div style="width: 97%;" class="progress-line"></div>
							</div>
						</div>
						<div class="b-progress-bar" data-capacity="100" data-value="86">
							<div class="progress-label">HTML/CSS - 86%</div>
							<div class="progress-scale">
								<div style="width: 86%;" class="progress-line m-2"></div>
							</div>
						</div>
						<div class="b-progress-bar" data-capacity="100" data-value="78">
							<div class="progress-label">Graphic Design - 78%</div>
							<div class="progress-scale">
								<div style="width: 78%;" class="progress-line m-3"></div>
							</div>
						</div>
						<div class="b-progress-bar" data-capacity="100" data-value="65">
							<div class="progress-label">WordPress - 65%</div>
							<div class="progress-scale">
								<div style="width: 65%;" class="progress-line m-4"></div>
							</div>
						</div>
					</div>
					<div class="gap" style="height: 20px;">
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	
	
			<section id="portfolio-section">
			<div class="container container-full" id="3">
			<section id="portfolio-section">
<div class="container">
				<h3 class="uppercase text-center">Portfolio</h3>
			</div>				
			<ul class="filter" data-option-key="filter">
					<li><a class="selected" href="#filter" data-option-value="*">All</a></li>
					<li><a href="#" data-option-value=".branding">Branding</a></li>
					<li><a href="#" data-option-value=".illustration">Illustration</a></li>
					<li><a href="#" data-option-value=".web-design">Web Design</a></li>
					<li><a href="#" data-option-value=".print">Print</a></li>
				</ul>
				<div id="portfolio-home" class="isotope folio-boxed-3col" style="position: relative; height: 867px;">
					<div class="project-item branding" style="position: absolute; left: 0px; top: 0px;">
						<a href="./portfolio-single-slider.html">
							<div class="project-gal">
							
								<img src="{{ URL::asset('public/images/projects/1.jpg') }}" class="img-responsive" alt="">
								<div class="overlay-folio2">
									<div class="project-info">
										<h2>Aliquam tincidunt risus.</h2>
										<p>Web , Creative</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="project-item illustration web-design illustration" style="position: absolute; left: 449px; top: 0px;">
						<a href="./portfolio-single-slider.html">
							<div class="project-gal">
							
								<img src="{{ URL::asset('public/images/projects/2.jpg') }}" class="img-responsive" alt="">
								<div class="overlay-folio2">
									<div class="project-info">
										<h2>Vestibulum auctor</h2>
										<p>Image Gallery</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="project-item illustration print" style="position: absolute; left: 899px; top: 0px;">
						<a href="./portfolio-single-slider.html">
							<div class="project-gal">
							
								<img src="{{ URL::asset('public/images/projects/3.jpg') }}" class="img-responsive" alt="">
								<div class="overlay-folio2">
									<div class="project-info">
										<h2>Vestibulum auctor</h2>
										<p>Image Gallery</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="project-item web-design" style="position: absolute; left: 0px; top: 289px;">
						<a href="./portfolio-single-slider.html">
							<div class="project-gal">
								
							<img src="{{ URL::asset('public/images/projects/4.jpg') }}" class="img-responsive" alt="">
								<div class="overlay-folio2">
									<div class="project-info">
										<h2>Vestibulum auctor</h2>
										<p>Image Gallery</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="project-item branding" style="position: absolute; left: 449px; top: 289px;">
						<a href="./portfolio-single-slider.html">
							<div class="project-gal">
							
								<img src="{{ URL::asset('public/images/projects/5.jpg') }}" class="img-responsive" alt="">
								<div class="overlay-folio2">
									<div class="project-info">
										<h2>Vestibulum auctor</h2>
										<p>Image Gallery</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="project-item illustration web-design print" style="position: absolute; left: 899px; top: 289px;">
						<a href="./portfolio-single-slider.html">
							<div class="project-gal">
							
								<img src="{{ URL::asset('public/images/projects/6.jpg') }}" class="img-responsive" alt="">
								<div class="overlay-folio2">
									<div class="project-info">
										<h2>Vestibulum auctor</h2>
										<p>Image Gallery</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</section>
		</div>
		</section>

		<div class="space80"></div>
	<div class="container">
				<div class="row">
					<div class="cta-default-bdr">
						<div class="col-md-9">
							<p>Donec sit amet magna rhoncus convallis ipsum et viverra sapien. Curabitur in hendrerit neque etiam vel justo eget urna tristique efficitur eget id nunc.</p>
						</div>
						<div class="col-md-3">
							<a href="#" class="button btn-lg btn-border color2 pull-right">Buy Template</a>
						</div>
					</div>
				</div>
			</div>
		

<div class="padding50">

		<div class="container padding40">
				
		<div class="team-home">
			<div class="text-center space40">
				<h2 class="title uppercase">Meet our Team</h2>
				<p>Sed laoreet libero eget tempus blandit praesent eu erat sed sem facilisis rutrum metus<br>facilisis eros justo non ipsum aliquam lacinia non eu ex.</p>
			</div>
			<div class="team-box">
				<div class="container">
					<div id="home-team" class="owl-carousel owl-theme">
						<div class="item">
							<div class="staff-img">
							
								<img src="{{ URL::asset('public/images/team/1.jpg') }}" class="img-responsive" alt="">
								<div class="team-inner">
									<ul class="team-social">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<h2>Deidre Lyn</h2>
							<span>Founder</span>	
						</div>
						<div class="item">
							<div class="staff-img">
								<img src="{{ URL::asset('public/images/team/2.jpg') }}" class="img-responsive" alt="">
								<div class="team-inner">
									<ul class="team-social">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<h2>Maud Elfreda</h2>
							<span>Marketing Expert</span>	
						</div>
						<div class="item">
							<div class="staff-img">
							

								<img src="{{ URL::asset('public/images/team/3.jpg') }}" class="img-responsive" alt="">
								<div class="team-inner">
									<ul class="team-social">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<h2>Aliah Xavier</h2>
							<span>Director</span>	
						</div>
						<div class="item">
							<div class="staff-img">
							
								<img src="{{ URL::asset('public/images/team/4.jpg') }}" class="img-responsive" alt="">
								<div class="team-inner">
									<ul class="team-social">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<h2>Pamila Paden</h2>
							<span>Operations</span>	
						</div>
						<div class="item">
							<div class="staff-img">
							
								<img src="{{ URL::asset('public/images/team/5.jpg') }}" class="img-responsive" alt="">
								<div class="team-inner">
									<ul class="team-social">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<h2>Janice Annika</h2>
							<span>Designer</span>	
						</div>
						<div class="item">
							<div class="staff-img">
								<img src="{{ URL::asset('public/images/team/6.jpg') }}" class="img-responsive" alt="">
								<div class="team-inner">
									<ul class="team-social">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<h2>Hank Justy</h2>
							<span>Developer</span>	
						</div>
						<div class="item">
							<div class="staff-img">
								<img src="{{ URL::asset('public/images/team/7.jpg') }}" class="img-responsive" alt="">
								<div class="team-inner">
									<ul class="team-social">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<h2>Jules Arron</h2>
							<span>UX Designer</span>	
						</div>
						<div class="item">
							<div class="staff-img">
								<img src="{{ URL::asset('public/images/team/8.jpg') }}" class="img-responsive" alt="">
								<div class="team-inner">
									<ul class="team-social">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<h2>Jacklyn Mel</h2>
							<span>Support</span>	
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
		</div>
      
	  <div class="" id="6">
	  <div class="text-center space40">
				<h2 class="title uppercase">Client Testimonial</h2>
			</div>
	  		<div class="parallax-bg6 padding60">
			<div class="container">
				<div class="testimonial-box">
					<div id="testimonial" class="owl-carousel">
						<div class="quote-info">
						
							<img src="{{ URL::asset('public/images/quote/1.jpg') }}" class="img-responsive" alt="">
							<p>Duis iaculis mauris dui tellus arcu rhoncus tellus non suscipit nisl tincidunt eget. Mauris in porta sapien. Pellentesque luctus urna volutpat, mollis dolor porttitor, rutrum sem. Aliquam vitae orci a libero iaculis sollicitudin. Sed ullamcorper lorem justo, ut elementum enim dapibus vel.</p>
							<h2 class="white">David Billie</h2>
						</div>
						<div class="quote-info">
							<img src="{{ URL::asset('public/images/quote/2.jpg') }}" class="img-responsive" alt="">
							<p>Duis iaculis mauris dui tellus arcu rhoncus tellus non suscipit nisl tincidunt eget. Mauris in porta sapien. Pellentesque luctus urna volutpat, mollis dolor porttitor, rutrum sem. Aliquam vitae orci a libero iaculis sollicitudin. Sed ullamcorper lorem justo, ut elementum enim dapibus vel.</p>
							<h2 class="white">Katey Thane</h2>
						</div>
						<div class="quote-info">
							<img src="{{ URL::asset('public/images/quote/3.jpg') }}" class="img-responsive" alt="">
							<p>Duis iaculis mauris dui tellus arcu rhoncus tellus non suscipit nisl tincidunt eget. Mauris in porta sapien. Pellentesque luctus urna volutpat, mollis dolor porttitor, rutrum sem. Aliquam vitae orci a libero iaculis sollicitudin. Sed ullamcorper lorem justo, ut elementum enim dapibus vel.</p>
							<h2 class="white">Wally Buddy</h2>
						</div>
					</div>
					
					<div id="carousel_five" >
				<div class="item client-logo">
					<a href="#"><img src="{{ URL::asset('public/images/clients/1.png') }}" class="img-responsive" alt=""/></a>
					
				</div>
				<div class="item client-logo">					
					<a href="#"><img src="{{ URL::asset('public/images/clients/2.png') }}" class="img-responsive" alt=""/></a>
				</div>
				<div class="item client-logo">
					<a href="#"><img src="{{ URL::asset('public/images/clients/3.png') }}" class="img-responsive" alt=""/></a>
					
				</div>
				<div class="item client-logo">
					<a href="#"><img src="{{ URL::asset('public/images/clients/4.png') }}" class="img-responsive" alt=""/></a>
				</div>
				<div class="item client-logo">
					<a href="#"><img src="{{ URL::asset('public/images/clients/5.png') }}" class="img-responsive" alt=""/></a>
				</div>
				
			</div>
			
				</div>
			</div>
		</div>
	  </div>
		<div class="border-top padding80">
		<div class="container home-blog" id="5">
			<div class="text-center space40">
				<h2 class="title uppercase">Latest from blog</h2>
				<p>Sed laoreet libero eget tempus blandit praesent eu erat sed sem facilisis rutrum metus<br>facilisis eros justo non ipsum aliquam lacinia non eu ex.</p>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="hb-info">
						<div class="hb-thumb">
							<img src="{{ URL::asset('public/images/blog/1.jpg') }}" class="img-responsive" alt=""/>
						</div>
						<h4><a href="blog-single.html">Climb the mountain</a></h4>
						<small><i class="fa fa-user"></i> by Admin</small> <small><i class="fa fa-comments"></i> 20 Comments</small> <small><i class="fa fa-calendar"></i> 8/28/2015</small>
						<hr />
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat mi tellus, euismod viverra dolor ultrices sit amet.</p>
						<a href="blog-single.html" class="button btn-small btn-border color2">Read more...</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="hb-info">
						<div class="hb-thumb">						
							<img src="{{ URL::asset('public/images/blog/2.jpg') }}" class="img-responsive" alt=""/>
						</div>
						<h4><a href="blog-single.html">Girl showing stats</a></h4>
						<small><i class="fa fa-user"></i> by Admin</small> <small><i class="fa fa-comments"></i> 20 Comments</small> <small><i class="fa fa-calendar"></i> 8/28/2015</small>
						<hr />
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat mi tellus, euismod viverra dolor ultrices sit amet.</p>
						<a href="blog-single.html" class="button btn-small btn-border color2">Read more...</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="hb-info">
						<div class="hb-thumb">
							<img src="{{ URL::asset('public/images/blog/3.jpg') }}" class="img-responsive" alt=""/>
							
						</div>
						<h4><a href="blog-single.html">A photographers heart</a></h4>
						<small><i class="fa fa-user"></i> by Admin</small> <small><i class="fa fa-comments"></i> 20 Comments</small> <small><i class="fa fa-calendar"></i> 8/28/2015</small>
						<hr />
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat mi tellus, euismod viverra dolor ultrices sit amet.</p>
						<a href="blog-single.html" class="button btn-small btn-border color2">Read more...</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!--Pricing Table start -->


			<div class="container padding50" id="7">
			
						<div class="text-center">
				<h2 class="title uppercase">Our Business Plan</h2>
				<p>Sed laoreet libero eget tempus blandit praesent eu erat sed sem facilisis rutrum metus<br>facilisis eros justo non ipsum aliquam lacinia non eu ex.</p>
			</div>
				<div class="col-md-3 col-sm-6">
					<div class="wpb_wrapper">
						<div class="pricing-table">
							<div class="price-unit">
								<span class="pricing">$20</span>
								<span class="unit">pm</span>
							</div>
							<h3>Basic Plan</h3>
							<p></p>
							<ul class="content-pricing">
								<li>10GB Storage Space</li>
								<li>50GB Bandwidth</li>
								<li>10 Free Sub-Domains</li>
								<li>100 E-mail Accounts</li>
								<li>Control Panel &amp; FTP</li>
							</ul>
							<p>
								<a class="pricing-button" href="#">GET STARTED</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="wpb_wrapper">
						<div class="pricing-table">
							<div class="price-unit">
								<span class="pricing">$30</span>
								<span class="unit">pm</span>
							</div>
							<h3>Premium Plan</h3>
							<p></p>
							<ul class="content-pricing">
								<li>10GB Storage Space</li>
								<li>50GB Bandwidth</li>
								<li>10 Free Sub-Domains</li>
								<li>100 E-mail Accounts</li>
								<li>Control Panel &amp; FTP</li>
							</ul>
							<p>
								<a class="pricing-button" href="#">GET STARTED</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="wpb_wrapper">
						<div class="pricing-table active">
							<div class="price-unit">
								<span class="pricing">$50</span>
								<span class="unit">pm</span>
							</div>
							<h3>ADVANCE PLAN</h3>
							<p></p>
							<ul class="content-pricing">
								<li>10GB Storage Space</li>
								<li>50GB Bandwidth</li>
								<li>10 Free Sub-Domains</li>
								<li>100 E-mail Accounts</li>
								<li>Control Panel &amp; FTP</li>
							</ul>
							<p>
								<a class="pricing-button" href="#">GET STARTED</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="wpb_wrapper">
						<div class="pricing-table">
							<div class="price-unit">
								<span class="pricing">$70</span>
								<span class="unit">pm</span>
							</div>
							<h3>SUPER PLAN</h3>
							<p></p>
							<ul class="content-pricing">
								<li>10GB Storage Space</li>
								<li>50GB Bandwidth</li>
								<li>10 Free Sub-Domains</li>
								<li>100 E-mail Accounts</li>
								<li>Control Panel &amp; FTP</li>
							</ul>
							<p>
								<a class="pricing-button" href="#">GET STARTED</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		

<!-- pricing table end here -->		
		
		
		

		


		
@include('include.footer')


</div>

<!-- MODALS BEGIN--> 


<!-- contact modal-->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" style="padding: 20px;">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3 class="modal-title">Contact</h3>
			<form action="scripts/contact.php" role="form"  id="contact_form">
						<div class="form-group">
							<input type="text" class="form-control" id="contact_name" placeholder="Full name" name="name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="contact_email" placeholder="Email Address" name="email">
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="3" placeholder="Your message or question" id="contact_message" name="message"></textarea>
						</div>
						<button type="submit" id="contact_submit" data-loading-text="&bull;&bull;&bull;" class="button btn-small"> Submit</button>
					</form>
		</div>
	</div>
</div>
</div>
<!-- MODALS END-->

<!-- STYLE SWITCHER 
============================================= -->
<div class="b-settings-panel">
	<div class="settings-section">
		<span>
		Boxed 
		</span>
		<div class="b-switch">
			<div class="switch-handle"></div>
		</div>
		<span>
		Wide 
		</span>
	</div>
	<hr class="dashed" style="margin: 15px 0px;">
	<h5>Main Background</h5>
	<div class="settings-section bg-list">
		<div class="bg-pattern1"></div>
		<div class="bg-pattern2"></div>
		<div class="bg-pattern6"></div>
		<div class="bg-pattern10"></div>
		<div class="bg-pattern16"></div>
		<div class="bg-pattern4"></div>
		<div class="bg-pattern5"></div>
		<div class="bg-pattern7"></div>
		<div class="bg-pattern9"></div>
		<div class="bg-pattern11"></div>
		<div class="bg-pattern12"></div>
		<div class="bg-pattern13"></div>
		<div class="bg-pattern17"></div>
		<div class="bg-pattern8"></div>
		<div class="bg-pattern14"></div>
		<div class="bg-pattern15"></div>
		<div class="bg-pattern3"></div>
		<div class="bg-pattern18"></div>
	</div>
	<hr class="dashed" style="margin: 15px 0px;">
	<h5>Color Scheme</h5>
	<div class="settings-section color-list">
		<div data-src="css/color-scheme/moderate-green.css" style="background: #8ec249"></div>
		<div data-src="css/color-scheme/vivid-blue.css" style="background: #228dff"></div>
		<div data-src="css/color-scheme/orange.css" style="background: #fa6900"></div>
		<div data-src="css/color-scheme/brown.css" style="background: #a68c69"></div>
		<div data-src="css/color-scheme/yellow.css" style="background: #fabe28"></div>
		<div data-src="css/color-scheme/violet.css" style="background: #ba01ff"></div>
		<div data-src="css/color-scheme/strong-cyan.css" style="background: #00b9bd"></div>
		<div data-src="css/color-scheme/soft-cyan.css" style="background: #4bd5ea"></div>
		<div data-src="css/color-scheme/red.css" style="background: #ff0104"></div>
		<div data-src="css/color-scheme/lite-brown.css" style="background: #f3a76d"></div>
		<div data-src="css/color-scheme/lime-green.css" style="background: #3bdbad"></div>
		<div data-src="css/color-scheme/light-voilet.css" style="background: #aaa5ff"></div>
		<div data-src="css/color-scheme/gray-green.css" style="background: #697060"></div>
		<div data-src="css/color-scheme/gray-cyan.css" style="background: #aeced2"></div>
		<div data-src="css/color-scheme/de-green.css" style="background: #b6cd71"></div>
		<div data-src="css/color-scheme/cream.css" style="background: #e0d6b2"></div>

	</div>
	<div class="btn-settings"></div>
</div>
<!-- END STYLE SWITCHER 
============================================= -->
@include('include.footer_assets')

 
</body>
</html>

