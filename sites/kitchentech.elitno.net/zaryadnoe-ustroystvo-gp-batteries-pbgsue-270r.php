<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("zaryadnoe-ustroystvo-gp-batteries-pbgsue-270r.php","главный сайт о мультиварках");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("zaryadnoe-ustroystvo-gp-batteries-pbgsue-270r.php", $nick, $comment);
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
		<title>главный сайт о мультиварках Зарядное устройство GP Batteries PB360GS-UE1  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="главный сайт о мультиварках, ремонт мясорубок мулинекс, как приготовить в аэрогриле овощи, хлебопечка в техносиле, рожок для кофеварки, измельчитель сучьев, мясорубка белвар отзывы, ремень для хлебопечки, утюг с тефлоновым покрытием, сварить кофе в кофеварке, взбить сливки блендером, таблетки для очистки кофемашины, самодельный пылесос, измельчитель kenwood,  плов в мультиварке супра">
		<meta name="description" content="главный сайт о мультиварках Зарядное устройство размером 4,4х10,5х3,5см подходит для зарядки NiMH аккумулято...">
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
						<a class="photo" href="photos/7f879f1e565356e4de3c725635f57ee6.jpeg" title="главный сайт о мультиварках Зарядное устройство GP Batteries PB360GS-UE1"><img src="photos/7f879f1e565356e4de3c725635f57ee6.jpeg" alt="главный сайт о мультиварках Зарядное устройство GP Batteries PB360GS-UE1" title="главный сайт о мультиварках Зарядное устройство GP Batteries PB360GS-UE1 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/myasorubka-elektricheskaya-moulinex-me-3820r.php"><img src="photos/dc407a1e2a485cfa91965baf93f3d5ba.jpeg" alt="ремонт мясорубок мулинекс Мясорубка электрическая Moulinex ME6051" title="ремонт мясорубок мулинекс Мясорубка электрическая Moulinex ME6051"></a><h2>Мясорубка электрическая Moulinex ME6051</h2></li>
							<li><a href="http://kitchentech.elitno.net/ad-sfkc-torgovye-vesy-do-kg-10800r.php"><img src="photos/86f0983e51433a2aeee203a14fbe12b2.jpeg" alt="как приготовить в аэрогриле овощи A&D SF-15KC Торговые весы до 15кг" title="как приготовить в аэрогриле овощи A&D SF-15KC Торговые весы до 15кг"></a><h2>A&D SF-15KC Торговые весы до 15кг</h2></li>
							<li><a href="http://kitchentech.elitno.net/vesy-elektronnye-dlya-bagazha-beurer-ls-1100r.php"><img src="photos/bbb4b27b3d39658b85227dbb77539d16.jpeg" alt="хлебопечка в техносиле Весы электронные для багажа Beurer LS 10" title="хлебопечка в техносиле Весы электронные для багажа Beurer LS 10"></a><h2>Весы электронные для багажа Beurer LS 10</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>главный сайт о мультиварках Зарядное устройство GP Batteries PB360GS-UE1</h1>
						<div class="tb"><p>Цена: от <span class="price">270</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16542.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Зарядное устройство размером 4,4х10,5х3,5см подходит для зарядки NiMH аккумуляторов типа АА и ААА. Одновременно позволяет заряжать два или четыре элемента питания. Модель <b>PB360</b><b>GS-</b><b>UE1 </b>имеет стильный и компактный дизайн, ее всегда можно взять с собой в путешествие. Время зарядки 13 часов.</p><p><b>Характеристики:</b></p><ul type=disc><li>Тип: зарядное устройство <li>Тип заряжаемых аккумуляторов: NiMH <li>Заряжает AA: Да <li>Заряжает AAA: Да <li>Время заряда: 13 часов <li>Количество слотов: 2 <li>Количество каналов: 2 <li>Размеры (ШхГхВ): 4,4х10,5х3,5 см</li></ul><p><b>Производитель:</b> GP Batteries.</p><p><b>Страна:</b> Гонконг.</p><p><b>Гарантия: </b>6 месяцев.</p> главный сайт о мультиварках</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5fe7a070a54ac64269e20fb9f52ff92c.jpeg" alt="рожок для кофеварки Zauber Цитрусовая соковыжималка  X 850" title="рожок для кофеварки Zauber Цитрусовая соковыжималка  X 850"><div class="box"><a href="http://kitchentech.elitno.net/zauber-citrusovaya-sokovyzhimalka-x-1000r.php"><h3 class="title">рожок для кофеварки Zauber Цитрусовая соковыжималка  X 850</h3><p>от <span class="price">1000</span> руб.</p></a></div></li>
						<li><img src="photos/7b0ef0b12e5f66ec7582c9396725bc92.jpeg" alt="измельчитель сучьев Чайник электрический Vitek VT-1120" title="измельчитель сучьев Чайник электрический Vitek VT-1120"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1150r"><span class="title">измельчитель сучьев Чайник электрический Vitek VT-1120</span><p>от <span class="price">1150</span> руб.</p></div></li>
						<li><img src="photos/10b8ffb3398d2d300d11c2e37221e09e.jpeg" alt="мясорубка белвар отзывы Чайник электрический Maxima МК-G114" title="мясорубка белвар отзывы Чайник электрический Maxima МК-G114"><div class="box" page="chaynik-elektricheskiy-maxima-mkg-990r"><span class="title">мясорубка белвар отзывы Чайник электрический Maxima МК-G114</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/46f63d5550ab774c363b5ff4ba202c31.jpeg" alt="ремень для хлебопечки Чайник электрический Maxima MK- M191" title="ремень для хлебопечки Чайник электрический Maxima MK- M191"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-990r"><span class="title">ремень для хлебопечки Чайник электрический Maxima MK- M191</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/9886fb8aa4d27a4c0947d702e96f79ee.jpeg" alt="утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291" title="утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-760r-2"><span class="title">утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/0e343e4ed2bc192a59c6c92535860524.jpeg" alt="сварить кофе в кофеварке Электрический чайник Atlanta АТН-633" title="сварить кофе в кофеварке Электрический чайник Atlanta АТН-633"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-750r"><span class="title">сварить кофе в кофеварке Электрический чайник Atlanta АТН-633</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li class="large"><img src="photos/3a6317b1e5aa0207019da754f6c2351b.jpeg" alt="взбить сливки блендером Электрический чайник Atlanta АТН-673" title="взбить сливки блендером Электрический чайник Atlanta АТН-673"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-560r"><span class="title">взбить сливки блендером Электрический чайник Atlanta АТН-673</span><p>от <span class="price">560</span> руб.</p></div></li>
						<li><img src="photos/ed1507cb4c766d544261d1f0cc2c6466.jpeg" alt="таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764" title="таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764"><div class="box" page="chayniktermos-atlanta-atn-1570r"><span class="title">таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764</span><p>от <span class="price">1570</span> руб.</p></div></li>
						<li><img src="photos/168b510551b7b82d928917487d7b9c68.jpeg" alt="самодельный пылесос Батарейка GP Batteries Super alkaline LR03 24A-BC2" title="самодельный пылесос Батарейка GP Batteries Super alkaline LR03 24A-BC2"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-45r-2"><span class="title">самодельный пылесос Батарейка GP Batteries Super alkaline LR03 24A-BC2</span><p>от <span class="price">45</span> руб.</p></div></li>
						<li><img src="photos/d221c08cbc7532258ec107ff315e3516.jpeg" alt="измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)" title="измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)"><div class="box" page="personalnyy-dozimetr-dkgd-«grach»-attestovan-v-mchs-rossii-20500r"><span class="title">измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)</span><p>от <span class="price">20500</span> руб.</p></div></li>
						<li><img src="photos/11c7c6ddf93edcdf0c5e620d5363815f.jpeg" alt="микроволновые печи в москве Пылесос Vitek VT-1844" title="микроволновые печи в москве Пылесос Vitek VT-1844"><div class="box" page="pylesos-vitek-vt-3250r"><span class="title">микроволновые печи в москве Пылесос Vitek VT-1844</span><p>от <span class="price">3250</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("zaryadnoe-ustroystvo-gp-batteries-pbgsue-270r.php", 0, -4); if (file_exists("comments/zaryadnoe-ustroystvo-gp-batteries-pbgsue-270r.php")) require_once "comments/zaryadnoe-ustroystvo-gp-batteries-pbgsue-270r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="zaryadnoe-ustroystvo-gp-batteries-pbgsue-270r.php" method="post" onsubmit="return checkForm(this)">
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