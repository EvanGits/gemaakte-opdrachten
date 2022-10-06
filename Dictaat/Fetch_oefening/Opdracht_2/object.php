

<?php
$straat= $_POST['Straat'];
$stad= $_POST['Stad'];

if ($straat == 'a' && $stad == 'b')  
{

	$varA = 'De gegevens zijn succesvol verstuurd.'; 
}
else
{
	$varA = 'De overdracht is mislukt.'; 
	
}
echo json_encode($varA);



   //formData.append('Straat', 'Molenstraat'); 
   //formData.append('Stad', 'Amsterdam'); 

?>


