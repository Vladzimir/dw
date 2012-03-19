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

<!DOCTYPE html>
<html>
	<head>
		<title><?= $keyword ?> <?= $title ?></title>
		<meta charset="UTF-8">
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
				$('div.large-box a').lightBox();
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
					<div class="large-box">
						<a href="photos/<?= $image ?>" title="<?= $keyword ?> <?= $title ?>"><img src="photos/<?= $image ?>" alt="<?= $keyword ?> <?= $title ?>" title="<?= $keyword ?> <?= $title ?>"></a>
					</div>
					<div class="tpb">
						<h1><?= $keyword ?> <?= $title ?></h1>
						<p>Цена:<span> от <span class="price"><?= $price ?></span> руб.</span></p>
						<a href="go.php?url=<?= $url ?>" target="_blank"><button>Уточнить цену »</button></a>
						<img class="admitad" src="<?= $admitad ?>">
					</div>
					<ul>
					<? for($i = 0; $i < 2; $i++): ?>
						<li>
							<span class="small-box">
								<a href="<?= $links[$i]['uri'] ?>"><img src="photos/<?= $links[$i]['image'] ?>" alt="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>"></a>
							</span>
							<h2><? $links[$i]['keyword'] ?><?= $links[$i]['title'] ?></h2>
						</li>
					<? endfor; ?>
					</ul>
					<div class="description"><?= $description ?> <?= $keyword ?></div>
				</div>

				<?php echo '<?php require_once "reclame.php"; ?>'; ?>

				<div class=see-also-wrap>
					<div class="see-also">
						<h2>Похожие товары</h2>
						<ul>
							<? $count = rand(2, 5); ?>
							<? for($i = 2; $i < 6; $i++): ?>
								<li>
									<span class="small-box">
										<? if($i < $count): ?>
											<a href="<?= $links[$i]['uri'] ?>"><img src="photos/<?= $links[$i]['image'] ?>" alt="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>"></a>
										<? else: ?>
											<img class="without" src="photos/<?= $links[$i]['image'] ?>" alt="<?= mb_substr(strrchr($links[$i]['uri'], '/'), 1, -4, 'UTF-8') ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>">
										<? endif; ?>
									</span>
									<? if($i < $count): ?>
									<h3><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></h3>
									<? else: ?>
									<span><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></span>
									<? endif; ?>
									<p>от <span class="price"><?= $links[$i]['price'] ?></span>р.</p>
								</li>
							<? endfor; ?>

							<? for($i = 6; $i < 8; $i++): ?>
								<li class="large">
									<span class="large-box">
										<img class="without" src="photos/<?= $links[$i]['image'] ?>" alt="<?= mb_substr(strrchr($links[$i]['uri'], '/'), 1, -4, 'UTF-8') ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>">
									</span>
									<span><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></span>
									<p>от <span class="price"><?= $links[$i]['price'] ?></span>р.</p>
								</li>
							<? endfor; ?>

							<? for($i = 8; $i < count($links); $i++): ?>
							<li>
								<span class="small-box">
									<img class="without" src="photos/<?= $links[$i]['image'] ?>" alt="<?= mb_substr(strrchr($links[$i]['uri'], '/'), 1, -4, 'UTF-8') ?>" title="<?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?>">
								</span>
								<span><?= $links[$i]['keyword'] ?> <?= $links[$i]['title'] ?></span>
								<p>от <span class="price"><?= $links[$i]['price'] ?></span>р.</p>
							</li>
							<? endfor; ?>
						</ul>
					</div>
				</div>
				<div class="comments-wrap">
					<div class="comments">
						<h2>Комментарии</h2>
						<ul class="comment">
							<?php echo '<?php $page = substr("' . $uri . '", 0, -4); if (file_exists("comments/' . $uri . '")) require_once "comments/' . $uri . '"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>';?>
						</ul>
						<span class="feedback">Оставить комментарий</span>

						<form action="<?= $uri ?>" method="post" onsubmit="return checkForm(this)">
							<table>
								<tbody>
									<tr>
										<td class="required">*</td>
										<td><input type="text" name="author" placeholder="Ваше имя"></td>
									</tr>
									<tr>
										<td class="required">*</td>
										<td><textarea name="comment" placeholder="Ваше сообщение"></textarea></td>
									</tr>
									<tr>
										<td class="required">*</td>
										<td><input type="text" name="captcha" maxlength="4" size="4" <?php echo '<?php if(isset($error)) echo "$error"; ?>'; ?>><img src="captcha.php"></td>
									</tr>
									<tr>
										<td colspan="2"><button type="submit" name="submit">Оставить комментарий</button></td>
									</tr>
								</tbody>
							</table>
						</form>
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