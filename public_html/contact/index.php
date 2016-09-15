<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="x-ua-compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- ADD OTHER CSS  FILES HERE -->
		<!--Custom CSS Goes Here-->
		<link rel="stylesheet" href="../css/style.css" type="text/css"/>

		<!--Google Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Pacifico|Quicksand" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--jquery-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="../js/form-validate.js"></script>

		<!--Google Recaptcha bootcamp coders-->
		<script src='https://www.google.com/recaptcha/api.js'></script>

<!---->
<!--		<script src='https://www.google.com/recaptcha/api.js'></script>-->
		<!--Google Recaptcha malvardev-->


		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>


		<!--------------------------Font Awesome Link------------------>
		<script src="https://use.fontawesome.com/d0e15db066.js"></script>

		<!--Add Your Custom JS FILES HERE -->
		<script src="../js/custom.js" type="text/javascript"></script>
		<title>Monica Alvarez</title>
	</head>

	<!-------------Whole Body Container--------------------------->
	<body class="sfooter">
		<div class="sfooter-content">
			<header>
				<!--				<div class="content-box" id="contact-header"></div>-->
				<div class="jumbotron" id="contact-page-jumbotron">
					<div class="row">
						<div class="container">
							<h1>Contact Me</h1>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="col-md-12">
						<nav id="navbar-main" class="navbar navbar-default">
							<div class="container">
								<div class="row" id="linklist">
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
												  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->

									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
											<!--											<li class="active"><a href="#">About Monica<span class="sr-only">(current)</span></a>-->
											<!--											</li>-->
											<li><a href="../index.php">About Me</a></li>
											<li><a href="../portfolio">Portfolio</a></li>
											<li><a href="index.php">Contact Me</a></li>
										</ul>
										<!--								<ul class="nav navbar-nav navbar-right">-->
										<!--									<li><a href="#">Contact Me</a></li>-->
										<!--								</ul>-->
									</div>
								</div>
							</div>
						</nav>
					</div>
				</div>

			</header>


			<main>
				<div class="container make-it-work">
					<div class="row row-flex content-wrap">
						<div class=" col-xs-12 col-sm-12 col-md-4 col-md-push-8">
							<div class="well" id="lets-talk">
								<h1>Let's Talk</h1>
								<div class="content-box">
									<p>If you have a website or project that you've been thinking about, I'd love to help you
										create it! Leave me a message through this form and we can talk ideas, design, and pricing.</p>
									<p>To learn more about my work and background, feel free to check out my GitHub and my
										LinkedIn profiles.</p>
									<div align="center">
										<a href="https://github.com/mmalvar13" target="blank">
											<i class="fa fa-github-square fa fa-camera-retro fa-4x icons" aria-hidden="true"></i>
										</a>

										<a href="https://www.linkedin.com/in/monica-alvarez-ba70a48b
" target="blank">
											<i class="fa fa-linkedin-square fa fa-camera-retro fa-4x icons" aria-hidden="true"></i>
										</a>
									</div>
									<h3>I look forward to working with you!</h3>
								</div>
							</div>

						</div>

						<div class="col-xs-12 col-md-8 col-sm-pull-4 content-panel">
							<div>
								<!----Begin Contact Form---->
								<form id="contact-form" action="../php/mailer.php" method="POST" novalidate>
									<div class="form-group">
										<label for="name">
											Name
											<span class="text-danger">*</span>
										</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-user" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="name" name="name" placeholder="Name">
										</div>
									</div>

									<div class="form-group">
										<label for="email">
											Email
											<span class="text-danger">*</span>
										</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
											<input type="email" class="form-control" id="email" name="email" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="subject">
											Subject
											<span class="text-danger">*</span>
										</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-pencil" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="subject" name="subject"
													 placeholder="Subject">
										</div>
									</div>
									<div class="form-group">
										<label for="message">
											Message
											<span class="text-danger">*</span>
										</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-comment" aria-hidden="true"></i>
											</div>
											<textarea class="form-control" rows="5" id="message" name="message"
														 placeholder="Message (2000 characters max)"></textarea>
										</div>
									</div>

									<!--Google Recaptcha bootcamp coders-->
<!--									<div class="g-recaptcha" data-sitekey="6Lc5rykTAAAAAM40hFWgxhull2Wqn1YT7N-Zf9T4"></div>-->

									<!--Google Recaptcha MalvarDev-->
									<div class="g-recaptcha" data-sitekey="6LetrykTAAAAAG-aEjK4X0nJlZy3YyyF-asmW14P"></div>

									<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i>Send</button>
									<button class="btn btn-warning" type="reset"><i class="fa fa-paper-ban"></i>Reset</button>

								</form>

								<!--empty area for form error/success output-->
								<div class="row">
									<div class="col-xs-12 col-md-5">
										<div id="output-area"></div>
									</div>
								</div>

							</div>


						</div>

					</div>
					</div>
					<div class="container">
						<!--					<div class="well" id="contact-form-area">-->
						<!--						<h1>contact form here</h1>-->
						<!--					</div>-->
						<!--				</div>-->


			</main>
		</div>
		<footer>
			<div class="container" id="footy">
				<div class="row">
					<div class="col-md-12">
						<div class="pull-right">
							<a href="https://github.com/mmalvar13" target="blank">
								<i class="fa fa-github-square fa fa-camera-retro fa-3x" aria-hidden="true"></i>
							</a>

							<a href="https://www.linkedin.com/in/monica-alvarez-ba70a48b
" target="blank">
								<i class="fa fa-linkedin-square fa fa-camera-retro fa-3x" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</body>