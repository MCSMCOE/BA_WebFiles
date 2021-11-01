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
                        <h1 class="text-capitalize"><span>Joint Secretary</span></h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">

                                <li><a href="/" title="Departments">Home</a>
                                <li><a href="javascript:void(0)">About</a></li>
                                </li>
                                <!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
                                <li class="text-capitalize">Joint Secretary</li>
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

                                                    <div class="col-md-12" align="center">
                                                        <p style="text-align: justify;">We are living in the globalised world where talent becomes part and parcel of one’s success. As an institution it is our duty to sharpen the skills of the students and make them academically eligible to swim against the tide.<br>
                                                            The college has all the necessary amenities to make the students’ sojourn a peaceful and a safe one. We provide the needed inputs and make them realise their fullest potential that would enable them to breathe success at the earliest opportunity.<br>
                                                            The departments will cater not only to the academic requirements of the students, but also would act as a hot bed for research activities. The libraries are well stocked that are certain to open the windows of innovation and research to the next generation.<br>
                                                            As I have already poured enough words, I don’t wish to dabble my pen for long. It is our earnest commitment to fulfil the desires of the stake holders and it is our belief that any academic entrant will exit the institution with brimming confidence and overflowing courage to win fame and name in the shaky world.
                                                        </p>

                                                        <div class="col-md-12" align="center">

                                                        </div>
                                                    </div>



                                                </div>

                                                <div style="float: right">
                                                    <h4 style="font-size:15px;text-align: justify;">With Best Wishes &amp; Regards</h4>
                                                    <h5 style="font-size:15px;"> P Malar Selvi
                                                        <br>Joint Secretary</h5>
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
