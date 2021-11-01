<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("inc/metatags.php"); ?>
    <?php include("inc/conn.php");
    $conc = locdb();

    ?>
    <!-- PAGE TITLE HERE -->
    <title>Kaamadhenu Arts and Science College</title>
    <?php include("inc/headerscript.php"); ?>
    <!-- Revolution Navigation Style -->
</head>
<style>
.heading-line-bottom li
{
 list-style-Type: none;
 padding: 0 0 4px 23px;
 background: url(https://www.computerhope.com/cdn/arrow.png) no-repeat left center;
}
</style>
<body id="bg">
<div class="page-wraper">

    <div id="loading-area">
        <div class="bag"></div>
    </div>
    <?php include("inc/header.php"); ?>

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="bnr-inr-entry text-center">
                    <h1 class="text-capitalize"><span>NAAC</span></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">

                            <li><a href="/">Home</a></li>
                            <li><a href="#">NAAC</a></li>

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
                    <div class="col-md-12">
                     <div class="row">
						<div class="heading-line-bottom">
                                <h4 class="heading-title mt-0">1.1.3 TEACHERS PARTICIPATION IN BOS , QP SETTINGS AND EVALUATION PROCESS</h4>
								<ul><li><a href="./docs/tpinbos/2015-2016/BU Evaluation April May-2015.pdf" target='_blank'>BU Evaluation April May-2015</a></li>
								<li><a href="./docs/second criterion/Supporting Documents/ICT MATHEMATICS_2019-2020.pdf" target='_blank'>TEACHERS USE ICT ENABLED TOOLS</li>
								<li><a href="./docs/second criterion/Supporting Documents/SSS MATHEMATICS.xlsx" target='_blank'>STUDENT STAISFACTION SURVEY</a></li>
								</ul>
							</div>

                     <!--<div class="row">
                        <div class="col-md-12 text-center section-head">
                            <h2 class="fw7 m-b0">Recruiters</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-clients owl-carousel owl-theme">
                                <?php
                                for ($x = 1; $x <= 19; $x++) {
                                    ?>
                                    <div class="item">
                                        <div class="blog-grid">
                                            <div class="post-media img-effect ">
                                                <a href="#">
                                                    <img style="border: 1px solid #e0e0e0;"
                                                         src="/images/client-logo/<?php echo $x; ?>.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>-->
                    </div>

                </div>


            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    <?php include("inc/footer.php");

    mysqli_close($conc);
    ?>
    <?php include("inc/footerscript.php"); ?>

    <script>
        function pils(about) {
            $.ajax({
                url: "pill.php?pill=" + about, success: function (result) {
                    $("#npills").html(result);
                }
            });
        }

        pils('p1');

        $('#pilactive li').on('click', function () {
            $(this).parent().find('li.active').removeClass('active');
            $(this).addClass('active');
        });
    </script>

</div>

</body>

<style type="text/css">
    .well {
        background: #fff;
        box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.1);
    }

    .well-sm {
        padding: 9px;
        border-radius: 3px;
    }

    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    }

    @media (max-width: 768px) {
        .welll-sm {
            text-align: center;
        }
    }

    h3 {

        text-align: start;
        margin-bottom: 40px;
    }


    ul {
        list-style: none;
        line-height: 2;
        padding-left: 1em;
    }


    .value li:before {
        content: '';
        display: inline-block;
        height: 1em;
        width: 1em;

        background-image: url(/img/list/link.svg);
        background-size: contain;
        background-repeat: no-repeat;
        margin-right: 0.5em;
    }

</style>
</html>