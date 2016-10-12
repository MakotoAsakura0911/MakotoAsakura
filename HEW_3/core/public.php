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
		<link rel="stylesheet" href="'.$level.'css/original.css" type="text/css" />
		'.$css.'
		<script type="text/javascript" src="'.$level.'js/jquery-1.11.3.min.js"></script>
		'.$js.'
	</head>

<body>
	<div id="wrap">
	<header>
    	<h1><img src="images/logo.png" width="138" height="21" alt="ロゴ"/></h1>
         <p>-WD33　テキストサイズバージョン２　Dreamweaver操作確認ページ-</p>
    </header>

';}

function html_nav(){
	global $level;

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

';}

function html_footer(){
	global $level;

	echo'
	<footer>
    	<p>copyright&copy; 2016 WD33. All Rights Reserved.</p>
    </footer>

';}

?>