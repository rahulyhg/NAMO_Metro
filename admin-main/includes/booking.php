<?php

$select_rtyp = "select * from manage_roomtype where status = 1";
$qry_rtype = mysql_query($select_rtyp)or die(mysql_error());
$roomTypes = "";
while($rows = mysql_fetch_array($qry_rtype))
{
	$roomTypes .= '<option value ="'.$rows['roomtypeId'].'">'.$rows['roomType'].'</option>';
}
if($_POST)
{ 
	$_SESSION['CHECKIN'] = $_REQUEST['datein'];
	$_SESSION['CHECKOUT'] = $_REQUEST['dateout'];
	$_SESSION['ROOMTYPE'] = $_REQUEST['roomtype'];
	//$curr_date=date('Y-m-d');
	//$NewDate=Date('Y-m-d', strtotime("-2 days")); 
	
	/////////////////////////////////////////////dates between start and end date//////////////////////////////////////////	
	$start = $_REQUEST['datein'];
	$end = $_REQUEST['dateout'];
	
	$init_date = strtotime($start);
	$dst_date = strtotime($end);
	
	$offset = $dst_date-$init_date;
	$dates = floor($offset/60/60/24) + 1;
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	if( strtotime($_REQUEST['datein']) < strtotime(date('d-m-Y')))
	{
		$message = 'Please select Correct date';
	}
	else
	{	
		$bookrooms = '000';
		$select_roomT = "select * from room_booking where roomtype = '".$_REQUEST['roomtype']."'";
		$qry_roomT = mysql_query($select_roomT) or die(mysql_error());
		$num_rooms = mysql_affected_rows();
		while($result = mysql_fetch_array($qry_roomT))
		{
			$bookeddates= explode(',',$result['dates']);
		
			for ($i = 0; $i < $dates; $i++)
			{
				$newdate = date("d-m-Y", mktime(12,0,0,date("m", strtotime($start)),
				(date("d", strtotime($start)) + $i), date("Y", strtotime($start))));
				
				if(in_array($newdate,$bookeddates))
				{
					$bookrooms =$result['roomNumber'].','.$bookrooms;
				}
			}
		}
		 
		$slct_manageRooms = "select * from manage_room where roomNumber NOT IN($bookrooms) and roomtype = '".$_REQUEST['roomtype']."'";
		$qry_mngrooms = mysql_query($slct_manageRooms)or die(mysql_error());
		$affected = mysql_affected_rows();
		$_SESSION['ROOMSAVAIL'] = $affected;
		header("location:bookingstep2.php");
	}
}					
			
?>