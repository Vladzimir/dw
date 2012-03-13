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
				<div class="sitemap">
					<h1>Карта сайта</h1>
					<ul>
						<?php foreach($links as $link): ?>
						<?php $symbols = rand(50, 70); ?>
						<li>
							<a href="<?=$link['uri']?>"><?=$link['title']?> - <?=mb_strcut(strip_tags($link['description']), 0, $symbols, 'UTF-8');?>...</a>
						</li>
						<?php endforeach; ?>
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