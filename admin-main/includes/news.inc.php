<?php
$select_news = "select * from news where status = 1 order by date DESC";
$qry_news = mysql_query($select_news) or die(mysql_error());
$newscontent = "";
$newscontent1  = "";
$eventcontent = "";
$eventcontent1 = "";
$newscontent .='<table cellpadding="2" cellspacing="2" border="0">';
while($res1 = mysql_fetch_array($qry_news))
{
		$newscontent .='<tr>
									<td class="redtext1">'.$res1['headline'].'</td>
								</tr>
								<tr>
									<td class="text1" style="padding-left:25px;">'.substr(strip_tags(ucfirst($res1['content'])),0,150).'</td>
								</tr>
								<tr>
									<td class="text1" align="right"><a href="news.php" ><font color="#CC0000">read more.. </font></a></td>
								</tr>';
}
$newscontent .='</table>';

////////////////////////////////////////////TESTIMONIAL/////////////////////////////////////////
$select_news1 = "select * from testimonial where status = 1 order by date DESC";
$qry_news1 = mysql_query($select_news1) or die(mysql_error());
$newscontent1 .='<table cellpadding="2" cellspacing="2" border="0">';
while($res11 = mysql_fetch_array($qry_news1))
{
		$newscontent1 .='<tr>
									<td class="text1">'.substr(strip_tags(ucfirst($res11['content'])),0,150).'</td>
								</tr>
								<tr>
									<td class="text1" align="right"><a href="testimonial.php" ><font color="#CC0000">'.$res11['user'].', '.$res11['designation'].'</font></a></td>
								</tr>';
}
$newscontent1 .='</table>';

////////////////////////////////////////////////////////////////////////////////////////////////
?>