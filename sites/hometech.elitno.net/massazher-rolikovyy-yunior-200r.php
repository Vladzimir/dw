<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-rolikovyy-yunior-200r.php","солярий интернет магазин");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-rolikovyy-yunior-200r.php", $nick, $comment);
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
		<title>солярий интернет магазин Массажер роликовый Юниор  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="солярий интернет магазин, вакансии маникюр педикюр, техника медового массажа, карат де 212 дарсонваль насадки, зеркало напротив входной двери, зеркало психология, массаж головы ребенка, что делать в солярии, американское выпрямление волос, маникюр педикюр москва, ионизатор воды купить, самостоятельный массаж лица, эпиляторы характеристика, вакуумный массаж живота,  массаж в пятигорске">
		<meta name="description" content="солярий интернет магазин Массажер Юниор относится к роликовым, он позволяет расслабиться при перегрузках,...">
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
						<a class="photo" href="photos/204ba8d6c75baeef17b6e79f51f1b650.jpeg" title="солярий интернет магазин Массажер роликовый Юниор"><img src="photos/204ba8d6c75baeef17b6e79f51f1b650.jpeg" alt="солярий интернет магазин Массажер роликовый Юниор" title="солярий интернет магазин Массажер роликовый Юниор -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-bmi-2600r.php"><img src="photos/09cdbe94dd4282881ebf10408413f6e1.jpeg" alt="вакансии маникюр педикюр Весы электронные напольные Beurer GS49 BMI" title="вакансии маникюр педикюр Весы электронные напольные Beurer GS49 BMI"></a><h2>Весы электронные напольные Beurer GS49 BMI</h2></li>
							<li><a href="http://hometech.elitno.net/gel-dlya-domashnego-uhoda-ftorida-olova-home-care-540r.php"><img src="photos/ca3cac97732e962cf09778cd2b8d779d.jpeg" alt="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care." title="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care."></a><h2>Гель для домашнего ухода. 0,4 % фторида олова. Home care.</h2></li>
							<li><a href="http://hometech.elitno.net/massazhnoe-kreslo-us-medica-indigo-95000r.php"><img src="photos/9af88bf8f0a341b5c9eda8033fc64175.jpeg" alt="карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo" title="карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo"></a><h2>Массажное кресло US Medica Indigo</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>солярий интернет магазин Массажер роликовый Юниор</h1>
						<div class="tb"><p>Цена: от <span class="price">200</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1153.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><strong>Массажер Юниор</strong> относится к роликовым, он позволяет расслабиться при перегрузках, залечивает травмы, препятствует образованию морщин, повышает эффект воздействия косметических средств. «Волшебные пальчики» массажера помогут постепенно избавиться от целлюлита, расправить кожу. Механическое воздействие прибора стимулирует кровообращение. Ролики Юниора легко поворачиваются в разные направления, следуя анатомическому строению человека. Массажер избавит от боли, поможет при травмах, ушибах и вернет бодрость и оптимизм. Спектр применения роликового массажера достаточно широк: это и руки, и лицо, и ноги, и грудь, словом любой участок тела.</p><p><b>Производитель:</b> ООО «Дельта-Терм» (Россия, Москва)</p> солярий интернет магазин</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/0028121fe8b92eb1330cfdeab7a690b7.jpeg" alt="зеркало напротив входной двери Аппликатор Ляпко Квадро 5,8" title="зеркало напротив входной двери Аппликатор Ляпко Квадро 5,8"><div class="box" page="applikator-lyapko-kvadro-1460r"><span class="title">зеркало напротив входной двери Аппликатор Ляпко Квадро 5,8</span><p>от <span class="price">1460</span> руб.</p></div></li>
						<li><img src="photos/4aca7dd74af44ac0b4f6a79b9df1a999.jpeg" alt="зеркало психология Многофункциональный прибор Пояс Здоровья Gezatone m142 1301057" title="зеркало психология Многофункциональный прибор Пояс Здоровья Gezatone m142 1301057"><div class="box" page="mnogofunkcionalnyy-pribor-poyas-zdorovya-gezatone-m-2300r"><span class="title">зеркало психология Многофункциональный прибор Пояс Здоровья Gezatone m142 1301057</span><p>от <span class="price">2300</span> руб.</p></div></li>
						<li><img src="photos/bd43b02490b7b213cfdadf5f9ffcb1e0.jpeg" alt="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024" title="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024"><div class="box" page="vakuumnyy-massazher-gezatone-vacu-2990r"><span class="title">массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li><img src="photos/12b08f535454eb45912e69bb12756cf3.jpeg" alt="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070" title="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070"><div class="box" page="anticellyulitnyy-vibromassazher-gezatone-skulptor-tela-amg-2000r"><span class="title">что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li class="large"><img src="photos/bfb97ea41a55921176d4a3d6c4a2b006.jpeg" alt="американское выпрямление волос Массажная подушка Sanitas SMG141" title="американское выпрямление волос Массажная подушка Sanitas SMG141"><div class="box" page="massazhnaya-podushka-sanitas-smg-3300r"><span class="title">американское выпрямление волос Массажная подушка Sanitas SMG141</span><p>от <span class="price">3300</span> руб.</p></div></li>
						<li class="large"><img src="photos/bcabcf5532aacefb2fe352cc581c70f2.jpeg" alt="маникюр педикюр москва Подушка массажная BODYKRAFT С-31G" title="маникюр педикюр москва Подушка массажная BODYKRAFT С-31G"><div class="box" page="podushka-massazhnaya-bodykraft-sg-3290r"><span class="title">маникюр педикюр москва Подушка массажная BODYKRAFT С-31G</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li class="large"><img src="photos/b90cb28c59b4b83e0ed4774137db931c.jpeg" alt="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775" title="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775"><div class="box" page="pribor-kosmeticheskiy-mnogofunkcionalnyy-gezatone-galvanic-beauty-spa-m-2240r"><span class="title">ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/ae9da361619c92f9a8cf3fb8e35d98ca.jpeg" alt="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг" title="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг"><div class="box" page="corioliss-brush-collection-ionnyy-termobrashing-630r"><span class="title">самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/86ec0141c0d9addb97d28879c40d13c8.jpeg" alt="эпиляторы характеристика Corioliss «Микрофон» Щетка (лопатка)" title="эпиляторы характеристика Corioliss «Микрофон» Щетка (лопатка)"><div class="box" page="corioliss-«mikrofon»-schetka-lopatka-810r"><span class="title">эпиляторы характеристика Corioliss «Микрофон» Щетка (лопатка)</span><p>от <span class="price">810</span> руб.</p></div></li>
						<li><img src="photos/d9208946e2e1dbc0a6fe02e91ec3f7ff.jpeg" alt="вакуумный массаж живота Клипсы Corioliss Professional Hair Clips 8 шт" title="вакуумный массаж живота Клипсы Corioliss Professional Hair Clips 8 шт"><div class="box" page="klipsy-corioliss-professional-hair-clips-sht-750r"><span class="title">вакуумный массаж живота Клипсы Corioliss Professional Hair Clips 8 шт</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li><img src="photos/e146d9c559ab30a96ca55f774b626a59.jpeg" alt="держатели для зеркал Насадка для зубной щетки BRAUN Oral-B  EB17-2(EB20-2)" title="держатели для зеркал Насадка для зубной щетки BRAUN Oral-B  EB17-2(EB20-2)"><div class="box" page="nasadka-dlya-zubnoy-schetki-braun-oralb-ebeb-385r"><span class="title">держатели для зеркал Насадка для зубной щетки BRAUN Oral-B  EB17-2(EB20-2)</span><p>от <span class="price">385</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-rolikovyy-yunior-200r.php", 0, -4); if (file_exists("comments/massazher-rolikovyy-yunior-200r.php")) require_once "comments/massazher-rolikovyy-yunior-200r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-rolikovyy-yunior-200r.php" method="post" onsubmit="return checkForm(this)">
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