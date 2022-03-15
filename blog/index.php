<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("../inc/metatags.php");

     include ("../inc/conn.php");
 $con=locdb();
     ?>
    <?php
		
		//error_reporting(E_ALL);
		//ini_set('display_errors', 1);
		if(isset($_GET['blog']))
		$id=base64_decode($_GET['blog'])/101995;
		else
		{
		header('Location: ../');
		}
		?>

    <!-- PAGE TITLE HERE -->
    <title>Kaamadhenu Arts and Science College</title>
    <?php include ("../inc/headerscript.php"); ?>
    <!-- Revolution Navigation Style -->
</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>
        <?php include ("../inc/header.php"); ?>

        <!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/bnr1.jpg);">
                <div class="container">
                    <div class="bnr-inr-entry text-center">
                        <h1><span>Picture Ledge</span></h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Picture Ledge</a></li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="content-area">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-6 m-b30">

                            <?php
                            $qryb_category = "SELECT `id`,`category_name`,`title_name`,`body`,`ext_link`  FROM `posts` WHERE category_name='events' AND STATUS='1' AND id='$id'";
                            $qryb_category = mysqli_query($con, $qryb_category);
                            while ($rows_mastercategory = mysqli_fetch_assoc($qryb_category)) {
                                ?>
                                <div class="blog-post blog-single">
                                    <div class="post-title text-center">
                                        <h3 class="post-title center fw5"><a
                                                    href="#"><?php echo $rows_mastercategory['title_name'] ?></a></h3>
                                    </div>

                                    <div align="center" class="post-media img-effect img-fluid">
                                        <img style="width:900px; height:auto;" class="img-fluid" style=""
                                             src="/images/posts/<?php echo $rows_mastercategory['id'] ?>.jpg" alt="">

                                    </div>

                                    <div class="post-text col-md-12">
                                        <p class="text-justify"><?php echo $rows_mastercategory['body'] ?></p>
                                    </div>

                                    <div class="divider bg-gray-dark"><i class="icon-dot c-square"></i></div>

                                </div>



                            <?php
																}
																
																
								?>



                        </div>

                    </div>
                </div>
            </div>
        </div>


        <?php include ("../inc/footer.php");
 mysqli_close($con);
         include ("../inc/footerscript.php"); ?>


    </div>

</body>

</html>
