<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include ("../../inc/metatags.php"); ?>
		<?php include ("../../inc/conn.php");
 $con=locdb();
		 ?>
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
                                <h1 class="text-capitalize"><span>Sustainability &amp; Green Initiatives</span></h1>
                                <!-- Breadcrumb row -->
                                <div class="breadcrumb-row">
                                    <ul class="list-inline">
                                        
                                        <li><a href="/" title="">Home</a>
                                        	<li><a href="javascript:void(0)">About</a></li>
                                    </li>
                                    <!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
                                    <li class="text-capitalize">Sustainability &amp; Green Initiatives</li>
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
											<li class="active"><a href="javascript:void(0)" onclick="pils('p1');">Sustainability &amp; Green Initiatives</a></li>
											<li ><a href="javascript:void(0)" onclick="pils('p2');">Bio gas</a></li>
											<li ><a href="javascript:void(0)" onclick="pils('p3');">Solar</a></li>
											<li ><a href="javascript:void(0)" onclick="pils('p4');">Tree Census</a></li>
											<li ><a href="javascript:void(0)" onclick="pils('p5');">Biocomposting</a></li>
											<li ><a href="javascript:void(0)" onclick="pils('p6');">Kitchen Garden</a></li>

										</ul>
										
										<div class="widget m-b30 ">
										 <div class="fb-page" data-href="https://www.facebook.com/kascsathyindia/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kascsathyindia/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kascsathyindia/">Bannari Amman Institute of Technology</a></blockquote></div>

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
			
			<?php include ("../../inc/footer.php"); 
			mysqli_close($con);
			 include ("../../inc/footerscript.php"); ?>
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
	line-height: 2;
	padding-left:0em;
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