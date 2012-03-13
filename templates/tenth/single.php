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
		<title><?= $keyword ?> <?= $title ?> <?= $preview ?></title>
		<meta charset="UTF-8">
		<meta name="keywords" content="<?= $keyword ?>, <? for($i = 1; $i < 14; $i++): ?><?= $links[$i]['keyword'] ?>, <? endfor; ?> <?= $links[15]['keyword'] ?>">
		<meta name="description" content="<?= $keyword ?> <?= mb_substr(strip_tags($description), 0, 80, 'UTF-8') ?>...">
		<link type="text/css" rel="stylesheet" href="css/styles.css">
		<link type="text/css" rel="stylesheet" href="css/lightbox.css">

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/lightbox.min.js"></script>
		<script type="text/javascript" src="js/validator.js"></script>
		<script type="text/javascript" src="lib/lib.js"></script>
		<script type="text/javascript">
			$(function(){$('a.photo').lightBox();});

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
			<?php echo '<?php require_once "header.php"; ?>'; ?>
			<!-- [END OF HEADER] -->
			<!-- [CONTENT] -->
			<div class="content">
				<div class="product">
					<div class="ls">
						<a class="photo" href="photos/<?= $image ?>" title="<?= $keyword ?> <?= $title ?>"><img src="photos/<?= $image ?>" alt="<?= $keyword ?> <?= $title ?>" title="<?= $keyword ?> <?= $title ?> - <?= $preview ?>"></a>
						<ul>
<? for($i = 1; $i < 4; $i++): ?>
							<li><a href="<?= $links[$i]['uri'] ?>"><img src="photos/<?= $links[$i]['image'] ?>" alt="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>"></a><h2><?= $links[$i]['title'] ?></h2></li>
<? endfor; ?>
						</ul>
					</div>
					<div class="rs">
						<h1><?= $keyword ?> <?= $title ?></h1>
						<div class="tb"><p>Цена: от <span class="price"><?= $price ?></span> руб. <a href="go.php?url=<?= $url ?>" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><?= $description ?> <?= $keyword ?></div>
					</div>
					<div class="end"></div>
				</div>

				<?php echo '<?php require_once "reclame.php"; ?>'; ?>

				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
<? $count = rand(2, 5); ?>
<? for($i = 4; $i < 8; $i++): ?>
<? if($i < $count): ?>
						<li><img src="photos/<?= $links[$i]['image'] ?>" alt="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>"><div class="box"><a href="<?= $links[$i]['uri'] ?>"><h3 class="title"><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></h3><p>от <span class="price"><?= $links[$i]['price'] ?></span> руб.</p></a></div></li>
<? else: ?>
						<li><img src="photos/<?= $links[$i]['image'] ?>" alt="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>"><div class="box" page="<?= mb_substr(strrchr($links[$i]['uri'], '/'), 1, -4, 'UTF-8') ?>"><span class="title"><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></span><p>от <span class="price"><?= $links[$i]['price'] ?></span> руб.</p></div></li>
<? endif; ?>
<? endfor; ?>
<? for($i = 8; $i < 11; $i++): ?>
						<li class="large"><img src="photos/<?= $links[$i]['image'] ?>" alt="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>"><div class="box" page="<?= mb_substr(strrchr($links[$i]['uri'], '/'), 1, -4, 'UTF-8') ?>"><span class="title"><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></span><p>от <span class="price"><?= $links[$i]['price'] ?></span> руб.</p></div></li>
<? endfor; ?>
<? for($i = 11; $i < 15; $i++): ?>
						<li><img src="photos/<?= $links[$i]['image'] ?>" alt="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>"><div class="box" page="<?= mb_substr(strrchr($links[$i]['uri'], '/'), 1, -4, 'UTF-8') ?>"><span class="title"><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></span><p>от <span class="price"><?= $links[$i]['price'] ?></span> руб.</p></div></li>
<? endfor; ?>			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php echo '<?php $page = substr("' . $uri . '", 0, -4); if (file_exists("comments/' . $uri . '")) require_once "comments/' . $uri . '"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>';?>
					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="<?= $uri ?>" method="post" onsubmit="return checkForm(this)">
						<p><textarea name="comment" placeholder="Ваше сообщение здесь"></textarea></p>
						<p><input type="text" name="author" placeholder="*Имя"><input type="text" name="captcha" placeholder="*Код" <?php echo '<?php if(isset($error)) echo "$error"; ?>'; ?>><img class="captcha" src="captcha.php" alt=""><input type="submit"></p>
					</form>
				</div>
			</div>
			<!-- [END OF CONTENT] -->

			<!-- [FOOTER] -->
			 <?php echo '<?php require_once "footer.php"; ?>'; ?>
			<!-- [END OF FOOTER] -->
		</div>
		<!-- [END OF CONTAINTER] -->
	</body>
</html>