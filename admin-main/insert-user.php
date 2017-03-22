<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");
if($_POST)
	{
				$insert1 = "insert into user set
												refname 	=	'".$_REQUEST['TxtRefName']."',
												status 		=	0,
												statusmail	=	0,
												password	=	'".$_REQUEST['TxtPassword']."',
												email		=	'".$_REQUEST['TxtEmail']."',
												contactno	=	'".$_REQUEST['TxtContNo']."',
												joindate	=	'".time()."'";
					$set = mysql_query($insert1);									
					redirect("view-user.php?msg=add");	
	}
    include("html/admin/header.html");
	include("html/admin/insert-user.html");
	include("html/admin/footer.html");
?>
