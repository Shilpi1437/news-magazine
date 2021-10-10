<?php include('header.php')?>

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
					<form action="action.php" method="post" enctype="multipart/form-data">
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
												<input type="email" name="us_email" class="form-control" placeholder="User Email">
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
												<select id="categeory" name="type" class="form-control">
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
		

	<!-- Javascripts -->
	

	<!-- froala Editor Javascripts -->
	
<?php include('footer.php');?>


