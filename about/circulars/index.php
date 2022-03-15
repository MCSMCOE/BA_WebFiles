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
                                <h1 class="text-capitalize"><span>CIRCULARS</span></h1>
                                <!-- Breadcrumb row -->
                                <div class="breadcrumb-row">
                                    <ul class="list-inline">
                                        
                                          <li><a href="/">Home</a></li>
									<li><a href="#">Circulars</a></li>

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
                            <div class="col-lg-12 col-md-10 value">
                                <h2 class="m-t0 m-b10 fw6" style="margin-left: 0px">Circulars - AICTE/ University/ NBA/ NAAC/ UGC/ BIT</h2>
                                <div class="col-md-12">
                                </div>
                            </div>
                        </div>
                    </div>




						<div class="container">
							
							<div class="row">
								
								<div class="col-lg-3 col-md-4">


									<div class="sticky-top">

										<ul id="pilactive" class="service-list m-b30">

										<li class="active"><a href="javascript:void(0)" onclick="pils('p1');">AICTE</a></li>
										<li><a href="javascript:void(0)" onclick="pils('p2');">Anna University</a></li>
										<li><a href="javascript:void(0)" onclick="pils('p3');">NBA</a></li>
										<li><a href="javascript:void(0)" onclick="pils('p4');">NAAC</a></li>
										<li><a href="javascript:void(0)" onclick="pils('p5');">DoTE</a></li>
										<li><a href="javascript:void(0)" onclick="pils('p6');">UGC</a></li>											
										</ul>
										
										
										
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
			 ?>
			
			<?php include ("../../inc/footerscript.php"); ?>
			<script type="">
				function pils(learning){
			$.ajax({url: "pill.php?pill="+learning, success: function(result){
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
				.well {
					background: #fff;
					box-shadow: 0px 0px 6px rgba(0,0,0,0.1);
				}
				.well-sm {
				padding: 9px;
				border-radius: 3px;
				}
				.well {
				min-height: 20px;
				padding: 19px;
				margin-bottom: 20px;
				background-color: #f5f5f5;
				border: 1px solid #e3e3e3;
				border-radius: 4px;
				-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
				box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
				}
				 @media (max-width: 768px) {
     .welll-sm{
              text-align: center;
       } 
    }
    h3 {

    text-align: start;
    margin-bottom: 40px;
}



	ul{
	list-style: none;
	line-height: 2;
	padding-left:1em;
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