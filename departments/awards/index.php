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
                    <?php {
                    ?>
                    <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/department/<?php echo $id ?>.jpg);">
                        <?php
                        }
                        ?>
                        <div class="container">
                            <?php
                            
                            $sql = "SELECT   `dept_id`,  `dept_code`,  LOWER(dept_name) dept_name,  `om_id`,  `category`,  `dep_idCode`,  `dept_order_no`,  `delete_status`,  `date_created`FROM  `kascsathy`.`department_master` WHERE dept_id='" . $id . "' ";
                            $result = mysqli_query($con, $sql);
                            while ($rows_mastercategory = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="bnr-inr-entry text-center" style="font-family: 'Poppins'; font-size: 16px;">
                                <h1 class="text-capitalize"><span>Awards &amp; Achievementns</span></h1>
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
								
								
								
								<div class="col-lg-12 col-md-10 m-t15 col-sm-6">
									<h2 class="text-center section-head fw7 max-w700 m-auto">Awards</h2>
									<table id="mydTable" class="ui celled table display table table-striped table-bordered" width="100%" data-page-length="70" data-order="[[ 0, &quot;asc&quot; ]]">
										<thead>
											<tr>
												<th style="color:#172eb5 ; text-align: center; font-size: 15px;width: 43px;" scope="col"><b>S No</b></th>
												<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col"><b>Staff Name</b></th>
												<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col"><b>Awards</b></th>
												
											</tr>
										</thead>
										<tbody>
											<?php
											$sno=1;
																				$incval=0;
																				$qry_category= "SELECT spv.staff_name, GROUP_CONCAT(IF(av.am_id='129',av.txt_val,'') SEPARATOR '') dis_text,GROUP_CONCAT(IF(av.am_id='125',alv.list_value,'') SEPARATOR '') display FROM documentation.record_master rm INNER JOIN documentation.record_ss_mapping rsm  ON rm.rm_id=rsm.rm_id AND  rm.status>0 AND rsm.status>0 AND rm.im_id='35' INNER JOIN camps.staff_personal_copy spv ON spv.dep_id='".mysqli_real_escape_string($conc, $id)."' AND spv.staff_id=rsm.ss_id LEFT JOIN   documentation.attr_values av  ON  av.status>0 AND av.rm_id=rm.rm_id   LEFT JOIN documentation.attribute_list_values alv ON alv.am_id=av.am_id AND alv.status>0 AND alv.alv_id=av.int_val GROUP BY rm.rm_id,rsm.rsm_id HAVING display='yes'";
																				
																				$qry_category = mysqli_query($conc, $qry_category);
																				if(mysqli_num_rows($qry_category)>0)
																				{
																				while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
																				{
											?>
											<tr>
												<th style="text-align: center;" scope="row"><?php echo $sno++ ?></th>
												<td><?php echo $rows_mastercategory['staff_name'];?></td>
												<td><?php echo $rows_mastercategory['dis_text'];?></td>
												
											</tr>
											
											<?php
																				}
																				}
											?>
											
											
											
										</tbody>
									</table>
								</div>
							</div>
							
							<hr>
							
							<div class="row">
								
							</div>
							<div class="col-lg-12 col-md-10 m-t15 col-sm-6 m-b30">
								<h2 class="text-center section-head fw7 max-w700 m-auto">Achievements</h2>
								<table id="mydTable2" class="ui celled table display table table-striped table-bordered" width="100%" data-page-length="70" data-order="[[ 0, &quot;asc&quot; ]]">
									<thead>
										<tr>
											<th style="color:#172eb5 ; text-align: center; font-size: 15px;width: 43px;" scope="col">S No</th>
											<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Staff Name</th>
											<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Achievements</th>
											
										</tr>
									</thead>
									<tbody>
										<?php
										$sno=1;
																			$incval=0;
																			$qry_category= "SELECT spv.staff_name, GROUP_CONCAT(IF(av.am_id='129',av.txt_val,'') SEPARATOR '') dis_text,GROUP_CONCAT(IF(av.am_id='125',alv.list_value,'') SEPARATOR '') display FROM documentation.record_master rm INNER JOIN documentation.record_ss_mapping rsm  ON rm.rm_id=rsm.rm_id AND  rm.status>0 AND rsm.status>0 AND rm.im_id='40' INNER JOIN camps.staff_personal_copy spv ON spv.dep_id='".mysqli_real_escape_string($conc, $_GET['dep_id'])."'AND spv.staff_id=rsm.ss_id LEFT JOIN   documentation.attr_values av  ON  av.status>0 AND av.rm_id=rm.rm_id   LEFT JOIN documentation.attribute_list_values alv ON alv.am_id=av.am_id AND alv.status>0 AND alv.alv_id=av.int_val GROUP BY rm.rm_id,rsm.rsm_id HAVING display='yes'";
																			
																			$qry_category = mysqli_query($conc, $qry_category);
																			if(mysqli_num_rows($qry_category)>0)
																			{
																			while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
																			{
										?>
										<tr>
											<td style="text-align: center;" scope="row"><?php echo $sno++ ?></td>
											<td><?php echo $rows_mastercategory['staff_name'];?></td>
											<td><?php echo $rows_mastercategory['dis_text'];?></td>
											
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
            mysqli_close($dbcon);
            ?>
	
	<?php include ("../../inc/footerscript.php"); ?>
	  <script src="/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="/plugins/datatables/js/dataTables.semanticui.min.js" type="text/javascript"></script>
        <script src="/plugins/datatables/js/semantic.min.js" type="text/javascript"></script>
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
	$('#mydTable').DataTable();
	} );
	</script>
	<script  type="text/javascript" charset="utf-8" async defer>
		$(document).ready( function () {
	$('#mydTable2').DataTable();
	} );
	</script>
</div>

</body>
</html>