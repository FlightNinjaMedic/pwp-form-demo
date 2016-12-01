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
		<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">

		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

		<!-- Our Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery (required for Bootstap's JS plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Custom jQuery Validate -->
		<script src="js/jquery-validate.js" type="text/javascript"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<title>PWP Form Demo</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<header>
				<nav class="navbar navbar-inverse">
					<div class="container">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="https://bootcamp-coders.cnm.edu/class-materials/jquery-validated-captcha-form/" target="_blank">Documentation</a></li>
							<li><a href="https://github.com/rlewis2892/form-demo-jquery" target="_blank">GitHub</a></li>
						</ul>
					</div><!-- /.container -->
				</nav>
			</header>

			<main class="container">
				<h1 class="text-right">Welcome to the Formal Form Demo for PWP!</h1>
				<div class="form-wrap row">
					<div class="col-sm-6 col-sm-offset-6">

						<!-- insert contact form here -->
						<form id="contact-form">
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

							<button class="btn btn-default" type="reset">Reset</button>
							<button class="btn btn-info" type="submit">Submit</button>
						</form>

					</div><!-- /.col-sm-6 -->
				</div><!-- /.row -->
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