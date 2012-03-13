<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("batareyki-gp-batteries-super-alkaline-lr-abc-170r.php","гейзерная кофеварка delonghi");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("batareyki-gp-batteries-super-alkaline-lr-abc-170r.php", $nick, $comment);
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
		<title>гейзерная кофеварка delonghi Батарейки GP Batteries Super alkaline LR20 13A-BC2  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="гейзерная кофеварка delonghi, пылесос tomas twin, электрочайник braun, аэрогриль pag 1205d, контрольная закупка пылесос, ручной блендер hr1659, блендер philips hr 1617, греется пылесос, дешевая хлебопечка, пылесосы в гродно, купить мясорубку панасоник, мультиварка скороварка moulinex, пылесос вертикальный, бездрожжевой хлеб в хлебопечке,  бесплатные рецепты для пароварки">
		<meta name="description" content="гейзерная кофеварка delonghi Алкалиновые батарейки типа D не содержат ртути и обладают энергоемкостью в неско...">
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
						<a class="photo" href="photos/05c48dbba69cff2727e6c1b6d1112395.jpeg" title="гейзерная кофеварка delonghi Батарейки GP Batteries Super alkaline LR20 13A-BC2"><img src="photos/05c48dbba69cff2727e6c1b6d1112395.jpeg" alt="гейзерная кофеварка delonghi Батарейки GP Batteries Super alkaline LR20 13A-BC2" title="гейзерная кофеварка delonghi Батарейки GP Batteries Super alkaline LR20 13A-BC2 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-ddg-click-and-mix-2900r.php"><img src="photos/795ef5ec8b21fcb23efce51ba4b9959a.jpeg" alt="пылесос tomas twin Блендер погружной Moulinex DD406G42 Click and Mix" title="пылесос tomas twin Блендер погружной Moulinex DD406G42 Click and Mix"></a><h2>Блендер погружной Moulinex DD406G42 Click and Mix</h2></li>
							<li><a href="http://kitchentech.elitno.net/chopper-vitek-vt-1790r.php"><img src="photos/ab6d4d55ecf241ffc9d0ef81c9ea44bc.jpeg" alt="электрочайник braun Чоппер Vitek VT-1641" title="электрочайник braun Чоппер Vitek VT-1641"></a><h2>Чоппер Vitek VT-1641</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-lattea-fioletovaya-29530r.php"><img src="photos/d992bf4d2cd488df4b63963039c83898.jpeg" alt="аэрогриль pag 1205d Автоматическая кофемашина Melitta CAFFEO Lattea, фиолетовая" title="аэрогриль pag 1205d Автоматическая кофемашина Melitta CAFFEO Lattea, фиолетовая"></a><h2>Автоматическая кофемашина Melitta CAFFEO Lattea, фиолетовая</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>гейзерная кофеварка delonghi Батарейки GP Batteries Super alkaline LR20 13A-BC2</h1>
						<div class="tb"><p>Цена: от <span class="price">170</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16528.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Алкалиновые батарейки типа D не содержат ртути и обладают энергоемкостью в несколько раз превышающей солевые элементы питания. Срок хранения подобной продукции составляет 7-10 лет. Отлично подойдет для цифровой техники, фонариков, электронных игрушек, пультов управления и т.д. В комплекте 2 штуки.</p><p><b>Характеристики:</b></p><ul type=disc><li>Технология производства: алкалиновая <li>Типоразмер: D <li>Напряжение: 1.5V <li>Не содержат кадмия и ртути - экологически чистый продукт. <li>Обладают повышенной электрической емкостью. <li>Батарейки идеально подходят для устройств с высоким потреблением энергии. <li>Особенно эффективны в изделиях с высоким током потребления, таких как плееры, фонари, фотовспышки, электронные игрушки, переносные ТВ и т.д.</li></ul><p><b>Производитель:</b> GP Batteries.</p><p><b>Страна:</b> Гонконг.</p> гейзерная кофеварка delonghi</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b6c05d69ce9bf94410c78acce4c5e9cb.jpeg" alt="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер" title="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер"><div class="box"><a href="http://kitchentech.elitno.net/bodum-bistro-euro-elektricheskiy-mikser-2740r.php"><h3 class="title">контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер</h3><p>от <span class="price">2740</span> руб.</p></a></div></li>
						<li><img src="photos/2118e94c9f54fd8ac8f1f2abebe50fe3.jpeg" alt="ручной блендер hr1659 Мультиварка Maruchi RW-FZ47" title="ручной блендер hr1659 Мультиварка Maruchi RW-FZ47"><div class="box" page="multivarka-maruchi-rwfz-4000r"><span class="title">ручной блендер hr1659 Мультиварка Maruchi RW-FZ47</span><p>от <span class="price">4000</span> руб.</p></div></li>
						<li><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/f529cddb8b0b7bbdfe7eea8e3d43b5b1.jpeg" alt="греется пылесос Чайник электрический Atlanta ATH-752" title="греется пылесос Чайник электрический Atlanta ATH-752"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-1600r-2"><span class="title">греется пылесос Чайник электрический Atlanta ATH-752</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li class="large"><img src="photos/6b196c567e46a72cdbf1317947c6e278.jpeg" alt="дешевая хлебопечка Чайник электрический  Vitesse VS-112, дорожный 0,8л" title="дешевая хлебопечка Чайник электрический  Vitesse VS-112, дорожный 0,8л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-dorozhnyy-l-970r"><span class="title">дешевая хлебопечка Чайник электрический  Vitesse VS-112, дорожный 0,8л</span><p>от <span class="price">970</span> руб.</p></div></li>
						<li class="large"><img src="photos/759cc36b06e68665280825b9c45b38c7.jpeg" alt="пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO" title="пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO"><div class="box" page="elektricheskiy-chaynik-l-krasnyy-bodum-bistro-euro-2270r"><span class="title">пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li class="large"><img src="photos/35040f2562bad52e53caa0b063a02983.jpeg" alt="купить мясорубку панасоник Автошампунь Karcher RM 806 (5 л) RU" title="купить мясорубку панасоник Автошампунь Karcher RM 806 (5 л) RU"><div class="box" page="avtoshampun-karcher-rm-l-ru-1000r"><span class="title">купить мясорубку панасоник Автошампунь Karcher RM 806 (5 л) RU</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/96ed77acce770bf04afcf29723d61326.jpeg" alt="мультиварка скороварка moulinex Бумажные фильтры-мешки 300 (787-102) для Thomas" title="мультиварка скороварка moulinex Бумажные фильтры-мешки 300 (787-102) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1000r-2"><span class="title">мультиварка скороварка moulinex Бумажные фильтры-мешки 300 (787-102) для Thomas</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/08939404bc185a897cf2a335ea28842f.jpeg" alt="пылесос вертикальный Пылесос Redmond RV-308" title="пылесос вертикальный Пылесос Redmond RV-308"><div class="box" page="pylesos-redmond-rv-7990r"><span class="title">пылесос вертикальный Пылесос Redmond RV-308</span><p>от <span class="price">7990</span> руб.</p></div></li>
						<li><img src="photos/7660e64f2f5c029aab5d6fad25c29084.jpeg" alt="бездрожжевой хлеб в хлебопечке Пылесос Vitek 1843" title="бездрожжевой хлеб в хлебопечке Пылесос Vitek 1843"><div class="box" page="pylesos-vitek-3990r"><span class="title">бездрожжевой хлеб в хлебопечке Пылесос Vitek 1843</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/1075d3353fd91819c5405594beb1237b.jpeg" alt="работа парогенератора Пылесос Dyson motorhead DC 23" title="работа парогенератора Пылесос Dyson motorhead DC 23"><div class="box" page="pylesos-dyson-motorhead-dc-36990r"><span class="title">работа парогенератора Пылесос Dyson motorhead DC 23</span><p>от <span class="price">36990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("batareyki-gp-batteries-super-alkaline-lr-abc-170r.php", 0, -4); if (file_exists("comments/batareyki-gp-batteries-super-alkaline-lr-abc-170r.php")) require_once "comments/batareyki-gp-batteries-super-alkaline-lr-abc-170r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="batareyki-gp-batteries-super-alkaline-lr-abc-170r.php" method="post" onsubmit="return checkForm(this)">
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