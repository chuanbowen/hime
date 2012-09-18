<?php
if(!defined('DEDEINC'))
{
    exit("Request Error!");
}
include_once 'memberinfos.lib.php';
$a = lib_memberinfos($ctag, $refObj);
var_dump($a);


function lib_videoinfo(&$ctag, &$refObj)
{
	global $dsql;
    if(empty($refObj->Fields['dutyadmin']))
    {
        $dutyadmin = $GLOBALS['cfg_df_dutyadmin'];
    }
    else
    {
        $row = $dsql->GetOne("SELECT uname FROM `#@__admin` WHERE id='{$refObj->Fields['dutyadmin']}' ");
        $dutyadmin = isset($row['uname']) ? $row['uname'] : $GLOBALS['cfg_df_dutyadmin'];
    }
    return $dutyadmin;
}