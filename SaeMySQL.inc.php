<?php
//更新时间：2015.3.12
//include('SaeMySQL.php');
//include('SaeMySQL.inc.php');
$a=SAE_MYSQL_HOST_M;$b=SAE_MYSQL_PORT;$c=SAE_MYSQL_USER;$d=SAE_MYSQL_PASS;$e=SAE_MYSQL_DB;function SaeMySQLConnect(){global $a;global $b;global $c;global $d;global $e;$f=mysql_connect($a.':'.$b,$c,$d);if(!$f){return false;}if(!mysql_select_db($e,$f)){return false;}return $f;}function SaeMySQLTryUpdate($g){$h=mysql_query($g);if(!$h){return false;}return $h;}function SaeMySQLMustUpdate($g){$h=mysql_query($g);if(!$h){return false;}if(mysql_affected_rows()===0){return false;}return $h;}function SaeMySQLTryDelete($g){$h=mysql_query($g);if(!$h){return false;}return $h;}function SaeMySQLMustDelete($g){$h=mysql_query($g);if(!$h){return false;}if(mysql_affected_rows()===0){return false;}return $h;}function SaeMySQLInsert($g){$h=mysql_query($g);if(!$h){return false;}if(mysql_insert_id()===0){return false;}return mysql_insert_id();}function SaeMySQLSelectAllArray($g){$h=mysql_query($g);if(!$h){return false;}$i=array();$j=mysql_fetch_array($h);while($j){$i[]=$j;$i=mysql_fetch_array($h);}return $i;}function SaeMySQLSelectDefaultArray($g){$h=mysql_query($g);if(!$h){return false;}$i=array();$j=mysql_fetch_row($h);while($j){$i[]=$j;$i=mysql_fetch_row($h);}return $i;}function SaeMySQLSelectAssociativeArray($g){$h=mysql_query($g);if(!$h){return false;}$i=array();$j=mysql_fetch_assoc($h);while($j){$i[]=$j;$i=mysql_fetch_assoc($h);}return $i;}function SaeMySQLDisconnect(){mysql_close();}?>