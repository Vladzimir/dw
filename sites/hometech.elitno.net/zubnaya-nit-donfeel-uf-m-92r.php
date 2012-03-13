<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("zubnaya-nit-donfeel-uf-m-92r.php","мужские стрижки под машинку");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("zubnaya-nit-donfeel-uf-m-92r.php", $nick, $comment);
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
		<title>мужские стрижки под машинку Зубная нить DONFEEL UF-627, 30 м  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мужские стрижки под машинку, пришла на массаж смотреть, продажа машинок для стрижки, замена бокового зеркала, фен щетка цена, техника массажа сердца, консультации трихолога, физиотерапия в стоматологии, дополнительное зеркало, ведьма в зеркале бесплатно, амфетамин в домашних условиях рецепт, массаж в россии, массаж головы ребенка, лифтинг массаж,  сетчатая электробритва">
		<meta name="description" content="мужские стрижки под машинку Вы заботитесь о здоровье своих зубов и хотите иметь здоровую  белоснежную улыбку...">
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
						<a class="photo" href="photos/7aaa549ef8fb22c25940d933581b75e8.jpeg" title="мужские стрижки под машинку Зубная нить DONFEEL UF-627, 30 м"><img src="photos/7aaa549ef8fb22c25940d933581b75e8.jpeg" alt="мужские стрижки под машинку Зубная нить DONFEEL UF-627, 30 м" title="мужские стрижки под машинку Зубная нить DONFEEL UF-627, 30 м -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnye-elektronnye-vesy-tanita-wb-155000r.php"><img src="photos/74f96d002c7070932c6bf46bfe207b40.jpeg" alt="пришла на массаж смотреть Профессиональные электронные весы Tanita WB-630" title="пришла на массаж смотреть Профессиональные электронные весы Tanita WB-630"></a><h2>Профессиональные электронные весы Tanita WB-630</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-bg-2950r.php"><img src="photos/71c60833c0bdd329311fc5385da9ccc3.gif" alt="продажа машинок для стрижки Весы электронные напольные с анализатором жира BG39" title="продажа машинок для стрижки Весы электронные напольные с анализатором жира BG39"></a><h2>Весы электронные напольные с анализатором жира BG39</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-tanita-um-sv-2000r.php"><img src="photos/5fe7b8cbed1da4a369915cce43684931.jpeg" alt="замена бокового зеркала Анализатор жира Tanita UM-071 (SV)" title="замена бокового зеркала Анализатор жира Tanita UM-071 (SV)"></a><h2>Анализатор жира Tanita UM-071 (SV)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мужские стрижки под машинку Зубная нить DONFEEL UF-627, 30 м</h1>
						<div class="tb"><p>Цена: от <span class="price">92</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_25829.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Вы заботитесь о здоровье своих зубов и хотите иметь здоровую  белоснежную улыбку? В таком случае ценным приобретением для вас станет зубная  нить. Зубная нить DONFEEL UF-627  изготовлена из качественного материала – искусственного шелка – с защитой от  разрывов, имеет отличный размер (целых 30 метров!) и приятный  мятно-ментоловый аромат. Зубная нить DONFEEL UF-627 не только эффективно снимает  налет и полирует эмаль зубов, но также укрепляет зубы и десны, придает дыханию  свежесть.  </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Размер:       30 м;</li>   <li>Материал:       нейтральный нейлон (искусственный шелк) с защитой от разрывов;</li>   <li>132       тончайшие нити;</li>   <li>Мятно-ментоловый       аромат;</li>   <li>Пластиковый       корпус;</li>   <li>Блистерная       упаковка.</li> </ul> <p><strong>Производитель:  DONFEEL (Россия/Тайвань)</strong></p> мужские стрижки под машинку</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c27a4d89a2f0dd3ef16052fa67829ba2.jpeg" alt="фен щетка цена Зеркало Beurer BS 29  косметическое" title="фен щетка цена Зеркало Beurer BS 29  косметическое"><div class="box"><a href="http://hometech.elitno.net/zerkalo-beurer-bs-kosmeticheskoe-600r.php"><h3 class="title">фен щетка цена Зеркало Beurer BS 29  косметическое</h3><p>от <span class="price">600</span> руб.</p></a></div></li>
						<li><img src="photos/7bf9d94bef7f7d982ce7407ebebbc6e0.jpeg" alt="техника массажа сердца Сменный картридж к осеребрителю Георгий" title="техника массажа сердца Сменный картридж к осеребрителю Георгий"><div class="box" page="smennyy-kartridzh-k-oserebritelyu-georgiy-430r"><span class="title">техника массажа сердца Сменный картридж к осеребрителю Георгий</span><p>от <span class="price">430</span> руб.</p></div></li>
						<li><img src="photos/28b4768c3cdb0ef358b594b4e291437d.jpeg" alt="консультации трихолога Стационарный массажный стол US-Medica Sumo Professional" title="консультации трихолога Стационарный массажный стол US-Medica Sumo Professional"><div class="box" page="stacionarnyy-massazhnyy-stol-usmedica-sumo-professional-29500r"><span class="title">консультации трихолога Стационарный массажный стол US-Medica Sumo Professional</span><p>от <span class="price">29500</span> руб.</p></div></li>
						<li><img src="photos/565c863a758e1bc3e5c28686264c8804.jpeg" alt="физиотерапия в стоматологии Валик круглый L61D15 USM-003" title="физиотерапия в стоматологии Валик круглый L61D15 USM-003"><div class="box" page="valik-kruglyy-ld-usm-1200r-2"><span class="title">физиотерапия в стоматологии Валик круглый L61D15 USM-003</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/4d3c7f0a4c5455cbe6d588bf75bcfd09.jpeg" alt="дополнительное зеркало Валик полукруглый US-Medica GREEN L52" title="дополнительное зеркало Валик полукруглый US-Medica GREEN L52"><div class="box" page="valik-polukruglyy-usmedica-green-l-1200r"><span class="title">дополнительное зеркало Валик полукруглый US-Medica GREEN L52</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/9fadb3bc1b0070c759f3914e2beceea5.jpeg" alt="ведьма в зеркале бесплатно Миостимулятор цифровой 3 в 1 Beurer EM 41" title="ведьма в зеркале бесплатно Миостимулятор цифровой 3 в 1 Beurer EM 41"><div class="box" page="miostimulyator-cifrovoy-v-beurer-em-2750r"><span class="title">ведьма в зеркале бесплатно Миостимулятор цифровой 3 в 1 Beurer EM 41</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li class="large"><img src="photos/2f3e1b5e01a58329c4d35d63fe6adef2.jpeg" alt="амфетамин в домашних условиях рецепт Аппликатор Ляпко Валик Универсальный 3,5" title="амфетамин в домашних условиях рецепт Аппликатор Ляпко Валик Универсальный 3,5"><div class="box" page="applikator-lyapko-valik-universalnyy-1050r"><span class="title">амфетамин в домашних условиях рецепт Аппликатор Ляпко Валик Универсальный 3,5</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/2cb4e8a91d245f53ceebe70f42a3b86c.jpeg" alt="массаж в россии Коврик малый Ляпко АЛ" title="массаж в россии Коврик малый Ляпко АЛ"><div class="box" page="kovrik-malyy-lyapko-al-890r"><span class="title">массаж в россии Коврик малый Ляпко АЛ</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/bd43b02490b7b213cfdadf5f9ffcb1e0.jpeg" alt="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024" title="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024"><div class="box" page="vakuumnyy-massazher-gezatone-vacu-2990r"><span class="title">массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li><img src="photos/1cd3b762effe11ede74f59ecb96b91a5.jpeg" alt="лифтинг массаж Массажер для ног Beurer FM 16" title="лифтинг массаж Массажер для ног Beurer FM 16"><div class="box" page="massazher-dlya-nog-beurer-fm-630r"><span class="title">лифтинг массаж Массажер для ног Beurer FM 16</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/bf89764b2aa6c696f3c1950d65523b3a.jpeg" alt="весы порционные электронные Массажер Beurer MG220 для тела" title="весы порционные электронные Массажер Beurer MG220 для тела"><div class="box" page="massazher-beurer-mg-dlya-tela-8200r"><span class="title">весы порционные электронные Массажер Beurer MG220 для тела</span><p>от <span class="price">8200</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("zubnaya-nit-donfeel-uf-m-92r.php", 0, -4); if (file_exists("comments/zubnaya-nit-donfeel-uf-m-92r.php")) require_once "comments/zubnaya-nit-donfeel-uf-m-92r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="zubnaya-nit-donfeel-uf-m-92r.php" method="post" onsubmit="return checkForm(this)">
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