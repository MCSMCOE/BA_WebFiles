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
                        <h1 class="text-capitalize"><span>Secretary</span></h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">

                                <li><a href="/" title="Departments">Home</a>
                                <li><a href="javascript:void(0)">About</a></li>
                                </li>
                                <!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
                                <li class="text-capitalize">Secretary</li>
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


                                                <div class="row m-b30"></div>

                                                <p class="col-md-12">
                                                <p class="text-justify">Every student who steps into the institution has
                                                    to undergo an all-round progress in the spheres of academics,
                                                    sports, arts, soft skills and mind. Our system is designed in such a
                                                    way that every student would be subjected to an organic growth that
                                                    would make them independent and self-reliant.</p>
                                                <p class="text-justify">The massive infrastructure facilities would
                                                    provide an excellent opportunity for the students to hone their
                                                    skills. The sprawling campus with clusters of buildings, fertile
                                                    library punctuated with leafy trees, spacious playground would
                                                    certainly enhance the learning experience of the students.</p>
                                                <p class="text-justify"> It has been our motto to safeguard and empower
                                                    women and our institution takes special care in strengthening the
                                                    female gender through constant encouragement and igniting their
                                                    career skills. We conduct career development programmes at regular
                                                    intervals through experts and the civil services cell of the college
                                                    goads the students to take the UPSC / TNPSC examinations. As an
                                                    educationist, I wish to sow the seeds of hope in the minds of all
                                                    the stakeholders and bring about a massive transformation amongst
                                                    the students and society.</p>


                                                <div class="col-md-12" align="center">
                                                    <blockquote>“We light the Stars<br>
                                                        Let they shine for the society”


                                                    </blockquote>

                                                </div>
                                            </div>


                                        </div>

                                                <div style="float: right">
                                                    <h4 style="font-size:15px;text-align: justify;">With Best Wishes &amp; Regards</h4>
                                                    <h5 style="font-size:15px;">Ms P Arunthathi<br>Secretary</h5>
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
