<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("parogenerator-lelit-psn-12000r.php","продам соковыжималку");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("parogenerator-lelit-psn-12000r.php", $nick, $comment);
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
		<title>продам соковыжималку Парогенератор Lelit PS11N  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="продам соковыжималку, крышка для микроволновой печи, выбор микроволновой печи, выпечка в хлебопечке мулинекс, чайник электрический bork, пылесос thomas s1, что можно сделать из пылесоса, пароварки в минске, clatronic хлебопечка, взбить блендером яйца, рецепты для мультиварки cuckoo, курица с грибами в мультиварке, brand аэрогриль, какой лучше парогенератор,  работа аэрогриля">
		<meta name="description" content="продам соковыжималку Парогенератор от итальянского производителя Lelit отлично подойдет для использов...">
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
						<a class="photo" href="photos/94de14730b416ab6939a25c5af76e14e.jpeg" title="продам соковыжималку Парогенератор Lelit PS11N"><img src="photos/94de14730b416ab6939a25c5af76e14e.jpeg" alt="продам соковыжималку Парогенератор Lelit PS11N" title="продам соковыжималку Парогенератор Lelit PS11N -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-1090r.php"><img src="photos/23396bca502057564018abfebb4d84d5.jpeg" alt="крышка для микроволновой печи Блендер Redmond RHB-2910" title="крышка для микроволновой печи Блендер Redmond RHB-2910"></a><h2>Блендер Redmond RHB-2910</h2></li>
							<li><a href="http://kitchentech.elitno.net/vspenivatel-melitta-cremio-krasnyy-4155r.php"><img src="photos/0b57a5fa2564b3001e847ebdd45ce976.jpeg" alt="выбор микроволновой печи Вспениватель Melitta Cremio красный" title="выбор микроволновой печи Вспениватель Melitta Cremio красный"></a><h2>Вспениватель Melitta Cremio красный</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikser-atlanta-ath-670r.php"><img src="photos/78465bcfeecb4716f9891b6cf30f9b2b.jpeg" alt="выпечка в хлебопечке мулинекс Миксер Atlanta ATH-290" title="выпечка в хлебопечке мулинекс Миксер Atlanta ATH-290"></a><h2>Миксер Atlanta ATH-290</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>продам соковыжималку Парогенератор Lelit PS11N</h1>
						<div class="tb"><p>Цена: от <span class="price">12000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16427.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Парогенератор от итальянского производителя Lelit отлично подойдет для использования, как дома, так и в профессиональной сфере. Бойлер из нержавеющей стали имеет специальное покрытие, препятствующее образованию известкового налета.</p><p>Утюг работает на водопроводной воде, внутри его алюминиевой подошвы расположены 32 паровые камеры. Модель <b>PS11N</b> выдает мощную струю сухого пара, который дает вам возможность гладить большое количество вещей. Рукоятка с пробковым покрытием препятствует потению и скольжению рук. Кнопку подачи пара при желании можно адаптировать для левшей.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Напряжение: 220/230 В <li>Номинальный/Фактический объем бойлера: 1,2/0,9 л <li>Время непрерывной работы: 1 час <li>Потребляемая мощность: Утюг – 800 кВт/Бойлер – 1150 кВт <li>Рабочее/ Максимальное давление пара: 2,5 бар/5,5 бар <li>Стандартная комплектация: воронка для залива воды; силиконовый коврик-подставка, утюг FS (вес 1,8 кг) <li>Дополнительная комплектация: тефлоновая подошва LELIT PA 205/1; силиконовый коврик под утюг LELIT CD363; подставка под парогенератор LELIT PA032; коврик для очистки утюга Puliferro <li>Технические особенности: корпус и бойлер из нержавеющей стали INOX 18/10. Внешний нагревательный элемент. Внутренний электроклапан. <li>Размер: 27х39х31 см <li>Вес: 7 кг</li></ul><p><b>Производитель:</b> Lelit.</p><p><b>Страна:</b> Италия.</p><p><b>Гарантия:</b> 1 год.</p> продам соковыжималку</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/cba9fd30236faeadb264f6621c9544f6.jpeg" alt="чайник электрический bork Соковыжималка Maxima MJ-049 + блендер" title="чайник электрический bork Соковыжималка Maxima MJ-049 + блендер"><div class="box" page="sokovyzhimalka-maxima-mj-blender-2190r"><span class="title">чайник электрический bork Соковыжималка Maxima MJ-049 + блендер</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/c73e008984140d52a15fd324bddeb59f.jpeg" alt="пылесос thomas s1 Чайник электрический Vitek VT-1141" title="пылесос thomas s1 Чайник электрический Vitek VT-1141"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1350r-2"><span class="title">пылесос thomas s1 Чайник электрический Vitek VT-1141</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li><img src="photos/537c78beb6320fe2c86004c22681bdc6.jpeg" alt="что можно сделать из пылесоса Чайник электрический Maxima MК- M221 (1,5л)" title="что можно сделать из пылесоса Чайник электрический Maxima MК- M221 (1,5л)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-l-760r"><span class="title">что можно сделать из пылесоса Чайник электрический Maxima MК- M221 (1,5л)</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/70e82a3bba6b14786d891ffcea703881.jpeg" alt="пароварки в минске Электрический чайник Atlanta АТН-611" title="пароварки в минске Электрический чайник Atlanta АТН-611"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-700r"><span class="title">пароварки в минске Электрический чайник Atlanta АТН-611</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li class="large"><img src="photos/1bbdc32e5167c3f95a77515679aaf9df.jpeg" alt="clatronic хлебопечка Электрический чайник Atlanta АТН-700" title="clatronic хлебопечка Электрический чайник Atlanta АТН-700"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-1280r"><span class="title">clatronic хлебопечка Электрический чайник Atlanta АТН-700</span><p>от <span class="price">1280</span> руб.</p></div></li>
						<li class="large"><img src="photos/a42c720a2044c4a70ca880342e1aa3f1.jpeg" alt="взбить блендером яйца Чайник дисковый керамический 1,7л, розовые цветы Zauber ECO-350" title="взбить блендером яйца Чайник дисковый керамический 1,7л, розовые цветы Zauber ECO-350"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-rozovye-cvety-zauber-eco-1750r"><span class="title">взбить блендером яйца Чайник дисковый керамический 1,7л, розовые цветы Zauber ECO-350</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li class="large"><img src="photos/5b880c439b70bdcfe7580a48a2aa9fb4.jpeg" alt="рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник" title="рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник"><div class="box" page="melitta-enjoy-aqua-chaynik-0r"><span class="title">рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник</span><p>от <span class="price">0</span> руб.</p></div></li>
						<li><img src="photos/d5bfaa3b5f694911004b112b3792a6d5.jpeg" alt="курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130" title="курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130"><div class="box" page="komplekt-filtrovmeshkov-karcher-480r"><span class="title">курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/26befd04ebef6df7b3db2c4e6ee2357f.jpeg" alt="brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)" title="brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-215r-2"><span class="title">brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/512f8d3c0276804b57a2729ea05d9ba6.jpeg" alt="какой лучше парогенератор Набор мешков-пылесборников 35 (787-183) для Thomas" title="какой лучше парогенератор Набор мешков-пылесборников 35 (787-183) для Thomas"><div class="box" page="nabor-meshkovpylesbornikov-dlya-thomas-1100r-2"><span class="title">какой лучше парогенератор Набор мешков-пылесборников 35 (787-183) для Thomas</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/c0a2e2be0cab06fcd64d43478c95622c.jpeg" alt="дозиметр радиоактивности Пылесос моющий Thomas Twin TT Aquafilter" title="дозиметр радиоактивности Пылесос моющий Thomas Twin TT Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-tt-aquafilter-14900r"><span class="title">дозиметр радиоактивности Пылесос моющий Thomas Twin TT Aquafilter</span><p>от <span class="price">14900</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("parogenerator-lelit-psn-12000r.php", 0, -4); if (file_exists("comments/parogenerator-lelit-psn-12000r.php")) require_once "comments/parogenerator-lelit-psn-12000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="parogenerator-lelit-psn-12000r.php" method="post" onsubmit="return checkForm(this)">
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