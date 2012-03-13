<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("atlanta-ath-utyug-450r.php","контейнер для пароварки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("atlanta-ath-utyug-450r.php", $nick, $comment);
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
		<title>контейнер для пароварки Atlanta ATH-432 Утюг  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="контейнер для пароварки, цилиндрические пылесосы, пылесос thomas genius s2, выбор кофемашины, кухонный комбайн фото, как работает кофеварка, хлебопечка хлеб из гречневой муки, какой пылесос самый лучший, электронная мясорубка, запчасти для блендера braun, пылесосы в гродно, какая мощность у пылесоса, баклажаны в пароварке, утюг braun 18895,  панасоник соковыжималка">
		<meta name="description" content="контейнер для пароварки Утюг Atlanta ATH-432 с пароувлажнителем мощностью 1200 Вт – стильный, выполненны...">
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
						<a class="photo" href="photos/5c8ca3c5b3cad9622fdcc96bde1be1b9.jpeg" title="контейнер для пароварки Atlanta ATH-432 Утюг"><img src="photos/5c8ca3c5b3cad9622fdcc96bde1be1b9.jpeg" alt="контейнер для пароварки Atlanta ATH-432 Утюг" title="контейнер для пароварки Atlanta ATH-432 Утюг -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2190r.php"><img src="photos/1546b6eb4b08215189976c86afe6dd84.jpeg" alt="цилиндрические пылесосы Блендер Redmond RHB-2905" title="цилиндрические пылесосы Блендер Redmond RHB-2905"></a><h2>Блендер Redmond RHB-2905</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2180r.php"><img src="photos/a1f8cd769afd06226b32e6fb44474c86.jpeg" alt="пылесос thomas genius s2 Блендер Redmond RHB-2908" title="пылесос thomas genius s2 Блендер Redmond RHB-2908"></a><h2>Блендер Redmond RHB-2908</h2></li>
							<li><a href="http://kitchentech.elitno.net/pribor-dlya-vakuumnoy-upakovki-vacuum-sealer-v-1100r.php"><img src="photos/4f2572ea69a163b235386a6893a52b4a.jpeg" alt="выбор кофемашины Прибор для вакуумной упаковки Vacuum Sealer 024V" title="выбор кофемашины Прибор для вакуумной упаковки Vacuum Sealer 024V"></a><h2>Прибор для вакуумной упаковки Vacuum Sealer 024V</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>контейнер для пароварки Atlanta ATH-432 Утюг</h1>
						<div class="tb"><p>Цена: от <span class="price">450</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19744.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Утюг Atlanta ATH-432 с пароувлажнителем мощностью 1200 Вт – стильный, выполненный в черно-серых тонах с добавлением синего, прибор для глажки с подошвой из нержавеющей стали. Имеет функцию парового удара. Иногда для проглаживания сильно пересушенных или толстых тканей не хватает даже максимальной модности постоянного пара. Специально для таких случаев в этом утюге есть паровой удар. При нажатии на кнопку происходит мощная подача пара, находящегося под высоким давлением. Сильный удар горячего пара размягчает волокна и быстро разглаживает даже глубокие складки. А подача вертикального пара позволяет гладить пиджаки, пальто и другие вещи прямо на вешалке или манекене. Чтобы не испортить тонкие ткани использованием пара, предусмотрен распылитель.</p><p>Характеристики:</p><ul type=disc><li>Современный дизайн <li>Подошва из нержавеющей стали <li>Сухой или паровой режим глаженья <li>Функция вертикального пара <li>Прозрачный резервуар для воды <li>Функция распыления <li>Дополнительная подача пара <li>Максимальная мощность 1200 Вт <li>220-240 В, 50-60 Гц <li>28 x 12 x 15 см </li></ul><p><strong>Производитель: США</strong></p> контейнер для пароварки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a778f38f56b1abc67bee8e49c9772547.jpeg" alt="кухонный комбайн фото Микроволновая печь Vitek VT-1691" title="кухонный комбайн фото Микроволновая печь Vitek VT-1691"><div class="box" page="mikrovolnovaya-pech-vitek-vt-2750r"><span class="title">кухонный комбайн фото Микроволновая печь Vitek VT-1691</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/276b4e96e52e1526338897e899045489.jpeg" alt="как работает кофеварка Керамическая кастрюля Maruchi для моделей RW-FZ46, FZ47, RB-FC46" title="как работает кофеварка Керамическая кастрюля Maruchi для моделей RW-FZ46, FZ47, RB-FC46"><div class="box" page="keramicheskaya-kastryulya-maruchi-dlya-modeley-rwfz-fz-rbfc-1200r"><span class="title">как работает кофеварка Керамическая кастрюля Maruchi для моделей RW-FZ46, FZ47, RB-FC46</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/7ffc20dc8107b2fc1365cfb7486e823a.jpeg" alt="хлебопечка хлеб из гречневой муки Индукционная плита Kitfort KT-101" title="хлебопечка хлеб из гречневой муки Индукционная плита Kitfort KT-101"><div class="box" page="indukcionnaya-plita-kitfort-kt-2700r"><span class="title">хлебопечка хлеб из гречневой муки Индукционная плита Kitfort KT-101</span><p>от <span class="price">2700</span> руб.</p></div></li>
						<li><img src="photos/27ce5b772a93a2336124e9a6817baf03.jpeg" alt="какой пылесос самый лучший Фритюрница Tefal Actifry FZ7000" title="какой пылесос самый лучший Фритюрница Tefal Actifry FZ7000"><div class="box" page="frityurnica-tefal-actifry-fz-7700r"><span class="title">какой пылесос самый лучший Фритюрница Tefal Actifry FZ7000</span><p>от <span class="price">7700</span> руб.</p></div></li>
						<li class="large"><img src="photos/f056d129bd10f6cbcdccf3b119b91dc8.jpeg" alt="электронная мясорубка Чайник электрический  Vitesse VS-143 стеклянный 1,7л" title="электронная мясорубка Чайник электрический  Vitesse VS-143 стеклянный 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-steklyannyy-l-2280r"><span class="title">электронная мясорубка Чайник электрический  Vitesse VS-143 стеклянный 1,7л</span><p>от <span class="price">2280</span> руб.</p></div></li>
						<li class="large"><img src="photos/e766dc7a6c0cf1b164fee2cb011a81f8.jpeg" alt="запчасти для блендера braun Чайник Vitek VT-1163" title="запчасти для блендера braun Чайник Vitek VT-1163"><div class="box" page="chaynik-vitek-vt-990r"><span class="title">запчасти для блендера braun Чайник Vitek VT-1163</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/759cc36b06e68665280825b9c45b38c7.jpeg" alt="пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO" title="пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO"><div class="box" page="elektricheskiy-chaynik-l-krasnyy-bodum-bistro-euro-2270r"><span class="title">пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li><img src="photos/eb7760a68b0b3e85f39c2160100a5731.jpeg" alt="какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008" title="какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008"><div class="box" page="moyuschiy-koncentrat-thomas-profloor-l-sht-700r"><span class="title">какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/916a75c3d4cbc8ec64d3ba505b733ba5.jpeg" alt="баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312" title="баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312"><div class="box" page="vozdushnyy-filtr-redmond-hepafiltr-rv-390r"><span class="title">баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/6a73d6f5ed044b39207ab31ca41595f1.jpeg" alt="утюг braun 18895 Пылесос моющий Thomas Bravo 20" title="утюг braun 18895 Пылесос моющий Thomas Bravo 20"><div class="box" page="pylesos-moyuschiy-thomas-bravo-8050r"><span class="title">утюг braun 18895 Пылесос моющий Thomas Bravo 20</span><p>от <span class="price">8050</span> руб.</p></div></li>
						<li><img src="photos/00492fb3046ec485746c0b2d1a1385eb.jpeg" alt="микроволновая печь электросхема Пылесос Thomas Inox 1545 S" title="микроволновая печь электросхема Пылесос Thomas Inox 1545 S"><div class="box" page="pylesos-thomas-inox-s-10410r"><span class="title">микроволновая печь электросхема Пылесос Thomas Inox 1545 S</span><p>от <span class="price">10410</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("atlanta-ath-utyug-450r.php", 0, -4); if (file_exists("comments/atlanta-ath-utyug-450r.php")) require_once "comments/atlanta-ath-utyug-450r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="atlanta-ath-utyug-450r.php" method="post" onsubmit="return checkForm(this)">
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