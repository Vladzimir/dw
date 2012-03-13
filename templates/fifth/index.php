<!DOCTYPE html>
<html>
	<head>
		<title><?=$name?></title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="css/styles.css">
		<!--[if IE 7]>
			<link type="text/css" rel="stylesheet" href="css/ie7.css">
		<![endif]-->
	</head>
	<body>
		<!-- [CONTAINER] -->
		<div class="container">
			<!-- [HEADER] -->
			<div class="header">
				<a href="index.php"><img class="logo" src="images/logo.png"></a>
				<ul class="nav">
					<li><a href="index.php">Главная</a></li>
					<li><a href="sitemap.php">Карта сайта</a></li>
					<li><a href="contact.php">Контакты</a></li>
					<li><a href="about.php">О нас</a></li>
				</ul>
				<ul class="social-networks">
					<li>
						<a href="http://www.facebook.com"><span class="facebook"></span></a>
					</li>
					<li>
						<a href="http://www.twitter.com/"><span class="twitter"></span></a>
					</li>
				</ul>
			</div>
			<!-- [END OF HEADER] -->
			
			<!-- [CONTENT] -->
			<div class="content-wrap">
				<div class="content">
					<div class="home">
						<h1><?=$name?></h1>
						<?=$text?>
					</div>
					<div class="see-also">
						<h2>Последние поступления</h2>
						<ul>
						<?php for($i = 0; $i < 4; $i++): ?>
						<?php $symbols = rand(50, 70); ?>
							<li>
								<h3><?=$links[$i]['title']?></h3>
								<a href="<?=$links[$i]['uri']?>"><img src="photos/<?=$links[$i]['image']?>" alt="<?=$links[$i]['title']?>" title="<?=$links[$i]['title']?> - <?=mb_strcut(strip_tags($links[$i]['description']), 0, $symbols, 'UTF-8')?>..."></a>
								<p><span>от <span class="price"><?=$links[$i]['price']?></span>р.</span></p>
							</li>
						<?php endfor; ?>
						</ul>
					</div>
				</div>
				
			</div>
			<!-- [END OF CONTENT] -->
			
			<!-- [FOOTER] -->
			<?php echo '<?php require_once "footer.php"; ?>'; ?>
			<!-- [END OF FOOTER] -->
		</div>
		<!-- [END OF CONTAINER] -->
	</body>
</html>