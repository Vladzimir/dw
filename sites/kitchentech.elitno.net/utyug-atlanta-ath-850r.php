<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("utyug-atlanta-ath-850r.php","книга аэрогриль");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("utyug-atlanta-ath-850r.php", $nick, $comment);
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
		<title>книга аэрогриль Утюг Atlanta ATH-493  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="книга аэрогриль, сервисный центр пылесосов, чоппер измельчитель, миксер bosch mfq 4020, как приготовить в аэрогриле овощи, пароварка vitek отзывы, пылесос lg с контейнером, принцип микроволновой печи, ребра в аэрогриле, утюг с парогенератором delonghi, clatronic хлебопечка, тесто в хлебопечке kenwood, желтый пылесос, кубань 8 вафельница,  утюг в туле">
		<meta name="description" content="книга аэрогриль Утюг Atlanta ATH-493 с пароувлажнителем мощностью 1800 Вт – стильный прибор бело...">
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
						<a class="photo" href="photos/a104c0da49f608c08942c0fcd2c31398.jpeg" title="книга аэрогриль Утюг Atlanta ATH-493"><img src="photos/a104c0da49f608c08942c0fcd2c31398.jpeg" alt="книга аэрогриль Утюг Atlanta ATH-493" title="книга аэрогриль Утюг Atlanta ATH-493 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-atlanta-atn-550r.php"><img src="photos/7911abad6905c53ed2ad855d9cc4e2e1.jpeg" alt="сервисный центр пылесосов Блендер Atlanta АТН-338" title="сервисный центр пылесосов Блендер Atlanta АТН-338"></a><h2>Блендер Atlanta АТН-338</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-blender-s-aksessuarami-belyy-bodum-bistro-keuro-3780r.php"><img src="photos/679fdf23622402a201c5b519c3350ce4.jpeg" alt="чоппер измельчитель Электрический блендер с аксессуарами белый Bodum Bistro K11179-913EURO" title="чоппер измельчитель Электрический блендер с аксессуарами белый Bodum Bistro K11179-913EURO"></a><h2>Электрический блендер с аксессуарами белый Bodum Bistro K11179-913EURO</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-s-grilem-moulinex-mw-l-serebro-4430r.php"><img src="photos/30122165cbc4e4755f8a550e028ecb69.jpeg" alt="миксер bosch mfq 4020 Микроволновая печь с грилем Moulinex MW221031 20 л, серебро" title="миксер bosch mfq 4020 Микроволновая печь с грилем Moulinex MW221031 20 л, серебро"></a><h2>Микроволновая печь с грилем Moulinex MW221031 20 л, серебро</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>книга аэрогриль Утюг Atlanta ATH-493</h1>
						<div class="tb"><p>Цена: от <span class="price">850</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19757.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Утюг Atlanta ATH-493 с пароувлажнителем мощностью 1800 Вт – стильный прибор бело-зеленого цвета для глажки. Он имеет удобный зауженный носик и долговечную керамическую подошву. Кроме того, он имеет функцию парового удара. Иногда для проглаживания сильно пересушенных или толстых тканей не хватает даже максимальной модности постоянного пара. Специально для таких случаев в этом утюге есть паровой удар. При нажатии на кнопку происходит мощная подача пара, находящегося под высоким давлением. Сильный удар горячего пара размягчает волокна и быстро разглаживает даже глубокие складки.</p><p>Характеристики:</p><ul type=disc><li>Сухой или паровой режим глажения <li>Прозрачный резервуар для воды  <li>Функция увлажнения  <li>Дополнительная подача пара <li>Изделие сертифицировано Госстандартом РФ <li>Соответствует европейским нормам безопасности  <li>Мощность 1800 Вт <li>230 В, 50 Гц <li>29.5 x 14 x 16.5 см </li></ul><p><strong>Производитель: США</strong></p> книга аэрогриль</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/86f0983e51433a2aeee203a14fbe12b2.jpeg" alt="как приготовить в аэрогриле овощи A&D SF-15KC Торговые весы до 15кг" title="как приготовить в аэрогриле овощи A&D SF-15KC Торговые весы до 15кг"><div class="box"><a href="http://kitchentech.elitno.net/ad-sfkc-torgovye-vesy-do-kg-10800r.php"><h3 class="title">как приготовить в аэрогриле овощи A&D SF-15KC Торговые весы до 15кг</h3><p>от <span class="price">10800</span> руб.</p></a></div></li>
						<li><img src="photos/8f284ff93a3e936b77bc58d13a970910.jpeg" alt="пароварка vitek отзывы Безмен цифровой до 20 кг RST PRO 08075" title="пароварка vitek отзывы Безмен цифровой до 20 кг RST PRO 08075"><div class="box" page="bezmen-cifrovoy-do-kg-rst-pro-1600r"><span class="title">пароварка vitek отзывы Безмен цифровой до 20 кг RST PRO 08075</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/d78a5eb7926a57e3a6daeb54a8fc1659.jpeg" alt="пылесос lg с контейнером Соковыжималка Moulinex JU599A3E Juice Machine" title="пылесос lg с контейнером Соковыжималка Moulinex JU599A3E Juice Machine"><div class="box" page="sokovyzhimalka-moulinex-juae-juice-machine-4300r"><span class="title">пылесос lg с контейнером Соковыжималка Moulinex JU599A3E Juice Machine</span><p>от <span class="price">4300</span> руб.</p></div></li>
						<li><img src="photos/3db103a42b99a0a770887670f28f5ba2.jpeg" alt="принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л" title="принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л"><div class="box" page="chaynik-elektricheskiy-moulinex-by-l-1950r"><span class="title">принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/1a5872ce4a924d71272e9d8aacab1a34.jpeg" alt="ребра в аэрогриле Чайник электрический Maxima MК-103" title="ребра в аэрогриле Чайник электрический Maxima MК-103"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r"><span class="title">ребра в аэрогриле Чайник электрический Maxima MК-103</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/89368a4d8b53495528b047bf143af4e5.jpeg" alt="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623" title="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-690r"><span class="title">утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li class="large"><img src="photos/1bbdc32e5167c3f95a77515679aaf9df.jpeg" alt="clatronic хлебопечка Электрический чайник Atlanta АТН-700" title="clatronic хлебопечка Электрический чайник Atlanta АТН-700"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-1280r"><span class="title">clatronic хлебопечка Электрический чайник Atlanta АТН-700</span><p>от <span class="price">1280</span> руб.</p></div></li>
						<li><img src="photos/4c770d02fca0640e0452b9df7c46a9e0.jpeg" alt="тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)" title="тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbbshaah-1550r"><span class="title">тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/d53c2ed7dc8f0cab982dc0b1633d551f.jpeg" alt="желтый пылесос Пылесос Atlanta АТН-3400" title="желтый пылесос Пылесос Atlanta АТН-3400"><div class="box" page="pylesos-atlanta-atn-3400r"><span class="title">желтый пылесос Пылесос Atlanta АТН-3400</span><p>от <span class="price">3400</span> руб.</p></div></li>
						<li><img src="photos/4fbb8e89e08e4c6965da2c5a458072d3.jpeg" alt="кубань 8 вафельница Пылесос Vitek VT-1836 красный" title="кубань 8 вафельница Пылесос Vitek VT-1836 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-3600r"><span class="title">кубань 8 вафельница Пылесос Vitek VT-1836 красный</span><p>от <span class="price">3600</span> руб.</p></div></li>
						<li><img src="photos/daa26c20552b4c54039ad44aa7ab957b.jpeg" alt="кофемашина philips hd 8745 Пылесос Thomas Inox 1530" title="кофемашина philips hd 8745 Пылесос Thomas Inox 1530"><div class="box" page="pylesos-thomas-inox-6310r"><span class="title">кофемашина philips hd 8745 Пылесос Thomas Inox 1530</span><p>от <span class="price">6310</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("utyug-atlanta-ath-850r.php", 0, -4); if (file_exists("comments/utyug-atlanta-ath-850r.php")) require_once "comments/utyug-atlanta-ath-850r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="utyug-atlanta-ath-850r.php" method="post" onsubmit="return checkForm(this)">
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