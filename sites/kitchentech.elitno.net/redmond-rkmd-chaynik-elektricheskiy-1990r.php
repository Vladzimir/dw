<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("redmond-rkmd-chaynik-elektricheskiy-1990r.php","лестничные перила");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("redmond-rkmd-chaynik-elektricheskiy-1990r.php", $nick, $comment);
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
		<title>лестничные перила Redmond RK-M121D Чайник электрический  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="лестничные перила, вафельница киев, обслуживание пылесоса, подобрать пылесос, как работает кофеварка, что можно делать блендером, манник в мультиварке панасоник, профессиональные утюги, ребра в аэрогриле, ремень для хлебопечки, запеканка в хлебопечке, купить пылесос с контейнером, как блендером сделать пюре, семга в мультиварке,  блендер рецепты видео">
		<meta name="description" content="лестничные перила Электрический чайник Redmond RK-M121D с принципиально новой сенсорной системой у...">
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
						<a class="photo" href="photos/0b3cd91064942c75434bb396eaa4e0d2.jpeg" title="лестничные перила Redmond RK-M121D Чайник электрический"><img src="photos/0b3cd91064942c75434bb396eaa4e0d2.jpeg" alt="лестничные перила Redmond RK-M121D Чайник электрический" title="лестничные перила Redmond RK-M121D Чайник электрический -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofemashina-nivona-nicr-caferomatica-63790r.php"><img src="photos/7bf6714fb23984d0a15fec9274d53078.jpeg" alt="вафельница киев Кофемашина Nivona NICR830 CafeRomatica" title="вафельница киев Кофемашина Nivona NICR830 CafeRomatica"></a><h2>Кофемашина Nivona NICR830 CafeRomatica</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3650r.php"><img src="photos/b6481108ed00fa262329eb9b4a9a7836.jpeg" alt="обслуживание пылесоса Микроволновая печь Vitek VT-1694" title="обслуживание пылесоса Микроволновая печь Vitek VT-1694"></a><h2>Микроволновая печь Vitek VT-1694</h2></li>
							<li><a href="http://kitchentech.elitno.net/ruchnoy-mikser-i-izmelchitel-vitesse-vs-2550r.php"><img src="photos/a1d1eae985fdaf6c44e33d639f78a926.jpeg" alt="подобрать пылесос Ручной миксер и измельчитель Vitesse VS-248" title="подобрать пылесос Ручной миксер и измельчитель Vitesse VS-248"></a><h2>Ручной миксер и измельчитель Vitesse VS-248</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>лестничные перила Redmond RK-M121D Чайник электрический</h1>
						<div class="tb"><p>Цена: от <span class="price">1990</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18661.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Redmond RK-M121D с принципиально новой сенсорной системой управления и 5 режимами нагрева воды, особым штрихом является внутренняя подсветка, меняющая цвет в зависимости от температуры воды. Спираль из нержавеющей стали и корпус из гигиенического пластика, покрытый металлом обеспечат долговечность и экологичность использования, мощность 2400Вт при объеме чайника в 1,2 литра позволит вскипеть воде буквально за минуту, а специальный фильтр защитит от накипи. </p><p>Отдельный режим \Keep Warm\ позволит в течение получаса поддерживать температуру заранее выбранного режима заварки и не даст воде в чайнике остыть. Также в этой модели была использована контактная группа фирмы Otter (Германия), которая обеспечивает не менее 3 тысяч циклов закипания и не менее 10 тысяч снятий-постановок работоспособности. Дополнительными плюсами являются разные режимы автоматического отключения и удобное хранение шнура.</p><p><b>Характеристики:</b></p><ul type=disc><li>Мощность: 2400 Вт; <li>Емкость: 1.2 л; <li>Покрытие нагревательного элемента: нержавеющая сталь; <li>Корпус: гигиенический пластик покрытый металлом; <li>Автоматическое выключение при достижении температуры или закипании; <li>Автоматическое отключение при недостаточном количестве воды; <li>Терморегулятор ступенчатый 5 режимов: 50, 60, 70, 85, 100; <li>Функция KEEP WARM - поддержание заданной температуры воды; <li>Контактная группа: OTTER; <li>Электронное управление; <li>Индикация включения; <li>Шкала уровня воды; <li>Светодиодная индикация температуры воды; <li>Съемный фильтр от накипи; <li>Отсек для шнура; </li></ul><p><b>Производитель: США</b></p><p><b>Гарантия: 1 год</b></p> лестничные перила</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/276b4e96e52e1526338897e899045489.jpeg" alt="как работает кофеварка Керамическая кастрюля Maruchi для моделей RW-FZ46, FZ47, RB-FC46" title="как работает кофеварка Керамическая кастрюля Maruchi для моделей RW-FZ46, FZ47, RB-FC46"><div class="box"><a href="http://kitchentech.elitno.net/keramicheskaya-kastryulya-maruchi-dlya-modeley-rwfz-fz-rbfc-1200r.php"><h3 class="title">как работает кофеварка Керамическая кастрюля Maruchi для моделей RW-FZ46, FZ47, RB-FC46</h3><p>от <span class="price">1200</span> руб.</p></a></div></li>
						<li><img src="photos/060f95312423ba3e968eaf23618bd36d.jpeg" alt="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White" title="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White"><div class="box" page="myasorubka-elektricheskaya-binatone-mgr-white-3700r"><span class="title">что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White</span><p>от <span class="price">3700</span> руб.</p></div></li>
						<li><img src="photos/1f738d1ec8329b2501736d61b71f3914.jpeg" alt="манник в мультиварке панасоник Пароварка Tefal Invent VC1014" title="манник в мультиварке панасоник Пароварка Tefal Invent VC1014"><div class="box" page="parovarka-tefal-invent-vc-3930r"><span class="title">манник в мультиварке панасоник Пароварка Tefal Invent VC1014</span><p>от <span class="price">3930</span> руб.</p></div></li>
						<li><img src="photos/8d898eca4e96ee4a2fd539403a61a2e7.jpeg" alt="профессиональные утюги Соковыжималка для цитрусовых" title="профессиональные утюги Соковыжималка для цитрусовых"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-1500r"><span class="title">профессиональные утюги Соковыжималка для цитрусовых</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/1a5872ce4a924d71272e9d8aacab1a34.jpeg" alt="ребра в аэрогриле Чайник электрический Maxima MК-103" title="ребра в аэрогриле Чайник электрический Maxima MК-103"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r"><span class="title">ребра в аэрогриле Чайник электрический Maxima MК-103</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/46f63d5550ab774c363b5ff4ba202c31.jpeg" alt="ремень для хлебопечки Чайник электрический Maxima MK- M191" title="ремень для хлебопечки Чайник электрический Maxima MK- M191"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-990r"><span class="title">ремень для хлебопечки Чайник электрический Maxima MK- M191</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/5ccb08af67b9142dd99b94ec6317943c.jpeg" alt="запеканка в хлебопечке Чайник электрический Maxima MK-G311" title="запеканка в хлебопечке Чайник электрический Maxima MK-G311"><div class="box" page="chaynik-elektricheskiy-maxima-mkg-1650r"><span class="title">запеканка в хлебопечке Чайник электрический Maxima MK-G311</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/296e5671e5f65168bbfd694532a2c751.jpeg" alt="купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной" title="купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-stalnoy-1850r"><span class="title">купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/8a7e2a46651bfb4c8fa5108f6af45161.jpeg" alt="как блендером сделать пюре Детектор жучков BugHunter Professional BH-02" title="как блендером сделать пюре Детектор жучков BugHunter Professional BH-02"><div class="box" page="detektor-zhuchkov-bughunter-professional-bh-9990r"><span class="title">как блендером сделать пюре Детектор жучков BugHunter Professional BH-02</span><p>от <span class="price">9990</span> руб.</p></div></li>
						<li><img src="photos/eae88ed8d5eeac95cd1245092b541388.jpeg" alt="семга в мультиварке Бумажные фильтры-мешки 350 (787-104) для Thomas" title="семга в мультиварке Бумажные фильтры-мешки 350 (787-104) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1000r-3"><span class="title">семга в мультиварке Бумажные фильтры-мешки 350 (787-104) для Thomas</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/ebd6fc853a788b316468033f41ae3864.jpeg" alt="мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22" title="мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22"><div class="box" page="pylesos-dyson-motorhead-dc-34990r"><span class="title">мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22</span><p>от <span class="price">34990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("redmond-rkmd-chaynik-elektricheskiy-1990r.php", 0, -4); if (file_exists("comments/redmond-rkmd-chaynik-elektricheskiy-1990r.php")) require_once "comments/redmond-rkmd-chaynik-elektricheskiy-1990r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="redmond-rkmd-chaynik-elektricheskiy-1990r.php" method="post" onsubmit="return checkForm(this)">
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