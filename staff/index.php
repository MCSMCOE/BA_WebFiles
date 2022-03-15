<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once ("../inc/conn.php");
require_once ("../inc/connect.php");
$con=locdb();
$conc=campsdb();
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_GET['dep_id']))
$dep_id=base64_decode($_GET['dep_id'])/101995;

else
{
header();
}
?>
<?php include ("../inc/headerscript.php"); ?>
<?php include ("../inc/metatags.php"); ?>
<?php
		$qry_category="SELECT dept_code,LOWER(dept_name)dept_name,sc_id,org_id,webdisp FROM master_department WHERE STATUS=1 AND webdisp=1 AND department_id='". $dep_id . "';";
		$qry_category = mysqli_query($con, $qry_category);
		while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
		{
?>
<!-- PAGE TITLE HERE -->
<title>Faculty Members | <?php echo $rows_mastercategory['dept_name'] ?></title>
<?php
		}
?>

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
<div class="bnr-inr bg-pt" style="background-image:url(/images/banner/department/<?php echo $dep_id?>.jpg);">
	<?php
	}
	?>
	<div class="container">
		<?php
		$qry_category="SELECT dept_code,dept_name,sc_id,org_id,webdisp FROM master_department WHERE STATUS=1 AND webdisp=1 AND department_id='". $dep_id . "' ;
		";
		$qry_category = mysqli_query($con, $qry_category);
		while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
		{
		?>
		<div class="bnr-inr-entry text-center">
			<h1 class="text-capitalize"><span>Faculty Members</span></h1>
			<!-- Breadcrumb row -->
			<div class="breadcrumb-row">
				<ul class="list-inline">
					<li class=""><?php echo $rows_mastercategory['dept_name'] ?></li>
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
<section id="team" class="pb-5">
    <div class="container">
       
        <div class="row">
            <!-- Team member -->
            <?php
						$incval=0;
						$qry_category="SELECT staff_master.staff_id AS staff_id,master_desigination.desigination desigination,
GROUP_CONCAT(staff_promotion.md_id),
staff_master.legend , CONCAT(staff_master.first_name,' ',staff_master.last_name)first_name
, staff_master.department_id,master_department.dept_name
, staff_photo.photo ,  staff_promotion.status
, staff_qualification.status,staff_promotion.from_date,GROUP_CONCAT(deg_type ORDER BY staff_qualification.yop) deg_type FROM
camps.staff_master INNER JOIN camps.master_department
ON (staff_master.department_id = master_department.department_id AND staff_master.sc_id=1)
INNER JOIN camps.staff_photo
ON (staff_photo.staff_id = staff_master.staff_id)
INNER JOIN camps.staff_promotion
ON (staff_promotion.staff_id = staff_master.staff_id)
INNER JOIN camps.staff_qualification
ON (staff_qualification.staff_id = staff_master.staff_id AND staff_qualification.status=1)
INNER JOIN camps.master_desigination ON master_desigination.md_id=staff_promotion.md_id
INNER JOIN camps.staff_degree_type
ON (staff_qualification.degree_id = staff_degree_type.degree_id) WHERE staff_promotion.status=2 AND staff_degree_type.degree_id NOT IN (23,24) AND  staff_master.working_status='working' AND master_department.department_id='". $dep_id . "' GROUP BY staff_master.staff_id
;
						";
						$qry_category = mysqli_query($conc, $qry_category);
						if(mysqli_num_rows($qry_category)>0)
						{
						while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
											{
						if(($rows_mastercategory['staff_id']) AND ($rows_mastercategory['photo']) AND  ($rows_mastercategory['first_name']) AND ($rows_mastercategory['desigination']) AND ($rows_mastercategory['deg_type']))
						{
						?>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="data:image/jpeg;base64,<?php echo base64_encode($rows_mastercategory['photo']);?>" width="auto" height="150px" alt="card image"></p>
                                    <h4 style="text-transform: capitalize;" class="card-title"><a href="/staff/details.php?staff=<?php echo base64_encode($rows_mastercategory['staff_id']*101995);?>&dep=<?php echo base64_encode($dep_id*101995);?>"><?php echo $rows_mastercategory['first_name']?></a></h4>
                                   
                                    <h5 class="text-capitalize" style="font-size: 15px; font-weight: 400;"><?php echo $rows_mastercategory['desigination'] ?></h5>
												<h6 style="font-size: 13px; font-weight: 400;"><?php echo $rows_mastercategory['deg_type']    ?></h6>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
          <?php
														}
													}
														}
						?>
        </div>
    </div>
</section>
<div class="section-full content-inner bg-white">
</div>
<!-- Content END-->
<?php include("../inc/footer.php");
mysqli_close($con);
mysqli_close($conc);
?>
<?php include ("../inc/footerscript.php"); ?>
<style type="text/css">

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #f5f5f5;
}


.frontside {
    position: relative;
    z-index: 2;
    margin-bottom: 30px;
}



.frontside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card
 {
    min-height: 312px;
}



.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
</style>
</div>
</body>
</html>