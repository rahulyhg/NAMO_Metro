<? session_start();
include("includes/global.inc.php");
chkAdminSession(2);
ini_set("memory_limit","320000000000000000000000000000000000000");


$sql = "select registration_email from registration order by registration_lname ASC";
$result = mysql_query($sql) or die(mysql_error());

$noLogo = 0;
while($rowLogo = mysql_fetch_array($result))
	{

		$dataLogo .= '
				<tr>
					<td align="left">'.$rowLogo['registration_email'].'  ,</td>
					
				</tr>
		';
	}

    include("html/admin/header.html");
	include("html/admin/view-clients1.html");
	include("html/admin/footer.html");
?>
