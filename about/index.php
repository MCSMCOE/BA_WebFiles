<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include ("../inc/metatags.php"); ?>
		<?php require ("../inc/conn.php");
		 $con=locdb();
		 
		 ?>
		<!-- PAGE TITLE HERE -->
        <title>Kaamadhenu Arts and Science College</title>
		<?php include ("../inc/headerscript.php"); ?>
		<!-- Revolution Navigation Style -->
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
							<h1 class="text-capitalize"><span>BIT at Glance</span></h1>
							<!-- Breadcrumb row -->
							<div class="breadcrumb-row">
								<ul class="list-inline">
									
									<li><a href="/" title="Departments">Home</a>
									<li><a href="javascript:void(0)">About</a></li>
								</li>
								<!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
								<li class="text-capitalize">BIT at Glance</li>
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
							<div class="col-lg-3 col-md-4">
								<div class="sticky-top">
									<ul id="pilactive" class="service-list m-b30">
										<li class="active"><a href="javascript:void(0)" onclick="pils('p1');">BIT at a Glance </a></li>
							<!--<li><a href="javascript:void(0)" onclick="pils('p2');">Shared Values of BIT</a></li>-->
										
									</ul>
									
									<!-- <div class="download-brochure m-b30 ">
										<h4>Download <b>Brochure</b></h4>
										
										<a href="https://www.kascsathy.ac.in/pdf/Brochure.pdf" target="_blank"
										class="site-button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;Download PDF</a>
									</div> -->
									<div class="service-help bg-primary m-b30 text-center">
									<i class="flaticon-notebook"></i>
									<h4>Brochure</h4>
									
										<a href="/pdf/Brochure.pdf" target="_blank"
										class="site-button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;Download PDF</a>
									
								</div>
								</div>
							</div>
							<div id="npills" class="col-lg-9 col-md-8 value">
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- contact area END -->
		</div>
		<!-- Content END-->
		
   <?php include("../inc/footer.php");
        mysqli_close($con);
        ?>
        <?php include("../inc/footerscript.php"); ?>
		
		<script type="">
			function pils(about){
		$.ajax({url: "pill.php?pill="+about, success: function(result){
		$("#npills").html(result);
		}});
		}
		pils('p1');
		
		$( '#pilactive li' ).on( 'click', function() {
		$( this ).parent().find( 'li.active' ).removeClass( 'active' );
		$( this ).addClass( 'active' );
		});
		</script>
		
		
	</div>
	
</body>
<style type="text/css">

ul{
list-style: none;
/*line-height: 2;*/
padding-left:2em;
}
ul li{



}
.value li:before {
    content: '';
    display: inline-block;
    height: 1em;
    width: 1em;
   
    background-image: url(/img/list/link.svg);
    background-size: contain;
    background-repeat: no-repeat;
    margin-right:0.5em;   
  }
</style>
</html>