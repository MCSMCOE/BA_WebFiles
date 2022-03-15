<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include ("../../inc/metatags.php"); ?>
		<?php include ("../../inc/conn.php");
		$con=locdb();?>
		<!-- PAGE TITLE HERE -->
        <title>Kaamadhenu Arts and Science College</title>
		<?php include ("../../inc/headerscript.php"); ?>
		<!-- Revolution Navigation Style -->
	</head>
	<body id="bg">
		<div class="page-wraper">
			<div id="loading-area">
				<div class="bag"></div>
			</div>
			<?php include ("../../inc/header.php"); ?>
			
			<!-- Content -->
			<div class="page-content bg-white">
				<!-- inner page banner -->
				<div class="bnr-inr bg-pt" style="background-image:url(/images/banner/bnr1.jpg);">
					<div class="container">
						
						<div class="bnr-inr-entry text-center">
							<h1 class="text-capitalize"><span>Vision &amp; Mission</span></h1>
							<!-- Breadcrumb row -->
							<div class="breadcrumb-row">
								<ul class="list-inline">
									
									<li><a href="/" title="Departments">Home</a>
									<li><a href="javascript:void(0)">About</a></li>
								</li>
								<!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
								<li class="text-capitalize">Vision &amp; Mission</li>
							</ul>
						</div>
						<!-- Breadcrumb row END -->
					</div>
					
				</div>
			</div>
			<!-- inner page banner END -->
			<!-- contact area -->
			<div class="content-block">
				<div class="section-full content-inner">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-4">
								<h2 class="m-t0 m-b10 fw6" style="margin-left: 14px">Vision</h2>
								<ul class="container list-icon" style="list-style: none">
									<li>To elevate the rural aspiring students in the academic and non academic sphere thereby
transforming them into environmentally sensitive and self-reliant citizens of the Nation</li>
								</ul>
								<h2 class="m-t0 m-b10 fw6" style="margin-left: 14px">Mission</h2>
								<ul class="list-check primary">

									<li>To strengthen the rural youth through sustained pedagogy aimed at expanding their
moral and intellectual horizon</li>
									<li>To stoke the entrepreneurial skills and hone the economic capabilities with constant training programmes and placement initiatives</li>
									<li>To impart environmental awareness and responsibility among students to endeavour a green society</li>
									<!--<li>To make the students dust and sweat in playground through sports activities and calm their spirits through yoga</li>-->
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- contact area END -->
		</div>
		<!-- Content END-->
		
		<?php include ("../../inc/footer.php");
		mysqli_close($con);
		?>
		
		<?php include ("../../inc/footerscript.php"); ?>
		
		
	</div>
	
</body>

</html>