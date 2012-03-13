<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("razogrevatel-dlya-voska-gezatone-s-bazoy-1490r.php","зеркало увеличительное");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("razogrevatel-dlya-voska-gezatone-s-bazoy-1490r.php", $nick, $comment);
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
		<title>зеркало увеличительное Разогреватель для воска Gezatone с базой  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="зеркало увеличительное, херсон массаж, купить дарсонваль карат, эпиляторы philips отзывы, стайлер для завивки волос braun, укладка волос на бигуди, дренажный массаж, осмотр гинекологическим зеркалом, дарсонваль противопоказания, костюм для lpg массажа купить, кузя заколдованное зеркало, зеркало с полкой для ванной, значение массажа, массаж медведково,  электронные весы новосибирск">
		<meta name="description" content="зеркало увеличительное Разогреватель для воска от французской марки позволит вам легко и быстро избавит...">
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
						<a class="photo" href="photos/0915015c954509bbff766b4be4039b0b.jpeg" title="зеркало увеличительное Разогреватель для воска Gezatone с базой"><img src="photos/0915015c954509bbff766b4be4039b0b.jpeg" alt="зеркало увеличительное Разогреватель для воска Gezatone с базой" title="зеркало увеличительное Разогреватель для воска Gezatone с базой -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-flexa-2950r.php"><img src="photos/761f0ad81569062a7e0ab609f4286969.jpeg" alt="херсон массаж Выпрямитель Valera Flexa 646.01" title="херсон массаж Выпрямитель Valera Flexa 646.01"></a><h2>Выпрямитель Valera Flexa 646.01</h2></li>
							<li><a href="http://hometech.elitno.net/nasadki-dlya-irrigatorov-serii-aquapulsar-sht-omron-cs-medica-ap-360r.php"><img src="photos/db70e4caed6a14bdf471de2cc1b8511a.jpeg" alt="купить дарсонваль карат Насадки для ирригаторов серии AquaPulsar (4шт.) OMRON CS Medica AP-40" title="купить дарсонваль карат Насадки для ирригаторов серии AquaPulsar (4шт.) OMRON CS Medica AP-40"></a><h2>Насадки для ирригаторов серии AquaPulsar (4шт.) OMRON CS Medica AP-40</h2></li>
							<li><a href="http://hometech.elitno.net/irrigator-polosti-rta-donfeel-orm-s-nazalnoy-opciey-komplektaciya-3100r.php"><img src="photos/9a3535a024b93d14467dda20bb096b04.jpeg" alt="эпиляторы philips отзывы Ирригатор полости рта DONFEEL OR-820M с назальной опцией. Комплектация 2" title="эпиляторы philips отзывы Ирригатор полости рта DONFEEL OR-820M с назальной опцией. Комплектация 2"></a><h2>Ирригатор полости рта DONFEEL OR-820M с назальной опцией. Комплектация 2</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>зеркало увеличительное Разогреватель для воска Gezatone с базой</h1>
						<div class="tb"><p>Цена: от <span class="price">1490</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12260.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Разогреватель для воска от французской марки позволит вам легко и быстро избавиться от нежелательных волос на лице и теле. Комплект одинаково удобен в использовании, как в косметическом салоне, так и в домашних условиях.</p><p>Компактный нагреватель подходит для разогрева большинства картриджей объемом 100гр. В набор входит удобная база для нагревателя.</p><p><b>Комплектация:</b></p><ul type=disc><li>Нагреватель для картриджей объемом 100гр; <li>Соединительный провод; <li>Инструкция по эксплуатации.</li></ul><p><b>Производитель:</b> Gezanne I.T.C.</p><p><b>Страна:</b> Франция.</p><p><b>Гарантия:</b> 1 год со дня продажи.</p> зеркало увеличительное</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/13b08c422e5d93db5b02db2f9f4cebf3.jpeg" alt="стайлер для завивки волос braun Маникюрно-педикюрный набор Beurer MP60 (9 насадок)" title="стайлер для завивки волос braun Маникюрно-педикюрный набор Beurer MP60 (9 насадок)"><div class="box"><a href="http://hometech.elitno.net/manikyurnopedikyurnyy-nabor-beurer-mp-nasadok-2650r.php"><h3 class="title">стайлер для завивки волос braun Маникюрно-педикюрный набор Beurer MP60 (9 насадок)</h3><p>от <span class="price">2650</span> руб.</p></a></div></li>
						<li><img src="photos/3ccd3a7a537feb526e26b8db85765ae5.jpeg" alt="укладка волос на бигуди Маникюрный набор Sanitas SMA-70" title="укладка волос на бигуди Маникюрный набор Sanitas SMA-70"><div class="box" page="manikyurnyy-nabor-sanitas-sma-2500r"><span class="title">укладка волос на бигуди Маникюрный набор Sanitas SMA-70</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/8e0d56e9d9bc332ca7666fce73e0922e.jpeg" alt="дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line" title="дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-panda-lineyka-sumo-line-35000r"><span class="title">дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line</span><p>от <span class="price">35000</span> руб.</p></div></li>
						<li><img src="photos/1ac6b469cdeb6921a5e0268ec37a3b66.jpeg" alt="осмотр гинекологическим зеркалом Пояс массажный BODYKRAFT B2-12" title="осмотр гинекологическим зеркалом Пояс массажный BODYKRAFT B2-12"><div class="box" page="poyas-massazhnyy-bodykraft-b-3290r"><span class="title">осмотр гинекологическим зеркалом Пояс массажный BODYKRAFT B2-12</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li class="large"><img src="photos/935fc905a1cb4968deda57e9f3d264e8.jpeg" alt="дарсонваль противопоказания Машинка для стрижки волос и бороды Babyliss E930XE" title="дарсонваль противопоказания Машинка для стрижки волос и бороды Babyliss E930XE"><div class="box" page="mashinka-dlya-strizhki-volos-i-borody-babyliss-exe-1890r"><span class="title">дарсонваль противопоказания Машинка для стрижки волос и бороды Babyliss E930XE</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li class="large"><img src="photos/369fa02b2fd1e0a8a6d3480c85fe998d.jpeg" alt="костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки" title="костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки"><div class="box" page="atlanta-atn-mashinka-dlya-strizhki-590r"><span class="title">костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li class="large"><img src="photos/e1f8df1d0cae6e5bc21336622bf3ba88.jpeg" alt="кузя заколдованное зеркало Машинка для стрижки Atlanta АТН-850" title="кузя заколдованное зеркало Машинка для стрижки Atlanta АТН-850"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-450r"><span class="title">кузя заколдованное зеркало Машинка для стрижки Atlanta АТН-850</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/75a6701283c6abd4a07fe332ff341b6a.jpeg" alt="зеркало с полкой для ванной Набор насадок для ультразвуковой щетки (3 шт) DONFEEL HSD-005" title="зеркало с полкой для ванной Набор насадок для ультразвуковой щетки (3 шт) DONFEEL HSD-005"><div class="box" page="nabor-nasadok-dlya-ultrazvukovoy-schetki-sht-donfeel-hsd-490r"><span class="title">зеркало с полкой для ванной Набор насадок для ультразвуковой щетки (3 шт) DONFEEL HSD-005</span><p>от <span class="price">490</span> руб.</p></div></li>
						<li><img src="photos/b26b8b705749e2a3a6881624851ac218.jpeg" alt="значение массажа Бритва электрическая Vitesse VS-364" title="значение массажа Бритва электрическая Vitesse VS-364"><div class="box" page="britva-elektricheskaya-vitesse-vs-1040r"><span class="title">значение массажа Бритва электрическая Vitesse VS-364</span><p>от <span class="price">1040</span> руб.</p></div></li>
						<li><img src="photos/88f089fba3994b2424571c824d4df2f4.jpeg" alt="массаж медведково Электробритва Vitesse VS-365" title="массаж медведково Электробритва Vitesse VS-365"><div class="box" page="elektrobritva-vitesse-vs-910r"><span class="title">массаж медведково Электробритва Vitesse VS-365</span><p>от <span class="price">910</span> руб.</p></div></li>
						<li><img src="photos/833169d23c220fec90ad222e16ab5963.jpeg" alt="спиральная завивка волос Эпилятор Valera Comfort-epil Set Cordless 650.01" title="спиральная завивка волос Эпилятор Valera Comfort-epil Set Cordless 650.01"><div class="box" page="epilyator-valera-comfortepil-set-cordless-3270r"><span class="title">спиральная завивка волос Эпилятор Valera Comfort-epil Set Cordless 650.01</span><p>от <span class="price">3270</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("razogrevatel-dlya-voska-gezatone-s-bazoy-1490r.php", 0, -4); if (file_exists("comments/razogrevatel-dlya-voska-gezatone-s-bazoy-1490r.php")) require_once "comments/razogrevatel-dlya-voska-gezatone-s-bazoy-1490r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="razogrevatel-dlya-voska-gezatone-s-bazoy-1490r.php" method="post" onsubmit="return checkForm(this)">
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