<?php 
$connc=codb();
?>


<link rel="stylesheet" type="text/css" href="/css/plugins.css">
<link rel="stylesheet" type="text/css" href="/css/main-style.css">
<link class="skin" rel="stylesheet" type="text/css" href="/css/skin.css">
<link rel="stylesheet" type="text/css" href="/css/templete.css">
<link rel="stylesheet" type="text/css" href="/plugins/revolution/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="/plugins/revolution/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="/plugins/revolution/revolution/css/navigation.css">
<link rel="stylesheet" type="text/css" href="/css/gallery/cards-gallery.css">
<link rel="stylesheet" type="text/css" href="/css/gallery/compact-gallery.css">
<link rel="stylesheet" type="text/css" href="/css/gallery/grid-gallery.css">
<link rel="stylesheet" type="text/css" href="/css/gallery/thumbnail-gallery.css">
<link rel="stylesheet" type="text/css" href="/css/gallery/baguetteBox.min.css">
<link rel="stylesheet" type="text/css" href="/css/popup.css">
<link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="/css/scroll.css">
<link rel="stylesheet" type="text/css" href="/plugins/datatables/css/dataTables.semanticui.min.css">
<link rel="stylesheet" type="text/css" href="/plugins/datatables/css/semantic.min.css">

<style>
    .owl-nav{
        display:none
    }
    .tparrows{
        display:none
    }
    .news-item{
        padding:4px 4px;
        margin:0;
        border-bottom:none
    }
    .list-events{
        margin-top:0;
        margin-bottom:0
    }
    .list-events li+li{
        margin-bottom:0
    }
    .list-events-title a{
        color:#432773
    }
    .list-events .list-events-title-date{
       margin-top: 0;
    margin-right: 15px;
    border-radius: 83%;
    width: 60px;
    height: 60px;
    margin-bottom: 0;
    padding-top: 5px;
    color: #fff;
    font-size: 16px;
    font-weight: 700;
    background: linear-gradient( -0deg, #f1a736, #f1a736 49%, #00bcd4 51% ); 
    }
    .list-events-title-date-day{
        padding:0 10px 2px;
        margin-top: -5px;
        font-size:22px;
        display:block
    }
    .list-events-title-date-month{
        padding:3px 11px;
        font-size:16px;
        margin-top: -3px;
    }
    .dataTables_info{
        display:none
    }  
    .dataTables_length{
        display: none;
    }
</style>
<style type="text/css" media="screen">
    .dataTables_length {
        display: none;
    }

    .dataTables_info {
        display: none;
    }

</style>
<div id="fb-root"></div>
<?php
$localIP            =   getHostByName(getHostName());
$current_date       =   date("Y-m-d");
$ipAddress = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
    $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
}
$qry_category      =    "select * from counter_ipaddress where ipaddressval = '$localIP' && server_ipAddress = '$ipAddress'";
$qry_category      =    mysqli_query($connc, $qry_category);
if(mysqli_num_rows($qry_category)==0)
{
    $insert_query     =   "INSERT INTO counter_ipaddress (ipaddressval,lastvisitedval,server_ipAddress) values ('$localIP','$current_date','$ipAddress')";
    $insert_query     =   mysqli_query($connc, $insert_query);
    $counter_query      =   "UPDATE counter SET counter = counter + 1";
    $counter_query      =   mysqli_query($connc, $counter_query);
}
$qry_category   =   "select * from counter_ipaddress where ipaddressval = '$localIP' AND server_ipAddress = '$ipAddress' AND lastvisitedval != '$current_date'";
$qry_category   =   mysqli_query($connc, $qry_category);
if(mysqli_num_rows($qry_category)>0)
{
    $update_query   =   "UPDATE counter_ipaddress SET lastvisitedval  = '$current_date' where ipaddressval = '$localIP' && server_ipAddress = '$ipAddress' ";
    $update_query   =   mysqli_query($connc, $update_query);
    $counter_query  =   "UPDATE counter SET counter = counter + 1";
    $counter_query  =   mysqli_query($connc, $counter_query);
}?>
