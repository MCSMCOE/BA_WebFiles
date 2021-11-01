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
                    <h1 class="text-capitalize"><span>Hostel</span></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">

                            <li><a href="/" title="Departments">Home</a></li>
                            <li><a href="javascript:void(0)">Lifeatkasc</a></li>
                            <li><a href="javascript:void(0)">Hostel</a></li>

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
                                                    <img src="/images/facilities/hostel/02.jpg" alt="" width="300px"
                                                         class="img-responsive">

                                                </div>

                                                <div class="col-md-9" align="center">
                                                    <p class="text-justify">A commodious hostel for boys and girls with
                                                        complete safety and security located within the premises. The
                                                        rooms are spacious and hygienic, fully furnished with cots and
                                                        cupboards. Clean toilets and bathrooms with nonstop water
                                                        connections are part and parcel of the residential mechanism. A
                                                        full fledged mess offers catering services to the inmates with
                                                        diligence and care. The students have television with DTH
                                                        facility for their leisure time entertainment. Sports facilities
                                                        are provided for all the inmates.
                                                    </p>
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
