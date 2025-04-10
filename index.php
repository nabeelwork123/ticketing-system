<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
								<li class="breadcrumb-item active" aria-current="page">Ticket dashboard</li>
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
					<div class="col-xl-3 col-md-6">
						<div class="card flex-fill">
							<div class="card-body text-center">
								<span class="avatar py-2">
									<img src="assets/img/ticketing/icons/Total-tickets.png" class="img-fluid">
								</span>
								<h6 class="fs-22 fw-medium text-dark mb-1">2458</h6>
								<span class="fs-14 text-body">Total No. of tickets</span>

								<!-- <a href="" class="link-default">View Details</a> -->
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6">
						<div class="card flex-fill">
							<div class="card-body text-center">
								<span class="avatar py-2">
									<img src="assets/img/ticketing/icons/new-tickets.png" class="img-fluid">
								</span>
								<h6 class="fs-22 fw-medium text-dark mb-1">2458</h6>
								<span class="fs-14 text-body">New tickets</span>

								<!-- <a href="" class="link-default">View Details</a> -->
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6">
						<div class="card flex-fill">
							<div class="card-body text-center">
								<span class="avatar py-2">
									<img src="assets/img/ticketing/icons/cancel.png" class="img-fluid">
								</span>
								<h6 class="fs-22 fw-medium text-dark mb-0">2458</h6>
								<span class="fs-14 text-body">Closed tickets</span>

								<!-- <a href="" class="link-default">View Details</a> -->
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6">
						<div class="card flex-fill">
							<div class="card-body text-center">
								<span class="avatar py-2">
									<img src="assets/img/ticketing/icons/clock.png" class="img-fluid">
								</span>
								<h6 class="fs-22 fw-medium text-dark mb-0">10:50 min</h6>
								<span class="fs-14 text-body">Average Response Time</span>


							</div>
						</div>
					</div>

				</div>
				<!-- /Leaves Info -->


				<div class="row mb-4">
					<div class="col-xl-12 col-md-12">
						<div class="card flex-fill overflow-hidden">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h3 class="card-title">Average Tickets Created</h3>
									<div class="dropdown mb-2">
										<a href="javascript:void(0);"
											class="btn btn-white border btn-sm d-inline-flex align-items-center"
											data-bs-toggle="dropdown">
											<i class="ti ti-calendar me-1"></i>Last 01 Years
										</a>
										<ul class="dropdown-menu  dropdown-menu-end p-3">
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Month</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Week</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-lg-3 ps-0 align-self-start">
										<div class="row">
											<div class="col-lg-12 col-md-6">
												<div class="card b-0 shadow-none">
													<div class="card-body p-3">
														<div class="fw-500">
															<p class="text-mute mt-0 mb-10"><i
																	class="fa fa-fw fa-square fs-12"
																	style="color: #C2A1FC;"></i> Avg. Tickets Created </p>
															<h2 class="fw-500 m-0">1,525</h2>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-6">
												<div class="card b-0 shadow-none m-0">
													<div class="card-body p-3">
														<div class="fw-500">
															<p class="text-mute mt-0 mb-10"><i
																	class="fa fa-fw fa-square fs-12"
																	style="color: #6963BB;"></i> Avg. Tickets Solved</p>
															<h2 class="fw-500 m-0">1,280</h2>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-9 p-0 bs-1" style="position: relative;">
									<div id="mixed-chart" class="chart-set"></div>
									</div>
								</div>
								<!-- <div class="est-img">
							 <img src="assets/img/ticketing/chart1.png" class="img-fluid">
							 </div> -->

							</div>
						</div>
					</div>
					<div class="col-xxl-4 col-lg-4 d-none">
						<div class="card flex-fill">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h3 class="card-title">Employees with most tickets</h3>
									<div class="dropdown mb-2">
										<a href="javascript:void(0);"
											class="btn btn-white border btn-sm d-inline-flex align-items-center"
											data-bs-toggle="dropdown">
											<i class="ti ti-calendar me-1"></i>Today
										</a>
										<ul class="dropdown-menu  dropdown-menu-end p-3">
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Month</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Week</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body" style="min-height:300px;overflow-y:auto;">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="text-start">
											<tr>
												<th>Employees name</th>
												<th>tickets</th>
												<th>Department</th>
												<!-- <th>Last Reply</th> -->
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancybox="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-33.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Anthony Lewis</a></p>
															
														</div>
													</div>
												</td>

												<td>17 tickets</td>
												<!-- <td><img src="assets/images/" class="img-fluid"> </td> -->
												<td>Brand</td>
											</tr>

											<tr>
											<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancybox="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-34.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">James Anderson</a></p>
															
														</div>
													</div>
												</td>
												
												<td>14 tickets</td>
												<!-- <td><img src="assets/images/" class="img-fluid"> </td> -->
												<td>Software</td>
											</tr>

											<tr>
											<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancybox="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-35.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Joe Root</a></p>
															
														</div>
													</div>
												</td>
												<td>12 tickets</td>
												<!-- <td><img src="assets/images/" class="img-fluid"> </td> -->
												<td>Sales</td>
											</tr>

											<tr>
											<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-36.webp" data-fancybox="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-39.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Jos buttler</a></p>
															
														</div>
													</div>
												</td>
												<td>11 tickets</td>
												<!-- <td><img src="assets/images/" class="img-fluid"> </td> -->
												<td>Admin</td>
											</tr>

											<tr>
											<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-37.webp" data-fancybox="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-40.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Ben stokes</a></p>
														
														</div>
													</div>
												</td>
												<td>11 tickets</td>
												<!-- <td><img src="assets/images/" class="img-fluid"> </td> -->
												<td>Software</td>
											</tr>
											<tr class="">
											<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-38.webp" data-fancybox="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-41.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Eoin Morgan</a></p>
														
														</div>
													</div>
												</td>
												<td>18 tickets</td>
												<!-- <td><img src="assets/images/" class="img-fluid"> </td> -->
												<td>Brand</td>
											</tr>

										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-xl-6">
						<div class="card b-1 overflow-hidden">
							<div class="card-header no-border">
								<h4 class="fw-500 fs-20 m-0">Employees satisfaction on tickets</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-6 be-1 bb-1 ">
										<div class="card border border-0 shadow-none ps-10 px-2 py-2">
											<div>
												<p class="text-mute m-0 mb-3">Tickets opened</p>
												<h3 class="mb-0 fw-500 l-h-50">180 tickets</h3>
											</div>
										</div>
									</div>
									<div class="col-6 bb-1 ">
										<div class="card shadow-none ps-10">
										<div class="d-flex align-items-center justify-content-between px-4 py-3">
											
											<div class="avatar  me-15 w-25 h-100  text-center align-content-center me-10">
												<i class="fs-34 fa fa-thumbs-up text-success"></i>
											</div>
												<div>
													<p class="text-mute m-0">Positive</p>
													<h3 class="mb-0 fw-500">75%</h3>
												</div>
											</div>
											<div class="progress mt-0 mb-0" role="progressbar"
												aria-label="Example 1px high" aria-valuenow="75" aria-valuemin="0"
												aria-valuemax="100" style="height: 5px">
												<div class="progress-bar bg-success" style="width: 75%"></div>
											</div>
										</div>
									</div>
									<div class="col-6 be-1 ">
										<div class="card shadow-none pe-10 mt-20">
										<div class="d-flex align-items-center justify-content-between px-4 py-3">
											
											<div class="avatar  me-15 w-25 h-100  text-center align-content-center me-10">
												<i class="fs-34 fa fa-thumbs-up text-warning"></i>
											</div>
											<div>
												<p class="text-mute m-0">Neutral</p>
												<h3 class="mb-0 fw-500">20%</h3>
											</div>
										</div>
											<div class="progress mt-0 mb-0" role="progressbar"
												aria-label="Example 1px high" aria-valuenow="75" aria-valuemin="0"
												aria-valuemax="100" style="height: 5px">
												<div class="progress-bar bg-warning" style="width: 20%"></div>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="card shadow-none ps-10 mt-20">
										<div class="d-flex align-items-center justify-content-between px-4 py-3">
											
											<div class="avatar  me-15 w-25 h-100  text-center align-content-center me-10">
												<i class="fs-34 fa fa-thumbs-up text-danger"></i>
											</div>
												<div>
													<p class="text-mute m-0">Negative</p>
													<h3 class="mb-0 fw-500">5%</h3>
												</div>
											</div>
											<div class="progress mt-0 mb-0" role="progressbar"
												aria-label="Example 1px high" aria-valuenow="75" aria-valuemin="0"
												aria-valuemax="100" style="height: 5px">
												<div class="progress-bar bg-danger" style="width: 5%"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6">
						<div class="card flex-fill">
							<div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
								<h5 class="mb-2">Tickets solved by agent</h5>
								<!-- <a href="#" class="btn btn-light btn-md mb-2">View All</a> -->
							</div>
							<div class="card-body">
								<div class="recent-item">
									<div class="d-flex justify-content-between">
										<div class="d-flex align-items-center w-100">
											<a href="javscript:void(0);" class="avatar  flex-shrink-0">
												<img src="assets/img/users/user-32.webp" class="rounded-circle"
													alt="img">
											</a>
											<div class="ms-2 flex-fill">
												<div class="d-flex align-items-center justify-content-between">
													<h6 class="fs-medium text-truncate"><a
															href="javscript:void(0);">Ahmer</a></h6>
													<p class="fs-15 text-dark">50 tickets</p>
												</div>
												<p class="fs-13">IT Specialist </p>
											</div>
										</div>
									</div>
								</div>
								<div class="recent-item">
									<div class="d-flex justify-content-between">
										<div class="d-flex align-items-center w-100">
											<a href="javscript:void(0);" class="avatar  flex-shrink-0">
												<img src="assets/img/users/user-01.webp" class="rounded-circle"
													alt="img">
											</a>
											<div class="ms-2 flex-fill">
												<div class="d-flex align-items-center justify-content-between">
													<h6 class="fs-medium text-truncate"><a href="javscript:void(0);">Jay
															Ze</a></h6>
													<p class="fs-15 text-dark">80 tickets</p>
												</div>
												<p class="fs-13">Doctor</p>
											</div>
										</div>
									</div>
								</div>
								<div class="recent-item">
									<div class="d-flex justify-content-between">
										<div class="d-flex align-items-center w-100">
											<a href="javscript:void(0);" class="avatar  flex-shrink-0">
												<img src="assets/img/users/user-19.webp" class="rounded-circle"
													alt="img">
											</a>
											<div class="ms-2 flex-fill">
												<div class="d-flex align-items-center justify-content-between">
													<h6 class="fs-medium text-truncate"><a
															href="javscript:void(0);">Mary Donald</a></h6>
													<p class="fs-15 text-dark">25 tickets</p>
												</div>
												<p class="fs-13">Engineer</p>
											</div>
										</div>
									</div>
								</div>
								<div class="recent-item">
									<div class="d-flex justify-content-between">
										<div class="d-flex align-items-center w-100">
											<a href="javscript:void(0);" class="avatar  flex-shrink-0">
												<img src="assets/img/users/user-11.webp" class="rounded-circle"
													alt="img">
											</a>
											<div class="ms-2 flex-fill">
												<div class="d-flex align-items-center justify-content-between">
													<h6 class="fs-medium text-truncate"><a
															href="javscript:void(0);">George David</a></h6>
													<p class="fs-15 text-dark">25 tickets</p>
												</div>
												<p class="fs-13">Lawyer</p>
											</div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xll-12 col-12">
						<div class="card bg-transparent border border-0 shadow-none">
							<div class="card-header bg-transparent ">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<div class="flex-column">
										<h3 class="card-title mb-1">All support tickets</h3>
										<!-- <p class="text-body fs-12">List of ticket open by Customers</p> -->
									</div>
									<div class="dropdown mb-2">
										<a href="javascript:void(0);"
											class="btn btn-white border btn-sm d-inline-flex align-items-center"
											data-bs-toggle="dropdown">
											<i class="ti ti-calendar me-1"></i>Today
										</a>
										<ul class="dropdown-menu  dropdown-menu-end p-3">
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Month</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Week</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive table-responsive-lg">
									<table class="table ">
										<thead class="thead-light">
											<tr>

												<th>ID</th>
												<th>Employee Name</th>
												<th>Subject</th>
												<th>Status</th>
												<th>Priority</th>
												<th>Assignee</th>
												<th>Ticketing Date</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
												EMP001
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-32.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">James Miller</a></p>
															<!-- <span class="fs-12">Finance</span> -->
														</div>
													</div>

												</td>

												<td>
													<p class="fs-14 mb-0">Printer not working</p>
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1"><i
															class="ti ti-circle-filled fs-10 me-1 text-warning"></i>Ongoing
													</p>
												</td>
												<td>
													<span class="badge bg-soft-primary">Low</span>
												</td>

												<td>
													<p class="fs-14  mb-0">Michel Star</p>
												</td>

												<td>
													20 Oct 2018
												</td>
											</tr>

											<tr>
											<td>
												EMP002
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-30.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">David Warner</a></p>
															<!-- <span class="fs-12">Finance</span> -->
														</div>
													</div>

												</td>

												<td>
													<p class="fs-14 mb-0">I need help with adding a New Contact</p>
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1"><i
															class="ti ti-circle-filled fs-10 me-1 text-warning"></i>Closes
													</p>
												</td>
												<td>
													<span class="badge bg-soft-warning">Warning</span>
												</td>

												<td>
													<p class="fs-14  mb-0">Steve Smith</p>
												</td>

												<td>
													20 Oct 2018
												</td>
											</tr>

											<tr>
											<td>
												EMP003
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-34.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-38.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Jenifer</a></p>
															<!-- <span class="fs-12">Finance</span> -->
														</div>
													</div>

												</td>

												<td>
													<p class="fs-14 mb-0">Unable to access VPN</p>
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1"><i
															class="ti ti-circle-filled fs-10 me-1 text-warning"></i>importance
													</p>
												</td>
												<td>
													<span class="badge bg-soft-danger">high</span>
												</td>

												<td>
													<p class="fs-14  mb-0">Lisa Thompson</p>
												</td>

												<td>
													20 Oct 2018
												</td>
											</tr>

											<tr>
											<td>
												EMP004
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-34.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-42.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Maxell</a></p>
															<!-- <span class="fs-12">Finance</span> -->
														</div>
													</div>

												</td>

												<td>
													<p class="fs-14 mb-0">Software update request</p>
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1"><i
															class="ti ti-circle-filled fs-10 me-1 text-warning"></i>importance
													</p>
												</td>
												<td>
													<span class="badge bg-soft-danger">high</span>
												</td>

												<td>
													<p class="fs-14  mb-0">Rachel Moore</p>
												</td>

												<td>
													20 Oct 2018
												</td>
											</tr>


											<tr>
											<td>
												EMP005
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-34.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-28.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Ethan Wilson</a></p>
															<!-- <span class="fs-12">Finance</span> -->
														</div>
													</div>

												</td>

												<td>
													<p class="fs-14 mb-0">Slow internet connection</p>
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1"><i
															class="ti ti-circle-filled fs-10 me-1 text-high"></i>close
													</p>
												</td>
												<td>
													<span class="badge bg-soft-danger">high</span>
												</td>

												<td>
													<p class="fs-14  mb-0">Steve Smith</p>
												</td>

												<td>
													20 Oct 2018
												</td>
											</tr>


											<tr>
											<td>
												EMP006
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-34.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-29.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Sophia Martinez</a></p>
															<!-- <span class="fs-12">Finance</span> -->
														</div>
													</div>

												</td>

												<td>
													<p class="fs-14 mb-0">New hardware installation</p>
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1"><i
															class="ti ti-circle-filled fs-10 me-1 text-sucess"></i>close								</p>
												</td>
												<td>
													<span class="badge bg-soft-success">medium</span>
												</td>

												<td>
													<p class="fs-14  mb-0">Rachel Moore</p>
												</td>

												<td>
													01 Jan 2025
												</td>
											</tr>


											<tr>
											<td>
												EMP007
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-34.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-08.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Benjamin Brown</a></p>
															<!-- <span class="fs-12">Finance</span> -->
														</div>
													</div>

												</td>

												<td>
													<p class="fs-14 mb-0">System crash - urgent</p>
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1"><i
															class="ti ti-circle-filled fs-10 me-1 text-warning"></i>Open
													</p>
												</td>
												<td>
													<span class="badge bg-soft-danger">high</span>
												</td>

												<td>
													<p class="fs-14  mb-0">Lisa Thompson</p>
												</td>

												<td>
													04 Aug 2025
												</td>
											</tr>


											<tr>
											<td>
												EMP008
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-34.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-md">
															<img src="assets/img/users/user-18.webp"
																class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
																	data-bs-target="#view_details">Ava Harris</a></p>
															<!-- <span class="fs-12">Finance</span> -->
														</div>
													</div>

												</td>

												<td>
													<p class="fs-14 mb-0">Account locked - password reset</p>
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1"><i
															class="ti ti-circle-filled fs-10 me-1 text-warning"></i>resolved
													</p>
												</td>
												<td>
													<span class="badge bg-soft-danger">high</span>
												</td>

												<td>
													<p class="fs-14  mb-0">Kevin Anderson</p>
												</td>

												<td>
													04 Feb 2025
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>



					</div>
					
				</div>





				<!-- /Page Wrapper -->


				<?php include 'includes/footer.php'; ?>
			</div>
			<!-- /Main Wrapper -->
			 </div>
			 </div>

			<?php include 'includes/script.php'; ?>

</body>

</html>