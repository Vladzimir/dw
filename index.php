<?php

require_once "functions.php";
require_once "config.php";

class Index
{
	# Свойства.
	public $products;
	private $domains;

	# Виртуальный обработчик запроса.
	public function Start()
	{
		$Generator = new Functions();
		
		#$this->domains = eval(DOMAINS);
		$this->domains = unserialize(DOMAINS);
		$this->products = $Generator->ParserCSV(CSV);

		$Generator->CreatesPages($this->domains, $this->products);
	}
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Генератор статических сайтов</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php		
			$go = new Index();
			$go->Start();
		?>
	</body>
</html>

<?php /* End of file index.php */ ?>