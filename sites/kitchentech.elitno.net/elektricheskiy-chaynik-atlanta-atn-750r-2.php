<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-atlanta-atn-750r-2.php","принцип работы кофемашины");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-atlanta-atn-750r-2.php", $nick, $comment);
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
		<title>принцип работы кофемашины Электрический чайник Atlanta АТН-650  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="принцип работы кофемашины, пылесос sc 4760h33, кофемашина saeco инструкция, компактная микроволновая печь, чалдовые кофеварки, измельчитель хэппи чоп, джем в хлебопечке рецепт, микроволновая печь daewoo koc, приготовление майонеза в блендере, блендер philips hr 1617, что можно сделать из пылесоса, как использовать пароварку, диски для кухонного комбайна, микроволновая печь bork,  видео хлебопечка панасоник">
		<meta name="description" content="принцип работы кофемашины Электрический чайник Atlanta АТН-650 – стильный кухонный прибор, мощностью 2000 ...">
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
						<a class="photo" href="photos/737a030606bea9ae62642592848f785a.jpeg" title="принцип работы кофемашины Электрический чайник Atlanta АТН-650"><img src="photos/737a030606bea9ae62642592848f785a.jpeg" alt="принцип работы кофемашины Электрический чайник Atlanta АТН-650" title="принцип работы кофемашины Электрический чайник Atlanta АТН-650 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mx-3910r.php"><img src="photos/5a6cc5c274d661a65ab52201c3f36a5e.jpeg" alt="пылесос sc 4760h33 Блендер Braun MX-2050" title="пылесос sc 4760h33 Блендер Braun MX-2050"></a><h2>Блендер Braun MX-2050</h2></li>
							<li><a href="http://kitchentech.elitno.net/ruchnoy-blender-v-russell-hobbs-allure-art-3490r.php"><img src="photos/8eb90b2c93f90da38a9a78776cb9380e.jpeg" alt="кофемашина saeco инструкция Ручной блендер 3в1 Russell Hobbs Allure, арт. 18274-56" title="кофемашина saeco инструкция Ручной блендер 3в1 Russell Hobbs Allure, арт. 18274-56"></a><h2>Ручной блендер 3в1 Russell Hobbs Allure, арт. 18274-56</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-blender-s-aksessuarami-bodum-bistro-keuro-3780r.php"><img src="photos/a7593a9ae0c3505a2632ee9e30dcbbe0.jpeg" alt="компактная микроволновая печь Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO" title="компактная микроволновая печь Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO"></a><h2>Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>принцип работы кофемашины Электрический чайник Atlanta АТН-650</h1>
						<div class="tb"><p>Цена: от <span class="price">750</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19929.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Atlanta АТН-650 – стильный кухонный прибор, мощностью 2000 Вт. За раз может кипятить до 1,8 л. воды. Может поворачиваться на подставке на 360 градусов. Имеет фильтр от накипи и функцию быстрого закипания. Используется защищенный закрытый нагревательный элемент, который гораздо проще мыть, чем открытую спираль. Безопасен, т. к. имеет защиту от перегрева, а также блокировку крышки и блокировку включения без воды. Предусмотрено место для электрошнура в цокольной подставке. </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Объем чайника 1.8 литра; <li>Поворот на подставке на 360  <li>Быстрое закипание <li>Фильтр от накипи <li>Закрытый нагревательный элемент <li>Автоматическое отключение <li>Защита от перегрева без воды <li>Электрошнур в цокольной подставке <li>Мощность 2000W <li>230V, 50Hz <li>19.5 x 18 x 24 см </li></ul><p><strong>Производитель: США</strong></p> принцип работы кофемашины</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a59c30a3b2d8957f43e9fce5f7b6e0f5.jpeg" alt="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная" title="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная"><div class="box"><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-gourmet-chernaya-43999r.php"><h3 class="title">чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная</h3><p>от <span class="price">43999</span> руб.</p></a></div></li>
						<li><img src="photos/d4a3d850ff4d12f0511b4f02c450fad7.jpeg" alt="измельчитель хэппи чоп Микроволновая печь Vitek VT-1692" title="измельчитель хэппи чоп Микроволновая печь Vitek VT-1692"><div class="box" page="mikrovolnovaya-pech-vitek-vt-2870r"><span class="title">измельчитель хэппи чоп Микроволновая печь Vitek VT-1692</span><p>от <span class="price">2870</span> руб.</p></div></li>
						<li><img src="photos/8dac9aeadde6a6d95b71abb890265199.jpeg" alt="джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB" title="джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB"><div class="box" page="mikser-atlanta-ath-wb-630r"><span class="title">джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/82af66b2cc61bc47984a0dc33b3b0565.jpeg" alt="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310" title="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310"><div class="box" page="sokovyzhimalka-atlanta-ath-1050r"><span class="title">микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li class="large"><img src="photos/4aba59e656a62396ee01dc9ed0a83fa8.jpeg" alt="приготовление майонеза в блендере Соковыжималка TURBO" title="приготовление майонеза в блендере Соковыжималка TURBO"><div class="box" page="sokovyzhimalka-turbo-7790r"><span class="title">приготовление майонеза в блендере Соковыжималка TURBO</span><p>от <span class="price">7790</span> руб.</p></div></li>
						<li class="large"><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li class="large"><img src="photos/537c78beb6320fe2c86004c22681bdc6.jpeg" alt="что можно сделать из пылесоса Чайник электрический Maxima MК- M221 (1,5л)" title="что можно сделать из пылесоса Чайник электрический Maxima MК- M221 (1,5л)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-l-760r"><span class="title">что можно сделать из пылесоса Чайник электрический Maxima MК- M221 (1,5л)</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/2604c204c493f1487a5255f83dc099af.jpeg" alt="как использовать пароварку Зарядное устройство GP Batteries PB350GS210-UE4" title="как использовать пароварку Зарядное устройство GP Batteries PB350GS210-UE4"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbgsue-1025r"><span class="title">как использовать пароварку Зарядное устройство GP Batteries PB350GS210-UE4</span><p>от <span class="price">1025</span> руб.</p></div></li>
						<li><img src="photos/6eaac51c54fbf44dce471193ec6d5c18.jpeg" alt="диски для кухонного комбайна Набор для удаления пятен с ковровых покрытий и мягкой мебели Dyson Party Clean-Up Kit Ir Cl Retail" title="диски для кухонного комбайна Набор для удаления пятен с ковровых покрытий и мягкой мебели Dyson Party Clean-Up Kit Ir Cl Retail"><div class="box" page="nabor-dlya-udaleniya-pyaten-s-kovrovyh-pokrytiy-i-myagkoy-mebeli-dyson-party-cleanup-kit-ir-cl-retail-2490r"><span class="title">диски для кухонного комбайна Набор для удаления пятен с ковровых покрытий и мягкой мебели Dyson Party Clean-Up Kit Ir Cl Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/af4db2e11d74fd9a3df56b0b95fb949a.jpeg" alt="микроволновая печь bork Пылесос моющий Thomas Hygiene T2" title="микроволновая печь bork Пылесос моющий Thomas Hygiene T2"><div class="box" page="pylesos-moyuschiy-thomas-hygiene-t-15900r"><span class="title">микроволновая печь bork Пылесос моющий Thomas Hygiene T2</span><p>от <span class="price">15900</span> руб.</p></div></li>
						<li><img src="photos/6ad68580ca9fe51d58dccc0df51b3bb5.jpeg" alt="ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter" title="ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-aquatherm-aquafilter-16720r"><span class="title">ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter</span><p>от <span class="price">16720</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-atlanta-atn-750r-2.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-atlanta-atn-750r-2.php")) require_once "comments/elektricheskiy-chaynik-atlanta-atn-750r-2.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-atlanta-atn-750r-2.php" method="post" onsubmit="return checkForm(this)">
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