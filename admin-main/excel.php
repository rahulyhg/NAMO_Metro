<?php

include("includes/global.inc.php");



$file = 'sheet';
$csv_output = array();



$sql = "SHOW COLUMNS FROM registration WHERE Field IN ('registration_email','registration_id','registration_fname','registration_lname','registration_contact_address','registration_mobile1','registration_mobile2','registration_std','registration_telephone','registration_date') ";
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

$sql = "SELECT registration_id,registration_email,registration_fname,registration_lname,registration_contact_address,registration_std,registration_telephone,registration_mobile1,registration_mobile2,registration_date FROM registration where registration_status=0 order by registration_date ASC";
		$values = mysql_query( $sql);
$k = 1;		
		//$dateANDtime = date('F j, Y', $values['registration_date']);
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