<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-maxima-mk-790r.php","вафельница советская");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-maxima-mk-790r.php", $nick, $comment);
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
		<title>вафельница советская Чайник электрический Maxima MК-112  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вафельница советская, пылесос thomas black ocean, хорошая кухня мультиварка, zelmer мясорубка отзывы, капсулы для кофемашины купить, пылесос прессующий, аэрогриль форум, грибы в мультиварке, утюг с парогенератором philips, как разобрать утюг, аэрогриль рецепты картофель, бетоносмеситель миксер, солянка в мультиварке, хлебопечки в новосибирске,  пылесос самсунг sc отзывы">
		<meta name="description" content="вафельница советская Электрический чайник Maxima MК-112 оригинального дизайна вскипятит 2 литра воды ...">
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
						<a class="photo" href="photos/b4a95c8a4ccd80ea8dd5b10c9fcfd32c.jpeg" title="вафельница советская Чайник электрический Maxima MК-112"><img src="photos/b4a95c8a4ccd80ea8dd5b10c9fcfd32c.jpeg" alt="вафельница советская Чайник электрический Maxima MК-112" title="вафельница советская Чайник электрический Maxima MК-112 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-dd-2300r.php"><img src="photos/b0d11dfbaf618701d7d5cdf29d1db36e.jpeg" alt="пылесос thomas black ocean Блендер погружной Moulinex DD904143" title="пылесос thomas black ocean Блендер погружной Moulinex DD904143"></a><h2>Блендер погружной Moulinex DD904143</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-dd-3350r.php"><img src="photos/b48d978d3a6e9e560ddd3f28a86214f1.jpeg" alt="хорошая кухня мультиварка Блендер погружной Moulinex DD906143" title="хорошая кухня мультиварка Блендер погружной Moulinex DD906143"></a><h2>Блендер погружной Moulinex DD906143</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-russell-hobbs-allure-art-5490r.php"><img src="photos/ac0d13475c79f9c87e6f514f3140de60.jpeg" alt="zelmer мясорубка отзывы Блендер Russell Hobbs Allure, арт. 18276-56" title="zelmer мясорубка отзывы Блендер Russell Hobbs Allure, арт. 18276-56"></a><h2>Блендер Russell Hobbs Allure, арт. 18276-56</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вафельница советская Чайник электрический Maxima MК-112</h1>
						<div class="tb"><p>Цена: от <span class="price">790</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18601.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Maxima MК-112 оригинального дизайна вскипятит 2 литра воды на пару минут, автоматически выключится при закипании или при недостаточном уровне воды, а специальный фильтр защитит от накипи.<br>Классический белый цвет с нежным сиреневым, корпус из жарочного пластика, спираль из нержавеющей стали, шкала воды и подсветка – весь необходимый минимум для отличного чайника.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Мощность 2000 Вт; <li>Емкость: 2 л; <li>Нагревательный элемент из нержавеющей стали; <li>Корпус из жаропрочного пластика; <li>Автоматическое выключение при закипании; <li>Автоматическое отключение при недостаточном количестве воды; <li>Угол вращения на подставке 360; <li>Световой индикатор работы; <li>Фильтр от накипи; <li>Шкала уровня воды; <li>Открытие крышки одним нажатием. </li></ul><p><strong>Производитель: MAXIMA (Англия)</strong><br><strong>Гарантия: 1 год</strong></p> вафельница советская</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/35e035621354934f31343d7d8a4fd49b.jpeg" alt="капсулы для кофемашины купить Кухонный комбайн Moulinex FP3141 Мастер шеф" title="капсулы для кофемашины купить Кухонный комбайн Moulinex FP3141 Мастер шеф"><div class="box" page="kuhonnyy-kombayn-moulinex-fp-master-shef-4350r"><span class="title">капсулы для кофемашины купить Кухонный комбайн Moulinex FP3141 Мастер шеф</span><p>от <span class="price">4350</span> руб.</p></div></li>
						<li><img src="photos/3ee610b7cf277344aaeccda38d02c2fc.jpeg" alt="пылесос прессующий Кухонный комбайн Maxima MFP-0139" title="пылесос прессующий Кухонный комбайн Maxima MFP-0139"><div class="box" page="kuhonnyy-kombayn-maxima-mfp-2190r"><span class="title">пылесос прессующий Кухонный комбайн Maxima MFP-0139</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/8c0aa6f2022172974ae917a715c05f94.jpeg" alt="аэрогриль форум Пароварка Vitek VT-1550N SR" title="аэрогриль форум Пароварка Vitek VT-1550N SR"><div class="box" page="parovarka-vitek-vtn-sr-2200r"><span class="title">аэрогриль форум Пароварка Vitek VT-1550N SR</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/07f90c95ce6a7ffe3129c0eb4bb8942c.jpeg" alt="грибы в мультиварке Электроплитка индукционная Maxima MIC-0146" title="грибы в мультиварке Электроплитка индукционная Maxima MIC-0146"><div class="box" page="elektroplitka-indukcionnaya-maxima-mic-1590r"><span class="title">грибы в мультиварке Электроплитка индукционная Maxima MIC-0146</span><p>от <span class="price">1590</span> руб.</p></div></li>
						<li class="large"><img src="photos/a5a669656630312240d0cb17c653dfea.jpeg" alt="утюг с парогенератором philips Соковыжималка Maxima MJ-059" title="утюг с парогенератором philips Соковыжималка Maxima MJ-059"><div class="box" page="sokovyzhimalka-maxima-mj-1090r"><span class="title">утюг с парогенератором philips Соковыжималка Maxima MJ-059</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li class="large"><img src="photos/c094c1a0c632dcd5f1edee8671f05107.jpeg" alt="как разобрать утюг Чайник электрический Maxima MК- M211" title="как разобрать утюг Чайник электрический Maxima MК- M211"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-1090r"><span class="title">как разобрать утюг Чайник электрический Maxima MК- M211</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li class="large"><img src="photos/7bfc4f4031d68720fdce5209cf8c8c0d.jpeg" alt="аэрогриль рецепты картофель Мини-весы Tanita 1479V" title="аэрогриль рецепты картофель Мини-весы Tanita 1479V"><div class="box" page="minivesy-tanita-v-3000r"><span class="title">аэрогриль рецепты картофель Мини-весы Tanita 1479V</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/569a7a448800e6c331839b4f1803d826.jpeg" alt="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502" title="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502"><div class="box" page="moyuschiy-koncentrat-thomas-protex-l-520r"><span class="title">бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li><img src="photos/39b908a415c11ffadfa5f63c6981b9e7.jpeg" alt="солянка в мультиварке Универсальная минитурбощетка в упаковке Dyson Mini Turbine Head Ir Cl Retail" title="солянка в мультиварке Универсальная минитурбощетка в упаковке Dyson Mini Turbine Head Ir Cl Retail"><div class="box" page="universalnaya-miniturboschetka-v-upakovke-dyson-mini-turbine-head-ir-cl-retail-2290r"><span class="title">солянка в мультиварке Универсальная минитурбощетка в упаковке Dyson Mini Turbine Head Ir Cl Retail</span><p>от <span class="price">2290</span> руб.</p></div></li>
						<li><img src="photos/a5307e77bbd77d05fd1bf891a3eeb5d0.jpeg" alt="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный" title="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-4590r"><span class="title">хлебопечки в новосибирске Пылесос Vitek VT-1845 красный</span><p>от <span class="price">4590</span> руб.</p></div></li>
						<li><img src="photos/54ef797c770f4e59b9c6cf8831b68b8a.jpeg" alt="кофемашины verobar Утюг паровой Tefal Program 8 Power Jeans 450 TC FV9347E0" title="кофемашины verobar Утюг паровой Tefal Program 8 Power Jeans 450 TC FV9347E0"><div class="box" page="utyug-parovoy-tefal-program-power-jeans-tc-fve-3650r"><span class="title">кофемашины verobar Утюг паровой Tefal Program 8 Power Jeans 450 TC FV9347E0</span><p>от <span class="price">3650</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-maxima-mk-790r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-maxima-mk-790r.php")) require_once "comments/chaynik-elektricheskiy-maxima-mk-790r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-maxima-mk-790r.php" method="post" onsubmit="return checkForm(this)">
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