<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("../inc/metatags.php"); 
		 include ("../inc/conn.php");  
         include ("../inc/connect.php"); 
          $con=locdb();
          $conc=campsdb();
        ?>
    <!-- PAGE TITLE HERE -->
    <title>KASC | Kamadhenu Arts and Science College</title>
    <?php include ("../inc/headerscript.php"); ?>
    <!-- Revolution Navigation Style -->
</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area">
            <div class="bag"></div>
        </div>
        <?php include ("../inc/header.php"); ?>

        <!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->
            
            <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/deptm01.jpg);">
                
                <div class="container">
                    <div class="bnr-inr-entry text-center">
                        <h1 class="text-capitalize"><span>NIRF</h1>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <div class="content-area">
                <div class="container">

                    <div class="row">
                    <!--<a href= "../pdf/nirf_2019.pdf" target="_blank">NIRF 2019 </a> </div> <div class="row"> -->
					<a href= "../pdf/nirf_2020.pdf" target="_blank">NIRF 2020 </a>  </div> <div class="row">
					<a href= "../pdf/nirf_2021.pdf" target="_blank">NIRF 2021 </a> </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <!-- Content END-->

        <?php include ("../inc/footer.php");
                mysqli_close($con);
                mysqli_close($conc);
               
            ?>

        <?php include ("../inc/footerscript.php"); ?>
        <style type="text/css">
            .card-body {
                margin-top: -14px;
                margin-bottom: -31px;
            }

        </style>

    </div>

</body>

</html>
