<!DOCTYPE html>
<html>
	<head lang="en">
		<!-- The 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Prata" rel="stylesheet">

		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

		<!-- Our Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery (required for Bootstap's JS plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<title>Formal Form Demo - jQuery</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<header>
				<nav class="navbar navbar-fixed-top navbar-inverse">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!--<a class="navbar-brand" href="/~rlewis37/form-demo-jquery/public_html/">Formal Form Demo (jQuery)</a>-->
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<ul class="nav navbar-nav navbar-right">
								<li><a href="https://bootcamp-coders.cnm.edu/class-materials/jquery-validated-captcha-form/" target="_blank">Documentation</a></li>
								<li><a href="https://github.com/rlewis2892/form-demo-jquery" target="_blank">GitHub</a></li>
							</ul>

						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>

			<main>
				<div class="container text-right welcome">
					<p class="h3"><em>Hello there, good sir!</em></p>
					<h1>Welcome to the Formal Form Demo for jQuery!</h1>
				</div>

				<div class="container form-wrap">
					<div class="row">
						<div class="col-sm-6">

							<!-- insert contact form-->
							<form id="contact-form" action="php/mailer.php" method="POST" novalidate>
								<div class="form-group">
									<label for="name">Name</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope"></i>
										</div>
										<input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
									</div>
								</div>
								<div class="form-group">
									<label for="subject">Subject</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
									</div>
								</div>
								<div class="form-group">
									<label for="message">Message</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment"></i>
										</div>
										<textarea name="message" rows="5" id="message" class="form-control" placeholder="Your Message (2000 charaters max)"></textarea>
									</div>
								</div>

								<!-- google recapcha -->
								<div class="g-recaptcha" data-sitekey="6LdOsykTAAAAAC5cKEWsZGV1aCGudK0IK-F7v5D6"></div>

								<button class="btn btn-default" type="reset">Reset</button>
								<button class="btn btn-info" type="submit">Submit</button>
							</form>

							<!--empty area for form error/success output-->
							<div class="row">
								<div class="col-xs-12">
									<div id="output-area"></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</main>

		</div><!--./sfooter-content-->

		<footer>
			<div class="container">
				<div class="text-center">
					Now With 100% More Fuzzy! =^. .^=
				</div>
			</div>
		</footer>

	</body>
</html>