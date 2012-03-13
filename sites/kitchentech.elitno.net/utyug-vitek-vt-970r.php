<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("utyug-vitek-vt-970r.php","утюг azur");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("utyug-vitek-vt-970r.php", $nick, $comment);
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
		<title>утюг azur Утюг Vitek VT-1235  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="утюг azur, как пользоваться вафельницей, пароварка zelmer, мультиварка паларис, пылесос прессующий, соковыжималка ангел, чайник электрический bork, пылесос thomas отзывы, кофемашина rowenta, тостер philips hd, пылесос витек с аквафильтром, покупать ли мультиварку, кофеварка дольче густо отзывы, принцип работы кофемашины,  самые популярные пылесосы">
		<meta name="description" content="утюг azur Многофункциональный утюг Vitek VT-1235 обладает непревзойденным дизайном и высок...">
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
						<a class="photo" href="photos/d7f319eafa0a03def3b072699daeccdd.jpeg" title="утюг azur Утюг Vitek VT-1235"><img src="photos/d7f319eafa0a03def3b072699daeccdd.jpeg" alt="утюг azur Утюг Vitek VT-1235" title="утюг azur Утюг Vitek VT-1235 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-vitek-vt-serebryanyy-2400r.php"><img src="photos/2caf3fc3f7ad4efe2ed9f3361ac8a098.jpeg" alt="как пользоваться вафельницей Блендер Vitek VT-1465 серебряный" title="как пользоваться вафельницей Блендер Vitek VT-1465 серебряный"></a><h2>Блендер Vitek VT-1465 серебряный</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-menu-bc-hc-4470r.php"><img src="photos/1f1d932d180978b8688482ed678b1aae.jpeg" alt="пароварка zelmer Блендер Braun MR-540 Menu BC HC" title="пароварка zelmer Блендер Braun MR-540 Menu BC HC"></a><h2>Блендер Braun MR-540 Menu BC HC</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-bistro-erp-serebristaya-36999r.php"><img src="photos/9fea21248e7566db156b2a08dbe43d4c.jpeg" alt="мультиварка паларис Автоматическая кофемашина Melitta Caffeo Bistro ERP, серебристая" title="мультиварка паларис Автоматическая кофемашина Melitta Caffeo Bistro ERP, серебристая"></a><h2>Автоматическая кофемашина Melitta Caffeo Bistro ERP, серебристая</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>утюг azur Утюг Vitek VT-1235</h1>
						<div class="tb"><p>Цена: от <span class="price">970</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8343.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Многофункциональный <b>утюг V</b><b>itek</b><b> </b><b>VT</b><b>-1235 </b>обладает непревзойденным дизайном и высокой технологичностью. С ним рутинная процедура глаженья белья превратится в приятное и легкое занятие. В модели предусмотрена плавная регулировка температурных режимов и вертикальное отпаривание белья с паровым ударом 100 г/мин. Защита от накипи и функция самоочистки заметно облегчают уход за устройством. Подошва из нержавеющей стали.</p><p><b>Особенности:</b></p><ul><li>Подошва из нержавеющей стали <li>Плавная регулировка температурных режимов <li>Сухая глажка</li></ul><p><b></b></p><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Паровой удар 100 г/мин <li>Резервуар для воды емкостью 260 мл <li>Вертикальное отпаривание: есть <li>Постоянная передача пара: различные паровые режимы <li>Разбрызгивание: есть <li>Антикапельный клапан: функция \Антикапля\ <li>Система самоочистки: есть <li>Защита от накипи: есть <li>Мощность: 2200 Вт (макс.) <li>Электропитание: 220-240В, 50 Гц</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> утюг azur</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3ee610b7cf277344aaeccda38d02c2fc.jpeg" alt="пылесос прессующий Кухонный комбайн Maxima MFP-0139" title="пылесос прессующий Кухонный комбайн Maxima MFP-0139"><div class="box" page="kuhonnyy-kombayn-maxima-mfp-2190r"><span class="title">пылесос прессующий Кухонный комбайн Maxima MFP-0139</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/21689be9dc7c8e66c7cb248c7b6f5f86.jpeg" alt="соковыжималка ангел Пароварка Maxima MST-1102" title="соковыжималка ангел Пароварка Maxima MST-1102"><div class="box" page="parovarka-maxima-mst-1290r"><span class="title">соковыжималка ангел Пароварка Maxima MST-1102</span><p>от <span class="price">1290</span> руб.</p></div></li>
						<li><img src="photos/cba9fd30236faeadb264f6621c9544f6.jpeg" alt="чайник электрический bork Соковыжималка Maxima MJ-049 + блендер" title="чайник электрический bork Соковыжималка Maxima MJ-049 + блендер"><div class="box" page="sokovyzhimalka-maxima-mj-blender-2190r"><span class="title">чайник электрический bork Соковыжималка Maxima MJ-049 + блендер</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/8e4c77fcf3cd711bd8454688ff0f7bc7.jpeg" alt="пылесос thomas отзывы Чайник электрический Vitek VT-1159" title="пылесос thomas отзывы Чайник электрический Vitek VT-1159"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1900r"><span class="title">пылесос thomas отзывы Чайник электрический Vitek VT-1159</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li class="large"><img src="photos/65ddf318df091ecf01e6a4b331f1492d.jpeg" alt="кофемашина rowenta Чайник электрический Tefal VitesseS BF663440 1,7 л" title="кофемашина rowenta Чайник электрический Tefal VitesseS BF663440 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1950r"><span class="title">кофемашина rowenta Чайник электрический Tefal VitesseS BF663440 1,7 л</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/0e0d48622ca21267b7347abd2a6edbfa.jpeg" alt="тостер philips hd Redmond RK-M120D Чайник электрический" title="тостер philips hd Redmond RK-M120D Чайник электрический"><div class="box" page="redmond-rkmd-chaynik-elektricheskiy-4950r"><span class="title">тостер philips hd Redmond RK-M120D Чайник электрический</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li class="large"><img src="photos/5693cfb54e3dd38a9bb80b0d7d894cdb.jpeg" alt="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)" title="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)"><div class="box" page="otkryvalka-hand-free-opener-can-opener-470r"><span class="title">пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li><img src="photos/0d3ac15ed04e0206963b9102f5ef309b.jpeg" alt="покупать ли мультиварку Парогенератор Lelit PG018" title="покупать ли мультиварку Парогенератор Lelit PG018"><div class="box" page="parogenerator-lelit-pg-24500r"><span class="title">покупать ли мультиварку Парогенератор Lelit PG018</span><p>от <span class="price">24500</span> руб.</p></div></li>
						<li><img src="photos/d360b8a0c7da5c2048584c84686650a7.jpeg" alt="кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)" title="кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-55r"><span class="title">кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)</span><p>от <span class="price">55</span> руб.</p></div></li>
						<li><img src="photos/e961b6308ccdf7d3b60d75fd50d3cfe9.jpeg" alt="принцип работы кофемашины Порошок для сухой чистки ковровых покрытий Dyson Zorb Pouch UK EU" title="принцип работы кофемашины Порошок для сухой чистки ковровых покрытий Dyson Zorb Pouch UK EU"><div class="box" page="poroshok-dlya-suhoy-chistki-kovrovyh-pokrytiy-dyson-zorb-pouch-uk-eu-890r"><span class="title">принцип работы кофемашины Порошок для сухой чистки ковровых покрытий Dyson Zorb Pouch UK EU</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/508d5d97fb58fc95875b08492316946f.jpeg" alt="блендер braun mx 2050 Пылесос Dyson allergy dB DC 29" title="блендер braun mx 2050 Пылесос Dyson allergy dB DC 29"><div class="box" page="pylesos-dyson-allergy-db-dc-19990r"><span class="title">блендер braun mx 2050 Пылесос Dyson allergy dB DC 29</span><p>от <span class="price">19990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("utyug-vitek-vt-970r.php", 0, -4); if (file_exists("comments/utyug-vitek-vt-970r.php")) require_once "comments/utyug-vitek-vt-970r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="utyug-vitek-vt-970r.php" method="post" onsubmit="return checkForm(this)">
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