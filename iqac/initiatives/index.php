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
                        <h1 class="text-capitalize"><span>IQAC Initiatives</span></h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">

                                <li><a href="/" title="Departments">Home</a>
                                <li><a href="javascript:void(0)">IQAC</a></li>
                                </li>
                                <!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
                                <li class="text-capitalize">Initiatives</li>
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
                                                    <h2 class="m-t0 m-b10 fw6" style="margin-left: 14px">IQAC Initiatives</h2>
								<ul class="list-check primary">

									<li>Regular meeting with IQAC members</li>
									<li>Discussion with department on their activities</li>
									<li>Faculty orientation programme for fresher’s</li>
									<li>Student orientation programme for first year students</li>
									<li>Improve the teaching methods using ICT Techniques </li>
									<li>Initiating the smart classroom </li>
									<li>Strengthening the mentoring system  </li>
									<li>Student skill development programme</li>
									<li>Facilitating the Faculty development programmes</li> 
									<li>Documentation of department and club activities </li>
									<li>Guiding and motivating the teaching faculty to publish their research articles</li>
									<li>Financial support to the faculty to attend seminars, conferences, workshops and research activities </li>
									<li>Motivating clubs and societies on various activities  </li>
									<li>Initiate to get membership from various professional body memberships </li>
									<li>Endorsing the institutional membership from the ICT Academy </li>
									<li>Student feedback on teaching through ERP </li>
									<li>Feedback from the parents and employers</li>
									<li>Performance evaluation of teaching faculty </li>
									<li>Academic and Administrative Audit </li>
									<li>Implementing the ideas of faculty and students</li>
									<li>Involving students in college decisions</li>
									<li>Collecting reports and uploading it to the AISHE, NIRF</li>
									<li>MOUs with  various institutions and industries</li>
									<li>Green initiatives  </li>

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

        <?php include ("../../inc/footer.php"); 
            mysqli_close($conc);
            ?>

        <?php include ("../../inc/footerscript.php"); ?>




    </div>

</body>

</html>
