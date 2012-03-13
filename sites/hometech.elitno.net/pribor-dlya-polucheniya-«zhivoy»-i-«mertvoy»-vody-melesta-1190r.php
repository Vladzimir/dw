<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("pribor-dlya-polucheniya-«zhivoy»-i-«mertvoy»-vody-melesta-1190r.php","массаж накидка");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("pribor-dlya-polucheniya-«zhivoy»-i-«mertvoy»-vody-melesta-1190r.php", $nick, $comment);
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
		<title>массаж накидка Прибор для получения «Живой» и «Мертвой» воды Мелеста  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж накидка, ремонт эпиляторов, зеркалом блестит река, домашние эпиляторы отзывы, солярий киров, зеркало соната, где купить ирригатор, вакуумный массаж купить, подглядывание в солярии, произведение зеркало, аппарат дарсонваль отзывы, солярий во владимире, солярий в новосибирске, почему закрывают зеркала,  массаж рекомендации">
		<meta name="description" content="массаж накидка Даже в сказках глоток Живой воды оживлял добрых молодцев. Самое удивительное, чт...">
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
						<a class="photo" href="photos/5a23805b006653a6cc417fee14de0eae.jpeg" title="массаж накидка Прибор для получения «Живой» и «Мертвой» воды Мелеста"><img src="photos/5a23805b006653a6cc417fee14de0eae.jpeg" alt="массаж накидка Прибор для получения «Живой» и «Мертвой» воды Мелеста" title="массаж накидка Прибор для получения «Живой» и «Мертвой» воды Мелеста -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-s-10000r.php"><img src="photos/333858fb93c0b690fc806cdc87692d49.jpeg" alt="ремонт эпиляторов Стайлер Corioliss С2" title="ремонт эпиляторов Стайлер Corioliss С2"></a><h2>Стайлер Corioliss С2</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-dvustoronnee-babyliss-e-s-mi-kratnym-uvelicheniem-3190r.php"><img src="photos/c31991b00bf6f0f8d0461c8a88e7db13.jpeg" alt="зеркалом блестит река Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением" title="зеркалом блестит река Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением"></a><h2>Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением</h2></li>
							<li><a href="http://hometech.elitno.net/nabor-standartnyh-nasadok-k-irrigatoru-sht-donfeel-orm-220r.php"><img src="photos/84dba165c6ff6432b2067b74a9b58205.jpeg" alt="домашние эпиляторы отзывы Набор стандартных насадок к ирригатору (2 шт) DONFEEL OR-820M" title="домашние эпиляторы отзывы Набор стандартных насадок к ирригатору (2 шт) DONFEEL OR-820M"></a><h2>Набор стандартных насадок к ирригатору (2 шт) DONFEEL OR-820M</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж накидка Прибор для получения «Живой» и «Мертвой» воды Мелеста</h1>
						<div class="tb"><p>Цена: от <span class="price">1190</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_216.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Даже в сказках глоток Живой воды оживлял добрых молодцев. Самое удивительное, что «живая вода» встречается и в реальности. Более того, существует и «мертвая вода».</p><p><strong>Прибор для получения Живой воды Мелеста </strong>по вашему желанию превратит обыкновенную воду в живую! Все очень просто: «живую» и «мертвую» воду можно получить методом электролиза. Используя медицинские термины, живую воду называют </p><p>католитом. Она является щелочной водой, усиливает биологические процессы, обладает повышенной растворяющей и экстрагирующей способностью и абсорционно-химически активна. Кислотную воду называют «мертвой водой» или анолитом. Такая вода обладает заживляющим действием. Она замедляет биологические процессы.</p><p>Применение католита и анолита, то есть «живой» и «мертвой» воды помогает справляться с такими болезнями как аллергия, гепатит, псориаз, женскими заболеваниями (кольпит, эрозия шейки матки) и еще 49 болезнями, описанными в инструкции, входящей в комплект прибора Мелеста.</p><p><b>Живая вода</b> (щелочная) - pH – 8,0-10,5 един. Живая вода повышает кровяное давление, дарует бодрость и тонизирует весь организм. Она великолепно заживляет раны, язвы, помогает при лечении аденомы предетальной железы, при профилактике атеросклероза, остеохондроза. Ее также успешно используют в садоводстве и сельском хозяйстве. Живая вода ускоряет рост семян, оживляет увядшие цветы, стимулирует их цветение. </p><p><b>Мертвая вода</b> (кислотная) - pH – 2,5-5,5 един. Мертвая проявляет успокаивающее действие. Она благотворно влияет на нервную систему, снижает давление, улучшает сон. Эффекты мертвой воды давно замены стоматологами. Ее применяют при лечении пародонтоза, при заболевании десен, она хорошо растворяет камни в зубах. Мертвую воды применяют для дезинфекции помещений, одежды и т.п. Следует отметить, что если растворить в такой воде 5 граммов поваренной соли, обеззараживающие свойства воды многократно усиливаются.</p><p>О пользе «живой» и «мертвой» воды в своем шоу «Малахов плюс» постоянно упоминает известный целитель Малахов.</p><p><strong>Технические характеристики: </strong></p><ul type=disc><li>Пищевая стальная пластина <li>Питание: напряжение 220В, частота 50Гц <li>Потребляемая мощность: не более 110 Вт <li>Объем активированной воды, анолита: 0,2 – 0,3 л <li>Объем активированной воды, католита: 0,6 – 0,7 л <li>Время обработки воды: 3-10 мин <li>Габаритные размеры: 120 х 120 х 180 мм <li>Вес: 500 г</li></ul><p><strong>Производство:</strong> Россия</p><p><strong>Гарантия: </strong>12 месяцев</p> массаж накидка</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9a2bc44bf6a5d738109f051af1b10196.jpeg" alt="солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M" title="солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M"><div class="box" page="nabor-nazalnyh-nasadok-k-irrigatoru-sht-donfeel-orm-270r"><span class="title">солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M</span><p>от <span class="price">270</span> руб.</p></div></li>
						<li><img src="photos/8599b1c1b0dc418f3853c3b1676d22a5.jpeg" alt="зеркало соната Массажер Супербол" title="зеркало соната Массажер Супербол"><div class="box" page="massazher-superbol-600r"><span class="title">зеркало соната Массажер Супербол</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/ef4ef6c6f5e00f1d9e72c25d1c37f61e.jpeg" alt="где купить ирригатор Гидромассажная ванна для ног Maxima MFM-3101" title="где купить ирригатор Гидромассажная ванна для ног Maxima MFM-3101"><div class="box" page="gidromassazhnaya-vanna-dlya-nog-maxima-mfm-2190r"><span class="title">где купить ирригатор Гидромассажная ванна для ног Maxima MFM-3101</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/e30becce6238c35820065daabf81bee7.jpeg" alt="вакуумный массаж купить Массажная подушка US-Medica Apple SMP-19" title="вакуумный массаж купить Массажная подушка US-Medica Apple SMP-19"><div class="box" page="massazhnaya-podushka-usmedica-apple-smp-4500r"><span class="title">вакуумный массаж купить Массажная подушка US-Medica Apple SMP-19</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li class="large"><img src="photos/0cb3f14d82c590ca1830a52fdee51586.jpeg" alt="подглядывание в солярии BAMPITS 057A Заколка для придания объема" title="подглядывание в солярии BAMPITS 057A Заколка для придания объема"><div class="box" page="bampits-a-zakolka-dlya-pridaniya-obema-400r"><span class="title">подглядывание в солярии BAMPITS 057A Заколка для придания объема</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li class="large"><img src="photos/1b8045a8b00517a46ef7bcbf121b878d.jpeg" alt="произведение зеркало Лосьон после депиляции Rica, очищающий с маслом авокадо, 100мл" title="произведение зеркало Лосьон после депиляции Rica, очищающий с маслом авокадо, 100мл"><div class="box" page="loson-posle-depilyacii-rica-ochischayuschiy-s-maslom-avokado-ml-600r"><span class="title">произведение зеркало Лосьон после депиляции Rica, очищающий с маслом авокадо, 100мл</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li class="large"><img src="photos/616ba570246d7cf4f5151a66514ad3cf.jpeg" alt="аппарат дарсонваль отзывы Заколки для волос в наборе Bradex Beauty and Health" title="аппарат дарсонваль отзывы Заколки для волос в наборе Bradex Beauty and Health"><div class="box" page="zakolki-dlya-volos-v-nabore-bradex-beauty-and-health-500r"><span class="title">аппарат дарсонваль отзывы Заколки для волос в наборе Bradex Beauty and Health</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/fe21e6506e33786f24be8409558d7b64.jpeg" alt="солярий во владимире Фен Vitek VT-2262" title="солярий во владимире Фен Vitek VT-2262"><div class="box" page="fen-vitek-vt-1050r"><span class="title">солярий во владимире Фен Vitek VT-2262</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/f98698f167b448092a3ab477739f68fd.jpeg" alt="солярий в новосибирске Фен Braun HD710" title="солярий в новосибирске Фен Braun HD710"><div class="box" page="fen-braun-hd-2240r"><span class="title">солярий в новосибирске Фен Braun HD710</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/1ad6a3b32c59fb28206bf73e4dc30b08.jpeg" alt="почему закрывают зеркала Фен Atlanta АТН-86" title="почему закрывают зеркала Фен Atlanta АТН-86"><div class="box" page="fen-atlanta-atn-450r"><span class="title">почему закрывают зеркала Фен Atlanta АТН-86</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/af8481ceec103dd0cc1ed7ecb1e56b05.jpeg" alt="массаж октябрьская Чистящая насадка Philips HX6011 - 02 для Sonicare Flex Care, 1шт." title="массаж октябрьская Чистящая насадка Philips HX6011 - 02 для Sonicare Flex Care, 1шт."><div class="box" page="chistyaschaya-nasadka-philips-hx-dlya-sonicare-flex-care-sht-400r"><span class="title">массаж октябрьская Чистящая насадка Philips HX6011 - 02 для Sonicare Flex Care, 1шт.</span><p>от <span class="price">400</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("pribor-dlya-polucheniya-«zhivoy»-i-«mertvoy»-vody-melesta-1190r.php", 0, -4); if (file_exists("comments/pribor-dlya-polucheniya-«zhivoy»-i-«mertvoy»-vody-melesta-1190r.php")) require_once "comments/pribor-dlya-polucheniya-«zhivoy»-i-«mertvoy»-vody-melesta-1190r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="pribor-dlya-polucheniya-«zhivoy»-i-«mertvoy»-vody-melesta-1190r.php" method="post" onsubmit="return checkForm(this)">
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