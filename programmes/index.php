<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
         include ("../inc/metatags.php");
		 include ("../inc/conn.php");
    
		$con=locdb();
      
        error_reporting(E_ALL);
        ini_set('display_errors', 0);
		?>
		<!-- PAGE TITLE HERE -->
		<title>KASC | Programmes</title>
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
				
			<div class="bnr-inr bg-pt" style="background-image:url(/images/banner/deptm01.jpg);">
					<div class="container">
						 <div class="bnr-inr-entry text-center">
                                <h1 class="text-capitalize"><span>Programmes</span></h1>
                                <!-- Breadcrumb row -->
                                <div class="breadcrumb-row">
                                    <ul class="list-inline">
                                        
                                        <li><a href="/" title="">Home</a>
                                            
                                    </li>
                                   
                                    <li>Programmes</li>
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
                            <li data-filter="" class="btn active">
                                <input type="radio">
                                <a href="#" class="site-button-secondry"><span>All</span></a>
                            </li>
                            <li data-filter="1" class="btn">
                                <input type="radio">
                                <a href="eng" class="site-button-secondry"><span>UG-Programmes </span></a>
                            </li>

                            <li data-filter="2" class="btn">
                                <input type="radio">
                                <a href="eng" class="site-button-secondry"><span>PG-Programmes </span></a>
                            </li>

                            <li data-filter="10" class="btn">
                                <input type="radio">
                                <a href="tech" class="site-button-secondry"><span>Research Programmes</span></a>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix">
                        <ul id="masonry" class=" gallery-listing gallery-grid-4 gallery mfp-gallery text-center">
                            <?php
                            $qry_category = "SELECT org_id,programme_code,programme_name,dept_id FROM master_programme WHERE STATUS=1 ORDER BY orderby";
                            $qry_category = mysqli_query($con, $qry_category);
                            while ($rows_mastercategory = mysqli_fetch_assoc($qry_category)) {
                                ?>
                                <li class="<?php echo $rows_mastercategory['org_id'] ?> design card-container col-lg-4 col-md-6 col-sm-6 ">
                                    <div class="box gallery-box">

                                        <div class="dez-info p-a30 bg-white">
                                            <h5 class="dez-title m-t0 text-capitalize">
                                                <a href="#"><?php echo $rows_mastercategory['programme_code'] ?>
                                                    - <?php echo $rows_mastercategory['programme_name'] ?></a>
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
			<!-- Content END-->
			
			<?php include ("../inc/footer.php");
			 mysqli_close($con);
            mysqli_close($conc);
			 ?>
			
			<?php include ("../inc/footerscript.php"); ?>
			
			
		</div>
		
	</body>
</html>