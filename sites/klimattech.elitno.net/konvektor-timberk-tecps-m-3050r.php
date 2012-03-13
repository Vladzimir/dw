<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("konvektor-timberk-tecps-m-3050r.php","ремонт двигателя вентилятора");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("konvektor-timberk-tecps-m-3050r.php", $nick, $comment);
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
		<title>ремонт двигателя вентилятора Конвектор Timberk TEC.PS2 M 2000  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="ремонт двигателя вентилятора, обогреватель газовый прометей, инфракрасные обогреватели для теплиц, куплю кондиционер панасоник, замена радиатора кондиционера, кондиционеры обучение, бесплатно без смс скачать конвектор, солнечные водонагреватели цены, профессиональные кондиционеры, вентилятор радиальный цена, монтаж и продажа кондиционеров, контроль вентиляторов, кондиционер типа сплит, водонагреватели аристон 200,  кондиционеры panasonic cs yw9mkd">
		<meta name="description" content="ремонт двигателя вентилятора Timberk TEC.PS2 M 2000 – недорогой конвектор мощностью 2000 Вт с механическим те...">
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
						<a class="photo" href="photos/cdcaff9b41da40fa5a745416f7f2c71e.jpeg" title="ремонт двигателя вентилятора Конвектор Timberk TEC.PS2 M 2000"><img src="photos/cdcaff9b41da40fa5a745416f7f2c71e.jpeg" alt="ремонт двигателя вентилятора Конвектор Timberk TEC.PS2 M 2000" title="ремонт двигателя вентилятора Конвектор Timberk TEC.PS2 M 2000 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-ewh-5170r.php"><img src="photos/4fe7c415c3f8abf4a3a4489663a998e9.jpeg" alt="обогреватель газовый прометей Водонагреватель Neoclima EWH 100" title="обогреватель газовый прометей Водонагреватель Neoclima EWH 100"></a><h2>Водонагреватель Neoclima EWH 100</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-slim-6350r.php"><img src="photos/df88674debddbba6547d083f5d9d509a.jpeg" alt="инфракрасные обогреватели для теплиц Водонагреватель Neoclima Slim 50" title="инфракрасные обогреватели для теплиц Водонагреватель Neoclima Slim 50"></a><h2>Водонагреватель Neoclima Slim 50</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tec-mec-r-in-2630r.php"><img src="photos/f4e9d710fbd678faac0f6dff57612f7b.jpeg" alt="куплю кондиционер панасоник Конвектор Timberk TEC MEC R7.15 IN" title="куплю кондиционер панасоник Конвектор Timberk TEC MEC R7.15 IN"></a><h2>Конвектор Timberk TEC MEC R7.15 IN</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>ремонт двигателя вентилятора Конвектор Timberk TEC.PS2 M 2000</h1>
						<div class="tb"><p>Цена: от <span class="price">3050</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18186.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Timberk TEC.PS2 M 2000 – недорогой конвектор мощностью 2000 Вт с механическим термостатом. Предназначен для обогрева помещений в холодное время года. Установлен может быть только в вертикальном положении на вертикальной стене или жесткой горизонтальной поверхности. Конвектор защищен от перегрева и совершенно безопасен в использовании. Он не накапливает пыль и не выжигает кислород, а высокий класс защиты от влаги IP24 позволяет использовать конвектор даже во влажных помещениях. Абсолютно бесшумная работа стандарта Ultra Silence. </p><p><b>Характеристики:</b></p><ul type=disc><li>Напряжение-частота: 220-230/50 <li>Мощность: 2000 Вт <li>Размеры с ножками: 460х400х550 <li>Вес: 3,9 кг </li></ul><p><b>Производитель: Швеция</b></p> ремонт двигателя вентилятора</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/f44ad2f5610afc7476c1e57bae3c758c.jpeg" alt="замена радиатора кондиционера Конвектор электрический Timberk TEC.PF2 М IN" title="замена радиатора кондиционера Конвектор электрический Timberk TEC.PF2 М IN"><div class="box" page="konvektor-elektricheskiy-timberk-tecpf-m-in-2250r"><span class="title">замена радиатора кондиционера Конвектор электрический Timberk TEC.PF2 М IN</span><p>от <span class="price">2250</span> руб.</p></div></li>
						<li><img src="photos/97697bb3263129cd29c4f8016bca5075.jpeg" alt="кондиционеры обучение Сплит-система NeoClima NS/NU-HAH09INR4" title="кондиционеры обучение Сплит-система NeoClima NS/NU-HAH09INR4"><div class="box" page="splitsistema-neoclima-nsnuhahinr-25750r"><span class="title">кондиционеры обучение Сплит-система NeoClima NS/NU-HAH09INR4</span><p>от <span class="price">25750</span> руб.</p></div></li>
						<li><img src="photos/14f5338daa10664920b3ada5ca4106e0.jpeg" alt="бесплатно без смс скачать конвектор Гигрометр Momert 1756" title="бесплатно без смс скачать конвектор Гигрометр Momert 1756"><div class="box" page="gigrometr-momert-690r"><span class="title">бесплатно без смс скачать конвектор Гигрометр Momert 1756</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/8ccc0ce12e1c50dd303fd18f16834bbd.jpeg" alt="солнечные водонагреватели цены Цифровая портативная метеостанция RST 02559" title="солнечные водонагреватели цены Цифровая портативная метеостанция RST 02559"><div class="box" page="cifrovaya-portativnaya-meteostanciya-rst-1850r"><span class="title">солнечные водонагреватели цены Цифровая портативная метеостанция RST 02559</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li class="large"><img src="photos/4cb207aae88a45db69ae7e61202374e5.jpeg" alt="профессиональные кондиционеры Тепловентилятор Timberk TFH S20NFM" title="профессиональные кондиционеры Тепловентилятор Timberk TFH S20NFM"><div class="box" page="teploventilyator-timberk-tfh-snfm-850r"><span class="title">профессиональные кондиционеры Тепловентилятор Timberk TFH S20NFM</span><p>от <span class="price">850</span> руб.</p></div></li>
						<li class="large"><img src="photos/b117424fdb1286034c7adae3701e4ea7.jpeg" alt="вентилятор радиальный цена Увлажнитель ZENET JSS-13301A" title="вентилятор радиальный цена Увлажнитель ZENET JSS-13301A"><div class="box" page="uvlazhnitel-zenet-jssa-2280r"><span class="title">вентилятор радиальный цена Увлажнитель ZENET JSS-13301A</span><p>от <span class="price">2280</span> руб.</p></div></li>
						<li class="large"><img src="photos/3b7c235a560eb472fba5d62c43866c03.jpeg" alt="монтаж и продажа кондиционеров Увлажнитель воздуха ультразвуковой Boneco AOS U650" title="монтаж и продажа кондиционеров Увлажнитель воздуха ультразвуковой Boneco AOS U650"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-boneco-aos-u-8000r"><span class="title">монтаж и продажа кондиционеров Увлажнитель воздуха ультразвуковой Boneco AOS U650</span><p>от <span class="price">8000</span> руб.</p></div></li>
						<li><img src="photos/2b4391db10a68fe6aa7d6bd5452d399a.jpeg" alt="контроль вентиляторов Уличный газовый обогреватель Neoclima 09HW-B" title="контроль вентиляторов Уличный газовый обогреватель Neoclima 09HW-B"><div class="box" page="ulichnyy-gazovyy-obogrevatel-neoclima-hwb-10250r"><span class="title">контроль вентиляторов Уличный газовый обогреватель Neoclima 09HW-B</span><p>от <span class="price">10250</span> руб.</p></div></li>
						<li><img src="photos/42ef4ed773db3af070e58991dc6661ef.jpeg" alt="кондиционер типа сплит Электрогрелка для спины и шеи Beurer HK55 EASY FIX" title="кондиционер типа сплит Электрогрелка для спины и шеи Beurer HK55 EASY FIX"><div class="box" page="elektrogrelka-dlya-spiny-i-shei-beurer-hk-easy-fix-1900r"><span class="title">кондиционер типа сплит Электрогрелка для спины и шеи Beurer HK55 EASY FIX</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/31848a12d11e109e3ef63b7b8f9542f7.jpeg" alt="водонагреватели аристон 200 Камин Комплект Dimplex Rome DFP7823EB" title="водонагреватели аристон 200 Камин Комплект Dimplex Rome DFP7823EB"><div class="box" page="kamin-komplekt-dimplex-rome-dfpeb-32083r"><span class="title">водонагреватели аристон 200 Камин Комплект Dimplex Rome DFP7823EB</span><p>от <span class="price">32083</span> руб.</p></div></li>
						<li><img src="photos/70f6960cecdf1abff008176a5480b04e.jpeg" alt="программа подбора вентиляторов Камин Dimplex Modern SP 16" title="программа подбора вентиляторов Камин Dimplex Modern SP 16"><div class="box" page="kamin-dimplex-modern-sp-67295r"><span class="title">программа подбора вентиляторов Камин Dimplex Modern SP 16</span><p>от <span class="price">67295</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("konvektor-timberk-tecps-m-3050r.php", 0, -4); if (file_exists("comments/konvektor-timberk-tecps-m-3050r.php")) require_once "comments/konvektor-timberk-tecps-m-3050r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="konvektor-timberk-tecps-m-3050r.php" method="post" onsubmit="return checkForm(this)">
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