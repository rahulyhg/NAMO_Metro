<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<? //session_start();
include("includes/global.inc.php");
//chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

if($_REQUEST['status'] == 1)
	{
		//registration_deactivation_msg
		 $msg=$_POST["reg_deact_msg"];
		 $msg=mysql_real_escape_string($msg);
		 $id = $_POST["registration_id"];
		 // print_r($id);exit;
		$query="update registration set registration_status = 2, registration_deactivation_msg = '$msg' where registration_id =".$id;
		// print_r($query);exit;
		mysql_query($query);
	}
else
	{
		$query="update registration set registration_status = 1  where registration_id =".$_REQUEST['lid'];
		mysql_query($query);	
	}

if($_REQUEST['act'] == "del")
	{
	
		$query="delete from registration where registration_id =".$_REQUEST['lid'];
		$row = mysql_query($query) or die(mysql_error());
			?>
			<script language="javascript" type="text/javascript">
			document.location.href="view-clients.php?msg=delete";
			</script>
			<?
	}

$query = "SELECT COUNT(*) as num from clients where client_type = '".$_REQUEST['type']."'";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];

/* Setup vars for query. */
	$targetpage = "view-clients.php"; 	//your file name  (the name of this file)
	$limit =500; 								//how many items to show per page
	$pageList = $_GET['page'];
	if($pageList) 
		$start = ($pageList - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0


if($_REQUEST['TxtName'] != "First name")
	{
		if($_REQUEST['TxLast'] != "Last name")
			{
					
				$selectCatImage = "select * from registration where 
																registration_id = '".$_REQUEST['TxtId']."' OR
																(registration_fname = '".$_REQUEST['TxtName']."' AND
																registration_lname = '".$_REQUEST['TxLast']."') OR
																registration_email = '".$_REQUEST['TxtEmail']."'";
			}
		else
			{

				$selectCatImage = "select * from registration where 
														registration_id = '".$_REQUEST['TxtId']."' OR
														registration_fname = '".$_REQUEST['TxtName']."' OR
														registration_lname = '".$_REQUEST['TxLast']."' OR
														registration_email = '".$_REQUEST['TxtEmail']."'";
			}
	}
else
	{

	$selectCatImage = "select * from registration where 
														registration_id = '".$_REQUEST['TxtId']."' OR
														registration_fname = '".$_REQUEST['TxtName']."' OR
														registration_lname = '".$_REQUEST['TxLast']."' OR
														registration_email = '".$_REQUEST['TxtEmail']."'";
	}


$fireCatImage = mysql_query($selectCatImage) or die(mysql_error());


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
			$pagination.= "<a href=\"$targetpage?page=$prev&type=".$_REQUEST['type']."\">&lt;&lt; previous</a>";
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
					$pagination.= "<a href=\"$targetpage?page=$counter&type=".$_REQUEST['type']."\">$counter</a>";					
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
						$pagination.= "<a href=\"$targetpage?page=$counter&type=".$_REQUEST['type']."\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1&type=".$_REQUEST['type']."\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage&type=".$_REQUEST['type']."\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $pageList && $pageList > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1&type=".$_REQUEST['type']."\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2&type=".$_REQUEST['type']."\">2</a>";
				$pagination.= "...";
				for ($counter = $pageList - $adjacents; $counter <= $pageList + $adjacents; $counter++)
				{
					if ($counter == $pageList)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter&type=".$_REQUEST['type']."\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1&type=".$_REQUEST['type']."\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage&type=".$_REQUEST['type']."\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1&type=".$_REQUEST['type']."\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2&type=".$_REQUEST['type']."\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $pageList)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter&type=".$_REQUEST['type']."\">$counter</a>";					
				}
			}
		}

		
		//next button
		if ($pageList < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next&type=".$_REQUEST['type']."\">next &gt;&gt;</a>";
		else
			$pagination.= "<span class=\"disabled\">next &gt;&gt;</span>";
		$pagination.= "</div>\n";		
	}

?>

<?php

$noLogo = 0;
while($rowLogo = mysql_fetch_array($fireCatImage))
	{
	?>
	<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reason of Deactivation</h4>
      </div>
      <div class="modal-body">
      <?php 
        	$id=$rowLogo['registration_id'];
        	   // print_r($id);exit;
        
        echo "<form role='form' action='view-clients.php?lid=$id&status=1' method='POST'>
        
        <label class='control-label'>Message</label>
            <input type='text'  name='reg_deact_msg' placeholder=' Enter reason of deactivation' required='' class='form-control' value=''>
            <input type='hidden'  name='registration_id' placeholder=' ' required='' class='form-control' value='$id'>
            <div class='row'>
            <div class='col-sm-3 col-sm-offset-3'>
            <button type='submit' class='btn btn-primary' name='edit' style='width:100px; text-align:center'>Update</button>
            </div>
             <div class='col-sm-3 '>
        <button type='button' class='btn btn-danger' data-dismiss='modal' style='width:100px; text-align:center'>Close</button></div>
        </div>
        </form>";?>
      </div>
      <div class="modal-footer">

      </div>
    </div>

  </div>
</div>
	<?php
	
		if($rowLogo['registration_status'] == 1)
			{
				$statusLogo = '<a data-toggle="modal" class="myModal123" data-id="'.$rowLogo['registration_id'].'" ><img src="images/icon-active.jpg" alt="Deactive" width="20" height="20" /> </a>';
			}
		else
			{
				$statusLogo = '<a href="view-clients.php?lid='.$rowLogo['registration_id'].'&status=0"><img src="images/icon-deactive.jpg" alt="Deactive" width="20" height="20" /> </a>';
			}

		$dateANDtime = date('F j, Y', $rowLogo['registration_startdate']);
		$noLogo++;
		$qunew = str_replace(" ", "_", $rowLogo['registration_highest_qualification']);  
		$dataLogo .= '
				<tr class="allqual '.$qunew.'">
					<td align="center">'.$noLogo.'</td>
					<td><a href="full-profile.php?rid='.$rowLogo['registration_id'].'" target="_blank">'.ucfirst($rowLogo['registration_fname']).'</a></td>
					<td>'.ucfirst($rowLogo['registration_lname']).'</td>
					<td>SPV'.$rowLogo['registration_id'].'</td>
					<td>'.$rowLogo['registration_password'].'</td>
					<td>'.$rowLogo['registration_email'].'</td>
					
					<td><img src="../register/'.$rowLogo['registration_photo'].'" width="50" height="50" alt="photo" /></td>
					<td>'.$dateANDtime.'</td>
					<td align="center">
						'.$statusLogo.' 
						<a href="edit-profile.php?lid='.$rowLogo['registration_id'].'" target="_blank" class="headerLink"><img src="images/icon-edit.jpg" alt="Edit" width="20" height="20" /></a>
						<a href="view-clients.php?act=del&lid='.$rowLogo['registration_id'].'" class="headerLink" onclick="return ask_ques();"><img src="images/icon-delete.jpg" alt="Delete" width="20" height="20" /></a>
					</td>
					
				</tr>
		';
	}

    include("html/admin/header.html");
	include("html/admin/search.html");
	include("html/admin/footer.html");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function(){
    
    $(".myModal123").click(function(){
    	var id = $(this).attr("data-id");
    	$("input[name='registration_id']").val(id);
    	$('#myModal1').modal('show');
    });
  });
 </script>