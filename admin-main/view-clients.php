<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

<?php session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");

// print_r('test');exit;

//print $myDate = date("Y-m-d", strtotime( date( "Y-m-d", strtotime( date("Y-m-d") ) ) . "-1 month" ) );

/*$curr = time();
    $date = strtotime("may 30, 2013");
    $diff = $date - $curr;
    $diff_dd = floor($diff / 86400);
    $diff %= 86400;
    $diff_hh = floor($diff / 3600);
    $diff %= 3600;
    $diff_mm = floor($diff / 60);
    
    echo "Current date: " . date("Y-m-d", $curr) . "\n";
    echo "Expiry date: " . date("Y-m-d", $date) . "\n";
    echo sprintf(
	
        "%d days",
        $diff_dd,
        $diff_hh,
        $diff_mm,
        $diff_ss
    );*/

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
			<?php
	}


	

$targetpage = "view-clients.php";	

$limit = 10;

$query = "SELECT COUNT(*) as num from registration where registration_status = 1";
$total_pages = mysql_fetch_array(mysql_query($query));
$total_pages = $total_pages[num];

$stages = 3;
$page = mysql_escape_string($_GET['page']);
if($page){
$start = ($page - 1) * $limit;
}else{
$start = 0;
}

// Get page data
$sql = "select * from registration where registration_status = 1 order by registration_date DESC LIMIT $start, $limit";
$result = mysql_query($sql);

if ($page == 0){$page = 1;}
$prev = $page - 1;
$next = $page + 1;
$lastpage = ceil($total_pages/$limit);
$LastPagem1 = $lastpage - 1;

$paginate = '';
if($lastpage > 1)
{

$paginate .= "<div class='paginate'>";
// Previous
if ($page > 1){
$paginate.= "<a href='$targetpage?page=$prev'>previous</a>";
}else{
$paginate.= "<span class='disabled'>previous</span>"; }

// Pages
if ($lastpage < 7 + ($stages * 2)) // Not enough pages to breaking it up
{
for ($counter = 1; $counter <= $lastpage; $counter++)
{
if ($counter == $page){
$paginate.= "<span class='current'>$counter</span>";
}else{
$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}
}
}
elseif($lastpage > 5 + ($stages * 2)) // Enough pages to hide a few?
{
// Beginning only hide later pages
if($page < 1 + ($stages * 2))
{
for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
{
if ($counter == $page){
$paginate.= "<span class='current'>$counter</span>";
}else{
$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}
}
$paginate.= "...";
$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";
}
// Middle hide some front and some back
elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
{
$paginate.= "<a href='$targetpage?page=1'>1</a>";
$paginate.= "<a href='$targetpage?page=2'>2</a>";
$paginate.= "...";
for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
{
if ($counter == $page){
$paginate.= "<span class='current'>$counter</span>";
}else{
$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}
}
$paginate.= "...";
$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";
}
// End only hide early pages
else
{
$paginate.= "<a href='$targetpage?page=1'>1</a>";
$paginate.= "<a href='$targetpage?page=2'>2</a>";
$paginate.= "...";
for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
{
if ($counter == $page){
$paginate.= "<span class='current'>$counter</span>";
}else{
$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}
}
}
}

// Next
if ($page < $counter - 1){
$paginate.= "<a href='$targetpage?page=$next'>next</a>";
}else{
$paginate.= "<span class='disabled'>next</span>";
}

$paginate.= "</div>";

}
// echo $total_pages.' Results';
?>

<?php

$noLogo = $start;
while($rowLogo = mysql_fetch_array($result))
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
	
$selectQualification = "select registration_highest_qualification from registration group by registration_highest_qualification";
$result_quali = mysql_query($selectQualification) or die(mysql_error());
				$qualifdata =  array();
				while($quali = mysql_fetch_assoc($result_quali))
                {
					$qualifdata[] = $quali['registration_highest_qualification'];
                } 
				/*print '<pre>';
				print_r($qualifdata);*/


// print_r($result);exit;


    include("html/admin/header.html");
	include("html/admin/view-clients.html");
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