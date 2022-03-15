    <!DOCTYPE html>
    <html lang="en">
    <head>
    <?php
    session_start();
    include("../inc/conn.php");
    include("../inc/connect.php");
    $con=locdb();
    $conc=campsdb();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ?>
    <?php
    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);
    if(isset($_GET['staff']))
    $staff_id=base64_decode($_GET['staff'])/101995;
    else
    {
    header('Location: ../');
    die();
    }
    if(isset($_GET['dep']))
    $dep_id=base64_decode($_GET['dep'])/101995;
    else
    {
    header('Location: /');
    die();
    }
    ?>
    <?php include ("../inc/metatags.php"); ?>
    <?php include ("../inc/headerscript.php"); ?>
    <link rel="stylesheet" id="" href="/css/staff.css" type="text/css" media="all">
    <?php
    $qry_category="SELECT dept_code,LOWER(dept_name)dept_name,sc_id,org_id,webdisp FROM master_department WHERE STATUS=1 AND webdisp=1 AND department_id='". $dep_id . "';";
    $qry_category = mysqli_query($con, $qry_category);
    while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
    {
    ?>
    <!-- PAGE TITLE HERE -->
    <title>Faculty Members | <?php echo $rows_mastercategory['dept_name'] ?></title>
    <?php
    }
    ?>
    </head>
    <body id="bg">
    <div class="page-wraper">
    <div id="loading-area">
    <div class="bag"></div>
    </div>
    <?php include ("../inc/header.php"); ?>
    <!-- Content -->
    <div class="page-content bg-white">
    <?php
    {
    ?>
    <div class="bnr-inr bg-pt" style="background-image:url(../images/banner/department/<?php echo $dep_id?>.jpg);">
    <?php
    }
    ?>
    <div class="container">
    <div class="bnr-inr-entry text-center">
    <h1 class="text-capitalize"><span>Faculty Member</span></h1>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
    <ul class="list-inline">
    <li class="text-capitalize"></li>
    </ul>
    </div>
    <!-- Breadcrumb row END -->
    </div>
    </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <section>
    <div class="content-block">
    <div class="section-full content-inner bg-img-fix" style="background-image:url(/images/background/bg7.jpg);">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <?php
    $incval=0;
    $qry_category="SELECT CONCAT(sm.legend,' ', sm.first_name) AS staffname,sm.institute_email_id email,sp.photo FROM staff_photo sp INNER JOIN staff_master sm ON sp.staff_id=sm.staff_id WHERE sm.staff_id=${staff_id}";
    $qry_category = mysqli_query($conc, $qry_category);
    if(mysqli_num_rows($qry_category)>0)
    {
    while ($row = mysqli_fetch_assoc($qry_category))
    {
    $staffname          =   $row['staffname'];
    $photo        =   $row['photo'];
    ?>
    <div class="row m-b30 staff-details">
    <div class="col-md-3" align="center">
    <img class="shadow-lg   bg-white rounded" src="data:image/jpeg;base64,<?php echo base64_encode($row['photo']);?>"
    alt="staff" style="width: 153px;height: auto;" class="img-fluid">
    </div>
    <div class="col-lg-7 col-md-12 col-sm-6 ">
    <div class="m-t15">
    <h3 class="text-capitalize"></h3>
    <h4 style="color:#024f58"><?php echo $row['staffname'] ?></h4>
    <a href="mailto:<?php echo $row['email'] ?>"><h5 style="color: rgba(0,0,0,0.7); text-transform: lowercase;"><?php echo $row['email'] ?></h5></a>
    </div>
    <div class="divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
<!--    <div class="row">-->
<!--    <div class="col-lg-4 col-md-4 col-sm-4 m-b10">-->
<!--    <h5>Research Profiles</h5>-->
<!--    </div>-->
<!--    </div>-->
    </div>
    </div>
    <?php
    }
    }
    ?>
    </div>
    <div class="divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
    <div class="row">
    <div class="wrapper col-md-12 col-sm-6 ">
    <div class="innerpageinfocontainer">
    <div class="faculty-profile-listingarea">
    <div class="maincontainer">
    <ul class="faculty-listing">
    <li class="right animation-element slide-right">
    <div class="bx-img">
    <h4>Academic Credentials</h4>
    </div>
    <br>
    <hr>
    <div class="key">
    <table id="academic" class="ui celled table display table table-striped table-bordered" width="100%" data-page-length="70" data-order="[[ 0, &quot;asc&quot; ]]">
    <thead>
    <tr>
    <th style="color:#172eb5 ; text-align: center; font-size: 15px;" scope="col">Degree</th>
    <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Specialization</th>
    <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Institute</th>
    <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">University</th>
    <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Year of Passing</th>
    </tr>
    </thead>
    <?php
    $incval=0;
    $qrype_category="SELECT sq.sq_id AS id,sdt.deg_type,sq.degree,sq.spec,sq.institute,sq.university_id,sq.mark,sq.yop,mu.`university_name` FROM staff_qualification sq JOIN camps.`staff_degree_type` sdt ON sdt.`degree_id`=sq.`degree_id` AND sq.`degree_id` NOT IN (23,24) JOIN camps.`master_university` mu ON mu.`university_id`=sq.`university_id`  WHERE sq.status>0 AND sq.staff_id=${staff_id}";
    $qrype_category = mysqli_query($conc, $qrype_category);
    if(mysqli_num_rows($qrype_category)>0)
    {
    while ($rows_mastercategory = mysqli_fetch_assoc($qrype_category))
    {
    ?>
    <tbody>
    <tr>
    <td><?php echo $rows_mastercategory['deg_type'] ?></td>
    <td><?php echo $rows_mastercategory['spec'] ?></td>
    <td><?php echo $rows_mastercategory['institute'] ?></td>
    <td><?php echo $rows_mastercategory['university_name'] ?></td>
    <td><?php echo $rows_mastercategory['yop'] ?></td>
    </tr>
    </tbody>
    <?php
    }
    }
    ?>
    </table>
    </div>
    </li>


    <li class="right animation-element slide-right">
    <div class="bx-img">
    <h4>Professional Experience</h4>
    </div>
    <br>
    <hr>
    <div class="key">
    <table id="academic" class="ui celled table display table table-striped table-bordered" width="100%" data-page-length="70" data-order="[[ 0, &quot;asc&quot; ]]">
    <thead>
    <tr>
    <th style="color:#172eb5 ; text-align: center; font-size: 15px;" scope="col">Experience Type</th>
    <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Organization</th>
    <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Designation</th>
    <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Date of Joining</th>
    <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">To</th>
    <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Total Experience</th>
    </tr>
    </thead>
    <?php
    $incval=0;
    $qrype_category="SELECT se.se_id AS id,se.staff_id,se.experience_type,se.name_of_organization,se.designation,se.dept,DATE_FORMAT(se.from_date,'%d-%m-%Y')from_date,DATE_FORMAT(se.to_date,'%d-%m-%Y')to_date,CONCAT(FLOOR(TIMESTAMPDIFF(MONTH,from_date, IFNULL(to_date,NOW()))/12),' Year(s) ',MOD(TIMESTAMPDIFF(MONTH,from_date, IFNULL(to_date,NOW())),12) ,' Month(s)') yrs,IFNULL(CONCAT('<a target=\"_blank\" href=\"https://drive.google.com/open?id=',dm.doc_key,'\">',dm.dp_id,'</a>'),'') dp FROM staff_experience se LEFT JOIN (documentation.dp_data_map ddm INNER JOIN documentation.dp_master dm ON dm.dp_id=ddm.dp_id AND dm.status>0 AND ddm.dtdm_id=2) ON ddm.table_id=se.se_id AND ddm.status>0  WHERE se.status>0 AND se.staff_id='${staff_id}' AND se.from_date IS NOT NULL AND se.to_date IS NOT NULL  UNION SELECT '','','','','','',' Previous','Total',CONCAT(FLOOR(SUM(mon)/12),' Year(s) ',MOD(SUM(mon),12) ,' Month(s)') yrs,'' FROM  (SELECT se.se_id AS id,se.staff_id,se.experience_type,se.name_of_organization,se.designation,se.dept,DATE_FORMAT(se.from_date,'%d-%m-%Y')from_date,DATE_FORMAT(se.to_date,'%d-%m-%Y')to_date,TIMESTAMPDIFF(MONTH,from_date, IFNULL(to_date,NOW()))mon FROM staff_experience se WHERE se.status>0 AND se.staff_id='${staff_id}' AND se.from_date IS NOT NULL AND se.to_date IS NOT NULL )a HAVING yrs IS NOT NULL  UNION SELECT '',sp.staff_id,mo.institute_type,mo.org_name,md.desigination,'',DATE_FORMAT(sp.from_date,'%d-%m-%Y'),DATE_FORMAT(IFNULL(sp.to_date,DATE(NOW())),'%d-%m-%Y') to_date,CONCAT(FLOOR(TIMESTAMPDIFF(MONTH,from_date, IFNULL(to_date,NOW()))/12),' Year(s) ',MOD(TIMESTAMPDIFF(MONTH,from_date, IFNULL(to_date,NOW())),12) ,' Month(s)') yrs,IFNULL(CONCAT('<a target=\"_blank\" href=\"https://drive.google.com/open?id=',dm.doc_key,'\">',dm.dp_id,'</a>'),'') dp FROM camps.staff_promotion sp INNER JOIN camps.master_desigination md ON sp.md_id=md.md_id INNER JOIN camps.master_organization mo ON mo.status>0 LEFT JOIN (documentation.dp_data_map ddm INNER JOIN documentation.dp_master dm ON dm.dp_id=ddm.dp_id AND dm.status>0 AND ddm.dtdm_id=3) ON ddm.table_id=sp.sp_id AND ddm.status>0 WHERE sp.staff_id='${staff_id}' AND sp.status>0 UNION SELECT '','','','','','','Current ','Total',yrs,'' FROM  (SELECT CONCAT('',TIMESTAMPDIFF(YEAR,sm.doj,IFNULL(sm.dor,NOW())),' Year(s) ',MOD(TIMESTAMPDIFF(MONTH,sm.doj,IFNULL(sm.dor,NOW())),12),' Month(s) ')yrs FROM camps.staff_master sm WHERE sm.staff_id='${staff_id}' )a HAVING yrs IS NOT NULL "; 
    $qrype_category = mysqli_query($conc, $qrype_category);
    if(mysqli_num_rows($qrype_category)>0)
    {
    while ($rows_mastercategory = mysqli_fetch_assoc($qrype_category))
    {
    ?>
    <tbody>
    <tr>
    <td><?php echo $rows_mastercategory['experience_type'] ?></td>
    <td><?php echo $rows_mastercategory['name_of_organization'] ?></td>
    <td><?php echo $rows_mastercategory['designation'] ?></td>
    <td><?php echo $rows_mastercategory['from_date'] ?></td>
    <td><?php echo $rows_mastercategory['to_date'] ?></td>
    <td><?php echo $rows_mastercategory['yrs'] ?></td>
    </tr>
    </tbody>
    <?php
    }
    }
    ?>
    </table>
    </div>
    </li>

        <?php
        $i=1;
        $incval=0;
        $qrype_category="SELECT rm.rm_id,GROUP_CONCAT(DISTINCT TRIM(CONCAT( IFNULL(sm.first_name,''),' ',IFNULL(sm.middle_name,''),' ', IFNULL(sm.last_name,''))), '(',rhm1.holder_id,')' ,TRIM(CONCAT( IFNULL(ssm.first_name,''),' ',IFNULL(ssm.middle_name,''),' ', IFNULL(ssm.last_name,''))) ORDER BY rhm.holder_type,rhm1.holder_id) holder, LOWER(GROUP_CONCAT(DISTINCTROW IF(av.eam_id=2,text_value,'') SEPARATOR ''))eam0, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=3,text_value,'') SEPARATOR '') eam1, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=4,text_value,'') SEPARATOR '') eam2, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=5,text_value,'') SEPARATOR '') eam3, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=6,int_value,'') SEPARATOR '') eam4, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=7,int_value,'') SEPARATOR '') eam5, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=8,text_value,'') SEPARATOR '') eam6, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=9,int_value,'') SEPARATOR '') eam7, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=10,int_value,'') SEPARATOR '') eam8, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=11,text_value,'') SEPARATOR '') eam9, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=12,text_value,'') SEPARATOR '') eam10, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=13,text_value,'') SEPARATOR '') eam11, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=14,text_value,'') SEPARATOR '') eam12, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=15,text_value,'') SEPARATOR '') eam13 FROM documentation.record_master rm INNER JOIN documentation.record_holder_mapping rhm ON rm.rm_id=rhm.rm_id AND rm.status>0  AND rhm.status>0 AND rm.em_id='1' AND CASE WHEN rhm.holder_type='Staff' THEN rhm.holder_id='${staff_id}'  WHEN rhm.holder_type='Staff' THEN CONCAT('student',rhm.holder_id)='${staff_id}' WHEN rhm.holder_type='department' THEN rhm.holder_id='1' END INNER JOIN documentation.record_holder_mapping rhm1 ON rm.rm_id=rhm1.rm_id AND rhm1.status>0 INNER JOIN documentation.attribute_values_1  av ON av.rm_id=rm.rm_id AND av.status>0 LEFT JOIN camps.staff_master sm ON sm.staff_id=rhm1.holder_id AND rhm1.holder_type='staff' LEFT JOIN camps.student_master ssm ON ssm.student_id=rhm1.holder_id AND rhm1.holder_type='student' GROUP BY rm.rm_id";
        $qrype_category = mysqli_query($conc, $qrype_category);
        if(mysqli_num_rows($qrype_category)>0)
        {

        ?>
    <li class="right animation-element slide-right">
    <div class="bx-img">
    <h4>Journal Publications</h4>
    </div>
    <br>
    <hr>
         <div class="faculty-bx-text firsr-bx style-bx2">

                        <div class="scrolling-details">
<?php
while ($rows_mastercategory = mysqli_fetch_assoc($qrype_category))
        { ?>
      <div class="key">
        <p style="line-height: 24px;margin-bottom:7px;margin-top:7px "><?php echo $i++ ?>.&nbsp;<?php echo $rows_mastercategory['eam1'] ?>&nbsp;"<b><?php echo $rows_mastercategory['eam0'] ?></b>",&nbsp;<?php echo $rows_mastercategory['eam9'] ?> on
        <?php echo $rows_mastercategory['eam2'] ?>&nbsp;<?php echo $rows_mastercategory['eam3'] ?>,&nbsp;<?php echo $rows_mastercategory['eam11'] ?></p>
    </div>
    <?php
    }
    ?>
    </div>
    </div>
    </li>
        <?php } ?>


        <?php
        $i=1;
        $incval=0;
        $qrype_category="SELECT rm.rm_id,GROUP_CONCAT(DISTINCT TRIM(CONCAT( IFNULL(sm.first_name,''),' ',IFNULL(sm.middle_name,''),' ', IFNULL(sm.last_name,''))), '(',rhm1.holder_id,')' ,TRIM(CONCAT( IFNULL(ssm.first_name,''),' ',IFNULL(ssm.middle_name,''),' ', IFNULL(ssm.last_name,''))) ORDER BY rhm.holder_type,rhm1.holder_id) holder, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=26,text_value,'') SEPARATOR '') eam0, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=27,text_value,'') SEPARATOR '') eam1, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=33,text_value,'') SEPARATOR '') eam2, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=30,text_value,'') SEPARATOR '') eam3, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=29,text_value,'') SEPARATOR '') eam4, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=34,text_value,'') SEPARATOR '') eam5, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=35,text_value,'') SEPARATOR '') eam6, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=31,date_format(datetime_value,'%d-%m-%Y'),'') SEPARATOR '') eam7, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=32,date_format(datetime_value,'%d-%m-%Y'),'') SEPARATOR '') eam8, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=28,text_value,'') SEPARATOR '') eam9, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=36,text_value,'') SEPARATOR '') eam10, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=38,text_value,'') SEPARATOR '') eam11, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=37,text_value,'') SEPARATOR '') eam12 FROM documentation.record_master rm INNER JOIN documentation.record_holder_mapping rhm ON rm.rm_id=rhm.rm_id AND rm.status>0  AND rhm.status>0 AND rm.em_id='3' AND CASE WHEN rhm.holder_type='Staff' THEN rhm.holder_id='${staff_id}'  WHEN rhm.holder_type='Staff' THEN CONCAT('student',rhm.holder_id)='${staff_id}' WHEN rhm.holder_type='department' THEN rhm.holder_id='1' END INNER JOIN documentation.record_holder_mapping rhm1 ON rm.rm_id=rhm1.rm_id AND rhm1.status>0 INNER JOIN documentation.attribute_values_1  av ON av.rm_id=rm.rm_id AND av.status>0 LEFT JOIN camps.staff_master sm ON sm.staff_id=rhm1.holder_id AND rhm1.holder_type='staff' LEFT JOIN camps.student_master ssm ON ssm.student_id=rhm1.holder_id AND rhm1.holder_type='student' GROUP BY rm.rm_id";
        $qrype_category = mysqli_query($conc, $qrype_category);
        if(mysqli_num_rows($qrype_category)>0)
        {

        ?>    <li class="right animation-element slide-right">
    <div class="bx-img">
    <h4>Conference Presentations</h4>
    </div>
    <br>
    <hr>
     <div class="faculty-bx-text firsr-bx style-bx2">

                        <div class="scrolling-details">
<?php while ($rows_mastercategory = mysqli_fetch_assoc($qrype_category))
        {
    ?>
    <div class="key">
        <p style="line-height: 24px;margin-bottom: -13px;"><?php echo $i++ ?>.&nbsp;<?php echo $rows_mastercategory['eam1'] ?>,&nbsp;"<b><?php echo $rows_mastercategory['eam0'] ?></b>",&nbsp;<?php echo $rows_mastercategory['eam2'] ?>,
        <?php echo $rows_mastercategory['eam4'] ?>&nbsp;<?php echo $rows_mastercategory['eam3'] ?><hr style="margin-bottom: 9px;">

    </div>
    <?php
    }

    ?>
    </div>
    </div>
    </li>
        <?php
        }

        ?>

        <?php
        $i=1;
        $incval=0;
        $qry_category="SELECT rm.rm_id,GROUP_CONCAT(DISTINCT TRIM(CONCAT( IFNULL(sm.first_name,''),' ',IFNULL(sm.middle_name,''),' ', IFNULL(sm.last_name,''))), '(',rhm1.holder_id,')' ,TRIM(CONCAT( IFNULL(ssm.first_name,''),' ',IFNULL(ssm.middle_name,''),' ', IFNULL(ssm.last_name,''))) ORDER BY rhm.holder_type,rhm1.holder_id) holder, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=88,text_value,'') SEPARATOR '') eam0, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=89,text_value,'') SEPARATOR '') eam1, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=87,DATE_FORMAT(datetime_value,'%d-%m-%Y'),'') SEPARATOR '') eam2, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=90,DATE_FORMAT(datetime_value,'%d-%m-%Y'),'') SEPARATOR '') eam3, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=91,DATE_FORMAT(datetime_value,'%d-%m-%Y'),'') SEPARATOR '') eam4, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=92,text_value,'') SEPARATOR '') eam5, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=93,text_value,'') SEPARATOR '') eam6, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=94,text_value,'') SEPARATOR '') eam7, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=95,text_value,'') SEPARATOR '') eam8, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=96,text_value,'') SEPARATOR '') eam9, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=86,text_value,'') SEPARATOR '') eam10, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=97,text_value,'') SEPARATOR '') eam11, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=98,text_value,'') SEPARATOR '') eam12 FROM documentation.record_master rm INNER JOIN documentation.record_holder_mapping rhm ON rm.rm_id=rhm.rm_id AND rm.status>0  AND rhm.status>0 AND rm.em_id='8' AND CASE WHEN rhm.holder_type='Staff' THEN rhm.holder_id='${staff_id}'  WHEN rhm.holder_type='Staff' THEN CONCAT('student',rhm.holder_id)='${staff_id}' WHEN rhm.holder_type='department' THEN rhm.holder_id='1' END INNER JOIN documentation.record_holder_mapping rhm1 ON rm.rm_id=rhm1.rm_id AND rhm1.status>0 INNER JOIN documentation.attribute_values_1  av ON av.rm_id=rm.rm_id AND av.status>0 LEFT JOIN camps.staff_master sm ON sm.staff_id=rhm1.holder_id AND rhm1.holder_type='staff' LEFT JOIN camps.student_master ssm ON ssm.student_id=rhm1.holder_id AND rhm1.holder_type='student' GROUP BY rm.rm_id";

        $result = mysqli_query($conc, $qry_category);
        if(mysqli_num_rows($result)>0)
        {
            ?>
            <li class="right animation-element slide-right last-class">
            <div class="bx-img bx-img-offset">

                <h4>Ph.D Research Guidance</h4>
            </div>
            <br>
            <hr>
            <div class="key">
                <table id="academic" class="ui celled table display table table-striped table-bordered" width="100%" data-page-length="70" data-order="[[ 0, &quot;asc&quot; ]]">

                    <thead>
                    <tr>
                        <th style="color:#172eb5 ; text-align: center; font-size: 15px; width: 10%;" scope="col">S No.</th>
                        <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Scholar Name</th>
                        <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Register Number</th>
                        <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Date of Reg.</th>
                        <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Status</th>
                    </tr>
                    </thead>
                    <?php

                    while ($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                        <tbody>
                        <tr>
                            <td class="text-center"><?php echo $i++ ?></td>
                            <td><?php echo $row['eam0'] ?></td>
                            <td class="text-center"><?php echo $row['eam1'] ?></td>
                            <td class="text-center"><?php echo $row['eam2'] ?></td>
                            <td class="text-center"><?php echo $row['eam5'] ?></td>

                        </tr>
                        </tbody>

                        <?php
                    }?>
                </table>
            </div>
            </li><?php
        }
        ?>

        <?php
        $i=1;
        $incval=0;
        $qry_category="SELECT rm.rm_id,GROUP_CONCAT(DISTINCT TRIM(CONCAT( IFNULL(sm.first_name,''),' ',IFNULL(sm.middle_name,''),' ', IFNULL(sm.last_name,''))), 
'(',rhm1.holder_id,')' ,TRIM(CONCAT( IFNULL(ssm.first_name,''),' ',IFNULL(ssm.middle_name,''),' ', IFNULL(ssm.last_name,''))) 
ORDER BY rhm.holder_type,rhm1.holder_id) holder, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=165,text_value,'') SEPARATOR '') eam0, 
GROUP_CONCAT(DISTINCTROW IF(av.eam_id=166,text_value,'') SEPARATOR '') eam1, GROUP_CONCAT(DISTINCTROW IF(av.eam_id=167,text_value,'') 
SEPARATOR '') eam2 FROM documentation.record_master rm INNER JOIN documentation.record_holder_mapping rhm ON rm.rm_id=rhm.rm_id 
AND rm.status>0  AND rhm.status>0 AND rm.em_id='16' AND CASE WHEN rhm.holder_type='Staff' THEN rhm.holder_id='${staff_id}'  
WHEN rhm.holder_type='Staff' THEN CONCAT('student',rhm.holder_id)='${staff_id}' WHEN rhm.holder_type='department' THEN rhm.holder_id='1' 
END INNER JOIN documentation.record_holder_mapping rhm1 ON rm.rm_id=rhm1.rm_id AND rhm1.status>0 INNER JOIN documentation.attribute_values_1  av 
ON av.rm_id=rm.rm_id AND av.status>0 LEFT JOIN camps.staff_master sm ON sm.staff_id=rhm1.holder_id AND rhm1.holder_type='staff' 
LEFT JOIN camps.student_master ssm ON ssm.student_id=rhm1.holder_id AND rhm1.holder_type='student' GROUP BY rm.rm_id";

        $result = mysqli_query($conc, $qry_category);
        if(mysqli_num_rows($result)>0)
        {
            ?>
            <li class="right animation-element slide-right last-class">
            <div class="bx-img bx-img-offset">

                <h4>Areas of Expertise</h4>
            </div>
            <br>
            <hr>
            <div class="key">
                <table id="academic" class="ui celled table display table table-striped table-bordered" width="100%" data-page-length="70" data-order="[[ 0, &quot;asc&quot; ]]">

                    <thead>
                    <tr>
                        <th style="color:#172eb5 ; text-align: center; font-size: 15px; width: 10%;" scope="col">S No.</th>

                        <th style="color:#172eb5 ;text-align: center; font-size: 15px;" scope="col">Subject Area</th>

                    </tr>
                    </thead>
                    <?php

                    while ($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                        <tbody>
                        <tr>
                            <td class="text-center"><?php echo $i++ ?></td>
<!--                            <td>--><?php //echo $row['holder'] ?><!--</td>-->
                            <td class="text-center"><?php echo $row['eam0'] ?></td>


                        </tr>
                        </tbody>

                        <?php
                    }?>
                </table>
            </div>
            </li><?php
        }
        ?>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="section-full content-inner bg-white">
    </div>
    </div>
    </section>
    <!-- Content END-->
    <?php include ("../inc/footer.php");
    mysqli_close($con);
    mysqli_close($conc);
    ?>
    <?php include ("../inc/footerscript.php"); ?>
    <style type="text/css" media="screen">
    @media (max-width: 768px) {
    .staff-details{
    text-align: center;
    }
    }
    </style>
    </div>
    </body>
    </html>