<?php

include("includes/global.inc.php");



$file = 'sheet';
$csv_output = array();


$sql = "SHOW COLUMNS FROM registration WHERE Field IN ('registration_email' ) ";
		$result = mysql_query( $sql);

$i = 0;
			if (mysql_num_rows($result) > 0)
			{
				  $tmp = array();
					while ($row = mysql_fetch_assoc($result))
					{
						$tmp[] = $row['Field'];
						$i++;
					}
			}

$csv_output[] = '"' . implode('","', $tmp) . '"';

$sql = "SELECT registration_email	 FROM registration order by registration_lname ASC";
		$values = mysql_query( $sql);
$k = 1;		

			while($rowr = mysql_fetch_row($values))
			{
					$tmp = array();
					for ($j=0;$j<$i;$j++)
					{
						
								$tmp[] = $rowr[$j];
							
					}
				$csv_output[] = '"' . implode('","', $tmp) . '"';
				$k++;
			}


$filename = $file."_".date("Y-m-d_H-i",time());
header("Content-type: application/vnd.ms-excel");
header("Content-disposition: csv" . date("Y-m-d") . ".csv");
// header( "Content-disposition: filename=".$filename.".csv");
header("Content-disposition: attachment; filename=".$filename.".csv");
print implode("\n",$csv_output) . "\n";

exit;


?>