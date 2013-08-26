<?php

// $dbFile=dirname(__FILE__).'/blog.db';
$sqlFile=dirname(__FILE__).'/schema.mysql.sql';

// @unlink($dbFile);
$db=new PDO('mysql:host=127.7.161.1;dbname=c9', 'ljie_pi', '', array( PDO::ATTR_PERSISTENT => false));
$sqls=file_get_contents($sqlFile);
foreach(explode(';',$sqls) as $sql)
{
	if(trim($sql)!=='')
		$db->exec($sql);
}
