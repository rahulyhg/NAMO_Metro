
<?php
$selectNews1 = "select * from testimonial where id = 1";
$fireNews1 = mysql_query($selectNews1) or die(mysql_error());

$row1 = mysql_fetch_array($fireNews1);
$NewsFooter1 =$row1['content'];



$selectNews2 = "select * from testimonial where id = 2";
$fireNews2 = mysql_query($selectNews2) or die(mysql_error());

$row2 = mysql_fetch_array($fireNews2);
$NewsFooter2 =$row2['content'];


$selectNews3 = "select * from testimonial where id = 3";
$fireNews3 = mysql_query($selectNews3) or die(mysql_error());

$row3 = mysql_fetch_array($fireNews3);
$NewsFooter3 =$row3['content'];


$selectNews4 = "select * from testimonial where id = 4";
$fireNews4 = mysql_query($selectNews4) or die(mysql_error());

$row4 = mysql_fetch_array($fireNews4);
$NewsFooter4 =$row4['content'];


$selectNews5 = "select * from testimonial where id = 5";
$fireNews5 = mysql_query($selectNews5) or die(mysql_error());

$row5 = mysql_fetch_array($fireNews5);
$NewsFooter5 =$row5['content'];



$NewsFooter = $NewsFooter1 .'<span style="color:#fd9148">|</span>'. $NewsFooter2 .'<span style="color:#fd9148">|</span>'. $NewsFooter3 .'<span style="color:#fd9148">|</span>'. $NewsFooter4 .'<span style="color:#fd9148">|</span>'. $NewsFooter5;



?>