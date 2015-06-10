<?php
/*
**	@desc:		PHP ajax login form using jQuery
**	@author:	programmer@chazzuka.com
**	@url:		http://www.chazzuka.com/blog
**	@date:		15 August 2008
**	@license:	Free!, but i'll be glad if i my name listed in the credits'
*/

//@ validate inclusion
if(!defined('VALID_ACL_')) exit('Acceso directo no está permitido.');

$ACL_LANG = array (
		'USERNAME'			=>	'Username',
		'EMAIL'				=>	'E-mail',
		'PASSWORD'			=>	'Password',
		'LOGIN'				=>	'Entrar!',
		'SESSION_ACTIVE'	=>	'Su sesión ya está activa, haga clic en <a href="'.SUCCESS_URL.'">here</a> para continuar.',
		'LOGIN_SUCCESS'		=>	'Usted se autentico satisfactoriamente, haga clic en <a href="'.SUCCESS_URL.'">here</a> para continuar.',
		'LOGIN_FAILED'		=>	'Error de acceso: combinación incorrecta de '.((LOGIN_METHOD=='user'||LOGIN_METHOD=='both')?'Username':''). 
								((LOGIN_METHOD=='both')?'/':'').
								((LOGIN_METHOD=='email'||LOGIN_METHOD=='both')?'email':'').
								' and password.',
	);
?>