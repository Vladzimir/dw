<!DOCTYPE html>
<html>
	<head>
		<title>Карта сайта - <?= $name ?></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
		<!-- [CONTAINER] -->
		<div class="container">
			<!-- [HEADER] -->
			<?php echo '<?php require_once "header.php"; ?>'; ?>
			<!-- [END OF HEADER] -->
			
			<!-- [CONTENT] -->
			<div class="content">
				<div class="sitemap">
					<h1>Карта сайта</h1>
					<ul>
						<? foreach($links as $link): ?>
						<? preg_match_all('/<dt>(.+?)<\/dt>/', $link['description'], $keys); ?>
						<? preg_match_all('/<dd>(.+?)<\/dd>/', $link['description'], $values); ?>
						<li>
							<a href="<?= $link['uri'] ?>"><?= $link['title'] ?> - <?= strip_tags($keys[0][0] . ' ' . $values[0][0]) ?></a>
						</li>
						<? endforeach; ?>
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