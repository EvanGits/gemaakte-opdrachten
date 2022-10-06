<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Evan Geerts</title>
	</head>
	<body>
		<?php
		{
        if(isset($_POST['BMI']))
//gewicht/(lengte * lengte)
        //echo $_POST['lengte']; 
        $BMI= $_POST['gewicht']/($_POST['lengte']*$_POST['lengte']); 
       echo $BMI; 
        
        if($BMI<18.5)
        {
        	echo "<br>U bent te licht. Probeer aan te komen."; 
        }

        elseif($BMI>18.5 && $BMI<=25)
        	{
        	echo "<br>U hebt een prima gewicht. Houden zo!";
        	}
        elseif($BMI>25)
       	 {
       	 	echo "<br>U bent te zwaar. Probeer af te vallen.";
        	}
        else
        {
        	echo "Voer uw gewicht en lengte in.";
        }

        	?>
 
<form method = "post" action="">
			<label>Lengte</label>
			<input type="text" name="lengte">

			<label>Gewicht</label>
			<input type="text" name="gewicht">

			<input type = "submit" name = "BMI" value="BMI">
		</form>
		<?php } 
		?>

	</body>
</html>