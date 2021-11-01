<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include ("../../inc/metatags.php"); ?>
		<?php require ("../../inc/conn.php");
		$con=locdb();
		?>
		<!-- PAGE TITLE HERE -->
		<title>Kaamadhenu college of arts and science</title>
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
							<h1 class="text-capitalize"><span>Activities</span></h1>
							<!-- Breadcrumb row -->
							<div class="breadcrumb-row">
								<ul class="list-inline">
									
									<li><a href="/" title="">Home</a>
									
								</li>
								<li><a href="#">Activities</a></li>

							</ul>
						</div>
						<!-- Breadcrumb row END -->
					</div>
				</div>
			</div>
			<!-- inner page banner END -->
			<!-- contact area -->
			<div class="content-block">
				<!-- Portfolio  -->
				<div class="section-full content-inner-2 portfolio bg-white" id="portfolio">
					<div class="container">
						<div class="site-filters clearfix center  m-b40">
							<ul class="filters" data-toggle="buttons">
								
								<li data-filter="1" class="btn">
									<input type="radio">
									<a href="javascript:void(null)" class="site-button-secondry"><span>Clubs</span></a>
								</li>
								<li data-filter="2" class="btn">
									<input type="radio">
									<a href="javascript:void(null)" class="site-button-secondry"><span>Societies</span></a>
								</li>
								
							</ul>
						</div>
						<div class="clearfix">
							<ul id="masonry" class=" gallery-listing gallery-grid-4 gallery mfp-gallery text-center">
								<?php
								$qry_category='SELECT sno,c_name,d_filter,link FROM clubs WHERE STATUS=1 ORDER BY c_name';
														$qry_category = mysqli_query($con, $qry_category);
								while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
								{
                                    ?>
                                    <li class="<?php echo $rows_mastercategory['d_filter'] ?> card-container col-lg-4 col-md-6 col-sm-6 ">
                                        <div class="box gallery-box">
                                            <!--										<div class="media img-effect">-->
                                            <!--											<a href="/activities/clubs/details/?club=-->
                                            <?php //echo base64_encode($rows_mastercategory['sno']*101995);
                                            ?><!--">-->
                                            <!--											<img style="height:300px" width="500px" src="/images/activities/clubs/-->
                                            <?php //echo $rows_mastercategory['sno']
                                            ?><!--.jpg"  alt="">-->
                                            <!--                                            </a>-->
                                            <!--											-->
                                            <!--										</div>-->
                                            <div class="dez-info p-a30 bg-white">
                                                <h5 class="dez-title m-t0"><a target="blank" style=""
                                                                              href="/activities/clubs/details/?club=<?php echo base64_encode($rows_mastercategory['sno'] * 101995); ?>"><?php echo $rows_mastercategory['c_name'] ?></a>
                                                </h5>

                                            </div>
                                        </div>
                                    </li>

                                    <?php
                                }
														
														
								?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- contact area END -->
		</div>
	</div>
	<!-- Content END-->
	<?php include ("../../inc/footer.php");
	mysqli_close($con);
	?>
	<?php include ("../../inc/footerscript.php"); ?>
</div>
</body>
</html>