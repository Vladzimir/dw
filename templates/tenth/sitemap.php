<!DOCTYPE html>
<html>
	<head>
		<title>Карта сайта - <?=$name?></title>
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
				<div class="page">
					<h2>Карта сайта</h2>
					<ul class="sitemap">
						<? foreach($links as $link): ?>
						<? $symbols = rand(50, 70); ?>
						<li>
							<a href="<?= $link['uri'] ?>"><?= $link['title'] ?> - <?= mb_strcut(strip_tags($link['description']), 0, $symbols, 'UTF-8') ?>...</a>
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