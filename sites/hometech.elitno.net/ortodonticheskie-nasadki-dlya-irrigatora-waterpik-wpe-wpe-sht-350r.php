<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("ortodonticheskie-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php","эпилятор фото");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("ortodonticheskie-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php", $nick, $comment);
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
		<title>эпилятор фото Ортодонтические насадки для ирригатора Waterpik WP100E, WP360E (2шт.)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="эпилятор фото, массаж при гайморите, проверить зеркала, производители фенов, эпиляторы браун цены, тайский массаж ног, маски блески бигуди азбука красоты, хромированные зеркала, магазин соляриев, голая в зеркале, курсы массажа в минске, бигуди своими руками, бытовая техника фены, двигатель для триммера,  отзывы тайский массаж">
		<meta name="description" content="эпилятор фото Ортодонтические насадки позволяют сочетать свойства распылителя и непосредственн...">
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
						<a class="photo" href="photos/dd826d0b620eb6766b31d8f68c57fcdb.jpeg" title="эпилятор фото Ортодонтические насадки для ирригатора Waterpik WP100E, WP360E (2шт.)"><img src="photos/dd826d0b620eb6766b31d8f68c57fcdb.jpeg" alt="эпилятор фото Ортодонтические насадки для ирригатора Waterpik WP100E, WP360E (2шт.)" title="эпилятор фото Ортодонтические насадки для ирригатора Waterpik WP100E, WP360E (2шт.) -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-2400r.php"><img src="photos/2b0830cb971a08fbcbc59104f1b6f567.jpeg" alt="массаж при гайморите Анализатор жира (состава тела) Tanita BC-540" title="массаж при гайморите Анализатор жира (состава тела) Tanita BC-540"></a><h2>Анализатор жира (состава тела) Tanita BC-540</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-3150r.php"><img src="photos/1f5b8110c2b740c08d9424168a144be9.jpeg" alt="проверить зеркала Анализатор жира (состава тела) Tanita BC-541" title="проверить зеркала Анализатор жира (состава тела) Tanita BC-541"></a><h2>Анализатор жира (состава тела) Tanita BC-541</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-digital-ceramic-nanosilver-2470r.php"><img src="photos/65295d452583f16a109ca092e4c4f41f.jpeg" alt="производители фенов Выпрямитель Valera Digital Ceramic Nanosilver 638.01" title="производители фенов Выпрямитель Valera Digital Ceramic Nanosilver 638.01"></a><h2>Выпрямитель Valera Digital Ceramic Nanosilver 638.01</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>эпилятор фото Ортодонтические насадки для ирригатора Waterpik WP100E, WP360E (2шт.)</h1>
						<div class="tb"><p>Цена: от <span class="price">350</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_837.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Ортодонтические насадки позволяют сочетать свойства распылителя и непосредственно щетки. Так, например, щетинки насадки удаляют налет в труднодоступных местах между зубами, под десневым краем, в местах контакта брекетов с зубами, который тут же смывается струей воды. Таким образом, чистка водой под давлением сочетается с механической чисткой щеткой, что делает процедуру ухода за полостью рта наиболее качественной.</p><p><strong>В комплект входит: </strong>две ортодонтические насадки </p><p><b>Производитель:</b> Waterpik Technologies (США)</p> эпилятор фото</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/adc8c79d7ed866b242f75ff41255c3ae.jpeg" alt="эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830" title="эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r"><span class="title">эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/b065bebb64de8f2c346a89fd812de718.jpeg" alt="тайский массаж ног Восстановление. Реминерализующий гель с фтором. Revive." title="тайский массаж ног Восстановление. Реминерализующий гель с фтором. Revive."><div class="box" page="vosstanovlenie-remineralizuyuschiy-gel-s-ftorom-revive-540r"><span class="title">тайский массаж ног Восстановление. Реминерализующий гель с фтором. Revive.</span><p>от <span class="price">540</span> руб.</p></div></li>
						<li><img src="photos/053285d569e1ae555817f73299eae874.jpeg" alt="маски блески бигуди азбука красоты Раскладной массажный стол US Medica Osaka линейка Sumo Line" title="маски блески бигуди азбука красоты Раскладной массажный стол US Medica Osaka линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-osaka-lineyka-sumo-line-21900r"><span class="title">маски блески бигуди азбука красоты Раскладной массажный стол US Medica Osaka линейка Sumo Line</span><p>от <span class="price">21900</span> руб.</p></div></li>
						<li><img src="photos/eb869f90a5f3f5c904615d9c1da045f4.jpeg" alt="хромированные зеркала Гидромассажная ванночка с турбо-массажем Laica BF2011" title="хромированные зеркала Гидромассажная ванночка с турбо-массажем Laica BF2011"><div class="box" page="gidromassazhnaya-vannochka-s-turbomassazhem-laica-bf-4000r"><span class="title">хромированные зеркала Гидромассажная ванночка с турбо-массажем Laica BF2011</span><p>от <span class="price">4000</span> руб.</p></div></li>
						<li class="large"><img src="photos/bf7091b51f9b18fac68640a374cc7836.jpeg" alt="магазин соляриев Импульсный массажер для лица Gezatone BT-101 4 сменных насадки" title="магазин соляриев Импульсный массажер для лица Gezatone BT-101 4 сменных насадки"><div class="box" page="impulsnyy-massazher-dlya-lica-gezatone-bt-smennyh-nasadki-2800r"><span class="title">магазин соляриев Импульсный массажер для лица Gezatone BT-101 4 сменных насадки</span><p>от <span class="price">2800</span> руб.</p></div></li>
						<li class="large"><img src="photos/0247c938b69c64f973b5b1fe26680c59.jpeg" alt="голая в зеркале Массажер для ухода за кожей лица Gezatone m708" title="голая в зеркале Массажер для ухода за кожей лица Gezatone m708"><div class="box" page="massazher-dlya-uhoda-za-kozhey-lica-gezatone-m-5000r"><span class="title">голая в зеркале Массажер для ухода за кожей лица Gezatone m708</span><p>от <span class="price">5000</span> руб.</p></div></li>
						<li class="large"><img src="photos/d881128511cd03aa90feb76747b82b80.jpeg" alt="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл" title="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-apelsinovyy-v-kartridzhe-ml-140r"><span class="title">курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл</span><p>от <span class="price">140</span> руб.</p></div></li>
						<li><img src="photos/88894b08c861cb5305303cf8ba8908c8.jpeg" alt="бигуди своими руками Фен Babyliss D121E 1900 Вт" title="бигуди своими руками Фен Babyliss D121E 1900 Вт"><div class="box" page="fen-babyliss-de-vt-1000r"><span class="title">бигуди своими руками Фен Babyliss D121E 1900 Вт</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/8ec2c52e42a0b6563df60b019f08c0e4.jpeg" alt="бытовая техника фены Фен Corioliss Mini Vintage Dryer Floral" title="бытовая техника фены Фен Corioliss Mini Vintage Dryer Floral"><div class="box" page="fen-corioliss-mini-vintage-dryer-floral-2250r"><span class="title">бытовая техника фены Фен Corioliss Mini Vintage Dryer Floral</span><p>от <span class="price">2250</span> руб.</p></div></li>
						<li><img src="photos/22e21c0bea0c32121f5c56fb4b451a62.jpeg" alt="двигатель для триммера Насадка для зубных щеток Omron Super-Fine Soft Bristle Head SB-080" title="двигатель для триммера Насадка для зубных щеток Omron Super-Fine Soft Bristle Head SB-080"><div class="box" page="nasadka-dlya-zubnyh-schetok-omron-superfine-soft-bristle-head-sb-300r"><span class="title">двигатель для триммера Насадка для зубных щеток Omron Super-Fine Soft Bristle Head SB-080</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/ede11f2c17725c377852bd7c89a582d6.jpeg" alt="солярий в аренду Стерилизатор для зубных щеток Gezatone t4 130811" title="солярий в аренду Стерилизатор для зубных щеток Gezatone t4 130811"><div class="box" page="sterilizator-dlya-zubnyh-schetok-gezatone-t-600r"><span class="title">солярий в аренду Стерилизатор для зубных щеток Gezatone t4 130811</span><p>от <span class="price">600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("ortodonticheskie-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php", 0, -4); if (file_exists("comments/ortodonticheskie-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php")) require_once "comments/ortodonticheskie-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="ortodonticheskie-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php" method="post" onsubmit="return checkForm(this)">
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