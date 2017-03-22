<style>
.paging_red
{
text-decoration:none;
text-align:right;
font-size:20px;
font-weight:bold;
color:#FF0000;
}
.colrow{
background-color: #FFFFFF;
}
.paging_red.hover
{
text-decoration:none;
text-align:right;
font-size:20px;
font-weight:bold;
color:#FF0000;
}
.paging_gen
{
text-decoration:none;
text-align:right;
font-size:12px;
font-weight:bold;
color:#990066;
}
.paging_gen.hover
{
text-decoration:none;
text-align:right;
font-size:12px;
font-weight:bold;
color:#33FF00;
}

</style>

<?
$cmd=mysql_query($strsql);
$cnt=mysql_affected_rows();
$limit=10;
if($_REQUEST['offset'])
{
$start=$_REQUEST['offset']*$limit-$limit;
}
else
{
$start=0;
}
$row10="";
$nm=ceil($cnt/$limit);
  
 
if($nm>1)
{
	for($t=1;$t<=$nm;$t++)
		{
			if(($_REQUEST['offset']==$t))
			{
			  $row10=$row10." <a class='paging_red' href='?offset=$t'>".$t."</a> ";
			}
			else
			{
			   $row10=$row10." <a class='paging_gen' href='?offset=$t'>".$t."</a> ";
			}
	   }
}
   $strsql=$strsql." limit ".$start.",". $limit;
 ?>
  

