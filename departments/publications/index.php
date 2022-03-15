<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
				$id;
				include("../../inc/connect1.php");
				include("../../inc/conn.php");
        $con=locdb();
        $conc=campsdb();
		$dbcon=campsdbb();
				error_reporting(E_ALL);
				ini_set('display_errors', 0);
			
				if(isset($_GET['dep_id']))
						$id=base64_decode($_GET['dep_id'])/101995;
				else
				{
				$id=($_GET['dep_id']);
				}
				
		?>
		<?php include ("../../inc/metatags.php"); ?>
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
						<?php
							$qry_category="SELECT   `dept_id`,  `dept_code`,  LOWER(dept_name) dept_name,  `om_id`,  `category`,  `dep_idCode`,  `dept_order_no`,  `delete_status`,  `date_created`FROM  `kascsathy`.`department_master` WHERE dept_id='".$id."' ;
						";
								$qry_category = mysqli_query($con, $qry_category);
							while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
								
							{
						?>
						<!-- <div class="bnr-inr-entry text-center">
							<h1>Publications</h1>
					
							<div class="breadcrumb-row">
								<ul class="list-inline">
									
									<li class="text-capitalize"><?php echo $rows_mastercategory['dept_name'] ?></li>
									
								</ul>
							</div>
						
						</div> -->
						 <div class="bnr-inr-entry text-center" style="font-family: 'Poppins'; font-size: 16px;">
                                <h1 class="text-capitalize"><span>Publications</span></h1>
                                <!-- Breadcrumb row -->
                                <div class="breadcrumb-row">
                                    <ul class="list-inline">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/departments/" data-toggle="tooltip" title="Departments">Departments</a>
                                    </li>
                                    <!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
                                    <li class="text-capitalize"><?php echo $rows_mastercategory['dept_name'] ?></li>
                                </ul>
                            </div>
                            <!-- Breadcrumb row END -->
                        </div>




						<?php
															}
															
															
						?>
					</div>
				</div>
				<!-- inner page banner END -->
				<!-- contact area -->
				<div class="content-block">
					<div class="section-full content-inner bg-white">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 col-md-10 m-t15 col-sm-6 m-b30">
									
									<table id="mydTable" class="ui celled table display table table-striped table-bordered" width="100%" data-page-length="70" data-order="[[ 0, &quot;asc&quot; ]]">
										<thead>
											<tr>
												<th style="color:#172eb5 ; text-align: center; font-size: 15px;width: 43px;" scope="col">S No</th>
												<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Publication Details</th>
												
											</tr>
										</thead>
										<tbody>
											<?php
											$sno=1;
																				$incval=0;
																				$qry_category= "SELECT MIN(YEAR(spv.doj)) yoj,MAX(IF(av.am_id='16',av.txt_val,'') ) Title,MAX(IF(av.am_id='17',av.txt_val,'') ) Author,MAX(IF(av.am_id='25',alv.list_value,'') ) Mon,MAX(IF(av.am_id='24',alv.list_value,'') ) yr,MAX(IF(av.am_id='31',av.txt_val,'') ) issue,  MAX(IF(av.am_id='72',av.txt_val,'') ) Volume,MAX(IF(av.am_id='65',av.int_val,'') ) fpage,MAX(IF(av.am_id='66',av.int_val,'') ) tpage,MAX(IF(av.am_id='28',av.txt_val,'') ) JournalName,MAX(IF(av.am_id='125',alv.list_value,'') ) display FROM documentation.record_master rm INNER JOIN (documentation.record_ss_mapping rsm INNER JOIN camps.staff_personal_copy spv ON spv.dep_id='".mysqli_real_escape_string($conc, $id)."' AND FIND_IN_SET(spv.staff_id,rsm.ss_id)) ON rm.rm_id=rsm.rm_id  AND rm.status>0 AND rsm.status>0 AND rm.im_id='8' LEFT JOIN documentation.attr_values av  ON  av.status>0 AND av.rm_id=rm.rm_id  LEFT JOIN documentation.attribute_list_values alv ON alv.am_id=av.am_id AND alv.status>0 AND alv.alv_id=av.int_val GROUP BY rm.rm_id HAVING yoj<=yr AND display='Yes'  ORDER BY yr DESC";
																				//echo "$qry_category";
																				$qry_category = mysqli_query($conc, $qry_category);
																				if(mysqli_num_rows($qry_category)>0)
																				{
																				while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
																				{
											?>
											<tr>
												<td style="text-align: center;" scope="row"><?php echo $sno++ ?></td>
												<td>
													<?php echo $rows_mastercategory['Author'];?>,&nbsp;
                                                    "<font style="font-weight:500"><?php echo $rows_mastercategory['Title'];?></font>"&nbsp;,
													<?php echo $rows_mastercategory['JournalName'];?>&nbsp;,
													Vol. <?php echo $rows_mastercategory['Volume'];?>&nbsp;,
													<?php echo $rows_mastercategory['JournalName'];?>&nbsp;,
													No.&nbsp;<?php echo $rows_mastercategory['issue'];?>&nbsp;,
													pp&nbsp;<?php echo $rows_mastercategory['fpage'];?> - <?php echo $rows_mastercategory['tpage'];?>&nbsp;,
													<?php echo $rows_mastercategory['Mon'];?>&nbsp;<?php echo $rows_mastercategory['yr'];?>
												</td>
												
											</tr>
											
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
				<!-- Contact Info END -->
				
				<div class="section-full content-inner bg-white">
				</div>
			</div>
		</div>
		<!-- Content END-->
		
		<?php include ("../../inc/footer.php");
            mysqli_close($con);
            mysqli_close($conc);
            mysqli_close($dbcon);?>
		
		<?php include ("../../inc/footerscript.php"); ?>
		  
		<style type="text/css" media="screen">
		.dataTables_length{
			display: none;
			}
		.dataTables_info{
			display: none;
		}
		</style>
		<script  type="text/javascript" charset="utf-8" async defer>
			$(document).ready( function () {
		$('#mydTable').DataTable({
             "paging":   true,
        "ordering": false,
        "pageLength": 50,
        "info":     false
        }
        );
		} );
		</script>
	</div>
	
</body>
</html>