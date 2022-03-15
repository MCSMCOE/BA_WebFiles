<?php include ("../inc/conn.php");
		$con=locdb();
		
if(isset($_POST["limit"], $_POST["start"]))
{

 $query = "SELECT sno,a_year,a_month,a_date,a_details FROM `achievements` WHERE STATUS='1'  ORDER BY a_year DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]." ";
 $result = mysqli_query($con, $query);
 while($row = mysqli_fetch_array($result))
 {
  echo '

   <div class="timeline__box">
            <div class="timeline__date">
            <span class="timeline__month"> '.$row["a_year"].'<br>'.$row["a_month"].'</span>
            </div>
            <div class="timeline__post">
              <div class="timeline__content">
                <p align="justify">'.$row["a_details"].'</p>
              </div>
            </div>
          </div>
  ';
 }
}

			mysqli_close($con);
			
?>