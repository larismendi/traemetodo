<?php
/*
**	@desc:		PHP ajax login form using jQuery
**	@author:	programmer@chazzuka.com
**	@url:		http://www.chazzuka.com/blog
**	@date:		15 August 2008
**	@license:	Free!, but i'll be glad if i my name listed in the credits'
*/
//@ validate inclusion
if(!defined('VALID_ACL_')) exit('direct access is not allowed.');

define('USEDB',			true);				//@ use database? true:false
define('LOGIN_METHOD',	'both');			//@ 'user':'email','both'
define('SUCCESS_URL',	'../registros/');		//@ redirection target on success
require_once('../../clases/database/database.class.php');
$db = new database();
//@ you could delete one of block below according to the USEDB value
if(USEDB) 
{
	$db_config = array(
		'server'	=>	$db->get_server(),//@ DNS o Ip along with suffix ':port' if needed (localhost:3307)||69.20.61.52
		'user'		=>	$db->get_user(),	//@ mysql username root||decobd
		'pass'		=>	$db->get_pass(),	//@ mysql password ''||ypkkoyw
		'name'		=>	$db->get_database(),//@ database webapp||deconews_db
		'tbl_user'	=>	$db->get_tablogin()//@ tabla usuario tbl_user||usuarios
	);
}
else{
	$user_config = array(
		array(
			'username'	=>	'admin',
			'email'	=>	'admin@localhost',
			'password'	=>	'e10adc3949ba59abbe56e057f20f883e',	// md5:123456
		),
		array(
			'username'	=>	'user',
			'email'	=>	'user@localhost',
			'password'	=>	'e10adc3949ba59abbe56e057f20f883e',	// md5:123456
		)	
	);
}
?>