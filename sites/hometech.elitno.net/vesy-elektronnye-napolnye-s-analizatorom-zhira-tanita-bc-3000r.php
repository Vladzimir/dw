<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-3000r.php","последствия солярия");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-3000r.php", $nick, $comment);
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
		<title>последствия солярия Весы электронные напольные с анализатором жира Tanita BC-570  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="последствия солярия, омолаживающий массаж лица, замена бокового зеркала, ирригатор полости рта braun, солярий сыктывкар, зеркала на машину, разбилось зеркало примета, подогрев зеркал калина, машинки для стрижки волос харьков, обзор электробритв, общий массаж тела, завивка на длинные волосы фото, массаж для любимого, массаж скрытая смотреть,  значение массажа">
		<meta name="description" content="последствия солярия Здоровый образ жизни часто соотносится со здоровым питанием, и покупка весов с а...">
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
						<a class="photo" href="photos/fecc03dbb56fe547a8ffb39898e3559d.jpeg" title="последствия солярия Весы электронные напольные с анализатором жира Tanita BC-570"><img src="photos/fecc03dbb56fe547a8ffb39898e3559d.jpeg" alt="последствия солярия Весы электронные напольные с анализатором жира Tanita BC-570" title="последствия солярия Весы электронные напольные с анализатором жира Tanita BC-570 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-2900r.php"><img src="photos/bdbd5cd65995455836e705557ec2b901.jpeg" alt="омолаживающий массаж лица Анализатор жира (состава тела) Tanita BC-530" title="омолаживающий массаж лица Анализатор жира (состава тела) Tanita BC-530"></a><h2>Анализатор жира (состава тела) Tanita BC-530</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-tanita-um-sv-2000r.php"><img src="photos/5fe7b8cbed1da4a369915cce43684931.jpeg" alt="замена бокового зеркала Анализатор жира Tanita UM-071 (SV)" title="замена бокового зеркала Анализатор жира Tanita UM-071 (SV)"></a><h2>Анализатор жира Tanita UM-071 (SV)</h2></li>
							<li><a href="http://hometech.elitno.net/komplekt-parodontalnyh-nasadok-k-irrigatoru-sht-donfeel-orm-270r.php"><img src="photos/141cd8baea6e8db6239edb8d6c9e1bdf.jpeg" alt="ирригатор полости рта braun Комплект пародонтальных насадок к ирригатору (2 шт) DONFEEL OR-820M" title="ирригатор полости рта braun Комплект пародонтальных насадок к ирригатору (2 шт) DONFEEL OR-820M"></a><h2>Комплект пародонтальных насадок к ирригатору (2 шт) DONFEEL OR-820M</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>последствия солярия Весы электронные напольные с анализатором жира Tanita BC-570</h1>
						<div class="tb"><p>Цена: от <span class="price">3000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_722.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Здоровый образ жизни часто соотносится со здоровым питанием, и покупка весов с анализатором жира станет в этом случае полезным приобретением. <strong>Модель весов TANITA BC-570</strong> – надежный помощник для тех, кто следит за своей фигурой, придерживается диет и особого режима физических нагрузок и питания. Весы смогут не только определить массу вашего тела, но и проанализировать процентное содержание жировых тканей, воды, мышечной и костной массы. Разные режимы для детей, взрослых, для атлетов помогут устройству правильно оценить общее состояние организма. </p><p>Привлекательный дизайн в виде диска, широкий дисплей с большими цифрами, функциональность – все говорит в пользу выбора <strong>весов TANITA BC-570.</strong></p><p><strong>Особенности: </strong></p><ul type=disc><li>Материал платформы: металл + закаленное стекло <li>Режим атлета (определение состава тела для людей с хорошей физической подготовкой) <li>Измерение мышечной массы <li>Расчет костной массы <li>Индикатор содержания жира в теле взрослого человека (18-99 лет) <li>Индикатор содержания жира в теле ребенка (5-17 лет) <li>4 ячейки памяти (сохранение в памяти весов персональных данных - пол, рост, возраст - для четырех человек)</li></ul><p><b>Технические характеристики:</b></p><ul type=disc><li>Точность измерения содержания жира: ±0,1 % <li>Точность измерения содержания воды в организме: ±0,1 % <li>Предел взвешивания: 150 кг <li>Цена деления: 100 г <li>Питание: батарейки CR2032 2 шт. <li>Габаритные размеры: 320 х 320 х 28 мм <li>Вес: 2,7 кг (с упаковкой), 1,8 кг (без упаковки)</li></ul><p><strong>Производитель:</strong> Tanita (Япония)</p><p><strong>Гарантия: </strong>3 года в авторизованном сервис-центре</p> последствия солярия</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/94bfe3dc926e41a7c45fe26ef5a9054d.jpeg" alt="солярий сыктывкар Набор для маникюра и педикюра Laica SA5440 с 11 насадками" title="солярий сыктывкар Набор для маникюра и педикюра Laica SA5440 с 11 насадками"><div class="box" page="nabor-dlya-manikyura-i-pedikyura-laica-sa-s-nasadkami-2810r"><span class="title">солярий сыктывкар Набор для маникюра и педикюра Laica SA5440 с 11 насадками</span><p>от <span class="price">2810</span> руб.</p></div></li>
						<li><img src="photos/f4f525ef8dc957711c174f314a48fb88.jpeg" alt="зеркала на машину Офисное массажное кресло US Medica Chicago" title="зеркала на машину Офисное массажное кресло US Medica Chicago"><div class="box" page="ofisnoe-massazhnoe-kreslo-us-medica-chicago-25000r"><span class="title">зеркала на машину Офисное массажное кресло US Medica Chicago</span><p>от <span class="price">25000</span> руб.</p></div></li>
						<li><img src="photos/2a25a4e0bb98f527671731397fbea38b.jpeg" alt="разбилось зеркало примета Gezatone 1301066 Антицеллюлитный вибромассажер BodyShaper AMG120" title="разбилось зеркало примета Gezatone 1301066 Антицеллюлитный вибромассажер BodyShaper AMG120"><div class="box" page="gezatone-anticellyulitnyy-vibromassazher-bodyshaper-amg-2890r"><span class="title">разбилось зеркало примета Gezatone 1301066 Антицеллюлитный вибромассажер BodyShaper AMG120</span><p>от <span class="price">2890</span> руб.</p></div></li>
						<li><img src="photos/8524c9a81149ced5afefd960c059f93e.jpeg" alt="подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T" title="подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T"><div class="box" page="vibromassazher-clear-fit-top-beauty-cf-t-10490r"><span class="title">подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T</span><p>от <span class="price">10490</span> руб.</p></div></li>
						<li class="large"><img src="photos/3c0e76185696bd8113f9ee2ba87bf4b7.jpeg" alt="машинки для стрижки волос харьков Коврик массажный с камнями (50х140 см)" title="машинки для стрижки волос харьков Коврик массажный с камнями (50х140 см)"><div class="box" page="kovrik-massazhnyy-s-kamnyami-h-sm-900r"><span class="title">машинки для стрижки волос харьков Коврик массажный с камнями (50х140 см)</span><p>от <span class="price">900</span> руб.</p></div></li>
						<li class="large"><img src="photos/48bc1b3dd7854808b967b83d39bddc10.jpeg" alt="обзор электробритв Солярий для лица Efbe-Schott 824" title="обзор электробритв Солярий для лица Efbe-Schott 824"><div class="box" page="solyariy-dlya-lica-efbeschott-4200r"><span class="title">обзор электробритв Солярий для лица Efbe-Schott 824</span><p>от <span class="price">4200</span> руб.</p></div></li>
						<li class="large"><img src="photos/2c7a77c230be7b8e97a075b819c83be5.jpeg" alt="общий массаж тела Солярий для лица Efbe-Schott 836" title="общий массаж тела Солярий для лица Efbe-Schott 836"><div class="box" page="solyariy-dlya-lica-efbeschott-5000r"><span class="title">общий массаж тела Солярий для лица Efbe-Schott 836</span><p>от <span class="price">5000</span> руб.</p></div></li>
						<li><img src="photos/cae249c48fcfeacbbf7bd176d817de70.jpeg" alt="завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл" title="завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-medovyy-v-kartridzhe-ml-150r"><span class="title">завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/c075b8e44047484b111fe1dd6dacdc93.jpeg" alt="массаж для любимого Машинка для стрижки Vitesse VS-384" title="массаж для любимого Машинка для стрижки Vitesse VS-384"><div class="box" page="mashinka-dlya-strizhki-vitesse-vs-700r-2"><span class="title">массаж для любимого Машинка для стрижки Vitesse VS-384</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/ce51f4efb2afc504cf5b3a55b1bc269e.jpeg" alt="массаж скрытая смотреть Триммер BaByliss E830XE" title="массаж скрытая смотреть Триммер BaByliss E830XE"><div class="box" page="trimmer-babyliss-exe-1790r"><span class="title">массаж скрытая смотреть Триммер BaByliss E830XE</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/7f1474a3d7588365d8b461261c49c7f9.jpeg" alt="машинка для стрижки волос москва Фен Binatone HD-1802 Purple Nacre" title="машинка для стрижки волос москва Фен Binatone HD-1802 Purple Nacre"><div class="box" page="fen-binatone-hd-purple-nacre-1100r"><span class="title">машинка для стрижки волос москва Фен Binatone HD-1802 Purple Nacre</span><p>от <span class="price">1100</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-3000r.php", 0, -4); if (file_exists("comments/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-3000r.php")) require_once "comments/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-3000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-3000r.php" method="post" onsubmit="return checkForm(this)">
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