<!DOCTYPE html>
<html lang="en">
<head>
		<?php include ("../../../inc/metatags.php"); ?>
		<?php include ("../../../inc/conn.php");
        $conc=locdb();
	?>
    <!-- PAGE TITLE HERE -->
    <title>Kaamadhenu Arts and Science College</title>
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
                        <h1 class="text-capitalize"><span>Staffs</span></h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">

                                <li><a href="/" title="Departments">Home</a>
                                <li><a href="javascript:void(0)">Academics</a></li>
                                </li>
                                <!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
                                <li class="text-capitalize">Staffs</li>
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

<div class="col-md-12" align="">
                                                    <h2 class="m-t0 m-b10 fw6" style="margin-left: 14px">CODE OF CONDUCT FOR NON TEACHING STAFFS</h2>
								<ul class="list-check primary">

									<li>	Non teaching staff shall maintain high standards of punctuality, sincerity, honesty and ethics</li>
									<li>	Non teaching staff shall extend cooperation to his/her colleagues and execute organisational activities assigned to them from time to time</li>
									<li>	Non teaching staff shall assist newly appointed staffs to adjust with the new environment</li>
									<li>	No staff shall absent from his/her duties without prior permission from higher authorities </li>
									<li>	Non teaching staff shall create and maintain appropriate relationships with teaching faculty and students</li>
									<li>	Non teaching staff shall be fair, impartial and reasonable at all times </li>
									<li>	Non teaching staff shall discharge their duties with care and attention </li>
									<li>	Non teaching staff shall submit  the resignation letter two months before the date of relieving</li>
									<!--<li>To make the students dust and sweat in playground through sports activities and calm their spirits through yoga</li>-->
								</ul>

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

        <?php include ("../../../inc/footer.php"); 
            mysqli_close($conc);
            ?>

        <?php include ("../../../inc/footerscript.php"); ?>




    </div>

</body>

</html>
