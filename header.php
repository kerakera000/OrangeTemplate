<!DOCTYPE html>
<html lang="ja" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		
		<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/stylesp.css'); ?>">
		<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/stylepc.css'); ?>">
		<link rel="stylesheet" href="style.css">

		<link rel="preconnect" href="https://fonts.googleapis.com"> 
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
		<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Kaisei+Decol&family=Noto+Sans+JP:wght@300&family=Zen+Kaku+Gothic+New:wght@300&display=swap" rel="stylesheet">
		
		<title><?php wp_title(); ?> orage template</title>

    <?php wp_head(); ?>
	</head>

	<body class="body-toggle" id="body" <?php body_class(); ?>>

	<header id="header">
		<ul>
			<li><a href="">TRALER</a></li>
			<li><a href="">AMAZON</a></li>
			<li><a href="">FILMARKS</a></li>
		</ul>
		<div>
			<p>instagram</p>
			<p>twitter</p>
		</div>
	</header>

	<div class="top">
		<div class="load">
			<div class="load-text">
				<h1>A CLOCKWORK ORANGE</h1>
				<p>Designed by OO Group, member of 4 who like movies, just for practice and hobby.</p>
			</div>
		</div>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/orangetoppc.jpg" alt="">
		<div class="top-text">
			<p>ULTRA VIOLENCE</p>
			<h2>傑作の超暴力的映画</h2>
			<p>並外れた映像、音楽、台詞そして情感の力作</p>
		</div>
	</div>

	<body <?php body_class(); ?>>