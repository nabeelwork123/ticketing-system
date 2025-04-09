<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Ticketing System</title>


	<?php include 'includes/style.php'; ?>

</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">



		<?php include 'includes/header.php'; ?>
		<?php include 'includes/sidebar.php'; ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Dashboard</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="/index"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Dashboard
								</li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
							</ol>
						</nav>
					</div>
					<!-- <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
					<div class="me-2 mb-2">
						<div class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
								<i class="ti ti-file-export me-1"></i>Export
							</a>
							<ul class="dropdown-menu  dropdown-menu-end p-3">
								<li>
									<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
								</li>
							</ul>
						</div>
					</div>
					<div class="mb-2">
						<a href="#" data-bs-toggle="modal" data-bs-target="#add_leaves" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Leave</a>
					</div>
					<div class="head-icons ms-2">
						<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
							<i class="ti ti-chevrons-up"></i>
						</a>
					</div>
				</div> -->
				</div>
				<!-- /Breadcrumb -->

				<!-- Leaves Info -->
				<div class="row">
					<div class="col-xl-4 col-md-6">
						<div class="card flex-fill">
							<div class="card-body text-center">
								<span class="avatar rounded-circle bg-primary  mb-2">
									<i class="ti ti-calendar-share fs-16"></i>
								</span>
								<h6 class="fs-22 fw-medium text-dark mb-1">2458</h6>
								<span class="fs-14 text-body">Total No. of Tickets</span>

								<!-- <a href="" class="link-default">View Details</a> -->
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-md-6">
						<div class="card flex-fill">
							<div class="card-body text-center">
								<span class="avatar rounded-circle bg-primary  mb-2">
									<i class="ti ti-calendar-share fs-16"></i>
								</span>
								<h6 class="fs-22 fw-medium text-dark mb-1">2458</h6>
								<span class="fs-14 text-body">Total No. of Tickets</span>

								<!-- <a href="" class="link-default">View Details</a> -->
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-md-6">
						<div class="card flex-fill">
							<div class="card-body text-center">
								<span class="avatar rounded-circle bg-primary  mb-2">
									<i class="ti ti-calendar-share fs-16"></i>
								</span>
								<h6 class="fs-22 fw-medium text-dark mb-0">2458</h6>
								<span class="fs-14 text-body">Total No. of Tickets</span>

								<!-- <a href="" class="link-default">View Details</a> -->
							</div>
						</div>
					</div>

					<!-- <div class="col-xl-3 col-md-6">
						<div class="card flex-fill">
							<div class="card-body text-center">
								<span class="avatar rounded-circle bg-primary  mb-2">
									<i class="ti ti-calendar-share fs-16"></i>
								</span>
								<h6 class="fs-22 fw-medium text-dark mb-1">2458</h6>
								<span class="fs-14 text-body">Total No. of Tickets</span>
							
								<a href="" class="link-default">View Details</a>
							</div>
						</div>
					</div> -->

				</div>
				<!-- /Leaves Info -->


				<div class="row">
					<div class="col-xl-8 col-md-8">
						<div class="card flex-fill">
							<div class="card-body">
								<h3 class="card-title">Estimated of solved Tickets</h3>

							</div>
						</div>
					</div>
					<div class="col-xxl-4 col-lg-4">
						<div class="card flex-fill">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h5>Team Members</h5>
									<div>
										<a href="#" class="btn btn-light btn-sm">View All</a>
									</div>
								</div>
							</div>
							<div class="card-body" style="min-height:500px;overflow-y:auto;">
								<table class="table table-responsive">
									<thead class="bg-white">
										<th>Customer Name</th>
										<th>Tickets</th>
										<th>Location</th>
										<th>Last Reply</th>
									</thead>
								</table>

							</div>
						</div>
					</div>
				</div>


			</div>
			<?php include 'includes/footer.php'; ?>
		</div>
		<!-- /Page Wrapper -->



	</div>
	<!-- /Main Wrapper -->

	<?php include 'includes/script.php'; ?>

</body>

</html>