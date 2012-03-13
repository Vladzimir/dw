<?php echo '<?php
	session_start();
	
	require_once "comments.php";
	
	$go = new Comments(); 
	$go->AutoComment("' . $uri . '","' . $title . '");
	
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
		<title><?=$title?> <?=$preview?>... - <?=$name?></title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="css/styles.css">
		<link type="text/css" rel="stylesheet" href="css/lightbox.css">
		<!--[if IE 7]>
			<link type="text/css" rel="stylesheet" href="css/ie7.css">
		<![endif]-->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/lightbox.min.js"></script>
		<script type="text/javascript" src="js/validator.js"></script>
		<script type="text/javascript" src="lib/lib.js"></script>
		<script type="text/javascript">
			$(function()
			{
				$('div.product a.photo').lightBox();
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
			<div class="content-wrap">
				<div class="content">
					<div class="product">
						<a class="photo" href="photos/<?=$image?>" title="<?=$title?>"><img src="photos/<?=$image?>" alt="<?=$title?>" title="<?=$title?> - <?=$preview?>..."></a>
						<div class="tpb">
							<h1><?=$title?></h1>
							<p>Цена: <span>от <span class="price"><?=$price?></span>p.</span></p>
							<a href="go.php?url=<?=$url?>" target="_blank"><button>Уточнить цену</button></a>
							<img class="admitad" src="<?=$admitad?>">
						</div>
						<ul>
						<?php for($i = 0; $i < 2; $i++): ?>
						<?php $symbols = rand(50, 70); ?>
							<li>
								<a href="<?=$links[$i]['uri']?>"><img src="photos/<?=$links[$i]['image']?>" alt="<?=$links[$i]['title']?>" title="<?=$links[$i]['title']?> - <?=mb_strcut(strip_tags($links[$i]['description']), 0, $symbols, 'UTF-8');?>..."></a>
								<h2><?=$links[$i]['title']?></h2>
							</li>
						<?php endfor; ?>
						</ul>
						<div class="description"><?=$description;?></div>
					</div>
					
					<?php echo '<?php require_once "reclame.php"; ?>'; ?>
					
					<div class="see-also">
						<h2>Похожие товары</h2>
						<ul>
							<?php $count = rand(2, 5); ?>
							<?php for($i = 2; $i < 6; $i++): ?>
							<?php $symbols = rand(50, 70); ?>
								<li>
								<?php if($i < $count): ?>
									<h3><?=$links[$i]['title']?></h3>
									<a href="<?=$links[$i]['uri']?>"><img src="photos/<?=$links[$i]['image']?>" alt="<?=$links[$i]['title']?>" title="<?=$links[$i]['title']?> - <?=mb_strcut(strip_tags($links[$i]['description']), 0, $symbols, 'UTF-8');?>..."></a>
								<?php else: ?>
									<span><?=$links[$i]['title']?></span>
									<img class="without" src="photos/<?=$links[$i]['image']?>" alt="<?=substr($links[$i]['uri'], strrpos($links[$i]['uri'], '/')+1, -4)?>" title="<?=$links[$i]['title']?> - <?=mb_strcut(strip_tags($links[$i]['description']), 0, $symbols, 'UTF-8');?>...">
								<?php endif; ?>
									<p><span>от <span class="price"><?=$links[$i]['price']?></span>p.</span></p>
								</li>
							<?php endfor; ?>
							
							<?php for($i = 6; $i < 8; $i++): ?>
							<?php $symbols = rand(50, 70); ?>
								<li class="large">
									<span><?=$links[$i]['title']?></span>
									<img class="without" src="photos/<?=$links[$i]['image']?>" alt="<?=substr($links[$i]['uri'], strrpos($links[$i]['uri'], '/')+1, -4)?>" title="<?=$links[$i]['title']?> - <?=mb_strcut(strip_tags($links[$i]['description']), 0, $symbols, 'UTF-8');?>...">
									<p><span>от <span class="price"><?=$links[$i]['price']?></span>p.</span></p>
								</li>
							<?php endfor; ?>
								
							<?php for($i = 8; $i < count($links); $i++): ?>
							<?php $symbols = rand(50, 70); ?>
							<li>
								<span><?=$links[$i]['title']?></span>
								<img class="without" src="photos/<?=$links[$i]['image']?>" alt="<?=substr($links[$i]['uri'], strrpos($links[$i]['uri'], '/')+1, -4)?>" title="<?=$links[$i]['title']?> - <?=mb_strcut(strip_tags($links[$i]['description']), 0, $symbols, 'UTF-8');?>...">
								<p><span>от <span class="price"><?=$links[$i]['price']?></span>p.</span></p>
							</li>
							<?php endfor; ?>
						</ul>
					</div>
					<div class="comments">
						<h2>Комментарии</h2>
						<ul>
							<?php echo '<?php $page = substr("' . $uri . '", 0, -4); if (file_exists("comments/' . $uri . '")) require_once "comments/' . $uri . '"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>';?>
						</ul>

						<form action="<?=$uri?>" method="post" onsubmit="return checkForm(this)">
							<table>
								<tbody>
									<tr>
										<td colspan="2"><span class="feedback">Оставте свой отзыв</span></td>
									</tr>
									<tr>
										<td class="required">*</td>
										<td><input type="text" name="author" placeholder="Ваше имя"></td>
									</tr>
									<tr>
										<td class="required">*</td>
										<td><textarea name="comment" placeholder="Ваше сообщение" rows="5"></textarea></td>
									</tr>
									<tr>
										<td colspan="2"><img src="captcha.php"><input type="text" name="captcha" <?php echo '<?php if(isset($error)) echo "$error"; ?>'; ?>> <button type="submit" name="submit">Отправить</button></td>
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