<!DOCTYPE html>
<html>
	<head>
		<title><?= $name ?></title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<!-- [CONTAINER] -->
		<div class="container">
			<!-- [HEADER] -->
			<div class="header-wrap">
				<div class="header">
					<a href="index.php"><img class="logo" src="images/header-logo.png" alt="logo"></a>
					<ul class="nav">
						<li><a href="index.php">Главная</a></li>
						<li><a href="sitemap.php">Карта сайта</a></li>
						<li><a href="contact.php">Контакты</a></li>
						<li><a href="about.php">О нас</a></li>
					</ul>
					<ul class="social-networks">
						<li><a href="http://www.facebook.com"><span class="facebook"></span></a></li>
						<li><a href="http://www.twitter.com/"><span class="twitter"></span></a></li>
					</ul>
				</div>
			</div>
			<!-- [END OF HEADER] -->
			
			<!-- [CONTENT] -->
			<div class="content">
				<div class="home">
					<h1><?= $name ?></h1>
					<?= $text ?>
				</div>
				<div class="last-updates">
					<h2>Последние поступления</h2>
					<span class="l"></span><span class="r"></span>
					<ul>
						<? for($i = 0; $i < 8; $i++): ?>
						<? preg_match_all('/<dt>(.+?)<\/dt>/', $links[$i]['description'], $keys); ?>
						<? preg_match_all('/<dd>(.+?)<\/dd>/', $links[$i]['description'], $values); ?>
						<li>
							<a href="<?= $links[$i]['uri'] ?>"><img src="photos/<?= $links[$i]['image'] ?>" alt="<?= $links[$i]['keyword']?> <?= $links[$i]['title'] ?>" title="<?= $links[$i]['title'] ?> - <?= strip_tags($keys[0][0] . ' ' . $values[0][0]) ?>"></a>
							<h3><?= $links[$i]['title'] ?></h3>
							<p>от <span class="price"><?= $links[$i]['price'] ?></span>р.</p>
						</li>
						<? endfor; ?>
					</ul>
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