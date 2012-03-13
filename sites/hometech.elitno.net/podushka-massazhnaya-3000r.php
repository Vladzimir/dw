<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("podushka-massazhnaya-3000r.php","системы массажа");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("podushka-massazhnaya-3000r.php", $nick, $comment);
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
		<title>системы массажа Подушка массажная  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="системы массажа, воздействие массажа, зеркала на ауди а6, лампы для солярия купить, виды завивки волос фото, ровента фен щетка цена, массаж в гомеле, солярий великий новгород, машинки для стрижки эльдорадо, мебельное зеркало, зеркало стальное, ионизатор воды купить, массаж большой груди, курсы массажа в минске,  купить фен в киеве">
		<meta name="description" content="системы массажа Универсальная массажная подушка эффективно помогает при болях в суставах и спине...">
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
						<a class="photo" href="photos/644518c616a9d636ff9cb53435672d46.jpeg" title="системы массажа Подушка массажная"><img src="photos/644518c616a9d636ff9cb53435672d46.jpeg" alt="системы массажа Подушка массажная" title="системы массажа Подушка массажная -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-tanita-hd-1100r.php"><img src="photos/048e479f039c3aa19649d31a57d96842.jpeg" alt="воздействие массажа Весы электронные напольные Tanita HD-380" title="воздействие массажа Весы электронные напольные Tanita HD-380"></a><h2>Весы электронные напольные Tanita HD-380</h2></li>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-mini-root-lifter-chernyy-2650r.php"><img src="photos/793f5e34425900f9f8cb0286c947d677.jpeg" alt="зеркала на ауди а6 Стайлер Corioliss Mini Root Lifter черный" title="зеркала на ауди а6 Стайлер Corioliss Mini Root Lifter черный"></a><h2>Стайлер Corioliss Mini Root Lifter черный</h2></li>
							<li><a href="http://hometech.elitno.net/lozhka-dlya-chistki-yazyka-tce-k-irrigatoru-waterpik-wpe-wpe-sht-400r.php"><img src="photos/2329dcbac292ecd0d78d4e254bf209df.jpeg" alt="лампы для солярия купить Ложка для чистки языка TC-100E к ирригатору Waterpik WP100E, WP360E (2 шт.)" title="лампы для солярия купить Ложка для чистки языка TC-100E к ирригатору Waterpik WP100E, WP360E (2 шт.)"></a><h2>Ложка для чистки языка TC-100E к ирригатору Waterpik WP100E, WP360E (2 шт.)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>системы массажа Подушка массажная</h1>
						<div class="tb"><p>Цена: от <span class="price">3000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16728.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Универсальная массажная подушка эффективно помогает при болях в суставах и спине, оказывает благотворное влияние на иммунитет, а также стимулирует кровообращение. Модель производит приятный разминающий массаж сразу в двух направлениях, также есть функция обогрева.</p><p>В результате применения вы повысите сопротивляемость ежедневным стрессам, укрепите мышцы, улучшите кровообращение, а также снимите усталость и напряжение.</p><p><b>Функции:</b></p><ul type=disc><li>вид массажа - разминающий <li>2 направления вращения массажных роликов <li>6 массажных элементов <li>функция обогрева</li></ul><p><b>Применение:</b></p><ul type=disc><li>Эффективно помогают при болях в суставах, мышцах спины, головных болях <li>Оказывают благотворное влияние на иммунную систему <li>Активизируют кровообращение</li></ul><p><b>Результаты воздействия растирающего массажа на организм:</b></p><ul type=disc><li>Устраняет нервное переутомление, напряжение, усталость, головные боли <li>Повышает сопротивляемость ежедневным стрессам <li>Способствует улучшению кровообращения в организме <li>Способствует выведению солеобразований из организма <li>Профилактика целлюлита <li>Укрепляет мышцы спины <li>Исправляет осанку <li>Позволяет проводить рефлекторный массаж стоп ног</li></ul><p><b>Технические характеристики:</b></p><ul type=disc><li>Роликовый массаж есть <li>Число массажных элементов: 6 <li>Направления вращения роликов: 2 <li>Материал массажных роликов: пластмасса <li>Функция подогрева: есть <li>Материал обшивки: кожзаменитель <li>Размер массажной поверхности (ДхВхШ): 45x31х10 см <li>Вес: 2,6 кг <li>Напряжение AC: 220–230В <li>Частота: 50–60Гц <li>Мощность: 20Вт</li></ul><p><b>Противопоказания в применении массажных подушек:</b></p><ul type=disc><li>Беременность <li>Операция на позвоночнике, если после операции прошло менее 1 года <li>Наличие имплантантов в области позвоночника <li>Острые воспалительные процессы <li>Повышенное или пониженное АД на день принятия массажа <li>Повышенная температура тела на день принятия массажа <li>Онкология <li>Остеопороз 4-й степени</li></ul><p><b>Страна: </b>Китай.</p><p><b>Гарантия:</b> 1 год.</p> системы массажа</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/bd4f4a0171189fffb9c852e095d9e936.jpeg" alt="виды завивки волос фото Ирригатор полости рта Bremed BD 7200" title="виды завивки волос фото Ирригатор полости рта Bremed BD 7200"><div class="box" page="irrigator-polosti-rta-bremed-bd-2300r"><span class="title">виды завивки волос фото Ирригатор полости рта Bremed BD 7200</span><p>от <span class="price">2300</span> руб.</p></div></li>
						<li><img src="photos/92ff75b9dfa5ef091ca17cf4b292a150.jpeg" alt="ровента фен щетка цена Термопояс для похудения Trimmer" title="ровента фен щетка цена Термопояс для похудения Trimmer"><div class="box" page="termopoyas-dlya-pohudeniya-trimmer-300r"><span class="title">ровента фен щетка цена Термопояс для похудения Trimmer</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/cccc1362e9d5a3d5ef09f8d62f196587.jpeg" alt="массаж в гомеле Миостимулятор для мышц живота Beurer EM 35" title="массаж в гомеле Миостимулятор для мышц живота Beurer EM 35"><div class="box" page="miostimulyator-dlya-myshc-zhivota-beurer-em-2000r"><span class="title">массаж в гомеле Миостимулятор для мышц живота Beurer EM 35</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/131e52acd4018df8f469d0b420949fb3.jpeg" alt="солярий великий новгород Вибромассажер Clear Fit Life Beauty CF 120 L" title="солярий великий новгород Вибромассажер Clear Fit Life Beauty CF 120 L"><div class="box" page="vibromassazher-clear-fit-life-beauty-cf-l-7490r"><span class="title">солярий великий новгород Вибромассажер Clear Fit Life Beauty CF 120 L</span><p>от <span class="price">7490</span> руб.</p></div></li>
						<li class="large"><img src="photos/54c062a60377c846855d76f8df46eba9.jpeg" alt="машинки для стрижки эльдорадо Массажер Beurer FM38 для ног" title="машинки для стрижки эльдорадо Массажер Beurer FM38 для ног"><div class="box" page="massazher-beurer-fm-dlya-nog-2300r"><span class="title">машинки для стрижки эльдорадо Массажер Beurer FM38 для ног</span><p>от <span class="price">2300</span> руб.</p></div></li>
						<li class="large"><img src="photos/08f3884e56446c62ad73af91ace63c80.jpeg" alt="мебельное зеркало Гидромассажная ванночка для ног Beurer FB20" title="мебельное зеркало Гидромассажная ванночка для ног Beurer FB20"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-2350r"><span class="title">мебельное зеркало Гидромассажная ванночка для ног Beurer FB20</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li class="large"><img src="photos/5c6f38767cbe78cc7cf3904289557c01.jpeg" alt="зеркало стальное Гидромассажная ванночка для ног Beurer FB25" title="зеркало стальное Гидромассажная ванночка для ног Beurer FB25"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-2650r"><span class="title">зеркало стальное Гидромассажная ванночка для ног Beurer FB25</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li><img src="photos/b90cb28c59b4b83e0ed4774137db931c.jpeg" alt="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775" title="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775"><div class="box" page="pribor-kosmeticheskiy-mnogofunkcionalnyy-gezatone-galvanic-beauty-spa-m-2240r"><span class="title">ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/7b364eeb2d902e56ea6ba4e90d9f40ee.jpeg" alt="массаж большой груди Прибор для ухода за кожей лица Gezatone Ionic-Ultrasonic m360" title="массаж большой груди Прибор для ухода за кожей лица Gezatone Ionic-Ultrasonic m360"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-ionicultrasonic-m-1600r"><span class="title">массаж большой груди Прибор для ухода за кожей лица Gezatone Ionic-Ultrasonic m360</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/d881128511cd03aa90feb76747b82b80.jpeg" alt="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл" title="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-apelsinovyy-v-kartridzhe-ml-140r"><span class="title">курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл</span><p>от <span class="price">140</span> руб.</p></div></li>
						<li><img src="photos/2fc7af019baa319a2dcc770556eb82e7.jpeg" alt="крем для солярия отзывы Фен Atlanta АТН-882N" title="крем для солярия отзывы Фен Atlanta АТН-882N"><div class="box" page="fen-atlanta-atnn-450r"><span class="title">крем для солярия отзывы Фен Atlanta АТН-882N</span><p>от <span class="price">450</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("podushka-massazhnaya-3000r.php", 0, -4); if (file_exists("comments/podushka-massazhnaya-3000r.php")) require_once "comments/podushka-massazhnaya-3000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="podushka-massazhnaya-3000r.php" method="post" onsubmit="return checkForm(this)">
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