<!DOCTYPE html>
<html lang="en">

<head>
    <?php
		
		
		session_start();
		include("../inc/conn.php");
		include("../inc/connect1.php");
		  $con=locdb();
          $conc=campsdb();
		
		error_reporting(0);
		$di=base64_decode($_GET['did'])/101995;
		$stnm=base64_decode($_GET['snm']);
		$id = mysqli_real_escape_string($conc, $_GET['id']);
		$staffid =(string)$_GET['staffid'];
		$staff_id = mysqli_real_escape_string($conc, $staffid);
		$sql = "SELECT `staff_id` FROM  `camps`.`staff_personal_copy` WHERE MD5(CONCAT(staff_id,dob,cat_id))='".$staffid."'";
		$stfid=mysqli_query($conc,$sql);
		if(mysqli_num_rows($stfid)==1){
			$ro = mysqli_fetch_assoc($stfid);
			$rstaffid=$ro['staff_id'];
		}
		else{
			header('Location: /');
			die();
		}
		?>

    <?php include ("../inc/metatags.php"); ?>
    <!-- PAGE TITLE HERE -->
    <title>Kaamadhenu Arts and Science College</title>
    <?php include ("../inc/headerscript.php"); ?>
    <link rel="stylesheet" id="" href="/css/staff.css" type="text/css" media="all">
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
            <?php
					{
				?>
            <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/department/<?php echo $di?>.jpg);">
                <?php
					}
					?>
                <div class="container">
                    <?php
							$qry_category="SELECT   `dept_id`,  `dept_code`,  LOWER(dept_name) dept_name,  `om_id`,  `category`,  `dep_idCode`,  `dept_order_no`,  `delete_status`,  `date_created`FROM  `kascsathy`.`department_master` WHERE dept_id='".$di."' ;
						";
								$qry_category = mysqli_query($con, $qry_category);
							while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
								
							{
						?>
                    <div class="bnr-inr-entry text-center">
                        <h1 class="text-capitalize"><span><?php echo $stnm ?></span></h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">

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
            <section>
                <!-- contact area -->
                <div>
                    <div class="content-area">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-3 sticky-top sideebar">
                                    <aside class="side-bar">
                                        <div class="widget recent-posts-entry">

                                            <?php
											$incval=0;
											$qry_category="SELECT b.desi_orderno,a.staff_id,LOWER(CONCAT(a.legend,' ',a.staff_name))staff_name,a.cur_emailid,a.photo,b.desi_name,IFNULL(c.degree,'')degree,GROUP_CONCAT(IF(d.ss_am_id='1',d.text_val,'') SEPARATOR '') scopus,GROUP_CONCAT(IF(d.ss_am_id='2',d.text_val,'') SEPARATOR '') google, GROUP_CONCAT(IF(d.ss_am_id='14',d.text_val,'') SEPARATOR '') researchgate, GROUP_CONCAT(IF(d.ss_am_id='15',d.text_val,'') SEPARATOR '') orcid FROM camps.staff_personal_copy a LEFT JOIN camps.staff_designationmaster b ON a.desi_id=b.desi_id LEFT JOIN camps.staff_qualification_view c ON c.staff_id=a.staff_id LEFT JOIN documentation.ss_additional_values d ON d.ss_id=a.staff_id WHERE MD5(CONCAT(a.staff_id,a.dob,a.cat_id)) ='". mysqli_real_escape_string($conc, $_GET['staffid'])."' GROUP BY a.staff_id";
											$qry_category = mysqli_query($conc, $qry_category);
											if(mysqli_num_rows($qry_category)>0)
											{
												while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
											{
											$staff_id            =   $rows_mastercategory['staff_id'];
											$staff_name          =   $rows_mastercategory['staff_name'];
											$cur_emailid         =   $rows_mastercategory['cur_emailid'];
											$desi_name           =   $rows_mastercategory['desi_name'];
											$department_name     =   $rows_mastercategory['department_name'];
											$upload_photo        =   $rows_mastercategory['photo'];
											
											?>
                                            <div class="card profile-card-3">
                                                <div class="background-block">
                                                    <img src="/images/staff/staffbg.jpg?auto=compress&cs=tinysrgb" alt="profile-sample1" class="background" />
                                                </div>
                                                <div class="profile-thumb-block">
                                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($upload_photo);?>" alt="profile-image" class="profile" />
                                                </div>
                                                <div class="card-content">
                                                    <h5 class="text-capitalize"><?php echo $rows_mastercategory['staff_name'] ?></h5>
                                                    <h5><?php echo $rows_mastercategory['desi_name'] ?></h5>
                                                    <p class="text-lowercase"><?php echo $rows_mastercategory['cur_emailid'] ?></p>
                                                    <div class="icon-block">
                                                        <?php if(!empty($google)){
													?>
                                                        <a href="#"><img style="width:35px;" src="https://kascsathy.ac.in/images/gscholar.png" alt=""></a>
                                                        <?php } ?>
													<?php if(!empty($scopus)){
													?>
                                                        <a href="#"><img style="width:35px;" src="https://kascsathy.ac.in/images/scopus.png" alt=""></a>
                                                        <?php } ?>
													<?php if(!empty($researchgate)){
													?>
                                                       <a href="#"><img style="width:35px;" src="https://kascsathy.ac.in/images/researchgate.png" alt=""></a>
                                                        <?php } ?>
													<?php if(!empty($orcid)){
													?>
                                                        
                                                        <a href="#"><img style="width:35px;" src="https://kascsathy.ac.in/images/orcid.png" alt=""></a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
																		}
																		}
											?>

                                        </div>








                                    </aside>
                                </div>


                                <!-- Left part start -->
                                <div class="col-lg-9">
                                    <div class="wrapper col-md-12 col-sm-6 ">
										<div class="innerpageinfocontainer">
											<div class="faculty-profile-listingarea">
												<div class="maincontainer">
													<ul class="faculty-listing">
														
														<li class="right animation-element slide-right">
															<div class="bx-img">
															<figure><img style="width:120px; height: 120px;" src="/images/staff/proex.svg" alt=""></figure>
															<h4>Professional Experience</h4>
														</div>
														<br>
														<hr>
														<div class="key">
															<table id="academic" class="ui celled table display table table-striped table-bordered" width="100%" data-page-length="70" data-order="[[ 0, &quot;asc&quot; ]]">
																
																<thead>
																	<tr>
																		<th style="color:#172eb5 ; text-align: center; font-size: 15px;" scope="col">Experience Type</th>
																		<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Organization</th>
																		<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Designation</th>
																		<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Date of Joining</th>
																		<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">To</th>
																		<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Total Experience</th>
																		
																	</tr>
																</thead>
																<?php
																$incval=0;
																$qrype_category="SELECT experience_type,name_of_organization,designation,DATE_FORMAT(`from`,'%d-%m-%Y') AS from_date,DATE_FORMAT(`to`,'%d-%m-%Y') AS to_date,TIMESTAMPDIFF(YEAR,`from`,`to`+ INTERVAL 1 DAY) AS ` year`,MOD(TIMESTAMPDIFF(MONTH,`from`,`to`+ INTERVAL 1 DAY),12)  AS `month`,''  FROM `staff_experience_copy` WHERE staff_id ='".$rstaffid."'  UNION SELECT 'Engineering','BIT-Sathy',sd.desi_name,DATE_FORMAT(@st_date,'%d-%m-%Y') from_date,DATE_FORMAT(date_promotion,'%d-%m-%Y') to_date,TIMESTAMPDIFF(YEAR, @st_date, date_promotion+ INTERVAL 1 DAY) `year`,MOD(TIMESTAMPDIFF(MONTH,@st_date, date_promotion+ INTERVAL 1 DAY),12)  AS `month`,@st_date:=date_promotion FROM (SELECT a.staff_id,a.from_designation,@st_date:=b.doj,a.date_promotion FROM staff_promotion a INNER JOIN camps.staff_personal_copy b ON a.staff_id=b.staff_id WHERE a.staff_id='".$rstaffid."' AND a.status>0  UNION SELECT spv.staff_id,spv.desi_id,@st_date:=spv.doj,DATE(NOW()) FROM camps.staff_personal_copy spv WHERE spv.staff_id='".$rstaffid."' ORDER BY date_promotion )a INNER JOIN camps.staff_designationmaster sd ON sd.desi_id=a.from_designation ORDER BY STR_TO_DATE(from_date,'%d-%m-%Y') DESC";
																
																$qrype_category = mysqli_query($conc, $qrype_category);
																if(mysqli_num_rows($qrype_category)>0)
																{
																while ($rows_mastercategory = mysqli_fetch_assoc($qrype_category))
																{
																?>
																<tbody>
																	<tr>
																		<td><?php echo $rows_mastercategory['experience_type'] ?></td>
																		<td><?php echo $rows_mastercategory['name_of_organization'] ?></td>
																		<td><?php echo $rows_mastercategory['designation'] ?></td>
																		<td><?php echo $rows_mastercategory['from_date'] ?></td>
																		<td><?php echo $rows_mastercategory['to_date'] ?></td>
																		<td><?php echo $rows_mastercategory['year'] ?>Year(s) &amp;
																		<?php echo $rows_mastercategory['month'] ?>Month(s)</td>
																	</tr>
																</tbody>
																
																<?php
																					}
																					}
																?>
															</table>
														</div>
													</li>
													<li class="right animation-element slide-right">
														<div class="bx-img">
														<figure><img style="width:120px; height: 120px;" src="/images/staff/acacre.svg" alt=""></figure>
														<h4>Academic Credentials</h4>
													</div>
													<br>
													<hr>
													<div class="key">
														<table id="academic" class="ui celled table display table table-striped table-bordered" width="100%" data-page-length="70" data-order="[[ 0, &quot;asc&quot; ]]">
															
															<thead>
																<tr>
																	<th style="color:#172eb5 ; text-align: center; font-size: 15px;" scope="col">Degree</th>
																	<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Specialization</th>
																	<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Institute</th>
																	<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">University</th>
																	<th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Year of Passing</th>
																	
																	
																</tr>
															</thead>
															<?php
															$incval=0;
															$qrype_category="SELECT sqc.degree,sqc.spec,sqc.institute,um.university_name,sqc.`year of passing` yp FROM camps.staff_qualification_copy sqc INNER JOIN camps.staff_degreemaster sd ON sqc.staff_id='".$rstaffid."'  AND sd.deg_id=sqc.deg_id INNER JOIN camps.university_master um ON um.university_id=sqc.university_id ORDER BY yp";
															
															$qrype_category = mysqli_query($conc, $qrype_category);
															if(mysqli_num_rows($qrype_category)>0)
															{
															while ($rows_mastercategory = mysqli_fetch_assoc($qrype_category))
															{
															?>
															<tbody>
																<tr>
																	<td><?php echo $rows_mastercategory['degree'] ?></td>
																	<td><?php echo $rows_mastercategory['spec'] ?></td>
																	<td><?php echo $rows_mastercategory['institute'] ?></td>
																	<td><?php echo $rows_mastercategory['university_name'] ?></td>
																	<td><?php echo $rows_mastercategory['yp'] ?></td>
																</tr>
															</tbody>
															
															<?php
																				}
																				}
															?>
														</table>
													</div>
												</li>
												
											
											
				
			</ul>
		</div>
	</div>
</div>
</div>
                                                        
                                                        
                                        
                                        
                                        
                                        
                                        
                                    


                                    


                                 

                                    




                                   



                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section-full content-inner bg-white">
</div>
              
                <!-- Content END-->
            </section>
            <!-- Content END-->
            <?php include ("../inc/footer.php");
mysqli_close($con);
mysqli_close($conc);

?>
            <?php include ("../inc/footerscript.php"); ?>

            <style type="text/css" media="screen">
                
                
                .sideebar {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
}
                
                
                /*Profile Card 3*/
                .profile-card-3 {
                    font-family: 'Open Sans', Arial, sans-serif;
                    position: relative;
                    
                    overflow: hidden;
                    width: 100%;
                    text-align: center;
                    height: 368px;
                    border: none;
                }

                .profile-card-3 .background-block {
                    float: left;
   
    height: 242px;
    overflow: hidden;
                }

                .profile-card-3 .background-block .background {
                    width: 100%;
                    vertical-align: top;
                    opacity: 0.9;
                    -webkit-filter: blur(0.5px);
                    filter: blur(0.5px);
                    -webkit-transform: scale(1.8);
                    transform: scale(2.8);
                }

                .profile-card-3 .card-content {
                    width: 100%;
                    padding: 15px 25px;
                    color: #232323;
                    float: left;
                    background: #efefef;
                    height: 67%;
                    border-radius: 0 0 5px 5px;
                    position: relative;
                    z-index: 9999;
                }

                .profile-card-3 .card-content::before {
                    content: '';
                    background: #efefef;
                    width: 120%;
                    height: 100%;
                    left: 11px;
                    bottom: 51px;
                    position: absolute;
                    z-index: -1;
                    transform: rotate(-13deg);
                }

                .profile-card-3 .profile {
                    border-radius: 50%;
                    position: absolute;
                    bottom: 50%;
                    left: 50%;
                    max-width: 100px;
                    opacity: 1;
                    box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
                    border: 2px solid rgba(255, 255, 255, 1);
                    -webkit-transform: translate(-50%, 0%);
                    transform: translate(-50%, 0%);
                    z-index: 99999;
                }

                .profile-card-3 h2 {
                    margin: 0 0 5px;
                    font-weight: 600;
                    font-size: 25px;
                }

                .profile-card-3 h2 small {
                    display: block;
                    font-size: 15px;
                    margin-top: 10px;
                }

                .profile-card-3 i {
                    display: inline-block;
                    font-size: 16px;
                    color: #232323;
                    text-align: center;
                    border: 1px solid #232323;
                    width: 30px;
                    height: 30px;
                    line-height: 30px;
                    border-radius: 50%;
                    margin: 0 5px;
                }

              
               

            </style>
            <style type="text/css" media="screen">
                @media (max-width: 768px) {
                    .staff-details {
                        text-align: center;
                    }
                }

            </style>
            <style type="text/css" media="screen">
                .page-content {
                    margin-top: 0;
                    padding-bottom: 0px;
                }

                .dataTables_length {
                    display: none;
                }

                .dataTables_info {
                    display: none;
                }

            </style>
            <script type="text/javascript" charset="utf-8" async defer>
                $(document).ready(function() {
                    $('#academic').DataTable({
                        "paging": false,
                        "ordering": false,
                        "bFilter": false,
                        "info": false
                    });
                });

            </script>
        </div>
</body>

</html>
