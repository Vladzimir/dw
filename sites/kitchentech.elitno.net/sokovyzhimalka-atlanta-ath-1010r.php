<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("sokovyzhimalka-atlanta-ath-1010r.php","парогенератор для глажки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("sokovyzhimalka-atlanta-ath-1010r.php", $nick, $comment);
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
		<title>парогенератор для глажки Соковыжималка Atlanta ATH-321  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="парогенератор для глажки, продажа моющих пылесосов, приготовление теста в хлебопечке, парогенератор пээ, отважный тостер скачать, пылесос для сбора стружки, пароварка тефаль цена, пылесос для сухой чистки, бумажные мешки для пылесоса, пароварки в минске, микроволновая печь бош, чем отличаются пылесосы, индукционная плита вредна, куриные грудки в аэрогриле,  робот пылесос deebot">
		<meta name="description" content="парогенератор для глажки Соковыжималка Atlanta ATH-321 зеленого цвета мощностью 280 Вт – простой и доступ...">
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
						<a class="photo" href="photos/d2b0cc36c62095fdc525b7665e50506c.jpeg" title="парогенератор для глажки Соковыжималка Atlanta ATH-321"><img src="photos/d2b0cc36c62095fdc525b7665e50506c.jpeg" alt="парогенератор для глажки Соковыжималка Atlanta ATH-321" title="парогенератор для глажки Соковыжималка Atlanta ATH-321 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-bar-44180r.php"><img src="photos/c9a7a5b3ad41669087cce987bbc510ac.jpeg" alt="продажа моющих пылесосов Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)" title="продажа моющих пылесосов Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-ci-chernaya-65999r.php"><img src="photos/46d0cfd29014c8ec4bfb9c09c292bb23.jpeg" alt="приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная" title="приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная"></a><h2>Автоматическая кофемашина Melitta CAFFEO CI, черная</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-tefal-storeinn-do-3370r.php"><img src="photos/01c2ca770a8a823b21cf869aea4ab4ac.jpeg" alt="парогенератор пээ Кухонный комбайн Tefal Storeinn DO2081" title="парогенератор пээ Кухонный комбайн Tefal Storeinn DO2081"></a><h2>Кухонный комбайн Tefal Storeinn DO2081</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>парогенератор для глажки Соковыжималка Atlanta ATH-321</h1>
						<div class="tb"><p>Цена: от <span class="price">1010</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19674.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Соковыжималка Atlanta ATH-321 зеленого цвета мощностью 280 Вт – простой и доступный прибор в стильном и современном дизайне для приготовления сока в домашних условиях. Если вас не устраивают соки в магазине и вы хотите быть уверенными в качестве и полезности того что пьете, то используйте эту электрическую соковыжималку. Она очень проста и удобна в использовании, очистке и хранении. Она предназначена, для приготовления сока не только из цитрусовых, но также из любых фруктов и ягод. Её габариты, внешний вид и вес позволят идеально вписаться в интерьер любой кухни. Она станет Вашим незаменимым другом. Её корпус выполнен из высокопрочного пластика. </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Для всех видов фруктов <li>Мощность 280 Вт <li>Корпус из пластика <li>В x Ш x Г: 290 x 230 x 190 мм <li>Тип: универсальная <li>2 скорости <li>Комплектация: загрузочный лоток <li>Прорезиненные ножки <li>Резиновые ножки <li>Мотор с низким уровнем шума <li>Съемные контейнеры для жмыха и сока </li></ul><p><strong>Производитель: США</strong></p> парогенератор для глажки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/09368438bc3c0f6d8d6445abd5f08674.jpeg" alt="отважный тостер скачать Микроволновая печь Vitek VT-1693" title="отважный тостер скачать Микроволновая печь Vitek VT-1693"><div class="box"><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-4150r.php"><h3 class="title">отважный тостер скачать Микроволновая печь Vitek VT-1693</h3><p>от <span class="price">4150</span> руб.</p></a></div></li>
						<li><img src="photos/25bac4b45e0e97c9b045c0e23eb08977.jpeg" alt="пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»" title="пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»"><div class="box" page="hlebopechka-binatone-bm-black-s-funkciey-«domashniy-pekar»-4500r"><span class="title">пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/fd3d354d6633b81b504bbc499f3c5989.jpeg" alt="пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый" title="пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый"><div class="box" page="chaynik-elektricheskiy-vitek-vt-zheltyy-1120r"><span class="title">пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый</span><p>от <span class="price">1120</span> руб.</p></div></li>
						<li><img src="photos/92677a851872ec83258943db2c5f8e10.jpeg" alt="пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л" title="пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-reminisce-ki-l-2370r-2"><span class="title">пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л</span><p>от <span class="price">2370</span> руб.</p></div></li>
						<li class="large"><img src="photos/977fa3b86531dce2d95f99f061a78e23.jpeg" alt="бумажные мешки для пылесоса Чайник электрический  Vitesse VS-133 1,7л" title="бумажные мешки для пылесоса Чайник электрический  Vitesse VS-133 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1550r"><span class="title">бумажные мешки для пылесоса Чайник электрический  Vitesse VS-133 1,7л</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li class="large"><img src="photos/70e82a3bba6b14786d891ffcea703881.jpeg" alt="пароварки в минске Электрический чайник Atlanta АТН-611" title="пароварки в минске Электрический чайник Atlanta АТН-611"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-700r"><span class="title">пароварки в минске Электрический чайник Atlanta АТН-611</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li class="large"><img src="photos/66926416069d8d65cb760c1b8131e267.jpeg" alt="микроволновая печь бош Электрический чайник Atlanta АТН-785" title="микроволновая печь бош Электрический чайник Atlanta АТН-785"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-1420r"><span class="title">микроволновая печь бош Электрический чайник Atlanta АТН-785</span><p>от <span class="price">1420</span> руб.</p></div></li>
						<li><img src="photos/da3b8026757740acd31c2844cf598d4a.jpeg" alt="чем отличаются пылесосы Батарейка GP Batteries Super alkaline LR03 24A-BC4" title="чем отличаются пылесосы Батарейка GP Batteries Super alkaline LR03 24A-BC4"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-80r-2"><span class="title">чем отличаются пылесосы Батарейка GP Batteries Super alkaline LR03 24A-BC4</span><p>от <span class="price">80</span> руб.</p></div></li>
						<li><img src="photos/f508d547808db2bce707d6b2135eb926.jpeg" alt="индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter" title="индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-prestige-s-aquafilter-10800r"><span class="title">индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter</span><p>от <span class="price">10800</span> руб.</p></div></li>
						<li><img src="photos/2bd3efe5f6abbadb315d0281a9a3d70f.jpeg" alt="куриные грудки в аэрогриле Пылесос Vitek VT-1810" title="куриные грудки в аэрогриле Пылесос Vitek VT-1810"><div class="box" page="pylesos-vitek-vt-2150r"><span class="title">куриные грудки в аэрогриле Пылесос Vitek VT-1810</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li><img src="photos/63eadb71b95851c3e7f26e5885bd43ae.jpeg" alt="moulinex mk7003 мультиварка Пылесос с аквафильтром Vitek VT-1832" title="moulinex mk7003 мультиварка Пылесос с аквафильтром Vitek VT-1832"><div class="box" page="pylesos-s-akvafiltrom-vitek-vt-6900r"><span class="title">moulinex mk7003 мультиварка Пылесос с аквафильтром Vitek VT-1832</span><p>от <span class="price">6900</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("sokovyzhimalka-atlanta-ath-1010r.php", 0, -4); if (file_exists("comments/sokovyzhimalka-atlanta-ath-1010r.php")) require_once "comments/sokovyzhimalka-atlanta-ath-1010r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="sokovyzhimalka-atlanta-ath-1010r.php" method="post" onsubmit="return checkForm(this)">
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