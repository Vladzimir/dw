<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitek-vt-1900r.php","мясорубка 6061");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitek-vt-1900r.php", $nick, $comment);
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
		<title>мясорубка 6061 Чайник электрический Vitek VT-1159  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мясорубка 6061, компактная микроволновая печь, мультиварка скороварка moulinex, мотор пылесоса самсунг, что можно делать блендером, где купить пароварку, смазочный утюг, какой пылесос самый лучший, марки микроволновых печей, мультиварка киев купить, купить лопатку для хлебопечки, для чего нужен блендер, курица с грибами в мультиварке, ржаная мука для хлебопечки,  сколько стоит моющий пылесос">
		<meta name="description" content="мясорубка 6061 Прекрасный электрический чайник Vitek VT-1159 в корпусе из нержавеющей стали отл...">
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
						<a class="photo" href="photos/8e4c77fcf3cd711bd8454688ff0f7bc7.jpeg" title="мясорубка 6061 Чайник электрический Vitek VT-1159"><img src="photos/8e4c77fcf3cd711bd8454688ff0f7bc7.jpeg" alt="мясорубка 6061 Чайник электрический Vitek VT-1159" title="мясорубка 6061 Чайник электрический Vitek VT-1159 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-blender-s-aksessuarami-bodum-bistro-keuro-3780r.php"><img src="photos/a7593a9ae0c3505a2632ee9e30dcbbe0.jpeg" alt="компактная микроволновая печь Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO" title="компактная микроволновая печь Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO"></a><h2>Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-lattea-silverwhite-34975r.php"><img src="photos/6fa7808f592c05532d5148c220952ba1.jpeg" alt="мультиварка скороварка moulinex Эспрессо-кофемашина Melitta Caffeo Lattea Silver-White (4.0009.94)" title="мультиварка скороварка moulinex Эспрессо-кофемашина Melitta Caffeo Lattea Silver-White (4.0009.94)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Lattea Silver-White (4.0009.94)</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektroplitka-maxima-mes-550r.php"><img src="photos/99f24579a4151d885006823a70346b26.jpeg" alt="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1" title="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1"></a><h2>Электроплитка Maxima MES-0152-1</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мясорубка 6061 Чайник электрический Vitek VT-1159</h1>
						<div class="tb"><p>Цена: от <span class="price">1900</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8411.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Прекрасный <b>электрический чайник Vitek VT-1159</b> в корпусе из нержавеющей стали отлично дополнит интерьер любой кухни. Среди достоинств модели можно отметить: скрытый нагревательный элемент, расположенный в дисковой подставке; место для хранения шнура; съемный фильтр от накипи, а также систему автоотключения при закипании и защиту от перегрева. Объем резервуара 1,7л.</p><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Мощность: 2000-2400Вт </li><li>Нагревательный элемент: скрытый </li><li>Поворачивающийся корпус: 360° </li><li>Объем: 1,7л </li><li>Материал корпуса: нержавеющая сталь </li><li>Фильтр: съемный фильтр от накипи </li><li>Индикатор уровня воды: есть </li><li>Автоотключение при закипании воды: есть </li><li>Световой индикатор работы: есть </li><li>Место для хранения шнура: есть </li><li>Электропитание: 220-240В, ~50Гц</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> мясорубка 6061</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/060f95312423ba3e968eaf23618bd36d.jpeg" alt="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White" title="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White"><div class="box" page="myasorubka-elektricheskaya-binatone-mgr-white-3700r"><span class="title">что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White</span><p>от <span class="price">3700</span> руб.</p></div></li>
						<li><img src="photos/1a39977506779af8e80d3d2045a86d6b.jpeg" alt="где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001" title="где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001"><div class="box" page="myasorubka-elektricheskaya-tefal-le-hachoir-me-5100r"><span class="title">где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001</span><p>от <span class="price">5100</span> руб.</p></div></li>
						<li><img src="photos/53d96832eb34bb57a7f20e415ffd59f8.jpeg" alt="смазочный утюг Тостер Russell Hobbs Cottage, арт. 18260-57" title="смазочный утюг Тостер Russell Hobbs Cottage, арт. 18260-57"><div class="box" page="toster-russell-hobbs-cottage-art-2690r"><span class="title">смазочный утюг Тостер Russell Hobbs Cottage, арт. 18260-57</span><p>от <span class="price">2690</span> руб.</p></div></li>
						<li><img src="photos/27ce5b772a93a2336124e9a6817baf03.jpeg" alt="какой пылесос самый лучший Фритюрница Tefal Actifry FZ7000" title="какой пылесос самый лучший Фритюрница Tefal Actifry FZ7000"><div class="box" page="frityurnica-tefal-actifry-fz-7700r"><span class="title">какой пылесос самый лучший Фритюрница Tefal Actifry FZ7000</span><p>от <span class="price">7700</span> руб.</p></div></li>
						<li class="large"><img src="photos/d6db045bcfab03ae142ac160811c2a0a.jpeg" alt="марки микроволновых печей Чайник электричесукий Atlanta ATH-756" title="марки микроволновых печей Чайник электричесукий Atlanta ATH-756"><div class="box" page="chaynik-elektrichesukiy-atlanta-ath-950r"><span class="title">марки микроволновых печей Чайник электричесукий Atlanta ATH-756</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/1b3cfce3fc4c2602ab4206bda1961e7d.jpeg" alt="мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный" title="мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belolazurnyy-920r"><span class="title">мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li class="large"><img src="photos/ab56fe42ec3af82144d9f5eb1f80eb4c.jpeg" alt="купить лопатку для хлебопечки Мини весы Tangent KP-103" title="купить лопатку для хлебопечки Мини весы Tangent KP-103"><div class="box" page="mini-vesy-tangent-kp-1200r"><span class="title">купить лопатку для хлебопечки Мини весы Tangent KP-103</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/14e5114315c1928323477764da917a61.jpeg" alt="для чего нужен блендер Парогенератор Lelit PS20" title="для чего нужен блендер Парогенератор Lelit PS20"><div class="box" page="parogenerator-lelit-ps-12650r"><span class="title">для чего нужен блендер Парогенератор Lelit PS20</span><p>от <span class="price">12650</span> руб.</p></div></li>
						<li><img src="photos/d5bfaa3b5f694911004b112b3792a6d5.jpeg" alt="курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130" title="курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130"><div class="box" page="komplekt-filtrovmeshkov-karcher-480r"><span class="title">курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/6ad68580ca9fe51d58dccc0df51b3bb5.jpeg" alt="ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter" title="ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-aquatherm-aquafilter-16720r"><span class="title">ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter</span><p>от <span class="price">16720</span> руб.</p></div></li>
						<li><img src="photos/0c61c04ea066965d61b957c776ac9e0d.jpeg" alt="дозиметр соэкс Вертикальный циклонический пылесос Montiss CVC5667 White" title="дозиметр соэкс Вертикальный циклонический пылесос Montiss CVC5667 White"><div class="box" page="vertikalnyy-ciklonicheskiy-pylesos-montiss-cvc-white-4850r"><span class="title">дозиметр соэкс Вертикальный циклонический пылесос Montiss CVC5667 White</span><p>от <span class="price">4850</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitek-vt-1900r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitek-vt-1900r.php")) require_once "comments/chaynik-elektricheskiy-vitek-vt-1900r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitek-vt-1900r.php" method="post" onsubmit="return checkForm(this)">
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