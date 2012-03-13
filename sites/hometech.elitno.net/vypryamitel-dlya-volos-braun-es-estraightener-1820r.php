<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vypryamitel-dlya-volos-braun-es-estraightener-1820r.php","завивка на короткие волосы");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vypryamitel-dlya-volos-braun-es-estraightener-1820r.php", $nick, $comment);
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
		<title>завивка на короткие волосы Выпрямитель для волос Braun ES1 E-Straightener  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="завивка на короткие волосы, к чему бьется зеркало, модели дарсонваль, ремонт эпиляторов, ирригатор waterpik отзывы, чувственный массаж, дренажный массаж, зеркало заднего вида toyota, электронное зеркало, машинки для стрижки эльдорадо, авто зеркало купить, двигатель фена, эпиляторы в минске, дарсонваль купить в спб,  кривые зеркала текст">
		<meta name="description" content="завивка на короткие волосы Электрический выпрямитель для волос обеспечивит салонный результат даже в домашн...">
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
						<a class="photo" href="photos/f3ed2f2a457bc3c47d247e9bbfe87664.jpeg" title="завивка на короткие волосы Выпрямитель для волос Braun ES1 E-Straightener"><img src="photos/f3ed2f2a457bc3c47d247e9bbfe87664.jpeg" alt="завивка на короткие волосы Выпрямитель для волос Braun ES1 E-Straightener" title="завивка на короткие волосы Выпрямитель для волос Braun ES1 E-Straightener -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-2450r.php"><img src="photos/fc6f1a57986f092efd97a2c2ca581b49.jpeg" alt="к чему бьется зеркало Весы бытовые Tanita HD-366" title="к чему бьется зеркало Весы бытовые Tanita HD-366"></a><h2>Весы бытовые Tanita HD-366</h2></li>
							<li><a href="http://hometech.elitno.net/gezanne-gezatone-esg-vesy-napolnye-s-opredeleniem-strukturnogo-sostava-tela-1400r.php"><img src="photos/31cc855160f557432254f6c738cb3ac2.jpeg" alt="модели дарсонваль Gezanne Gezatone ESG2805 Весы напольные с определением структурного состава тела" title="модели дарсонваль Gezanne Gezatone ESG2805 Весы напольные с определением структурного состава тела"></a><h2>Gezanne Gezatone ESG2805 Весы напольные с определением структурного состава тела</h2></li>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-s-10000r.php"><img src="photos/333858fb93c0b690fc806cdc87692d49.jpeg" alt="ремонт эпиляторов Стайлер Corioliss С2" title="ремонт эпиляторов Стайлер Corioliss С2"></a><h2>Стайлер Corioliss С2</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>завивка на короткие волосы Выпрямитель для волос Braun ES1 E-Straightener</h1>
						<div class="tb"><p>Цена: от <span class="price">1820</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_11981.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический выпрямитель для волос обеспечивит салонный результат даже в домашних условиях. Straightliner от немецкого производителя Braun - это удачная комбинация выпрямляющих керамических пластин высокого качества. Диапазон температур нагрева составляет 120-185єC, количество режимов – 13. </p><p>Уже через 60 секунд после включения прибор готов к использованию. Особое керамическое покрытие пластинок обеспечивает равномерное воздействие на волосы. Длина сетевого шнура 2м.</p><p><b>Характеристики: </b></p><ul type=disc><li>Тип: щипцы <li>Мощность: 140Вт <li>Количество режимов: 13 <li>Минимальная температура нагрева: 120С <li>Максимальная температура нагрева: 185С <li>Индикация включения <li>В комплекте насадка для выпрямления <li>Покрытие насадок: керамическое <li>Длина сетевого шнура: 2 м</li></ul><p><b>Производитель:</b> Braun.</p><p><b>Страна:</b> Германия.</p> завивка на короткие волосы</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/136e687ab7caf7ea2792cd39cf43a22a.jpeg" alt="ирригатор waterpik отзывы Электрощипцы для выпрямления волос Atlanta АТН-839" title="ирригатор waterpik отзывы Электрощипцы для выпрямления волос Atlanta АТН-839"><div class="box"><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-400r.php"><h3 class="title">ирригатор waterpik отзывы Электрощипцы для выпрямления волос Atlanta АТН-839</h3><p>от <span class="price">400</span> руб.</p></a></div></li>
						<li><img src="photos/c225afb28f1b6e082ea5b6d0dfd8a7ac.jpeg" alt="чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)" title="чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)"><div class="box" page="beurer-mp-manikyurnopedikyurnyy-nabor-nasadok-2900r"><span class="title">чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li><img src="photos/8e0d56e9d9bc332ca7666fce73e0922e.jpeg" alt="дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line" title="дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-panda-lineyka-sumo-line-35000r"><span class="title">дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line</span><p>от <span class="price">35000</span> руб.</p></div></li>
						<li><img src="photos/50423b664193697282d6d35597df2483.jpeg" alt="зеркало заднего вида toyota Электроды к EM40 - EM80 - 8 шт." title="зеркало заднего вида toyota Электроды к EM40 - EM80 - 8 шт."><div class="box" page="elektrody-k-em-em-sht-750r-2"><span class="title">зеркало заднего вида toyota Электроды к EM40 - EM80 - 8 шт.</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li class="large"><img src="photos/e3a813514433641f393edfdb0982bd86.jpeg" alt="электронное зеркало Массажер для тела Beurer MG80" title="электронное зеркало Массажер для тела Beurer MG80"><div class="box" page="massazher-dlya-tela-beurer-mg-2550r"><span class="title">электронное зеркало Массажер для тела Beurer MG80</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li class="large"><img src="photos/54c062a60377c846855d76f8df46eba9.jpeg" alt="машинки для стрижки эльдорадо Массажер Beurer FM38 для ног" title="машинки для стрижки эльдорадо Массажер Beurer FM38 для ног"><div class="box" page="massazher-beurer-fm-dlya-nog-2300r"><span class="title">машинки для стрижки эльдорадо Массажер Beurer FM38 для ног</span><p>от <span class="price">2300</span> руб.</p></div></li>
						<li class="large"><img src="photos/a988f6b179dab67cec02b51dcf3c6687.jpeg" alt="авто зеркало купить Массажная накидка ZENET TL-2007-В" title="авто зеркало купить Массажная накидка ZENET TL-2007-В"><div class="box" page="massazhnaya-nakidka-zenet-tlv-2950r"><span class="title">авто зеркало купить Массажная накидка ZENET TL-2007-В</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li><img src="photos/36d6f16e06cc1d8986837d6c2ad71500.jpeg" alt="двигатель фена Машинка для стрижки Atlanta АТН-844" title="двигатель фена Машинка для стрижки Atlanta АТН-844"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-500r"><span class="title">двигатель фена Машинка для стрижки Atlanta АТН-844</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/c63254ec5e049efd054a111db6456ead.jpeg" alt="эпиляторы в минске Воск для депиляции Rica, розовый с диоксидом титана в картридже 100 мл" title="эпиляторы в минске Воск для депиляции Rica, розовый с диоксидом титана в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-rozovyy-s-dioksidom-titana-v-kartridzhe-ml-150r"><span class="title">эпиляторы в минске Воск для депиляции Rica, розовый с диоксидом титана в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/90fa21a88e7efe788816cbd3a61d1a96.jpeg" alt="дарсонваль купить в спб Фен Vitesse VS-926" title="дарсонваль купить в спб Фен Vitesse VS-926"><div class="box" page="fen-vitesse-vs-1010r"><span class="title">дарсонваль купить в спб Фен Vitesse VS-926</span><p>от <span class="price">1010</span> руб.</p></div></li>
						<li><img src="photos/9f7c56363d95b3f8ad1c9e5826358cb8.jpeg" alt="завивка волос утюжком Электрическая зубная щетка HealthyWhite НХ 6731-02" title="завивка волос утюжком Электрическая зубная щетка HealthyWhite НХ 6731-02"><div class="box" page="elektricheskaya-zubnaya-schetka-healthywhite-nh-3400r"><span class="title">завивка волос утюжком Электрическая зубная щетка HealthyWhite НХ 6731-02</span><p>от <span class="price">3400</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vypryamitel-dlya-volos-braun-es-estraightener-1820r.php", 0, -4); if (file_exists("comments/vypryamitel-dlya-volos-braun-es-estraightener-1820r.php")) require_once "comments/vypryamitel-dlya-volos-braun-es-estraightener-1820r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vypryamitel-dlya-volos-braun-es-estraightener-1820r.php" method="post" onsubmit="return checkForm(this)">
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