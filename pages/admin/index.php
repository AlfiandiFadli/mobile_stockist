<?php include('../admin/akses.php'); ?>
<html>
	<head>
		<title>Selamat Datang</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">
	</head>
	<body>
		<?php include('../navbar.php'); ?>
		<div class="py-5 text-center opaque-overlay bg-primary" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/cover_event.jpg&quot;);">
			<div class="container py-5">
			<div class="row">
				<div class="col-md-12 text-white">
				<h1 class="display-4 mb-4">Selamat Datang <?php echo $_SESSION['admin']; ?> Di Situs MS. Selong</h1>
				<p class="lead mb-5">Semoga anda tetap sehat dan semangat dalam beraktifitas dan juga fokus, teliti dan bahagia.
					<br>Situs ini dibuat bertujuan untuk mempermudah proses pekerjaan MS anda, :-)</p>
				</div>
			</div>
			</div>
		</div>
		<?php include('../footers.php'); ?>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
