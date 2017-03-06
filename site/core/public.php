<?php

function html_header(){
	global $level,$css,$js,$title,$keywords,$description,$author;

	echo'
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="'.$keywords.'">
		<meta name="description" content="'.$description.'">
		<meta name="robots" content="nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="'.$author.'">
		<title>'.$title.'</title>
		<link rel="stylesheet" href="'.$level.'css/reset.css" type="text/css" />
		<link rel="stylesheet" href="'.$level.'css/common.css" type="text/css" />
		'.$css.'

		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		'.$js.'

	</head>

<body>

	<header id="Menu">
			<h1 id="logo"><a href="'.$level.'#content1"　class="nav_1"></a></h1>

		<nav id="menuList">
			<ul>
				<li><a href="'.$level.'#content1" class="nav_1" />TOP</a></li>
				<li><a href="'.$level.'#content2" class="nav_2" />CONCEPT</a></li>
				<li><a href="'.$level.'#content3" class="nav_3" />MOTIF</a></li>
				<li><a href="'.$level.'#content4" class="nav_4" />GALLERY</a></li>
				<li><a href="'.$level.'#content5" class="nav_5" />CONTACT</a></li>
			</ul>
		</nav>
	</header>

';}


function html_nav(){
	global $level;
/*
	echo'
	<nav>
       <ul>
        	<li><a href="http://localhost:1024/original/"><img src="'.$level.'images/btn1.gif" width="180" height="40" alt="ナビ１"/></a></li>
            <li><a href="'.$level.'page2/"><img src="'.$level.'images/btn2.gif" width="180" height="40" alt="ナビ２"/></a></li>
            <li><a href="'.$level.'page3/"><img src="'.$level.'images/btn3.gif" width="180" height="40" alt="ナビ３"/></a></li>
            <li><a href="'.$level.'page4/"><img src="'.$level.'images/btn4.gif" width="180" height="40" alt="ナビ４"/></a></li>
            <li><a href="'.$level.'page5/"><img src="'.$level.'images/btn5.gif" width="180" height="40" alt="ナビ５"/></a></li>
        </ul>
    </nav>

';*/}

/*
function html_footer(){
	global $level;

	echo'
	<footer>
			<ul>
				<li><a href="#"/></a></li>
				<li><a href="#"/></a></li>
				<li><a href="#"/></a></li>
				<li><a href="#"/></a></li>
				<li><a href="#"/></a></li>
				<li class="last"><a href="#"/></a></li>
			</ul>
		<p>copyright&copy; 2016 MakotoAsakura. All Rights Reserved.</p>
	</footer>

';}
*/
?>
