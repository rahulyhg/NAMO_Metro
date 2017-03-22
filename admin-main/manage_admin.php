<? session_start();
include("includes/global.inc.php");

if(!isset($_SESSION['BHOOMI']['ADMIN']))
	{
		redirect("index.php");
	}
 

if($_POST)
	{
		//print_r($_REQUEST); exit;
		$cmp="select * from admin";
		$sql = mysql_query($cmp) or die(mysql_error());
		while($row = mysql_fetch_array($sql))
			{
				$name=$row['username'];
				$pass=$row['password'];
			}
		$oldpass=$_REQUEST['oldpass']; 
		
		if(!($pass==$oldpass))
			{
				?>		
					<script type="text/javascript" language="javascript">
					document.location.href="manage_admin.php?flag=error";
					</script>
				<?
			}
		else
			{
				$upQueey="update admin set username ='".$_REQUEST['adname']."',
				name	=	'".$_REQUEST['name']."',
				email	=	'".$_REQUEST['newmail']."',
				password ='".$_REQUEST['password1']."'";
				mysql_query($upQueey);                                      
				?>
					<script type="text/javascript" language="javascript">
                    document.location.href="adminHome.php";
                    </script>
				<?			
			}
	}
	
	$selQuesr="select * from  admin";
	$selCommand=mysql_query($selQuesr);
	$row=mysql_fetch_array($selCommand);
    include("html/admin/header.html");
	include("html/admin/manage_admin.html");
	include("html/admin/footer.html");
?>
