<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_REQUEST['status'] == 1)
	{
		$query="update faq_que set que_status = 0  where que_id =".$_REQUEST['lid']; 
		mysql_query($query);
	}
else
	{
		$query="update faq_que set que_status = 1  where que_id =".$_REQUEST['lid'];
		mysql_query($query);	
	}

if($_REQUEST['act'] == "del")
	{
	
		$query="delete from faq_que where que_id =".$_REQUEST['lid'];
		$row = mysql_query($query) or die(mysql_error());
		redirect("view-faq.php?msg=delete&mid=".$_REQUEST['mid']."");

	}

$query = "SELECT COUNT(*) as num from faq_que";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];

/* Setup vars for query. */
	$targetpage = "view-faq.php"; 	//your file name  (the name of this file)
	$limit =10; 								//how many items to show per page
	$pageList = $_GET['page'];
	if($pageList) 
		$start = ($pageList - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
		
$sql = "select * from faq_que  order by que_order ASC LIMIT $start, $limit";
$result = mysql_query($sql) or die(mysql_error());



	/* Setup page vars for display. */
	if ($pageList == 0) $pageList = 1;					//if no page var is given, default to 1.
	$prev = $pageList - 1;							//previous page is page - 1
	$next = $pageList + 1;							//next page is page + 1
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
		if ($pageList > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">&lt;&lt; previous</a>";
		else
			$pagination.= "<span class=\"disabled\">&lt;&lt; previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $pageList)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($pageList < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $pageList)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $pageList && $pageList > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $pageList - $adjacents; $counter <= $pageList + $adjacents; $counter++)
				{
					if ($counter == $pageList)
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
					if ($counter == $pageList)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		//next button
		if ($pageList < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">next &gt;&gt;</a>";
		else
			$pagination.= "<span class=\"disabled\">next &gt;&gt;</span>";
		$pagination.= "</div>\n";		
	}



$noLogo = 0;
while($rowLogo = mysql_fetch_array($result))
	{
	
		if($rowLogo['que_status'] == 1)
			{
				$statusLogo = '<a href="view-faq.php?lid='.$rowLogo['que_id'].'&status=1"><img src="images/icon-active.jpg" alt="Deactive" width="20" height="20" /> </a>';
			}
		else
			{
				$statusLogo = '<a href="view-faq.php?lid='.$rowLogo['que_id'].'&status=0"><img src="images/icon-deactive.jpg" alt="Deactive" width="20" height="20" /> </a>';
			}

		$dateANDtime = date('F j, Y', $rowLogo['que_date']);
		$noLogo++;
		$dataLogo .= '
				<tr>
					<td align="center">'.$noLogo.'</td>
					<td><a href="view-faq-data.php?sid='.$rowLogo['que_id'].'">'.ucfirst($rowLogo['que_name']).'</a></td>
					<td>'.$rowLogo['que_order'].'</td>
					<td>'.$dateANDtime.'</td>
					<td align="center">
						'.$statusLogo.'
						<a href="edit-faq.php?lid='.$rowLogo['que_id'].'"><img src="images/icon-edit.jpg" alt="Edit" width="20" height="20" /> </a> 
						<a href="view-faq.php?act=del&lid='.$rowLogo['que_id'].'" class="headerLink" onclick="return ask_ques();"><img src="images/icon-delete.jpg" alt="Delete" width="20" height="20" /></a>
					</td>
				</tr>
		';
	}
	

	
if($_REQUEST['msg']=='delete')
	{
		$msg="Question Deleted successfully";
	}
if($_REQUEST['msg']=='add')
	{
		$msg="Question Added successfully";
	}
if($_REQUEST['msg']=='edit')
	{
		$msg="Question Edited successfully";
	}


    include("html/admin/header.html");
	include("html/admin/view-faq.html");
	include("html/admin/footer.html");
?>
