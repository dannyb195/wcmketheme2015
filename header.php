<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<html>
<head>
	<title>WP Theme Building Demo</title>
	<?php wp_head(); ?>
</head>

<body>

	<div id="site-wrapper">

		<header class="site-header">
			<div class="content-area side-padding">
				<div class="logo">
					<h1>Site Title Goes Here</h1>
					</div>
					<?php wp_nav_menu(); ?>
				<!-- <nav class="site-nav">
					<ul>
						<li><a>Nav Item 1</a></li>
						<li><a>Nav Item 2</a></li>
						<li><a>Nav Item 3</a></li>
						<li><a>Nav Item 4</a></li>
					</ul>
				</nav> -->
			</div>
		</header>
