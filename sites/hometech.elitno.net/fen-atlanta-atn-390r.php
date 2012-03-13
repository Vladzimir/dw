<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-atlanta-atn-390r.php","детские стрижки машинкой");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-atlanta-atn-390r.php", $nick, $comment);
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
		<title>детские стрижки машинкой Фен Atlanta АТН-884  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="детские стрижки машинкой, зеркало кто ты сегодня, проверить зеркала, васичкин массаж, лучшие электробритвы мужские, картридж для электробритвы, фен щетка bosch pha, эпилятор для лица, массаж саратов, что делать в солярии, весы порционные электронные, триммер браун, массаж приморская, массаж тазобедренный,  спиральная завивка волос">
		<meta name="description" content="детские стрижки машинкой Фен Atlanta АТН-884 – доступный прибор с эргономичным дизайном черно-голубого цв...">
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
						<a class="photo" href="photos/5d0c7a567b016f4e3ff09ccc2536795c.jpeg" title="детские стрижки машинкой Фен Atlanta АТН-884"><img src="photos/5d0c7a567b016f4e3ff09ccc2536795c.jpeg" alt="детские стрижки машинкой Фен Atlanta АТН-884" title="детские стрижки машинкой Фен Atlanta АТН-884 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/zhiroanalizator-opredelenie-obschego-soderzhaniya-zhira-omron-bf-3200r.php"><img src="photos/f23e4b3a148ea379394985b1c52b15da.jpeg" alt="зеркало кто ты сегодня Жироанализатор (Определение общего содержания жира) OMRON BF-306" title="зеркало кто ты сегодня Жироанализатор (Определение общего содержания жира) OMRON BF-306"></a><h2>Жироанализатор (Определение общего содержания жира) OMRON BF-306</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-3150r.php"><img src="photos/1f5b8110c2b740c08d9424168a144be9.jpeg" alt="проверить зеркала Анализатор жира (состава тела) Tanita BC-541" title="проверить зеркала Анализатор жира (состава тела) Tanita BC-541"></a><h2>Анализатор жира (состава тела) Tanita BC-541</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-nastolnoe-rosenberg-s-890r-2.php"><img src="photos/74f70e120db119bda19c14b1cbcdb902.jpeg" alt="васичкин массаж Зеркало настольное Rosenberg S-2085" title="васичкин массаж Зеркало настольное Rosenberg S-2085"></a><h2>Зеркало настольное Rosenberg S-2085</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>детские стрижки машинкой Фен Atlanta АТН-884</h1>
						<div class="tb"><p>Цена: от <span class="price">390</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19885.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фен Atlanta АТН-884 – доступный прибор с эргономичным дизайном черно-голубого цвета для сушки волос мощностью 1200 Вт со складывающейся ручкой. Имеет два уровня интенсивности сушки и шнур с защитой от выкручивания. Не скользит в руках, благодаря специальному покрытию. Абсолютно безопасен, т. к. защищен от перегрева. Получил сертификат Госстандара РФ и соответствует европейским нормам безопасности. Снабжен петлей для подвешивания.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Складывающаяся ручка; <li>Защита от перегрева; <li>Два уровня интенсивности сушки; <li>Специальное противоскользящие покрытие; <li>Соответствует американским и европейским нормам безопасности; <li>Мощность 1200W; <li>230V, 50Hz <li>15.5 x 7 x 21 см </li></ul><p><strong>Производитель: США</strong></p> детские стрижки машинкой</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/dded430ece486ae43997cb46bb2e8368.jpeg" alt="лучшие электробритвы мужские Пародонтологические насадки для ирригатора Waterpik WP70E (2 шт.)" title="лучшие электробритвы мужские Пародонтологические насадки для ирригатора Waterpik WP70E (2 шт.)"><div class="box" page="parodontologicheskie-nasadki-dlya-irrigatora-waterpik-wpe-sht-350r"><span class="title">лучшие электробритвы мужские Пародонтологические насадки для ирригатора Waterpik WP70E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/2c25dbb509feb3825290d2d56dd8e055.jpeg" alt="картридж для электробритвы Стационарный массажный стол US Medica Olimp" title="картридж для электробритвы Стационарный массажный стол US Medica Olimp"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-olimp-42000r"><span class="title">картридж для электробритвы Стационарный массажный стол US Medica Olimp</span><p>от <span class="price">42000</span> руб.</p></div></li>
						<li><img src="photos/5fa952e080e3e36a9d80c7732a2a4665.png" alt="фен щетка bosch pha Массажное кресло Anatomico Amerigo" title="фен щетка bosch pha Массажное кресло Anatomico Amerigo"><div class="box" page="massazhnoe-kreslo-anatomico-amerigo-114000r"><span class="title">фен щетка bosch pha Массажное кресло Anatomico Amerigo</span><p>от <span class="price">114000</span> руб.</p></div></li>
						<li><img src="photos/ab88833e4637905c1c689b34620dfa36.gif" alt="эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко" title="эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко"><div class="box" page="applikatorpoyas-universalnyy-shag-igl-mm-segmenta-lyapko-1670r"><span class="title">эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко</span><p>от <span class="price">1670</span> руб.</p></div></li>
						<li class="large"><img src="photos/04903c082d5df734adcc169f980fc2f0.jpeg" alt="массаж саратов Прибор для лечения болей в спине Backlife" title="массаж саратов Прибор для лечения болей в спине Backlife"><div class="box" page="pribor-dlya-lecheniya-boley-v-spine-backlife-9000r"><span class="title">массаж саратов Прибор для лечения болей в спине Backlife</span><p>от <span class="price">9000</span> руб.</p></div></li>
						<li class="large"><img src="photos/12b08f535454eb45912e69bb12756cf3.jpeg" alt="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070" title="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070"><div class="box" page="anticellyulitnyy-vibromassazher-gezatone-skulptor-tela-amg-2000r"><span class="title">что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li class="large"><img src="photos/bf89764b2aa6c696f3c1950d65523b3a.jpeg" alt="весы порционные электронные Массажер Beurer MG220 для тела" title="весы порционные электронные Массажер Beurer MG220 для тела"><div class="box" page="massazher-beurer-mg-dlya-tela-8200r"><span class="title">весы порционные электронные Массажер Beurer MG220 для тела</span><p>от <span class="price">8200</span> руб.</p></div></li>
						<li><img src="photos/0915015c954509bbff766b4be4039b0b.jpeg" alt="триммер браун Разогреватель для воска Gezatone с базой" title="триммер браун Разогреватель для воска Gezatone с базой"><div class="box" page="razogrevatel-dlya-voska-gezatone-s-bazoy-1490r"><span class="title">триммер браун Разогреватель для воска Gezatone с базой</span><p>от <span class="price">1490</span> руб.</p></div></li>
						<li><img src="photos/9038904b3492c32517b7c821b0f63b8a.jpeg" alt="массаж приморская Vitek VT–1373 Электробритва" title="массаж приморская Vitek VT–1373 Электробритва"><div class="box" page="vitek-vt–-elektrobritva-960r"><span class="title">массаж приморская Vitek VT–1373 Электробритва</span><p>от <span class="price">960</span> руб.</p></div></li>
						<li><img src="photos/85edc4029fe9769023968ed6bd6bbf77.jpeg" alt="массаж тазобедренный Электробритва Vitesse VS-360" title="массаж тазобедренный Электробритва Vitesse VS-360"><div class="box" page="elektrobritva-vitesse-vs-1010r"><span class="title">массаж тазобедренный Электробритва Vitesse VS-360</span><p>от <span class="price">1010</span> руб.</p></div></li>
						<li><img src="photos/88f089fba3994b2424571c824d4df2f4.jpeg" alt="массаж медведково Электробритва Vitesse VS-365" title="массаж медведково Электробритва Vitesse VS-365"><div class="box" page="elektrobritva-vitesse-vs-910r"><span class="title">массаж медведково Электробритва Vitesse VS-365</span><p>от <span class="price">910</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-atlanta-atn-390r.php", 0, -4); if (file_exists("comments/fen-atlanta-atn-390r.php")) require_once "comments/fen-atlanta-atn-390r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-atlanta-atn-390r.php" method="post" onsubmit="return checkForm(this)">
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