<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("../inc/metatags.php"); ?>
    <?php include ("../inc/conn.php");
    $conc=locdb();

    ?>
    <!-- PAGE TITLE HERE -->
    <title>Kaamadhenu Arts and Science College</title>
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
        <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/bnr1.jpg);">
            <div class="container">

                <div class="bnr-inr-entry text-center">
                    <h1 class="text-capitalize"><span>Infrastructure</span></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">

                            <li><a href="/" title="Departments">Home</a>
                            <li><a href="javascript:void(0)">Infrastructure</a></li>
                            </li>

                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>

            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <div class="section-full content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-10 value">
                            <div class="container gallery-container">


                                <div class="tz-gallery">
                                    <div class="row">

                                        <?php

                                        $dir = "/var/www/html/images/infrastructure/";
                                        $a = scandir($dir);

                                        foreach ($a as $key) {
                                            if ($key!='.' && $key!='..')
                                            {
                                                $im = new imagick("{$dir}/{$key}");

                                                ?>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <a loading="lazy" class="lightbox" href="/images/infrastructure/<?php echo $key ?>">
                                                            <img loading="lazy" style="width: 500px;" src="/images/infrastructure/<?php echo $key ?>" alt="kasc">
                                                        </a>

                                                    </div>
                                                </div>

                                                <?php
                                            }

                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->

    <?php include ("../inc/footer.php");

    mysqli_close($conc);
    ?>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
    <?php include ("../inc/footerscript.php"); ?>




</div>

</body>

</html>
