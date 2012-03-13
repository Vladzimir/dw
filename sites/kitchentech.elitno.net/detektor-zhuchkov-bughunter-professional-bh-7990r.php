<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("detektor-zhuchkov-bughunter-professional-bh-7990r.php","бедра в аэрогриле");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("detektor-zhuchkov-bughunter-professional-bh-7990r.php", $nick, $comment);
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
		<title>бедра в аэрогриле Детектор жучков BugHunter Professional BH-01  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="бедра в аэрогриле, стоимость соковыжималки, мясорубка binatone, хлебопечка хлеб из гречневой муки, мультиварка акции, пылесос автомобильный купить, электронная мясорубка, kenwood пароварка, инструкция хлебопечка bork, hyla пылесос цена, борк мешки для пылесоса, мини соковыжималка, кофеварка espresso, бытовая техника пылесосы,  плов в мультиварке супра">
		<meta name="description" content="бедра в аэрогриле Детектор жучков BugHunter Professional BH-01 представляет собой  многопроцессорн...">
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
						<a class="photo" href="photos/41efedb38089aeb46a210ce7ff30eedc.jpeg" title="бедра в аэрогриле Детектор жучков BugHunter Professional BH-01"><img src="photos/41efedb38089aeb46a210ce7ff30eedc.jpeg" alt="бедра в аэрогриле Детектор жучков BugHunter Professional BH-01" title="бедра в аэрогриле Детектор жучков BugHunter Professional BH-01 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofemolka-maxima-mcg-550r.php"><img src="photos/ccf51377f0419f271513b485782fac2b.jpeg" alt="стоимость соковыжималки Кофемолка Maxima MCG-1602" title="стоимость соковыжималки Кофемолка Maxima MCG-1602"></a><h2>Кофемолка Maxima MCG-1602</h2></li>
							<li><a href="http://kitchentech.elitno.net/parovarka-tefal-simply-invents-vc-3990r.php"><img src="photos/cf93342053e92b125e6f4adca7e47bbe.jpeg" alt="мясорубка binatone Пароварка Tefal Simply Invents VC1017" title="мясорубка binatone Пароварка Tefal Simply Invents VC1017"></a><h2>Пароварка Tefal Simply Invents VC1017</h2></li>
							<li><a href="http://kitchentech.elitno.net/indukcionnaya-plita-kitfort-kt-2700r.php"><img src="photos/7ffc20dc8107b2fc1365cfb7486e823a.jpeg" alt="хлебопечка хлеб из гречневой муки Индукционная плита Kitfort KT-101" title="хлебопечка хлеб из гречневой муки Индукционная плита Kitfort KT-101"></a><h2>Индукционная плита Kitfort KT-101</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>бедра в аэрогриле Детектор жучков BugHunter Professional BH-01</h1>
						<div class="tb"><p>Цена: от <span class="price">7990</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26042.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Детектор жучков BugHunter Professional BH-01 представляет собой  многопроцессорную высокоскоростную систему обнаружения цифровых и аналоговых  «жучков», скрытых беспроводных камер, а также сотовых и радиотелефонов, раций и  микрофонов. Детектор жучков BugHunter Professional BH-01  имеет отличные технические показатели, большую площадь обнаружения и  динамический диапазон. Кроме того, приятным дополнением к функциональность  данного прибора является его оптимальный размер (10,5x5,8x1,8 см).</p>  <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Диапазон       рабочих частот: 50-3000 МГц;</li>   <li>Чувствительность:       не менее 50 мВ/м;</li>   <li>Динамический       диапазон: не менее 45 Дб</li>   <li>Дальность       обнаружения радиопередатчика 5 мВт: 5 м;</li>   <li>Дальность       обнаружения сотового телефона: 50 м;</li>   <li>Габариты       детектора: 10,5x5,8x1,8 см.</li> </ul> <p><strong>Производитель: </strong><strong>BugHunter (Россия)</strong></p> бедра в аэрогриле</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b11b426009f0167e5ff93f5aa64ca56d.jpeg" alt="мультиварка акции Чайник электрический Tefal VitesseS BF66204 1,7 л" title="мультиварка акции Чайник электрический Tefal VitesseS BF66204 1,7 л"><div class="box"><a href="http://kitchentech.elitno.net/chaynik-elektricheskiy-tefal-vitesses-bf-l-1650r.php"><h3 class="title">мультиварка акции Чайник электрический Tefal VitesseS BF66204 1,7 л</h3><p>от <span class="price">1650</span> руб.</p></a></div></li>
						<li><img src="photos/b2f5222e6fab12eeb526363895bfe319.jpeg" alt="пылесос автомобильный купить Чайник электрический  Vitesse VS-138 1,7л" title="пылесос автомобильный купить Чайник электрический  Vitesse VS-138 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-950r"><span class="title">пылесос автомобильный купить Чайник электрический  Vitesse VS-138 1,7л</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li><img src="photos/f056d129bd10f6cbcdccf3b119b91dc8.jpeg" alt="электронная мясорубка Чайник электрический  Vitesse VS-143 стеклянный 1,7л" title="электронная мясорубка Чайник электрический  Vitesse VS-143 стеклянный 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-steklyannyy-l-2280r"><span class="title">электронная мясорубка Чайник электрический  Vitesse VS-143 стеклянный 1,7л</span><p>от <span class="price">2280</span> руб.</p></div></li>
						<li><img src="photos/97ad6f71f59b7db73d8fda12c75e94a2.jpeg" alt="kenwood пароварка Зарядное устройство GP Batteries PB360GS210-UE2" title="kenwood пароварка Зарядное устройство GP Batteries PB360GS210-UE2"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbgsue-680r"><span class="title">kenwood пароварка Зарядное устройство GP Batteries PB360GS210-UE2</span><p>от <span class="price">680</span> руб.</p></div></li>
						<li class="large"><img src="photos/5ba6b51a5b7372f52a4d19e9b0a65db5.jpeg" alt="инструкция хлебопечка bork Детектор скрытых видеокамер BugHunter Dvideo" title="инструкция хлебопечка bork Детектор скрытых видеокамер BugHunter Dvideo"><div class="box" page="detektor-skrytyh-videokamer-bughunter-dvideo-6950r"><span class="title">инструкция хлебопечка bork Детектор скрытых видеокамер BugHunter Dvideo</span><p>от <span class="price">6950</span> руб.</p></div></li>
						<li class="large"><img src="photos/d50a3dd0a5055f1b90b2cf35609b3ff0.jpeg" alt="hyla пылесос цена Нитрат-тестер (нитратомер) СоЭкС" title="hyla пылесос цена Нитрат-тестер (нитратомер) СоЭкС"><div class="box" page="nitrattester-nitratomer-soeks-5290r"><span class="title">hyla пылесос цена Нитрат-тестер (нитратомер) СоЭкС</span><p>от <span class="price">5290</span> руб.</p></div></li>
						<li class="large"><img src="photos/6d6e50224259e87ee797b3ec79edf80e.jpeg" alt="борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP" title="борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP"><div class="box" page="ploskaya-universalnaya-nasadka-v-upakovke-dyson-flat-out-head-retail-np-2190r"><span class="title">борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/8201fb734cec793db96d43f2e27a6cc4.jpeg" alt="мини соковыжималка Набор для дома Dyson Home Cleaning Kit Retail" title="мини соковыжималка Набор для дома Dyson Home Cleaning Kit Retail"><div class="box" page="nabor-dlya-doma-dyson-home-cleaning-kit-retail-2490r"><span class="title">мини соковыжималка Набор для дома Dyson Home Cleaning Kit Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/c97072b686d00422f9e5b9490c04caab.jpeg" alt="кофеварка espresso Пылесос Thomas Inox 1545 Sfe" title="кофеварка espresso Пылесос Thomas Inox 1545 Sfe"><div class="box" page="pylesos-thomas-inox-sfe-13350r"><span class="title">кофеварка espresso Пылесос Thomas Inox 1545 Sfe</span><p>от <span class="price">13350</span> руб.</p></div></li>
						<li><img src="photos/2bc01cf0e5d557324370d108b991f168.jpeg" alt="бытовая техника пылесосы Пылесос Thomas Inox 45 S Professional" title="бытовая техника пылесосы Пылесос Thomas Inox 45 S Professional"><div class="box" page="pylesos-thomas-inox-s-professional-11290r"><span class="title">бытовая техника пылесосы Пылесос Thomas Inox 45 S Professional</span><p>от <span class="price">11290</span> руб.</p></div></li>
						<li><img src="photos/4cb4f2589649db6c2900122f369a69d4.jpeg" alt="какие дрожжи лучше для хлебопечки Сушилка для рук AEG Haustehnik HE 260 T" title="какие дрожжи лучше для хлебопечки Сушилка для рук AEG Haustehnik HE 260 T"><div class="box" page="sushilka-dlya-ruk-aeg-haustehnik-he-t-14900r"><span class="title">какие дрожжи лучше для хлебопечки Сушилка для рук AEG Haustehnik HE 260 T</span><p>от <span class="price">14900</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("detektor-zhuchkov-bughunter-professional-bh-7990r.php", 0, -4); if (file_exists("comments/detektor-zhuchkov-bughunter-professional-bh-7990r.php")) require_once "comments/detektor-zhuchkov-bughunter-professional-bh-7990r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="detektor-zhuchkov-bughunter-professional-bh-7990r.php" method="post" onsubmit="return checkForm(this)">
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