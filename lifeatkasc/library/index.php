<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("../../inc/metatags.php"); ?>
    <?php include ("../../inc/conn.php");
    $conc=locdb();
  $con=locdb();
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
                    <h1 class="text-capitalize"><span>Library</span></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">

                            <li><a href="/" title="Departments">Home</a></li>
                            <li><a href="javascript:void(0)">Lifeatkasc</a></li>
                            <li><a href="javascript:void(0)">Library</a></li>

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
                                                    <img src="/images/facilities/library/01.jpg" alt="" width="300px"
                                                         class="img-responsive">

                                                </div>
                                                <div class="col-md-9" align="center">
                                                    <p class="text-justify">A rich library stored with mosaic of
                                                        collections of various subjects, is primarily to develop
                                                        the reading habits of the students. Apart from the subject
                                                        books, our library has English and
                                                        Tamil best sellers, competitive exam books, Journals and
                                                        Magazines. Stocking a library is a
                                                        continuous process and every year, we take adequate steps to
                                                        enrich to learn barn. We also
                                                        have a separate research oriented books that would help the
                                                        scholars to write a good
                                                        dissertation. The reading hall has a good capacity where 200
                                                        users can use comfortably.
                                                        As this generation students needs library collections in digital
                                                        formats, the digital library
                                                        is designed.</p>
                                                </div>

                                            </div>
											<div class="content-block">
				<!-- Portfolio  -->
				<div class="section-full content-inner-2 portfolio bg-white" id="portfolio">
					<div class="container">
						
						<div class="clearfix">
							<ul id="masonry" class=" gallery-listing gallery-grid-4 gallery mfp-gallery text-center">
								<?php
								$qry_category='SELECT sno,l_name,ifnull(d_filter,\'\')d_filter,ifnull(link,\'\') link FROM library WHERE STATUS=1 ORDER BY l_name';
														$qry_category = mysqli_query($con, $qry_category);
								while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
								{
                                    ?>
                                    <!-- <li class="<?php echo $rows_mastercategory['d_filter'] ?> card-container col-lg-4 col-md-6 col-sm-6 ">-->
                                        <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $a; ?>" aria-expanded="false" aria-controls="collapseOne">
                                                        <font style="font-size: 17px"><?php echo $row['d_filter'] ?></font>
                                                    </button>
                                                </h5>
                                            </div>
										<div class="box gallery-box">
                                            <!--										<div class="media img-effect">-->
                                            <!--											<a href="/activities/clubs/details/?club=-->
                                            <?php //echo base64_encode($rows_mastercategory['sno']*101995);
                                            ?><!--">-->
                                            <!--											<img style="height:300px" width="500px" src="/images/activities/clubs/-->
                                            <?php //echo $rows_mastercategory['sno']
                                            ?><!--.jpg"  alt="">-->
                                            <!--                                            </a>-->
                                            <!--											-->
                                            <!--										</div>-->
                                            <div class="dez-info p-a30 bg-white">
                                                <h5 class="dez-title m-t0"><a target="blank" style=""
                                                                              href="/lifeatkasc/library/=<?php echo base64_encode($rows_mastercategory['sno'] * 101995); ?>"><?php echo $rows_mastercategory['l_name'] ?></a>
                                                </h5>

                                            </div>
                                        </div>
                                    </li>

                                    <?php
                                }
														
														
								?>
								
							</ul>
						</div>
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
mysqli_close($con);
    mysqli_close($conc);
    ?>

    <?php include ("../../inc/footerscript.php"); ?>




</div>

</body>

</html>
