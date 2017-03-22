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
	/*print '<pre>';	
	print_r($_REQUEST);
	exit;*/
		$temp_name1=$_FILES['TxtPhoto'][tmp_name];
		$file_name11=$_FILES['TxtPhoto'][name];
		
		$extension=end(explode(".", $file_name11));

		$prod = time();
		if($_FILES['TxtPhoto'][name]!=''){
			$newfilename = $prod .".".$extension;
		} else{
			$newfilename = 'defaultUser.gif';
		}
		
		$file_path1="../register/".$newfilename;
		
		move_uploaded_file($temp_name1,$file_path1);

		$insertUser = "insert into registration set
										registration_email	=	'".$_REQUEST['TxtEmailId']."',
										registration_password	=	'".$_REQUEST['TxtPassword']."',
										registration_fname	=	'".$_REQUEST['TxtFirstName']."',
										registration_lname	=	'".$_REQUEST['TxtLastName']."',
										registration_gender	=	'".$_REQUEST['gender']."',
										registration_mother_tongue	=	'".$_REQUEST['mothertongue']."',
										registration_spoken_language	=	'".$_REQUEST['spokenlanguages']."',
										registration_religion	=	'".$_REQUEST['religion']."',
										registration_caste	=	'".$_REQUEST['TxtCaste']."',
										registration_sub_caste	=	'".$_REQUEST['TxtSubCaste']."',
										registration_profile_createdby	=	'".$_REQUEST['profilecreatedby']."',
										registration_maritial_status	=	'".$_REQUEST['maritalstatus']."',
										registration_age	=	'".$_REQUEST['TxtAge']."',
										registration_children	=	'".$_REQUEST['TxtChildren']."',
										registration_childrenstatus	=	'".$_REQUEST['TxtChildLivstatus']."',
													
													
										registration_about_myself	=	'".$_REQUEST['TxtAboutMySelf']."',
										registration_height	=	'".$_REQUEST['height']."',
										registration_weight	=	'".$_REQUEST['TxtWeight']."',
										registration_blood_group	=	'".$_REQUEST['TxtBloodGroup']."',
										registration_complexion	=	'".$_REQUEST['TxtComplexion']."',
										registration_body_type		=	'".$_REQUEST['TxtBodyType']."',												
										registration_spectacles	=	'".$_REQUEST['TxtSpectacles']."',
										registration_birth_time	=	'".$_REQUEST['TxtBirthTime']."',
										registration_birth_date	=	'".$_REQUEST['TxtBirthDate']."',
										registration_birth_place	=	'".$_REQUEST['TxtBirthPlace']."',
										registration_country_birth	=	'".$_REQUEST['countryofbirth']."',
										registration_rashi	=	'".$_REQUEST['rashi']."',
										registration_nakshatra	=	'".$_REQUEST['nakshatra']."',
									    registration_charan	=	'".$_REQUEST['TxtCharan']."',
										registration_gana	=	'".$_REQUEST['gana']."',
										registration_nadi	=	'".$_REQUEST['nadi']."',
										registration_manglik	=	'".$_REQUEST['TxtManglik']."',
										registration_horoscope	=	'".$_REQUEST['TxtHoroscope']."',
										registration_contact_address	=	'".$_REQUEST['TxtContactAddress']."',
										registration_city	=	'".$_REQUEST['city']."',
										registration_state	=	'".$_REQUEST['state']."',
									    registration_country	=	'".$_REQUEST['TxtCountry']."',
										registration_citizenship	=	'".$_REQUEST['TxtCitizenship']."',
										registration_telephone	=	'".$_REQUEST['TxtTelephone']."',
										registration_std	=	'".$_REQUEST['TxtSTDTelephone']."',
										registration_mobile1	=	'".$_REQUEST['TxtMobile1']."',
										registration_mobile2	=	'".$_REQUEST['TxtMobile2']."',
									registration_highest_qualification	=	'".$_REQUEST['TxtHighestQualification']."', 	
									registration_education_level	=	'".$_REQUEST['TxtEducationLevel']."',
									registration_education_field	=	'".$_REQUEST['TxtEducationField']."',
									registration_education_detail	=	'".$_REQUEST['TxtEducationDetails']."',
									registration_occupation	=	'".$_REQUEST['occupation']."',
									registration_employedin	=	'".$_REQUEST['employedin']."',
									registration_occupation_detail	=	'".$_REQUEST['TxtOccupationDetail']."',
									registration_monthly_income	=	'".$_REQUEST['TxtMonthlyIncome']."',
									
									registration_working_marriage	=	'".$_REQUEST['TxtWorkingAfterMarriage']."',
									registration_subgroup	=	'".$_REQUEST['ppsubgroup']."',
									registration_physicalstatus	=	'".$_REQUEST['TxtPhysicalStatus']."',
									registration_diet	=	'".$_REQUEST['ppdiet']."',
									registration_status	=	0,
								registration_date	=	'".time()."',
									registration_photo	=	'".$newfilename."',
									registration_fathername			=	'".$_REQUEST['TxtFatherName']."',
									registration_fatherstatus		=	'".$_REQUEST['fatherstatus']."',
									registration_mothername			=	'".$_REQUEST['TxtMotherName']."',
									registration_motherstatus		=	'".$_REQUEST['motherstatus']."',
									registration_brothermarried		=	'".$_REQUEST['TxtBrotherMarried']."',
									registration_sistermarried		=	'".$_REQUEST['TxtSisterMarried']."',
									registration_brotherunmarried	=	'".$_REQUEST['TxtBrotherUnmarried']."',
									registration_sisterunmarried	=	'".$_REQUEST['TxtSisterUnmarried']."',
									registration_livingstatus		=	'".$_REQUEST['TxtLivingStatus']."',
									registration_familytype			=	'".$_REQUEST['TxtFamilyType']."',
									registration_familystatus		=	'".$_REQUEST['TxtFamilyStatus']."',
									registration_nativevillage		=	'".$_REQUEST['nativeplace_village']."',
									registration_nativetaluka		=	'".$_REQUEST['nativeplace_taluka']."',
									registration_nativedistrict		=	'".$_REQUEST['nativeplace_disctrict']."',
									registration_nativestate		=	'".$_REQUEST['nativeplace_state']."',
									registration_myfamily			=	'".$_REQUEST['TxtAboutMyFamily']."'";
													
			mysql_query($insertUser) or die(mysql_error());
			
			$dirname = mysql_insert_id();

			$insertPartner = "insert into partner_preference set partner_register_id = '".$dirname."',
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
											partner_aboutpartner	=	'".$_REQUEST['PartnerAboutMySelf']."'";
														
			mysql_query($insertPartner) or die(mysql_error());
			 
			$dirnameFolder = "../register/album/".$dirname;
			
			mkdir($dirnameFolder, 0777);
						
			returnUrl("registration.php?register=succ");
			
	}

if($_REQUEST['register'] == "succ")
	{
		$msg = "Thanks for registerd with us! Admin will activate your account once we received the amount.";
	}
	
 include("html/admin/header.html");
include("html/admin/registration.html");
 include("html/admin/footer.html");
?>