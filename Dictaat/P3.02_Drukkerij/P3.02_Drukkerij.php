<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Evan Geerts</title>
	</head>
	<body>
		<?php
		// DE ONDERSTAANDE REGEL ZORGT ER VOOR DAT JE CODE WORDT UITGEVOERD OP HET MOMENT DAT JE OP DE BEREKEN KNOP DRUKT. LATER LEER JE HOE DIT PRECIES WERKT.
		
		if(isset($_POST['Bereken'])) {
		
       		 $aantal = $_POST['aantal']; 
			 $Bedrag= 55+(0.03*$_POST['aantal']);
			 $BTW= 0.21*$_POST['Bedrag']; 
			 $Totaal= $_POST['Bedrag']+$_POST['BTW']; 

			 $Bereken= $Bedrag+$BTW+$Totaal; 
       		echo $Bereken; 
       		echo "<hr>"; 
       		echo $aantal; 
       		echo $Bedrag; 
       		echo $BTW;
       		echo $Totaal;
			/* STAP 2: Bekijk goed het PSD op ItsLearning. Maak hieronder de code gebaseerd op dit PSD */
			
		}
		else
		{
		?>
		
		<form method = "post" action="">
			<label>Aantal</label>
			<input type="number" name="aantal">

			<input type = "submit" name = "Bereken" value="Bereken">
		</form>
		<!-- STAP 1: maak in HTML een formulier met daarop 1 veld (aantal) en 1 knop (Bereken). De method moet in dit geval POST zijn en de action ""  -->
		<?php
		}
		?>
	</body>
</html>