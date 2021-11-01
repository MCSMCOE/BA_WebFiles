<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("../inc/metatags.php"); 
        
		 require_once ("../inc/conn.php");  
         require_once ("../inc/connect.php");          
        
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
            <?php
					{
				?>
            <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/deptm01.jpg);">
                <?php
					}
					?>
                <div class="container">
                    <div class="bnr-inr-entry text-center">
                        <h1 class="text-capitalize"><span>Online Application (2020-2021)</h1>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <div class="content-area">
                <div class="container">
<?php

function getter($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

echo getter('https://camps.kascsathy.ac.in/CA_Online/instruction.jsp');
?>
                   
                    <br>
                </div>
            </div>
        </div>
        <!-- Content END-->

        

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
