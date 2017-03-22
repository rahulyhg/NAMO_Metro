<?php
session_start();
//include("/includes/database.php");
if(!isset($_SESSION['BHOOMI']['ADMIN']))
	{
	?>
			<script type="text/javascript" language="javascript">
                window.location="index.php";
            </script>
     <?php 	
	}
session_destroy();
?>
			<script type="text/javascript" language="javascript">
                window.location="index.php";
            </script>	
    