<?php
$pill = $_GET['pill'];
switch ($pill) {
    case 'p1':
        p1();
        break;
    case 'p2':
        p2();
        break;


} ?>
<?php
function p1()
{
    ?>

    <div class="col-md-12">
        <div class="heading-line-bottom">
            <h4 class="heading-title mt-0">About</h4>
            <div class="post-text">
                <p class="text-justify">Placement Cell involves both training and recruitment. From the very beginning,
                    the college administration was keen to train the students in the complex job searching activity that
                    involved a good academic record along with placement skills. An exclusive placement officer along
                    with department-wise staff coordinators takes care of the training and placement activities.</p>
                <p class="text-justify">Soft skill development is a nuanced sensitive field and only trainers who
                    possess adequate skills could sharpen the skills of the students. Frequent soft skills sessions were
                    conducted by summoning the experts from various spheres. Sessions pertaining to communication skills
                    development, CV development and interview skills are conducted at regular intervals. Guest lectures
                    are often arranged to enhance the knowledge of placement and its importance.</p>
                <p class="text-justify">The Placement Cell is maintaining a strong database of major recruiters and
                    building cordial relationships with them. It has up-to-date information regarding the current trends
                    prevailing in the industry; it provides timely information to the students regarding industry
                    expectations and their recruitment procedures</p>
                <p class="text-justify">The college library has an exclusive chamber for competitive exam preparations,
                    and the placement cell notifies the recruitments in the notice board. A counselling centre functions
                    selectively to admonish the students about the career path they are supposed to choose. A part-time
                    career expert conducts the proceedings.
                </p>
                <p class="text-justify">Every year, the placement cell of the institution arranges for the so called
                    “Placement Mela“, wherein private players plunge into our academic space to pick up the student of
                    their choice for a reasonable pay. The choice is based on the students’ performance and interest.
                    The institution encourages the students to swim against the tide as it would strengthen their
                    resolve and make them craft a career of their choice as the future unfolds</p>
                <p class="text-justify">Thus, Placement Cell is an evolving department and the institution is investing
                    a lot of time and money to vest it with a modern outlook.
                </p>
                <p class="text-justify">Our students of 2020 batch got placed in the following companies
                </p>
            </div>
        </div>

    </div>
<?php }

?>

<?php
function p2()
{
    ?>
    <div class="content-block">
        <div class="section-full content-inner" style="padding-top: 0px" ;>
            <div class="container">


                <h2 class="m-t1 m-b10 fw6">Recruiters</h2>
                <div class="row" align="center">
                    <?php
                    for ($x = 1; $x <= 22; $x++) {

                        ?>
                        <div class="col-md-7 col-lg-3 m-t10 m-b5">
                            <img style="width: 157px; height: 67px;" class="shadow border img-fluid image"
                                 src="/images/client-logo/<?php echo $x; ?>.jpg">
                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>


<?php }

?>
