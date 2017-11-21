<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Kaizen - Error</title>
		<meta name="description" content="Cloud Admin Panel" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Bootstrap, Light weight Admin Dashboard,Light weight, Light weight Admin, Light weight Dashboard" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="<?php echo URL ?>public/error/img/favicon.html">

		<!-- Bootstrap CSS -->
		<link href="<?php echo URL ?>public/error/css/bootstrap.min.css" rel="stylesheet" media="screen">

		<!-- Main CSS -->
		<link href="<?php echo URL ?>public/error/css/main.css" rel="stylesheet" media="screen">

		<!-- Font Awesome -->
		<link href="<?php echo URL ?>public/error/fonts/font-awesome.min.css" rel="stylesheet">


	</head>

	<body style="background: #398ab9;">

		<!-- Container fluid starts -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-lg-push-4 col-md-push-3 col-md-6 col-sm-push-3 col-sm-6 col-sx-12">
					<!-- Error container starts -->
					<div class="error-container">
						<h1 class="text-white">Oops!</h1>
						<h2 class="text-white">404 Not Found</h2>
						<div class="error-details text-white">
								Lo sentimos, ¡no se ha encontrado la página solicitada!
						</div>
						<div class="error-actions">
							<a href="<?php echo URL; ?>Principal" class="btn btn-info btn-rounded">
								<i class="fa fa-home"></i> Volver a principal
							</a>
							<!-- <button class="btn btn-success btn-rounded" data-toggle="modal" data-target="#modalSm">Support</button> -->

							<!-- Modal -->
							<div class="modal fade" id="modalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="myModalLabel">Fill Form</h4>
										</div>
										<div class="modal-body">

											<!-- Row Starts -->
											<div class="row">
												<div class="col-xs-12">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Subject">
													</div>
												</div>
											</div>
											<!-- Row Ends -->

											<!-- Row Starts -->
											<div class="row">
												<div class="col-xs-6">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="First Name">
													</div>
												</div>
												<div class="col-xs-6">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Last Name">
													</div>
												</div>
											</div>
											<!-- Row Ends -->

											<!-- Row Starts -->
											<div class="row">
												<div class="col-xs-6">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Email">
													</div>
												</div>
												<div class="col-xs-6">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Phone Number">
													</div>
												</div>
											</div>
											<!-- Row Ends -->

											<!-- Row Starts -->
											<div class="row">
												<div class="col-xs-12">
													<div class="form-group no-margin">
														<textarea class="form-control" rows="3"></textarea>
													</div>
												</div>
											</div>
											<!-- Row Ends -->
										</div>
										<div class="modal-footer no-margin">
											<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
											<button type="button" class="btn btn-success">Save</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Error Container ends -->
				</div>
			</div>
		</div>
		<!-- Container fluid starts -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo URL ?>public/error/js/jquery.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo URL ?>public/error/js/bootstrap.min.js"></script>
	</body>

<!-- Mirrored from bootstrap.gallery/cloudV3/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2017 01:44:12 GMT -->
</html>
