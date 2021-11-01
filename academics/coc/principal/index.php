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
                        <h1 class="text-capitalize"><span>Principal</span></h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">

                                <li><a href="/" title="Departments">Home</a>
                                <li><a href="javascript:void(0)">Academics</a></li>
                                </li>
                                <!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
                                <li class="text-capitalize">Principal</li>
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
                                                    <h2 class="m-t0 m-b10 fw6" style="margin-left: 14px">CODE OF CONDUCT FOR PRINCIPAL</h2>
								<ul class="list-check primary">

									<li>	The principal should always be fair, honest and have a clear vision to execute the Vision and Mission of the institute</li>
									<li>	Guide the academic and administrative programmes</li>
									<li>	Enforce the staff and students to follow the rules, policies and principles of the institute</li>
									<li>	Conduct Academic Council meetings as per norms</li>
									<li>	Shall involve in the various activities of IQAC and guide them in all their measures</li>
									<li>	Coordinate and motivate the administrative authorities, teaching and non-teaching staffs, so that to play their respective roles more effectively</li>
									<li>	Conduct meetings with HoDs to review the academic work and provide suggestions to achieve desired outcome</li>
									<li>	Encourage HoDs to organise seminars, conferences, workshops etc.</li>
									<li>	Monitor and guide the respective clubs, committees, associations and the coordinators in the developmental activities</li> 
									<li>	Track the class work as per timetable</li>
									<li>	Instruct the faculty to conduct advanced classes for advanced learners and remedial classes for slow learners</li>
									<li>	Plan budgetary provisions</li>
									<li>	Be supportive to students ideas</li>
									<li>	Submit annual report on the different developments and collaborative programmes</li>
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
