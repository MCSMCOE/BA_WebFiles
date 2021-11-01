<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../inc/metatags.php"); ?>
    <?php include("../inc/conn.php");
    $conc = locdb();

    ?>
    <!-- PAGE TITLE HERE -->
    <title>Kaamadhenu Arts and Science College</title>
    <?php include("../inc/headerscript.php"); ?>
    <!-- Revolution Navigation Style -->
</head>
<body id="bg">
<div class="page-wraper">

    <div id="loading-area">
        <div class="bag"></div>
    </div>
    <?php include("../inc/header.php"); ?>

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="bnr-inr-entry text-center">
                    <h1 class="text-capitalize"><span>Placement</span></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">

                            <li><a href="/">Home</a></li>
                            <li><a href="#">Placement</a></li>

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
                                <h4 class="heading-title mt-0">Overview</h4>
                                <div class="post-text">
                                    <p class="text-justify">Placement Cell involves both training and recruitment. From
                                        the very beginning, the college administration was keen to train the students in
                                        the complex job searching activity that involved a good academic record along
                                        with placement skills. An exclusive placement officer along with department-wise
                                        staff coordinators takes care of the training and placement activities.</p>
                                    <p class="text-justify">Soft skill development is a nuanced sensitive field and only
                                        trainers who possess adequate skills could sharpen the skills of the students.
                                        Frequent soft skills sessions were conducted by summoning the experts from
                                        various spheres. Sessions pertaining to communication skills development, CV
                                        development and interview skills are conducted at regular intervals. Guest
                                        lectures are often arranged to enhance the knowledge of placement and its
                                        importance.</p>
                                    <p class="text-justify">The Placement Cell is maintaining a strong database of major
                                        recruiters and building cordial relationships with them. It has up-to-date
                                        information regarding the current trends prevailing in the industry; it provides
                                        timely information to the students regarding industry expectations and their
                                        recruitment procedures</p>
                                    <p class="text-justify">The college library has an exclusive chamber for competitive
                                        exam preparations, and the placement cell notifies the recruitments in the
                                        notice board. A counselling centre functions selectively to admonish the
                                        students about the career path they are supposed to choose. A part-time career
                                        expert conducts the proceedings.
                                    </p>
                                    <p class="text-justify">Every year, the placement cell of the institution arranges
                                        for the so called “Placement Mela“, wherein private players plunge into our
                                        academic space to pick up the student of their choice for a reasonable pay. The
                                        choice is based on the students’ performance and interest. The institution
                                        encourages the students to swim against the tide as it would strengthen their
                                        resolve and make them craft a career of their choice as the future unfolds</p>
                                    <p class="text-justify">Thus, Placement Cell is an evolving department and the
                                        institution is investing a lot of time and money to vest it with a modern
                                        outlook.
                                    </p>
                                    <p class="text-justify">Our students of 2020 batch got placed in the following
                                        companies
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center section-head">
                            <h2 class="fw7 m-b0">Recruiters</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-clients owl-carousel owl-theme">
                                <?php
                                for ($x = 1; $x <= 22; $x++) {
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
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    <?php include("../inc/footer.php");

    mysqli_close($conc);
    ?>
    <?php include("../inc/footerscript.php"); ?>

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