<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("espressokofemashina-melitta-caffeo-bistro-42000r.php","микроволновые печи с духовкой");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("espressokofemashina-melitta-caffeo-bistro-42000r.php", $nick, $comment);
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
		<title>микроволновые печи с духовкой Эспрессо-кофемашина Melitta Caffeo Bistro (4.0008.66)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="микроволновые печи с духовкой, пароварка zelmer, кофеварка philips отзывы, турка для кофе купить, кофемолка bosch, утюг какой фирмы лучше, мясорубка binatone, блюда в хлебопечке, блендер бош купить, блендер braun 570, scarlett утюг отзывы, посоветуйте хлебопечку, аэрогриль hotter 1037, соковыжималка philips 1866,  кашеварка panasonic">
		<meta name="description" content="микроволновые печи с духовкой Эспрессо-кофемашина Melitta Caffeo Bistro серебряного цвета прекрасно подходит д...">
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
						<a class="photo" href="photos/dd8035ed578a002d9a18bf964fac9dd9.jpeg" title="микроволновые печи с духовкой Эспрессо-кофемашина Melitta Caffeo Bistro (4.0008.66)"><img src="photos/dd8035ed578a002d9a18bf964fac9dd9.jpeg" alt="микроволновые печи с духовкой Эспрессо-кофемашина Melitta Caffeo Bistro (4.0008.66)" title="микроволновые печи с духовкой Эспрессо-кофемашина Melitta Caffeo Bistro (4.0008.66) -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-menu-bc-hc-4470r.php"><img src="photos/1f1d932d180978b8688482ed678b1aae.jpeg" alt="пароварка zelmer Блендер Braun MR-540 Menu BC HC" title="пароварка zelmer Блендер Braun MR-540 Menu BC HC"></a><h2>Блендер Braun MR-540 Menu BC HC</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-ddd-3050r.php"><img src="photos/88431db04944e702f33c054454f31139.jpeg" alt="кофеварка philips отзывы Блендер погружной Moulinex DD407D72" title="кофеварка philips отзывы Блендер погружной Moulinex DD407D72"></a><h2>Блендер погружной Moulinex DD407D72</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-russell-hobbs-desire-art-2990r.php"><img src="photos/8acd8b43677456777a29a4a8d53c0c0b.jpeg" alt="турка для кофе купить Блендер Russell Hobbs Desire, арт. 18510-56" title="турка для кофе купить Блендер Russell Hobbs Desire, арт. 18510-56"></a><h2>Блендер Russell Hobbs Desire, арт. 18510-56</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>микроволновые печи с духовкой Эспрессо-кофемашина Melitta Caffeo Bistro (4.0008.66)</h1>
						<div class="tb"><p>Цена: от <span class="price">42000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19185.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Эспрессо-кофемашина Melitta Caffeo Bistro серебряного цвета прекрасно подходит для идеального приготовления различных кофейных напитков. Она оборудована эксклюзивной двухкамерной емкостью для кофейных зерен «Bean Select». Любителям кофе нужно лишь выбрать нужный сорт перед приготовлением, например между зернами для эспрессо и зернами слабой обжарки. Со специальным встроенным отсеком для молотого кофе всегда можно приготовить не только зерновое кофе. Удобная встроенная кофемолка, позволяет задать одну из трех степеней измельчения зерен, при этом гарантирована полная сохранность их неповторимого аромата и вкуса. Отличительной особенностью этой кофемашины является специальный механизм заваривания кофе, который позволяет полностью раскрыть все богатство вкуса и аромата кофейных зерен.</p><p><b>Характеристики:</b></p><ul type=disc><li>эспрессо <li>автоматическая <li>для зернового и молотого кофе <li>кофемолка с регулировкой степени помола <li>контроль крепости кофе <li>настройка температуры <li>регулировка порции воды </li></ul><p><b>Производитель: Германия</b></p> микроволновые печи с духовкой</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5ac0b374c54627e297ebdd1a47a1cc62.jpeg" alt="кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро" title="кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро"><div class="box" page="mikrovolnovaya-pech-s-konvekciey-moulinex-mw-hlebopechka-l-serebro-12050r"><span class="title">кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро</span><p>от <span class="price">12050</span> руб.</p></div></li>
						<li><img src="photos/ff295724863185ff22e2c85236f25515.jpeg" alt="утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый" title="утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый"><div class="box" page="bodum-bistro-euro-elektricheskiy-mikser-zelenyy-2740r"><span class="title">утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/cf93342053e92b125e6f4adca7e47bbe.jpeg" alt="мясорубка binatone Пароварка Tefal Simply Invents VC1017" title="мясорубка binatone Пароварка Tefal Simply Invents VC1017"><div class="box" page="parovarka-tefal-simply-invents-vc-3990r"><span class="title">мясорубка binatone Пароварка Tefal Simply Invents VC1017</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/b5363272b3a3c59d4980ee7e84a0ecd1.jpeg" alt="блюда в хлебопечке Соковыжималка для цитрусовых (6020120/21) 307-CP" title="блюда в хлебопечке Соковыжималка для цитрусовых (6020120/21) 307-CP"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-cp-1430r"><span class="title">блюда в хлебопечке Соковыжималка для цитрусовых (6020120/21) 307-CP</span><p>от <span class="price">1430</span> руб.</p></div></li>
						<li class="large"><img src="photos/76b45e609e76d0f51a02bc816db807a1.jpeg" alt="блендер бош купить Тостер Maxima MT-014" title="блендер бош купить Тостер Maxima MT-014"><div class="box" page="toster-maxima-mt-540r"><span class="title">блендер бош купить Тостер Maxima MT-014</span><p>от <span class="price">540</span> руб.</p></div></li>
						<li class="large"><img src="photos/bdf8f9bd66e96c1684451b1f1e782b63.jpeg" alt="блендер braun 570 Тостер лимонный Bodum BISTRO 10709-565EURO" title="блендер braun 570 Тостер лимонный Bodum BISTRO 10709-565EURO"><div class="box" page="toster-limonnyy-bodum-bistro-euro-3660r"><span class="title">блендер braun 570 Тостер лимонный Bodum BISTRO 10709-565EURO</span><p>от <span class="price">3660</span> руб.</p></div></li>
						<li class="large"><img src="photos/3eefca7b285e5c7425033f0997c9145b.jpeg" alt="scarlett утюг отзывы Чайник электрический Vitek VT-1104" title="scarlett утюг отзывы Чайник электрический Vitek VT-1104"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1350r"><span class="title">scarlett утюг отзывы Чайник электрический Vitek VT-1104</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li><img src="photos/0b3cd91064942c75434bb396eaa4e0d2.jpeg" alt="посоветуйте хлебопечку Redmond RK-M121D Чайник электрический" title="посоветуйте хлебопечку Redmond RK-M121D Чайник электрический"><div class="box" page="redmond-rkmd-chaynik-elektricheskiy-1990r"><span class="title">посоветуйте хлебопечку Redmond RK-M121D Чайник электрический</span><p>от <span class="price">1990</span> руб.</p></div></li>
						<li><img src="photos/e9322568d654cf02152dc451f13376f9.jpeg" alt="аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный" title="аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1950r"><span class="title">аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/ba65472be620113b82aa055e0f7c89a6.jpeg" alt="соковыжималка philips 1866 Чайник электрический  Vitesse VS-135 1,7л красный" title="соковыжималка philips 1866 Чайник электрический  Vitesse VS-135 1,7л красный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1510r"><span class="title">соковыжималка philips 1866 Чайник электрический  Vitesse VS-135 1,7л красный</span><p>от <span class="price">1510</span> руб.</p></div></li>
						<li><img src="photos/569a7a448800e6c331839b4f1803d826.jpeg" alt="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502" title="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502"><div class="box" page="moyuschiy-koncentrat-thomas-protex-l-520r"><span class="title">бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502</span><p>от <span class="price">520</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("espressokofemashina-melitta-caffeo-bistro-42000r.php", 0, -4); if (file_exists("comments/espressokofemashina-melitta-caffeo-bistro-42000r.php")) require_once "comments/espressokofemashina-melitta-caffeo-bistro-42000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="espressokofemashina-melitta-caffeo-bistro-42000r.php" method="post" onsubmit="return checkForm(this)">
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