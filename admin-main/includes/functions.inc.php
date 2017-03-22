<?php
function redirect($page)
{
?>
<script language="javascript" type="text/javascript">
document.location.href="<?=$page?>";
</script>
<?php
}

function chkAdminSession($num)
{
	if($num==1)
	{
		if(isset($_SESSION[BHOOMI][ADMIN]))
			{
			redirect("adminHome.php");
			}
	}	
	if($num==2)
	{
	
		if(!isset($_SESSION['BHOOMI']['ADMIN']))
			{
			redirect("index.php");
			}
	}
}

function createThumbnail($source_path, $destination_path, $length, $mime_type, $length_as_width=true) 
		{
			
			//***** Create Source Image Resource
			// Initialize
			$src_img_res = null;
			// Create Resource Based Upon MIME Type
			
			switch($mime_type) 
			{
				case "image/jpeg" :
					$src_img_res = imagecreatefromjpeg($source_path);
					break;
				case "image/jpg" :
					$src_img_res = imagecreatefromjpeg($source_path);
					break;
				case "image/pjpeg" :
					$src_img_res = imagecreatefromjpeg($source_path);
					break;
				case "image/gif" :
					$src_img_res = imagecreatefromgif($source_path);
					break;
				case "image/x-png" :
					$src_img_res = imagecreatefrompng($source_path);
					break;
			}
		
			// Exit If No Source Image Resource Was Created
			if ($src_img_res === false) { return false; }
			if ($src_img_res === null) { return false; }

			//***** Obtain Original Image Dimensions
			// Original Width
			$origw = imagesx($src_img_res);
			// Original Height
			$origh = imagesy($src_img_res);

			//***** Resize Image
			// Fixed Width
			if ($length_as_width) 
			{
				//***** Get Height
				// Get Width To New Width Ratio
				$diff = $origw / $length;
				// Calculate New Height
				$new_h = $origh / $diff;

				//***** Get Width
				$new_w = $length;

				//***** Create Destination Image Resource
				// Determine Whether Transparent Background Is Required
				switch($mime_type) 
				{
					case "image/jpeg" :
						$dest_img_res = imagecreatetruecolor($length, $new_h);
						break;
					case "image/pjpeg" :
						$dest_img_res = imagecreatetruecolor($length, $new_h);
						break;
					case "image/gif" :
						$dest_img_res = imagecreate($length, $new_h);
						$bg = imageColorAllocate($dest_img_res, 0, 0, 0);
						$bg = imageColorTransparent($dest_img_res, $bg);
						break;
					case "image/x-png" :
						$dest_img_res = imagecreate($length, $new_h);
						$bg = imageColorAllocate($dest_img_res, 0, 0, 0);
						$bg = imageColorTransparent($dest_img_res, $bg);
						break;
				}
			}
			// Fixed Height
			else 
			{
				//***** Get Height
				$new_h = $length;

				//***** Get Width
				// Get Height To New Height Ratio
				$diff = $origh / $length;
				// Calculate New Width
				$new_w = $origw / $diff;

				//***** Create Destination Image Resource
				// Determine Whether Transparent Background Is Required
				switch($mime_type) 
				{
					case "image/jpeg" :
						$dest_img_res = imagecreatetruecolor($new_w, $length);
						break;
					case "image/pjpeg" :
						$dest_img_res = imagecreatetruecolor($new_w, $length);
						break;
					case "image/gif" :
						$dest_img_res = imagecreate($new_w, $length);
						$bg = imageColorAllocate($dest_img_res, 0, 0, 0);
						$bg = imageColorTransparent($dest_img_res, $bg);
						break;
					case "image/x-png" :
						$dest_img_res = imagecreate($new_w, $length);
						$bg = imageColorAllocate($dest_img_res, 0, 0, 0);
						$bg = imageColorTransparent($dest_img_res, $bg);
						break;
				}
			}
			imagecopyresampled($dest_img_res, $src_img_res, 0, 0, 0, 0, $new_w, $new_h, imagesx($src_img_res), imagesy($src_img_res));
			imagejpeg($dest_img_res, $destination_path);

		}


function getUniqFileName($fileName,$dir) {
    $fileName = str_replace(" ","_",$fileName);
    $replaceArr = array(" " => "_", "'" => "-", "\\" => "","&" => "-","?" => "_");
    $fileName = strtr($fileName,$replaceArr);
    $nr = 1;

    $pos = strrpos($fileName, '.');
    $file = substr($fileName, 0, $pos);
    $ext = substr($fileName, $pos+1);

    while (file_exists($dir.$fileName)) {
        $fileName = $file .'~' . $nr++ . '.' . $ext;
    }

    return $fileName;
}
function fncHeight()
{
for($num=20;$num <=180;$num=$num+10)
{
$sequerityOptions .="<option  value=".$num.">".$num."</option>";
} 
return $sequerityOptions;
}


function fncWidth()
{
for($num=20;$num <=240;$num=$num+10)
{
$sequerityOptions .="<option  value=".$num.">".$num."</option>";
} 
return $sequerityOptions;
}

function gotoPage($page)
{
?>
<script>
document.location.href="<?=$page?>";
</script>
<?php
}
function showHeader($pagename,$strrow) {
include("../html/admin/header.html");
include("../html/admin/$pagename.html");
include("../html/admin/footer.html");

}



function showRow()
{
$strsql="select * from  payment";
$strcommand=mysql_query($strsql);
return mysql_fetch_array($strcommand);
}
function updatePeice($post,$request)
{
if($post)
 {	
 		$insert="update  payment set 
							pay_fees = '".$request['fees']."',
 							pay_logo = '".$request['logo']."',
 							pay_pricelist = '".$request['pricelist']."',
							pay_pricelistImage = '".$request['pricelistImage']."',
							pay_payperclick = '".$request['ppc']."' where pay_id = '1'";
 
 mysql_query($insert);
 redirect("general.php?acting=edit");
 }

}

function showError($request) {
if($request == "edit")
return  "General Price Edited Successfully";	

}

?>