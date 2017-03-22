<?php
include("includes/global.inc.php");
function returnUrl($page)
	{
		?>
		<script language="javascript" type="text/javascript">
			document.location.href="<?=$page?>";
		</script>
		<?
	}
if($_POST)
	{
			
			
			$insertPartner = "update partner_preference set
														partner_agefrom		=	'".$_REQUEST['Partnerppage_from']."',
														partner_ageto		=	'".$_REQUEST['Partnerppage_to']."',
														partner_heightfrom		=	'".$_REQUEST['PartnerFromheight']."',
														partner_heightto		=	'".$_REQUEST['PartnerToheight']."',
														partner_maritalstatus		=	'".$_REQUEST['Partnermaritalstatus']."',
														partner_religion		=	'".$_REQUEST['Partnerreligion']."',
														partner_caste		=	'".$_REQUEST['PartnerTxtCaste']."',
														partner_intercaste		=	'".$_REQUEST['PartnerIntercaste']."',
														partner_manglik		=	'".$_REQUEST['PartnerManglik']."',
														partner_diet		=	'".$_REQUEST['PartnerDiet']."',
														partner_smoke		=	'".$_REQUEST['PartnerSmoke']."',
														partner_drink		=	'".$_REQUEST['PartnerDrink']."',
														partner_complexion		=	'".$_REQUEST['TxtPartnerComplexion']."',
														partner_bodytype		=	'".$_REQUEST['TxtPartnerBodyType']."',
														partner_educationlevel		=	'".$_REQUEST['TxtPartnerEducationLevel']."',
														partner_employedlevel		=	'".$_REQUEST['Partneremployedin']."',
														partner_occupation		=	'".$_REQUEST['PartnerOccupation']."',
														partner_monthlyincome		=	'".$_REQUEST['PartnerIncome']."',
														partner_subgroup	=	'".$_REQUEST['PartnerSub']."',
														partner_city		=	'".$_REQUEST['PartnerCity']."',
														partner_state	=	'".$_REQUEST['PartnerState']."',
														partner_country		=	'".$_REQUEST['PartnerCountry']."',
														partner_aboutpartner		=	'".$_REQUEST['PartnerAboutMySelf']."' 
														where partner_register_id = '".$_SESSION['SAIPRASAD']['VIVAH']['registration_id']."'";
														
			 $set =mysql_query($insertPartner) or die(mysql_error());																	
			
			
			redirect("my-account.php");
			
	}

$selectPartner = "select * from partner_preference where partner_register_id = '".$_SESSION['SAIPRASAD']['VIVAH']['registration_id']."'";
$firePartner = mysql_query($selectPartner) or die(mysql_error());
$rowPartnerData = mysql_fetch_array($firePartner);

	
include("html/header.html");
include("html/edit-partner-pef.html");
include("html/footer.html");
?>