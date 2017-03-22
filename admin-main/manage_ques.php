<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
include("fckeditor.php");

 if($_POST)
	 {		 
		$insert="insert into  question set
							que_statement  = '".$_REQUEST['FCKeditor1']."', 
							que_date	=	'".time()."',
							que_status	=	0,
							que_uid		=	'".$_REQUEST['TxtUser']."'";
		mysql_query($insert);
		redirect("view-ques.php");
	 }

$strsql="select * from  user  where status = 1";
$strcommand=mysql_query($strsql);
while($strrow = mysql_fetch_array($strcommand))
	{
		$DataUser .= '<option value="'.$strrow['user_id'].'">'.$strrow['refname'].'</option>';
	}
	


$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('FCKeditor1');
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= addslashes($strrow['pages_desc']) ;
 	  
    include("html/admin/header.html");
	include("html/admin/manage_ques.html");
	include("html/admin/footer.html");
?>
