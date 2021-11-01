<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("../inc/metatags.php"); 
		 include ("../inc/conn.php");  
         include ("../inc/connect.php"); 
          $con=locdb();
          $conc=campsdb();
        ?>
    <!-- PAGE TITLE HERE -->
    <title>KASC | Kamadhenu Arts and Science College</title>
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
                        <h1 class="text-capitalize"><span>Departments</h1>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <div class="content-area">
                <div class="container">

                    <div class="row">
                        <?php
							$qry_category="SELECT mb.programme_id,mb.branch_name,md.department_id,md.dept_name,mp.programme_name FROM master_branch mb LEFT JOIN master_department md ON mb.department_id=md.department_id
LEFT JOIN master_programme mp ON mb.programme_id=mp.programme_id WHERE mb.department_id NOT IN (18) AND md.status>0 GROUP BY department_id ORDER BY md.dept_order_no";

								$qry_category = mysqli_query($conc, $qry_category);
							while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))	
							{
							?>
                        <div class="col-sm-4 col-md-6 mt-3">
                            <div class="card">
                                <div class="card-body">
                         <img src="/images/icons/<?php echo $rows_mastercategory['department_id'] ?>.svg" class="img-fluid" style="width:50px ; height: auto; float: left">
                                    <h5 style="color:#00616d;  font-size: 14px; font-weight:300px; " class="p-3 ml-4 text-capitalize"><a href="dept_details.php?dept_id='<?php echo base64_encode($rows_mastercategory['department_id']*101995);?>"> &emsp;
                                            <?php echo $rows_mastercategory['dept_name'] ?></a></h5>


                                </div>
                            </div>
                        </div>



                        <?php
							}
							?>





                    </div>
                    <br>
                </div>
            </div>
        </div>
        <!-- Content END-->

        <?php include ("../inc/footer.php");
                mysqli_close($con);
                mysqli_close($conc);
               
            ?>

        <?php include ("../inc/footerscript.php"); ?>
        <style type="text/css">
            .card-body {
                margin-top: -14px;
                margin-bottom: -31px;
            }

        </style>

    </div>

</body>

</html>
