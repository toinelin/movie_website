<?php


// Config
include 'inc/options.php';
 include 'inc/database.php'; // Uncomment if you need database

// Get the query
$q = empty($_GET['q']) ? '' : $_GET['q'];
// Routes
if($q == '')
	$page = 'home';
else if($q == 'edition')
	$page = 'edition';
else if($q == 'dates')
	$page = 'dates';
else if($q == 'winners')
	$page = 'winners';
else if($q == 'years')
	$page = 'years';
else if($q == 'editions')
	$page = 'editions';
else if($q == 'retrospective')
	$page = 'retrospective';
else if($q == '2015')
	$page = '2015';
// else if($q == 'news')
// 	$page = 'news'; //
// else if(preg_match('/^news\/[-a-z0-9]+$/',$q)) // news/mon-titre-d-actualite
// 	$page = 'news-single';
else
	$page = '404';

// Includes
include 'controllers/'.$page.'.php';
include 'partials/header.php';
include 'pages/'.$page.'.php';
include 'partials/footer.php';
