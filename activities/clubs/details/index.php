<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("../../../inc/metatags.php"); ?>
    <?php require ("../../../inc/conn.php");
    $con=locdb();
    ?>
    <?php

    //    error_reporting(E_ALL);
    //    ini_set('display_errors', 0);
    if(isset($_GET['club']))
        $id=base64_decode($_GET['club'])/101995;
    else
    {
        header('Location: ../');
    }
    ?>
    <!-- PAGE TITLE HERE -->
    <title>Kaamadhenu college of arts and science</title>
    <?php include ("../../../inc/headerscript.php"); ?>
    <!-- Revolution Navigation Style -->
</head>
<body id="bg">
<div class="page-wraper">
    <div id="loading-area">
        <div class="bag"></div>
    </div>
    <?php include ("../../../inc/header.php"); ?>
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="bnr-inr-entry text-center">
                    <?php
                    $qry_category="SELECT c_name,club_desc,link FROM clubs WHERE STATUS=1 AND sno='$id' ORDER BY c_name";
                    $qry_category = mysqli_query($con, $qry_category);
                    while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
                    {
                    ?>
                    <h1 class="text-capitalize"><span><?php echo $rows_mastercategory['c_name'] ?></span></h1>
                    <?php } ?>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">

                            <li><a href="/" title="">Home</a>

                            </li>
                            <li><a href="#">Activities</a></li>
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
                    <div class="row">



                        <?php
                        $qry_category = "SELECT c_name,club_desc,club_desc2,link FROM clubs WHERE STATUS=1 AND sno='$id' ORDER BY c_name";
                        $qry_category = mysqli_query($con, $qry_category);
                        while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
                        {
                        ?>
                        <div class="blog-post blog-single">
                            <div class="col-lg-12 col-md-8">


                                <div class="post-text">
                                    <p class="text-justify"><?php echo $rows_mastercategory['club_desc2'] ?></p>
                                </div>
                                <?php
                                if (!empty($rows_mastercategory['club_desc'])) {
                                    ?>
                                    <div class="post-title text-center">
                                        <h3 class="post-title center fw5"><a href="#">Objectives</a></h3>
                                    </div>


                                    <div class="post-text">
                                        <p class="text-justify"><?php echo $rows_mastercategory['club_desc'] ?></p>
                                    </div>
                                <?php } ?>

                            </div>


                            <?php } ?>
                    </div>

            </div>
        </div>
        <!-- contact area END -->
    </div>
</div>
<!-- Content END-->
<?php include ("../../../inc/footer.php");
mysqli_close($con);
?>
<?php include ("../../../inc/footerscript.php"); ?>
</div>
</body>
</html>