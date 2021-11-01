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
                        <h1 class="text-capitalize"><span>Online Admission (2021-2022)</h1>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <div class="content-area">
                <div class="container">

                    <div class="row" id='displayDiv'>
                <script type="text/javascript">
  // Create browser compatible event handler.
  var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
  var eventer = window[eventMethod];
  var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
  // Listen for a message from the iframe.
  eventer(messageEvent, function(e) {
    if (isNaN(e.data)) return;

    // replace #sizetracker with what ever what ever iframe id you need
    document.getElementById('frame').style.height = e.data + 'px';

  }, false);
</script>  
        <div class="col-xs-12 col-sm-12 col-md-12">
<?php 
if(isset($_GET['id'])){
?>
<iframe id='frame'  sandbox="allow-same-origin allow-scripts allow-popups allow-forms allow-top-navigation "  src="https://camps.kascsathy.ac.in/CA_Online/jsp/session/report_display.jsp" style="width: 90%; height: 1500px"
scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0">
</iframe >

<?php 
}
else{
?>
<iframe id='frame' sandbox="allow-same-origin allow-scripts allow-popups allow-forms allow-top-navigation"  src="https://camps.kascsathy.ac.in/CA_Online/instruction.jsp" style="width: 90%; height: 2500px"
scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0">
</iframe >
<?php 

}
?>

            
        </div>

                    </div>
                    <br>
                </div>
            </div>
        </div>

        <!-- Content END-->

        <?php include ("../inc/footer.php");
              
               
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
