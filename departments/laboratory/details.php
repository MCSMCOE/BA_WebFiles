<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("../../inc/conn.php");
      $con=locdb(); ?>
    <?php
    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);
    if (isset($_GET['lab'])) {
        $sno = base64_decode($_GET['lab']) / 101995;

    } else {
        header('Location: ../');
    }
    ?>
    <?php include("../../inc/metatags.php"); ?>

    <!-- PAGE TITLE HERE -->
    <title>Kaamadhenu Arts and Science College</title>
    <?php include("../../inc/headerscript.php"); ?>
    <!-- Revolution Navigation Style -->
</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area">
                <div class="bag"></div>
            </div>
        <?php include("../../inc/header.php"); ?>

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
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <!-- Left part start -->
                        <?php
                        $qry_category = "SELECT sno,lab_name,dep_id,lab_desc,lab_image FROM dept_laboratory WHERE STATUS=1 AND sno='" . $sno . "';";
                        $qry_category = mysqli_query($con, $qry_category);
                        while ($row = mysqli_fetch_assoc($qry_category)) {
                            ?>
                            <div class="col-lg-12 col-md-12 m-b30">
                                <!-- blog start -->
                                <div class="blog-post blog-single">
                                    <div class="post-title text-center">
                                        <h3 class="post-title center fw5"><a href="#"><?php echo $row['lab_name'] ?></a></h3>
                                    </div>
                                    <div align="center" class="post-media img-fluid">
                                        <img style="width:700px; height:auto;" class="img-fluid" style="" src="/images/departments/laboratory/<?php echo $row['sno'] ?>/<?php echo $row['lab_image'] ?>.jpg" alt="">
                                    </div>
                                    <div class="post-text col-md-12">
                                        <p class="text-justify"><?php echo $row['lab_desc'] ?></p>
                                    </div>
                                    <div class="divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                                </div>
                                <!-- blog END -->
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- contact area END -->
        </div>
        <!-- Content END-->

        <?php include("../../inc/footer.php"); 
         mysqli_close($con);
         ?>

        <?php include("../../inc/footerscript.php"); ?>
        <style type="text/css">
        .mfp-bottom-bar {
            display: none;
        }
        </style>

    </div>

</body>

</html>