<?php
$head = locdb();
?>
<!-- header -->
<style>
	.blink-text{
		color: #000;
		font-weight: bold;
		font-size: 2rem;
		animation: blinkingText 2s infinite;
	}
	@keyframes blinkingText{
		0%		{ color: #10c018;}
		25%		{ color: #1056c0;}
		50%		{ color: #ef0a1a;}
		75%		{ color: #254878;}
		100%	{ color: #04a1d5;}
	}
</style>
<style>
	.blink-bg{
		color: #fff;
		padding: 10px;
		display: inline-block;
		border-radius: 5px;
		animation: blinkingBackground 2s infinite;
	}
	@keyframes blinkingBackground{
		0%		{ background-color: #10c018;}
		25%		{ background-color: #1056c0;}
		50%		{ background-color: #ef0a1a;}
		75%		{ background-color: #254878;}
		100%	        { background-color: #04a1d5;}
	}
</style>

<header class="sixarray-header header navs2 mobile-nav" style="height: 50px;">
    <div class="topbar bg-primary text-white">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="topbar-left">
                    <ul class="top-author-link">
                        <!--  <li><a href="">SVB Foundation Scholarship Test for +2 Students <img src="/images/new_loader.gif" class="img-fluid"></a></li>
            <li><a href="">Polytechnic Students <img src="/images/new_loader.gif" class="img-fluid"></a></li> -->
                        <!--<li><a href="">Contact</a></li>-->
                        <li style="font-family: 'Poppins', serif;"><i class="ti-email m-r5"></i>principal@kascsathy.ac.in
                        </li>
                        <li class="blinking" style="font-family: 'Poppins', serif;">Admissions Contact:+91 97509 94108
                        </li>
                    </ul>
                </div>
                <div class="topbar-left">
                    <ul class="top-author-link">
					<li>
                            <a class='blink-bg' href="https://kascsathy.ac.in/admissions/application.php"
                               target="_blank">Admission Open 2021-2022</a>
                        </li>
						<li>
                           <a  href="https://camps.kascsathy.ac.in" target="_blank" class="">Alumni</a>
					    </li>
						<li>
                           <a  href="https://kascweb.campusstack.org/nirf/" >NIRF</a>
					    </li>
                       
                        <li><a href="https://camps.kascsathy.ac.in" target="_blank"
                               class="">CAMPS</a></li>
                        

                        
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- main header -->
    <div class="header-sticky menu-bar-content navbar-expand-lg">
        <div class="main-bar main-bar2 clearfix ">

            <div class="container clearfix">
                <!-- website logo -->
                <div class="sixarray-logo">
                    <a href="/"><img src="/images/headlogo.png" style="width: 352px" alt=""></a> </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
                    data-toggle="collapse" data-target="#navbarLeft" aria-controls="navbarLeft" aria-expanded="false"
                    aria-label="Toggle navigation"> <span></span> <span></span> <span></span> </button>



                <!-- main nav -->
                <!--<div style="color:#ffff" class="header-nav navbar-collapse collapse justify-content-end" id="navbarLeft">-->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarLeft">


                    <?php
          ini_set('display_errors', '1');
          echo "<ul  class='nav navbar-nav'>";
          function display_children($parent, $head)
          {

            $result = mysqli_query($head, "SELECT a.id,a.target, a.title, a.link, b.Count FROM `header_menu` a  LEFT OUTER JOIN (SELECT parent, COUNT(*) AS Count FROM `header_menu` GROUP BY parent) b ON a.id = b.parent WHERE a.parent='" . $parent . "' AND status=1 ORDER BY a.orderby");
            while ($row = mysqli_fetch_array($result)) {
              if ($row['Count'] > 0) {
                echo '<li><a  class="dez-page">' . $row['title'] . '<i class="fa fa-chevron-down"></i></a>';
                echo "<ul class='sub-menu left'>";
                display_children($row['id'], $head);
                echo "</ul></li>";
              } elseif ($row['Count'] == 0) {
                echo "<li><a  target='" . $row['target'] . "' href='" . $row['link'] . "'>" . $row['title'] . "</a></li>";
              }
            }
          }
          display_children(0, $head);
          mysqli_close($head);
          echo "</ul>";
          ?>

                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
<!-- header END -->