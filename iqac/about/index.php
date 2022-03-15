<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("../../inc/metatags.php");
    include ("../../inc/conn.php");
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
                    <h1 class="text-capitalize"><span>About IQAC </span></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">

                            <li><a href="/" title="Departments">Home</a>
                            <li><a href="javascript:void(0)">IQAC</a></li>
                            </li>
                            <!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
                            <li class="text-capitalize">About</li>
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

                                            <h2 class="m-b10 fw7 ">About IQAC</h2>


                                            <div class="row m-b30">
                                               <div class="col-md-12" align="">
                                                    <br style="text-align: justify;">

                                                        The National Assessment and Accreditation Council advocated the establishment of an
														Internal Quality Assurance Cell (IQAC) by all the accredited institutions as a quality sustenance
														measure. At Kaamadhenu Arts and Science College, IQAC was established on June 6, 2018. The
														aim of the IQAC is to focus on the quality enhancement through various academic and
														administrative activities. As suggested by NAAC, there are a few objectives, strategies, functions
														and benefits of IQAC in every academic institution. As quality enhancement is a continuous
														process, the IQAC plays a major role in planning, guiding and executing exercises to improve
														the overall performance of the institution.
														</p>
                                                       </div>
                                                </div>



                                            </div>


                                        </div>
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
