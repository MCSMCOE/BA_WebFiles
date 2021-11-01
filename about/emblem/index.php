<!DOCTYPE html>
<html lang="en">
<head>
<?php include ("../../inc/metatags.php"); ?>
<?php include ("../../inc/conn.php"); 
$con=locdb();
?>
<!-- PAGE TITLE HERE -->
    <title>Kaamadhenu Arts and Science College</title>
    <?php include ("../../inc/headerscript.php"); ?>
<!-- Revolution Navigation Style -->
<style type="text/css">
.m-b10 {
margin-bottom: 20px;
margin-left: 14px;
}
</style>
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
<!-- <div class="bnr-inr-entry text-center">
<h1>History & Tradition</h1>

<div class="breadcrumb-row">
<ul class="list-inline">
<li><a href="#">Home</a></li>
<li><a href="#">History & Tradition</a></li>

</ul>
</div>

</div> -->
<div class="bnr-inr-entry text-center">
<h1 class="text-capitalize"><span>Emblem</span></h1>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
<ul class="list-inline">

<li><a href="/" title="Departments">Home</a>
<li><a href="javascript:void(0)">Emblem</a></li>
</li>


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
                    <div class="col-lg-12 col-md-12 value">
                        <h2 class="m-t0 m-b10 fw6">Emblem</h2>
                        <div class="post-text">
                            <img class="alignleft" width="200" src="/images/kasc.png" alt="">
                            <p class="text-justify">The College emblem is traditionally modern. The mythical cow that
                                symbolises generosity is at top, the open book which signifies the liberal dissemination
                                of knowledge without hurdles. The lamp at the sides manifests the power of knowledge,
                                and a computer at the bottom brings in a touch of modernity. The words “Initiate” is a
                                trigger to make the students plunge into actions and the word “Innovations” is to goad
                                the students to think a new. In short, the emblem impels the students to create good
                                things using the light of knowledge that was liberally showered by the magical
                                Kaamadhenu Arts and Science College.</p>
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
include ("../../inc/footerscript.php");

?>

</div>

</body>

</html>