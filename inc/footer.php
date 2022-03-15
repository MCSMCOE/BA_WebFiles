<!-- Footer -->
<footer class="sixarray-footer2 text-uppercase sixarray-footer2-img2" style="margin-top: 45px;">
	<div class="footer-top m-t5">
		<div class="container saf-footer">
			<div class="row" style="margin-bottom: -45px;">
				<div class="col-md-6 col-lg-3 col-sm-6 col-5 footer-col-4">
					<div class="widget widget_services border-0">
						<h5 class="m-b30 text-orange">Information for</h5>
						<ul style="text-transform: none;">
							<li><a href="http://camps.kascsathy.ac.in" target="_blank">Students</a></li>
							<li><a href="http://camps.kascsathy.ac.in/" target="_blank">Alumni</a></li>


                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 col-5 footer-col-4">
                    <div class="widget widget_services border-0">
                        <h5 class="m-b30 text-orange">Web Links</h5>
                        <ul style="text-transform: none;">


                            <li><a href="/careers/" target="_self">Careers - Apply to KASC</a></li>


                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 col-7 footer-col-4">
                    <div class="widget widget_services border-0">
                        <h5 class="m-b30 text-orange">Top Links</h5>
                        <ul style="text-transform: none;">

							<li><a href="https://www.ugc.ac.in/" target="_blank">UGC</a></li>

							<li><a href="https://www.b-u.ac.in/" target="_blank">Bharathiar University</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 col-7 footer-col-4">
                    <div class="widget widget_services border-0">
                        <h5 class="m-b30 text-orange">Useful Links</h5>
                        <ul style="text-transform: none;">

                            <li><a href="/antiragging/members/" target="_blank">Anti Ragging Committee</a></li>
                            <li><a href="https://forms.gle/2xCxn2rEJy9DVqAJA" target="_blank">Grievance Committee</a></li>
									<li><a href="https://forms.gle/2xCxn2rEJy9DVqAJA" target="_blank">Internal Complaints Committee</a></li>
                            <!--<li><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm" target="_blank">Online
                                    Fee Payment</a></li>-->


                        </ul>
                    </div>
                </div>
            </div>
            <div class="divider bg-gray-dark tb10 op1"><i class="icon-dot c-square"></i></div>
            <div class="row m-t0" style="margin-bottom: 8px; text-align: center;">
                <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 footer-col-4 text-md-left">
                    <span style="text-transform: none;"><a target="blank" href="//campusstack.org/"><i class="fa fa-code" aria-hidden="true"></i> by CampusStack</a></span>
                </div>
                <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 footer-col-5 text-md-right text-center">
                    <div class="widget-link right">
						<ul class="list-inline m-a0">
                                                <li><a target="_blank" href="https://www.facebook.com/kascsathy"
                                                       class="site-button facebook circle "><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" href="https://www.youtube.com/kascsathy"
                                                       class="site-button youtube circle "><i
                                                                class="fa fa-youtube-play"></i></a></li>
                                                <li><a target="_blank" href="https://www.linkedin.com/in/kascsathy"
                                                       class="site-button linkedin circle "><i
                                                                class="fa fa-linkedin"></i></a></li>
                                                <li><a target="_blank" href="https://www.instagram.com/kaamadhenuarts/?hl=en"
                                                       class="site-button instagram circle "><i
                                                                class="fa fa-instagram"></i></a></li>
                                               <!-- <li><a target="_blank" href="https://twitter.com/kascsathy"
                                                       class="site-button twitter circle "><i class="fa fa-twitter"></i></a>
                                                </li>-->
										</ul>
                        <ul style="text-transform: none;">

                            <?php
                            $qry_category = 'SELECT counter FROM counter.counter';
                            $qry_category = mysqli_query($connc, $qry_category);
                            if ($qry_category) {
                                while ($rows = mysqli_fetch_assoc($qry_category)) {


                                    ?>
                                    <li><a href="javascript:void(0)"><?php echo $rows['counter'] ?>&nbsp;Visitors</a></li>
                                    <?php
                                }
                            }
                            ?>

                        </ul>
                    </div>
                </div>
			
		</div>
	</div>
	
	<!-- footer bottom part -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row" style="text-align: center;">
                <?php
                function auto_copyright($startYear = null) {
                    if (!is_numeric($startYear) || intval($startYear) >= date('Y')) {
                        echo "" . date('Y'); // display current year if $startYear is same or greater than this year
                    } else {
                        // Display range of years. Replace date('Y') with date('y') to display range of years in YYYY-YY format.
                        echo "" . intval($startYear) . "&ndash;" . date('Y');
                    }
                }
                ?>
				<div class="col-md-12 col-sm-6 text-center"> <span style="text-transform: none;"><?php auto_copyright(); // Current year?>&nbsp;&copy; KASC</span> </div>

			</div>
		</div>
	</div>
</footer>


<button class="scroltop fa fa-chevron-up"></button>