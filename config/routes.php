<?php

return array(

	'news/page-([0-9]+)' => 'news/index/$1',
	'news' => 'news/index',
	
	'article/(([0-9a-z-])+)' => 'news/view/$1',
	
	'affiche/(([a-z])+)' => 'repertoire/affiche/$1',

	'repertoire/(([0-9a-z-])+)' => 'repertoire/index/$1',
	'spectacle/(([0-9a-z-])+)' => 'repertoire/spectacle/$1',
	
	'workers/(([0-9a-z-])+)' => 'worker/list/$1',
	'worker/(([0-9a-z-])+)' => 'worker/details/$1',

	// 'user/register' => 'user/register',
	// 'user/login' => 'user/login',
	// 'user/logout' => 'user/logout',
	
	// 'contacts' => 'site/contacts',

	'index.php' => 'site/index',
	'' => 'site/index',
	
);