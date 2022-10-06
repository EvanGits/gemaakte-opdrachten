<?php
	$iframeArray = [
		1 => "",
		2 => "",
		3 => "",
		4 => "",
		5 => "",
		6 => "",
		7 => "",
		8 => "",
		9 => "",
		10 => "",
		11 => "",
		12 => ""
	];
	$menu = "";
	$popups = "";
	for($i = 1; $i <= 12; $i++)
	{
		$url = $iframeArray[$i];
		$menu .= "<a onclick=\"MenuKeys('F" . $i . "');\">F" . $i . "</a>";
		$popups .= "
			<div id='F" . $i . "_popup' class='popup' style='display: none;'>
				<div onclick=\"PopupController('F" . $i . "_popup');\" class='close-box'>
					<svg viewbox='0 0 40 40'><path class='close-x' d='M 10,10 L 30,30 M 30,10 L 10,30'></svg>
				</div>
				<iframe src=" . $url . "></iframe>
			</div>
		";
	}
?>

<!DOCTYPE html>
<html>
    <head>
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="js/css_color_names.js"></script>
		<script type="text/javascript" src="js/commands.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
		<script type="text/javascript" src="js/init.js"></script>
		<script type="text/javascript" src="games/base.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TopDownDesign</title>
    </head>
    <body>
        <div id="menu">
            <?php echo $menu; ?>
        </div>
        <div id="container">
            <div id="history"></div>
            <span id="loader">|</span>
            <span id="cursor" style="display: none;">
                <div>C:\>&nbsp;</div>
                <div id="command_line"></div>
                <div>_</div>
            </span>
        </div>
        <div id="footer"></div>
		<?php echo $popups; ?>
    </body>
</html>