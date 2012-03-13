<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-rolikovyy-master-290r.php","дарсонваль купить минск");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-rolikovyy-master-290r.php", $nick, $comment);
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
		<title>дарсонваль купить минск Массажер роликовый Мастер  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="дарсонваль купить минск, эпилятор braun 7280, лучшая машинка для стрижки волос, терапия массаж, массаж для похудения отзывы, стихи на фене, сгорела в солярии что делать, боюсь зеркал, массаж с минетом, насадки для машинки для стрижки, модели фенов, электробритва харьков, курсы массажа в минске, купить фен в киеве,  зеркало левое форд фокус">
		<meta name="description" content="дарсонваль купить минск Роликовый массажер Мастер прост в использовании и эффективен в действии. Вы прос...">
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
						<a class="photo" href="photos/741c2a17d20645ac77bf0cd8e2974fe0.jpeg" title="дарсонваль купить минск Массажер роликовый Мастер"><img src="photos/741c2a17d20645ac77bf0cd8e2974fe0.jpeg" alt="дарсонваль купить минск Массажер роликовый Мастер" title="дарсонваль купить минск Массажер роликовый Мастер -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-professionalnye-tanita-wb-17550r.php"><img src="photos/fc4f3b7aa860ded2b292910d886fca02.jpeg" alt="эпилятор braun 7280 Весы профессиональные Tanita WB-3000" title="эпилятор braun 7280 Весы профессиональные Tanita WB-3000"></a><h2>Весы профессиональные Tanita WB-3000</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-happy-stripes-1700r.php"><img src="photos/1d9fb69f8a525aa5b59114c1f14aee5b.jpeg" alt="лучшая машинка для стрижки волос Весы электронные напольные Beurer GS27 happy stripes" title="лучшая машинка для стрижки волос Весы электронные напольные Beurer GS27 happy stripes"></a><h2>Весы электронные напольные Beurer GS27 happy stripes</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-spiegelled-steklo-2600r.php"><img src="photos/648e5c85fd28c2211dee143be1d4f432.jpeg" alt="терапия массаж Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)" title="терапия массаж Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)"></a><h2>Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>дарсонваль купить минск Массажер роликовый Мастер</h1>
						<div class="tb"><p>Цена: от <span class="price">290</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1154.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><strong>Роликовый массажер Мастер </strong>прост в использовании и эффективен в действии. Вы просто водите им по телу и получаете удовольствие. Мышцы расслабляются, кровоток увеличивается, кожа разглаживается. Четыре пары роликов мягко массируют кожу, постепенно избавляя вас от целлюлитных образований. Кроме этого легкий компактный прибор дает возможность обрабатывать труднодоступные участки и суставы.</p><p><b>Производитель:</b> ООО «Дельта-Терм» (Россия, Москва)</p> дарсонваль купить минск</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/f7d93846680ea6c285f7a41ccd08e55b.jpeg" alt="массаж для похудения отзывы Zauber Электронные напольные весы  MAX-100" title="массаж для похудения отзывы Zauber Электронные напольные весы  MAX-100"><div class="box" page="zauber-elektronnye-napolnye-vesy-max-1300r"><span class="title">массаж для похудения отзывы Zauber Электронные напольные весы  MAX-100</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/c13cfae2d70d4aeb7439f115424821b8.jpeg" alt="стихи на фене Щипцы для выпрямления волос Vitesse VS-906" title="стихи на фене Щипцы для выпрямления волос Vitesse VS-906"><div class="box" page="schipcy-dlya-vypryamleniya-volos-vitesse-vs-850r"><span class="title">стихи на фене Щипцы для выпрямления волос Vitesse VS-906</span><p>от <span class="price">850</span> руб.</p></div></li>
						<li><img src="photos/a628ce07765b38bcd292b95d0bfc0368.jpeg" alt="сгорела в солярии что делать Щипцы для завивки Babyliss 2319E 19 мм" title="сгорела в солярии что делать Щипцы для завивки Babyliss 2319E 19 мм"><div class="box" page="schipcy-dlya-zavivki-babyliss-e-mm-1070r"><span class="title">сгорела в солярии что делать Щипцы для завивки Babyliss 2319E 19 мм</span><p>от <span class="price">1070</span> руб.</p></div></li>
						<li><img src="photos/8ee9cd9b8cf829084b39dc7dd0c0e8b9.jpeg" alt="боюсь зеркал Аппликатор Ляпко Малыш 3,5" title="боюсь зеркал Аппликатор Ляпко Малыш 3,5"><div class="box" page="applikator-lyapko-malysh-150r"><span class="title">боюсь зеркал Аппликатор Ляпко Малыш 3,5</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li class="large"><img src="photos/4a1e873cdf57ae191c8f0f6d017d095d.jpeg" alt="массаж с минетом Массажер Beurer MG240 для тела" title="массаж с минетом Массажер Beurer MG240 для тела"><div class="box" page="massazher-beurer-mg-dlya-tela-9000r"><span class="title">массаж с минетом Массажер Beurer MG240 для тела</span><p>от <span class="price">9000</span> руб.</p></div></li>
						<li class="large"><img src="photos/ae3ee4c3437d43e701e69a64da50647c.jpeg" alt="насадки для машинки для стрижки Капиллярный массажер Пальчики Шиатсу" title="насадки для машинки для стрижки Капиллярный массажер Пальчики Шиатсу"><div class="box" page="kapillyarnyy-massazher-palchiki-shiatsu-120r"><span class="title">насадки для машинки для стрижки Капиллярный массажер Пальчики Шиатсу</span><p>от <span class="price">120</span> руб.</p></div></li>
						<li class="large"><img src="photos/d6d662f1051663df0b15aa06e33f4f63.jpeg" alt="модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365" title="модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-ionicultratonic-m-2100r"><span class="title">модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365</span><p>от <span class="price">2100</span> руб.</p></div></li>
						<li><img src="photos/3e07c9c76543509eb7330cd46f97b553.jpeg" alt="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01" title="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01"><div class="box" page="mashinka-dlya-strizhki-volos-valera-absolut-3480r"><span class="title">электробритва харьков Машинка для стрижки волос Valera Absolut 648.01</span><p>от <span class="price">3480</span> руб.</p></div></li>
						<li><img src="photos/d881128511cd03aa90feb76747b82b80.jpeg" alt="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл" title="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-apelsinovyy-v-kartridzhe-ml-140r"><span class="title">курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл</span><p>от <span class="price">140</span> руб.</p></div></li>
						<li><img src="photos/adec23f7bb4d9805121eae426f6779f1.gif" alt="купить фен в киеве Стерилизатор для зубных щеток Gezatone t1 130810" title="купить фен в киеве Стерилизатор для зубных щеток Gezatone t1 130810"><div class="box" page="sterilizator-dlya-zubnyh-schetok-gezatone-t-390r"><span class="title">купить фен в киеве Стерилизатор для зубных щеток Gezatone t1 130810</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/d7811a5163aa6ac7d6a4a878e9e13025.jpeg" alt="производство фена Ультразвуковая зубная щетка DONFEEL HSD-005" title="производство фена Ультразвуковая зубная щетка DONFEEL HSD-005"><div class="box" page="ultrazvukovaya-zubnaya-schetka-donfeel-hsd-2750r"><span class="title">производство фена Ультразвуковая зубная щетка DONFEEL HSD-005</span><p>от <span class="price">2750</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-rolikovyy-master-290r.php", 0, -4); if (file_exists("comments/massazher-rolikovyy-master-290r.php")) require_once "comments/massazher-rolikovyy-master-290r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-rolikovyy-master-290r.php" method="post" onsubmit="return checkForm(this)">
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