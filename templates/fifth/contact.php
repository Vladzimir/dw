<!DOCTYPE html>
<html>
	<head>
		<title>Контакты - <?=$name?></title>
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
			<?php echo '<?php require_once "header.php"; ?>'; ?>
			<!-- [END OF HEADER] -->
			
			<!-- [CONTENT] -->
			<div class="content-wrap">
				<div class="content">
					<div class="contact">
						<h1>Контакты</h1>
						<?=$text?>
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