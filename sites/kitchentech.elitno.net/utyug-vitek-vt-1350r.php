<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("utyug-vitek-vt-1350r.php","преимущества пароварки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("utyug-vitek-vt-1350r.php", $nick, $comment);
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
		<title>преимущества пароварки Утюг Vitek VT-1255  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="преимущества пароварки, купить пароварку в москве, кофеварка френч пресс, турка для кофе купить, приготовление пищи в пароварке, мешки для пылесоса цена, манник в мультиварке панасоник, как приготовить мясо в пароварке, купить хорошую кофеварку, мясорубка binatone, кухня микроволновой печи, слоеное тесто в аэрогриле, чем отличаются пылесосы, бетоносмеситель миксер,  дозиметр радиоактивности">
		<meta name="description" content="преимущества пароварки Многофункциональный утюг Vitek VT-1255 с функцией вертикального отпаривания прек...">
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
						<a class="photo" href="photos/dad55c3e820faa7adb3396e1681091d7.jpeg" title="преимущества пароварки Утюг Vitek VT-1255"><img src="photos/dad55c3e820faa7adb3396e1681091d7.jpeg" alt="преимущества пароварки Утюг Vitek VT-1255" title="преимущества пароварки Утюг Vitek VT-1255 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-binatone-nb-black-1750r.php"><img src="photos/33b7a9c07b1ba187d5807d0b266c7389.jpeg" alt="купить пароварку в москве Блендер Binatone NB-7703 Black" title="купить пароварку в москве Блендер Binatone NB-7703 Black"></a><h2>Блендер Binatone NB-7703 Black</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-redmond-rfp-5390r.php"><img src="photos/eeb9eab6db603b9616a92fc025537c6c.jpeg" alt="кофеварка френч пресс Кухонный комбайн Redmond  RFP-3903" title="кофеварка френч пресс Кухонный комбайн Redmond  RFP-3903"></a><h2>Кухонный комбайн Redmond  RFP-3903</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-russell-hobbs-desire-art-2990r.php"><img src="photos/8acd8b43677456777a29a4a8d53c0c0b.jpeg" alt="турка для кофе купить Блендер Russell Hobbs Desire, арт. 18510-56" title="турка для кофе купить Блендер Russell Hobbs Desire, арт. 18510-56"></a><h2>Блендер Russell Hobbs Desire, арт. 18510-56</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>преимущества пароварки Утюг Vitek VT-1255</h1>
						<div class="tb"><p>Цена: от <span class="price">1350</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8378.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Многофункциональный <b>утюг V</b><b>itek</b><b> VT-1255 </b>с функцией вертикального отпаривания прекрасно подойдет для глажки ваших вещей. Подошва из нержавеющей стали легко скользить по ткани, а различные паровые режимы позволять разгладить любые складочки за считанные секунды. В модели также предусмотрена защита от накипи и система самоочистки.</p><p><b>Особенности:</b></p><p><b></b></p><ul><li>Подошва из нержавеющей стали <li>Сухая глажка</li></ul><p><b></b></p><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Паровой удар 100 г/мин <li>Вертикальное отпаривание: есть <li>Постоянная передача пара: различные паровые режимы <li>Разбрызгивание: есть <li>Антикапельный клапан: функция \Антикапля\ <li>Система самоочистки: есть <li>Защита от накипи: есть <li>Мощность: 2000Вт ( макс) <li>Электропитание: 220-240В, 50 Гц</li></ul><p><b></b></p><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> преимущества пароварки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7d364e47f91214e45b2e2f0dc4bfa3a6.jpeg" alt="приготовление пищи в пароварке Кофемашина Philips Saeco HD 8944 09" title="приготовление пищи в пароварке Кофемашина Philips Saeco HD 8944 09"><div class="box"><a href="http://kitchentech.elitno.net/kofemashina-philips-saeco-hd-67000r.php"><h3 class="title">приготовление пищи в пароварке Кофемашина Philips Saeco HD 8944 09</h3><p>от <span class="price">67000</span> руб.</p></a></div></li>
						<li><img src="photos/ebf4f38956f30ceea82d2b188167ae53.jpeg" alt="мешки для пылесоса цена Электрическая кофемолка Bodum BISTRO 10903-565EURO лимонная" title="мешки для пылесоса цена Электрическая кофемолка Bodum BISTRO 10903-565EURO лимонная"><div class="box" page="elektricheskaya-kofemolka-bodum-bistro-euro-limonnaya-5730r"><span class="title">мешки для пылесоса цена Электрическая кофемолка Bodum BISTRO 10903-565EURO лимонная</span><p>от <span class="price">5730</span> руб.</p></div></li>
						<li><img src="photos/9ea12f3963a660c25496afb70c846d6f.jpeg" alt="манник в мультиварке панасоник Электрическая ножевая кофемолка Bodum BISTRO 11160-913EURO белая" title="манник в мультиварке панасоник Электрическая ножевая кофемолка Bodum BISTRO 11160-913EURO белая"><div class="box" page="elektricheskaya-nozhevaya-kofemolka-bodum-bistro-euro-belaya-1830r"><span class="title">манник в мультиварке панасоник Электрическая ножевая кофемолка Bodum BISTRO 11160-913EURO белая</span><p>от <span class="price">1830</span> руб.</p></div></li>
						<li><img src="photos/f500afce51554d4e8ccaedd379d383c4.jpeg" alt="как приготовить мясо в пароварке Рисоварка электрическая ATLANTA АТН-590" title="как приготовить мясо в пароварке Рисоварка электрическая ATLANTA АТН-590"><div class="box" page="risovarka-elektricheskaya-atlanta-atn-1500r"><span class="title">как приготовить мясо в пароварке Рисоварка электрическая ATLANTA АТН-590</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/b9289aece9f2ba28fb98a0e04eb84d01.jpeg" alt="купить хорошую кофеварку Мясорубка электрическая Vitek VT-1674" title="купить хорошую кофеварку Мясорубка электрическая Vitek VT-1674"><div class="box" page="myasorubka-elektricheskaya-vitek-vt-3500r"><span class="title">купить хорошую кофеварку Мясорубка электрическая Vitek VT-1674</span><p>от <span class="price">3500</span> руб.</p></div></li>
						<li class="large"><img src="photos/cf93342053e92b125e6f4adca7e47bbe.jpeg" alt="мясорубка binatone Пароварка Tefal Simply Invents VC1017" title="мясорубка binatone Пароварка Tefal Simply Invents VC1017"><div class="box" page="parovarka-tefal-simply-invents-vc-3990r"><span class="title">мясорубка binatone Пароварка Tefal Simply Invents VC1017</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li class="large"><img src="photos/d13e770b0f20ea7295762dcccfd88ddd.jpeg" alt="кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда" title="кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда"><div class="box" page="elektroplitka-indukcionnaya-maxima-mic-posuda-1790r"><span class="title">кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/b28d3e929be020189d8c25424817be16.jpeg" alt="слоеное тесто в аэрогриле Электрический чайник 1л зеленый Bodum BISTRO 11154-565EURO" title="слоеное тесто в аэрогриле Электрический чайник 1л зеленый Bodum BISTRO 11154-565EURO"><div class="box" page="elektricheskiy-chaynik-l-zelenyy-bodum-bistro-euro-2270r"><span class="title">слоеное тесто в аэрогриле Электрический чайник 1л зеленый Bodum BISTRO 11154-565EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li><img src="photos/da3b8026757740acd31c2844cf598d4a.jpeg" alt="чем отличаются пылесосы Батарейка GP Batteries Super alkaline LR03 24A-BC4" title="чем отличаются пылесосы Батарейка GP Batteries Super alkaline LR03 24A-BC4"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-80r-2"><span class="title">чем отличаются пылесосы Батарейка GP Batteries Super alkaline LR03 24A-BC4</span><p>от <span class="price">80</span> руб.</p></div></li>
						<li><img src="photos/569a7a448800e6c331839b4f1803d826.jpeg" alt="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502" title="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502"><div class="box" page="moyuschiy-koncentrat-thomas-protex-l-520r"><span class="title">бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li><img src="photos/0cd736da9ac10dc7bbde0f3b6049ff52.jpeg" alt="мясорубка помощница Воздушный фильтр Redmond H10RV-308" title="мясорубка помощница Воздушный фильтр Redmond H10RV-308"><div class="box" page="vozdushnyy-filtr-redmond-hrv-390r"><span class="title">мясорубка помощница Воздушный фильтр Redmond H10RV-308</span><p>от <span class="price">390</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("utyug-vitek-vt-1350r.php", 0, -4); if (file_exists("comments/utyug-vitek-vt-1350r.php")) require_once "comments/utyug-vitek-vt-1350r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="utyug-vitek-vt-1350r.php" method="post" onsubmit="return checkForm(this)">
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