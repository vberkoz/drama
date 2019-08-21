<?php

return array(

	// 'api/articles/page-([0-9]+)' => 'news/getarticles/$1',

	// 'user/register' => 'user/register',
	'user/logout' => 'user/logout',
	'user/login' => 'user/login',
	
	'admin/articles/page-([0-9]+)' => 'adminArticle/articles/$1',
	'admin/article/create' => 'adminArticle/create',
	'admin/article/update/(([0-9a-z-])+)' => 'adminArticle/update/$1',
	'admin/article/delete/([0-9]+)' => 'adminArticle/delete/$1',

	'admin/spectacles/page-([0-9]+)' => 'adminSpectacle/spectacles/$1',
	'admin/spectacle/(([0-9a-z-])+)' => 'adminSpectacle/spectacle/$1',

	'admin/images/page-([0-9]+)' => 'adminImage/images/$1',
	'admin/image/(([0-9a-z-])+)' => 'adminImage/image/$1',

	'admin/dashboard' => 'adminDashboard/dashboard',
	
//	'news/page-([0-9]+)' => 'news/index/$1',
//	'news' => 'news/index',
	'blog' => 'blog/index',
	
	'article/(([0-9a-z-])+)' => 'news/view/$1',
	
	'affiche/(([a-z])+)' => 'repertoire/affiche/$1',
	
	'repertoire/(([0-9a-z-])+)' => 'repertoire/index/$1',
	'spectacle/(([0-9a-z-])+)' => 'repertoire/spectacle/$1',
	
	'workers/(([0-9a-z-])+)' => 'worker/list/$1',
	'worker/(([0-9a-z-])+)' => 'worker/details/$1',
	
    'contacts' => 'site/contacts',
	
	'index.php' => 'site/index',
	'' => 'site/index',
	
);