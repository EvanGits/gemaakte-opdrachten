<?php
	if($_POST["type"] == "scan")
	{
		$array = [];
		foreach(scandir("../../games/") as $filename)
		{
			$filePath = "../../games/" . $filename;
			if(is_dir($filePath) && $filename != "." && $filename != "..")
			{
				$array[] = $filename . ".exe";
			}
		}
		
		if(count($array) > 0)
		{
			echo json_encode($array);
		}
		else
		{
			echo json_encode(false);
		}
	}
	else if($_POST["type"] == "load")
	{
		$basePath = "../../games/" . $_POST["game"] . "/";
		if(
			file_exists($basePath . $_POST["game"] . ".js")
		)
		{
			$array = [
				"js" => [],
				"css" => []
			];
			
			$array["js"][] = "games/" . $_POST["game"] . "/" . $_POST["game"] . ".js";
			
			foreach(scandir($basePath . "js/") as $filename)
			{
				if(!is_dir($filename))
				{
					$array["js"][] = "games/" . $_POST["game"] . "/js/" . $filename;
				}
			}
			
			foreach(scandir($basePath . "css/") as $filename)
			{
				if(!is_dir($filename))
				{
					$array["css"][] = "games/" . $_POST["game"] . "/css/" . $filename;
				}
			}
			
			if(count($array["css"]) > 0)
			{
				echo json_encode($array);
			}
			else
			{
				echo json_encode(false);
			}
		}
		else
		{
			echo json_encode(false);
		}
	}
?>