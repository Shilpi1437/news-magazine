<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gambolthemes.net/html-items/gambo_admin/add_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Aug 2020 17:28:40 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>Gambo Supermarket Admin</title>
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/admin-style.css" rel="stylesheet">

	<!-- Vendor Stylesheets -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

	<!-- froala Editor Stylesheets -->
	<link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/froala_editor.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/froala_style.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/code_view.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/colors.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/emoticons.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/image_manager.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/image.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/line_breaker.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/table.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/char_counter.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/video.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/fullscreen.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/file.css">
	<link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

</head>

<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
		<a class="navbar-brand logo-brand" href="index.html">Gambo Supermarket</a>
		<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
		<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/index.php" class="frnt-link"><i class="fas fa-external-link-alt"></i>Home</a>
		<ul class="navbar-nav ml-auto mr-md-0">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item admin-dropdown-item" href="edit_profile.html">Edit Profile</a>
					<a class="dropdown-item admin-dropdown-item" href="change_password.html">Change Password</a>
					<a class="dropdown-item admin-dropdown-item" href="login.html">Logout</a>
				</div>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<?php include('sidebar.php') ?>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
					<h2 class="mt-30 page-title">Pages</h2>
					<ol class="breadcrumb mb-30">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="pages.html">Pages</a></li>
						<li class="breadcrumb-item active">Add Page</li>
					</ol>
					<form action="/action.php" method="post">
						<div class="row">

							<div class="col-lg-9 col-md-8">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Page Content</h4>
									</div>
									<div class="card-body-table">
										<div class="post-form">
											<div class="form-group">
												<label class="form-label">Title*</label>
												<input type="text" name="title" class="form-control" placeholder="News title here" required>
											</div>
											<div class="form-group">
												<label class="form-label">Content*</label>
												<div class="card card-editor">
													<div class="content-editor">
														<!-- <div id='edit'></div> -->
														<textarea id='edit' name="description" rows="5" cols="20"></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>User Details</h4>
									</div>
									<div class="card-body-table">
										<div class="post-form">
											<div class="form-group">
												<label class="form-label">Name</label>
												<input type="text" name="us_name" class="form-control" placeholder="User Name">
											</div>
											<div class="form-group">
												<label class="form-label"></label>
												<input type="text" name="us_email" class="form-control" placeholder="User Email">
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Publish</h4>
									</div>
									<div class="card-body-table">
										<div class="news-content-right pd-20">
											<div class="custom-control custom-radio">
												<input type="radio" id="customRadio1" name="status" class="custom-control-input">
												<label class="custom-control-label" for="customRadio1">Publish</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" id="customRadio2" name="status" class="custom-control-input">
												<label class="custom-control-label" for="customRadio2">Draft</label>
											</div>
											<button class="save-btn hover-btn" type="submit">Save Changes</button>
										</div>
									</div>
								</div>
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>categeory</h4>
									</div>
									<div class="card-body-table">
										<div class="news-content-right pd-20">
											<div class="form-group">
												<select id="categeory" name="categeory" class="form-control">
													<option selected>--Select--</option>
													<option value="general">General</option>
													<option value="technology">Technology</option>
													<option value="sports">Sports</option>
													<option value="world">World wide</option>

												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Featured Image</h4>
									</div>
									<div class="card-body-table">
										<div class="news-content-right pd-20 text-center">
											<div class="fea-img">
												<img src="images/featured-img.jpg" alt="">
												<div class="img-add">

													<input type="file" name="image" id="file" accept="image/*" />
													<!-- code for upload image -->
													<label for="file">Upload Image</label>
												</div>
												<div class="mt-2">
													<input type="submit" name="submit" class="btn btn-info">
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
					</form>
				</div>
			</main>
			<footer class="py-4 bg-footer mt-auto">
				<div class="container-fluid">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted-1">© 2020 <b>Gambo Supermarket</b>. by <a href="https://themeforest.net/user/gambolthemes">Gambolthemes</a></div>
						<div class="footer-links">
							<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/privacy_policy.html">Privacy Policy</a>
							<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/term_and_conditions.html">Terms &amp; Conditions</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<!-- Javascripts -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="js/scripts.js"></script>

	<!-- froala Editor Javascripts -->
	<script type="text/javascript" src="../../../cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
	<script type="text/javascript" src="../../../cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/froala_editor.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/align.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/code_beautifier.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/code_view.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/colors.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/emoticons.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/draggable.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/font_size.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/font_family.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/image.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/file.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/image_manager.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/line_breaker.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/link.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/lists.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/paragraph_format.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/paragraph_style.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/video.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/table.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/url.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/entities.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/char_counter.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/inline_style.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/save.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/fullscreen.min.js"></script>
	<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/quote.min.js"></script>
	<script>
		(function() {
			new FroalaEditor("#edit", {
				zIndex: 10
			})
		})()
	</script>
</body>

<!-- Mirrored from gambolthemes.net/html-items/gambo_admin/add_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Aug 2020 17:28:40 GMT -->

</html>