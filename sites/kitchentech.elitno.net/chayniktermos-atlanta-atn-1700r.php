<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chayniktermos-atlanta-atn-1700r.php","утюг с парогенератором delonghi");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chayniktermos-atlanta-atn-1700r.php", $nick, $comment);
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
		<title>утюг с парогенератором delonghi Чайник-термос Atlanta АТН-768  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="утюг с парогенератором delonghi, пылесос tomas twin, рецепт курицы в мультиварке, отважный тостер скачать, мультиварка redmond 4504, пылесос с электрощеткой, хлебопечка борк отзывы, мультиварка мэджик пот, пылесос thomas genius s2, пароварка газовая купить, принцип работы кофемашины, пылесос zelmer цена, уха в мультиварке, хлебопечки в новосибирске,  парогенератор видео">
		<meta name="description" content="утюг с парогенератором delonghi Чайник-термос Atlanta АТН-768 – функциональный и стильный кухонный прибор, предн...">
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
						<a class="photo" href="photos/ab7fd4cacdc88b690decc0d20bd53770.jpeg" title="утюг с парогенератором delonghi Чайник-термос Atlanta АТН-768"><img src="photos/ab7fd4cacdc88b690decc0d20bd53770.jpeg" alt="утюг с парогенератором delonghi Чайник-термос Atlanta АТН-768" title="утюг с парогенератором delonghi Чайник-термос Atlanta АТН-768 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-ddg-click-and-mix-2900r.php"><img src="photos/795ef5ec8b21fcb23efce51ba4b9959a.jpeg" alt="пылесос tomas twin Блендер погружной Moulinex DD406G42 Click and Mix" title="пылесос tomas twin Блендер погружной Moulinex DD406G42 Click and Mix"></a><h2>Блендер погружной Moulinex DD406G42 Click and Mix</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-ath-750r.php"><img src="photos/4a8644a2c29f22e2d9c92389f96ff2ab.jpeg" alt="рецепт курицы в мультиварке Кухонный комбайн ATH-350" title="рецепт курицы в мультиварке Кухонный комбайн ATH-350"></a><h2>Кухонный комбайн ATH-350</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-4150r.php"><img src="photos/09368438bc3c0f6d8d6445abd5f08674.jpeg" alt="отважный тостер скачать Микроволновая печь Vitek VT-1693" title="отважный тостер скачать Микроволновая печь Vitek VT-1693"></a><h2>Микроволновая печь Vitek VT-1693</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>утюг с парогенератором delonghi Чайник-термос Atlanta АТН-768</h1>
						<div class="tb"><p>Цена: от <span class="price">1700</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20013.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Чайник-термос Atlanta АТН-768 – функциональный и стильный кухонный прибор, предназначенный для кипячения и нагревания воды. Его мощность составляет 800 Вт при объеме 4 л. Есть функция автоматической и ручной подачи воды. Используется защищенный закрытый нагревательный элемент, который гораздо проще мыть, чем открытую спираль. Безопасен, т. к. имеет защиту от перегрева, а также блокировку включения без воды. Установлена шкала уровня воды и индикатор работы. Соответствует европейским и американским нормам безопасности. Изделие сертифицировано Госстандартом РФ.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Функция автоматической подачи воды <li>Возможность ручной подачи воды <li>Функция автоматического подогрева <li>Шкала уровня воды <li>Автоматическое отключение при закипании <li>Защита от перегрева без воды <li>Индикатор работы <li>Быстрое закипание <li>Изделие сертифицировано Госстандартом РФ <li>Соответствует Европейским нормам безопасности <li>Емкость 4 литра <li>Мощность 800W <li>230V, 50Hz <li>27 x 27 x 40 см </li></ul><p><strong>Производитель: США</strong></p> утюг с парогенератором delonghi</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/696c3eff6d4752e21e651f3d4b34c0a7.jpeg" alt="мультиварка redmond 4504 Мясорубка Redmond RMG-1204" title="мультиварка redmond 4504 Мясорубка Redmond RMG-1204"><div class="box" page="myasorubka-redmond-rmg-3290r"><span class="title">мультиварка redmond 4504 Мясорубка Redmond RMG-1204</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/872dadec17e7e9283341241f27cccee5.jpeg" alt="пылесос с электрощеткой Zauber Пароварка  S-530" title="пылесос с электрощеткой Zauber Пароварка  S-530"><div class="box" page="zauber-parovarka-s-1440r"><span class="title">пылесос с электрощеткой Zauber Пароварка  S-530</span><p>от <span class="price">1440</span> руб.</p></div></li>
						<li><img src="photos/5cd90ccf1383ae054567f8f62fe579ca.jpeg" alt="хлебопечка борк отзывы Тостер Atlanta ATH-237" title="хлебопечка борк отзывы Тостер Atlanta ATH-237"><div class="box" page="toster-atlanta-ath-740r"><span class="title">хлебопечка борк отзывы Тостер Atlanta ATH-237</span><p>от <span class="price">740</span> руб.</p></div></li>
						<li><img src="photos/51ac41098d88811e7ab3241e4fa31a8c.jpeg" alt="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA" title="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA"><div class="box" page="akkumulyatory-gp-batteries-rechargeable-mach-aaahcuc-petgaaa-300r"><span class="title">мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li class="large"><img src="photos/94de14730b416ab6939a25c5af76e14e.jpeg" alt="пылесос thomas genius s2 Парогенератор Lelit PS11N" title="пылесос thomas genius s2 Парогенератор Lelit PS11N"><div class="box" page="parogenerator-lelit-psn-12000r"><span class="title">пылесос thomas genius s2 Парогенератор Lelit PS11N</span><p>от <span class="price">12000</span> руб.</p></div></li>
						<li class="large"><img src="photos/e754a7b0b0a20443433494bbd5f5ba8d.jpeg" alt="пароварка газовая купить Пылесборник Vitek VT-1851 5шт." title="пароварка газовая купить Пылесборник Vitek VT-1851 5шт."><div class="box" page="pylesbornik-vitek-vt-sht-190r"><span class="title">пароварка газовая купить Пылесборник Vitek VT-1851 5шт.</span><p>от <span class="price">190</span> руб.</p></div></li>
						<li class="large"><img src="photos/e961b6308ccdf7d3b60d75fd50d3cfe9.jpeg" alt="принцип работы кофемашины Порошок для сухой чистки ковровых покрытий Dyson Zorb Pouch UK EU" title="принцип работы кофемашины Порошок для сухой чистки ковровых покрытий Dyson Zorb Pouch UK EU"><div class="box" page="poroshok-dlya-suhoy-chistki-kovrovyh-pokrytiy-dyson-zorb-pouch-uk-eu-890r"><span class="title">принцип работы кофемашины Порошок для сухой чистки ковровых покрытий Dyson Zorb Pouch UK EU</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/fdcb89c9c94f7f3223bb9f8f472f7a54.jpeg" alt="пылесос zelmer цена Пятновыводитель Dyson Dyzolv" title="пылесос zelmer цена Пятновыводитель Dyson Dyzolv"><div class="box" page="pyatnovyvoditel-dyson-dyzolv-790r"><span class="title">пылесос zelmer цена Пятновыводитель Dyson Dyzolv</span><p>от <span class="price">790</span> руб.</p></div></li>
						<li><img src="photos/bf1db2ec9a55f45d9ef32e836546d600.jpeg" alt="уха в мультиварке Пылесос моющий Thomas Super 30 S" title="уха в мультиварке Пылесос моющий Thomas Super 30 S"><div class="box" page="pylesos-moyuschiy-thomas-super-s-9020r"><span class="title">уха в мультиварке Пылесос моющий Thomas Super 30 S</span><p>от <span class="price">9020</span> руб.</p></div></li>
						<li><img src="photos/a5307e77bbd77d05fd1bf891a3eeb5d0.jpeg" alt="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный" title="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-4590r"><span class="title">хлебопечки в новосибирске Пылесос Vitek VT-1845 красный</span><p>от <span class="price">4590</span> руб.</p></div></li>
						<li><img src="photos/b5afd7c51355e06ff913b79a852afc55.jpeg" alt="пылесос с электрощеткой Утюг Binatone SI-4040 Blue" title="пылесос с электрощеткой Утюг Binatone SI-4040 Blue"><div class="box" page="utyug-binatone-si-blue-1600r"><span class="title">пылесос с электрощеткой Утюг Binatone SI-4040 Blue</span><p>от <span class="price">1600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chayniktermos-atlanta-atn-1700r.php", 0, -4); if (file_exists("comments/chayniktermos-atlanta-atn-1700r.php")) require_once "comments/chayniktermos-atlanta-atn-1700r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chayniktermos-atlanta-atn-1700r.php" method="post" onsubmit="return checkForm(this)">
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