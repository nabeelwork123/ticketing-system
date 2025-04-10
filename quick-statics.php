<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Ticketing System | Quick statics</title>


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
									<a href="index.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Dashboard
								</li>
								<li class="breadcrumb-item active" aria-current="page">Quick statics</li>
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

				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card mb-3  d-none">
							<div class="card-header">
								<h3 class="card-title">Create a ticket</h3>
								<p>List of tickets open by employees</p>
							</div>
							<div class="card-body  chart-set">
								<!-- <div class="h-250" id="flotBar2"></div> -->
								<div id="mixed-chart" class="chart-set"></div>
							</div>
						</div>

						<div class="row">
							<div class="col-xll-12 col-12">
								<div class="card ">
									<div class="card-header bg-transparent ">
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<div class="flex-column">
												<h3 class="card-title mb-1">All support tickets</h3>
												<p class="text-body fs-12">List of ticket open by employees</p>
											</div>
											<div class="d-flex align-items-center justify-content-end ">
												
												<select class="form-select me-2 py-0 mb-2" id="offcanvasSelect">
												<option value="" selected>Filter by </option>
												<option value="offcanvas1">Test</option>
												<option value="offcanvas2">Test</option>
												<option value="offcanvas3">Test</option>
												<!-- <option value="offcanvas3">Priority</option>
												<option value="offcanvas3">Category</option>
												<option value="offcanvas3">Created on </option>
												<option value="offcanvas3">Status</option> -->
											</select>
												<div class="dropdown mb-2 py-3">
													<a href="javascript:void(0);"
														class="btn btn-white border btn-sm d-inline-flex align-items-center"
														data-bs-toggle="dropdown">
														<i class="ti ti-calendar me-1"></i>Today
													</a>
													<ul class="dropdown-menu  dropdown-menu-end p-3">
														<li>
															<a href="javascript:void(0);"
																class="dropdown-item rounded-1">This
																Month</a>
														</li>
														<li>
															<a href="javascript:void(0);"
																class="dropdown-item rounded-1">This
																Week</a>
														</li>
														<li>
															<a href="javascript:void(0);"
																class="dropdown-item rounded-1">Today</a>
														</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive table-responsive-xl">
											<table class="table ">
												<thead class="thead-light">
													<tr>

														<th>ID</th>
														<th>Employee Name</th>
														<th>Subject</th>
														<th>Status</th>
														<th>Priority</th>
														<th>Assignee</th>
														<th>Due Date</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															EMP001
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-md">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-circle" alt="img">
																</a>
																<div class="ms-2">
																	<p class="text-dark mb-0"><a href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#view_details">James
																			Miller</a></p>
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
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-md">
																	<img src="assets/img/users/user-30.webp"
																		class="img-fluid rounded-circle" alt="img">
																</a>
																<div class="ms-2">
																	<p class="text-dark mb-0"><a href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#view_details">David
																			Warner</a></p>
																	<!-- <span class="fs-12">Finance</span> -->
																</div>
															</div>

														</td>

														<td>
															<p class="fs-14 mb-0">I need help with adding a New Contact
															</p>
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
																<a href="assets/img/users/user-34.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-md">
																	<img src="assets/img/users/user-38.webp"
																		class="img-fluid rounded-circle" alt="img">
																</a>
																<div class="ms-2">
																	<p class="text-dark mb-0"><a href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#view_details">Jenifer</a>
																	</p>
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
																<a href="assets/img/users/user-34.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-md">
																	<img src="assets/img/users/user-42.webp"
																		class="img-fluid rounded-circle" alt="img">
																</a>
																<div class="ms-2">
																	<p class="text-dark mb-0"><a href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#view_details">Maxell</a>
																	</p>
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
																<a href="assets/img/users/user-34.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-md">
																	<img src="assets/img/users/user-28.webp"
																		class="img-fluid rounded-circle" alt="img">
																</a>
																<div class="ms-2">
																	<p class="text-dark mb-0"><a href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#view_details">Ethan
																			Wilson</a></p>
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
																<a href="assets/img/users/user-34.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-md">
																	<img src="assets/img/users/user-29.webp"
																		class="img-fluid rounded-circle" alt="img">
																</a>
																<div class="ms-2">
																	<p class="text-dark mb-0"><a href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#view_details">Sophia
																			Martinez</a></p>
																	<!-- <span class="fs-12">Finance</span> -->
																</div>
															</div>

														</td>

														<td>
															<p class="fs-14 mb-0">New hardware installation</p>
														</td>
														<td>
															<p class="fs-13 d-inline-flex align-items-center mb-1"><i
																	class="ti ti-circle-filled fs-10 me-1 text-sucess"></i>close
															</p>
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
																<a href="assets/img/users/user-34.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-md">
																	<img src="assets/img/users/user-08.webp"
																		class="img-fluid rounded-circle" alt="img">
																</a>
																<div class="ms-2">
																	<p class="text-dark mb-0"><a href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#view_details">Benjamin
																			Brown</a></p>
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
																<a href="assets/img/users/user-34.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-md">
																	<img src="assets/img/users/user-18.webp"
																		class="img-fluid rounded-circle" alt="img">
																</a>
																<div class="ms-2">
																	<p class="text-dark mb-0"><a href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#view_details">Ava
																			Harris</a></p>
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
					</div>
					<!-- <div class="col-xl-3 col-lg-12">

						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between">
									<span class="fs-18 fw-bold text-dark">Filters</span>
									<a href="#" class="fs-18 text-success">Clear</a>
								</div>
							</div>
							<div class="card-body">
								<div class="mb-3">
									<label class="form-label mb-1">Agents</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label mb-1">Groups</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label mb-1">Created</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label mb-1">Due by</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label mb-1">Status</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label mb-1">Priority</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>

								<div class="mb-3">
									<label class="form-label mb-1">Type</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>

								<div class="mb-3">
									<label class="form-label mb-1">Companies</label>
									<input type="text" class="form-control" placeholder="">
								</div>

								<div class="mb-3">
									<label class="form-label mb-1">Tags</label>
									<input type="text" class="form-control" placeholder="">
								</div>

								<div class="d-flex justify-content-center">
									<button type="button" class="btn btn-primary text-uppercase">Save filters</button>
								</div>
							</div>
						</div>
					</div> -->

				</div>




				<!-- Offcanvas 1 -->
				<div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvas1" aria-labelledby="label1">
					<div class="offcanvas-header">
						<!-- <h5 class="offcanvas-title" id="label1">Offcanvas 1</h5> -->
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
					</div>
					<div class="offcanvas-body">
						<div class="">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between mb-3">
									<span class="fs-20 fw-bold text-dark">Filters</span>
									<a href="#" class="fs-18 text-success">Clear</a>
								</div>
							</div>
							<div class="card-body">
								<div class="mb-3">
									<label class="form-label mb-1">Ticket ID</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label mb-1">Employee name </label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label mb-1">Status</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label mb-1">Priority</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label mb-1">Category </label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label mb-1">Created on </label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>

								<div class="mb-3">
									<label class="form-label mb-1">Due on</label>
									<select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>
								</div>

								<!-- <div class="mb-3">
									<label class="form-label mb-1">Companies</label>
									<input type="text" class="form-control" placeholder="">
								</div>

								<div class="mb-3">
									<label class="form-label mb-1">Tags</label>
									<input type="text" class="form-control" placeholder="">
								</div> -->

								<div class="d-flex justify-content-center">
									<button type="button" class="btn btn-primary text-uppercase" data-bs-dismiss="offcanvas">Save filters</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Offcanvas 1 -->


				<!-- Offcanvas 2 -->
				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas2" aria-labelledby="label2">
					<div class="offcanvas-header">
						<!-- <h5 class="offcanvas-title" id="label2">Offcanvas 2</h5> -->
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
					</div>
					<div class="offcanvas-body">
						Content for Offcanvas 2
					</div>
				</div>
				<!-- Offcanvas 2 -->

				<!-- Offcanvas 3 -->
				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas3" aria-labelledby="label3">
					<div class="offcanvas-header">
						<!-- <h5 class="offcanvas-title" id="label3">Offcanvas 3</h5> -->
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
					</div>
					<div class="offcanvas-body">
						Content for Offcanvas 3
					</div>
				</div>

				<!-- Offcanvas 3 -->



				<!-- /Page Wrapper -->
				<?php include 'includes/footer.php'; ?>


			</div>
			<!-- /Main Wrapper -->
		</div>
	</div>
	<?php include 'includes/script.php'; ?>
	<script>
		document.getElementById('offcanvasSelect').addEventListener('change', function () {
			const selectedId = this.value;
			if (selectedId) {
				const targetOffcanvasEl = document.getElementById(selectedId);
				const bsOffcanvas = new bootstrap.Offcanvas(targetOffcanvasEl);
				bsOffcanvas.show();
			}
		});
	</script>

</body>

</html>