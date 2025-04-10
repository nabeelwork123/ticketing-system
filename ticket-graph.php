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
								<li class="breadcrumb-item active" aria-current="page">Tickect</li>
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

					<!-- Sales Overview -->
					<div class="col-xl-5 d-flex">
						<div class="card flex-fill">
							<div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
								<h5 class="mb-2">Tickets</h5>
								<div class="d-flex align-items-center">
									<div class="dropdown mb-2">
										<a href="javascript:void(0);"
											class="dropdown-toggle btn btn-white border-0 btn-sm d-inline-flex align-items-center fs-13 me-2"
											data-bs-toggle="dropdown">
											All Departments
										</a>
										<ul class="dropdown-menu  dropdown-menu-end p-3">
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">UI/UX
													Designer</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">HR
													Manager</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">Junior
													Tester</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<div class="d-flex align-items-center mb-1">
										<p class="fs-13 text-gray-9 me-3 mb-0"><i
												class="ti ti-square-filled me-2 text-primary"></i>Income</p>
										<p class="fs-13 text-gray-9 mb-0"><i
												class="ti ti-square-filled me-2 text-gray-2"></i>Expenses</p>
									</div>
									<p class="fs-13 mb-1">Last Updated at 11:30PM</p>
								</div>
								<div id="sales-income"></div>
							</div>
						</div>
					</div>
					<!-- /Sales Overview -->
					<div class="col-xl-7">
						<div class="row">


							<!-- BOX CARD -->
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="card flex-fill">
									<div class="card-body d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center overflow-hidden">
											<span class="avatar avatar-lg bg-primary flex-shrink-0">
												<i class="ti ti-building fs-16"></i>
											</span>
											<div class="ms-2 overflow-hidden">
												<h4>27</h4>
												<p class="fs-12 fw-medium mb-1 text-truncate">Active</p>
											</div>
										</div>
										<div id="total-chart"></div>
									</div>
								</div>
							</div>
							<!-- BOX CARD -->


							<!-- BOX CARD -->
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="card flex-fill">
									<div class="card-body d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center overflow-hidden">
											<span class="avatar avatar-lg bg-primary flex-shrink-0">
												<i class="ti ti-building fs-16"></i>
											</span>
											<div class="ms-2 overflow-hidden">
												<h4>18</h4>
												<p class="fs-12 fw-medium mb-1 text-truncate">Solved</p>
											</div>
										</div>
										<div id="total-chart"></div>
									</div>
								</div>
							</div>
							<!-- BOX CARD -->

							<!-- BOX CARD -->
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="card flex-fill">
									<div class="card-body d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center overflow-hidden">
											<span class="avatar avatar-lg bg-primary flex-shrink-0">
												<i class="ti ti-building fs-16"></i>
											</span>
											<div class="ms-2 overflow-hidden">
												<h4>12</h4>
												<p class="fs-12 fw-medium mb-1 text-truncate">Closed</p>
											</div>
										</div>
										<div id="total-chart"></div>
									</div>
								</div>
							</div>
							<!-- BOX CARD -->

							<!-- BOX CARD -->
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="card flex-fill">
									<div class="card-body d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center overflow-hidden">
											<span class="avatar avatar-lg bg-primary flex-shrink-0">
												<i class="ti ti-building fs-16"></i>
											</span>
											<div class="ms-2 overflow-hidden">
												<h4>3</h4>
												<p class="fs-12 fw-medium mb-1 text-truncate">Open</p>
											</div>
										</div>
										<div id="total-chart"></div>
									</div>
								</div>
							</div>
							<!-- BOX CARD -->

							<!-- BOX CARD -->
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="card flex-fill">
									<div class="card-body d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center overflow-hidden">
											<span class="avatar avatar-lg bg-primary flex-shrink-0">
												<i class="ti ti-building fs-16"></i>
											</span>
											<div class="ms-2 overflow-hidden">
												<h4>5</h4>
												<p class="fs-12 fw-medium mb-1 text-truncate">Critical</p>
											</div>
										</div>
										<div id="total-chart"></div>
									</div>
								</div>
							</div>
							<!-- BOX CARD -->

							<!-- BOX CARD -->
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="card flex-fill">
									<div class="card-body d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center overflow-hidden">
											<span class="avatar avatar-lg bg-primary flex-shrink-0">
												<i class="ti ti-building fs-16"></i>
											</span>
											<div class="ms-2 overflow-hidden">
												<h4>7</h4>
												<p class="fs-12 fw-medium mb-1 text-truncate">High</p>
											</div>
										</div>
										<div id="total-chart"></div>
									</div>
								</div>
							</div>
							<!-- BOX CARD -->



						</div>

						<div class="row mb-2">
							<!-- Chart -->
							<div class="col-md-12">
								<div class="card overflow-hidden" style="height: 220px;">
									<div class="card-header">
										<h5 class="card-title">Avg. Response Time</h5>
									</div>
									<div class="card-body">
										<div id="s-line-area" class="chart-set"></div>
									</div>
								</div>
							</div>
							<!-- /Chart -->

						</div>
					</div>
				</div>
				<!-- /Leaves Info -->

				<div class="row">
					<!-- Chart -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Pie Chart</div>
							</div>
							<div class="card-body">
							<div id="mixed-chart" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Pie Chart</div>
							</div>
							<div class="card-body chart-set">
							<div id="donut-chart" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->
				</div>





				<!-- /Page Wrapper -->



			</div>
			<!-- /Main Wrapper -->
		</div>
	</div>
	<?php include 'includes/script.php'; ?>


</body>

</html>