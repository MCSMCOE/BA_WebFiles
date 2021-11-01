<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $id;
                 if (isset($_GET['dept_id']))
        $id = base64_decode($_GET['dept_id']) / 101995;
        else if (isset($_GET['deptt_id'])) {
        $id = ($_GET['deptt_id']);
        } else {
        header('Location: index.php');
        die();
        }
        
        $eid = base64_encode($id * 101995);
        ?>
    <?php require_once ("../inc/conn.php");  
         require_once ("../inc/connect.php"); 
          $con=locdb();
          $conc=campsdb();
        ?>
    <?php include("../inc/metatags.php"); ?>
    <?php

    $qry_category = "SELECT dept_code,dept_name,sc_id,org_id FROM master_department WHERE STATUS=1 AND department_id='". $id . "' ;
                        ";
    $qry_category = mysqli_query($conc, $qry_category);
    while ($rows_mastercategory = mysqli_fetch_assoc($qry_category)) {
    ?>
    <title><?php echo $rows_mastercategory['dept_name'] ?> | Kaamadhenu Arts and Science College</title>
        <?php
    }
    ?>
    <?php include("../inc/headerscript.php"); ?>


</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area">
            <div class="bag"></div>
        </div>
        <?php include("../inc/header.php"); ?>

        <div class="page-content bg-white">

            <?php {
                ?>
            <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/department/<?php echo $id ?>.jpg);">
                <?php
                    }
                    ?>
                <div class="container">
                    <?php
                        
                        $qry_category = "SELECT dept_code,dept_name,sc_id,org_id FROM master_department WHERE STATUS=1 AND department_id='". $id . "' ;
                        ";
                        $qry_category = mysqli_query($conc, $qry_category);
                        while ($rows_mastercategory = mysqli_fetch_assoc($qry_category)) {
                        ?>
                    <div class="bnr-inr-entry text-center">
                        <h1 class="text-capitalize"><span><?php echo $rows_mastercategory['dept_name'] ?></span></h1>

                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="/">Home</a></li>
                                <li><a href="/departments/" data-toggle="tooltip" title="Departments">Departments</a>
                                </li>

                                <li class="text-capitalize"><?php echo $rows_mastercategory['dept_name'] ?></li>
                               
                            </ul>
                        </div>

                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="content-area">
                <div class="container">
                    <div class="row">


                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-7">
                            <div class="row">
                                <h3 class="col-md-10">Overview</h3>
                                <?php
                                $qryb_category = "SELECT   `dept_id`,  `overview`, `status` FROM `kasc`.`dept_details` WHERE dept_id=? AND STATUS='1'";
                                $stmt = $con->prepare($qryb_category);
                                $stmt->bind_param('i', $id);
                                $stmt->execute();
                                echo mysqli_error($con);
                                $qryb_category=$stmt->get_result();
                                $stmt->close();
                                
                                while ($rows_mastercategory = mysqli_fetch_assoc($qryb_category)) {
                                ?>
                                <p class="col-md-11" align="justify"><?php echo $rows_mastercategory['overview'] ?></p>
                                <?php
                                }
                                ?>

                                  <h3 class="col-md-10">Vision</h3>
                                <?php
                                $qryb_category = "SELECT   `dept_id`,  `vision`, `status` FROM `kasc`.`dept_details` WHERE dept_id=? AND STATUS='1'";
                                $stmt = $con->prepare($qryb_category);
                                $stmt->bind_param('i', $id);
                                $stmt->execute();
                                echo mysqli_error($con);
                                $qryb_category=$stmt->get_result();
                                $stmt->close();
                                
                                while ($rows_mastercategory = mysqli_fetch_assoc($qryb_category)) {
                                ?>
                                <p class="col-md-11" align="justify"><?php echo $rows_mastercategory['vision'] ?></p>
                                <?php
                                }
                                ?>

                                 <h3 class="col-md-10">Mission</h3>
                                <div class="m-b50 col-md-11">
                                   
                                        <?php
                                        $qryb_category = "SELECT   `dept_id`,  `mission`,  `status` FROM `kasc`.`dept_details` WHERE dept_id=? AND STATUS='1'";
                                        $stmt = $con->prepare($qryb_category);
                                        $stmt->bind_param('i', $id);
                                        $stmt->execute();
                                        echo mysqli_error($con);
                                        $qryb_category=$stmt->get_result();
                                        $stmt->close();
                                        while ($rows_mastercategory = mysqli_fetch_assoc($qryb_category)) {
                                        ?>
                                    <p class="col-md-11" align="justify"><?php echo $rows_mastercategory['mission'] ?></p>
                                        <?php
                                        }
                                        ?>
                                    
                                </div> 
                            </div>
                            <div class="row m-b30">
                                <?php
                                $a = 0;
                                $qry_category = "SELECT mb.branch_name,mp.programme_name,CONCAT(mp.programme_name,' ',mb.branch_name) as program 
FROM master_branch mb LEFT JOIN master_programme mp ON mb.programme_id=mp.programme_id WHERE mb.department_id=? AND mb.status=1";
                                $stmt = $conc->prepare($qry_category);
                                $stmt->bind_param('i', $id);
                                $stmt->execute();
                                echo mysqli_error($conc);
                                $qry_category = $stmt->get_result();
                                $stmt->close();
                                if (mysqli_num_rows($qry_category) > 0) {
                                    ?>
                                    <h3 class="col-md-10">Programmes</h3>
                                <?php }?>


                                <div class=" col-md-11 accordion" id="accordionExample">
                                    <?php
                                    $a = 0;
                                    $qry_category = "SELECT mb.branch_id,mb.branch_name,mp.programme_name,CONCAT(mp.programme_name,' ',mb.branch_name) as program 
                                                     FROM master_branch mb LEFT JOIN master_programme mp ON mb.programme_id=mp.programme_id WHERE mb.department_id=? AND mb.status=1;";
                                    $stmt = $conc->prepare($qry_category);
                                    $stmt->bind_param('i', $id);
                                    $stmt->execute();
                                    echo mysqli_error($conc);
                                    $qry_category = $stmt->get_result();
                                    $stmt->close();
                                    while ($row = mysqli_fetch_assoc($qry_category) ) {
                                        $proid = $row['branch_id'];
                                        ?>
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $a; ?>" aria-expanded="false" aria-controls="collapseOne">
                                                        <font style="font-size: 17px"><?php echo $row['program'] ?></font>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseOne<?php echo $a; ?>" class="collapse <?php echo $a == 0 ? 'hide' : ''; ?>" aria-labelledby="headingOne" data-parent="#accordionExample">

                                                <div class="card-body">
                                                    <?php
                                                    $qry_category1 = "SELECT duaration,branch_id,no_of_sem,intake_seats,eligibility,syllabus_title1,syllabus_url1,carrier,higher_study 
                                                                      FROM dept_programmes WHERE branch_id=?";
                                                    $stmt1 = $con->prepare($qry_category1);
                                                    $stmt1->bind_param('i', $proid);
                                                    $stmt1->execute();
                                                    echo mysqli_error($con);
                                                    $qry_category1 = $stmt1->get_result();
                                                    $stmt1->close();
                                                    while ($row1 = mysqli_fetch_assoc($qry_category1) ) { ?>
                                                    <div class="acod-content row m-b50">
                                                        <?php
                                                        if (!empty($row1['duaration'])) {
                                                            ?>
                                                            <div class="col-lg-4 col-md-4">
                                                                <h5>Duration:</h5>
                                                                <p><i class="fa fa-angle-double-right"></i>&nbsp;<?php echo $row1['duaration'] ?>
                                                                </p>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if (!empty($row1['no_of_sem'])) {
                                                            ?>
                                                            <div class="col-lg-4 col-md-4">
                                                                <h5>No. of Semesters:</h5>
                                                                <p><i class="fa fa-angle-double-right"></i>&nbsp;<?php echo $row1['no_of_sem'] ?>
                                                                </p>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if (!empty($row1['intake_seats'])) {
                                                            ?>
                                                            <div class="col-lg-4 col-md-4">
                                                                <h5>No. of Seats:</h5>
                                                                <p><i class="fa fa-angle-double-right"></i>&nbsp;<?php echo $row1['intake_seats'] ?>
                                                                </p>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                        <div class=""> </div>
                                                        <?php
                                                        if (!empty($row1['eligibility'])) {
                                                            ?>
                                                            <div class="col-lg-4 col-md-4">
                                                                <h5>Eligibility:</h5>
                                                                <p><i class="fa fa-angle-double-right"></i>&nbsp;<?php echo $row1['eligibility'] ?>
                                                                </p>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if (!empty($row1['syllabus_title1'])) {
                                                            ?>
                                                            <div class="col-lg-4 col-md-4">
                                                                <h5>Syllabus:</h5>
                                                                <a target="_blank" href="<?php echo $row1['syllabus_url1'] ?>"><span class="badge badge-pill badge-success"><?php echo $row1['syllabus_title1'] ?></span></a>
<!--                                                                <a target="_blank" href="--><?php //echo $row1['syllabus_url2'] ?><!--"><span class="badge badge-pill badge-success">--><?php //echo $row1['syllabus_title2'] ?><!--</span></a>-->
<!--                                                                <a target="_blank" href="--><?php //echo $row1['syllabus_url3'] ?><!--"><span class="badge badge-pill badge-success">--><?php //echo $row1['syllabus_title3'] ?><!--</span></a>-->
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if (!empty($row1['higher_study'])) {
                                                            ?>
                                                            <div class="col-lg-4 col-md-4">
                                                                <h5>Scope for Higher Studies:</h5>
                                                                <p><i class="fa fa-angle-double-right"></i>&nbsp;<?php echo $row1['higher_study'] ?>
                                                                </p>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <?php } ?>
                                                </div>

                                            </div>
                                        </div>
                                        <?php
                                        $a++;
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 sticky-top">
                            <aside class="side-bar">
                                                                                                <div id="sidemenu"><div class="widget widget_archive" id="side-menu">

        <h6 class="widget-title style-1">Faculty &amp; Staff</h6>
        <ul>
                            <li><a href="../staff/index.php?dep_id=<?php echo $_GET['dept_id'] ?>">List of Faculty Members</a></li>
                            
                    </ul>
    </div>


                    </div>
                </div>
            </div>
        </div>

        <?php include("../inc/footer.php");
        mysqli_close($con);
        mysqli_close($conc);
        ?>
        <?php include("../inc/footerscript.php"); ?>
        <script>
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
            });

        </script>
    </div>
</body>

</html>
