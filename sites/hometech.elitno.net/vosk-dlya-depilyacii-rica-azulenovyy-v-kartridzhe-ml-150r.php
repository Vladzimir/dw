<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vosk-dlya-depilyacii-rica-azulenovyy-v-kartridzhe-ml-150r.php","маникюр и педикюр профессиональный");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vosk-dlya-depilyacii-rica-azulenovyy-v-kartridzhe-ml-150r.php", $nick, $comment);
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
		<title>маникюр и педикюр профессиональный Воск для депиляции Rica, азуленовый в картридже 100 мл  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="маникюр и педикюр профессиональный, мастер массажа, сочинение на тему зеркало, массаж слепых, ирина красикова массаж, тайский массаж в самаре, солярий в нижнем, зеркало задней двери, массаж для любимого, машинка для стрижки интимных мест, туалетный столик с зеркалом фото, массаж пальчиков, носовые платочки, массаж при астме,  массаж медведково">
		<meta name="description" content="маникюр и педикюр профессиональный Воск для депиляции от итальянского производителя Rica содержит активные вещества...">
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
						<a class="photo" href="photos/51e9a6eaf948832c451cdbbf4a286b50.jpeg" title="маникюр и педикюр профессиональный Воск для депиляции Rica, азуленовый в картридже 100 мл"><img src="photos/51e9a6eaf948832c451cdbbf4a286b50.jpeg" alt="маникюр и педикюр профессиональный Воск для депиляции Rica, азуленовый в картридже 100 мл" title="маникюр и педикюр профессиональный Воск для депиляции Rica, азуленовый в картридже 100 мл -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/analizator-zhira-tanita-um-sv-2500r.php"><img src="photos/d6db423a639701cbcc72448f073ae3bd.jpeg" alt="мастер массажа Анализатор жира Tanita UM-030 (SV)" title="мастер массажа Анализатор жира Tanita UM-030 (SV)"></a><h2>Анализатор жира Tanita UM-030 (SV)</h2></li>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-s-krasnyy-leopard-4500r.php"><img src="photos/a73d45afb658e85145cdbbf609c3a636.jpeg" alt="сочинение на тему зеркало Стайлер Corioliss С1 красный леопард" title="сочинение на тему зеркало Стайлер Corioliss С1 красный леопард"></a><h2>Стайлер Corioliss С1 красный леопард</h2></li>
							<li><a href="http://hometech.elitno.net/karat-de-darsonval-s-chetyrmya-smennymi-nasadkami-2990r.php"><img src="photos/43322e66f76e6634ad9a2abdfb261bdb.jpeg" alt="массаж слепых КАРАТ ДЕ-212 Дарсонваль с четырьмя сменными насадками" title="массаж слепых КАРАТ ДЕ-212 Дарсонваль с четырьмя сменными насадками"></a><h2>КАРАТ ДЕ-212 Дарсонваль с четырьмя сменными насадками</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>маникюр и педикюр профессиональный Воск для депиляции Rica, азуленовый в картридже 100 мл</h1>
						<div class="tb"><p>Цена: от <span class="price">150</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14403.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Воск для депиляции от итальянского производителя Rica содержит активные вещества азулен и диоксид титана, которые заметно уменьшают зуд и смягчают кожу, способствуя ее восстановлению. Препарат эффективно удаляет волосы и подходит для всех типов кожи, включая чувствительную, склонную к появлению раздражения.</p><p>Воск легко наносится и быстро дает эффект. Его уникальный состав хорошо снимает покраснение, препятствует появления пигментации и морщин и активно питает. Для использования средства, необходимо предварительно разогреть картридж в специальном нагревателе. Температура плавления воска +37С, при ее достижении субстанцию наносят на кожу роликом в направлении роста волос, после чего снимают в противоположном направлении при помощи полосок для эпиляции.</p><p><b>Характеристики:</b></p><ul type=disc><li>В составе: азулен и диоксид титана, смягчающие кожу и способствующие ее восстановление <li>Тип кожи: для всех типов кожи, включая чувствительную, склонную к появлению раздражения <li>Температура плавления +37С</li></ul><p><b>Производитель:</b> RICA S.p.a.</p><p><b>Страна:</b> Италия.</p> маникюр и педикюр профессиональный</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a47834e167f88700a1ff6ede56cda638.jpeg" alt="ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм" title="ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм"><div class="box" page="schipcy-dlya-zavivki-babyliss-ce-ipro-mm-1750r"><span class="title">ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/2f9a3ffb10b1f6db25db2e1360f39b48.jpeg" alt="тайский массаж в самаре Зеркало двустороннее Valera 618.01 косметическое" title="тайский массаж в самаре Зеркало двустороннее Valera 618.01 косметическое"><div class="box" page="zerkalo-dvustoronnee-valera-kosmeticheskoe-1530r"><span class="title">тайский массаж в самаре Зеркало двустороннее Valera 618.01 косметическое</span><p>от <span class="price">1530</span> руб.</p></div></li>
						<li><img src="photos/cb1ca3222d5a4e0a7543b31428f06d83.jpeg" alt="солярий в нижнем Вибромассажер с инфракрасным излучением BREMED BD-7400" title="солярий в нижнем Вибромассажер с инфракрасным излучением BREMED BD-7400"><div class="box" page="vibromassazher-s-infrakrasnym-izlucheniem-bremed-bd-850r"><span class="title">солярий в нижнем Вибромассажер с инфракрасным излучением BREMED BD-7400</span><p>от <span class="price">850</span> руб.</p></div></li>
						<li><img src="photos/75cde016b01871ff8d9976da31b77fd1.jpeg" alt="зеркало задней двери Массажер ZENET TL-MHT-C" title="зеркало задней двери Массажер ZENET TL-MHT-C"><div class="box" page="massazher-zenet-tlmhtc-2050r"><span class="title">зеркало задней двери Массажер ZENET TL-MHT-C</span><p>от <span class="price">2050</span> руб.</p></div></li>
						<li class="large"><img src="photos/c075b8e44047484b111fe1dd6dacdc93.jpeg" alt="массаж для любимого Машинка для стрижки Vitesse VS-384" title="массаж для любимого Машинка для стрижки Vitesse VS-384"><div class="box" page="mashinka-dlya-strizhki-vitesse-vs-700r-2"><span class="title">массаж для любимого Машинка для стрижки Vitesse VS-384</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li class="large"><img src="photos/042e8c83842b5051a47ae5ba07dd8b37.jpeg" alt="машинка для стрижки интимных мест Триммер Beauty Hair Trimmer" title="машинка для стрижки интимных мест Триммер Beauty Hair Trimmer"><div class="box" page="trimmer-beauty-hair-trimmer-200r"><span class="title">машинка для стрижки интимных мест Триммер Beauty Hair Trimmer</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li class="large"><img src="photos/0b818c5778593d88240657fc3fa330a4.jpeg" alt="туалетный столик с зеркалом фото Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01" title="туалетный столик с зеркалом фото Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01"><div class="box" page="trimmer-dlya-strizhki-volos-v-oblasti-nosa-i-ushey-valera-trimmy-570r"><span class="title">туалетный столик с зеркалом фото Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01</span><p>от <span class="price">570</span> руб.</p></div></li>
						<li><img src="photos/d2b7ff9e11c72a7ec42a2c10d5296088.jpeg" alt="массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт" title="массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт"><div class="box" page="fenschetka-babyliss-ase-vt-2060r"><span class="title">массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт</span><p>от <span class="price">2060</span> руб.</p></div></li>
						<li><img src="photos/8500a99a4fd5081d59e0f1449e9b24b5.jpeg" alt="носовые платочки Фен Atlanta АТН-89" title="носовые платочки Фен Atlanta АТН-89"><div class="box" page="fen-atlanta-atn-840r"><span class="title">носовые платочки Фен Atlanta АТН-89</span><p>от <span class="price">840</span> руб.</p></div></li>
						<li><img src="photos/df60e9368f4af47e5694b1e1f79f6d7a.jpeg" alt="массаж при астме Фен Vitesse VS-943" title="массаж при астме Фен Vitesse VS-943"><div class="box" page="fen-vitesse-vs-640r"><span class="title">массаж при астме Фен Vitesse VS-943</span><p>от <span class="price">640</span> руб.</p></div></li>
						<li><img src="photos/f858c82b10a39109d5171ba0356b80f7.jpeg" alt="правильный массаж живота Фен Vitesse VS-943 сиреневый" title="правильный массаж живота Фен Vitesse VS-943 сиреневый"><div class="box" page="fen-vitesse-vs-sirenevyy-640r"><span class="title">правильный массаж живота Фен Vitesse VS-943 сиреневый</span><p>от <span class="price">640</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vosk-dlya-depilyacii-rica-azulenovyy-v-kartridzhe-ml-150r.php", 0, -4); if (file_exists("comments/vosk-dlya-depilyacii-rica-azulenovyy-v-kartridzhe-ml-150r.php")) require_once "comments/vosk-dlya-depilyacii-rica-azulenovyy-v-kartridzhe-ml-150r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vosk-dlya-depilyacii-rica-azulenovyy-v-kartridzhe-ml-150r.php" method="post" onsubmit="return checkForm(this)">
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