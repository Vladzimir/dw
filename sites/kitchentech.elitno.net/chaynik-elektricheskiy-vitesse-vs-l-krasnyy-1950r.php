<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1950r.php","моющий пылесос магазин");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1950r.php", $nick, $comment);
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
		<title>моющий пылесос магазин Чайник электрический  Vitesse VS-113 1,5л красный  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="моющий пылесос магазин, espresso кофемашина, мультиварка в новосибирске, спагетти в мультиварке, что приготовить в мультиварке, фиксики смотреть пылесос, делонги кофемашина примадонна, блендер braun mr 530 ca, измельчитель сучьев, утюг с тефлоновым покрытием, мультиварка daewoo dmc 200, слоеное тесто в аэрогриле, рейтинг пылесосов 2011, сосиски в мультиварке,  запчасти для пароварки">
		<meta name="description" content="моющий пылесос магазин Яркий дизайн, качество и быстрая безопасная работа – все это  электрический чайн...">
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
						<a class="photo" href="photos/e9322568d654cf02152dc451f13376f9.jpeg" title="моющий пылесос магазин Чайник электрический  Vitesse VS-113 1,5л красный"><img src="photos/e9322568d654cf02152dc451f13376f9.jpeg" alt="моющий пылесос магазин Чайник электрический  Vitesse VS-113 1,5л красный" title="моющий пылесос магазин Чайник электрический  Vitesse VS-113 1,5л красный -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/filtry-dlya-chaya-cilia-sht-165r.php"><img src="photos/64f0438800499aa2b0b34a17318e934a.jpeg" alt="espresso кофемашина Фильтры для чая Cilia, 80шт." title="espresso кофемашина Фильтры для чая Cilia, 80шт."></a><h2>Фильтры для чая Cilia, 80шт.</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-elektricheskaya-vitek-vt-belaya-3300r.php"><img src="photos/5a5674539caee9c3fc9dbe29847298d4.jpeg" alt="мультиварка в новосибирске Мясорубка электрическая Vitek VT-1671 белая" title="мультиварка в новосибирске Мясорубка электрическая Vitek VT-1671 белая"></a><h2>Мясорубка электрическая Vitek VT-1671 белая</h2></li>
							<li><a href="http://kitchentech.elitno.net/parovarkablender-philips-avent-5600r.php"><img src="photos/b4972945a0247403022f6df03f16440c.jpeg" alt="спагетти в мультиварке Пароварка-блендер Philips Avent 85300" title="спагетти в мультиварке Пароварка-блендер Philips Avent 85300"></a><h2>Пароварка-блендер Philips Avent 85300</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>моющий пылесос магазин Чайник электрический  Vitesse VS-113 1,5л красный</h1>
						<div class="tb"><p>Цена: от <span class="price">1950</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19619.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Яркий дизайн, качество и быстрая безопасная работа – все это  электрический чайник Vitesse VS-113.<br>1,5 литра воды вскипит буквально за минуту, прибор  автоматически выключится при закипании или при недостаточном уровне воды, а  дополнительными плюсами являются фильтр от накипи и удобное хранение шнура.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Объем  1.5 л;</li><li>Мощность 1500 Вт;</li><li>Тип   нагревательного элемента: закрытая спираль (центральный контакт);</li><li>Материал  корпуса металл/пластик;</li><li>Безопасность блокировка включения без воды;</li><li>Фильтр;</li><li>Индикатор уровня воды;</li><li>Индикация   включения;</li><li>Отсек  для шнура.</li></ul><p><strong>Производитель: КНР</strong><br><strong>Гарантия: 1 год</strong></p> моющий пылесос магазин</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/bd86985191b900e717a6f18b17266152.jpeg" alt="что приготовить в мультиварке Пароварка Binatone FS-404 White Green" title="что приготовить в мультиварке Пароварка Binatone FS-404 White Green"><div class="box" page="parovarka-binatone-fs-white-green-1895r"><span class="title">что приготовить в мультиварке Пароварка Binatone FS-404 White Green</span><p>от <span class="price">1895</span> руб.</p></div></li>
						<li><img src="photos/acf412ca70279cda1dfad07d522f7e3c.jpeg" alt="фиксики смотреть пылесос Пароварка Vitesse VS-507" title="фиксики смотреть пылесос Пароварка Vitesse VS-507"><div class="box" page="parovarka-vitesse-vs-1290r"><span class="title">фиксики смотреть пылесос Пароварка Vitesse VS-507</span><p>от <span class="price">1290</span> руб.</p></div></li>
						<li><img src="photos/46a5120709bf99f581bc7ea7569bd649.png" alt="делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902" title="делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902"><div class="box" page="hlebopech-redmond-rbmm-3990r"><span class="title">делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/aca42b878e4277b1730672f4f845a597.jpeg" alt="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black" title="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black"><div class="box" page="chaynik-elektricheskiy-binatone-nk-black-1200r"><span class="title">блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/7b0ef0b12e5f66ec7582c9396725bc92.jpeg" alt="измельчитель сучьев Чайник электрический Vitek VT-1120" title="измельчитель сучьев Чайник электрический Vitek VT-1120"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1150r"><span class="title">измельчитель сучьев Чайник электрический Vitek VT-1120</span><p>от <span class="price">1150</span> руб.</p></div></li>
						<li class="large"><img src="photos/9886fb8aa4d27a4c0947d702e96f79ee.jpeg" alt="утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291" title="утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-760r-2"><span class="title">утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/1ce3d92d8e0391534b2eb43fa514d9a4.jpeg" alt="мультиварка daewoo dmc 200 Чайник электрический Redmond RK-М119" title="мультиварка daewoo dmc 200 Чайник электрический Redmond RK-М119"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-2690r"><span class="title">мультиварка daewoo dmc 200 Чайник электрический Redmond RK-М119</span><p>от <span class="price">2690</span> руб.</p></div></li>
						<li><img src="photos/b28d3e929be020189d8c25424817be16.jpeg" alt="слоеное тесто в аэрогриле Электрический чайник 1л зеленый Bodum BISTRO 11154-565EURO" title="слоеное тесто в аэрогриле Электрический чайник 1л зеленый Bodum BISTRO 11154-565EURO"><div class="box" page="elektricheskiy-chaynik-l-zelenyy-bodum-bistro-euro-2270r"><span class="title">слоеное тесто в аэрогриле Электрический чайник 1л зеленый Bodum BISTRO 11154-565EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li><img src="photos/ea47296a93804ab77bc9f5e5af614a8b.jpeg" alt="рейтинг пылесосов 2011 Батарейка GP Batteries Super alkaline LR14 14A-BC2" title="рейтинг пылесосов 2011 Батарейка GP Batteries Super alkaline LR14 14A-BC2"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-130r"><span class="title">рейтинг пылесосов 2011 Батарейка GP Batteries Super alkaline LR14 14A-BC2</span><p>от <span class="price">130</span> руб.</p></div></li>
						<li><img src="photos/9e96bced898e611bddc3653f39cf1ccf.jpeg" alt="сосиски в мультиварке Пылесос KARCHER WD 3.300 M EU-I" title="сосиски в мультиварке Пылесос KARCHER WD 3.300 M EU-I"><div class="box" page="pylesos-karcher-wd-m-eui-4490r"><span class="title">сосиски в мультиварке Пылесос KARCHER WD 3.300 M EU-I</span><p>от <span class="price">4490</span> руб.</p></div></li>
						<li><img src="photos/a5307e77bbd77d05fd1bf891a3eeb5d0.jpeg" alt="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный" title="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-4590r"><span class="title">хлебопечки в новосибирске Пылесос Vitek VT-1845 красный</span><p>от <span class="price">4590</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1950r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1950r.php")) require_once "comments/chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1950r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1950r.php" method="post" onsubmit="return checkForm(this)">
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