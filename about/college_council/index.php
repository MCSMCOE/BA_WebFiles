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
        .css-serial {
            counter-reset: serial-number;
        }
        .css-serial td:first-child:before {
            counter-increment: serial-number;
            content: counter(serial-number);
        }
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

                <div class="bnr-inr-entry text-center">
                    <h1 class="text-capitalize"><span>College Committee
</span></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="/" title="Departments">Home</a>
                            <li><a href="javascript:void(0)">College Committee
                                </a></li>
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

                        <div class="col-lg-12 value col-md-10 m-t15 col-sm-6 m-b30">
                            <div class="col-lg-12 text-center section-head">
                            </div>
                            <table id="mydTable" class="ui celled table display table table-striped table-bordered"
                                   width="100%" data-page-length="70" data-order="[[ 0, &quot;asc&quot; ]]">
                                <thead>
                                <tr>
                                    <th style="  color:#172eb5; text-align: center; font-size: 15px;"
                                        scope="col">S No</th>
                                    <th style=" color:#172eb5 ;text-align: center; font-size: 15px;">
                                        Name of the Member</th>
                                    <th style="color:#172eb5 ;text-align: center; font-size: 15px;">
                                        Designation</th>

                                </tr>
                                </thead>
                                <tbody class="css-serial">

                                <tr>
                                    <td style="text-align: center;"></td>
                                    <td>Thiru. R. Perumalsamy</td>
                                    <td>Chairman</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"></td>
                                    <td>Dr. P.N. Silambannan</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"></td>
                                    <td>Dr. C.Swaminathan</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"></td>
                                    <td>Dr. Ajeet Kumar Lal Mohan</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"></td>
                                    <td>Ms. P. Arunthathi</td>
                                    <td>Secretary</td>
                                </tr>

                                <tr>
                                    <td style="text-align: center;"></td>
                                    <td>Ms. P. Malar Selvi</td>
                                    <td>Joint Secretary</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"></td>
                                    <td>Dr. K. Senthilkumar</td>
                                    <td>Principal</td>
                                </tr>

                                <tr>
                                    <td style="text-align: center;"></td>
                                    <td>Dr. P. Siddhuraju</td>
                                    <td>University nominee</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"></td>
                                    <td>Ms. V.J. Nirmala</td>
                                    <td>Staff representative</td>
                                </tr>

                                </tbody>
                            </table>
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