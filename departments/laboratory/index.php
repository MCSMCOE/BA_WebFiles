<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("../../inc/metatags.php");

    require_once ("../../inc/conn.php");
    require_once ("../../inc/connect.php");
    $con=locdb();
    $conc=campsdb();

    ?>
    <!-- PAGE TITLE HERE -->
    <title>KASC | Kamadhenu Arts and Science College</title>
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
                        <h1 class="text-capitalize"><span>Laboratory</span></h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="/">Life @ KASC</a></li>
                                <li><a href="/departments/" data-toggle="tooltip" title="Departments">Laboratory</a>
                                </li>
                                <!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->

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
                        <div class="clearfix">
                            <ul id="masonry" class=" gallery-listing gallery-grid-4 gallery mfp-gallery text-center">
                                <?php
								// $id=14;
								$qry_category = "SELECT sno,lab_name,dep_id,lab_desc,lab_image FROM dept_laboratory WHERE STATUS=1";
								$qry_category = mysqli_query($con, $qry_category);
								while ($row = mysqli_fetch_assoc($qry_category)) {
									?>
                                <li
                                    class="design card-container col-lg-4 col-md-6 col-sm-6 ">
                                    <div class="box gallery-box">
                                        <div class="media">
                                            <a href="javascript:void(0);">
                                                <img class="lazy"
                                                    src="/images/departments/laboratory/<?php echo $row['sno'] ?>/<?php echo $row['lab_image'] ?>.jpg"
                                                    alt=""> </a>

                                        </div>
                                        <div class="dez-info p-a30 bg-white">
                                            <h6 class="dez-title m-t0  text-transform: none;">
                 <a href="/departments/laboratory/details.php?lab=<?php echo base64_encode($row['sno'] * 101995);?>"><?php echo $row['lab_name'] ?></a>

                                            </h6>
                                           
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
        <?php include ("../../inc/footer.php");
        mysqli_close($con);
        mysqli_close($conc);

        ?>

        <?php include ("../../inc/footerscript.php"); ?>
        <style type="text/css">
            .card-body {
                margin-top: -14px;
                margin-bottom: -31px;
            }

        </style>

    </div>

</body>

</html>
