<?php


function sendMail($to,$from,$subject,$cc="",$Bcc="",$body,$name="")
{
$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "X-Priority: 3\n";
$headers .= "X-MSmail-Priority: Normal\n";
$headers .= "X-mailer: php\n";
$headers .= "From: ".$name." <".$from.">\n";
$headers .= "Return-Path: ".$from."\n";
$headers .= "Return-Receipt-To: ".$from."\n";
$headers .= "\r\nCC:".$cc;
$headers .= "\r\nBCC:".$Bcc;

mail($to,$subject,$body,$headers);
}




?>