<?php

require_once "config.php";

class Functions
{
	# Функция обработки csv файла.
	public function ParserCSV($csv)
	{
		// Считываем содержимое файла *.csv в временный массив.
		$content = file($csv);
		
		// Обрабатываем содержимое элементов временного массива и помещаем все в массив $products.
		$products = array();
		foreach ($content as $value)
		{
			$value = preg_replace('/","/', '###', $value);
			$value = preg_replace('/"/', '', $value);
			
			$products[] = preg_split('/###/', $value);
		}
		
		// Создаем массив, который содержит в себе все товары в виде отдельных массиов.
		$index = 1;
		$result = array();
		$keys = array('title', 'description', 'price', 'url', 'image');
		foreach ($products as $product)
		{
			foreach ($product as $key => $value)
			{
				$result[$index][$keys[$key]] = trim($value);
			}
			
			$index++;
		}
		
		// Возвращаем результат.
		return $result;
	}
	
	# Функция транслитерации.
	private function Convert($string)
	{
		$string = preg_replace('/[0-9]+/', '', $string);
		
		// Массив в котором видно "Что на Что" будет заменено в ходе выполнения функции.
		$converter = array('а' => 'a',		'б' => 'b',		'в' => 'v',
						   'г' => 'g',		'д' => 'd',   	'е' => 'e',
						   'ё' => 'e',		'ж' => 'zh',	'з' => 'z',
						   'и' => 'i',	    'й' => 'y',   	'к' => 'k',
						   'л' => 'l',		'м' => 'm',   	'н' => 'n',
						   'о' => 'o',   	'п' => 'p',   	'р' => 'r',
						   'с' => 's',   	'т' => 't',   	'у' => 'u',
						   'ф' => 'f',   	'х' => 'h',   	'ц' => 'c',
						   'ч' => 'ch',  	'ш' => 'sh',  	'щ' => 'sch',
						   'ь' => '',		'ы' => 'y',   	'ъ' => '',
						   'э' => 'e',   	'ю' => 'yu',  	'я' => 'ya',

						   'А' => 'A',   	'Б' => 'B',   	'В' => 'V',
						   'Г' => 'G',   	'Д' => 'D',   	'Е' => 'E',
						   'Ё' => 'E',   	'Ж' => 'Zh',  	'З' => 'Z',
						   'И' => 'I',   	'Й' => 'Y',   	'К' => 'K',
						   'Л' => 'L',   	'М' => 'M',   	'Н' => 'N',
						   'О' => 'O',   	'П' => 'P',   	'Р' => 'R',
						   'С' => 'S',   	'Т' => 'T',   	'У' => 'U',
						   'Ф' => 'F',   	'Х' => 'H',   	'Ц' => 'C',
						   'Ч' => 'Ch',  	'Ш' => 'Sh',  	'Щ' => 'Sch',
						   'Ь' => '',		'Ы' => 'Y',   	'Ъ' => '',
						   'Э' => 'E',   	'Ю' => 'Yu',  	'Я' => 'Ya',

						   '+' => '',		'-' => '',		'.' => '',
						   ',' => '',		'=' => '',		'?' => '',
						   '%' => '',		';' => '',		':' => '',
						   '^' => '',		'$' => '',		'#' => '',
						   '!' => '',		'@' => '',		'"' => '',
						   '№' => '',		'_' => '',		'/' => '',
						   '|' => '',		'[' => '',		']' => '',
						   "'" => '',		'&' => '',		'*' => '',
						   '('  => '', 		')' => '');
		
		// Выполняем транслитерацию.
		$after = strtr($string, $converter);
		$after = trim($after);
		
		// Выполняем замену множественных пробелов на знак "-".
		$result = preg_replace('/[ ]+/', '-', strtolower($after));

		// Возвращаем результат.
		return $result;
	}

	# Функция генерации php файлов.
	public function CreatesPages($domains = array(), $products = array())
	{	
		// Определяем сколько товаров будет содержать в себе каждый из доменов.
		$hp = intval(count($products) / count($domains));
		
		// Определяем с каким шагов будем вносить одну внешнюю ссылку.
		$step = $hp / (($hp * 10) / 100);
		
		// Цикл формирования массива, элементы которого будут равны элементам массива продукторв которые будут иметь одну внешнюю ссылку.
		for ($i = 0; $i < $hp; $i += $step)
		{
			$fp[] = $i;
		}
		
		// Разбиваем массив всех товаров на значение $hp переменной.
		$elements = array();
		$elements = array_chunk($products, $hp);
		
		// Цикл в котором формируюется модифицированый массив $products.
		$products = array();
		foreach ($domains as $key => $domain)
		{
			$products[$domain['domain']] = $elements[$key];
			
			// Массив ключевых слов.
			$keywords = file(KEYWORDS, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
			
			// Цикл формирования массива внутренних ссылок.
			$urls[$domain['domain']] = array();
			for ($j = 0; $j < count($products[$domain['domain']]); $j++)
			{
				// Переменная которая формирует ссылку из названия товара и его цены.
				$url = $this->Convert($products[$domain['domain']][$j]['title']) . '-' . $products[$domain['domain']][$j]['price'] . 'r';
				
				// Временный массив, нужен для определения количества дубликатов товаров имеющих такой же $url.
				$temp = array();
				foreach ($urls[$domain['domain']] as $value)
				{
					// Проверяем ссылку которая пришла на наявность дубликатов.
					if (preg_match("/$url.+/", $value['uri']))
					{
						// Дубликаты заносив в временный массив.
						$temp[] = $value;
					}					
				}
				
				// Подсчитываем количество дубликатов и заносим его в временную переменную $count. 
				$count = count($temp);
				
				// Удаляем временный массив.
				unset($temp);
				
				// Перемешиваем массив ключевых слов.
				shuffle($keywords);
				
				// Проверяем по условию переменную $count и заносим ссылку на товар в массив.
				if ($count > 0)
				{
					// Если есть дубликаты, тогда их количество увеличуем на единицу и заносим новую ссылку в массив.
					$urls[$domain['domain']][$j]['title'] = $products[$domain['domain']][$j]['title'];
					$urls[$domain['domain']][$j]['description'] = $products[$domain['domain']][$j]['description'];
					$urls[$domain['domain']][$j]['image'] = $products[$domain['domain']][$j]['image'];
					$urls[$domain['domain']][$j]['price'] = $products[$domain['domain']][$j]['price'];
					$urls[$domain['domain']][$j]['keyword'] = $keywords[$j];
					$urls[$domain['domain']][$j]['uri'] = 'http://' . $domain['domain'] . '/' . $url . '-' . ++$count . '.php';
				}
				else
				{
					// Если нету дубликатов, просто заносим ссылку в массив.
					$urls[$domain['domain']][$j]['title'] = $products[$domain['domain']][$j]['title'];
					$urls[$domain['domain']][$j]['description'] = $products[$domain['domain']][$j]['description'];
					$urls[$domain['domain']][$j]['image'] = $products[$domain['domain']][$j]['image'];
					$urls[$domain['domain']][$j]['price'] = $products[$domain['domain']][$j]['price'];
					$urls[$domain['domain']][$j]['keyword'] = $keywords[$j];
					$urls[$domain['domain']][$j]['uri'] = 'http://' . $domain['domain'] . '/' . $url . '.php';
				}
				
				// Удаляем временную переменную.
				unset($count);

				// Заносим каждую ссылку каждого элемента в основной массив всех продуктов.
				$products[$domain['domain']][$j]['uri'] = substr($urls[$domain['domain']][$j]['uri'], strlen('http://' . $domain['domain'] . '/'));
			}
		}
			
		foreach ($domains as $key => $domain)
		{
			// Переменная которая нужная для создания карты сайта в формате *.xml.
			$xml = new DOMDocument('1.0', 'utf-8');
			$xml->formatOutput = true;
			$uri = $xml->appendChild($xml->createElement('urlset'));

			// Цикл формирования внутринних и внешних ссылок, создание папок сайтов, создание *.php файлов, создание карты сайтов.
			for ($j = 0; $j < count($products[$domain['domain']]); $j++)
			{	
				$temp = array();
				$temp = $urls;
				unset($temp[$domain['domain']][$j]);
				
				// Выбираем $n случайных ссылок из массива ссылок и заносим в временный массив.
				$random = array_rand($temp[$domain['domain']], 16);
				
				// Цикл в котором заносим $n внутренних ссылок в каждый из товаров.
				for ($i = 0; $i < 16; $i++)
				{
					$products[$domain['domain']][$j]['links'][] = $temp[$domain['domain']][$random[$i]];
				}
				
				// Удаляем временный массив.
				unset($temp);
				unset($random);
			
				$elements = array();
				$elements = $urls;
				unset($elements[$domain['domain']]);

				$out = array();
				foreach ($elements as $element)
				{
					foreach ($element as $value)
					{
						$out[] = $value;
					}
				}
				
				$random = array_rand($out, count($fp));
				
				$i = 0;
				if (in_array($j, $fp))
				{
					$products[$domain['domain']][$j]['links'][0] = $out[$random[$i++]];
				}

				// Удаляем временный массив.
				unset($random);
				
				// Путь к текущему сайту.
				$path = 'sites/' . $domain['domain'] . '/';
				
				// Если директория отсутствует тогда создаем её. 
				if (is_dir($path) == false)
				{
					mkdir($path, 0777);
				}
				
				// Создаем страницы сайта в формате *.php.
				$handle = fopen($path . $products[$domain['domain']][$j]['uri'], 'w');
				
				$keyword = file(KEYWORDS, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
				shuffle($keyword);
								
				$source = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";        
				$string = str_shuffle(str_repeat($source, rand(1, 7)));
				$subid = substr($string, rand(0,strlen($string)-7), 7);
				
				$admitad = $domain['admitad'] . "/subid/$subid/";
				
				/*
				preg_match_all('/<dt>(.+?)<\/dt>/', $products[$domain['domain']][$j]['description'], $keys);
				preg_match_all('/<dd>(.+?)<\/dd>/', $products[$domain['domain']][$j]['description'], $values);
				*/
				
				$vars = array('title' 		=> $products[$domain['domain']][$j]['title'],
							  'description' => $products[$domain['domain']][$j]['description'],
							  'price' 		=> $products[$domain['domain']][$j]['price'],
							  'url' 		=> $products[$domain['domain']][$j]['url'],
							  'image' 		=> $products[$domain['domain']][$j]['image'],
							  'uri'			=> $products[$domain['domain']][$j]['uri'],
							  'links' 		=> $products[$domain['domain']][$j]['links'],
//							  'keywords'	=> $products[$domain['domain']][$j]['keywords'],
							  'name'		=> $domain['name'],
							  'keyword'		=> $keyword[0],
							  'admitad'		=> $admitad);
//							  'preview'		=> strip_tags($keys[0][0] . ' ' . $values[0][0])
				
				fwrite($handle, $this->Template($domain['template'] . 'single.php', $vars));
				fclose($handle);

				$urn = $uri->appendChild($xml->createElement('url'));
				$loc = $urn->appendChild($xml->createElement('loc'));
				$loc->appendChild($xml->createTextNode('http://' . $domain['domain'] . '/' . $products[$domain['domain']][$j]['uri']));			
				
				// Создаем файл карты сайта в формате *.xml.
				$xml->save($path . 'sitemap.xml');
			}
			
			$this->CopyDir('common', $path);
			$this->CopyDir($domain['template'] . 'css', $path . 'css');
			$this->CopyDir($domain['template'] . 'images', $path . 'images');
			
			$this->CreatesPage($domain['domain'], $domain['template'], 'index', array('name' => $domain['name'], 'links' => $products[$domain['domain']]));		
			$this->CreatesPage($domain['domain'], $domain['template'], 'sitemap', array('name' => $domain['name'], 'links' => $products[$domain['domain']]));
			$this->CreatesPage($domain['domain'], $domain['template'], 'about', array('name' => $domain['name']));
			$this->CreatesPage($domain['domain'], $domain['template'], 'contact', array('name' => $domain['name']));
			$this->CreatesPage($domain['domain'], $domain['template'], 'privacy', array('name' => $domain['name']));
			$this->CreatesPage($domain['domain'], $domain['template'], 'terms', array('name' => $domain['name']));
			$this->CreatesPage($domain['domain'], $domain['template'], 'header');
			$this->CreatesPage($domain['domain'], $domain['template'], 'footer');
			$this->CreatesPage($domain['domain'], $domain['template'], 'reclame');
		}
		
		#echo '<pre>'; print_r($products); echo '</pre>';
	}

	# Функция создания одиночных страниц.
	private function CreatesPage($domain, $template, $pagename, $vars = array())
	{
		$args = $vars;
		
		$txt = "texts/$pagename.txt";
		if (file_exists($txt))
		{
			$texts = file($txt, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
			$text = array_rand($texts, 1);
			
			$args = $vars;
			$args['text'] = trim($texts[$text]);
		}
		
		$path = "sites/$domain/$pagename.php";
		$handle = fopen($path, 'w');
		fwrite($handle, $this->Template($template . "$pagename.php", $args));
		fclose($handle);
	}
	
	# Функция копирования общих файлов.
	public function CopyDir($source, $target)
	{
		if (is_dir($source))
		{
			@mkdir($target);
			$d = dir($source);
			
			while (FALSE !== ($entry = $d->read()))
			{
				if ($entry == '.' || $entry == '..') continue;
				
				$this->CopyDir("$source/$entry", "$target/$entry");
			}
			
			$d->close();
		}
		else
		{
			copy($source, $target);
		}
	}
	
	# Функция генерации HTML шаблона.
	private function Template($filename, $vars = array())
	{
		foreach ($vars as $key => $value)
		{
			$$key = $value;
		}
		
		ob_start();
		require "$filename";
		return ob_get_clean();     
	}
}

/* End of file functions.php */