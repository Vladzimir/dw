<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("redmond-rkmd-chaynik-elektricheskiy-4950r.php","варка на пару в мультиварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("redmond-rkmd-chaynik-elektricheskiy-4950r.php", $nick, $comment);
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
		<title>варка на пару в мультиварке Redmond RK-M120D Чайник электрический  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="варка на пару в мультиварке, микроволновая печь рейтинг, поломки микроволновых печей, пылесосы с аквафильтром soteco, блендер braun 570, пароварка тефаль цена, пылесос томас твин т1, стоит ли покупать мультиварку, венчики для миксера, купить пылесос зелмер, посоветуйте хлебопечку, мастурбирует пылесосом, кекс в хлебопечке панасоник, солянка в мультиварке,  пылесос с электрощеткой">
		<meta name="description" content="варка на пару в мультиварке Чайник нового поколения - Redmond RK-M120D. Дизайн поистине достойный космическо...">
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
						<a class="photo" href="photos/0e0d48622ca21267b7347abd2a6edbfa.jpeg" title="варка на пару в мультиварке Redmond RK-M120D Чайник электрический"><img src="photos/0e0d48622ca21267b7347abd2a6edbfa.jpeg" alt="варка на пару в мультиварке Redmond RK-M120D Чайник электрический" title="варка на пару в мультиварке Redmond RK-M120D Чайник электрический -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofemolka-ath-540r.php"><img src="photos/7189b59307d880db0fc6d320b1efc4f4.jpeg" alt="микроволновая печь рейтинг Кофемолка ATH-277" title="микроволновая печь рейтинг Кофемолка ATH-277"></a><h2>Кофемолка ATH-277</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3300r.php"><img src="photos/b4cdab793f8c554f9150b177db178b02.jpeg" alt="поломки микроволновых печей Микроволновая печь Vitek VT-1683" title="поломки микроволновых печей Микроволновая печь Vitek VT-1683"></a><h2>Микроволновая печь Vitek VT-1683</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-atlanta-ath-2150r.php"><img src="photos/78e004a504b51dca5b370513a73854ac.jpeg" alt="пылесосы с аквафильтром soteco Мясорубка  Atlanta ATH-373" title="пылесосы с аквафильтром soteco Мясорубка  Atlanta ATH-373"></a><h2>Мясорубка  Atlanta ATH-373</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>варка на пару в мультиварке Redmond RK-M120D Чайник электрический</h1>
						<div class="tb"><p>Цена: от <span class="price">4950</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18660.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Чайник нового поколения - Redmond RK-M120D. Дизайн поистине достойный космического корабля, 5 особенных режимов температуры – отдельного для кофе и каждого вида чая (белый, зеленый, красный, черный). Спираль и корпус выполнены из нержавеющей стали, мощность чайника 2000Вт –1,7 литра воды вскипит за считанные минуты. Отдельный режим \Keep Warm\ позволит в течение получаса поддерживать температуру заранее выбранного режима заварки и не даст воде в чайнике остыть. Дополнительными плюсами являются красивая подсветка, защита от включения без воды и блокировка крышки (можно не бояться облиться кипятком при случайном открытии), а длинный шнур позволит разместить прибор в удобном для Вас месте. </p><p><b>Характеристики:</b></p><ul type=disc><li>Мощность: 2000 Вт; <li>Емкость: 1.7 л; <li>Нагревательный элемент: закрытая спираль; <li>Корпус: металл; <li>Терморегулятор ступенчатый 5 режимов (70, 80, 90, 95, 100) <li>Автоматическое выключение при закипании; <li>Индикация включения; <li>Шкала уровня воды; <li>Подсветка воды; <li>Блокировка крышки; <li>Длина шнура 1,5; </li></ul><p><b>Производитель: США</b></p><p><b>Гарантия: 2 года</b></p> варка на пару в мультиварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/bdf8f9bd66e96c1684451b1f1e782b63.jpeg" alt="блендер braun 570 Тостер лимонный Bodum BISTRO 10709-565EURO" title="блендер braun 570 Тостер лимонный Bodum BISTRO 10709-565EURO"><div class="box" page="toster-limonnyy-bodum-bistro-euro-3660r"><span class="title">блендер braun 570 Тостер лимонный Bodum BISTRO 10709-565EURO</span><p>от <span class="price">3660</span> руб.</p></div></li>
						<li><img src="photos/fd3d354d6633b81b504bbc499f3c5989.jpeg" alt="пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый" title="пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый"><div class="box" page="chaynik-elektricheskiy-vitek-vt-zheltyy-1120r"><span class="title">пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый</span><p>от <span class="price">1120</span> руб.</p></div></li>
						<li><img src="photos/58caa49e2e5c4bf06cfbf9dcdde29448.jpeg" alt="пылесос томас твин т1 Чайник электрический Vitek VT-1142" title="пылесос томас твин т1 Чайник электрический Vitek VT-1142"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1950r"><span class="title">пылесос томас твин т1 Чайник электрический Vitek VT-1142</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/5a4405159d0c690183630df2cbdbbd36.jpeg" alt="стоит ли покупать мультиварку Чайник электрический Tefal VitesseS BF66224 1,7 л" title="стоит ли покупать мультиварку Чайник электрический Tefal VitesseS BF66224 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1620r"><span class="title">стоит ли покупать мультиварку Чайник электрический Tefal VitesseS BF66224 1,7 л</span><p>от <span class="price">1620</span> руб.</p></div></li>
						<li class="large"><img src="photos/8be60bf8ecb8c08e6df4d6b339b40b58.jpeg" alt="венчики для миксера Чайник электрический Atlanta ATH-759" title="венчики для миксера Чайник электрический Atlanta ATH-759"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-990r-2"><span class="title">венчики для миксера Чайник электрический Atlanta ATH-759</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/67898b31f2a00b51820f96bc789fed43.jpeg" alt="купить пылесос зелмер Чайник электрический Maxima MК- M281" title="купить пылесос зелмер Чайник электрический Maxima MК- M281"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-760r"><span class="title">купить пылесос зелмер Чайник электрический Maxima MК- M281</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/0b3cd91064942c75434bb396eaa4e0d2.jpeg" alt="посоветуйте хлебопечку Redmond RK-M121D Чайник электрический" title="посоветуйте хлебопечку Redmond RK-M121D Чайник электрический"><div class="box" page="redmond-rkmd-chaynik-elektricheskiy-1990r"><span class="title">посоветуйте хлебопечку Redmond RK-M121D Чайник электрический</span><p>от <span class="price">1990</span> руб.</p></div></li>
						<li><img src="photos/c16b11d86e06570e114bf85b9cd3a864.jpeg" alt="мастурбирует пылесосом Отпариватель одежды ROVUS Garment Steamer" title="мастурбирует пылесосом Отпариватель одежды ROVUS Garment Steamer"><div class="box" page="otparivatel-odezhdy-rovus-garment-steamer-3500r"><span class="title">мастурбирует пылесосом Отпариватель одежды ROVUS Garment Steamer</span><p>от <span class="price">3500</span> руб.</p></div></li>
						<li><img src="photos/95ee2f83dd665559125032ef461af475.jpeg" alt="кекс в хлебопечке панасоник Фильтры для пылесоса Vitek VT-1866 (VT-1836)" title="кекс в хлебопечке панасоник Фильтры для пылесоса Vitek VT-1866 (VT-1836)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-175r"><span class="title">кекс в хлебопечке панасоник Фильтры для пылесоса Vitek VT-1866 (VT-1836)</span><p>от <span class="price">175</span> руб.</p></div></li>
						<li><img src="photos/39b908a415c11ffadfa5f63c6981b9e7.jpeg" alt="солянка в мультиварке Универсальная минитурбощетка в упаковке Dyson Mini Turbine Head Ir Cl Retail" title="солянка в мультиварке Универсальная минитурбощетка в упаковке Dyson Mini Turbine Head Ir Cl Retail"><div class="box" page="universalnaya-miniturboschetka-v-upakovke-dyson-mini-turbine-head-ir-cl-retail-2290r"><span class="title">солянка в мультиварке Универсальная минитурбощетка в упаковке Dyson Mini Turbine Head Ir Cl Retail</span><p>от <span class="price">2290</span> руб.</p></div></li>
						<li><img src="photos/64dc96f26f782ba3e39f0fd329fa03d0.jpeg" alt="видео хлебопечка панасоник Пылесос Thomas Power Pack 1620 C" title="видео хлебопечка панасоник Пылесос Thomas Power Pack 1620 C"><div class="box" page="pylesos-thomas-power-pack-c-4740r"><span class="title">видео хлебопечка панасоник Пылесос Thomas Power Pack 1620 C</span><p>от <span class="price">4740</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("redmond-rkmd-chaynik-elektricheskiy-4950r.php", 0, -4); if (file_exists("comments/redmond-rkmd-chaynik-elektricheskiy-4950r.php")) require_once "comments/redmond-rkmd-chaynik-elektricheskiy-4950r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="redmond-rkmd-chaynik-elektricheskiy-4950r.php" method="post" onsubmit="return checkForm(this)">
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