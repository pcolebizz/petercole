<?php 
$env = $_SERVER['SERVER_NAME'];

if($env == 'localhost')
{
	$base_url = 'http://localhost:8888/launchbxnet';
	$app_url = "http://localhost:8888/launchbx/app";
}
else
{
	$base_url = 'http://www.launchbx.net/app';
	$app_url = 'http://www.launchbx.net/app';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html class="no-js" lang="en">

<head>

	<meta charset="utf-8">
	
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	
	<title>LaunchBx: Content Management and Publishing Platform for managing unified communication and brand messaging across mobile, web and social networks.</title>

	<meta name="description" content="LaunchBx is your hub for managing unified communication and brand messaging across mobile, web and social networks.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta name="viewport" content="width=device-width, maximum-scale=1.0"/>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	
  	  
  	<link rel="stylesheet" href='css/cf883b3.css'>
  	<link rel="stylesheet" href="css/iscroll.css">
	
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
  	  
	<link href='http://fonts.googleapis.com/css?family=Leckerli+One|Rokkitt:700,400|Luckiest+Guy' rel='stylesheet' type='text/css'>	

</head>
<body>






	
	<header>
		<p><a href="#" id="home"><img src="img/launchBx-logo.png" class="logo" alt="LaunchBx"></a></p>
	</header>

		
		<nav id="home-navigation">
			<ul>
				<li><a href="#" id="why">why use it?</a></li>
				<li><a href="#" id="features">features</a></li>
				<li><a href="#" id="pricing">pricing</a></li>
				<li><a href="<?php echo $app_url;?>/login/">log-in</a></li>
			</ul>
		</nav>
	
<div id="wrap">

<section id="first" data-speed="4">  

	<div class="panel_container">
	
	<div id="wrapper">
		<div id="scroller">
			<ul id="thelist">
				
				<li id="slide1" class="slideRoundedCorners">
				
					<div class="copy-film">
						<span class="header-film">Create, Manage and Launch your digital marketing solution: Mobile, Web and Social</span>
					</div>
					
					<div class="screenShot"></div>
				</li>	
				
				
				<li id="slide2" class="slideRoundedCorners">
					
					<div class="copy">
						<span class="header">Create</span>
						<p>
						Customize one of our unique templates with your own logo, colors, fonts and content, or work with us to build your own from scratch.
						</p>
					</div>
					
					<div class="screenShot"></div>
				</li>	
					
				<li id="slide3" class="slideRoundedCorners">
					<div class="copy">
						<span class="header">Manage.</span>
						<p>A Single Place to Manage all of your Content. Add and edit content directly to your site in real time, or upload from Excel. Update any
time.</p>
					</div>
					<div class="screenShot"></div>
				</li>	
						
				<li id="slide4" class="slideRoundedCorners">
					<div class="copy">
					<span class="header">Launch!</span>
					<p>Click Launch and you’re live. Everywhere. LaunchBx’s responsive design automatically
optimizes your site to all of your digital destinations simultaneously, including mobile, tablet, Facebook,
Twitter and WordPress.
					</p>
					</div>
					<div class="screenShot"></div>
				</li>
				
			</ul>
		</div>
		
		
		<div id="scroll-nav" class="story" data-speed="4" data-type="background">
			<div id="prev" onclick="gotoSlide('prev', 0);return false">&larr;</div>
			<ul id="indicator">
				<li onclick="gotoSlide((0));return false" onmousedown="abortTimer();" class="active">1</li>
				<li onclick="gotoSlide((1));return false" onmousedown="abortTimer();">2</li>
				<li onclick="gotoSlide((2));return false" onmousedown="abortTimer();">3</li>
				<li onclick="gotoSlide((3));return false" onmousedown="abortTimer();">4</li>
			</ul>
			<div id="next" onclick="gotoSlide('next', 0);return false">&rarr;</div>
		</div>
		
		<div id="sign-up-container">
			<form action="<?php echo $app_url;?>/register/createNewMenuAccount" method="post" accept-charset="utf-8">
			
			<div class="sign-up-multi-panel">	
			

				
				<input id="email-input" type="text" name="email" onfocus="updateInput(this.id)"  onblur="updateEmailText(this.id)" value="Email"/>
			
			</div>	
			
			<div class="sign-up-multi-panel">	
			
				<input id="pw1-input" type="text" name="password" onfocus="updatePw(this.id)" onblur="updatePasswordText(this.id, 'Password')" value="Password"/>
			</div>	
			
			
			<div class="sign-up-multi-panel">	
				
				<input id="pw2-input" type="text" name="confirm_password" onfocus="updatePw(this.id)" onblur="updatePasswordText(this.id, 'Confirm Password')" value="Confirm Password"/>
			</div>	
			
			<div class="sign-up-multi-panel">	
				<input type="submit" name="submit" value="Sign Up for Free"/>
			</div>	
			</form>
		</div>		
	</div>
	
	<div class="panel_container_header"><span class="pc_name">LaunchBx</span><span class="pc_desc">Create, Manage and Launch a complete digital marketing solution.</span></div>	
		<div class="panel_full">	
			<p>LaunchBx is your hub for managing unified communication and brand messaging across mobile, web and social networks. Easy to use. Professional. Effective.</p>
		</div>	
	</div>
	
	</section>


	
	
	
	<section id="second" data-speed="4">

			<div class="panel_container">
		
				<div class="panel_container_header"><span class="pc_name">Why Use It?</span><span class="pc_desc">How can we help?</span></div>

				<div class="panel_left">			
					<p><b>The Problem.</b> In the "early days" of the Internet, it was enough to maintain a single company website. Today, reaching customers effectively requires a presence across multiple platforms, including social networks, blogs, smart phones and email. Creating and maintaining multiple digital properties for this purpose can be very costly and time-consuming.</p> 	
				</div>
				
	
				<div class="panel_right">								
					<p><b>The Solution</b> LaunchBx gives business the ability to create and maintain all of their web-based properties from a single location. With just a few clicks, update and publish to multiple locations simultaneously any time. Easy. Affordable. Effective. 
					</p>
				</div>			
			</div>
	</section>
	
	






	<section id="third" class="story" data-speed="4" data-type="background">
	
			<div class="panel_container">
			
				<div class="panel_container_header"><span class="pc_name">Features</span><span class="pc_desc">Simple ways to connect you to your customers.</span></div>
				
					<div class="tout">	
						<h2>Quick Set-Up</h2>
						<p>Set Up takes just minutes<br/>Nothing to install</p>
					</div>	
					
					<div class="tout">	
						<h2>1-click publish to:</h2>
						<ul>
							<li>Mobile and Tablet</li>
							<li>Websites and Blogs</li>
							<li>Facebook</li>
							<li>Youtube</li>
							<li>Others...</li>
						</ul>
					</div>	
							
					<div class="tout">	
						<h2>Universal Editor</h2>
						<p>Design, edit and update your content from any computer or mobile device. Even make updates from the road using email!</p>
					</div>	
	

					<div class="tout">	
						<h2>Integrated</h2>
						<ul>
							<li>Facebook Check-Ins</li>
							<li>Google Calendar</li>
							<li>OpenTable Reservations</li>
						</ul>
					</div>	
					
					<div class="tout">	
						<h2>Responsive Design</h2>
						<p>Designed to visually scale up or down, depending on screen size. Able to fit multiple devices from iPhones to Android Tablets as well as future screen sizes.</p>
					</div>
					
					<div class="tout">	
						<h2>Analytics (<i>coming soon</i>)</h2>
						<p>Custom dashboard of stats and reports on site traffic, ad units and social messaging performance.</p>
					</div>	
					
			</div>
		
	</section>
	
	
	
	
	
	
	
	
	

	
	<section id="fourth"  data-speed="6" data-type="background" data-offsetY="0">  
	  	
			<div class="panel_container">
			
				<div class="panel_container_header"><span class="pc_name">Pricing</span><span class="pc_desc">Flexible Pricing Models.</span></div>
		
					<div class="tout">	
						<h2>Standard</h2>
						<span class="price">$9/month</span>
						<ul>
							<li>Single Venue</li>
							<li>Content Editor</li>
							<li>Design Templates</li>
							<li>1-click publish to web, tablet, mobile, Facebook</li>
							<li>Limited Support</li>
						</ul>
					</div>	
							
					<div class="tout">	
						<h2>Pro</h2>
						<span class="price">$20/month</span>
						<ul>
							<li>All Standard features, plus:</li>
							<li>Multiple Venues</li>
							<li>Multiple User Accounts</li>
							<li>Premium design templates</li>
							<li>Email/CRM publishing</li>
							<li>1-click publish to Facebook, Twitter, Youtube, Google+, WordPress, Opentable</li>
							<li>Analytics / Reports</li>
							<li>Business Support</li>
						</ul>
					</div>	
				
					<div class="tout">	
						<h2>Enterprise</h2>
						<span class="price">Contact Us</span>
						<ul>
							<li>All Pro features</li>
							<li>Unlimmited Storage</li>
							<li>Custom Set-Up</li>
							<li>Custom Designs</li>
							<li>VIP Support</li>
						</ul>
					</div>	
					
			</div>
	</section>	
	
	
	
	
	<section id="fifth" class="story" data-speed="4" data-type="background">

			<div class="panel_container">
			
				<div class="panel_container_header"><span class="pc_name">Company</span><span class="pc_desc">More about us</span></div>
				
				
				<div class="panel_left">	
					
						<p>LaunchBx creates web-based products and services to help small to mid-sized business connect with their customers.</p>
						
						<p>Peter Cole founded LaunchBx in 2011 when he began early prototypes of a content management and publishing system for business users of Facebook, Youtube, Wordpress and Twitter. After helping many restaurants and small business owners create websites and systems to connect with
						their customers, and particuarly the desire to reach users on mobile phones, Peter noticed a great need for a tool that would give business owners the power
						to make these updates and connections themselves - in any format (mobile, tablet or desktop.).</p>
						
						<p>
						
						
				</div>
				
	
				<div class="panel_right">	
						<p><img src="img/hp-slides/671233d.jpg" alt="Peter Cole headshot"/><br>
						Peter has over 15 years experience designing, developing and launching websites, mobile and desktop applications, ecommerce and other forms of digital marketing and multimedia. 
						He spent 10 years working across the Nike digital landscape, from brand to commerce to product. Other key clients include Microsoft, Xbox, Hyundai, HP, Target, Coca Cola and the Gap .</p>
						
						<p></p>
				</div>
				
			</div>
	</section>
	
	




	
	<section id="sixth" class="story" data-speed="4" data-type="background">

			<div class="panel_container">
			
				<div class="panel_container_header"><span class="pc_name">FAQs</span><span class="pc_desc">What questions you got?</span></div>
				
				
				<div class="panel_left">	
					
						<h2>How do I use it?</h2>
						<p>There are 3 ways to use LaunchBx</p>
						<ul>
							<li><b>1. Complete</b>Use our system to power your complete website for desktop, tablet and browser.</li>
							<li><b>2. Mobile Only</b>Keep your current website as is, but use our system to power a mobile-optimized version.</li>
							<li><b>3. Widget</b>Embed a widget version of your new menu on your website or Facebook page.</li>
						</ul>
						<p>When signing up for LaunchBx you can use any combination of these methods.</p>
						
						<br/><br/>
						<h2>How do I set it up?</h2>
						<p>There is nothing for you to install. We handle all the hosting and set-up for you.</p>
				</div>
				
	
				<div class="panel_right">	
												
						<h2>Is it just for restaurants?</h2>
						<p>LaunchBx is great for any business that has a list of services or proucts that need to be updated reguarlary and/or accessible across mutliple platforms.
						In addition to restaurants, it's great for retail shops, salons, clubs, health services and even artist/photography portfolios.
						</p>
						
						<br/><br/>
						
						<h2>How do I make updates?</h2>
						<ul>
							<li><b>1.Online Editor</b>Use our built-in online editor from any computer or mobile device.</li>
							<li><b>2.Excel</b>Use Excel to manage your menu and then upload into our system.</li>
							<li><b>3.Email</b>Send content updates using email.</li>
						</ul>
				</div>
				
			</div>
	</section>
	
	




	
	<section id="seventh" class="story" data-speed="4">
	<div class="panel_container">
			
		<div class="panel_container_header"><span class="pc_name">Contact</span><span class="pc_desc">Looing for more info? Please send us a note.</span></div>
			
			<div class="panel_left">	

				<iframe width="340" height="400" src="<?php echo $app_url;?>/email_form"></iframe>
				
			</div>
		</div>
	</section>
	
	




	
	
	


<div id="device"></div>


</div>

		
	
	<footer class="group">
		<nav id="bottomnav">
			<ul>
				<li><a href="#" id="ft_home">Home</a></li>
				<li><a href="#" id="ft_company">Company</a></li>
				<li><a href="#" id="ft_faqs">FAQs</a></li>
				<li><a href="#" id="ft_contact">Contact</a></li>	

			</ul>
		</nav>
	</footer>





<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="js/vendor/iscroll.js" type="text/javascript"></script>
<script src="js/vendor/parallax.js" type="text/javascript"></script>
<script src="js/vendor/modal.js" type="text/javascript"></script>

	  <script src="js/380f80f.js"></script>


 <!--[if lt IE 7 ]><script src="<?php echo $app_url;?>static/js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");<![endif]-->

</body>
</html>