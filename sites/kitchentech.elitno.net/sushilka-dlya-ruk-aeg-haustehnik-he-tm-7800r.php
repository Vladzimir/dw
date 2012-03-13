<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("sushilka-dlya-ruk-aeg-haustehnik-he-tm-7800r.php","дозиметр белла");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("sushilka-dlya-ruk-aeg-haustehnik-he-tm-7800r.php", $nick, $comment);
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
		<title>дозиметр белла Сушилка для рук AEG Haustehnik HE 260 TM  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="дозиметр белла, кофеварка френч пресс, пылесос samsung sc 4326, стоимость миксера, рецепт пиццы в хлебопечке, фритюрница philips отзывы, тканевый мешок для пылесоса, сравнить пароварки, запчасти для пылесоса lg, кофеварка эспрессо krups, взбить сливки блендером, аэрогриль рецепты картофель, какой лучше парогенератор, овощи гриль в аэрогриле,  фильтры для моющего пылесоса">
		<meta name="description" content="дозиметр белла Мощная и низкошумная сушилка для рук HE 260 TM немецкого производства в прочном ...">
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
						<a class="photo" href="photos/eb12162abf9f68b1f020c54d55eeb406.jpeg" title="дозиметр белла Сушилка для рук AEG Haustehnik HE 260 TM"><img src="photos/eb12162abf9f68b1f020c54d55eeb406.jpeg" alt="дозиметр белла Сушилка для рук AEG Haustehnik HE 260 TM" title="дозиметр белла Сушилка для рук AEG Haustehnik HE 260 TM -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-redmond-rfp-5390r.php"><img src="photos/eeb9eab6db603b9616a92fc025537c6c.jpeg" alt="кофеварка френч пресс Кухонный комбайн Redmond  RFP-3903" title="кофеварка френч пресс Кухонный комбайн Redmond  RFP-3903"></a><h2>Кухонный комбайн Redmond  RFP-3903</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-maxima-mhb-1090r.php"><img src="photos/c18872267b9c6c7f4de2b2c0d2d5e8a8.jpeg" alt="пылесос samsung sc 4326 Блендер Maxima MHB-0229" title="пылесос samsung sc 4326 Блендер Maxima MHB-0229"></a><h2>Блендер Maxima MHB-0229</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-nivona-nicg-cafegrano-4490r.php"><img src="photos/696246935af3c686fbf13206e4f5dbc0.jpeg" alt="стоимость миксера Кофемолка Nivona NICG120 CafeGrano" title="стоимость миксера Кофемолка Nivona NICG120 CafeGrano"></a><h2>Кофемолка Nivona NICG120 CafeGrano</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>дозиметр белла Сушилка для рук AEG Haustehnik HE 260 TM</h1>
						<div class="tb"><p>Цена: от <span class="price">7800</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19514.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Мощная и низкошумная сушилка для рук HE 260 TM немецкого производства в прочном алюминиевом брызгозащитном корпусе. Полная автоматика бесконтактного включения: инфракрасный электронный датчик срабатывает при приближении рук, продолжительность сушки составляет 20-30 секунд, также в комплекте идут ароматизированные картриджи. </p><p><b>Характеристики: </b></p><ul type=disc><li>Мощность 2.6 кВт; <li>Воздушный поток ~ 250 м3/ час <li>Прочный алюминиевый корпус; <li>Оптический сенсор; <li>Турбовентилятор для быстрой сушки рук; <li>Автоматическое отключение; <li>Минимальный уровень шума – 68 дБ; <li>Размеры (ВxШxГ): 27x26x23 cм. </li></ul><p><b>Производитель: Германия </b></p><p><b>Гарантия: 5 лет </b></p> дозиметр белла</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7182cc256e7e3343e3aec4d550f1f314.jpeg" alt="рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая" title="рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая"><div class="box"><a href="http://kitchentech.elitno.net/elektricheskaya-kofemolka-bodum-bistro-euro-belaya-5730r.php"><h3 class="title">рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая</h3><p>от <span class="price">5730</span> руб.</p></a></div></li>
						<li><img src="photos/cd757289d24d4d7e98d5fef52b1c314b.jpeg" alt="фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)" title="фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)"><div class="box" page="mikrovolnovaya-pech-vitek-sr-3990r"><span class="title">фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/56cb596182a024c5be877e612e6462d8.jpeg" alt="тканевый мешок для пылесоса Пароварка Atlanta АТН-605" title="тканевый мешок для пылесоса Пароварка Atlanta АТН-605"><div class="box" page="parovarka-atlanta-atn-1050r-2"><span class="title">тканевый мешок для пылесоса Пароварка Atlanta АТН-605</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/a5a944903050174bbca074a40d4e65fa.jpeg" alt="сравнить пароварки Соковыжималка Atlanta ATH-325" title="сравнить пароварки Соковыжималка Atlanta ATH-325"><div class="box" page="sokovyzhimalka-atlanta-ath-520r"><span class="title">сравнить пароварки Соковыжималка Atlanta ATH-325</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li class="large"><img src="photos/57a9dd1cf47f278e2b8c998d7aabc0c5.jpeg" alt="запчасти для пылесоса lg Bodum BISTRO 10709-294EURO Тостер красный" title="запчасти для пылесоса lg Bodum BISTRO 10709-294EURO Тостер красный"><div class="box" page="bodum-bistro-euro-toster-krasnyy-3660r"><span class="title">запчасти для пылесоса lg Bodum BISTRO 10709-294EURO Тостер красный</span><p>от <span class="price">3660</span> руб.</p></div></li>
						<li class="large"><img src="photos/0fb0d4eda0d01d4692f2fbd689f6f46f.jpeg" alt="кофеварка эспрессо krups Чайник электрический Vitek VT-1112 1,7 л" title="кофеварка эспрессо krups Чайник электрический Vitek VT-1112 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitek-vt-l-1890r"><span class="title">кофеварка эспрессо krups Чайник электрический Vitek VT-1112 1,7 л</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li class="large"><img src="photos/3a6317b1e5aa0207019da754f6c2351b.jpeg" alt="взбить сливки блендером Электрический чайник Atlanta АТН-673" title="взбить сливки блендером Электрический чайник Atlanta АТН-673"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-560r"><span class="title">взбить сливки блендером Электрический чайник Atlanta АТН-673</span><p>от <span class="price">560</span> руб.</p></div></li>
						<li><img src="photos/7bfc4f4031d68720fdce5209cf8c8c0d.jpeg" alt="аэрогриль рецепты картофель Мини-весы Tanita 1479V" title="аэрогриль рецепты картофель Мини-весы Tanita 1479V"><div class="box" page="minivesy-tanita-v-3000r"><span class="title">аэрогриль рецепты картофель Мини-весы Tanita 1479V</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/512f8d3c0276804b57a2729ea05d9ba6.jpeg" alt="какой лучше парогенератор Набор мешков-пылесборников 35 (787-183) для Thomas" title="какой лучше парогенератор Набор мешков-пылесборников 35 (787-183) для Thomas"><div class="box" page="nabor-meshkovpylesbornikov-dlya-thomas-1100r-2"><span class="title">какой лучше парогенератор Набор мешков-пылесборников 35 (787-183) для Thomas</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/d8b76d5d925f2e48955ce7204e57a699.jpeg" alt="овощи гриль в аэрогриле Набор для профилактики аллергии Dyson Allergy Kit Retail" title="овощи гриль в аэрогриле Набор для профилактики аллергии Dyson Allergy Kit Retail"><div class="box" page="nabor-dlya-profilaktiki-allergii-dyson-allergy-kit-retail-2490r"><span class="title">овощи гриль в аэрогриле Набор для профилактики аллергии Dyson Allergy Kit Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/08939404bc185a897cf2a335ea28842f.jpeg" alt="пылесос вертикальный Пылесос Redmond RV-308" title="пылесос вертикальный Пылесос Redmond RV-308"><div class="box" page="pylesos-redmond-rv-7990r"><span class="title">пылесос вертикальный Пылесос Redmond RV-308</span><p>от <span class="price">7990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("sushilka-dlya-ruk-aeg-haustehnik-he-tm-7800r.php", 0, -4); if (file_exists("comments/sushilka-dlya-ruk-aeg-haustehnik-he-tm-7800r.php")) require_once "comments/sushilka-dlya-ruk-aeg-haustehnik-he-tm-7800r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="sushilka-dlya-ruk-aeg-haustehnik-he-tm-7800r.php" method="post" onsubmit="return checkForm(this)">
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