<?php
$selectSmallBanner = "select * from news where status = '1' order by news_date DESC LIMIT 0, 3";
$fireSmallBanner = mysql_query($selectSmallBanner) or die(mysql_error());
while($valSmall = mysql_fetch_array($fireSmallBanner))
	{
		$dateANDtime = date('j F, Y', $valSmall['news_date']);
		$StyleValue .= '<tr>
						 	<td class="news-list"><strong><a href="news_detail.php?nid='.$valSmall['news_id'].'">'.$dateANDtime.'</a></strong><br />
								'.substr(strip_tags(ucfirst($valSmall['news_desc'])),0,67).'...<br /></td>
						</tr>';
	}
	
//////////////////FRENCH	
	
	
$selectSmallBanner1 = "select * from fnews where status = '1' order by news_date DESC LIMIT 0, 3";
$fireSmallBanner1 = mysql_query($selectSmallBanner1) or die(mysql_error());
while($valSmall1 = mysql_fetch_array($fireSmallBanner1))
	{
		$dateANDtime1 = date('j F, Y', $valSmall1['news_date']);
		$StyleValue1 .= '<tr>
						 	<td class="news-list"><strong><a href="news_detail.php?nid='.$valSmall1['news_id'].'">'.$dateANDtime1.'</a></strong><br />
								'.substr(strip_tags(ucfirst($valSmall1['news_desc'])),0,67).'...<br /></td>
						</tr>';
	}	


?>