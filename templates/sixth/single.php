<?php echo '<?php
	session_start();

	error_reporting(0);

	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("' . $uri . '","' . $keyword . '");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];

		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("' . $uri . '", $nick, $comment);
		}
		else
		{
			$error = "class=\"error\"";
		}
	}
?>'
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title><?= $keyword ?> <?= $title ?></title>
		<meta charset="utf-8">
		<meta name="keywords" content="<?= $keyword ?>, <? for($i = 0; $i < 14; $i++): ?><?= $links[$i]['keyword'] ?>, <? endfor; ?> <?= $links[15]['keyword'] ?>">
		<meta name="description" content="<?= $keyword ?><?= mb_substr(preg_replace('/<.+?>/', ' ', $description), 0, 80, 'UTF-8') ?>...">
		<link type="text/css" rel="stylesheet" href="css/styles.css">
		<link type="text/css" rel="stylesheet" href="css/lightbox.css">

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/lightbox.min.js"></script>
		<script type="text/javascript" src="js/validator.js"></script>
		<script type="text/javascript" src="lib/lib.js"></script>
		<script type="text/javascript">
			$(function()
			{
				$('a.photo').lightBox();
			});
		</script>
	</head>
	<body>
		<!-- [CONTAINER] -->
		<div class="container">
			<!-- [HEADER] -->
			<?php echo '<?php require_once "header.php"; ?>'; ?>
			<!-- [END OF HEADER] -->
			
			<!-- [CONTENT] -->
			<div class="content">
				<div class="product">
					<div class="tpb">
						<h1><?= $keyword ?> <?= $title ?></h1>
						<p>Цена:<span> от <span class="price"><?= $price ?></span> руб.</span></p>
						<a href="go.php?url=<?= $url ?>" target="_blank"><span class="button"></span></a>
						<img class="admitad" src="<?= $admitad ?>" alt="">
					</div>
					<span class="l"></span><span class="r"></span>
					<a class="photo" href="photos/<?= $image ?>" title="<?= $keyword ?> <?= $title ?>"><img src="photos/<?= $image ?>" alt="<?= $title ?> <?= $keyword ?>" title="<?= $keyword ?> <?= $title ?>"></a>
					<ul>
					<? for($i = 0; $i < 2; $i++): ?>
						<li>
							<a href="<?= $links[$i]['uri'] ?>"><img src="photos/<?= $links[$i]['image'] ?>" alt="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>"></a>
							<h2><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></h2>
						</li>
					<? endfor; ?>
					</ul>
					<div class="description"><?= $description ?> <?= $keyword ?> <?php echo '<?php require_once "reclame.php"; ?>'; ?></div>
					<div class="end"></div>
				</div>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<span class="l"></span>
					<ul>
						<? $count = rand(2, 5); ?>
						<? for($i = 2; $i < 6; $i++): ?>
							<li>
							<? if($i < $count): ?>
								<a href="<?= $links[$i]['uri'] ?>"><img src="photos/<?= $links[$i]['image'] ?>" alt="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>"></a>
								<p>от <span class="price"><?= $links[$i]['price'] ?></span>р.</p>
								<h3><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></h3>
							<? else: ?>
								<img class="without" src="photos/<?= $links[$i]['image'] ?>" alt="<?= mb_substr(strrchr($links[$i]['uri'], '/'), 1, -4, 'UTF-8') ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>">
								<p>от <span class="price"><?= $links[$i]['price'] ?></span>р.</p>
								<span><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></span>
							<? endif; ?>
							</li>
						<? endfor; ?>

						<? for($i = 6; $i < 8; $i++): ?>
							<li class="large">
								<img class="without" src="photos/<?= $links[$i]['image'] ?>" alt="<?= mb_substr(strrchr($links[$i]['uri'], '/'), 1, -4, 'UTF-8') ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>">
								<span><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></span>
								<p>от <span class="price"><?= $links[$i]['price'] ?></span>р.</p>
							</li>
						<? endfor; ?>

						<? for($i = 8; $i < count($links); $i++): ?>
						<li>
							<img class="without" src="photos/<?= $links[$i]['image'] ?>" alt="<?= mb_substr(strrchr($links[$i]['uri'], '/'), 1, -4, 'UTF-8') ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>">
							<p>от <span class="price"><?= $links[$i]['price'] ?></span>р.</p>
							<span><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></span>
						</li>
						<?php endfor; ?>
					</ul>
				</div>
				<div class="comments">
					<h2>Комментарии</h2>
					<span class="r"></span>
					<ul>
						<?php echo '<?php $page = substr("' . $uri . '", 0, -4); if (file_exists("comments/' . $uri . '")) require_once "comments/' . $uri . '"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>';?>
					</ul>
					<script>$("div.comments li:odd").css("background-color", "#303030");</script>
					
					<h2 class="feedback">Оставить отзыв</h2>
					<span class="r"></span>
					<form action="" method="post" onsubmit="return checkForm(this)">
						<p><textarea name="comment" placeholder="Текст сообщения"></textarea>
						<p><input type="text" name="author" placeholder="Имя"></p>
						<p><input type="text" name="captcha" placeholder="Код" maxlength="4" <?php echo '<?php if(isset($error)) echo "$error"; ?>'; ?>><img src="captcha.php" alt="captcha"><button type="submit"></button></p>
					</form>
				</div>
				<div class="end"></div>
			</div>
			<!-- [END OF CONTENT] -->
			
			<!-- [FOOTER] -->
			<?php echo '<?php require_once "footer.php"; ?>'; ?>
			<!-- [END OF FOOTER] -->
		</div>
		<!-- [END OF CONTAINER] -->
	</body>
</html>