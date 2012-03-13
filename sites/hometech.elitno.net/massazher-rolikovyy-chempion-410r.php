<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-rolikovyy-chempion-410r.php","ремонт машинок для стрижки moser");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-rolikovyy-chempion-410r.php", $nick, $comment);
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
		<title>ремонт машинок для стрижки moser Массажер роликовый Чемпион  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="ремонт машинок для стрижки moser, девочки в солярии, весы напольные электронные tefal, массаж при гайморите, соблазнил массажем, эпиляторы philips отзывы, весы электронные ювелирные, женщина перед зеркалом, мебельное зеркало, зеркало стальное, вакуумный массаж купить, маникюр педикюр москва, накладки на зеркала 2110, подглядывание в солярии,  камеди зеркало">
		<meta name="description" content="ремонт машинок для стрижки moser Роликовый массажер Чемпион довольно большого размера и позволяет обрабатывать об...">
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
						<a class="photo" href="photos/36576e883789273d56cbf397e3ca9ef9.jpeg" title="ремонт машинок для стрижки moser Массажер роликовый Чемпион"><img src="photos/36576e883789273d56cbf397e3ca9ef9.jpeg" alt="ремонт машинок для стрижки moser Массажер роликовый Чемпион" title="ремонт машинок для стрижки moser Массажер роликовый Чемпион -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-black-flower-1700r.php"><img src="photos/3851332e1073535313e2e6312d13a85e.jpeg" alt="девочки в солярии Весы электронные напольные Beurer GS27 black flower" title="девочки в солярии Весы электронные напольные Beurer GS27 black flower"></a><h2>Весы электронные напольные Beurer GS27 black flower</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-diagnosticheskie-beurer-bg-pulsometr-pm-nabor-5800r.php"><img src="photos/815eaf02afaf5f0cbb85aab78f5cd950.jpeg" alt="весы напольные электронные tefal Весы электронные диагностические Beurer BG42 + пульсометр PM60 (набор)" title="весы напольные электронные tefal Весы электронные диагностические Beurer BG42 + пульсометр PM60 (набор)"></a><h2>Весы электронные диагностические Beurer BG42 + пульсометр PM60 (набор)</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-2400r.php"><img src="photos/2b0830cb971a08fbcbc59104f1b6f567.jpeg" alt="массаж при гайморите Анализатор жира (состава тела) Tanita BC-540" title="массаж при гайморите Анализатор жира (состава тела) Tanita BC-540"></a><h2>Анализатор жира (состава тела) Tanita BC-540</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>ремонт машинок для стрижки moser Массажер роликовый Чемпион</h1>
						<div class="tb"><p>Цена: от <span class="price">410</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1155.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><strong>Роликовый массажер Чемпион </strong>довольно большого размера и позволяет обрабатывать обширные участки тела. В сложенном виде его легко использовать для массажа стоп. Чемпион применяется профессиональными массажистами. Восемь пар роликов плавно водят по поверхности кожи, расслабляя напряженные мышцы, стимулируя кровообращение. Приобретая механический массажер Чемпион для домашнего использования, вы можете самостоятельно проводить оздоравливающие процедуры.</p><p><b>Производитель:</b> ООО «Дельта-Терм» (Россия, Москва)</p> ремонт машинок для стрижки moser</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ed0c34c7ee29ed14f07ab5b9a731bbc5.jpeg" alt="соблазнил массажем Зеркало Beurer BS 59 косметическое" title="соблазнил массажем Зеркало Beurer BS 59 косметическое"><div class="box" page="zerkalo-beurer-bs-kosmeticheskoe-1900r"><span class="title">соблазнил массажем Зеркало Beurer BS 59 косметическое</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/9a3535a024b93d14467dda20bb096b04.jpeg" alt="эпиляторы philips отзывы Ирригатор полости рта DONFEEL OR-820M с назальной опцией. Комплектация 2" title="эпиляторы philips отзывы Ирригатор полости рта DONFEEL OR-820M с назальной опцией. Комплектация 2"><div class="box" page="irrigator-polosti-rta-donfeel-orm-s-nazalnoy-opciey-komplektaciya-3100r"><span class="title">эпиляторы philips отзывы Ирригатор полости рта DONFEEL OR-820M с назальной опцией. Комплектация 2</span><p>от <span class="price">3100</span> руб.</p></div></li>
						<li><img src="photos/b22e40d494cd6893112bef0e9fe9ab49.jpeg" alt="весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt" title="весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt"><div class="box" page="termopoyas-vulkan-vulkan-belt-350r"><span class="title">весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/824ee45e08163a2c1814ad6f375574d1.png" alt="женщина перед зеркалом Ручной массажер US-Medica Magic Peeling" title="женщина перед зеркалом Ручной массажер US-Medica Magic Peeling"><div class="box" page="ruchnoy-massazher-usmedica-magic-peeling-990r"><span class="title">женщина перед зеркалом Ручной массажер US-Medica Magic Peeling</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/08f3884e56446c62ad73af91ace63c80.jpeg" alt="мебельное зеркало Гидромассажная ванночка для ног Beurer FB20" title="мебельное зеркало Гидромассажная ванночка для ног Beurer FB20"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-2350r"><span class="title">мебельное зеркало Гидромассажная ванночка для ног Beurer FB20</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li class="large"><img src="photos/5c6f38767cbe78cc7cf3904289557c01.jpeg" alt="зеркало стальное Гидромассажная ванночка для ног Beurer FB25" title="зеркало стальное Гидромассажная ванночка для ног Beurer FB25"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-2650r"><span class="title">зеркало стальное Гидромассажная ванночка для ног Beurer FB25</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li class="large"><img src="photos/e30becce6238c35820065daabf81bee7.jpeg" alt="вакуумный массаж купить Массажная подушка US-Medica Apple SMP-19" title="вакуумный массаж купить Массажная подушка US-Medica Apple SMP-19"><div class="box" page="massazhnaya-podushka-usmedica-apple-smp-4500r"><span class="title">вакуумный массаж купить Массажная подушка US-Medica Apple SMP-19</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/bcabcf5532aacefb2fe352cc581c70f2.jpeg" alt="маникюр педикюр москва Подушка массажная BODYKRAFT С-31G" title="маникюр педикюр москва Подушка массажная BODYKRAFT С-31G"><div class="box" page="podushka-massazhnaya-bodykraft-sg-3290r"><span class="title">маникюр педикюр москва Подушка массажная BODYKRAFT С-31G</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/4a6d7ab9cfe83a738906064801e96855.jpeg" alt="накладки на зеркала 2110 Паровая сауна для лица Gezatone 105S" title="накладки на зеркала 2110 Паровая сауна для лица Gezatone 105S"><div class="box" page="parovaya-sauna-dlya-lica-gezatone-s-1200r"><span class="title">накладки на зеркала 2110 Паровая сауна для лица Gezatone 105S</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/0cb3f14d82c590ca1830a52fdee51586.jpeg" alt="подглядывание в солярии BAMPITS 057A Заколка для придания объема" title="подглядывание в солярии BAMPITS 057A Заколка для придания объема"><div class="box" page="bampits-a-zakolka-dlya-pridaniya-obema-400r"><span class="title">подглядывание в солярии BAMPITS 057A Заколка для придания объема</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/c1e44ae0346cc39b27bb78d6ca139c3e.jpeg" alt="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл" title="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл"><div class="box" page="loson-posle-depilyacii-rica-mentolovyy-ml-600r"><span class="title">зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-rolikovyy-chempion-410r.php", 0, -4); if (file_exists("comments/massazher-rolikovyy-chempion-410r.php")) require_once "comments/massazher-rolikovyy-chempion-410r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-rolikovyy-chempion-410r.php" method="post" onsubmit="return checkForm(this)">
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