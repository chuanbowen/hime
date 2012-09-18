<?php
if(!defined('DEDEINC')) 
{
	exit("Request Error!");

	
function lib_sh(&$ctag, &$refObj)  
{
	/*
	global $dsql; 
	$attlist = "topid|0,row|10"; 
	FillAttsDefault ( $ctag->CAttribute->Items, $attlist ); 
	extract ( $ctag->CAttribute->Items, EXTR_SKIP ); 
	$condtion=""; 
	$revalue=''; 
	if($topid==0) 
	{ 
		$condtion.=" where topid=0"; 
	} 
	elseif ($topid!=0) 
	{ 
		$condtion.=" where topid <> 0"; 
	} 
	$equery="select * from `#@__arctype` $condtion"; 
	if(trim($ctag->GetInnerText())=='') $innertext = "<li>[field:typename /]</li>"; 
	else $innertext = $ctag->GetInnerText(); 
	$dsql->SetQuery($equery); 
	$dsql->Execute(); 
	  
	while($dbrows=$dsql->GetObject()) 
	{ 
		$rbtext = preg_replace("/\[field:typename([\/\s]{0,})\]/isU",$dbrows->typename, $innertext); 
		$revalue.=$rbtext; 
	}*/
	return '<div style="color:#FF0000">111</div>'; 
}
?>