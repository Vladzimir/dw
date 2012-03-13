<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r.php","эпилятор филипс отзывы");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r.php", $nick, $comment);
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
		<title>эпилятор филипс отзывы Электрощипцы для выпрямления волос Atlanta АТН-830  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="эпилятор филипс отзывы, омолаживающий массаж лица, зеркало mitsubishi, ирина красикова массаж, лифтинг лица в домашних условиях, зеркала содержание, массаж веником, ирригатор полости рта braun, массаж в россии, массаж стопы ребенка, подогрев зеркал калина, массаж обертывание, зеркала с подогревом 2110, куплю триммер в москве,  электронные весы bosch">
		<meta name="description" content="эпилятор филипс отзывы Электрощипцы для выпрямления волос Atlanta АТН-830 черного цвета имеющие насадки...">
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
						<a class="photo" href="photos/adc8c79d7ed866b242f75ff41255c3ae.jpeg" title="эпилятор филипс отзывы Электрощипцы для выпрямления волос Atlanta АТН-830"><img src="photos/adc8c79d7ed866b242f75ff41255c3ae.jpeg" alt="эпилятор филипс отзывы Электрощипцы для выпрямления волос Atlanta АТН-830" title="эпилятор филипс отзывы Электрощипцы для выпрямления волос Atlanta АТН-830 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-2900r.php"><img src="photos/bdbd5cd65995455836e705557ec2b901.jpeg" alt="омолаживающий массаж лица Анализатор жира (состава тела) Tanita BC-530" title="омолаживающий массаж лица Анализатор жира (состава тела) Tanita BC-530"></a><h2>Анализатор жира (состава тела) Tanita BC-530</h2></li>
							<li><a href="http://hometech.elitno.net/nasadka-desennaya-dlya-karat-de-darsonval-300r.php"><img src="photos/69b639beb2f9ef078072eb0ad79ca804.jpeg" alt="зеркало mitsubishi Насадка десенная для КАРАТ ДЕ-212 Дарсонваль" title="зеркало mitsubishi Насадка десенная для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Насадка десенная для КАРАТ ДЕ-212 Дарсонваль</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-zavivki-babyliss-ce-ipro-mm-1750r.php"><img src="photos/a47834e167f88700a1ff6ede56cda638.jpeg" alt="ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм" title="ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм"></a><h2>Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>эпилятор филипс отзывы Электрощипцы для выпрямления волос Atlanta АТН-830</h1>
						<div class="tb"><p>Цена: от <span class="price">350</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19769.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрощипцы для выпрямления волос Atlanta АТН-830 черного цвета имеющие насадки с керамическим покрытием. Предусмотрено два уровня мощности и керамический нагревательный элемент с быстрым стартом. Щипцы имеют фиксирующую конструкцию, вращающийся шнур и индикатор работы. Размер насадок 25 на 90 мм. Максимальная температура 200°С. Мощность 30 Вт.</p><p>Характеристики:</p><ul type=disc><li>Фиксирующаяся конструкция  <li>Вращающийся шнур  <li>Индикатор работы  <li>Размер насадок: 25 х 90 мм  <li>Максимальная температура 200°С  <li>230 В, 50 Гц  <li>Мощность 30 Вт  <li>28 x 3.2 x 4 см  </li></ul><p> </p><p><strong>Производитель: США</strong></p> эпилятор филипс отзывы</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/2b3d868aa072c70dee6668606713c73a.jpeg" alt="лифтинг лица в домашних условиях Щипцы для завивки Valera Digicurl 641.25" title="лифтинг лица в домашних условиях Щипцы для завивки Valera Digicurl 641.25"><div class="box"><a href="http://hometech.elitno.net/schipcy-dlya-zavivki-valera-digicurl-2080r.php"><h3 class="title">лифтинг лица в домашних условиях Щипцы для завивки Valera Digicurl 641.25</h3><p>от <span class="price">2080</span> руб.</p></a></div></li>
						<li><img src="photos/752941af4eaf49d0a8ab980390b78c28.jpeg" alt="зеркала содержание Зеркало  Beurer BS 69 косметическое" title="зеркала содержание Зеркало  Beurer BS 69 косметическое"><div class="box" page="zerkalo-beurer-bs-kosmeticheskoe-2500r"><span class="title">зеркала содержание Зеркало  Beurer BS 69 косметическое</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/e43553d2ace8478e61c73ac89d87f4c2.jpeg" alt="массаж веником Стандартные насадки для ирригатора Waterpik JT70E (2 шт.)" title="массаж веником Стандартные насадки для ирригатора Waterpik JT70E (2 шт.)"><div class="box" page="standartnye-nasadki-dlya-irrigatora-waterpik-jte-sht-350r"><span class="title">массаж веником Стандартные насадки для ирригатора Waterpik JT70E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/141cd8baea6e8db6239edb8d6c9e1bdf.jpeg" alt="ирригатор полости рта braun Комплект пародонтальных насадок к ирригатору (2 шт) DONFEEL OR-820M" title="ирригатор полости рта braun Комплект пародонтальных насадок к ирригатору (2 шт) DONFEEL OR-820M"><div class="box" page="komplekt-parodontalnyh-nasadok-k-irrigatoru-sht-donfeel-orm-270r"><span class="title">ирригатор полости рта braun Комплект пародонтальных насадок к ирригатору (2 шт) DONFEEL OR-820M</span><p>от <span class="price">270</span> руб.</p></div></li>
						<li class="large"><img src="photos/2cb4e8a91d245f53ceebe70f42a3b86c.jpeg" alt="массаж в россии Коврик малый Ляпко АЛ" title="массаж в россии Коврик малый Ляпко АЛ"><div class="box" page="kovrik-malyy-lyapko-al-890r"><span class="title">массаж в россии Коврик малый Ляпко АЛ</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li class="large"><img src="photos/ba9e4c83bef0677448f10a87047b3b54.jpeg" alt="массаж стопы ребенка Массажер Beurer EA34 для акупунктурой терапии" title="массаж стопы ребенка Массажер Beurer EA34 для акупунктурой терапии"><div class="box" page="massazher-beurer-ea-dlya-akupunkturoy-terapii-2850r"><span class="title">массаж стопы ребенка Массажер Beurer EA34 для акупунктурой терапии</span><p>от <span class="price">2850</span> руб.</p></div></li>
						<li class="large"><img src="photos/8524c9a81149ced5afefd960c059f93e.jpeg" alt="подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T" title="подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T"><div class="box" page="vibromassazher-clear-fit-top-beauty-cf-t-10490r"><span class="title">подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T</span><p>от <span class="price">10490</span> руб.</p></div></li>
						<li><img src="photos/5dd95fcbd77902411af3599387a4ddf5.jpeg" alt="массаж обертывание Массажер для головы Мурашка Антистресс" title="массаж обертывание Массажер для головы Мурашка Антистресс"><div class="box" page="massazher-dlya-golovy-murashka-antistress-200r"><span class="title">массаж обертывание Массажер для головы Мурашка Антистресс</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li><img src="photos/ab29ac873813211495d6ce68e3940399.jpeg" alt="зеркала с подогревом 2110 Массажная накидка с 12 роликами" title="зеркала с подогревом 2110 Массажная накидка с 12 роликами"><div class="box" page="massazhnaya-nakidka-s-rolikami-4500r"><span class="title">зеркала с подогревом 2110 Массажная накидка с 12 роликами</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/5d92120d3065dfcf7d5f91af9dd4ca58.jpeg" alt="куплю триммер в москве Массажная накидка ZENET TL-2007-Z" title="куплю триммер в москве Массажная накидка ZENET TL-2007-Z"><div class="box" page="massazhnaya-nakidka-zenet-tlz-4950r"><span class="title">куплю триммер в москве Массажная накидка ZENET TL-2007-Z</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/369fa02b2fd1e0a8a6d3480c85fe998d.jpeg" alt="костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки" title="костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки"><div class="box" page="atlanta-atn-mashinka-dlya-strizhki-590r"><span class="title">костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки</span><p>от <span class="price">590</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r.php", 0, -4); if (file_exists("comments/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r.php")) require_once "comments/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r.php" method="post" onsubmit="return checkForm(this)">
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