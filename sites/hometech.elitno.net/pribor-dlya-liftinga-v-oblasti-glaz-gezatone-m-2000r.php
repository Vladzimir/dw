<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("pribor-dlya-liftinga-v-oblasti-glaz-gezatone-m-2000r.php","солярий киров");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("pribor-dlya-liftinga-v-oblasti-glaz-gezatone-m-2000r.php", $nick, $comment);
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
		<title>солярий киров Прибор для лифтинга в области глаз Gezatone m190  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="солярий киров, машинка для стрижки волос киев, курсы массажа в нижнем, белая кожа солярий, купить зеркало в спб, наборы с зеркалом, массаж лица соболь, сетка для электробритвы braun, дарсонваль ультратек отзывы, мебельное зеркало, ионизатор воды купить, подглядывание в солярии, дрель для маникюра и педикюра, массаж женщин смотреть бесплатно,  массаж тазобедренный">
		<meta name="description" content="солярий киров Многофункциональный прибор для лифтинга Gezatone осуществляет три самые популярн...">
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
						<a class="photo" href="photos/364f57c9bbd57d63831a2d87ac4fd285.jpeg" title="солярий киров Прибор для лифтинга в области глаз Gezatone m190"><img src="photos/364f57c9bbd57d63831a2d87ac4fd285.jpeg" alt="солярий киров Прибор для лифтинга в области глаз Gezatone m190" title="солярий киров Прибор для лифтинга в области глаз Gezatone m190 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-650r.php"><img src="photos/36e443eaf6287b929dd8b73b824c491a.jpeg" alt="машинка для стрижки волос киев Электрощипцы для выпрямления волос Atlanta АТН-832" title="машинка для стрижки волос киев Электрощипцы для выпрямления волос Atlanta АТН-832"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-832</h2></li>
							<li><a href="http://hometech.elitno.net/nabor-dlya-ukladki-valera-ionic-multistyle-professional-4390r.php"><img src="photos/9b4398884aa836c0acb140840fd7df60.jpeg" alt="курсы массажа в нижнем Набор для укладки Valera Ionic Multistyle Professional 640.01" title="курсы массажа в нижнем Набор для укладки Valera Ionic Multistyle Professional 640.01"></a><h2>Набор для укладки Valera Ionic Multistyle Professional 640.01</h2></li>
							<li><a href="http://hometech.elitno.net/nabor-dlya-irrigatorov-replacement-jet-tips-brje-750r.php"><img src="photos/e6980300706af5c5f92d2f981ed0d61f.jpeg" alt="белая кожа солярий Набор для ирригаторов  REPLACEMENT Jet Tips BRJ-4E" title="белая кожа солярий Набор для ирригаторов  REPLACEMENT Jet Tips BRJ-4E"></a><h2>Набор для ирригаторов  REPLACEMENT Jet Tips BRJ-4E</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>солярий киров Прибор для лифтинга в области глаз Gezatone m190</h1>
						<div class="tb"><p>Цена: от <span class="price">2000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_11668.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Многофункциональный <b>прибор для лифтинга Gezatone</b> осуществляет три самые популярные и эффективные косметологические процедуры для омоложения и оздоровления кожи лица в области глаз: «био» микротоки, микромассаж и ионофорез (воздействие слабыми гальваническими токами). Удачное сочетание этих функций позволяет в короткие сроки без боли, инъекций и каких-либо воздействий на мимику деликатно восстановить упругость кожи, повысить ее тонус, разгладить морщины, уменьшить мешки и темные круги под глазами.</p><p>93% пользователей данной лифтинговой системы отметили, что состояние кожи вокруг глаз заметно улучшилось уже после первого применения, а 97% говорят о значительном улучшении кожи вокруг глаз после проведения курса процедур. </p><p><b>Функции:</b></p><ul type=disc><li>«Био» микротоки; <li>Микромассаж; <li>Ионофорез.</li></ul><p><b>Комплектация: </b></p><ul type=disc><li>Набор из двух проводящих гелевых электродов - 5 наборов; <li>Блок управления - 2 шт. (с установленными батареями питания); <li>Батарея питания - 2 шт.; <li>Инструкция по эксплуатации - 1 шт.</li></ul><p><b>Производитель:</b> Gezanne.</p><p><b>Страна:</b> Франция.</p> солярий киров</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/0b1adc14355ab3a2302f6fed24c2179a.jpeg" alt="купить зеркало в спб Комплект насадок к ирригатору (5 шт) DONFEEL OR-900" title="купить зеркало в спб Комплект насадок к ирригатору (5 шт) DONFEEL OR-900"><div class="box"><a href="http://hometech.elitno.net/komplekt-nasadok-k-irrigatoru-sht-donfeel-or-450r.php"><h3 class="title">купить зеркало в спб Комплект насадок к ирригатору (5 шт) DONFEEL OR-900</h3><p>от <span class="price">450</span> руб.</p></a></div></li>
						<li><img src="photos/173fc00526bb1e09cfe42da1b29445db.jpeg" alt="наборы с зеркалом Раскладной массажный стол YA-01AL" title="наборы с зеркалом Раскладной массажный стол YA-01AL"><div class="box" page="raskladnoy-massazhnyy-stol-yaal-16900r"><span class="title">наборы с зеркалом Раскладной массажный стол YA-01AL</span><p>от <span class="price">16900</span> руб.</p></div></li>
						<li><img src="photos/a96ae3566c75021eb37743cc8caf6ff5.jpeg" alt="массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5" title="массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5"><div class="box" page="applikator-lyapko-valik-licevoy-720r"><span class="title">массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li><img src="photos/36576e883789273d56cbf397e3ca9ef9.jpeg" alt="сетка для электробритвы braun Массажер роликовый Чемпион" title="сетка для электробритвы braun Массажер роликовый Чемпион"><div class="box" page="massazher-rolikovyy-chempion-410r"><span class="title">сетка для электробритвы braun Массажер роликовый Чемпион</span><p>от <span class="price">410</span> руб.</p></div></li>
						<li class="large"><img src="photos/a8543d64cd722ca1a2055d5dba2188d4.jpeg" alt="дарсонваль ультратек отзывы Массажер Тетрабол" title="дарсонваль ультратек отзывы Массажер Тетрабол"><div class="box" page="massazher-tetrabol-550r"><span class="title">дарсонваль ультратек отзывы Массажер Тетрабол</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li class="large"><img src="photos/08f3884e56446c62ad73af91ace63c80.jpeg" alt="мебельное зеркало Гидромассажная ванночка для ног Beurer FB20" title="мебельное зеркало Гидромассажная ванночка для ног Beurer FB20"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-2350r"><span class="title">мебельное зеркало Гидромассажная ванночка для ног Beurer FB20</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li class="large"><img src="photos/b90cb28c59b4b83e0ed4774137db931c.jpeg" alt="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775" title="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775"><div class="box" page="pribor-kosmeticheskiy-mnogofunkcionalnyy-gezatone-galvanic-beauty-spa-m-2240r"><span class="title">ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/0cb3f14d82c590ca1830a52fdee51586.jpeg" alt="подглядывание в солярии BAMPITS 057A Заколка для придания объема" title="подглядывание в солярии BAMPITS 057A Заколка для придания объема"><div class="box" page="bampits-a-zakolka-dlya-pridaniya-obema-400r"><span class="title">подглядывание в солярии BAMPITS 057A Заколка для придания объема</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/28886b03e89546aaad247ad2b7068c95.jpeg" alt="дрель для маникюра и педикюра Фен Vitek VT-2264 Diamond" title="дрель для маникюра и педикюра Фен Vitek VT-2264 Diamond"><div class="box" page="fen-vitek-vt-diamond-1200r"><span class="title">дрель для маникюра и педикюра Фен Vitek VT-2264 Diamond</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/7f9fc77edfcd112c2dc89865bc81f054.jpeg" alt="массаж женщин смотреть бесплатно Фен Braun HD750" title="массаж женщин смотреть бесплатно Фен Braun HD750"><div class="box" page="fen-braun-hd-2480r"><span class="title">массаж женщин смотреть бесплатно Фен Braun HD750</span><p>от <span class="price">2480</span> руб.</p></div></li>
						<li><img src="photos/d217ea2832633ad5dc0567781a6cfc9a.jpeg" alt="делает массаж мужику Чистящая насадка Philips HX6013-02 для Sonicare Flex Care, 3шт HX6011-02" title="делает массаж мужику Чистящая насадка Philips HX6013-02 для Sonicare Flex Care, 3шт HX6011-02"><div class="box" page="chistyaschaya-nasadka-philips-hx-dlya-sonicare-flex-care-sht-hx-1100r"><span class="title">делает массаж мужику Чистящая насадка Philips HX6013-02 для Sonicare Flex Care, 3шт HX6011-02</span><p>от <span class="price">1100</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("pribor-dlya-liftinga-v-oblasti-glaz-gezatone-m-2000r.php", 0, -4); if (file_exists("comments/pribor-dlya-liftinga-v-oblasti-glaz-gezatone-m-2000r.php")) require_once "comments/pribor-dlya-liftinga-v-oblasti-glaz-gezatone-m-2000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="pribor-dlya-liftinga-v-oblasti-glaz-gezatone-m-2000r.php" method="post" onsubmit="return checkForm(this)">
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