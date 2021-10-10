  <?php include('header.php')?>
  <?php
			   include_once 'db.php';
			   $result = mysqli_query($con,"SELECT * FROM news");
			
				 $row=mysqli_fetch_array($result);
			   
			   ?>
  <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
            <a class="navbar-brand logo-brand" href="index.html">Gambo Supermarket</a>
			<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/index.html" class="frnt-link"><i class="fas fa-external-link-alt"></i>Home</a>
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
				<!-- sidebar -->
				<?php include('sidebar.php')?>
				<!-- sidebar -->
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Dashboard</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                  
							<div class="col-xl-12 col-md-12">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Recent Orders</h4>
										<a href="orders.html" class="view-btn hover-btn">View All</a> 
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:130px">Order ID</th>
														<th>Item</th>
														<th style="width:200px">Date</th>
														<th style="width:300px">Address</th>
														<th style="width:130px">Status</th>
														<th style="width:130px">Total</th>
														<th style="width:100px">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php if(!empty($row))
												print_r($row);
												
													{ foreach($row as $r=>$val)
														print_r($val);
													{ ?>
													<tr>
													<td><?php echo $row['title']; ?></td>
				   <td><?php echo $r['description'] ; ?></td>
				   <td><?php echo $r['us_name']; ?></td>
				   <td><?php echo $r['us_email'] ; ?></td>
				   <td><?php echo $r['type'] ; ?></td>
				   <td><?php echo $r['created_at']; ?></td>
			
													</tr>
													<?php }}?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </main>
               <?php include('footer.php')?>

			   <?php
			   include_once 'db.php';
			   $result = mysqli_query($con,"SELECT * FROM news");
			   if (mysqli_num_rows($result) > 0) {
				 $row=mysqli_fetch_array($result);
				   print_r($row);die;
			   ?>

				 <table>
				 <tr>
				   <td>Title</td>
				   <td>Description</td>
				   <td>user name</td>
				   <td>Email id</td>
				   <td>type</td>
				   <td>date</td>
				</tr>

			   <?php
			   $i=0;
			   while($r = mysqli_fetch_array($result)) {
			   ?>

			   <tr>
				   <td><?php echo $r['title']; ?></td>
				   <td><?php echo $r['description'] ; ?></td>
				   <td><?php echo $r['us_name']; ?></td>
				   <td><?php echo $r['us_email'] ; ?></td>
				   <td><?php echo $r['type'] ; ?></td>
				   <td><?php echo $r['created_at']; ?></td>
			   </tr>

			   <?php
			   $i++;
			   }
			   ?>

			   </table>
				<?php
			   }

			   else{
				   echo "No result found";
			   }
			   ?>
				</body>
			   </html>
			 ?>
