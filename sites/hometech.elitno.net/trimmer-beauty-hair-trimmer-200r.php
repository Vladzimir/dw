<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("trimmer-beauty-hair-trimmer-200r.php","массаж коленного сустава");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("trimmer-beauty-hair-trimmer-200r.php", $nick, $comment);
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
		<title>массаж коленного сустава Триммер Beauty Hair Trimmer  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж коленного сустава, хочу у зеркала где муть, мягкий массаж, зеркало заднего вида мерседес, куплю весы электронные напольные, авто зеркало купить, куплю триммер в москве, зеркала лорак песня, электробритва харьков, вакуумный массаж живота, обзор электробритв, химическая завивка на короткие волосы, вакансии маникюр педикюр, правильный массаж живота,  завивка волос утюжком">
		<meta name="description" content="массаж коленного сустава Триммер Beauty Hair Trimmer – это компактный прибор, предназначенный для депиляц...">
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
						<a class="photo" href="photos/042e8c83842b5051a47ae5ba07dd8b37.jpeg" title="массаж коленного сустава Триммер Beauty Hair Trimmer"><img src="photos/042e8c83842b5051a47ae5ba07dd8b37.jpeg" alt="массаж коленного сустава Триммер Beauty Hair Trimmer" title="массаж коленного сустава Триммер Beauty Hair Trimmer -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/us-medica-infinity-massazhnoe-kreslo-250000r.php"><img src="photos/43a4c6d86cdb99a86d7b7420d8caf6b4.jpeg" alt="хочу у зеркала где муть US Medica INFINITY Массажное кресло" title="хочу у зеркала где муть US Medica INFINITY Массажное кресло"></a><h2>US Medica INFINITY Массажное кресло</h2></li>
							<li><a href="http://hometech.elitno.net/poyasmiostimulyator-dvuhkanalnyy-abtronic-x-bez-gelya-1500r.php"><img src="photos/582bcb29ca20130c2748b22d513bbded.jpeg" alt="мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)" title="мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)"></a><h2>Пояс-миостимулятор двухканальный AbTronic X2 (без геля)</h2></li>
							<li><a href="http://hometech.elitno.net/applikator-kuznecova-200r.php"><img src="photos/4672e333a6bf6781c5b059e098066f46.jpeg" alt="зеркало заднего вида мерседес Аппликатор Кузнецова" title="зеркало заднего вида мерседес Аппликатор Кузнецова"></a><h2>Аппликатор Кузнецова</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж коленного сустава Триммер Beauty Hair Trimmer</h1>
						<div class="tb"><p>Цена: от <span class="price">200</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_5714.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><strong>Триммер Beauty Hair Trimmer </strong>– это компактный прибор, предназначенный для депиляции. С его помощью можно быстро и аккуратно подправить брови, виски, бакенбарды, а также удалить волосы на шее, лице, в области бикини. Beauty Hair Trimmer легко поместится в вашей косметичке, с ним вы в любых условиях будете отлично выглядеть. Питание аппарата происходит от батарейки формата AA (приобретается отдельно). массаж коленного сустава</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a881720fb288bef785b8ec593e51d624.jpeg" alt="куплю весы электронные напольные Гидромассажная ванночка для ног Beurer FB14" title="куплю весы электронные напольные Гидромассажная ванночка для ног Beurer FB14"><div class="box"><a href="http://hometech.elitno.net/gidromassazhnaya-vannochka-dlya-nog-beurer-fb-1750r.php"><h3 class="title">куплю весы электронные напольные Гидромассажная ванночка для ног Beurer FB14</h3><p>от <span class="price">1750</span> руб.</p></a></div></li>
						<li><img src="photos/a988f6b179dab67cec02b51dcf3c6687.jpeg" alt="авто зеркало купить Массажная накидка ZENET TL-2007-В" title="авто зеркало купить Массажная накидка ZENET TL-2007-В"><div class="box" page="massazhnaya-nakidka-zenet-tlv-2950r"><span class="title">авто зеркало купить Массажная накидка ZENET TL-2007-В</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li><img src="photos/5d92120d3065dfcf7d5f91af9dd4ca58.jpeg" alt="куплю триммер в москве Массажная накидка ZENET TL-2007-Z" title="куплю триммер в москве Массажная накидка ZENET TL-2007-Z"><div class="box" page="massazhnaya-nakidka-zenet-tlz-4950r"><span class="title">куплю триммер в москве Массажная накидка ZENET TL-2007-Z</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/7027adb71f2155ad74bf69c108416d64.jpeg" alt="зеркала лорак песня Прибор для ухода за кожей лица Gezatone Superlifting m355 с функцией светотерапии" title="зеркала лорак песня Прибор для ухода за кожей лица Gezatone Superlifting m355 с функцией светотерапии"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-superlifting-m-s-funkciey-svetoterapii-3650r"><span class="title">зеркала лорак песня Прибор для ухода за кожей лица Gezatone Superlifting m355 с функцией светотерапии</span><p>от <span class="price">3650</span> руб.</p></div></li>
						<li class="large"><img src="photos/3e07c9c76543509eb7330cd46f97b553.jpeg" alt="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01" title="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01"><div class="box" page="mashinka-dlya-strizhki-volos-valera-absolut-3480r"><span class="title">электробритва харьков Машинка для стрижки волос Valera Absolut 648.01</span><p>от <span class="price">3480</span> руб.</p></div></li>
						<li class="large"><img src="photos/d9208946e2e1dbc0a6fe02e91ec3f7ff.jpeg" alt="вакуумный массаж живота Клипсы Corioliss Professional Hair Clips 8 шт" title="вакуумный массаж живота Клипсы Corioliss Professional Hair Clips 8 шт"><div class="box" page="klipsy-corioliss-professional-hair-clips-sht-750r"><span class="title">вакуумный массаж живота Клипсы Corioliss Professional Hair Clips 8 шт</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li class="large"><img src="photos/bfdb0c6dda6fe1a181ec398c6a034691.jpeg" alt="обзор электробритв Лосьон после депиляции Rica, с экстрактом алоэ-вера 250мл" title="обзор электробритв Лосьон после депиляции Rica, с экстрактом алоэ-вера 250мл"><div class="box" page="loson-posle-depilyacii-rica-s-ekstraktom-aloevera-ml-600r"><span class="title">обзор электробритв Лосьон после депиляции Rica, с экстрактом алоэ-вера 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/315fceab69c6c513c80a5c9bf34f9fb0.jpeg" alt="химическая завивка на короткие волосы BaByliss E842XE Триммер" title="химическая завивка на короткие волосы BaByliss E842XE Триммер"><div class="box" page="babyliss-exe-trimmer-1520r"><span class="title">химическая завивка на короткие волосы BaByliss E842XE Триммер</span><p>от <span class="price">1520</span> руб.</p></div></li>
						<li><img src="photos/48311533a55ee855ad27521330f06278.jpeg" alt="вакансии маникюр педикюр Фен Atlanta АТН-866" title="вакансии маникюр педикюр Фен Atlanta АТН-866"><div class="box" page="fen-atlanta-atn-950r"><span class="title">вакансии маникюр педикюр Фен Atlanta АТН-866</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li><img src="photos/f858c82b10a39109d5171ba0356b80f7.jpeg" alt="правильный массаж живота Фен Vitesse VS-943 сиреневый" title="правильный массаж живота Фен Vitesse VS-943 сиреневый"><div class="box" page="fen-vitesse-vs-sirenevyy-640r"><span class="title">правильный массаж живота Фен Vitesse VS-943 сиреневый</span><p>от <span class="price">640</span> руб.</p></div></li>
						<li><img src="photos/1a210244749be72407427b614ce3bd69.jpeg" alt="колледж курсы массажа Зубная щетка-ирригатор AMEE ORAL JET BRAUN MD-18 (MD-20)" title="колледж курсы массажа Зубная щетка-ирригатор AMEE ORAL JET BRAUN MD-18 (MD-20)"><div class="box" page="zubnaya-schetkairrigator-amee-oral-jet-braun-md-md-5600r"><span class="title">колледж курсы массажа Зубная щетка-ирригатор AMEE ORAL JET BRAUN MD-18 (MD-20)</span><p>от <span class="price">5600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("trimmer-beauty-hair-trimmer-200r.php", 0, -4); if (file_exists("comments/trimmer-beauty-hair-trimmer-200r.php")) require_once "comments/trimmer-beauty-hair-trimmer-200r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="trimmer-beauty-hair-trimmer-200r.php" method="post" onsubmit="return checkForm(this)">
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