<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("ekotester-soeks-v-dozimetr-radiacii-i-nitrat-tester-8600r.php","кофеварка saeco отзывы");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("ekotester-soeks-v-dozimetr-radiacii-i-nitrat-tester-8600r.php", $nick, $comment);
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
		<title>кофеварка saeco отзывы Экотестер СоЭкс (2 в 1: дозиметр радиации и нитрат тестер)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кофеварка saeco отзывы, кофеварка delonghi eco 310, электрочайник braun, аэрогриль воронеж, рецепт батона для хлебопечки, самсунг пылесос робот, запчасти для утюгов, хлебопечка в техносиле, мультиварка minute cook, аэрогриль hotter economy, мультиварка супра инструкция, испечь черный хлеб в хлебопечке, mini пылесос, пылесос вертикальный,  слоеное тесто в аэрогриле">
		<meta name="description" content="кофеварка saeco отзывы Этот уникальный прибор позволит не только оценить уровень радиации, но и измерит...">
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
						<a class="photo" href="photos/b30a9264a94da2d2b2a0829021bb7fab.jpeg" title="кофеварка saeco отзывы Экотестер СоЭкс (2 в 1: дозиметр радиации и нитрат тестер)"><img src="photos/b30a9264a94da2d2b2a0829021bb7fab.jpeg" alt="кофеварка saeco отзывы Экотестер СоЭкс (2 в 1: дозиметр радиации и нитрат тестер)" title="кофеварка saeco отзывы Экотестер СоЭкс (2 в 1: дозиметр радиации и нитрат тестер) -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mx-2400r.php"><img src="photos/c875beb952f9d6580895bee02e6ce554.jpeg" alt="кофеварка delonghi eco 310 Блендер Braun MX-2000" title="кофеварка delonghi eco 310 Блендер Braun MX-2000"></a><h2>Блендер Braun MX-2000</h2></li>
							<li><a href="http://kitchentech.elitno.net/chopper-vitek-vt-1790r.php"><img src="photos/ab6d4d55ecf241ffc9d0ef81c9ea44bc.jpeg" alt="электрочайник braun Чоппер Vitek VT-1641" title="электрочайник braun Чоппер Vitek VT-1641"></a><h2>Чоппер Vitek VT-1641</h2></li>
							<li><a href="http://kitchentech.elitno.net/zauber-kofemolka-x-1250r.php"><img src="photos/13e215c432e654a40129e4a1cdc305f1.jpeg" alt="аэрогриль воронеж Zauber Кофемолка  X-480" title="аэрогриль воронеж Zauber Кофемолка  X-480"></a><h2>Zauber Кофемолка  X-480</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кофеварка saeco отзывы Экотестер СоЭкс (2 в 1: дозиметр радиации и нитрат тестер)</h1>
						<div class="tb"><p>Цена: от <span class="price">8600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16151.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Этот уникальный прибор позволит не только оценить уровень радиации, но и измерить содержание нитратов в продуктах питания. Среди достоинств <b>экотестера СоЭкс</b> можно выделить яркий цветной TFT-дисплей, удобство использования, а также ширину диапазона измерений. Устройство компактно и полностью автономно.</p><p>Экотестер станет незаменимым помощником для людей, заботящихся о своем здоровье, а также работающих в сфере строительства, ювелирном деле, медицине и других отраслях. Устройством оценивается радиоактивный фон и производится замер мощности ионизирующего гамма-, бета-, а также рентгеновского излучения. Посредством оценки проводимости переменного тока высокой частоты в измеряемом продукте, осуществляется расчет количества нитратов. В памяти прибора уже находятся данные по допустимым значениям концентрации нитратов для различных продуктов питания (фрукты, овощи и мясо). </p><p><b>Для измерения радиационного фона какого-то предмета:</b></p><ul type=disc><li>Измерьте уровень радиационного фона на расстоянии нескольких метров от предмета. <li>Измерьте уровень радиационного фона непосредственно вблизи предмета (экотестер должен быть повернут к предмету перфорированной стороной). Старайтесь произвести измерения на максимально близком расстоянии. <li>Сравните данные, полученные в ходе выполнения пункта 1 и пункта 2, разница составляет дополнительный радиационный фон от объекта.</li></ul><p><b>Для измерения уровня нитратов:</b></p><ul type=disc><li>Загрузите меню и выберите тип продукта (всего в память заложено около 30 различных видов овощей фруктов, а также мясо). <li>Снимите крышку, закрывающую щуп экотестера, а затем вставьте щуп в тестируемый продукт. После нажатия на клавишу измерения на дисплее отобразится результат в виде числового значения содержания нитратов и одного из трех сообщений: <ul type=circle><li>Содержание нитратов в норме. <li>Незначительное превышение нормы. <li>Недопустимая концентрация нитратов.</li></ul></li></ul><p><b>В комплекте:</b></p><p><b></b></p><ul type=disc><li>экотестер \Соэкс\ <li>2 аккумулятора типа \ААА\ <li>инструкция <li>упаковка</li></ul><p><b>Технические характеристики:</b></p><ul type=disc><li>Время измерения: до 20 секунд <li>Диапазон измерения уровня радиоактивного фона: 3...100000 мкР/ч (0,03...1000 мкЗв/ч) <li>Нижний предел регистрации гамма-излучения: 0,1 МэВ <li>Звуковая сигнализация: 16 значений, 30...10000 мкР/ч (0,3...100 мкЗв/ч) <li>Диапазон измерения количества нитратов: 20...5000 мг/кг <li>Количество записей ПДК продуктов в памяти: 32 <li>Время непрерывной работы, макс.: 10 часов <li>Элементы питания: аккумуляторы емкостью 1350 мАч или батарейки типа \ААА\ <li>Зарядка аккумулятора: <ul type=circle><li>сетевой адаптер 220 В <li>порт mini-USB персонального компьютера</li></ul><li>Ток заряда аккумуляторов, макс.: 300 мА <li>Потребляемый ток от зарядного устройства, макс.: не более 500 мА <li>Диапазон рабочих напряжений: 1,9...3,5 В (напряжение на выходе зарядного устройства 4,5...5,5 В) <li>Дисплей: цветной TFT, разрешение 128х160 пикс. <li>Рабочий диапазон температур: -20...+60 °С <li>Габариты: 10,5х4,3х1,8 см <li>Вес (без аккумуляторов): 66 г</li></ul><p><b>Производитель:</b> СоЭкс.</p><p><b>Страна:</b> Россия.</p><p><b>Гарантия:</b> 1 год.</p> кофеварка saeco отзывы</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/2e2056e7ef45f5df85840ea8253e7c4c.jpeg" alt="рецепт батона для хлебопечки Электроплитка Maxima MES-0252-2" title="рецепт батона для хлебопечки Электроплитка Maxima MES-0252-2"><div class="box" page="elektroplitka-maxima-mes-880r"><span class="title">рецепт батона для хлебопечки Электроплитка Maxima MES-0252-2</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/131f031076f016a5b0e85b06b57d0206.jpeg" alt="самсунг пылесос робот Микроволновая печь Vitek VT-1680" title="самсунг пылесос робот Микроволновая печь Vitek VT-1680"><div class="box" page="mikrovolnovaya-pech-vitek-vt-2200r"><span class="title">самсунг пылесос робот Микроволновая печь Vitek VT-1680</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/785647aa8682372d107781ac6f9a4974.jpeg" alt="запчасти для утюгов Мультиварка Redmond RMC-M4504" title="запчасти для утюгов Мультиварка Redmond RMC-M4504"><div class="box" page="multivarka-redmond-rmcm-4490r"><span class="title">запчасти для утюгов Мультиварка Redmond RMC-M4504</span><p>от <span class="price">4490</span> руб.</p></div></li>
						<li><img src="photos/bbb4b27b3d39658b85227dbb77539d16.jpeg" alt="хлебопечка в техносиле Весы электронные для багажа Beurer LS 10" title="хлебопечка в техносиле Весы электронные для багажа Beurer LS 10"><div class="box" page="vesy-elektronnye-dlya-bagazha-beurer-ls-1100r"><span class="title">хлебопечка в техносиле Весы электронные для багажа Beurer LS 10</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li class="large"><img src="photos/96ffa32e5276885766eccd4b00ddf567.jpeg" alt="мультиварка minute cook Соковыжималка цитрусовая дизайнерская Zauber X-860" title="мультиварка minute cook Соковыжималка цитрусовая дизайнерская Zauber X-860"><div class="box" page="sokovyzhimalka-citrusovaya-dizaynerskaya-zauber-x-1550r"><span class="title">мультиварка minute cook Соковыжималка цитрусовая дизайнерская Zauber X-860</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li class="large"><img src="photos/31a34f17d596d6c34798e2946dbbde29.jpeg" alt="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный" title="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-krasnyy-1790r"><span class="title">аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li class="large"><img src="photos/5a34cc2772e0feae9df6932b7f043259.jpeg" alt="мультиварка супра инструкция Чайник электрический Atlanta ATH-758" title="мультиварка супра инструкция Чайник электрический Atlanta ATH-758"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-940r"><span class="title">мультиварка супра инструкция Чайник электрический Atlanta ATH-758</span><p>от <span class="price">940</span> руб.</p></div></li>
						<li><img src="photos/388c2880498e546d8fcebc787f1cf894.jpeg" alt="испечь черный хлеб в хлебопечке Электрический чайник 1л черный Bodum BISTRO 11154-01EURO" title="испечь черный хлеб в хлебопечке Электрический чайник 1л черный Bodum BISTRO 11154-01EURO"><div class="box" page="elektricheskiy-chaynik-l-chernyy-bodum-bistro-euro-2270r"><span class="title">испечь черный хлеб в хлебопечке Электрический чайник 1л черный Bodum BISTRO 11154-01EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li><img src="photos/28da988d46134dfe1236e7598e0579cc.jpeg" alt="mini пылесос Турбощетка Redmond  RV-308" title="mini пылесос Турбощетка Redmond  RV-308"><div class="box" page="turboschetka-redmond-rv-390r"><span class="title">mini пылесос Турбощетка Redmond  RV-308</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/08939404bc185a897cf2a335ea28842f.jpeg" alt="пылесос вертикальный Пылесос Redmond RV-308" title="пылесос вертикальный Пылесос Redmond RV-308"><div class="box" page="pylesos-redmond-rv-7990r"><span class="title">пылесос вертикальный Пылесос Redmond RV-308</span><p>от <span class="price">7990</span> руб.</p></div></li>
						<li><img src="photos/d9b92094264662e2a4b171c525a4ead7.jpeg" alt="держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter" title="держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter"><div class="box" page="pylesos-thomas-biovac-c-aquafilter-8430r"><span class="title">держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter</span><p>от <span class="price">8430</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("ekotester-soeks-v-dozimetr-radiacii-i-nitrat-tester-8600r.php", 0, -4); if (file_exists("comments/ekotester-soeks-v-dozimetr-radiacii-i-nitrat-tester-8600r.php")) require_once "comments/ekotester-soeks-v-dozimetr-radiacii-i-nitrat-tester-8600r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="ekotester-soeks-v-dozimetr-radiacii-i-nitrat-tester-8600r.php" method="post" onsubmit="return checkForm(this)">
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