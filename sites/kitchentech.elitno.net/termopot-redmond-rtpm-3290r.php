<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("termopot-redmond-rtpm-3290r.php","миксер varimixer bear");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("termopot-redmond-rtpm-3290r.php", $nick, $comment);
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
		<title>миксер varimixer bear Термопот  Redmond RTP-M801  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="миксер varimixer bear, пылесос thomas genius s2, электрочайник braun, чем отличаются кофеварки, капельная кофеварка инструкция, кухня микроволновой печи, микроволновая печь daewoo koc, сравнить пароварки, утюг с парогенератором philips, купить кофемашину bosch, сварить кофе в кофеварке, слоеное тесто в аэрогриле, бытовые микроволновые печи, как выбрать кофеварку,  купить мультиварку в красноярске">
		<meta name="description" content="миксер varimixer bear Термопот RTP-M801 – чайник и термос в одном, позволяющий кипятить воду и сохраня...">
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
						<a class="photo" href="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" title="миксер varimixer bear Термопот  Redmond RTP-M801"><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="миксер varimixer bear Термопот  Redmond RTP-M801" title="миксер varimixer bear Термопот  Redmond RTP-M801 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2180r.php"><img src="photos/a1f8cd769afd06226b32e6fb44474c86.jpeg" alt="пылесос thomas genius s2 Блендер Redmond RHB-2908" title="пылесос thomas genius s2 Блендер Redmond RHB-2908"></a><h2>Блендер Redmond RHB-2908</h2></li>
							<li><a href="http://kitchentech.elitno.net/chopper-vitek-vt-1790r.php"><img src="photos/ab6d4d55ecf241ffc9d0ef81c9ea44bc.jpeg" alt="электрочайник braun Чоппер Vitek VT-1641" title="электрочайник braun Чоппер Vitek VT-1641"></a><h2>Чоппер Vitek VT-1641</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-lattea-red-35700r.php"><img src="photos/0c7c7a9daf3721e5976f772ebe4ae9e2.jpeg" alt="чем отличаются кофеварки Эспрессо-кофемашина Melitta Caffeo Lattea Red (4.0009.92)" title="чем отличаются кофеварки Эспрессо-кофемашина Melitta Caffeo Lattea Red (4.0009.92)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Lattea Red (4.0009.92)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>миксер varimixer bear Термопот  Redmond RTP-M801</h1>
						<div class="tb"><p>Цена: от <span class="price">3290</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19698.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Термопот RTP-M801 – чайник и термос в одном, позволяющий кипятить воду и сохранять ее горячей в течение продолжительного количества времени. Вы можете не только в любой момент заварить чай или кофе, но и сэкономить электроэнергию: Вам не нужно будет кипятить воду снова и снова, при этом же даже при полном потреблении мощности прибор потребляет около 0,7—0,8 кВт, что в два раз меньше, чем потребление мощности обычного электрического чайника. </p><p><b>Характеристики: </b></p><ul type=disc><li>Напряжение 220 В 50/60 Гц; <li>Объем 3.5 литра; <li>Материал емкости для воды нержавеющая сталь; <li>Способов разлива воды: 3; <li>Режим кипячения/ Режим выбора и поддержания температуры горячей воды (65,85,95С); <li>Электронная панель управления; <li>Основание с вращением на 360 гр; <li>Индикация режимов работы; <li>Шкала уровня воды; <li>Фильтр от накипи; <li>Съемный шнур; <li>Блокировка налива воды; <li>Ручка для переноски; <li>Длина шнура 1,2 м; <li>Таймер включения с обратным отсчетом на 3, 6, 12, 18, 24, 48, 72, 99 часов </li><li>Размер в упаковке (длина/ширина/высота): 0,335x0,245x0,36 м;</li> <li>Вес в упаковке: 3,6 кг.</li></ul><p><b>Производитель: США</b></p><p><b>Гарантия: 1 год</b></p> миксер varimixer bear</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/59cc932c7224c4f3a91684264a52c663.jpeg" alt="капельная кофеварка инструкция Кухонный комбайн Moulinex FP711141" title="капельная кофеварка инструкция Кухонный комбайн Moulinex FP711141"><div class="box" page="kuhonnyy-kombayn-moulinex-fp-6140r"><span class="title">капельная кофеварка инструкция Кухонный комбайн Moulinex FP711141</span><p>от <span class="price">6140</span> руб.</p></div></li>
						<li><img src="photos/d13e770b0f20ea7295762dcccfd88ddd.jpeg" alt="кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда" title="кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда"><div class="box" page="elektroplitka-indukcionnaya-maxima-mic-posuda-1790r"><span class="title">кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/82af66b2cc61bc47984a0dc33b3b0565.jpeg" alt="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310" title="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310"><div class="box" page="sokovyzhimalka-atlanta-ath-1050r"><span class="title">микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/a5a944903050174bbca074a40d4e65fa.jpeg" alt="сравнить пароварки Соковыжималка Atlanta ATH-325" title="сравнить пароварки Соковыжималка Atlanta ATH-325"><div class="box" page="sokovyzhimalka-atlanta-ath-520r"><span class="title">сравнить пароварки Соковыжималка Atlanta ATH-325</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li class="large"><img src="photos/a5a669656630312240d0cb17c653dfea.jpeg" alt="утюг с парогенератором philips Соковыжималка Maxima MJ-059" title="утюг с парогенератором philips Соковыжималка Maxima MJ-059"><div class="box" page="sokovyzhimalka-maxima-mj-1090r"><span class="title">утюг с парогенератором philips Соковыжималка Maxima MJ-059</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li class="large"><img src="photos/60dff82992355ef436c4e763a78c1f99.jpeg" alt="купить кофемашину bosch Соковыжималка для цитрусовых" title="купить кофемашину bosch Соковыжималка для цитрусовых"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-760r"><span class="title">купить кофемашину bosch Соковыжималка для цитрусовых</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/0e343e4ed2bc192a59c6c92535860524.jpeg" alt="сварить кофе в кофеварке Электрический чайник Atlanta АТН-633" title="сварить кофе в кофеварке Электрический чайник Atlanta АТН-633"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-750r"><span class="title">сварить кофе в кофеварке Электрический чайник Atlanta АТН-633</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li><img src="photos/b28d3e929be020189d8c25424817be16.jpeg" alt="слоеное тесто в аэрогриле Электрический чайник 1л зеленый Bodum BISTRO 11154-565EURO" title="слоеное тесто в аэрогриле Электрический чайник 1л зеленый Bodum BISTRO 11154-565EURO"><div class="box" page="elektricheskiy-chaynik-l-zelenyy-bodum-bistro-euro-2270r"><span class="title">слоеное тесто в аэрогриле Электрический чайник 1л зеленый Bodum BISTRO 11154-565EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li><img src="photos/4fcdbef1e4068bc4641fdad47e086ca6.jpeg" alt="бытовые микроволновые печи Парогенератор Maxima MSC-2001" title="бытовые микроволновые печи Парогенератор Maxima MSC-2001"><div class="box" page="parogenerator-maxima-msc-1650r"><span class="title">бытовые микроволновые печи Парогенератор Maxima MSC-2001</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/022434340143cfbbf0a87e93fd1fc9c0.jpeg" alt="как выбрать кофеварку Щетка для собак Dyson Groom Retail" title="как выбрать кофеварку Щетка для собак Dyson Groom Retail"><div class="box" page="schetka-dlya-sobak-dyson-groom-retail-1690r"><span class="title">как выбрать кофеварку Щетка для собак Dyson Groom Retail</span><p>от <span class="price">1690</span> руб.</p></div></li>
						<li><img src="photos/20a6a481b9a3a072fa1293146dcb1ec9.jpeg" alt="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter" title="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-super-s-aquafilter-10520r"><span class="title">кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter</span><p>от <span class="price">10520</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("termopot-redmond-rtpm-3290r.php", 0, -4); if (file_exists("comments/termopot-redmond-rtpm-3290r.php")) require_once "comments/termopot-redmond-rtpm-3290r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="termopot-redmond-rtpm-3290r.php" method="post" onsubmit="return checkForm(this)">
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