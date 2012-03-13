<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitesse-vs-l-1740r.php","лучшая мясорубка 2011");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitesse-vs-l-1740r.php", $nick, $comment);
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
		<title>лучшая мясорубка 2011 Чайник электрический  Vitesse VS-132 1,7 л  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="лучшая мясорубка 2011, пароварка магазин, выбор микроволновой печи, эльдорадо кофемашины, пылесос с водным фильтром, каталог мясорубок, рожок для кофеварки, утюг с парогенератором philips, принцип гейзерной кофеварки, пылесос циклонного типа, блендер philips hr 2860, чем отличаются пылесосы, какая мощность у пылесоса, пылесосы филипс отзывы,  kress пылесос">
		<meta name="description" content="лучшая мясорубка 2011 Электрический чайник   элегантного дизайна белого или кремового цвета Vitesse VS...">
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
						<a class="photo" href="photos/2e45225f75584b99ef16cc23171266ef.jpeg" title="лучшая мясорубка 2011 Чайник электрический  Vitesse VS-132 1,7 л"><img src="photos/2e45225f75584b99ef16cc23171266ef.jpeg" alt="лучшая мясорубка 2011 Чайник электрический  Vitesse VS-132 1,7 л" title="лучшая мясорубка 2011 Чайник электрический  Vitesse VS-132 1,7 л -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-lattea-beloserebristaya-29530r.php"><img src="photos/5b2c06d57a572404f45fc75e65b42e87.jpeg" alt="пароварка магазин Автоматическая кофемашина Melitta CAFFEO Lattea, бело-серебристая" title="пароварка магазин Автоматическая кофемашина Melitta CAFFEO Lattea, бело-серебристая"></a><h2>Автоматическая кофемашина Melitta CAFFEO Lattea, бело-серебристая</h2></li>
							<li><a href="http://kitchentech.elitno.net/vspenivatel-melitta-cremio-krasnyy-4155r.php"><img src="photos/0b57a5fa2564b3001e847ebdd45ce976.jpeg" alt="выбор микроволновой печи Вспениватель Melitta Cremio красный" title="выбор микроволновой печи Вспениватель Melitta Cremio красный"></a><h2>Вспениватель Melitta Cremio красный</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3870r.php"><img src="photos/5e475c33aea662be8e01a1f2443fb6c0.jpeg" alt="эльдорадо кофемашины Микроволновая печь Vitek VT-1684" title="эльдорадо кофемашины Микроволновая печь Vitek VT-1684"></a><h2>Микроволновая печь Vitek VT-1684</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>лучшая мясорубка 2011 Чайник электрический  Vitesse VS-132 1,7 л</h1>
						<div class="tb"><p>Цена: от <span class="price">1740</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19633.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник   элегантного дизайна белого или кремового цвета Vitesse VS-132 – это эффективный и качественный  прибор. 1,7 литра воды при мощности чайника в 2200Вт вскипятит за считанные  минуты, специальный фильтр защитит от накипи, автоматика выключит прибор при  закипании и не даст включиться без воды, а шнур удобно хранить в специальном  отсеке.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Объем:  1.7 л;</li><li>Мощность:  2200 Вт;</li><li>Тип  нагревательного элемента: закрытая спираль (центральный контакт);</li><li>Материал  корпуса: пластик;</li><li>Блокировка  включения без воды</li><li>Фильтр;</li><li>Индикатор  уровня воды;</li><li>Индикация включения;</li><li>Отсек для шнура.</li></ul><p><strong>Производитель: КНР</strong><br><strong>Гарантия: 1 год</strong></p> лучшая мясорубка 2011</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a8857bffd481b9dda4b86f6d3c6ed123.jpeg" alt="пылесос с водным фильтром Пароварка Vitek VT-1555" title="пылесос с водным фильтром Пароварка Vitek VT-1555"><div class="box" page="parovarka-vitek-vt-1400r"><span class="title">пылесос с водным фильтром Пароварка Vitek VT-1555</span><p>от <span class="price">1400</span> руб.</p></div></li>
						<li><img src="photos/e07564a5fe71e20051b3b21f0806536a.jpeg" alt="каталог мясорубок Соковыжималка Moulinex JU32013E Tom Yam" title="каталог мясорубок Соковыжималка Moulinex JU32013E Tom Yam"><div class="box" page="sokovyzhimalka-moulinex-jue-tom-yam-1850r"><span class="title">каталог мясорубок Соковыжималка Moulinex JU32013E Tom Yam</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/5fe7a070a54ac64269e20fb9f52ff92c.jpeg" alt="рожок для кофеварки Zauber Цитрусовая соковыжималка  X 850" title="рожок для кофеварки Zauber Цитрусовая соковыжималка  X 850"><div class="box" page="zauber-citrusovaya-sokovyzhimalka-x-1000r"><span class="title">рожок для кофеварки Zauber Цитрусовая соковыжималка  X 850</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/a5a669656630312240d0cb17c653dfea.jpeg" alt="утюг с парогенератором philips Соковыжималка Maxima MJ-059" title="утюг с парогенератором philips Соковыжималка Maxima MJ-059"><div class="box" page="sokovyzhimalka-maxima-mj-1090r"><span class="title">утюг с парогенератором philips Соковыжималка Maxima MJ-059</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li class="large"><img src="photos/2beb3280efeae27110a6ae9f09b4d8e5.jpeg" alt="принцип гейзерной кофеварки Электрический чайник Atlanta АТН-678" title="принцип гейзерной кофеварки Электрический чайник Atlanta АТН-678"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-560r-2"><span class="title">принцип гейзерной кофеварки Электрический чайник Atlanta АТН-678</span><p>от <span class="price">560</span> руб.</p></div></li>
						<li class="large"><img src="photos/0207c29eb474672a9dc7b75c9efd4bab.jpeg" alt="пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360" title="пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-golubye-cvety-zauber-eco-1760r-2"><span class="title">пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li class="large"><img src="photos/16e3783a13e306fc3fd90925cbbcc384.jpeg" alt="блендер philips hr 2860 Электрический чайник 1.5л красный Bodum Bistro 11138-294EURO" title="блендер philips hr 2860 Электрический чайник 1.5л красный Bodum Bistro 11138-294EURO"><div class="box" page="elektricheskiy-chaynik-l-krasnyy-bodum-bistro-euro-2740r"><span class="title">блендер philips hr 2860 Электрический чайник 1.5л красный Bodum Bistro 11138-294EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/da3b8026757740acd31c2844cf598d4a.jpeg" alt="чем отличаются пылесосы Батарейка GP Batteries Super alkaline LR03 24A-BC4" title="чем отличаются пылесосы Батарейка GP Batteries Super alkaline LR03 24A-BC4"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-80r-2"><span class="title">чем отличаются пылесосы Батарейка GP Batteries Super alkaline LR03 24A-BC4</span><p>от <span class="price">80</span> руб.</p></div></li>
						<li><img src="photos/eb7760a68b0b3e85f39c2160100a5731.jpeg" alt="какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008" title="какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008"><div class="box" page="moyuschiy-koncentrat-thomas-profloor-l-sht-700r"><span class="title">какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/20c033d3c85583b2e6a71a21254a84f6.jpeg" alt="пылесосы филипс отзывы Щетка для твердых поверхностей в упаковке Dyson Hard Floor Tool Assy Retail" title="пылесосы филипс отзывы Щетка для твердых поверхностей в упаковке Dyson Hard Floor Tool Assy Retail"><div class="box" page="schetka-dlya-tverdyh-poverhnostey-v-upakovke-dyson-hard-floor-tool-assy-retail-1590r"><span class="title">пылесосы филипс отзывы Щетка для твердых поверхностей в упаковке Dyson Hard Floor Tool Assy Retail</span><p>от <span class="price">1590</span> руб.</p></div></li>
						<li><img src="photos/b1991ec2a1e595341a5229ac67f9d69a.jpeg" alt="мясорубка moulinex 2051 Пылесос моющий Thomas Pet and Friends T1 Aquafilter" title="мясорубка moulinex 2051 Пылесос моющий Thomas Pet and Friends T1 Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-pet-and-friends-t-aquafilter-14260r"><span class="title">мясорубка moulinex 2051 Пылесос моющий Thomas Pet and Friends T1 Aquafilter</span><p>от <span class="price">14260</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitesse-vs-l-1740r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitesse-vs-l-1740r.php")) require_once "comments/chaynik-elektricheskiy-vitesse-vs-l-1740r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitesse-vs-l-1740r.php" method="post" onsubmit="return checkForm(this)">
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