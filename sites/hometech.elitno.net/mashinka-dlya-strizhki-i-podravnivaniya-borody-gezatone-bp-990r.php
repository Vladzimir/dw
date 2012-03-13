<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mashinka-dlya-strizhki-i-podravnivaniya-borody-gezatone-bp-990r.php","кованые зеркала");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mashinka-dlya-strizhki-i-podravnivaniya-borody-gezatone-bp-990r.php", $nick, $comment);
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
		<title>кованые зеркала Машинка для стрижки и подравнивания бороды Gezatone BP101  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кованые зеркала, массаж подглядывание, фен хуан дань цун, акупунктурный массаж, стихи на фене, чувственный массаж, физиотерапия в стоматологии, массаж октябрьская, солярии в красноярске, эпилятор philips hp 6570, правильный массаж простаты, сколько стоит минута в солярии, бразильское выпрямление волос цена, машинка для стрижки andis,  бытовая техника фены">
		<meta name="description" content="кованые зеркала Универсальная машинка для стрижки и подравнивания бороды станет незаменимым помо...">
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
						<a class="photo" href="photos/a036b414251fcfbd54d138ec8a643417.jpeg" title="кованые зеркала Машинка для стрижки и подравнивания бороды Gezatone BP101"><img src="photos/a036b414251fcfbd54d138ec8a643417.jpeg" alt="кованые зеркала Машинка для стрижки и подравнивания бороды Gezatone BP101" title="кованые зеркала Машинка для стрижки и подравнивания бороды Gezatone BP101 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-3000r.php"><img src="photos/fecc03dbb56fe547a8ffb39898e3559d.jpeg" alt="массаж подглядывание Весы электронные напольные с анализатором жира Tanita BC-570" title="массаж подглядывание Весы электронные напольные с анализатором жира Tanita BC-570"></a><h2>Весы электронные напольные с анализатором жира Tanita BC-570</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-braun-es-3030r.php"><img src="photos/ed07bb00209565173c6a467ccac26ddc.jpeg" alt="фен хуан дань цун Выпрямитель для волос Braun ES2" title="фен хуан дань цун Выпрямитель для волос Braun ES2"></a><h2>Выпрямитель для волос Braun ES2</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-vypryamleniya-volos-professionalnyy-stilist-vitesse-vs-1130r.php"><img src="photos/95f83d2fc77a8c1038cbf28dc7b115c0.jpeg" alt="акупунктурный массаж Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933" title="акупунктурный массаж Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933"></a><h2>Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кованые зеркала Машинка для стрижки и подравнивания бороды Gezatone BP101</h1>
						<div class="tb"><p>Цена: от <span class="price">990</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12038.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Универсальная машинка для стрижки и подравнивания бороды станет незаменимым помощником у вас дома. В комплект входит 6 сменных насадок с лезвиями из высококачественной стали.</p><p>С этой моделью вы быстро и легко не только обеспечите отличный уход прическе, бакам и бороде, но и безопасно удалите растительность в носу и ушах. Изделие обладает современным дизайном и компактными размерами, оно не займет много места ни на полочке в ванной, ни в дорожной сумке во время путешествия. </p><p><b>Комплектация:</b></p><ul type=disc><li>Колпачки для бритв <li>Вращающиеся бритвы для удаления волос из носа <li>Бритва для подрезания бороды и баков <li>Гребень для усов <li>Лубрикант <li>Щетка для чистки <li>Консоль <li>Держатель для расчески <li>Комплект батарей питания</li></ul><p><b>Особенности:</b></p><ul type=disc><li>Широкий выбор функций; <li>6 сменных насадок с высококачественными стальными лезвиями; <li>Удобство в использовании; <li>Современный дизайн; <li>Ультракомпактный размер; <li>Вращающиеся бритвы безболезненно и без опасности для здоровья избавят вас от лишней растительности в носу и ушах; <li>Лезвия для баков и бороды предназначены для того, чтобы придавать красивую форму и подрезать лишние волосы на щеках и подбородке; <li>Бритва для баков и бороды снабжена двумя удобными гребешками, позволяющими подрезать волосы на длину 2, 4, 6, 8, 10, 12, 14 и 16 мм.</li></ul><p><b>Производитель:</b> Gezanne I.T.C.</p><p><b>Страна:</b> Франция.</p><p><b>Гарантия:</b> 1 год со дня продажи.</p> кованые зеркала</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c13cfae2d70d4aeb7439f115424821b8.jpeg" alt="стихи на фене Щипцы для выпрямления волос Vitesse VS-906" title="стихи на фене Щипцы для выпрямления волос Vitesse VS-906"><div class="box"><a href="http://hometech.elitno.net/schipcy-dlya-vypryamleniya-volos-vitesse-vs-850r.php"><h3 class="title">стихи на фене Щипцы для выпрямления волос Vitesse VS-906</h3><p>от <span class="price">850</span> руб.</p></a></div></li>
						<li><img src="photos/c225afb28f1b6e082ea5b6d0dfd8a7ac.jpeg" alt="чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)" title="чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)"><div class="box" page="beurer-mp-manikyurnopedikyurnyy-nabor-nasadok-2900r"><span class="title">чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li><img src="photos/565c863a758e1bc3e5c28686264c8804.jpeg" alt="физиотерапия в стоматологии Валик круглый L61D15 USM-003" title="физиотерапия в стоматологии Валик круглый L61D15 USM-003"><div class="box" page="valik-kruglyy-ld-usm-1200r-2"><span class="title">физиотерапия в стоматологии Валик круглый L61D15 USM-003</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/6e19015cdb720b36c0e2424d231d0e85.jpeg" alt="массаж октябрьская Физиотерапевтическое кресло Hakuju Healthtron J9000mv" title="массаж октябрьская Физиотерапевтическое кресло Hakuju Healthtron J9000mv"><div class="box" page="fizioterapevticheskoe-kreslo-hakuju-healthtron-jmv-490000r"><span class="title">массаж октябрьская Физиотерапевтическое кресло Hakuju Healthtron J9000mv</span><p>от <span class="price">490000</span> руб.</p></div></li>
						<li class="large"><img src="photos/d6a81b5695856acbb870fca5e56fa343.jpeg" alt="солярии в красноярске Аппликатор Ляпко Пояс Малыш 5,8" title="солярии в красноярске Аппликатор Ляпко Пояс Малыш 5,8"><div class="box" page="applikator-lyapko-poyas-malysh-920r"><span class="title">солярии в красноярске Аппликатор Ляпко Пояс Малыш 5,8</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li class="large"><img src="photos/c2c64becf445fe1abeaa76be59229b33.jpeg" alt="эпилятор philips hp 6570 Массажер Nozomi MH-103" title="эпилятор philips hp 6570 Массажер Nozomi MH-103"><div class="box" page="massazher-nozomi-mh-1700r"><span class="title">эпилятор philips hp 6570 Массажер Nozomi MH-103</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li class="large"><img src="photos/07e8f52c43849d7cdfb6d82971d9d422.jpeg" alt="правильный массаж простаты Массажер Breo mini" title="правильный массаж простаты Массажер Breo mini"><div class="box" page="massazher-breo-mini-470r"><span class="title">правильный массаж простаты Массажер Breo mini</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li><img src="photos/86bdc09c2f8fced55e77163da86e1eb1.jpeg" alt="сколько стоит минута в солярии Вибромассажный пояс для коррекции фигуры Slender Pro 005S" title="сколько стоит минута в солярии Вибромассажный пояс для коррекции фигуры Slender Pro 005S"><div class="box" page="vibromassazhnyy-poyas-dlya-korrekcii-figury-slender-pro-s-1700r"><span class="title">сколько стоит минута в солярии Вибромассажный пояс для коррекции фигуры Slender Pro 005S</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li><img src="photos/ef10884f9e80a4171170846108539bb4.jpeg" alt="бразильское выпрямление волос цена Спа-массажер Gezatone AMG107 1301102" title="бразильское выпрямление волос цена Спа-массажер Gezatone AMG107 1301102"><div class="box" page="spamassazher-gezatone-amg-890r"><span class="title">бразильское выпрямление волос цена Спа-массажер Gezatone AMG107 1301102</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/f791dc6b11479bf957d60c3bc019bbc7.jpeg" alt="машинка для стрижки andis Массажер для мытья и массажа головы Nozomi MH-105" title="машинка для стрижки andis Массажер для мытья и массажа головы Nozomi MH-105"><div class="box" page="massazher-dlya-mytya-i-massazha-golovy-nozomi-mh-4450r"><span class="title">машинка для стрижки andis Массажер для мытья и массажа головы Nozomi MH-105</span><p>от <span class="price">4450</span> руб.</p></div></li>
						<li><img src="photos/170780b58e3b6d00de22deb7936fbf1b.jpeg" alt="массаж конечностей Расческа-вибромассажер Massage Hair Brush" title="массаж конечностей Расческа-вибромассажер Massage Hair Brush"><div class="box" page="rascheskavibromassazher-massage-hair-brush-100r"><span class="title">массаж конечностей Расческа-вибромассажер Massage Hair Brush</span><p>от <span class="price">100</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mashinka-dlya-strizhki-i-podravnivaniya-borody-gezatone-bp-990r.php", 0, -4); if (file_exists("comments/mashinka-dlya-strizhki-i-podravnivaniya-borody-gezatone-bp-990r.php")) require_once "comments/mashinka-dlya-strizhki-i-podravnivaniya-borody-gezatone-bp-990r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mashinka-dlya-strizhki-i-podravnivaniya-borody-gezatone-bp-990r.php" method="post" onsubmit="return checkForm(this)">
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