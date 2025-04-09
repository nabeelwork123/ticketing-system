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
								<span class="fs-14 text-body">Compare to last month</span>


							</div>
						</div>
					</div>

				</div>
				<!-- /Leaves Info -->


				<div class="row mb-4">
					<div class="col-xl-8 col-md-8">
						<div class="card flex-fill overflow-hidden">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h3 class="card-title">Estimated of solved tickets</h3>
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
																	style="color: #C2A1FC;"></i> Avg. Ticket Create</p>
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
																	style="color: #6963BB;"></i> Avg. Ticket Solved</p>
															<h2 class="fw-500 m-0">1,280</h2>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-9 p-0 bs-1" style="position: relative;">
										<div id="chart-Overall" class="me-20" style="min-height: 309px;">
											<div id="apexchartsy1dfs2t1"
												class="apexcharts-canvas apexchartsy1dfs2t1 apexcharts-theme-light"
												style="width: 754px; height: 309px;"><svg id="SvgjsSvg1656" width="100%"
													height="309" xmlns="http://www.w3.org/2000/svg" version="1.1"
													xmlns:xlink="http://www.w3.org/1999/xlink"
													xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
													xmlns:data="ApexChartsNS" transform="translate(0, 0)"
													style="background: transparent;">
													<g id="SvgjsG1658" class="apexcharts-inner apexcharts-graphical"
														transform="translate(51.484375, 30)">
														<defs id="SvgjsDefs1657">
															<linearGradient id="SvgjsLinearGradient1663" x1="0" y1="0"
																x2="0" y2="1">
																<stop id="SvgjsStop1664" stop-opacity="0.4"
																	stop-color="rgba(216,227,240,0.4)" offset="0">
																</stop>
																<stop id="SvgjsStop1665" stop-opacity="0.5"
																	stop-color="rgba(190,209,230,0.5)" offset="1">
																</stop>
																<stop id="SvgjsStop1666" stop-opacity="0.5"
																	stop-color="rgba(190,209,230,0.5)" offset="1">
																</stop>
															</linearGradient>
															<clipPath id="gridRectMasky1dfs2t1">
																<rect id="SvgjsRect1668" width="697.515625"
																	height="242.348" x="-2.5" y="-0.5" rx="0" ry="0"
																	opacity="1" stroke-width="0" stroke="none"
																	stroke-dasharray="0" fill="#fff"></rect>
															</clipPath>
															<clipPath id="gridRectMarkerMasky1dfs2t1">
																<rect id="SvgjsRect1669" width="696.515625"
																	height="245.348" x="-2" y="-2" rx="0" ry="0"
																	opacity="1" stroke-width="0" stroke="none"
																	stroke-dasharray="0" fill="#fff"></rect>
															</clipPath>
															<filter id="SvgjsFilter1686" filterUnits="userSpaceOnUse"
																width="200%" height="200%" x="-50%" y="-50%">
																<feComponentTransfer id="SvgjsFeComponentTransfer1687"
																	result="SvgjsFeComponentTransfer1687Out"
																	in="SourceGraphic">
																	<feFuncR id="SvgjsFeFuncR1688" type="linear"
																		slope="0.65"></feFuncR>
																	<feFuncG id="SvgjsFeFuncG1689" type="linear"
																		slope="0.65"></feFuncG>
																	<feFuncB id="SvgjsFeFuncB1690" type="linear"
																		slope="0.65"></feFuncB>
																	<feFuncA id="SvgjsFeFuncA1691" type="identity">
																	</feFuncA>
																</feComponentTransfer>
															</filter>
														</defs>
														<rect id="SvgjsRect1667" width="44.51886160714285"
															height="241.348" x="25.569226074218754" y="0" rx="0" ry="0"
															opacity="1" stroke-width="0" stroke-dasharray="3"
															fill="url(#SvgjsLinearGradient1663)"
															class="apexcharts-xcrosshairs" y2="241.348" filter="none"
															fill-opacity="0.9" x1="25.569226074218754"
															x2="25.569226074218754"></rect>
														<g id="SvgjsG1697" class="apexcharts-xaxis"
															transform="translate(0, 0)">
															<g id="SvgjsG1698" class="apexcharts-xaxis-texts-g"
																transform="translate(0, -4)"><text id="SvgjsText1700"
																	font-family="Helvetica, Arial, sans-serif"
																	x="28.854817708333332" y="270.348"
																	text-anchor="middle" dominant-baseline="auto"
																	font-size="12px" font-weight="400" fill="#373d3f"
																	class="apexcharts-text apexcharts-xaxis-label "
																	style="font-family: Helvetica, Arial, sans-serif;">
																	<tspan id="SvgjsTspan1701">Jan</tspan>
																	<title>Jan</title>
																</text><text id="SvgjsText1703"
																	font-family="Helvetica, Arial, sans-serif"
																	x="86.564453125" y="270.348" text-anchor="middle"
																	dominant-baseline="auto" font-size="12px"
																	font-weight="400" fill="#373d3f"
																	class="apexcharts-text apexcharts-xaxis-label "
																	style="font-family: Helvetica, Arial, sans-serif;">
																	<tspan id="SvgjsTspan1704">Feb</tspan>
																	<title>Feb</title>
																</text><text id="SvgjsText1706"
																	font-family="Helvetica, Arial, sans-serif"
																	x="144.27408854166666" y="270.348"
																	text-anchor="middle" dominant-baseline="auto"
																	font-size="12px" font-weight="400" fill="#373d3f"
																	class="apexcharts-text apexcharts-xaxis-label "
																	style="font-family: Helvetica, Arial, sans-serif;">
																	<tspan id="SvgjsTspan1707">Mar</tspan>
																	<title>Mar</title>
																</text><text id="SvgjsText1709"
																	font-family="Helvetica, Arial, sans-serif"
																	x="201.98372395833331" y="270.348"
																	text-anchor="middle" dominant-baseline="auto"
																	font-size="12px" font-weight="400" fill="#373d3f"
																	class="apexcharts-text apexcharts-xaxis-label "
																	style="font-family: Helvetica, Arial, sans-serif;">
																	<tspan id="SvgjsTspan1710">Apr</tspan>
																	<title>Apr</title>
																</text><text id="SvgjsText1712"
																	font-family="Helvetica, Arial, sans-serif"
																	x="259.693359375" y="270.348" text-anchor="middle"
																	dominant-baseline="auto" font-size="12px"
																	font-weight="400" fill="#373d3f"
																	class="apexcharts-text apexcharts-xaxis-label "
																	style="font-family: Helvetica, Arial, sans-serif;">
																	<tspan id="SvgjsTspan1713">May</tspan>
																	<title>May</title>
																</text><text id="SvgjsText1715"
																	font-family="Helvetica, Arial, sans-serif"
																	x="317.4029947916667" y="270.348"
																	text-anchor="middle" dominant-baseline="auto"
																	font-size="12px" font-weight="400" fill="#373d3f"
																	class="apexcharts-text apexcharts-xaxis-label "
																	style="font-family: Helvetica, Arial, sans-serif;">
																	<tspan id="SvgjsTspan1716">Jun</tspan>
																	<title>Jun</title>
																</text><text id="SvgjsText1718"
																	font-family="Helvetica, Arial, sans-serif"
																	x="375.11263020833337" y="270.348"
																	text-anchor="middle" dominant-baseline="auto"
																	font-size="12px" font-weight="400" fill="#373d3f"
																	class="apexcharts-text apexcharts-xaxis-label "
																	style="font-family: Helvetica, Arial, sans-serif;">
																	<tspan id="SvgjsTspan1719">Jul</tspan>
																	<title>Jul</title>
																</text><text id="SvgjsText1721"
																	font-family="Helvetica, Arial, sans-serif"
																	x="432.82226562500006" y="270.348"
																	text-anchor="middle" dominant-baseline="auto"
																	font-size="12px" font-weight="400" fill="#373d3f"
																	class="apexcharts-text apexcharts-xaxis-label "
																	style="font-family: Helvetica, Arial, sans-serif;">
																	<tspan id="SvgjsTspan1722">Aug</tspan>
																	<title>Aug</title>
																</text><text id="SvgjsText1724"
																	font-family="Helvetica, Arial, sans-serif"
																	x="490.5319010416667" y="270.348"
																	text-anchor="middle" dominant-baseline="auto"
																	font-size="12px" font-weight="400" fill="#373d3f"
																	class="apexcharts-text apexcharts-xaxis-label "
																	style="font-family: Helvetica, Arial, sans-serif;">
																	<tspan id="SvgjsTspan1725">Sep</tspan>
																	<title>Sep</title>
																</text><text id="SvgjsText1727"
																	font-family="Helvetica, Arial, sans-serif"
																	x="548.2415364583333" y="270.348"
																	text-anchor="middle" dominant-baseline="auto"
																	font-size="12px" font-weight="400" fill="#373d3f"
																	class="apexcharts-text apexcharts-xaxis-label "
																	style="font-family: Helvetica, Arial, sans-serif;">
																	<tspan id="SvgjsTspan1728">Oct</tspan>
																	<title>Oct</title>
																</text><text id="SvgjsText1730"
																	font-family="Helvetica, Arial, sans-serif"
																	x="605.9511718749999" y="270.348"
																	text-anchor="middle" dominant-baseline="auto"
																	font-size="12px" font-weight="400" fill="#373d3f"
																	class="apexcharts-text apexcharts-xaxis-label "
																	style="font-family: Helvetica, Arial, sans-serif;">
																	<tspan id="SvgjsTspan1731">Nov</tspan>
																	<title>Nov</title>
																</text><text id="SvgjsText1733"
																	font-family="Helvetica, Arial, sans-serif"
																	x="663.6608072916665" y="270.348"
																	text-anchor="middle" dominant-baseline="auto"
																	font-size="12px" font-weight="400" fill="#373d3f"
																	class="apexcharts-text apexcharts-xaxis-label "
																	style="font-family: Helvetica, Arial, sans-serif;">
																	<tspan id="SvgjsTspan1734">Dec</tspan>
																	<title>Dec</title>
																</text></g>
															<line id="SvgjsLine1735" x1="0" y1="242.348" x2="692.515625"
																y2="242.348" stroke="#e0e0e0" stroke-dasharray="0"
																stroke-width="1"></line>
														</g>
														<g id="SvgjsG1750" class="apexcharts-grid">
															<g id="SvgjsG1751" class="apexcharts-gridlines-horizontal">
																<line id="SvgjsLine1766" x1="0" y1="0" x2="692.515625"
																	y2="0" stroke="#f0f0f0" stroke-dasharray="5"
																	class="apexcharts-gridline"></line>
																<line id="SvgjsLine1767" x1="0" y1="60.337"
																	x2="692.515625" y2="60.337" stroke="#f0f0f0"
																	stroke-dasharray="5" class="apexcharts-gridline">
																</line>
																<line id="SvgjsLine1768" x1="0" y1="120.674"
																	x2="692.515625" y2="120.674" stroke="#f0f0f0"
																	stroke-dasharray="5" class="apexcharts-gridline">
																</line>
																<line id="SvgjsLine1769" x1="0" y1="181.01100000000002"
																	x2="692.515625" y2="181.01100000000002"
																	stroke="#f0f0f0" stroke-dasharray="5"
																	class="apexcharts-gridline"></line>
																<line id="SvgjsLine1770" x1="0" y1="241.348"
																	x2="692.515625" y2="241.348" stroke="#f0f0f0"
																	stroke-dasharray="5" class="apexcharts-gridline">
																</line>
															</g>
															<g id="SvgjsG1752" class="apexcharts-gridlines-vertical">
															</g>
															<line id="SvgjsLine1753" x1="0" y1="242.348" x2="0"
																y2="248.348" stroke="#e0e0e0" stroke-dasharray="0"
																class="apexcharts-xaxis-tick"></line>
															<line id="SvgjsLine1754" x1="57.709635416666664"
																y1="242.348" x2="57.709635416666664" y2="248.348"
																stroke="#e0e0e0" stroke-dasharray="0"
																class="apexcharts-xaxis-tick"></line>
															<line id="SvgjsLine1755" x1="115.41927083333333"
																y1="242.348" x2="115.41927083333333" y2="248.348"
																stroke="#e0e0e0" stroke-dasharray="0"
																class="apexcharts-xaxis-tick"></line>
															<line id="SvgjsLine1756" x1="173.12890625" y1="242.348"
																x2="173.12890625" y2="248.348" stroke="#e0e0e0"
																stroke-dasharray="0" class="apexcharts-xaxis-tick">
															</line>
															<line id="SvgjsLine1757" x1="230.83854166666666"
																y1="242.348" x2="230.83854166666666" y2="248.348"
																stroke="#e0e0e0" stroke-dasharray="0"
																class="apexcharts-xaxis-tick"></line>
															<line id="SvgjsLine1758" x1="288.5481770833333" y1="242.348"
																x2="288.5481770833333" y2="248.348" stroke="#e0e0e0"
																stroke-dasharray="0" class="apexcharts-xaxis-tick">
															</line>
															<line id="SvgjsLine1759" x1="346.2578125" y1="242.348"
																x2="346.2578125" y2="248.348" stroke="#e0e0e0"
																stroke-dasharray="0" class="apexcharts-xaxis-tick">
															</line>
															<line id="SvgjsLine1760" x1="403.9674479166667" y1="242.348"
																x2="403.9674479166667" y2="248.348" stroke="#e0e0e0"
																stroke-dasharray="0" class="apexcharts-xaxis-tick">
															</line>
															<line id="SvgjsLine1761" x1="461.67708333333337"
																y1="242.348" x2="461.67708333333337" y2="248.348"
																stroke="#e0e0e0" stroke-dasharray="0"
																class="apexcharts-xaxis-tick"></line>
															<line id="SvgjsLine1762" x1="519.38671875" y1="242.348"
																x2="519.38671875" y2="248.348" stroke="#e0e0e0"
																stroke-dasharray="0" class="apexcharts-xaxis-tick">
															</line>
															<line id="SvgjsLine1763" x1="577.0963541666666" y1="242.348"
																x2="577.0963541666666" y2="248.348" stroke="#e0e0e0"
																stroke-dasharray="0" class="apexcharts-xaxis-tick">
															</line>
															<line id="SvgjsLine1764" x1="634.8059895833333" y1="242.348"
																x2="634.8059895833333" y2="248.348" stroke="#e0e0e0"
																stroke-dasharray="0" class="apexcharts-xaxis-tick">
															</line>
															<line id="SvgjsLine1765" x1="692.5156249999999" y1="242.348"
																x2="692.5156249999999" y2="248.348" stroke="#e0e0e0"
																stroke-dasharray="0" class="apexcharts-xaxis-tick">
															</line>
															<line id="SvgjsLine1772" x1="0" y1="241.348" x2="692.515625"
																y2="241.348" stroke="transparent" stroke-dasharray="0">
															</line>
															<line id="SvgjsLine1771" x1="0" y1="1" x2="0" y2="241.348"
																stroke="transparent" stroke-dasharray="0"></line>
														</g>
														<g id="SvgjsG1671"
															class="apexcharts-bar-series apexcharts-plot-series">
															<g id="SvgjsG1672" class="apexcharts-series"
																seriesName="TicketxSolved" rel="1" data:realIndex="0">
																<path id="SvgjsPath1674"
																	d="M 27.20597098214286 241.348L 27.20597098214286 168.9436L 70.72483258928571 168.9436L 70.72483258928571 168.9436L 70.72483258928571 241.348L 70.72483258928571 241.348z"
																	fill="rgba(105,99,187,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="0"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 27.20597098214286 241.348L 27.20597098214286 168.9436L 70.72483258928571 168.9436L 70.72483258928571 168.9436L 70.72483258928571 241.348L 70.72483258928571 241.348z"
																	pathFrom="M 27.20597098214286 241.348L 27.20597098214286 241.348L 70.72483258928571 241.348L 70.72483258928571 241.348L 70.72483258928571 241.348L 27.20597098214286 241.348"
																	cy="168.9436" cx="125.63677455357143" j="0"
																	val="600" barHeight="72.4044"
																	barWidth="44.51886160714285"></path>
																<path id="SvgjsPath1675"
																	d="M 126.13677455357143 241.348L 126.13677455357143 174.9773L 169.65563616071427 174.9773L 169.65563616071427 174.9773L 169.65563616071427 241.348L 169.65563616071427 241.348z"
																	fill="rgba(105,99,187,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="0"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 126.13677455357143 241.348L 126.13677455357143 174.9773L 169.65563616071427 174.9773L 169.65563616071427 174.9773L 169.65563616071427 241.348L 169.65563616071427 241.348z"
																	pathFrom="M 126.13677455357143 241.348L 126.13677455357143 241.348L 169.65563616071427 241.348L 169.65563616071427 241.348L 169.65563616071427 241.348L 126.13677455357143 241.348"
																	cy="174.9773" cx="224.567578125" j="1" val="550"
																	barHeight="66.3707" barWidth="44.51886160714285">
																</path>
																<path id="SvgjsPath1676"
																	d="M 225.067578125 241.348L 225.067578125 138.7751L 268.5864397321429 138.7751L 268.5864397321429 138.7751L 268.5864397321429 241.348L 268.5864397321429 241.348z"
																	fill="rgba(105,99,187,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="0"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 225.067578125 241.348L 225.067578125 138.7751L 268.5864397321429 138.7751L 268.5864397321429 138.7751L 268.5864397321429 241.348L 268.5864397321429 241.348z"
																	pathFrom="M 225.067578125 241.348L 225.067578125 241.348L 268.5864397321429 241.348L 268.5864397321429 241.348L 268.5864397321429 241.348L 225.067578125 241.348"
																	cy="138.7751" cx="323.49838169642857" j="2"
																	val="850" barHeight="102.5729"
																	barWidth="44.51886160714285"></path>
																<path id="SvgjsPath1677"
																	d="M 323.99838169642857 241.348L 323.99838169642857 187.0447L 367.51724330357143 187.0447L 367.51724330357143 187.0447L 367.51724330357143 241.348L 367.51724330357143 241.348z"
																	fill="rgba(105,99,187,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="0"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 323.99838169642857 241.348L 323.99838169642857 187.0447L 367.51724330357143 187.0447L 367.51724330357143 187.0447L 367.51724330357143 241.348L 367.51724330357143 241.348z"
																	pathFrom="M 323.99838169642857 241.348L 323.99838169642857 241.348L 367.51724330357143 241.348L 367.51724330357143 241.348L 367.51724330357143 241.348L 323.99838169642857 241.348"
																	cy="187.0447" cx="422.4291852678571" j="3" val="450"
																	barHeight="54.3033" barWidth="44.51886160714285">
																</path>
																<path id="SvgjsPath1678"
																	d="M 422.9291852678571 241.348L 422.9291852678571 150.84250000000003L 466.448046875 150.84250000000003L 466.448046875 150.84250000000003L 466.448046875 241.348L 466.448046875 241.348z"
																	fill="rgba(105,99,187,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="0"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 422.9291852678571 241.348L 422.9291852678571 150.84250000000003L 466.448046875 150.84250000000003L 466.448046875 150.84250000000003L 466.448046875 241.348L 466.448046875 241.348z"
																	pathFrom="M 422.9291852678571 241.348L 422.9291852678571 241.348L 466.448046875 241.348L 466.448046875 241.348L 466.448046875 241.348L 422.9291852678571 241.348"
																	cy="150.84250000000003" cx="521.3599888392857" j="4"
																	val="750" barHeight="90.5055"
																	barWidth="44.51886160714285"></path>
																<path id="SvgjsPath1679"
																	d="M 521.8599888392857 241.348L 521.8599888392857 126.70770000000002L 565.3788504464286 126.70770000000002L 565.3788504464286 126.70770000000002L 565.3788504464286 241.348L 565.3788504464286 241.348z"
																	fill="rgba(105,99,187,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="0"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 521.8599888392857 241.348L 521.8599888392857 126.70770000000002L 565.3788504464286 126.70770000000002L 565.3788504464286 126.70770000000002L 565.3788504464286 241.348L 565.3788504464286 241.348z"
																	pathFrom="M 521.8599888392857 241.348L 521.8599888392857 241.348L 565.3788504464286 241.348L 565.3788504464286 241.348L 565.3788504464286 241.348L 521.8599888392857 241.348"
																	cy="126.70770000000002" cx="620.2907924107143" j="5"
																	val="950" barHeight="114.6403"
																	barWidth="44.51886160714285"></path>
																<path id="SvgjsPath1680"
																	d="M 620.7907924107143 241.348L 620.7907924107143 165.32338000000001L 664.3096540178572 165.32338000000001L 664.3096540178572 165.32338000000001L 664.3096540178572 241.348L 664.3096540178572 241.348z"
																	fill="rgba(105,99,187,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="0"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 620.7907924107143 241.348L 620.7907924107143 165.32338000000001L 664.3096540178572 165.32338000000001L 664.3096540178572 165.32338000000001L 664.3096540178572 241.348L 664.3096540178572 241.348z"
																	pathFrom="M 620.7907924107143 241.348L 620.7907924107143 241.348L 664.3096540178572 241.348L 664.3096540178572 241.348L 664.3096540178572 241.348L 620.7907924107143 241.348"
																	cy="165.32338000000001" cx="719.2215959821428" j="6"
																	val="630" barHeight="76.02462"
																	barWidth="44.51886160714285"></path>
															</g>
															<g id="SvgjsG1681" class="apexcharts-series"
																seriesName="TicketxCreate" rel="2" data:realIndex="1">
																<path id="SvgjsPath1683"
																	d="M 27.20597098214286 168.9436L 27.20597098214286 77.23136L 70.72483258928571 77.23136L 70.72483258928571 77.23136L 70.72483258928571 168.9436L 70.72483258928571 168.9436z"
																	fill="rgba(194,161,252,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="1"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 27.20597098214286 168.9436L 27.20597098214286 77.23136L 70.72483258928571 77.23136L 70.72483258928571 77.23136L 70.72483258928571 168.9436L 70.72483258928571 168.9436z"
																	pathFrom="M 27.20597098214286 168.9436L 27.20597098214286 168.9436L 70.72483258928571 168.9436L 70.72483258928571 168.9436L 70.72483258928571 168.9436L 27.20597098214286 168.9436"
																	cy="77.23136" cx="125.63677455357143" j="0"
																	val="760" barHeight="91.71224000000001"
																	barWidth="44.51886160714285"></path>
																<path id="SvgjsPath1684"
																	d="M 126.13677455357143 174.9773L 126.13677455357143 72.40440000000001L 169.65563616071427 72.40440000000001L 169.65563616071427 72.40440000000001L 169.65563616071427 174.9773L 169.65563616071427 174.9773z"
																	fill="rgba(194,161,252,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="1"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 126.13677455357143 174.9773L 126.13677455357143 72.40440000000001L 169.65563616071427 72.40440000000001L 169.65563616071427 72.40440000000001L 169.65563616071427 174.9773L 169.65563616071427 174.9773z"
																	pathFrom="M 126.13677455357143 174.9773L 126.13677455357143 174.9773L 169.65563616071427 174.9773L 169.65563616071427 174.9773L 169.65563616071427 174.9773L 126.13677455357143 174.9773"
																	selected="true" filter="url(#SvgjsFilter1686)"
																	cy="72.40440000000001" cx="224.567578125" j="1"
																	val="850" barHeight="102.5729"
																	barWidth="44.51886160714285"></path>
																<path id="SvgjsPath1692"
																	d="M 225.067578125 138.7751L 225.067578125 17.98042600000001L 268.5864397321429 17.98042600000001L 268.5864397321429 17.98042600000001L 268.5864397321429 138.7751L 268.5864397321429 138.7751z"
																	fill="rgba(194,161,252,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="1"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 225.067578125 138.7751L 225.067578125 17.98042600000001L 268.5864397321429 17.98042600000001L 268.5864397321429 17.98042600000001L 268.5864397321429 138.7751L 268.5864397321429 138.7751z"
																	pathFrom="M 225.067578125 138.7751L 225.067578125 138.7751L 268.5864397321429 138.7751L 268.5864397321429 138.7751L 268.5864397321429 138.7751L 225.067578125 138.7751"
																	cy="17.98042600000001" cx="323.49838169642857" j="2"
																	val="1001" barHeight="120.794674"
																	barWidth="44.51886160714285"></path>
																<path id="SvgjsPath1693"
																	d="M 323.99838169642857 187.0447L 323.99838169642857 68.78418L 367.51724330357143 68.78418L 367.51724330357143 68.78418L 367.51724330357143 187.0447L 367.51724330357143 187.0447z"
																	fill="rgba(194,161,252,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="1"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 323.99838169642857 187.0447L 323.99838169642857 68.78418L 367.51724330357143 68.78418L 367.51724330357143 68.78418L 367.51724330357143 187.0447L 367.51724330357143 187.0447z"
																	pathFrom="M 323.99838169642857 187.0447L 323.99838169642857 187.0447L 367.51724330357143 187.0447L 367.51724330357143 187.0447L 367.51724330357143 187.0447L 323.99838169642857 187.0447"
																	cy="68.78418" cx="422.4291852678571" j="3" val="980"
																	barHeight="118.26052" barWidth="44.51886160714285">
																</path>
																<path id="SvgjsPath1694"
																	d="M 422.9291852678571 150.84250000000003L 422.9291852678571 45.85612000000003L 466.448046875 45.85612000000003L 466.448046875 45.85612000000003L 466.448046875 150.84250000000003L 466.448046875 150.84250000000003z"
																	fill="rgba(194,161,252,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="1"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 422.9291852678571 150.84250000000003L 422.9291852678571 45.85612000000003L 466.448046875 45.85612000000003L 466.448046875 45.85612000000003L 466.448046875 150.84250000000003L 466.448046875 150.84250000000003z"
																	pathFrom="M 422.9291852678571 150.84250000000003L 422.9291852678571 150.84250000000003L 466.448046875 150.84250000000003L 466.448046875 150.84250000000003L 466.448046875 150.84250000000003L 422.9291852678571 150.84250000000003"
																	cy="45.85612000000003" cx="521.3599888392857" j="4"
																	val="870" barHeight="104.98638"
																	barWidth="44.51886160714285"></path>
																<path id="SvgjsPath1695"
																	d="M 521.8599888392857 126.70770000000002L 521.8599888392857 5.430330000000012L 565.3788504464286 5.430330000000012L 565.3788504464286 5.430330000000012L 565.3788504464286 126.70770000000002L 565.3788504464286 126.70770000000002z"
																	fill="rgba(194,161,252,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="1"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 521.8599888392857 126.70770000000002L 521.8599888392857 5.430330000000012L 565.3788504464286 5.430330000000012L 565.3788504464286 5.430330000000012L 565.3788504464286 126.70770000000002L 565.3788504464286 126.70770000000002z"
																	pathFrom="M 521.8599888392857 126.70770000000002L 521.8599888392857 126.70770000000002L 565.3788504464286 126.70770000000002L 565.3788504464286 126.70770000000002L 565.3788504464286 126.70770000000002L 521.8599888392857 126.70770000000002"
																	cy="5.430330000000012" cx="620.2907924107143" j="5"
																	val="1005" barHeight="121.27737"
																	barWidth="44.51886160714285"></path>
																<path id="SvgjsPath1696"
																	d="M 620.7907924107143 165.32338000000001L 620.7907924107143 55.51004000000002L 664.3096540178572 55.51004000000002L 664.3096540178572 55.51004000000002L 664.3096540178572 165.32338000000001L 664.3096540178572 165.32338000000001z"
																	fill="rgba(194,161,252,1)" fill-opacity="1"
																	stroke-opacity="1" stroke-linecap="square"
																	stroke-width="0" stroke-dasharray="0"
																	class="apexcharts-bar-area" index="1"
																	clip-path="url(#gridRectMasky1dfs2t1)"
																	pathTo="M 620.7907924107143 165.32338000000001L 620.7907924107143 55.51004000000002L 664.3096540178572 55.51004000000002L 664.3096540178572 55.51004000000002L 664.3096540178572 165.32338000000001L 664.3096540178572 165.32338000000001z"
																	pathFrom="M 620.7907924107143 165.32338000000001L 620.7907924107143 165.32338000000001L 664.3096540178572 165.32338000000001L 664.3096540178572 165.32338000000001L 664.3096540178572 165.32338000000001L 620.7907924107143 165.32338000000001"
																	cy="55.51004000000002" cx="719.2215959821428" j="6"
																	val="910" barHeight="109.81334"
																	barWidth="44.51886160714285"></path>
																<g id="SvgjsG1682" class="apexcharts-datalabels"
																	data:realIndex="1"></g>
															</g>
															<g id="SvgjsG1673" class="apexcharts-datalabels"
																data:realIndex="0"></g>
														</g>
														<line id="SvgjsLine1773" x1="0" y1="0" x2="692.515625" y2="0"
															stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
															class="apexcharts-ycrosshairs"></line>
														<line id="SvgjsLine1774" x1="0" y1="0" x2="692.515625" y2="0"
															stroke-dasharray="0" stroke-width="0"
															class="apexcharts-ycrosshairs-hidden"></line>
														<g id="SvgjsG1775" class="apexcharts-yaxis-annotations"></g>
														<g id="SvgjsG1776" class="apexcharts-xaxis-annotations"></g>
														<g id="SvgjsG1777" class="apexcharts-point-annotations"></g>
													</g>
													<g id="SvgjsG1736" class="apexcharts-yaxis" rel="0"
														transform="translate(21.484375, 0)">
														<g id="SvgjsG1737" class="apexcharts-yaxis-texts-g"><text
																id="SvgjsText1738"
																font-family="Helvetica, Arial, sans-serif" x="20"
																y="31.4" text-anchor="end" dominant-baseline="auto"
																font-size="11px" font-weight="400" fill="#373d3f"
																class="apexcharts-text apexcharts-yaxis-label "
																style="font-family: Helvetica, Arial, sans-serif;">
																<tspan id="SvgjsTspan1739">2000</tspan>
															</text><text id="SvgjsText1740"
																font-family="Helvetica, Arial, sans-serif" x="20"
																y="91.73700000000001" text-anchor="end"
																dominant-baseline="auto" font-size="11px"
																font-weight="400" fill="#373d3f"
																class="apexcharts-text apexcharts-yaxis-label "
																style="font-family: Helvetica, Arial, sans-serif;">
																<tspan id="SvgjsTspan1741">1500</tspan>
															</text><text id="SvgjsText1742"
																font-family="Helvetica, Arial, sans-serif" x="20"
																y="152.074" text-anchor="end" dominant-baseline="auto"
																font-size="11px" font-weight="400" fill="#373d3f"
																class="apexcharts-text apexcharts-yaxis-label "
																style="font-family: Helvetica, Arial, sans-serif;">
																<tspan id="SvgjsTspan1743">1000</tspan>
															</text><text id="SvgjsText1744"
																font-family="Helvetica, Arial, sans-serif" x="20"
																y="212.41100000000003" text-anchor="end"
																dominant-baseline="auto" font-size="11px"
																font-weight="400" fill="#373d3f"
																class="apexcharts-text apexcharts-yaxis-label "
																style="font-family: Helvetica, Arial, sans-serif;">
																<tspan id="SvgjsTspan1745">500</tspan>
															</text><text id="SvgjsText1746"
																font-family="Helvetica, Arial, sans-serif" x="20"
																y="272.748" text-anchor="end" dominant-baseline="auto"
																font-size="11px" font-weight="400" fill="#373d3f"
																class="apexcharts-text apexcharts-yaxis-label "
																style="font-family: Helvetica, Arial, sans-serif;">
																<tspan id="SvgjsTspan1747">0</tspan>
															</text></g>
														<g id="SvgjsG1748" class="apexcharts-yaxis-title"><text
																id="SvgjsText1749"
																font-family="Helvetica, Arial, sans-serif"
																x="-19.484375" y="150.674" text-anchor="end"
																dominant-baseline="auto" font-size="11px"
																font-weight="900" fill="#373d3f"
																class="apexcharts-text apexcharts-yaxis-title-text "
																style="font-family: Helvetica, Arial, sans-serif;"
																transform="rotate(-90 0 0)"></text></g>
													</g>
													<g id="SvgjsG1659" class="apexcharts-annotations"></g>
												</svg>
												<div class="apexcharts-legend "></div>
												<!-- <div class="apexcharts-tooltip apexcharts-theme-light"
													style="left: 99.313px; top: 163px;">
													<div class="apexcharts-tooltip-title"
														style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
														Jan</div>
													<div class="apexcharts-tooltip-series-group apexcharts-active"
														style="display: flex;"><span class="apexcharts-tooltip-marker"
															style="background-color: rgb(105, 99, 187);"></span>
														<div class="apexcharts-tooltip-text"
															style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
															<div class="apexcharts-tooltip-y-group"><span
																	class="apexcharts-tooltip-text-label">Ticket Solved:
																</span><span
																	class="apexcharts-tooltip-text-value">600</span>
															</div>
															<div class="apexcharts-tooltip-z-group"><span
																	class="apexcharts-tooltip-text-z-label"></span><span
																	class="apexcharts-tooltip-text-z-value"></span>
															</div>
														</div>
													</div>
													<div class="apexcharts-tooltip-series-group" style="display: none;">
														<span class="apexcharts-tooltip-marker"
															style="background-color: rgb(105, 99, 187);"></span>
														<div class="apexcharts-tooltip-text"
															style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
															<div class="apexcharts-tooltip-y-group"><span
																	class="apexcharts-tooltip-text-label">Ticket Solved:
																</span><span
																	class="apexcharts-tooltip-text-value">600</span>
															</div>
															<div class="apexcharts-tooltip-z-group"><span
																	class="apexcharts-tooltip-text-z-label"></span><span
																	class="apexcharts-tooltip-text-z-value"></span>
															</div>
														</div>
													</div>
												</div> -->
												<div
													class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
													<div class="apexcharts-yaxistooltip-text"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="est-img">
							 <img src="assets/img/ticketing/chart1.png" class="img-fluid">
							 </div> -->

							</div>
						</div>
					</div>
					<div class="col-xxl-4 col-lg-4">
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
								<h4 class="fw-500 fs-20 m-0">Customer statification</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-6 be-1 bb-1 ">
										<div class="card border border-0 shadow-none ps-10 px-2 py-2">
											<div>
												<p class="text-mute m-0 mb-4">Responses Received</p>
												<h3 class="mb-0 fw-500 l-h-50">180 Customer</h3>
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
										<p class="text-body fs-12">List of ticket open by Customers</p>
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
					<?php include 'includes/footer.php'; ?>
				</div>





				<!-- /Page Wrapper -->



			</div>
			<!-- /Main Wrapper -->
			 </div>
			 </div>

			<?php include 'includes/script.php'; ?>

</body>

</html>