<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mikser-atlanta-ath-510r.php","микроволновые печи бош");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mikser-atlanta-ath-510r.php", $nick, $comment);
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
		<title>микроволновые печи бош Миксер Atlanta ATH-280  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="микроволновые печи бош, мешки для пылесоса vax, промышленный пылесос цена, запчасти для утюгов, щетка для пылесоса electrolux, утюг philips 4420, соковыжималка филипс, блендер braun mr 530 ca, хлебопечка германия, пылесос витек с аквафильтром, какие лучше микроволновые печи, как выбрать кофеварку, кофеварка espresso, пароварка chicco,  запчасти для пароварки">
		<meta name="description" content="микроволновые печи бош Ручной миксер Atlanta ATH-280 – это хорошее качество, современный дизайн, удобст...">
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
						<a class="photo" href="photos/90a7d250cd580e7f7dad10ef41c4fe3e.jpeg" title="микроволновые печи бош Миксер Atlanta ATH-280"><img src="photos/90a7d250cd580e7f7dad10ef41c4fe3e.jpeg" alt="микроволновые печи бош Миксер Atlanta ATH-280" title="микроволновые печи бош Миксер Atlanta ATH-280 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-2770r.php"><img src="photos/4a49eabd132fa073a575c3edfbe7b80b.jpeg" alt="мешки для пылесоса vax Микроволновая печь Vitek VT-1681" title="мешки для пылесоса vax Микроволновая печь Vitek VT-1681"></a><h2>Микроволновая печь Vitek VT-1681</h2></li>
							<li><a href="http://kitchentech.elitno.net/yogurtnica-moulinex-jc-1650r.php"><img src="photos/5b5325f46d1563794a5b9b1bbec3af49.jpeg" alt="промышленный пылесос цена Йогуртница Moulinex JC1" title="промышленный пылесос цена Йогуртница Moulinex JC1"></a><h2>Йогуртница Moulinex JC1</h2></li>
							<li><a href="http://kitchentech.elitno.net/multivarka-redmond-rmcm-4490r.php"><img src="photos/785647aa8682372d107781ac6f9a4974.jpeg" alt="запчасти для утюгов Мультиварка Redmond RMC-M4504" title="запчасти для утюгов Мультиварка Redmond RMC-M4504"></a><h2>Мультиварка Redmond RMC-M4504</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>микроволновые печи бош Миксер Atlanta ATH-280</h1>
						<div class="tb"><p>Цена: от <span class="price">510</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19608.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Ручной миксер Atlanta ATH-280 – это хорошее качество, современный дизайн, удобство и комфорт. С таким миксером вы откроете для себя много новых разнообразных блюд. Он компактный, поэтому не займет много места на кухне. Имеет 5 скоростей и кнопку для легкого извлечения насадок. Обладает мощностью 200 Вт. Поставляется с двумя комплектами металлических насадок.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>тип: ручной <li>мощность: 200 Вт <li>5 скоростей <li>кнопка легкого извлечения насадок <li>2 комплекта металлических насадок <li>кнопка легкого извлечения насадок </li></ul><p><strong>Производитель: США</strong></p> микроволновые печи бош</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/74bbce31ddb28c5063f247363080794a.jpeg" alt="щетка для пылесоса electrolux Чаша для мультиварки Redmond IPRMC-M4502" title="щетка для пылесоса electrolux Чаша для мультиварки Redmond IPRMC-M4502"><div class="box"><a href="http://kitchentech.elitno.net/chasha-dlya-multivarki-redmond-iprmcm-990r.php"><h3 class="title">щетка для пылесоса electrolux Чаша для мультиварки Redmond IPRMC-M4502</h3><p>от <span class="price">990</span> руб.</p></a></div></li>
						<li><img src="photos/8e06126566eae5ed349414b3b9cfd8ea.jpeg" alt="утюг philips 4420 Мультиварка Maruchi RB-FC46" title="утюг philips 4420 Мультиварка Maruchi RB-FC46"><div class="box" page="multivarka-maruchi-rbfc-2500r"><span class="title">утюг philips 4420 Мультиварка Maruchi RB-FC46</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/e3e70209e76fc59518f6178cf23e1266.jpeg" alt="соковыжималка филипс Тостер Redmond RT-M401" title="соковыжималка филипс Тостер Redmond RT-M401"><div class="box" page="toster-redmond-rtm-1850r"><span class="title">соковыжималка филипс Тостер Redmond RT-M401</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/aca42b878e4277b1730672f4f845a597.jpeg" alt="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black" title="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black"><div class="box" page="chaynik-elektricheskiy-binatone-nk-black-1200r"><span class="title">блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/b3fae48615963478f00e0c05f3baa485.jpeg" alt="хлебопечка германия Электрический чайник  Zauber R-380" title="хлебопечка германия Электрический чайник  Zauber R-380"><div class="box" page="elektricheskiy-chaynik-zauber-r-1830r"><span class="title">хлебопечка германия Электрический чайник  Zauber R-380</span><p>от <span class="price">1830</span> руб.</p></div></li>
						<li class="large"><img src="photos/5693cfb54e3dd38a9bb80b0d7d894cdb.jpeg" alt="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)" title="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)"><div class="box" page="otkryvalka-hand-free-opener-can-opener-470r"><span class="title">пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li class="large"><img src="photos/27a529eb06db7d79aab6d5d214852413.jpeg" alt="какие лучше микроволновые печи Minamoto R03 (AAA)" title="какие лучше микроволновые печи Minamoto R03 (AAA)"><div class="box" page="minamoto-r-aaa-4r"><span class="title">какие лучше микроволновые печи Minamoto R03 (AAA)</span><p>от <span class="price">4</span> руб.</p></div></li>
						<li><img src="photos/022434340143cfbbf0a87e93fd1fc9c0.jpeg" alt="как выбрать кофеварку Щетка для собак Dyson Groom Retail" title="как выбрать кофеварку Щетка для собак Dyson Groom Retail"><div class="box" page="schetka-dlya-sobak-dyson-groom-retail-1690r"><span class="title">как выбрать кофеварку Щетка для собак Dyson Groom Retail</span><p>от <span class="price">1690</span> руб.</p></div></li>
						<li><img src="photos/c97072b686d00422f9e5b9490c04caab.jpeg" alt="кофеварка espresso Пылесос Thomas Inox 1545 Sfe" title="кофеварка espresso Пылесос Thomas Inox 1545 Sfe"><div class="box" page="pylesos-thomas-inox-sfe-13350r"><span class="title">кофеварка espresso Пылесос Thomas Inox 1545 Sfe</span><p>от <span class="price">13350</span> руб.</p></div></li>
						<li><img src="photos/2ff9a2b5a9fe0fab492b8e041d2f7740.jpeg" alt="пароварка chicco Пылесос Thomas Inox 1560 Sf" title="пароварка chicco Пылесос Thomas Inox 1560 Sf"><div class="box" page="pylesos-thomas-inox-sf-17820r"><span class="title">пароварка chicco Пылесос Thomas Inox 1560 Sf</span><p>от <span class="price">17820</span> руб.</p></div></li>
						<li><img src="photos/c760072d30fa7e68aaaf26403c36f72a.jpeg" alt="соковыжималка сатурн Пылесос Thomas Genius S2 Aquafilter" title="соковыжималка сатурн Пылесос Thomas Genius S2 Aquafilter"><div class="box" page="pylesos-thomas-genius-s-aquafilter-10840r"><span class="title">соковыжималка сатурн Пылесос Thomas Genius S2 Aquafilter</span><p>от <span class="price">10840</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mikser-atlanta-ath-510r.php", 0, -4); if (file_exists("comments/mikser-atlanta-ath-510r.php")) require_once "comments/mikser-atlanta-ath-510r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mikser-atlanta-ath-510r.php" method="post" onsubmit="return checkForm(this)">
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