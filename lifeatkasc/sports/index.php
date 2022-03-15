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
                    <h1 class="text-capitalize"><span>Sports</span></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">

                            <li><a href="/" title="Departments">Home</a></li>
                            <li><a href="javascript:void(0)">Lifeatkasc</a></li>
                            <li><a href="javascript:void(0)">Sports</a></li>

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

                                            <div class="row m-b30">
                                                <div class="col-md-12" align="center">
                                                    <blockquote>"Success is where preparation and opportunity meet"
                                                    </blockquote>

                                                </div>
                                                <div class="col-md-9" align="center">

                                                    <p class="text-justify">An expansive playground spreads a green
                                                        carpet welcome to the students to utilize it in an exponential
                                                        manner. Sports provide an opportunity to learn new skills
                                                        related to the particular sport, as well as social skills.
                                                        Students learn how to play by rules and respect decisions made
                                                        by others. Participating in sports enhance self-image,
                                                        confidence and self-respect which are positive effects of youth
                                                        sports. Our PD unit is stocked with kits that enable students to
                                                        play Cricket, Football, Volleyball, Shuttle, Kabaddi and other
                                                        games. Developmental benefits of girls participating in sports
                                                        are a higher self-esteem, higher self-confidence and a reduced
                                                        risk of chronic illness. A strong contingent men Kabaddi team,
                                                        has won many prizes at district and state level meet. The
                                                        management is very particular about the health of the students
                                                        and therefore it encourages them to actively participate in
                                                        games and other activities. Sprinters of our college have taken
                                                        part in various events and brought laurels.
                                                    </p>
                                                </div>
                                                <div class="col-md-3" align="center">
                                                    <img src="/images/facilities/sports/01.jpg" alt="" width="300px"
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
