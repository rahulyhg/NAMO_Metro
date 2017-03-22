<?
$select_rtyp = "select * from manage_roomtype where status = 1";
$qry_rtype = mysql_query($select_rtyp)or die(mysql_error());
while($rows = mysql_fetch_array($qry_rtype))
{
	$roomTypes .= '<option value ="'.$rows[roomtypeId].'">'.$rows[roomType].'</option>';
}

?>