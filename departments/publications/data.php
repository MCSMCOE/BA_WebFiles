<?php
				$id;
				include("../../inc/connect1.php");
				include("../../inc/conn.php");
				error_reporting(E_ALL);
				ini_set('display_errors', 0);
			
				if(isset($_GET['dep_id']))
						$id=base64_decode($_GET['dep_id'])/101995;
				else
				{
				$id=($_GET['dep_id']);
				}
				
?>






<?php
$sno=1;
									$incval=0;
									$qry_category= "SELECT MIN(YEAR(spv.doj)) yoj,MAX(IF(av.am_id='16',av.txt_val,'') ) Title,MAX(IF(av.am_id='17',av.txt_val,'') ) Author,MAX(IF(av.am_id='25',alv.list_value,'') ) Mon,MAX(IF(av.am_id='24',alv.list_value,'') ) yr,MAX(IF(av.am_id='31',av.txt_val,'') ) issue,  MAX(IF(av.am_id='72',av.txt_val,'') ) Volume,MAX(IF(av.am_id='65',av.int_val,'') ) fpage,MAX(IF(av.am_id='66',av.int_val,'') ) tpage,MAX(IF(av.am_id='28',av.txt_val,'') ) JournalName,MAX(IF(av.am_id='125',alv.list_value,'') ) display FROM documentation.record_master rm INNER JOIN (documentation.record_ss_mapping rsm INNER JOIN camps.staff_personal_copy spv ON spv.dep_id='".mysqli_real_escape_string($conc, $id)."' AND FIND_IN_SET(spv.staff_id,rsm.ss_id)) ON rm.rm_id=rsm.rm_id  AND rm.status>0 AND rsm.status>0 AND rm.im_id='8' LEFT JOIN documentation.attr_values av  ON  av.status>0 AND av.rm_id=rm.rm_id  LEFT JOIN documentation.attribute_list_values alv ON alv.am_id=av.am_id AND alv.status>0 AND alv.alv_id=av.int_val GROUP BY rm.rm_id HAVING yoj<=yr AND display='Yes'  ORDER BY yr DESC";
									//echo "$qry_category";
									$qry_category = mysqli_query($conc, $qry_category);
									if(mysqli_num_rows($qry_category)>0)
									{
										$data = array();
									while ($rows_mastercategory = mysqli_fetch_assoc($qry_category))
									{

										array_push($data, $row);
?>





<?php
									}
									echo json_encode($data);
exit();
									}
?>