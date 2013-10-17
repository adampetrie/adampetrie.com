<!doctype html>
<html lang="en">
<head>

	<title>Adam Petrie - Web Developer, morning person, all around nice guy</title>
	
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	
	<meta name="description" content="I build websites that don't suck." />
	<meta name="keywords" content="Web Development, Codeigniter, Expression Engine, Wordpress, PHP, Modx, Actionscript, Flash" />
	
	<link rel="canonical" href="<?= base_url() ?>" />

	<link rel="stylesheet" href="<?= base_url('common/styles/style.css') ?>" type="text/css" media="screen" />
	
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('common/images/favicon.ico') ?>" />
	
	<meta name="google-site-verification" content="3f-utxxZ-RMeJnm6mIvq-UK1B_EMF33qvyjT0dhzweU" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
</head>

<body>
		
	<div id="left-side-outer">
		<div id="left-side"></div>
	</div>

	<div id="center-column">
		
		<div id="header">
		
			<span id="logo"></span>
						
			<div id="banner">
		
				<span id="heraldic"></span>
					
			<!-- banner -->
			</div>
			
			<div id="navigation">
			
				<?php if(isset($error)) : ?>
			
					<ul class="clearfix">
						<li><a href="<?= base_url('#about') ?>">about</a>/</li>
						<li><a href="<?= base_url('#portfolio') ?>">work</a>/</li>
						<li><a href="<?= base_url('#connect') ?>" class="last">connect</a></li>
					</ul>
	
				<?php else : ?>
				
					<ul class="clearfix">
						<li><a href="#about" class="nav">about</a>/</li>
						<li><a href="#portfolio" class="nav">work</a>/</li>
						<li><a href="#connect" class="nav last" >connect</a></li>
					</ul>
				
				<?php endif; ?>
			
			</div>
											
		<!-- header -->
		</div>
				
		<div id="content">