<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../../inc/metatags.php"); ?>
    <?php include("../../inc/conn.php");
    $con = locdb();
    ?>
    <!-- PAGE TITLE HERE -->
    <title>Event Gallery | KASC</title>
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
    <div class="page-content bg-white">̥
        <!-- inner page banner -->
        <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="bnr-inr-entry text-center">
                    <h1><span>Gallery</span></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Event Gallery</a></li>
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
            <div class="section-full">
                <div class="container">
                    <section class="container gallery-container">
                        <div class="tz-gallery">
                            <div class="row">
                                <?php
                                $qry_category = "SELECT sno,event_name,thumb_img,gpurl,YEAR(event_date)eyear,DAY(event_date)eday,MONTH(event_date)emonth,DATE_FORMAT(event_date, '%d.%m.%Y')event_date 
FROM eventgallery WHERE STATUS=1 ORDER BY eyear DESC,emonth DESC,eday DESC";
                                $qry_category = mysqli_query($con, $qry_category);
                                while ($row = mysqli_fetch_assoc($qry_category)) {
                                    ?>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="thumbnail">
                                            <a class="lightbox" href="<?php echo $row['gpurl'] ?>">
                                                <img style="width:500px;height: 250px;"
                                                     src="/images/eventgallery/<?php echo $row['sno'] ?>.jpg"
                                                     alt="<?php echo $row['event_name'] ?>">
                                            </a>
                                            <div class="caption">
                                                <h3>
                                                    <a href="<?php echo $row['gpurl'] ?>"> <?php echo $row['event_name'] ?>
                                                        <br> <?php echo $row['event_date'] ?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </section>
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
</div>

</body>
</html>