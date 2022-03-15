<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("../../inc/metatags.php"); ?>
    <?php include ("../../inc/conn.php"); 
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
                        <h1 class="text-capitalize"><span>Chairman</span></h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">

                                <li><a href="/" title="Departments">Home</a>
                                <li><a href="javascript:void(0)">About</a></li>
                                </li>
                                <!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
                                <li class="text-capitalize">Chairman</li>
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
                                                </div>
                                                <p class="text-justify">The drastic strides in Science and Technology
                                                    has shrunk the world with the scientists laying a ladder to open up
                                                    the skies in near future. In changes, education plays a primordial
                                                    role in moulding the future generations with knowledge and wisdom.
                                                    Kaamadhenu Arts and Science College is a product of this vision and
                                                    the dream of strengthening the rural and semi urban boys and girls
                                                    has propelled us to initiate this project which soon will scale
                                                    greater heights.</p>
                                                <p class="text-justify">Discipline, knowledge and strength are three
                                                    vital components of our educational system and it is our endeavour
                                                    to infuse these virtues into the young minds of India. Though
                                                    pedagogy is important, as an institution we take extreme care to
                                                    place the graduates and post graduates in a suitable job. With the
                                                    serene nature with us, we wish to ensure the health and safety of
                                                    the students by providing them a green learning atmosphere that
                                                    would strengthen them physically and mentally
                                                </p>

                                                <div class="col-md-12" align="center">
                                                    <blockquote>“Nature is Truth<br>
                                                        Truth is Nature”
                                                    </blockquote>

                                                </div>


                                                <div style="float: right">
                                                    <h4 style="font-size:15px;text-align: justify;">Best Wishes and Regards</h4>
                                                    <h5 style="font-size:15px;">R Perumalsamy<br>Chairman</h5>
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

        <script type="">
            function pils(about){ 
			$.ajax({url: "pill.php?pill="+about, success: function(result){
			$("#npills").html(result);
			}});
		    }
		  pils('p1');

		 
      $( '#pilactive li' ).on( 'click', function() {
            $( this ).parent().find( 'li.active' ).removeClass( 'active' );
            $( this ).addClass( 'active' );
      });


			</script>
        <style type="text/css">
            ul {
                list-style: none;
                padding-left: 2em;
            }

            ul li {}

            .value li:before {
                content: "\f064";
                /* FontAwesome Unicode */
                font-family: FontAwesome;

        </style>


    </div>

</body>

</html>
