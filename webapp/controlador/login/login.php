<?php
/*
**	@desc:	PHP ajax login form using jQuery
**	@author:	programmer@chazzuka.com
**	@url:		http://www.chazzuka.com/blog
**	@date:	15 August 2008
**	@license:	Free!, but i'll be glad if i my name listed in the credits'
*/

// @ error reporting setting  (  modify as needed )
ini_set("display_errors", 1);
error_reporting(E_ALL);

//@ explicity start session  ( remove if needless )
session_start();

//@ if logoff OR //@ is authorized?
if(!empty($_GET['logoff']) || (empty($_SESSION['exp_user']) || !isset($_SESSION['exp_user']['autentificado_']) || $_SESSION['exp_user']['autentificado_']!=true || @$_SESSION['exp_user']['expires'] < time())) {
	$_SESSION = array();
    session_unset();
    session_destroy();
    $parametros_cookies = session_get_cookie_params();
    setcookie(session_name(), 0, 1, $parametros_cookies["path"]);
	header("location:../../administrador/login/login.php");	//@ redirect 
} else {
	$_SESSION['exp_user']['expires'] = time()+(45*60); //@ renew 45 minutes
}	
?>