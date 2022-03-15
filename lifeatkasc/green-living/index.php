<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("../../inc/metatags.php"); ?>
    <?php include ("../../inc/conn.php");
    $conc=locdb();

    ?>
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
        <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/bnr1.jpg);">
            <div class="container">

                <div class="bnr-inr-entry text-center">
                    <h1 class="text-capitalize"><span>Green Living</span></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">

                            <li><a href="/" title="Departments">Home</a></li>
                            <li><a href="javascript:void(0)">Lifeatkasc</a></li>
                            <li><a href="javascript:void(0)">Green Living</a></li>

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

                            <div class="col-md-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <h2 class="m-b10 fw7 "></h2>

                                            <div class="row m-b30">
                                                <div class="col-md-3" align="center">
                                                    <img src="/images/facilities/green/01.jpg" alt="" width="300px"
                                                         class="img-responsive">

                                                </div>
                                                <div class="col-md-9" align="center">

                                                    <p style="text-align: justify;">
                                                        Green Living is a novel concept that visualises rapid expansion
                                                        of the green zone locality. Green is a symbol of fertility and
                                                        as an institution we are taking utmost efforts to multiply the
                                                        birth of new leaves by planting new saplings and imbibing
                                                        innovative cultivational methods. An isolated pit has been
                                                        earmarked for Miyawaki cultivation method in which varied plants
                                                        are rooted at close quarters to improve the green line. Lots of
                                                        majestic trees look at the skies with the leaves shivering at
                                                        the slightest touch of breeze thereby sending a green freshness
                                                        into our minds. The management and the staff are inclined to
                                                        make life green in Kaamadhenu by allowing students to
                                                        participate in plantation activities on pure volition. Apart
                                                        from trees, decorative plants, heavy flowers, sleepy lawns and
                                                        in fact even weeds adorn our campus site. Believe it or not ,
                                                        even moons and stars stand for extra hours to watch the greenish
                                                        Kaamadhenu Campus.
                                                    </p>
                                                </div>

                                                <div class="row m-b30">
                                                    <div class="col-md-9" align="">
                                                        <p>The following initiatives have been implemented in the
                                                            campus</p>
                                                        <ul class="list-check primary">
                                                            <li>Plantation of Saplings
                                                            </li>
                                                            <li>Mini Forest with Miyawaki method of plantation
                                                            </li>
                                                            <li> Solar panel Installation</li>
                                                            <li> Rainwater Harvesting
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3" align="">
                                                        <img src="/images/facilities/green/02.jpg" alt="" width="100%"
                                                             class="img-responsive">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12"></div>
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

    <?php include ("../../inc/footer.php");

    mysqli_close($conc);
    ?>

    <?php include ("../../inc/footerscript.php"); ?>




</div>

</body>

</html>
