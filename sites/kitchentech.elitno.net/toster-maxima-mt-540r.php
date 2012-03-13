<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("toster-maxima-mt-540r.php","блендер braun mr 570 patisserie");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("toster-maxima-mt-540r.php", $nick, $comment);
		}
		else
		{
			$error = "class=\"error\"";
		}
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>блендер braun mr 570 patisserie Тостер Maxima MT-014  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="блендер braun mr 570 patisserie, трубочки в вафельнице, блендер philips hr1615, микроволновая печь рейтинг, соковыжималка profi cook, кухонный комбайн фото, джем в хлебопечке рецепт, пылесос с водяным фильтром samsung, тканевый мешок для пылесоса, фиксики смотреть пылесос, хлебопечка moulinex ow 6002, кофеварка tefal express, как пользоваться мультиваркой, кофемашина philips hd 8745,  мультиварка кенвуд">
		<meta name="description" content="блендер braun mr 570 patisserie Тостер Maxima,  мощностью 700 Вт, позволит Вам быстро и без особых хлопот пригот...">
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
			<?php require_once "header.php"; ?>			<!-- [END OF HEADER] -->
			<!-- [CONTENT] -->
			<div class="content">
				<div class="product">
					<div class="ls">
						<a class="photo" href="photos/76b45e609e76d0f51a02bc816db807a1.jpeg" title="блендер braun mr 570 patisserie Тостер Maxima MT-014"><img src="photos/76b45e609e76d0f51a02bc816db807a1.jpeg" alt="блендер braun mr 570 patisserie Тостер Maxima MT-014" title="блендер braun mr 570 patisserie Тостер Maxima MT-014 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-tefal-prepline-hb-1860r.php"><img src="photos/6fb862aaf5b6b711f34b689e2d685231.jpeg" alt="трубочки в вафельнице Блендер погружной Tefal Prepline HB7151" title="трубочки в вафельнице Блендер погружной Tefal Prepline HB7151"></a><h2>Блендер погружной Tefal Prepline HB7151</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-cc-4920r.php"><img src="photos/0c50b7e39e50ca19abd7fa5476ddc943.jpeg" alt="блендер philips hr1615 Блендер Braun MR-730 CC" title="блендер philips hr1615 Блендер Braun MR-730 CC"></a><h2>Блендер Braun MR-730 CC</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemashina-nivona-nicr-caferomatica-29100r.php"><img src="photos/2431167ee356158b218044f94d3599e4.jpeg" alt="микроволновая печь рейтинг Кофемашина Nivona NICR630 CafeRomatica" title="микроволновая печь рейтинг Кофемашина Nivona NICR630 CafeRomatica"></a><h2>Кофемашина Nivona NICR630 CafeRomatica</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>блендер braun mr 570 patisserie Тостер Maxima MT-014</h1>
						<div class="tb"><p>Цена: от <span class="price">540</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20640.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Тостер Maxima,  мощностью 700 Вт, позволит Вам быстро и без особых хлопот приготовить вкусный  завтрак. При помощи механического регулятора, Вы всегда сможете отрегулировать  степень поджаристости тоста по своему вкусу. Тостер выполнен из пластика. В  устройстве предусмотрено два отделения для тостов и поддон для крошек,  упрощающий уход за тостером. В целях безопасности в устройстве предусмотрен  фиксатор механизма блокировки.</p><p><br><strong>Характеристики:</strong></p><ul><li>Цвет: черный / белый;<br></li><li>Мощность: 700 Вт;</li><li>Количество отделений: 2;</li><li>Количество тостов: 2;</li><li>Тип управления: механическое;</li><li>Регулировка степени поджаривания;</li><li>Поддон для крошек;</li><li>Материал корпуса: пластик;</li><li>Отсек для сетевого шнура;</li><li>Фиксатор механизма блокировки.</li></ul><p><strong>Производитель:</strong><strong> Maxima (Китай)</strong><br><strong>Изготовитель: Китай</strong><br><strong>Гарантия: 12 месяцев</strong></p> блендер braun mr 570 patisserie</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b3484386aa5de93840c27e2c8187adfa.jpeg" alt="соковыжималка profi cook Мыло-поглотитель неприятных запахов Vitesse VS-1293" title="соковыжималка profi cook Мыло-поглотитель неприятных запахов Vitesse VS-1293"><div class="box"><a href="http://kitchentech.elitno.net/mylopoglotitel-nepriyatnyh-zapahov-vitesse-vs-530r.php"><h3 class="title">соковыжималка profi cook Мыло-поглотитель неприятных запахов Vitesse VS-1293</h3><p>от <span class="price">530</span> руб.</p></a></div></li>
						<li><img src="photos/a778f38f56b1abc67bee8e49c9772547.jpeg" alt="кухонный комбайн фото Микроволновая печь Vitek VT-1691" title="кухонный комбайн фото Микроволновая печь Vitek VT-1691"><div class="box" page="mikrovolnovaya-pech-vitek-vt-2750r"><span class="title">кухонный комбайн фото Микроволновая печь Vitek VT-1691</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/8dac9aeadde6a6d95b71abb890265199.jpeg" alt="джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB" title="джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB"><div class="box" page="mikser-atlanta-ath-wb-630r"><span class="title">джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/50ba0f1ba21fa51f038f164ecd16fe2c.jpeg" alt="пылесос с водяным фильтром samsung Мультиварка электрическая ATLANTA АТН-592" title="пылесос с водяным фильтром samsung Мультиварка электрическая ATLANTA АТН-592"><div class="box" page="multivarka-elektricheskaya-atlanta-atn-3490r"><span class="title">пылесос с водяным фильтром samsung Мультиварка электрическая ATLANTA АТН-592</span><p>от <span class="price">3490</span> руб.</p></div></li>
						<li class="large"><img src="photos/56cb596182a024c5be877e612e6462d8.jpeg" alt="тканевый мешок для пылесоса Пароварка Atlanta АТН-605" title="тканевый мешок для пылесоса Пароварка Atlanta АТН-605"><div class="box" page="parovarka-atlanta-atn-1050r-2"><span class="title">тканевый мешок для пылесоса Пароварка Atlanta АТН-605</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li class="large"><img src="photos/acf412ca70279cda1dfad07d522f7e3c.jpeg" alt="фиксики смотреть пылесос Пароварка Vitesse VS-507" title="фиксики смотреть пылесос Пароварка Vitesse VS-507"><div class="box" page="parovarka-vitesse-vs-1290r"><span class="title">фиксики смотреть пылесос Пароварка Vitesse VS-507</span><p>от <span class="price">1290</span> руб.</p></div></li>
						<li class="large"><img src="photos/014eea2e4ace248a80b3ce72354f4315.jpeg" alt="хлебопечка moulinex ow 6002 Пароварка Maxima MST-0511" title="хлебопечка moulinex ow 6002 Пароварка Maxima MST-0511"><div class="box" page="parovarka-maxima-mst-760r"><span class="title">хлебопечка moulinex ow 6002 Пароварка Maxima MST-0511</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/7c9f70f739cded90e6e6da5bcbc9e960.jpeg" alt="кофеварка tefal express Чайник электрический Vitek VT-1138 серебряный" title="кофеварка tefal express Чайник электрический Vitek VT-1138 серебряный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-serebryanyy-1910r"><span class="title">кофеварка tefal express Чайник электрический Vitek VT-1138 серебряный</span><p>от <span class="price">1910</span> руб.</p></div></li>
						<li><img src="photos/1e85a6f32a0f78265e06897930cad48c.jpeg" alt="как пользоваться мультиваркой Электрический чайник Atlanta АТН-660" title="как пользоваться мультиваркой Электрический чайник Atlanta АТН-660"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-650r"><span class="title">как пользоваться мультиваркой Электрический чайник Atlanta АТН-660</span><p>от <span class="price">650</span> руб.</p></div></li>
						<li><img src="photos/daa26c20552b4c54039ad44aa7ab957b.jpeg" alt="кофемашина philips hd 8745 Пылесос Thomas Inox 1530" title="кофемашина philips hd 8745 Пылесос Thomas Inox 1530"><div class="box" page="pylesos-thomas-inox-6310r"><span class="title">кофемашина philips hd 8745 Пылесос Thomas Inox 1530</span><p>от <span class="price">6310</span> руб.</p></div></li>
						<li><img src="photos/ab56eb3e56d0f0d6cbcdc267b86f71a7.jpeg" alt="панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257" title="панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257"><div class="box" page="utyug-parovoy-tefal-aquaspeed-ultracord-fv-2800r"><span class="title">панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257</span><p>от <span class="price">2800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("toster-maxima-mt-540r.php", 0, -4); if (file_exists("comments/toster-maxima-mt-540r.php")) require_once "comments/toster-maxima-mt-540r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="toster-maxima-mt-540r.php" method="post" onsubmit="return checkForm(this)">
						<p><textarea name="comment" placeholder="Ваше сообщение здесь"></textarea></p>
						<p><input type="text" name="author" placeholder="*Имя"><input type="text" name="captcha" placeholder="*Код" <?php if(isset($error)) echo "$error"; ?>><img class="captcha" src="captcha.php" alt=""><input type="submit"></p>
					</form>
				</div>
			</div>
			<!-- [END OF CONTENT] -->

			<!-- [FOOTER] -->
			 <?php require_once "footer.php"; ?>			<!-- [END OF FOOTER] -->
		</div>
		<!-- [END OF CONTAINTER] -->
	</body>
</html>