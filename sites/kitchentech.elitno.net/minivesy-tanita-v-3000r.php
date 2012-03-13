<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("minivesy-tanita-v-3000r.php","мощность мультиварки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("minivesy-tanita-v-3000r.php", $nick, $comment);
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
		<title>мощность мультиварки Мини-весы Tanita 1479V  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мощность мультиварки, рецепт курицы в мультиварке, мультиварки киев, пылесборники для пылесосов philips, выбор микроволновой печи, контрольная закупка пылесос, smart cleaner робот пылесос, измельчитель сена, мультиварка куку 1054, микроволновая печь тест, утюг с тефлоновым покрытием, запчасти для блендера braun, пылесосы филипс отзывы, пароварка chicco,  лучшая вафельница">
		<meta name="description" content="мощность мультиварки Если вам необходимо провести максимально точные измерения небольших грузов – исп...">
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
						<a class="photo" href="photos/7bfc4f4031d68720fdce5209cf8c8c0d.jpeg" title="мощность мультиварки Мини-весы Tanita 1479V"><img src="photos/7bfc4f4031d68720fdce5209cf8c8c0d.jpeg" alt="мощность мультиварки Мини-весы Tanita 1479V" title="мощность мультиварки Мини-весы Tanita 1479V -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-ath-750r.php"><img src="photos/4a8644a2c29f22e2d9c92389f96ff2ab.jpeg" alt="рецепт курицы в мультиварке Кухонный комбайн ATH-350" title="рецепт курицы в мультиварке Кухонный комбайн ATH-350"></a><h2>Кухонный комбайн ATH-350</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-ci-black-76390r.php"><img src="photos/4c9f6fc7185095b9ee0e389df903b9c9.jpeg" alt="мультиварки киев Эспрессо-кофемашина Melitta Caffeo CI Black (4.0009.97)" title="мультиварки киев Эспрессо-кофемашина Melitta Caffeo CI Black (4.0009.97)"></a><h2>Эспрессо-кофемашина Melitta Caffeo CI Black (4.0009.97)</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-ci-serebristaya-65999r.php"><img src="photos/1eb9b0b00689e076b5895b91684c957e.jpeg" alt="пылесборники для пылесосов philips Автоматическая кофемашина Melitta CAFFEO CI, серебристая" title="пылесборники для пылесосов philips Автоматическая кофемашина Melitta CAFFEO CI, серебристая"></a><h2>Автоматическая кофемашина Melitta CAFFEO CI, серебристая</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мощность мультиварки Мини-весы Tanita 1479V</h1>
						<div class="tb"><p>Цена: от <span class="price">3000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_2429.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Если вам необходимо провести максимально точные измерения небольших грузов – используйте <strong>TANITA 1479V</strong>. Исполненные в современном стиле миниатюрные весы активно используются в ломбардах, медучреждениях, аптеках, лабораториях. Среди особенностей модели - функция компенсации массы тары и автоотключение. Карманные весы имеют компактные размеры и калибруются автоматически.</p><p><b>Особенности:</b></p><p><b></b></p><ul type=disc><li>Класс точности III <li>Калибровка внешняя <li>Компактный дизайн <li>Легкое и простое использование <li>Контрастный жидкокристаллический <li>Легкочитаемый дисплей <li>Функция тарирования (компенсация массы тары во всём диапазоне взвешивания) <li>Автоотключение <li>Сообщение о перегрузе <li>Сообщение о разрядке батарей <li>4-х цифровой дисплей <li>Чехол из искусственной кожи</li></ul><p><b>Технические характеристики:</b></p><ul type=disc><li>Питание: 3 батарейки типа-LR44 <li>Рабочий диапазон температур: +10°С – +35°С <li>Относительная влажность: не более 80%. <li>Предел измерения: 120 г <li>Цена деления: 0,1 г <li>Точность: ±0,1 г при взвешивании от 0 до 50 г, ±0,2 г при взвешивании от 50 до 100 г <li>Габаритные размеры: 156 х 76 х 16 мм <li>Размеры платформы: 99 х 72 мм <li>Вес: 160 г</li></ul><p><b>Производитель:</b> Tanita (Япония)</p> мощность мультиварки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/0b57a5fa2564b3001e847ebdd45ce976.jpeg" alt="выбор микроволновой печи Вспениватель Melitta Cremio красный" title="выбор микроволновой печи Вспениватель Melitta Cremio красный"><div class="box"><a href="http://kitchentech.elitno.net/vspenivatel-melitta-cremio-krasnyy-4155r.php"><h3 class="title">выбор микроволновой печи Вспениватель Melitta Cremio красный</h3><p>от <span class="price">4155</span> руб.</p></a></div></li>
						<li><img src="photos/b6c05d69ce9bf94410c78acce4c5e9cb.jpeg" alt="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер" title="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер"><div class="box" page="bodum-bistro-euro-elektricheskiy-mikser-2740r"><span class="title">контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/b6ecb843a4a7a272dfd585351250b4a8.jpeg" alt="smart cleaner робот пылесос Соковыжималка  Redmond RJ -M901" title="smart cleaner робот пылесос Соковыжималка  Redmond RJ -M901"><div class="box" page="sokovyzhimalka-redmond-rj-m-4390r"><span class="title">smart cleaner робот пылесос Соковыжималка  Redmond RJ -M901</span><p>от <span class="price">4390</span> руб.</p></div></li>
						<li><img src="photos/b563c2d22903c88ab1496d97329bc5bf.jpeg" alt="измельчитель сена Тостер Atlanta ATH-234" title="измельчитель сена Тостер Atlanta ATH-234"><div class="box" page="toster-atlanta-ath-690r"><span class="title">измельчитель сена Тостер Atlanta ATH-234</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li class="large"><img src="photos/f12c67c091dc7674e75925e27c6ee910.jpeg" alt="мультиварка куку 1054 Чайник электрический Vitek VT-1101 черный" title="мультиварка куку 1054 Чайник электрический Vitek VT-1101 черный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-chernyy-2150r"><span class="title">мультиварка куку 1054 Чайник электрический Vitek VT-1101 черный</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li class="large"><img src="photos/cb5b82e2b4fb8916dd96c68408275e51.jpeg" alt="микроволновая печь тест Чайник электрический Vitek VT-1149 красный" title="микроволновая печь тест Чайник электрический Vitek VT-1149 красный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-krasnyy-1650r"><span class="title">микроволновая печь тест Чайник электрический Vitek VT-1149 красный</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li class="large"><img src="photos/9886fb8aa4d27a4c0947d702e96f79ee.jpeg" alt="утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291" title="утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-760r-2"><span class="title">утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/e766dc7a6c0cf1b164fee2cb011a81f8.jpeg" alt="запчасти для блендера braun Чайник Vitek VT-1163" title="запчасти для блендера braun Чайник Vitek VT-1163"><div class="box" page="chaynik-vitek-vt-990r"><span class="title">запчасти для блендера braun Чайник Vitek VT-1163</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/20c033d3c85583b2e6a71a21254a84f6.jpeg" alt="пылесосы филипс отзывы Щетка для твердых поверхностей в упаковке Dyson Hard Floor Tool Assy Retail" title="пылесосы филипс отзывы Щетка для твердых поверхностей в упаковке Dyson Hard Floor Tool Assy Retail"><div class="box" page="schetka-dlya-tverdyh-poverhnostey-v-upakovke-dyson-hard-floor-tool-assy-retail-1590r"><span class="title">пылесосы филипс отзывы Щетка для твердых поверхностей в упаковке Dyson Hard Floor Tool Assy Retail</span><p>от <span class="price">1590</span> руб.</p></div></li>
						<li><img src="photos/2ff9a2b5a9fe0fab492b8e041d2f7740.jpeg" alt="пароварка chicco Пылесос Thomas Inox 1560 Sf" title="пароварка chicco Пылесос Thomas Inox 1560 Sf"><div class="box" page="pylesos-thomas-inox-sf-17820r"><span class="title">пароварка chicco Пылесос Thomas Inox 1560 Sf</span><p>от <span class="price">17820</span> руб.</p></div></li>
						<li><img src="photos/43e27fa2f560b206710e5912c17032bf.jpeg" alt="запчасти для кофемашины Утюг Vitek VT-1244" title="запчасти для кофемашины Утюг Vitek VT-1244"><div class="box" page="utyug-vitek-vt-1450r"><span class="title">запчасти для кофемашины Утюг Vitek VT-1244</span><p>от <span class="price">1450</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("minivesy-tanita-v-3000r.php", 0, -4); if (file_exists("comments/minivesy-tanita-v-3000r.php")) require_once "comments/minivesy-tanita-v-3000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="minivesy-tanita-v-3000r.php" method="post" onsubmit="return checkForm(this)">
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