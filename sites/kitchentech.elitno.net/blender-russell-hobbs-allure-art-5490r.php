<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-russell-hobbs-allure-art-5490r.php","микроволновые печи liberton");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-russell-hobbs-allure-art-5490r.php", $nick, $comment);
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
		<title>микроволновые печи liberton Блендер Russell Hobbs Allure, арт. 18276-56  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="микроволновые печи liberton, курица во фритюрнице, распродажа пылесосов, купить хлебопечку мулинекс, мясорубка binatone, пылесос bork v500, дженни шаптер хлебопечка скачать, блендер philips hr1659, карандаш для чистки утюга, кофемашина incanto de luxe, кекс в хлебопечке панасоник, пылесос ролсен, индукционная плита с духовкой, хлебопечки в новосибирске,  микроволновая печь vitek">
		<meta name="description" content="микроволновые печи liberton Современный стационарный блендер Allure, мощностью 800 Вт, станет  незаменимым п...">
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
						<a class="photo" href="photos/ac0d13475c79f9c87e6f514f3140de60.jpeg" title="микроволновые печи liberton Блендер Russell Hobbs Allure, арт. 18276-56"><img src="photos/ac0d13475c79f9c87e6f514f3140de60.jpeg" alt="микроволновые печи liberton Блендер Russell Hobbs Allure, арт. 18276-56" title="микроволновые печи liberton Блендер Russell Hobbs Allure, арт. 18276-56 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-vitek-vt-2750r.php"><img src="photos/d3bcfc3d08cc302406de89eb814d0d80.jpeg" alt="курица во фритюрнице Кухонный комбайн Vitek VT-1622" title="курица во фритюрнице Кухонный комбайн Vitek VT-1622"></a><h2>Кухонный комбайн Vitek VT-1622</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3550r.php"><img src="photos/7b88076a90f90c4718597a4ab977cb0a.jpeg" alt="распродажа пылесосов Микроволновая печь Vitek VT-1682" title="распродажа пылесосов Микроволновая печь Vitek VT-1682"></a><h2>Микроволновая печь Vitek VT-1682</h2></li>
							<li><a href="http://kitchentech.elitno.net/multivarka-maruchi-rwfz-v-komplekte-s-keramicheskoy-kastryuley-4500r.php"><img src="photos/42b635368f5179e970d08ec7c08cbc10.jpeg" alt="купить хлебопечку мулинекс Мультиварка Maruchi RW-FZ47 в комплекте с керамической кастрюлей" title="купить хлебопечку мулинекс Мультиварка Maruchi RW-FZ47 в комплекте с керамической кастрюлей"></a><h2>Мультиварка Maruchi RW-FZ47 в комплекте с керамической кастрюлей</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>микроволновые печи liberton Блендер Russell Hobbs Allure, арт. 18276-56</h1>
						<div class="tb"><p>Цена: от <span class="price">5490</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21525.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Современный стационарный блендер Allure, мощностью 800 Вт, станет  незаменимым помощником на Вашей кухне. Управление электронное, возможность  выбора из 12 скоростей. Импульсный режим и режим колки льда. Корпус блендера  выполнен из высококачественного металла. Для удобства пользования предусмотрен  удобный дисплей и кувшин из прозрачного стекла. Предусмотрен отсек для хранения  сетевого шнура.</p><p><strong>Характеристики:</strong></p><ul><li>Тип: стационарный;</li><li>Мощность: 800 Вт;</li><li>Управление: электронное;</li><li>Число скоростей: 12;</li><li>Импульсный режим;</li><li>Колка льда;</li><li>Материал корпуса: металл;</li><li>Материал кувшина: стекло;</li><li>Отверстие для ингредиентов</li><li>Отсек для хранения сетевого шнура;</li><li>Удобный дисплей.</li></ul><p><strong>Производитель:</strong><strong>Russell</strong><strong>Hobbs (Англия)</strong></p> микроволновые печи liberton</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/cf93342053e92b125e6f4adca7e47bbe.jpeg" alt="мясорубка binatone Пароварка Tefal Simply Invents VC1017" title="мясорубка binatone Пароварка Tefal Simply Invents VC1017"><div class="box" page="parovarka-tefal-simply-invents-vc-3990r"><span class="title">мясорубка binatone Пароварка Tefal Simply Invents VC1017</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/aad075f22e1967e01f21286f7d5da33a.jpeg" alt="пылесос bork v500 Чайник Vitek VT-1161 с керамическим корпусом" title="пылесос bork v500 Чайник Vitek VT-1161 с керамическим корпусом"><div class="box" page="chaynik-vitek-vt-s-keramicheskim-korpusom-3450r"><span class="title">пылесос bork v500 Чайник Vitek VT-1161 с керамическим корпусом</span><p>от <span class="price">3450</span> руб.</p></div></li>
						<li><img src="photos/78655cc6df39885b41a8efad804df716.jpeg" alt="дженни шаптер хлебопечка скачать Чайник электрический Redmond RK-M113" title="дженни шаптер хлебопечка скачать Чайник электрический Redmond RK-M113"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-2290r"><span class="title">дженни шаптер хлебопечка скачать Чайник электрический Redmond RK-M113</span><p>от <span class="price">2290</span> руб.</p></div></li>
						<li><img src="photos/eb489286225dbbc8037e4654ee2b1544.jpeg" alt="блендер philips hr1659 Чайник электрический Redmond  RK-M114" title="блендер philips hr1659 Чайник электрический Redmond  RK-M114"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-2990r"><span class="title">блендер philips hr1659 Чайник электрический Redmond  RK-M114</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li class="large"><img src="photos/ab7fd4cacdc88b690decc0d20bd53770.jpeg" alt="карандаш для чистки утюга Чайник-термос Atlanta АТН-768" title="карандаш для чистки утюга Чайник-термос Atlanta АТН-768"><div class="box" page="chayniktermos-atlanta-atn-1700r"><span class="title">карандаш для чистки утюга Чайник-термос Atlanta АТН-768</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li class="large"><img src="photos/56eef2b8f5929fc5948323a8a5a2e051.jpeg" alt="кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)" title="кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbbs-haah-1220r"><span class="title">кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)</span><p>от <span class="price">1220</span> руб.</p></div></li>
						<li class="large"><img src="photos/95ee2f83dd665559125032ef461af475.jpeg" alt="кекс в хлебопечке панасоник Фильтры для пылесоса Vitek VT-1866 (VT-1836)" title="кекс в хлебопечке панасоник Фильтры для пылесоса Vitek VT-1866 (VT-1836)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-175r"><span class="title">кекс в хлебопечке панасоник Фильтры для пылесоса Vitek VT-1866 (VT-1836)</span><p>от <span class="price">175</span> руб.</p></div></li>
						<li><img src="photos/b423fb6caec639a7de8db20512fac098.jpeg" alt="пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas" title="пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1000r"><span class="title">пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/529e8107d5e5b446ac7668ecb3b5cd4b.jpeg" alt="индукционная плита с духовкой Dyson Turbine Head Assy Retail Турбощетка в упаковке" title="индукционная плита с духовкой Dyson Turbine Head Assy Retail Турбощетка в упаковке"><div class="box" page="dyson-turbine-head-assy-retail-turboschetka-v-upakovke-3290r"><span class="title">индукционная плита с духовкой Dyson Turbine Head Assy Retail Турбощетка в упаковке</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/a5307e77bbd77d05fd1bf891a3eeb5d0.jpeg" alt="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный" title="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-4590r"><span class="title">хлебопечки в новосибирске Пылесос Vitek VT-1845 красный</span><p>от <span class="price">4590</span> руб.</p></div></li>
						<li><img src="photos/a24b7e04e12ea5cc75354fc2b5ebd18d.jpeg" alt="фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный" title="фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный"><div class="box" page="pylesos-vitek-vt-chernyy-2600r"><span class="title">фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный</span><p>от <span class="price">2600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-russell-hobbs-allure-art-5490r.php", 0, -4); if (file_exists("comments/blender-russell-hobbs-allure-art-5490r.php")) require_once "comments/blender-russell-hobbs-allure-art-5490r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-russell-hobbs-allure-art-5490r.php" method="post" onsubmit="return checkForm(this)">
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