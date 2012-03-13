<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitesse-vs-l-1550r.php","гречневая каша в мультиварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitesse-vs-l-1550r.php", $nick, $comment);
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
		<title>гречневая каша в мультиварке Чайник электрический  Vitesse VS-133 1,7л  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="гречневая каша в мультиварке, купить мультиварку в москве, видео мясорубки мулинекс, какой пылесос самый лучший, пылесос thomas отзывы, пылесос bork v500, купить капельную кофеварку, хлебопечка panasonic 256, panasonic мясорубка отзывы, купить хлебопечку bork, мясорубка moulinex 2051, горошница в мультиварке, аэрогриль lentel d101b, сколько стоит соковыжималка,  плов в мультиварке супра">
		<meta name="description" content="гречневая каша в мультиварке Мощный электрический чайник Vitesse VS-133 в стильном металлическом  дизайне вск...">
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
						<a class="photo" href="photos/977fa3b86531dce2d95f99f061a78e23.jpeg" title="гречневая каша в мультиварке Чайник электрический  Vitesse VS-133 1,7л"><img src="photos/977fa3b86531dce2d95f99f061a78e23.jpeg" alt="гречневая каша в мультиварке Чайник электрический  Vitesse VS-133 1,7л" title="гречневая каша в мультиварке Чайник электрический  Vitesse VS-133 1,7л -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-omlette-2340r.php"><img src="photos/668c9122471ae31724b2b2dffa8eafbb.jpeg" alt="купить мультиварку в москве Блендер Braun MR-320 Omlette" title="купить мультиварку в москве Блендер Braun MR-320 Omlette"></a><h2>Блендер Braun MR-320 Omlette</h2></li>
							<li><a href="http://kitchentech.elitno.net/multivarka-redmond-rmcm-2990r.php"><img src="photos/4e7490247492c7ab40236e7400fed0df.jpeg" alt="видео мясорубки мулинекс Мультиварка Redmond RMC-M4503" title="видео мясорубки мулинекс Мультиварка Redmond RMC-M4503"></a><h2>Мультиварка Redmond RMC-M4503</h2></li>
							<li><a href="http://kitchentech.elitno.net/frityurnica-tefal-actifry-fz-7700r.php"><img src="photos/27ce5b772a93a2336124e9a6817baf03.jpeg" alt="какой пылесос самый лучший Фритюрница Tefal Actifry FZ7000" title="какой пылесос самый лучший Фритюрница Tefal Actifry FZ7000"></a><h2>Фритюрница Tefal Actifry FZ7000</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>гречневая каша в мультиварке Чайник электрический  Vitesse VS-133 1,7л</h1>
						<div class="tb"><p>Цена: от <span class="price">1550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19636.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Мощный электрический чайник Vitesse VS-133 в стильном металлическом  дизайне вскипятит 1,7 литра воды буквально за минуту, автоматика выключит  прибор при закипании и не даст включиться без воды, фильтр защитит от накипи, а  шнур удобно хранить в специальном отсеке.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Объем: 1.7 л;</li><li>Мощность:  2200 Вт;</li><li>Тип  нагревательного элемента: закрытая спираль (центральный контакт);</li><li>Материал   корпуса: металл;</li><li>Безопасность блокировка включения без воды;</li><li>Фильтр;</li><li>Индикатор   уровня воды;</li><li>Индикация  включения;</li><li>Отсек для шнура.</li></ul><p><strong>Производитель: КНР</strong><br><strong>Гарантия: 1 год</strong></p> гречневая каша в мультиварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8e4c77fcf3cd711bd8454688ff0f7bc7.jpeg" alt="пылесос thomas отзывы Чайник электрический Vitek VT-1159" title="пылесос thomas отзывы Чайник электрический Vitek VT-1159"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1900r"><span class="title">пылесос thomas отзывы Чайник электрический Vitek VT-1159</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/aad075f22e1967e01f21286f7d5da33a.jpeg" alt="пылесос bork v500 Чайник Vitek VT-1161 с керамическим корпусом" title="пылесос bork v500 Чайник Vitek VT-1161 с керамическим корпусом"><div class="box" page="chaynik-vitek-vt-s-keramicheskim-korpusom-3450r"><span class="title">пылесос bork v500 Чайник Vitek VT-1161 с керамическим корпусом</span><p>от <span class="price">3450</span> руб.</p></div></li>
						<li><img src="photos/65194d520ec7c4edb8d9ad44bcaa26a1.jpeg" alt="купить капельную кофеварку Чайник электрический Maxima MК-105" title="купить капельную кофеварку Чайник электрический Maxima MК-105"><div class="box" page="chaynik-elektricheskiy-maxima-mk-550r"><span class="title">купить капельную кофеварку Чайник электрический Maxima MК-105</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/f5d552f595352df6a881129a694e04b1.jpeg" alt="хлебопечка panasonic 256 Чайник электрический Redmond RK-M112" title="хлебопечка panasonic 256 Чайник электрический Redmond RK-M112"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-990r"><span class="title">хлебопечка panasonic 256 Чайник электрический Redmond RK-M112</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/0f99b07bf5e19dab36f8028f75c48889.jpeg" alt="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735" title="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-450r"><span class="title">panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li class="large"><img src="photos/a6da0d6d0378629b8c50bad1795840bf.jpeg" alt="купить хлебопечку bork Мини весы Tangent KP-104-200" title="купить хлебопечку bork Мини весы Tangent KP-104-200"><div class="box" page="mini-vesy-tangent-kp-1300r"><span class="title">купить хлебопечку bork Мини весы Tangent KP-104-200</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li class="large"><img src="photos/b1991ec2a1e595341a5229ac67f9d69a.jpeg" alt="мясорубка moulinex 2051 Пылесос моющий Thomas Pet and Friends T1 Aquafilter" title="мясорубка moulinex 2051 Пылесос моющий Thomas Pet and Friends T1 Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-pet-and-friends-t-aquafilter-14260r"><span class="title">мясорубка moulinex 2051 Пылесос моющий Thomas Pet and Friends T1 Aquafilter</span><p>от <span class="price">14260</span> руб.</p></div></li>
						<li><img src="photos/6f1dc0aa11d1eda2d816fefb2df4a739.jpeg" alt="горошница в мультиварке Пылесос моющий Thomas Hygiene Plus T2" title="горошница в мультиварке Пылесос моющий Thomas Hygiene Plus T2"><div class="box" page="pylesos-moyuschiy-thomas-hygiene-plus-t-19460r"><span class="title">горошница в мультиварке Пылесос моющий Thomas Hygiene Plus T2</span><p>от <span class="price">19460</span> руб.</p></div></li>
						<li><img src="photos/265e30ba27b80acc7dc11e5947b9e36a.jpeg" alt="аэрогриль lentel d101b Пылесос Vitek VT-1813 красный" title="аэрогриль lentel d101b Пылесос Vitek VT-1813 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-2450r"><span class="title">аэрогриль lentel d101b Пылесос Vitek VT-1813 красный</span><p>от <span class="price">2450</span> руб.</p></div></li>
						<li><img src="photos/b82293cd9bb86384904268699e41b0f9.jpeg" alt="сколько стоит соковыжималка Пылесос Thomas Power Pack 1630 Se" title="сколько стоит соковыжималка Пылесос Thomas Power Pack 1630 Se"><div class="box" page="pylesos-thomas-power-pack-se-7010r"><span class="title">сколько стоит соковыжималка Пылесос Thomas Power Pack 1630 Se</span><p>от <span class="price">7010</span> руб.</p></div></li>
						<li><img src="photos/2fefc92a511ec2a4cec4d67efd9d8253.jpeg" alt="аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter" title="аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter"><div class="box" page="pylesos-thomas-genius-s-eco-aquafilter-9660r"><span class="title">аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter</span><p>от <span class="price">9660</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitesse-vs-l-1550r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitesse-vs-l-1550r.php")) require_once "comments/chaynik-elektricheskiy-vitesse-vs-l-1550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitesse-vs-l-1550r.php" method="post" onsubmit="return checkForm(this)">
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