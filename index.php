<?php
	
	$errorMessage = "";
	$successMessage = "";
	
	if ($_POST) {
		
		if (!$_POST["email"]) {
			
			$errorMessage .= "An email address is required. ";
		}
		
		if (!$_POST["subject"]) {
			
			$errorMessage .= "An email subject is required. ";
		}
		
		if (!$_POST["textArea"]) {
			
			$errorMessage .= "The message field is required. ";
		}
		
		if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
			
			$errorMessage .= "The email address is invalid. ";
		}
		
		if ($errorMessage != "") {
			
			$errorMessage = "<div id=\"alertHeader\" class=\"alert alert-danger\" role=\"alert\"><p><strong>There were error(s) in your form: </strong></p>" . $errorMessage . "</div>";
		} else {
			
			$emailTo = "triple3crown@gmail.com";
			$subject = $_POST["subject"];
			$content = "From: ".$_POST["name"].": ".$_POST["textArea"];
			$headers = "From: ".$_POST["email"];
			
			if (mail($emailTo, $subject, $content, $headers)) {
				
				$successMessage = "<div id=\"alertSuccess\" class=\"alert alert-success\" role=\"alert\">Your message was sent, we'll get back to you ASAP!\"</div>";
			} else {
				
				echo "error";
				$errorMessage = "<div id=\"alertHeader\" class=\"alert alert-danger\" role=\"alert\"><p><strong>Your message couldn't be sent</strong> Please try again later.</p></div>";

			}
		} 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Number 1 Earner</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400" rel="stylesheet" type="text/css"> 	
	<script src="https://use.fontawesome.com/c3545e1b17.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<!-- start header -->
	<header class="main-header accordian">
		<button class="site-logo" type="button">
			<i class="fa fa-bars"></i>
		</button>
		
		<ul class="nav">
			<li><a href="#">Top</a></li>
			<li><a href="#mission">Mission Statement</a></li>
			<li><a href="#about">About Us</a></li>
			<li><a href="#article1">Wealth/Income Opportunities</a></li>
			<li><a href="#top200mlm">MLM Company Rankings</a></li>
			<li><a href="http://www.stevemasteller.com/mybb">Forum</a></li>
			<li><a href="#inspired">Inspired</a></li>
			<li><a href="#sales200">Sales/MLM Leaders</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</header>
	<!-- end header -->

	<img id="splash" src = 'img/Screenshot_2016-07-01-18-18-37.jpg' alt='Jet on runway in the dark'>
		
	<div class="wrapper-top">
	
		<div class="wrapper-opportunities"></div>
		
			<article id="mission" class="wrapper-feature">
			
				<h1>Mission Statement</h1>

				<p><span class="dropcap">S</span>it amet, consectetur adipiscing elit. Sed in nisi urna. Aliquam vestibulum aliquam iaculis. Nunc eu tellus varius dui iaculis cursus id at sem. Vestibulum sollicitudin dapibus libero nec consectetur. Donec mi urna, dictum venenatis molestie et, euismod sit amet arcu. Suspendisse eu ultrices quam. In elementum ex venenatis nisi cursus bibendum. Duis et mattis tortor, id mattis sem. Praesent in nulla sed massa interdum congue.</p> 
			
			</article>

			<article id="about" class="wrapper-feature">
			
				<h1>About Us</h1>

				<p><span class="dropcap">C</span>onsectetur adipiscing elit. Sed in nisi urna. Aliquam vestibulum aliquam iaculis. Nunc eu tellus varius dui iaculis cursus id at sem. Vestibulum sollicitudin dapibus libero nec consectetur. Donec mi urna, dictum venenatis molestie et, euismod sit amet arcu. Suspendisse eu ultrices quam. In elementum ex venenatis nisi cursus bibendum. Duis et mattis tortor, id mattis sem. Praesent in nulla sed massa interdum congue.</p> 

				<p>Nullam fringilla blandit pulvinar. Donec hendrerit orci vitae eleifend fermentum. Quisque vel sodales ante, et iaculis diam. Nunc ullamcorper quam nunc. Donec at libero id erat egestas rutrum vel at lorem. Nulla quam quam, molestie sit amet nibh quis, bibendum aliquet ex. Curabitur ultrices dui odio, eget ullamcorper nulla accumsan id.</p> 
			
			</article>

			<article id="article1" class="wrapper-feature">
			
				<h1>Wealth/Income Opportunity</h1>

				<h4>&ldquo;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit&#8230&rdquo;</h4>

				<h4>&ldquo;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain&#8230&rdquo;</h4>

				<p><span class="dropcap">L</span>orem ipsum dolor sit amet, consectetur adip<strong>*iscing elit. Sed in nisi urna*</strong>. Aliquam vestibulum aliquam iaculis. Nunc eu tellus varius dui iaculis cursus id at sem. AW AT AVestibulum sollicitudin dapibus libero nec consectetur. Donec mi urna, dictum venenatis molestie et, euismod sit amet arcu. Suspendisse eu ultrices quam. In elementum ex venenatis nisi cursus bibendum. Duis et mattis tortor, id mattis sem. Praesent in nulla sed massa interdum congue.</p> 

				<p>Nullam fringilla blandit pulvinar. Donec hendrerit orci vitae eleifend fermentum. Quisque vel sodales ante, et iaculis diam. Nunc ullamcorper quam nunc. Donec at libero id erat egestas rutrum vel at lorem. Nulla quam quam, molestie sit amet nibh quis, bibendum aliquet ex. Curabitur ultrices dui odio, eget ullamcorper nulla accumsan id.</p> 

				<p>Quisque quis orci massa. Proin sollicitudin euismod velit ut porttitor. Donec dictum scelerisque congue. Phasellus sed fermentum felis. Vivamus dictum nisl pulvinar nisl pellentesque vulputate. Pellentesque vel efficitur nibh, vehicula rutrum ligula. Suspendisse eget pellentesque orci. Suspendisse massa nisl, pellentesque at egestas vel, hendrerit at est. Aliquam nec enim est. Donec blandit mi non purus dapibus, nec tincidunt tortor volutpat. Aenean elementum quam in sagittis volutpat. Etiam aliquam, dui a elementum commodo, ipsum nisi dapibus odio, eget consectetur ex lacus ut dui.</p> 

				<p>Cras lectus enim, lacinia eu magna tempor, tempor tempus felis. Vestibulum ut dignissim libero, id mattis mi. Suspendisse feugiat mauris eros, non imperdiet lorem porttitor in. Nam in ante eu dui interdum consectetur et vitae nibh. Suspendisse ac dui justo. Quisque lobortis arcu quis sem vehicula, ut ornare neque facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur quis ultricies quam. Proin scelerisque nisl ac nibh accumsan vulputate.</p> 

				<p>Pellentesque finibus auctor velit, sed sodales nulla pretium id. Praesent ac nibh porttitor, varius nibh sit amet, placerat massa. Pellentesque sed libero vel massa molestie convallis sit amet a ante. Sed viverra egestas tortor, et condimentum purus venenatis ac. Etiam et urna eleifend, viverra ipsum eu, tincidunt tellus. In vestibulum congue nibh nec facilisis. Ut sapien magna, tempor quis quam porta, bibendum semper sapien. Nullam vitae leo faucibus, accumsan purus eget, tincidunt urna. Praesent viverra tincidunt nunc, at sollicitudin metus pharetra at. Proin et lorem sed diam dapibus mattis sed at dolor. Morbi semper tellus vitae lacus hendrerit, eleifend molestie ante tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a velit accumsan orci tristique auctor. Nunc tincidunt scelerisque libero quis fringilla.</p> 

				<a href="#">help@lipsum.com</a>
			</article> <!-- wrapper-feature -->
		
			<article id="article2" class="wrapper-feature">
			
				<h1>Wealth/Income Opportunity</h1>

				<img id="photo-money1" src="img/photo-money.jpg" alt="photo of money">
				
				<p><span class="dropcap">I</span>psum dolor sit amet, consectetur adipiscing elit. Sed in nisi urna. Aliquam vestibulum aliquam iaculis. Nunc eu tellus varius dui iaculis cursus id at sem. Vestibulum sollicitudin dapibus libero nec consectetur. Donec mi urna, dictum venenatis molestie et, euismod sit amet arcu. Suspendisse eu ultrices quam. In elementum ex venenatis nisi cursus bibendum. Duis et mattis tortor, id mattis sem. Praesent in nulla sed massa interdum congue.</p> 

				<p>Nullam fringilla blandit pulvinar. Donec hendrerit orci vitae eleifend fermentum. Quisque vel sodales ante, et iaculis diam. Nunc ullamcorper quam nunc. Donec at libero id erat egestas rutrum vel at lorem. Nulla quam quam, molestie sit amet nibh quis, bibendum aliquet ex. Curabitur ultrices dui odio, eget ullamcorper nulla accumsan id.</p> 

				<p>Quisque quis orci massa. Proin sollicitudin euismod velit ut porttitor. Donec dictum scelerisque congue. Phasellus sed fermentum felis. Vivamus dictum nisl pulvinar nisl pellentesque vulputate. Pellentesque vel efficitur nibh, vehicula rutrum ligula. Suspendisse eget pellentesque orci. Suspendisse massa nisl, pellentesque at egestas vel, hendrerit at est. Aliquam nec enim est. Donec blandit mi non purus dapibus, nec tincidunt tortor volutpat. Aenean elementum quam in sagittis volutpat. Etiam aliquam, dui a elementum commodo, ipsum nisi dapibus odio, eget consectetur ex lacus ut dui.</p> 

				<p>Cras lectus enim, lacinia eu magna tempor, tempor tempus felis. Vestibulum ut dignissim libero, id mattis mi. Suspendisse feugiat mauris eros, non imperdiet lorem porttitor in. Nam in ante eu dui interdum consectetur et vitae nibh. Suspendisse ac dui justo. Quisque lobortis arcu quis sem vehicula, ut ornare neque facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur quis ultricies quam. Proin scelerisque nisl ac nibh accumsan vulputate.</p> 

				<p>Pellentesque finibus auctor velit, sed sodales nulla pretium id. Praesent ac nibh porttitor, varius nibh sit amet, placerat massa. Pellentesque sed libero vel massa molestie convallis sit amet a ante. Sed viverra egestas tortor, et condimentum purus venenatis ac. Etiam et urna eleifend, viverra ipsum eu, tincidunt tellus. In vestibulum congue nibh nec facilisis. Ut sapien magna, tempor quis quam porta, bibendum semper sapien. Nullam vitae leo faucibus, accumsan purus eget, tincidunt urna. Praesent viverra tincidunt nunc, at sollicitudin metus pharetra at. Proin et lorem sed diam dapibus mattis sed at dolor. Morbi semper tellus vitae lacus hendrerit, eleifend molestie ante tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a velit accumsan orci tristique auctor. Nunc tincidunt scelerisque libero quis fringilla.</p> 

				<a href="#">help@lipsum.com</a>
			</article> <!-- wrapper-feature -->
		
			<article id="article3" class="wrapper-feature">
			
				<h1>Wealth/Income Opportunity</h1>

				<h4>&ldquo;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit&#8230&rdquo;</h4>

				<h4>&ldquo;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain&#8230&rdquo;</h4>

				<p><span class="dropcap">D</span>olor sit amet, consectetur adipiscing elit. Sed in nisi urna. Aliquam vestibulum aliquam iaculis. Nunc eu tellus varius dui iaculis cursus id at sem. Vestibulum sollicitudin dapibus libero nec consectetur. Donec mi urna, dictum venenatis molestie et, euismod sit amet arcu. Suspendisse eu ultrices quam. In elementum ex venenatis nisi cursus bibendum. Duis et mattis tortor, id mattis sem. Praesent in nulla sed massa interdum congue.</p> 

				<p>Nullam fringilla blandit pulvinar. Donec hendrerit orci vitae eleifend fermentum. Quisque vel sodales ante, et iaculis diam. Nunc ullamcorper quam nunc. Donec at libero id erat egestas rutrum vel at lorem. Nulla quam quam, molestie sit amet nibh quis, bibendum aliquet ex. Curabitur ultrices dui odio, eget ullamcorper nulla accumsan id.</p> 

				<p>Quisque quis orci massa. Proin sollicitudin euismod velit ut porttitor. Donec dictum scelerisque congue. Phasellus sed fermentum felis. Vivamus dictum nisl pulvinar nisl pellentesque vulputate. Pellentesque vel efficitur nibh, vehicula rutrum ligula. Suspendisse eget pellentesque orci. Suspendisse massa nisl, pellentesque at egestas vel, hendrerit at est. Aliquam nec enim est. Donec blandit mi non purus dapibus, nec tincidunt tortor volutpat. Aenean elementum quam in sagittis volutpat. Etiam aliquam, dui a elementum commodo, ipsum nisi dapibus odio, eget consectetur ex lacus ut dui.</p> 

				<p>Cras lectus enim, lacinia eu magna tempor, tempor tempus felis. Vestibulum ut dignissim libero, id mattis mi. Suspendisse feugiat mauris eros, non imperdiet lorem porttitor in. Nam in ante eu dui interdum consectetur et vitae nibh. Suspendisse ac dui justo. Quisque lobortis arcu quis sem vehicula, ut ornare neque facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur quis ultricies quam. Proin scelerisque nisl ac nibh accumsan vulputate.</p> 

				<p>Pellentesque finibus auctor velit, sed sodales nulla pretium id. Praesent ac nibh porttitor, varius nibh sit amet, placerat massa. Pellentesque sed libero vel massa molestie convallis sit amet a ante. Sed viverra egestas tortor, et condimentum purus venenatis ac. Etiam et urna eleifend, viverra ipsum eu, tincidunt tellus. In vestibulum congue nibh nec facilisis. Ut sapien magna, tempor quis quam porta, bibendum semper sapien. Nullam vitae leo faucibus, accumsan purus eget, tincidunt urna. Praesent viverra tincidunt nunc, at sollicitudin metus pharetra at. Proin et lorem sed diam dapibus mattis sed at dolor. Morbi semper tellus vitae lacus hendrerit, eleifend molestie ante tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a velit accumsan orci tristique auctor. Nunc tincidunt scelerisque libero quis fringilla.</p> 

				<a href="#">help@lipsum.com</a>
			</article> <!-- wrapper-feature -->
		
			<article id="article4" class="wrapper-feature">
			
				<h1>Wealth/Income Opportunity</h1>

				<img id="photo-money2" src="img/photo-money.jpg" alt="photo of money">
				
				<p><span class="dropcap">A</span>met, consectetur adipiscing elit. Sed in nisi urna. Aliquam vestibulum aliquam iaculis. Nunc eu tellus varius dui iaculis cursus id at sem. Vestibulum sollicitudin dapibus libero nec consectetur. Donec mi urna, dictum venenatis molestie et, euismod sit amet arcu. Suspendisse eu ultrices quam. In elementum ex venenatis nisi cursus bibendum. Duis et mattis tortor, id mattis sem. Praesent in nulla sed massa interdum congue.</p> 

				<p>Nullam fringilla blandit pulvinar. Donec hendrerit orci vitae eleifend fermentum. Quisque vel sodales ante, et iaculis diam. Nunc ullamcorper quam nunc. Donec at libero id erat egestas rutrum vel at lorem. Nulla quam quam, molestie sit amet nibh quis, bibendum aliquet ex. Curabitur ultrices dui odio, eget ullamcorper nulla accumsan id.</p> 

				<p>Quisque quis orci massa. Proin sollicitudin euismod velit ut porttitor. Donec dictum scelerisque congue. Phasellus sed fermentum felis. Vivamus dictum nisl pulvinar nisl pellentesque vulputate. Pellentesque vel efficitur nibh, vehicula rutrum ligula. Suspendisse eget pellentesque orci. Suspendisse massa nisl, pellentesque at egestas vel, hendrerit at est. Aliquam nec enim est. Donec blandit mi non purus dapibus, nec tincidunt tortor volutpat. Aenean elementum quam in sagittis volutpat. Etiam aliquam, dui a elementum commodo, ipsum nisi dapibus odio, eget consectetur ex lacus ut dui.</p> 

				<p>Cras lectus enim, lacinia eu magna tempor, tempor tempus felis. Vestibulum ut dignissim libero, id mattis mi. Suspendisse feugiat mauris eros, non imperdiet lorem porttitor in. Nam in ante eu dui interdum consectetur et vitae nibh. Suspendisse ac dui justo. Quisque lobortis arcu quis sem vehicula, ut ornare neque facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur quis ultricies quam. Proin scelerisque nisl ac nibh accumsan vulputate.</p> 

				<p>Pellentesque finibus auctor velit, sed sodales nulla pretium id. Praesent ac nibh porttitor, varius nibh sit amet, placerat massa. Pellentesque sed libero vel massa molestie convallis sit amet a ante. Sed viverra egestas tortor, et condimentum purus venenatis ac. Etiam et urna eleifend, viverra ipsum eu, tincidunt tellus. In vestibulum congue nibh nec facilisis. Ut sapien magna, tempor quis quam porta, bibendum semper sapien. Nullam vitae leo faucibus, accumsan purus eget, tincidunt urna. Praesent viverra tincidunt nunc, at sollicitudin metus pharetra at. Proin et lorem sed diam dapibus mattis sed at dolor. Morbi semper tellus vitae lacus hendrerit, eleifend molestie ante tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a velit accumsan orci tristique auctor. Nunc tincidunt scelerisque libero quis fringilla.</p> 

				<a href="#">help@lipsum.com</a>
			</article> <!-- wrapper-feature -->
			
			<article id="top200mlm" class="wrapper-feature">
			
				<h1>MLM Company Rankings</h1>
				
				<ol>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					<li>MLM Company</li>
					
				</ol>
			</article>
			
			<article id="inspired" class="wrapper-feature">
			
				<h1>Inspired</h1>

				<img id="photo-money2" src="img/photo-money.jpg" alt="photo of money">
				
				<p><span class="dropcap">A</span>met, consectetur adipiscing elit. Sed in nisi urna. Aliquam vestibulum aliquam iaculis. Nunc eu tellus varius dui iaculis cursus id at sem. Vestibulum sollicitudin dapibus libero nec consectetur. Donec mi urna, dictum venenatis molestie et, euismod sit amet arcu. Suspendisse eu ultrices quam. In elementum ex venenatis nisi cursus bibendum. Duis et mattis tortor, id mattis sem. Praesent in nulla sed massa interdum congue.</p> 

				<p>Nullam fringilla blandit pulvinar. Donec hendrerit orci vitae eleifend fermentum. Quisque vel sodales ante, et iaculis diam. Nunc ullamcorper quam nunc. Donec at libero id erat egestas rutrum vel at lorem. Nulla quam quam, molestie sit amet nibh quis, bibendum aliquet ex. Curabitur ultrices dui odio, eget ullamcorper nulla accumsan id.</p> 

				<p>Quisque quis orci massa. Proin sollicitudin euismod velit ut porttitor. Donec dictum scelerisque congue. Phasellus sed fermentum felis. Vivamus dictum nisl pulvinar nisl pellentesque vulputate. Pellentesque vel efficitur nibh, vehicula rutrum ligula. Suspendisse eget pellentesque orci. Suspendisse massa nisl, pellentesque at egestas vel, hendrerit at est. Aliquam nec enim est. Donec blandit mi non purus dapibus, nec tincidunt tortor volutpat. Aenean elementum quam in sagittis volutpat. Etiam aliquam, dui a elementum commodo, ipsum nisi dapibus odio, eget consectetur ex lacus ut dui.</p> 

				<p>Cras lectus enim, lacinia eu magna tempor, tempor tempus felis. Vestibulum ut dignissim libero, id mattis mi. Suspendisse feugiat mauris eros, non imperdiet lorem porttitor in. Nam in ante eu dui interdum consectetur et vitae nibh. Suspendisse ac dui justo. Quisque lobortis arcu quis sem vehicula, ut ornare neque facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur quis ultricies quam. Proin scelerisque nisl ac nibh accumsan vulputate.</p> 

				<p>Pellentesque finibus auctor velit, sed sodales nulla pretium id. Praesent ac nibh porttitor, varius nibh sit amet, placerat massa. Pellentesque sed libero vel massa molestie convallis sit amet a ante. Sed viverra egestas tortor, et condimentum purus venenatis ac. Etiam et urna eleifend, viverra ipsum eu, tincidunt tellus. In vestibulum congue nibh nec facilisis. Ut sapien magna, tempor quis quam porta, bibendum semper sapien. Nullam vitae leo faucibus, accumsan purus eget, tincidunt urna. Praesent viverra tincidunt nunc, at sollicitudin metus pharetra at. Proin et lorem sed diam dapibus mattis sed at dolor. Morbi semper tellus vitae lacus hendrerit, eleifend molestie ante tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a velit accumsan orci tristique auctor. Nunc tincidunt scelerisque libero quis fringilla.</p> 

				<a href="#">help@lipsum.com</a>
			</article> <!-- wrapper-feature -->
			
			<article id="sales200" class="wrapper-feature">
			
				<h1>Sales/MLM Leaders</h1>
				
				<ol>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>		
					
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
										
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
										
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
										
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>					
					
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
										
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
										
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
										
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>					
					
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
										
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>					
					
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>					
					
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>					
					
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>					
					
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
										
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>					
					
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>					
					
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>					
					
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>
					<li>Salesman, MLM Company</li>					
					
				</ol>
			</article>
			
		</div> <!-- wrapper opportunities -->
		
		<div id="contact" class="wrapper-beach">
		
			<img id="photo-beach" src="img/photo-beach.jpg" alt="photo of beach">
			
			<div class="container">
			
				<form id="emailForm" method="post">
				
					<fieldset>
						<div>
							<label for="contact-name">Name:  </label>
							<input type="text" name="name" id="contact-name" placeholder="Your Name">
						</div>
						
						<div>
							<label for="contact-email">Email:  </label>
							<input type="email" name="email" id="contact-email" placeholder="Your Email">
						</div>
						
						<div>
							<label for="contact-subject">Subject:</label>
							<input type="text" name="subject" id="contact-subject" placeholder="Subject">
						</div>
					</fieldset>
				
					<fieldset>
						<div>
							<textarea name="textArea" id="contact-textArea" placeholder="Your message"></textarea>
						</div>
					</fieldset>
		  
					<button type="submit" class="submit">Send Message</button>
				</form>
			</div>
		</div> <!-- wrapper-beach -->
		<div  class="alert-container" id="contactAlertContainer">
			<?
				echo $errorMessage;
				echo $successMessage;
			?>
		</div>	
	
	
	</div> <!-- wrapper-top -->

	<div class="floating-container">
	
		<div class="container1">
			<span>Unlock the power of</span>
			<h1>NUMBER1EARNER.com</h1>
			<span>create a free account now</span>
		</div> <!-- container1 -->
			
		<div class="container2">
			<form action="sqeeze.php" method="post">
					  
				<fieldset class="info"> 
					<label for="name">Name:</label>
					<input type="text" id="name" name="user_name" placeholder="Name">
				
					<label for="email">Email:</label>
					<input type="email" id="mail" name="user_email" placeholder="Email">
				
					<label for="country">Country:</label>
					<input type="text" id="country" name="country" placeholder="Country">
				
					<label for="state">State:</label>
					<input type="text" id="state" name="state" placeholder="State/province">
				</fieldset>
			  
				<button class="submit" id="squeeze-submit" type="submit">Register</button>
			  
			</form>
			
		</div> <!-- container2 -->
		
		<button class="opt-out">X</button>
		
	</div> <!-- floating container -->
		
	<script 
		src="https://code.jquery.com/jquery-3.1.0.min.js"   
		integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   
		crossorigin="anonymous"></script>	
	<script src="js/script.js"></script>
</body>
</html>