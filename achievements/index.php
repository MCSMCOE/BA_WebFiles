<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include ("../inc/metatags.php"); ?>
		<?php include ("../inc/conn.php");
		$con=locdb();
		?>
		<link rel="stylesheet" type="text/css" href="/css/timeline.css">
		<!-- PAGE TITLE HERE -->
		<title>Kaamadhenu Arts and Science College</title>
		<?php include ("../inc/headerscript.php"); ?>
		<!-- Revolution Navigation Style -->
		<style type="text/css">
		.timeline {
		--timelineMainColor: #48246e;
		font-size: 16px;
		--uiTimelineSecondaryColor: #faf4e3;
		}
		.page__container {
		padding-top: 0px;
		padding-bottom: 30px;
		}
		</style>
	</head>
	<body id="bg">
		<div class="page-wraper">
			<div id="loading-area">
				<div class="bag"></div>
			</div>
			<?php include ("../inc/header.php"); ?>
			
			<!-- Content -->
			<div class="page-content bg-white">
				<!-- inner page banner -->
				<div class="bnr-inr bg-pt" style="background-image:url(/images/banner/bnr1.jpg);">
					<div class="container">
						
						<div class="bnr-inr-entry text-center">
							<h1 class="text-capitalize"><span>Achievements</span></h1>
							<!-- Breadcrumb row -->
							<div class="breadcrumb-row">
								<ul class="list-inline">
									
									<li><a href="/" title="Departments">Home</a>
									<li><a href="javascript:void(0)">About</a></li>
								</li>
								<!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
								<li class="text-capitalize">Achievements</li>
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
							<div class="col-md-12">
								<div class="main-container page__container">
									<div class="timeline">
										<div class="timeline__group">
											<br>
											<div class="text-center" id="load_data"></div>
											<br>
   <div class="text-center" id="load_data_message"></div>
											
										</div>
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- contact area END -->
		</div>
		<!-- Content END-->
		
		<?php include ("../inc/footer.php");
		mysqli_close($con);
		?>
		
		<?php include ("../inc/footerscript.php"); ?>
		<script>
		$(document).ready(function(){
		
		var limit = 7;
		var start = 0;
		var action = 'inactive';
		function load_country_data(limit, start)
		{
		$.ajax({
		url:"fetch.php",
		method:"POST",
		data:{limit:limit, start:start},
		cache:false,
		success:function(data)
		{
		$('#load_data').append(data);
		if(data == '')
		{
		$('#load_data_message').html("");
		action = 'active';
		}
		else
		{
		$('#load_data_message').html("Loading...");
		action = "inactive";
		}
		}
		});
		}
		if(action == 'inactive')
		{
		action = 'active';
		load_country_data(limit, start);
		}
		$(window).scroll(function(){
		if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
		{
		action = 'active';
		start = start + limit;
		setTimeout(function(){
		load_country_data(limit, start);
		}, 1000);
		}
		});
		
		});
		</script>
		
		
	</div>
	
</body>

</html>