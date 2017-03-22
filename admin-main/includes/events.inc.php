<?php
$select_events = "select * from events where status = 1 order by date DESC";
$qry_events = mysql_query($select_events) or die(mysql_error());
$eventcontent .='<table cellpadding="2" cellspacing="2" border="0">';
while($res1 = mysql_fetch_array($qry_events))
{
		$eventcontent .='<tr>
									<td class="redtext1">'.$res1['event'].'</td>
								</tr>
								<tr>
									<td class="text1" style="padding-left:25px;">'.substr(strip_tags(ucfirst($res1['content'])),0,150).'</td>
								</tr>
								<tr>
									<td class="text1" align="right"><a href="events.php" ><font color="#CC0000">read more.. </font></a></td>
								</tr>';
								
								
}
$eventcontent .='</table>';

///////////////////////////////////////////////BLOG//////////////////////////
$select_events1 = "select * from manage_blog where status = 1 ";
$qry_events1 = mysql_query($select_events1) or die(mysql_error());
$eventcontent1 .='<table cellpadding="2" cellspacing="2" border="0">';
while($res11 = mysql_fetch_array($qry_events1))
{
		$eventcontent1 .='<tr>
									<td class="redtext1"><a href="blog.php" class="redtext1" >'.$res11['subject'].'</a></td>
								</tr>
								<tr>
									<td class="text1" style="padding-left:25px;">'.substr(strip_tags(ucfirst($res11['content'])),0,150).'</td>
								</tr>
								<tr>
									<td class="text1" align="right"><a href="blog.php" ><font color="#CC0000">read more.. </font></a></td>
								</tr>';
								
								
}
$eventcontent1 .='</table>';
/////////////////////////////////////////////////////////////////////////////
?>