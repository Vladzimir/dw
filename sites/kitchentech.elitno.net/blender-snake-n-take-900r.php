<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-snake-n-take-900r.php","хлебопечка bork x500");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-snake-n-take-900r.php", $nick, $comment);
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
		<title>хлебопечка bork x500 Блендер Snake n Take  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="хлебопечка bork x500, запчасти для утюгов, ручной блендер hr1659, лампа для аэрогриля, мясорубки в санкт петербурге, блендер в одессе, мультиварка sr tmh 10, пылесос для сухой чистки, кофеварка эспрессо krups, устройство блендера, пылесосы в гродно, какие лучше микроволновые печи, пылесос thomas genius s2, какой лучше парогенератор,  пылесос bosch 82425">
		<meta name="description" content="хлебопечка bork x500 Блендер Snake n Take создан для людей, которые стремятся вести здоровый образ жи...">
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
						<a class="photo" href="photos/3a6f8f5bcd6b4c656110981eb9f3285b.jpeg" title="хлебопечка bork x500 Блендер Snake n Take"><img src="photos/3a6f8f5bcd6b4c656110981eb9f3285b.jpeg" alt="хлебопечка bork x500 Блендер Snake n Take" title="хлебопечка bork x500 Блендер Snake n Take -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/multivarka-redmond-rmcm-4490r.php"><img src="photos/785647aa8682372d107781ac6f9a4974.jpeg" alt="запчасти для утюгов Мультиварка Redmond RMC-M4504" title="запчасти для утюгов Мультиварка Redmond RMC-M4504"></a><h2>Мультиварка Redmond RMC-M4504</h2></li>
							<li><a href="http://kitchentech.elitno.net/multivarka-maruchi-rwfz-4000r.php"><img src="photos/2118e94c9f54fd8ac8f1f2abebe50fe3.jpeg" alt="ручной блендер hr1659 Мультиварка Maruchi RW-FZ47" title="ручной блендер hr1659 Мультиварка Maruchi RW-FZ47"></a><h2>Мультиварка Maruchi RW-FZ47</h2></li>
							<li><a href="http://kitchentech.elitno.net/multivarka-maruchi-rwfzf-2700r.php"><img src="photos/c2ec0f6a659b8874d2e6e8a30149501a.jpeg" alt="лампа для аэрогриля Мультиварка Maruchi  RW-FZ45F" title="лампа для аэрогриля Мультиварка Maruchi  RW-FZ45F"></a><h2>Мультиварка Maruchi  RW-FZ45F</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>хлебопечка bork x500 Блендер Snake n Take</h1>
						<div class="tb"><p>Цена: от <span class="price">900</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_5728.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Блендер Snake n Take</b> создан для людей, которые стремятся вести здоровый образ жизни, но дорожат временем, употребляя полезную пищу на ходу. В нем можно быстро смешивать различные ингредиенты и пить прямо из емкости. Дизайн выполнен в спортивном стиле. Прибор оснащен удобной влагозащитной флип-крышкой, подключается к стандартной розетке. Компактность Snake n Take позволяет носить его с собой. </p><p><b>Особенности:</b></p><ul type=disc><li>Влагозащитная флип-крышка; <li>Спортивный стиль бутылки; <li>Подключается к стандартной электрической розетке; <li>Удобен для быстрого принятия пищи, где бы вы ни находились.</li></ul> хлебопечка bork x500</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/54c54bed2f103aac514687168a05cb1f.jpeg" alt="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56" title="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56"><div class="box" page="toster-russell-hobbs-cottage-floral-art-2790r"><span class="title">мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56</span><p>от <span class="price">2790</span> руб.</p></div></li>
						<li><img src="photos/64a1e17046b7c97f3413bb1bcacb4f30.jpeg" alt="блендер в одессе Чайник экспресс Binatone EEJ-1555 White" title="блендер в одессе Чайник экспресс Binatone EEJ-1555 White"><div class="box" page="chaynik-ekspress-binatone-eej-white-2600r"><span class="title">блендер в одессе Чайник экспресс Binatone EEJ-1555 White</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li><img src="photos/b18048af79224983f1e624ba7e264cff.jpeg" alt="мультиварка sr tmh 10 Чайник электрический Vitek VT-1144 серебряный" title="мультиварка sr tmh 10 Чайник электрический Vitek VT-1144 серебряный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-serebryanyy-1550r"><span class="title">мультиварка sr tmh 10 Чайник электрический Vitek VT-1144 серебряный</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/92677a851872ec83258943db2c5f8e10.jpeg" alt="пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л" title="пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-reminisce-ki-l-2370r-2"><span class="title">пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л</span><p>от <span class="price">2370</span> руб.</p></div></li>
						<li class="large"><img src="photos/0fb0d4eda0d01d4692f2fbd689f6f46f.jpeg" alt="кофеварка эспрессо krups Чайник электрический Vitek VT-1112 1,7 л" title="кофеварка эспрессо krups Чайник электрический Vitek VT-1112 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitek-vt-l-1890r"><span class="title">кофеварка эспрессо krups Чайник электрический Vitek VT-1112 1,7 л</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li class="large"><img src="photos/0c8f8180d11bb1b314126b1e547c3319.jpeg" alt="устройство блендера Чайник электрический  Vitesse VS-131 1,7 л" title="устройство блендера Чайник электрический  Vitesse VS-131 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1220r"><span class="title">устройство блендера Чайник электрический  Vitesse VS-131 1,7 л</span><p>от <span class="price">1220</span> руб.</p></div></li>
						<li class="large"><img src="photos/759cc36b06e68665280825b9c45b38c7.jpeg" alt="пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO" title="пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO"><div class="box" page="elektricheskiy-chaynik-l-krasnyy-bodum-bistro-euro-2270r"><span class="title">пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li><img src="photos/27a529eb06db7d79aab6d5d214852413.jpeg" alt="какие лучше микроволновые печи Minamoto R03 (AAA)" title="какие лучше микроволновые печи Minamoto R03 (AAA)"><div class="box" page="minamoto-r-aaa-4r"><span class="title">какие лучше микроволновые печи Minamoto R03 (AAA)</span><p>от <span class="price">4</span> руб.</p></div></li>
						<li><img src="photos/94de14730b416ab6939a25c5af76e14e.jpeg" alt="пылесос thomas genius s2 Парогенератор Lelit PS11N" title="пылесос thomas genius s2 Парогенератор Lelit PS11N"><div class="box" page="parogenerator-lelit-psn-12000r"><span class="title">пылесос thomas genius s2 Парогенератор Lelit PS11N</span><p>от <span class="price">12000</span> руб.</p></div></li>
						<li><img src="photos/512f8d3c0276804b57a2729ea05d9ba6.jpeg" alt="какой лучше парогенератор Набор мешков-пылесборников 35 (787-183) для Thomas" title="какой лучше парогенератор Набор мешков-пылесборников 35 (787-183) для Thomas"><div class="box" page="nabor-meshkovpylesbornikov-dlya-thomas-1100r-2"><span class="title">какой лучше парогенератор Набор мешков-пылесборников 35 (787-183) для Thomas</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/b8e20b7d51cc5f25b0392815fadedf6e.jpeg" alt="блюда с помощью блендера Турбощетка Redmond  RTB-4801" title="блюда с помощью блендера Турбощетка Redmond  RTB-4801"><div class="box" page="turboschetka-redmond-rtb-920r"><span class="title">блюда с помощью блендера Турбощетка Redmond  RTB-4801</span><p>от <span class="price">920</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-snake-n-take-900r.php", 0, -4); if (file_exists("comments/blender-snake-n-take-900r.php")) require_once "comments/blender-snake-n-take-900r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-snake-n-take-900r.php" method="post" onsubmit="return checkForm(this)">
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