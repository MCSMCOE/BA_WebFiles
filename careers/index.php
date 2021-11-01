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
                    <h1 class="text-capitalize"><span>Careers</span></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">

                            <li><a href="/" title="Departments">Home</a></li>
                            <li><a href="javascript:void(0)">Careers</a></li>


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

                                            <div class="single-service">
                                                <h3 class="line-center mt-20 mb-20 text-theme-colored" align="center"
                                                    style="color: #800000; font-size:16pt"><u>Applications are invited
                                                        from interested and eligible candidates for the post of
                                                        Professor / Associate Professor / Assistant Professor /
                                                        Placement officer / Librarian / Physical Director
                                                    </u></h3><h4 align="center"></h4>
                                            </div>

                                            <div class="row m-b30">

                                                <hr>
                                                <h4 style="color: #000000; font-size:13pt" align="center">To Apply
                                                    Online<a
                                                            href="https://docs.google.com/forms/d/e/1FAIpQLSdaFARJzPv8fzTGTwSPMGNuPoh1qcaKP8pRZbbb3sEVNNktmg/viewform"
                                                            target="_blank"><font color="red">&emsp;<u>Click
                                                                here</u></font></a></p>
                                                    <hr>
                                                    <p style="color: #000000; font-size:13pt">
                                                </h4>

                                                <hr>

                                                <h4 style="color: #000000; font-size:13pt" align="center">Download
                                                    Application<a href="/pdf/application1.docx"
                                                                  target="_blank"><font color="red">&emsp;<u>Click
                                                                here</u></font></a></p>
                                                    <hr>
                                                    <p style="color: #000000; font-size:13pt">
                                                </h4>

                                                <hr>


                                            </div>

                                            <div class="col-md-12">
                                                <h4><p style="text-transform: uppercase; color: #000000; font-size:12pt"
                                                       class="line-bottom mt-20 mb-20 text-theme-colored">
                                                        <!--<i class="fa fa-info"></i>--> <b>Procedure for Submitting
                                                            Application</b></p>
                                                    <p style="color: #000000; font-size:13pt" align="left">&nbsp; 1.
                                                        Download the CV form, <a href="/pdf/application.doc"
                                                                                 target="_blank"> <font
                                                                    style="font-size:15px; color: red">Click here</font></a><br>
                                                        &nbsp; 2. Fill the required fields in CV form <br>
                                                        &nbsp; 3. Apply to the relevant post, using the below Google
                                                        Form link & upload the CV</p>
                                                    <hr>
                                                </h4>
                                                </p>

                                                <h4 style="color: #000000; font-size:13pt" align="center">Apply Online
                                                    for the Post of Professor / Associate Professor / Assistant
                                                    Professor / Placement Officer / Librarian / Physical Director <a
                                                            href="https://docs.google.com/forms/d/e/1FAIpQLSdaFARJzPv8fzTGTwSPMGNuPoh1qcaKP8pRZbbb3sEVNNktmg/viewform"
                                                            target="_blank"><font color="red"><u>Click
                                                                here</u></font></a></p>
                                                    <hr>
                                                    <p style="color: #000000; font-size:13pt">
                                                </h4>

                                            </div>
                                            <div class="col-md-12">

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

        <?php include("../inc/footer.php");

        mysqli_close($conc);
        ?>

        <?php include("../inc/footerscript.php"); ?>


    </div>

</body>

</html>
