<!DOCTYPE html>
<html lang="en">
	<head>
		
		
		<?php
		$id;
		include ("../inc/conn.php");
		include ("../inc/connect.php");
		$con=locdb();
		$conc=campsdb();
		
		//error_reporting(E_ALL);
		//ini_set('display_errors', 0);
		if(isset($_GET['dep_id']))
		$dep_id=base64_decode($_GET['dep_id'])/101995;		
		else
		{
		$dep_id=($_GET['deptt_id']);
		}
		
		?>
		<?php include ("../inc/metatags.php"); ?>
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
				<?php
					{
					?>
				<div class="bnr-inr bg-pt" style="background-image:url(/images/banner/bnr1.jpg);">

					<?php
				     }
				     ?>
					<div class="container">
						
						<div class="bnr-inr-entry text-center">
							<h1 class="text-capitalize"><span>Faculty Members</span></h1>
							<!-- Breadcrumb row -->
							<div class="breadcrumb-row">
								<ul class="list-inline">
									
									<li class="text-capitalize"></li>
									
								</ul>
							</div>
							<!-- Breadcrumb row END -->
						</div>
						
					</div>
				</div>
				<!-- inner page banner END -->
				<!-- contact area -->
				<section>
					<div class="content-block">
						
						<div class="section-full content-inner-2 portfolio bg-white">
							<div class="container">
								<div class="clearfix">
									<ul id="masonry" class=" gallery-listing gallery-grid-4 gallery mfp-gallery text-center" >
                        <?php
                        $i=1;
                        $qry_category="SELECT staff_master.`staff_id`,master_desigination.`desigination`,GROUP_CONCAT(staff_promotion.`md_id`),
    `staff_master`.`legend` , `staff_master`.`first_name`
    , `staff_master`.`department_id`, `master_department`.`dept_name`
    , `staff_photo`.`photo` , `staff_degree_type`.`deg_type`, `staff_promotion`.`status`
    , `staff_qualification`.`status`,staff_promotion.`from_date`,GROUP_CONCAT(deg_type) FROM
    `camps`.`staff_master` INNER JOIN `camps`.`master_department`
        ON (`staff_master`.`department_id` = `master_department`.`department_id`)
    INNER JOIN `camps`.`staff_photo`
        ON (`staff_photo`.`staff_id` = `staff_master`.`staff_id`)
    INNER JOIN `camps`.`staff_promotion`
        ON (`staff_promotion`.`staff_id` = `staff_master`.`staff_id`)
    INNER JOIN `camps`.`staff_qualification`
        ON (`staff_qualification`.`staff_id` = `staff_master`.`staff_id` AND staff_qualification.`status`=1)
        INNER JOIN camps.`master_desigination` ON master_desigination.`md_id`=staff_promotion.`md_id`
    INNER JOIN `camps`.`staff_degree_type`
        ON (`staff_qualification`.`degree_id` = `staff_degree_type`.`degree_id`) WHERE staff_promotion.`status`=2 GROUP BY staff_master.`staff_id`;
";
                        $qry_category = mysqli_query($conc, $qry_category);
                        if(mysqli_num_rows($qry_category)>0)
                        {
                        while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
                        {
                        
                        ?>
                       <li class="advertising branding photography card-container col-lg-4 col-md-6 col-sm-6 " >
											<div class="box gallery-box">
												<div class="dez-info">
													<div class="well well-sm">
														<div class="row">
															<div align="center" class="col-sm-6 col-md-4">

                         <img style="width:150px; height: 150px; box-shadow:  0 0 2px #000" src="data:image/jpeg;base64,<?php echo base64_encode($rows_mastercategory['photo']);?>" alt="" class="img-fluid rounded-circle">
                         </div>
															<div style="align-items: left" class="welll-sm m-t30">

                       <h5 style="text-transform: capitalize;">
		<a href="">
		<?php echo $rows_mastercategory['first_name'];  ?></a></h5>
		<h6 style="font-size: 13px; font-weight: 400;"><?php echo $rows_mastercategory['desigination'];  ?></h6>


                      <?php
                      
                      
                      }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
				</div>
			</section>
			<div class="section-full content-inner bg-white">
			</div>
			<!-- Content END-->
			
			<?php include ("../inc/footer.php"); 
            mysqli_close($con);
            mysqli_close($conc);
            
            ?>
			
			<?php include ("../inc/footerscript.php"); ?>
			<style type="text/css">
				.well {
				background: #fff;
				box-shadow: 0px 0px 6px rgba(0,0,0,0.1);
				}
				.well-sm {
				padding: 9px;
				border-radius: 3px;
				}
				.capitalize
				{
				text-transform: capitalize;
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
				margin-left: 70px;
				margin-top: 10px;
				}
				}
			</style>
		</div>
		
	</body>
</html>