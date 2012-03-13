<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mikrovolnovaya-pech-vitek-vt-3550r.php","какую лучше купить кофеварку");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mikrovolnovaya-pech-vitek-vt-3550r.php", $nick, $comment);
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
		<title>какую лучше купить кофеварку Микроволновая печь Vitek VT-1682  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="какую лучше купить кофеварку, компактная микроволновая печь, соковыжималка bosh, tupperware миксер, выбор микроволновой печи, тканевый мешок для пылесоса, рожок для кофеварки, измельчитель сучьев, каша на воде в мультиварке, чайник электрический тефаль, соковыжималка садовая, запчасти для блендера braun, мясорубка помощница отзывы, диски для кухонного комбайна,  блендер рецепты видео">
		<meta name="description" content="какую лучше купить кофеварку Современная кухня не мыслима без бытовой техники. Микроволновая печь Vitek VT-16...">
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
						<a class="photo" href="photos/7b88076a90f90c4718597a4ab977cb0a.jpeg" title="какую лучше купить кофеварку Микроволновая печь Vitek VT-1682"><img src="photos/7b88076a90f90c4718597a4ab977cb0a.jpeg" alt="какую лучше купить кофеварку Микроволновая печь Vitek VT-1682" title="какую лучше купить кофеварку Микроволновая печь Vitek VT-1682 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-blender-s-aksessuarami-bodum-bistro-keuro-3780r.php"><img src="photos/a7593a9ae0c3505a2632ee9e30dcbbe0.jpeg" alt="компактная микроволновая печь Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO" title="компактная микроволновая печь Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO"></a><h2>Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-blender-s-aksessuarami-bodum-bistro-keuro-krasnyy-3780r.php"><img src="photos/cba8b4b1e5c8fd0ccc541a5e43233a90.jpeg" alt="соковыжималка bosh Электрический блендер с аксессуарами Bodum BISTRO K11179-294EURO красный" title="соковыжималка bosh Электрический блендер с аксессуарами Bodum BISTRO K11179-294EURO красный"></a><h2>Электрический блендер с аксессуарами Bodum BISTRO K11179-294EURO красный</h2></li>
							<li><a href="http://kitchentech.elitno.net/vspenivatel-melitta-cremio-belyy-4155r.php"><img src="photos/701c1fd8791de13ef3fc3b11f131d4a2.jpeg" alt="tupperware миксер Вспениватель Melitta Cremio белый" title="tupperware миксер Вспениватель Melitta Cremio белый"></a><h2>Вспениватель Melitta Cremio белый</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>какую лучше купить кофеварку Микроволновая печь Vitek VT-1682</h1>
						<div class="tb"><p>Цена: от <span class="price">3550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8266.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Современная кухня не мыслима без бытовой техники. Микроволновая печь <strong>Vitek VT-1682</strong> может разогреть и приготовить пищу за считанные минуты. Пять уровней мощности модели позволяют готовить различные виды пищи. Теперь достаточно погрузить ингредиенты в микроволновку и выбрать один из 8 вариантов автоматического меню, очень быстро вы получите вкусную еду. Тип управления сенсорный.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Объем: 20л <li>Столик: 245мм <li>Режимы мощности: 5 уровней <li>Режим размораживания: есть <li>Автоматическое меню: 8 режимов <li>Функция экспресс-приготовления: есть <li>Таймер: 95 мин. <li>Цифровые часы: есть <li>Сигнал завершения приготовления: есть <li>Тип управления: Easytronic <li>Защита от доступа детей: есть <li>Потребляемая мощность: 800Вт <li>Электропитание: 220-230В, ~ 50Гц <li>Внутренняя камера с антипригарным покрытием</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна:</b> Россия.</p> какую лучше купить кофеварку</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/0b57a5fa2564b3001e847ebdd45ce976.jpeg" alt="выбор микроволновой печи Вспениватель Melitta Cremio красный" title="выбор микроволновой печи Вспениватель Melitta Cremio красный"><div class="box" page="vspenivatel-melitta-cremio-krasnyy-4155r"><span class="title">выбор микроволновой печи Вспениватель Melitta Cremio красный</span><p>от <span class="price">4155</span> руб.</p></div></li>
						<li><img src="photos/56cb596182a024c5be877e612e6462d8.jpeg" alt="тканевый мешок для пылесоса Пароварка Atlanta АТН-605" title="тканевый мешок для пылесоса Пароварка Atlanta АТН-605"><div class="box" page="parovarka-atlanta-atn-1050r-2"><span class="title">тканевый мешок для пылесоса Пароварка Atlanta АТН-605</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/5fe7a070a54ac64269e20fb9f52ff92c.jpeg" alt="рожок для кофеварки Zauber Цитрусовая соковыжималка  X 850" title="рожок для кофеварки Zauber Цитрусовая соковыжималка  X 850"><div class="box" page="zauber-citrusovaya-sokovyzhimalka-x-1000r"><span class="title">рожок для кофеварки Zauber Цитрусовая соковыжималка  X 850</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/7b0ef0b12e5f66ec7582c9396725bc92.jpeg" alt="измельчитель сучьев Чайник электрический Vitek VT-1120" title="измельчитель сучьев Чайник электрический Vitek VT-1120"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1150r"><span class="title">измельчитель сучьев Чайник электрический Vitek VT-1120</span><p>от <span class="price">1150</span> руб.</p></div></li>
						<li class="large"><img src="photos/480398a0d650a7b1a9641ca193d5ca18.jpeg" alt="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л" title="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitek-vt-l-2350r"><span class="title">каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li class="large"><img src="photos/396dcef56ae58a2fdd710c34b32d6011.jpeg" alt="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)" title="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-l-760r-2"><span class="title">чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/a73fe1f79d4e2459d6da89e07445f626.jpeg" alt="соковыжималка садовая Электрический чайник Atlanta АТН-738" title="соковыжималка садовая Электрический чайник Atlanta АТН-738"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-520r"><span class="title">соковыжималка садовая Электрический чайник Atlanta АТН-738</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li><img src="photos/e766dc7a6c0cf1b164fee2cb011a81f8.jpeg" alt="запчасти для блендера braun Чайник Vitek VT-1163" title="запчасти для блендера braun Чайник Vitek VT-1163"><div class="box" page="chaynik-vitek-vt-990r"><span class="title">запчасти для блендера braun Чайник Vitek VT-1163</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/457d4b7f3e82f96ca3e9bfa507402a8c.jpeg" alt="мясорубка помощница отзывы Фильтры для пылесоса Vitek VT-1859 (VT-1829)" title="мясорубка помощница отзывы Фильтры для пылесоса Vitek VT-1859 (VT-1829)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-215r"><span class="title">мясорубка помощница отзывы Фильтры для пылесоса Vitek VT-1859 (VT-1829)</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/6eaac51c54fbf44dce471193ec6d5c18.jpeg" alt="диски для кухонного комбайна Набор для удаления пятен с ковровых покрытий и мягкой мебели Dyson Party Clean-Up Kit Ir Cl Retail" title="диски для кухонного комбайна Набор для удаления пятен с ковровых покрытий и мягкой мебели Dyson Party Clean-Up Kit Ir Cl Retail"><div class="box" page="nabor-dlya-udaleniya-pyaten-s-kovrovyh-pokrytiy-i-myagkoy-mebeli-dyson-party-cleanup-kit-ir-cl-retail-2490r"><span class="title">диски для кухонного комбайна Набор для удаления пятен с ковровых покрытий и мягкой мебели Dyson Party Clean-Up Kit Ir Cl Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/a5307e77bbd77d05fd1bf891a3eeb5d0.jpeg" alt="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный" title="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-4590r"><span class="title">хлебопечки в новосибирске Пылесос Vitek VT-1845 красный</span><p>от <span class="price">4590</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mikrovolnovaya-pech-vitek-vt-3550r.php", 0, -4); if (file_exists("comments/mikrovolnovaya-pech-vitek-vt-3550r.php")) require_once "comments/mikrovolnovaya-pech-vitek-vt-3550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mikrovolnovaya-pech-vitek-vt-3550r.php" method="post" onsubmit="return checkForm(this)">
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