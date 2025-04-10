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
						<h2 class="mb-1">Create ticket</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="index.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Dashboard
								</li>
								<li class="breadcrumb-item active" aria-current="page">Create ticket</li>
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

				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Create a ticket</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<!-- <div class="col-lg-6 mb-3">
							<label class="form-label mb-1">Name</label>
								<input type="text" class="form-control" placeholder="">
							</div>
							<div class="col-lg-6 mb-3">
							<label class="form-label mb-1">Email</label>
								<input type="email" class="form-control" placeholder="">
							</div> -->
							<div class="col-lg-6 mb-3">
							<label class="form-label mb-1">Category</label>
								<select class="form-select">
									<option selected></option>
									<option>Hardware</option>
									<option>Software</option>
									<option>Network</option>
									<option>Email</option>
									<option>Printer</option>
									<option>Access Rights</option>
									<option>Others</option>
									
								</select>
							</div>
							<div class="col-lg-6 mb-3">
							<label class="form-label mb-1">Priority</label>
							<select class="form-select">
									<option selected></option>
									<option></option>
									<option></option>
									<option></option>
									<option></option>
								</select>
							</div>

							<div class="col-lg-12 mb-3">
							<label class="form-label mb-1">Subject</label>
							<select class="form-select">
									<option selected></option>
									<option></option>
									<option></option>
									<option></option>
									<option></option>
								</select>
							</div>
							<div class="col-lg-12 mb-3">
							<label class="form-label mb-1">Message</label>
							<div class="summernote"></div>
							</div>
						</div>	

						<div class="row justify-content-end">
							<div class="d-flex justify-content-end">
						<button type="button" class="btn btn-dark me-3">Cancel</button>
							<button type="button" class="btn btn-primary">Create ticket</button>
							</div>
						</div>
					</div>

				</div>	
				




				<!-- /Page Wrapper -->



			</div>
			<!-- /Main Wrapper -->
		</div>
	</div>
	<?php include 'includes/script.php'; ?>


</body>

</html>