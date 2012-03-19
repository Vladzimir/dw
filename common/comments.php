<?php

class Comments
{
	public function UserComment($page, $nick, $comment)
	{
		if (!is_dir('comments')) mkdir('comments', 0777);

		$file = "comments/$page";
		$string = '<li><span><strong>' . $nick . '</strong> в <strong>' . $this->GetTime() . '</strong> написал(a):</span><img src="avatars/default.jpg" alt="avatar"><p>' . $comment . '</p></li>' . "\n";

		file_put_contents($file, $string, FILE_APPEND | LOCK_EX);
	}

	public function AutoComment($page, $title)
	{
		$percent = rand(1, 100);
		if ($percent < 55)
		{
			$file = strstr($page, '.', true) . '-comments.php';
			$string = '<li><span><strong>' . $this->GetNick() . '</strong> в <strong>' . $this->GetTime() . '</strong> написал(a):</span><img src="' . $this->GetAvatar() . '" alt="avatar"><p>' . $this->GetComment($title) . '</p></li>' . "\n";

			file_put_contents($file, $string, FILE_APPEND | LOCK_EX);
		}
	}

	private function GetNick()
	{
		$nicknames = file('nicknames.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		$nick = array_rand($nicknames, 1);

		return count($nick) > 0 ? trim($nicknames[$nick]) : 'Аноним';
	}

	private function GetAvatar()
	{
		$avatars = glob('avatars/*.jpg', GLOB_NOSORT);
		$avatar = array_rand($avatars, 1);

		return count($avatar) > 0 ? trim($avatars[$avatar]) : 'avatars/default.jpg';
	}

	private function GetComment($title)
	{
		$word = explode(" ", $title);
		$cache = md5($word[0]);
		$file = "cache/$cache.txt";

		if (!file_exists($file) OR $this->CheckCache($file) > 172800)
		{
			$query = urlencode($word[0]);

			$elements = json_decode(file_get_contents("http://search.twitter.com/search.json?q=$query&lang=ru&rpp=100"));

			$comments = array();
			foreach ($elements->results as $element)
			{
				$comments[] = preg_replace('/(#|RT|@[\w\d]+:?|http:\/\/[\w\.\d\/]+)/', '', $element->text);
			}
			
			$comments = array_unique($comments);
			
			file_put_contents($file, implode("\n", $comments));
			
			$comment = array_rand($comments, 1);

			return trim($comments[$comment]);
		}
		else
		{
			$comments = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

			$comment = array_rand($comments, 1);

			return trim($comments[$comment]);
		}
	}

	private function GetTime()
	{
		$time = gmdate("H:i:s", time() + 7200);

		return $time;
	}

	private function CheckCache($file)
	{
		$difference = time() - filemtime($file);

		return $difference;
	}
}