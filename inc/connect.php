<?php

    function campsdb(){  
    $cmhost = '10.40.1.5';
    $port='33063';
    $cmuser = 'dbread';
    $cmpass = 'dbread@kasc';
    $cmdb='camps';
    $conc = mysqli_connect($cmhost, $cmuser, $cmpass, $cmdb,$port) or die ("could not connect to mysql");      
    if(! $conc ) {
        die('Could not connect:from camps ' . mysqli_error($conc));
    }
return $conc;
}
 
?>
