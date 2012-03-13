<!DOCTYPE html>
<html>
	<head>
		<title><?= $name ?></title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="css/styles.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".see-also ul li").hover(
				function(){$(this).children(".box").toggle();},
				function(){$(this).children(".box").toggle();})
			});
		</script>
	</head>
	<body>
		<!-- [CONTAINER] -->
		<div class="container">
			<!-- [HEADER] -->
			<div class="header-wrap">
				<div class="header">
					<a href="index.php"><img src="images/header-logo.png" alt="logo"></a>
					<ul class="nav">
						<li><a href="index.php">Главная</a></li>
						<li><a href="sitemap.php">Карта сайта</a></li>
						<li><a href="contact.php">Контакты</a></li>
						<li><a href="about.php">О нас</a></li>
					</ul>
				</div>
			</div>
			<!-- [END OF HEADER] -->

			<!-- [CONTENT] -->
			<div class="content">
				<div class="page">
					<h1><?= $name ?></h1>
					<?= $text ?>
				</div>
				<div class="see-also">
					<h2>Последние поступления</h2>				
					<ul>
<? for ($i = 0; $i < 4; $i++): ?>
						<li><img src="photos/<?= $links[$i]['image'] ?>" alt="<?= $links[$i]['title'] ?>" title="<?= $links[$i]['title'] ?>"><div class="box"><a href="<?= $links[$i]['uri'] ?>"><h3 class="title"><?= $links[$i]['title'] ?></h3><p>от <span class="price"><?= $links[$i]['price'] ?></span> руб.</p></a></div></li>
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