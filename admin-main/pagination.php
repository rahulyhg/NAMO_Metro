<style>
div.pagination {
	padding: 3px;
	margin: 3px;
}

div.pagination a {
	padding: 2px 5px 2px 5px;
	margin: 2px;
	border: 1px solid #AAAADD;
	
	text-decoration: none; /* no underline */
	color: #000099;
}
div.pagination a:hover, div.pagination a:active {
	border: 1px solid #000099;

	color: #000;
}
div.pagination span.current {
	padding: 2px 5px 2px 5px;
	margin: 2px;
		border: 1px solid #000099;
		
		font-weight: bold;
		background-color: #000099;
		color: #FFF;
	}
	div.pagination span.disabled {
		padding: 2px 5px 2px 5px;
		margin: 2px;
		border: 1px solid #EEE;
	
		color: #DDD;
	}
</style>
<?php
	/*
		Place code to connect to your DB here.
	*/
	//include('config.php');	// include your code to connect to DB.
	mysql_connect("localhost", "root", "console") or die(mysql_error());
	mysql_select_db("digit5") or die(mysql_error());

	$tbl_name="manage_photo";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 1;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num from article_main JOIN se_users ON article_main.article_userId = se_users.user_id";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "pagination.php"; 	//your file name  (the name of this file)
	$limit = 8; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "select * from article_main JOIN se_users ON article_main.article_userId = se_users.user_id order by article_noviews desc LIMIT $start, $limit";
	$result = mysql_query($sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">&lt;&lt; previous</a>";
		else
			$pagination.= "<span class=\"disabled\">&lt;&lt; previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">next &gt;&gt;</a>";
		else
			$pagination.= "<span class=\"disabled\">next &gt;&gt;</span>";
		$pagination.= "</div>\n";		
	}
?>

	<?php
		
		if(mysql_affected_rows() == 0)
			{
				$ShowPopular = "There is no discussion";
			}
		else
			{
			while($rowPopular = mysql_fetch_array($result))
					{
					
		$SelectComment = "select * from article_comment where 	article_comment_articleid 	= '".$rowPopular['article_id']."'";
		$fireComment = mysql_query($SelectComment) or die(mysql_error());	
		$TotalComment = mysql_affected_rows();	
		
					
					
		$UserPhoto = str_replace(".jpg", "_thumb.jpg" ,$rowPopular['user_photo']);
		if ($rowPopular['user_photo'] != "")
			{
				$UserImage1 ='<img src="./uploads_user/1000/'.$rowPopular['user_id'].'/'.$UserPhoto.'" alt="" class="photo" width="50"/>';
			}
		
		else
			{
				$UserImage1 = '<img src="./images/nophoto50_sleep.gif" alt="" class="photo" width="50"/>';
			}
		echo 	'<tr>
								<td width="" rowspan="3" valign="top" style="padding-top:7px;"><a href="profile.php?user='.$rowPopular['user_username'].'">'.$UserImage1.'</a></td>
								<td width=""  style="padding-left:5px; padding-top:7px;"><a href="forum_topic.php?article_id='.$rowPopular['article_id'].'"><b>'.$rowPopular['article_name'].'</b></a></td>
							</tr>
							<tr>
								<td style="padding-left:5px;">'.substr(strip_tags(ucfirst($rowPopular['article_desc'])),0,150).'.....</td>
							</tr>
							<tr>
								<td style="padding-left:5px;">
								<div  class="TextSmall"> 
								<span  style="color:#333333;"><img alt="Categories-posts" src="images/categories-posts.png"> '.$TotalComment.' comment </span>&nbsp;
								<img alt="Categories-bubble" src="images/categories-bubble.png"> '.$rowPopular['article_date'].'  at  '.$rowPopular['time'].'   &nbsp;                      
								by <a href="profile.php?user='.$rowPopular['user_username'].'">'.$rowPopular['user_fname'] ." ". $rowPopular['user_lname'] .'</a> 
								</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="DividerLine"  ><img src="images/spacer.gif"></td>
							</tr>
							';
					}
			}		

	
					

	?>

<?=$pagination?>
	