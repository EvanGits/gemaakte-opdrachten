<?php  
$pdo = new PDO("mysql:host=localhost;dbname=assesment;","root","");

$sth = $pdo->prepare("CALL assesment_select_JOIN()"); 
            $sth->execute();
            echo "<pre>";
            $result=$sth->fetchAll(); 

/*for ($i= 0; $i < count($result) ; $i++) { 
   echo "<p>"  .$result[$i] ["vraag"]  ."</p>"; 
      }
*/

$i = 0;       
while($i < count($result))
{
    echo "<p>" . $result[$i]["vraag"] . "</p>";
    $vraag_id = $result[$i] ["vraag_id"];

    while (isset($result[$i]["vraag_id"]) && $result[$i]["vraag_id"] == $vraag_id) 
{
    echo "<input type= 'radio' name= 'vraag" . $vraag_id . "'><span>" . $result[$i]["antwoorden"] . "</span>"; 
    
    $i++;

    }
}



$sql = "SELECT * FROM `multiple-choice`";


$stm = $pdo->prepare($sql);
//$rows = $stm->fetchAll(PDO::FETCH_NUM);
//$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
$rows = $stm->fetchAll();
echo "<pre>";
print_r($rows);
echo "</pre>"; 
foreach($rows as $row) { 

    echo $row[0] . " - " . $row[1] . " - " . $row[2] . "<br>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty"; 
    } else {
        echo $name;
    }
}
 
//$stmt = $pdo->query('SHOW DATABASES');
//$databases = $stmt->fetchAll(PDO::FETCH_[multiple_choice]);  

//foreach($databases as $assessment){
// echo $database, '<br>';
//}
?>

<!DOCTYPE html>
<html> 
<head>  
	<meta charset="utf-8">
	<title>dummy_1</title> 
</head>
<body> 
 
<style> 
.rightans{border:3px solid #0f0;background-color: #afa;}.wrongans{border:3px solid #f00;background-color: #faa;}
</style>
<script>
  window.onerror = function(m, u, l){alert('Javascript Error: '+m+'nURL: '+u+'nLine Number: '+l);return true;}
</script>

<script>   
'use strict';
window.onload = init;

function init() { document.getElementById('btn').onclick = validate; 
    document.getElementById('btnclr').onclick = clear;
     
}
function validate() { var radios = document.getElementById("quiz").getElementsByTagName("INPUT"); 
var right = 0; var wrong = 0; 

for (var i = 0, len = radios.length; i < len; i++) 
  { if (radios[i].value=="1" )  
    { if (radios[i].checked==true) { right++; radios[i].parentNode.parentNode.className='rightans' ; } 
    
    else { wrong++; radios[i].parentNode.parentNode.className='wrongans' ; } } } var pcnt=(100 * right / (wrong + right)).toFixed(1); document.getElementById("score").innerHTML='Correct: ' + right + '<br/>Incorrect: ' + wrong + '<br/>Score percentage: ' + pcnt + '%' ; }

function clear() { var radios = document.getElementById("quiz").getElementsByTagName("INPUT"); for (var i = 0, len = radios.length; i < len; i++) { radios[i].checked = false; if (radios[i].value == "x") { radios[i].parentNode.parentNode.className = ''; } } document.getElementById("score").innerHTML = ''; } 
</script>
 
</div><input type="submit" id="btn"  value="Verzenden" /><input type="button" id="btnclr" value="Reset"/>
<h2 id="score"></h2>
</body> 
</html>  


<?php 
/*

<div id="quiz"> 
    <fieldset id="q1">
        <legend>Vraag 1</legend>
        <legend>Welk van de onderstaande fruitsoorten is het meest eiwitrijk?</legend>  
        <label><input type="radio" name="q1" value="0" />Frambozen</label>
        <br/> 
        <label><input type="radio" name="q1" value="0" />Bananen</label>
        <br/>
        <label><input type="radio" name="q1" value="0" />Bramen</label>
        <br/>
        <label><input type="radio" name="q1" value="1" />Dadels</label>
        <br/>
        <label><input type="radio" name="q1" value="0" />Aardbeien</label>
</fieldset> 
<br/>
 <fieldset id="q2">
        <legend>Vraag 2</legend>
        <legend>Hoeveel zitten er in een dozijn?</legend>  
        <label><input type="radio" name="q2" value="0" />5</label>
        <br/> 
        <label><input type="radio" name="q2" value="0" />18</label>
        <br/>
        <label><input type="radio" name="q2" value="0" />6</label>
        <br/>
        <label><input type="radio" name="q2" value="1" />12</label>
        <br/>
        <label><input type="radio" name="q2" value="0" />20</label>
        <br/>
</fieldset> 

<br/>
 <fieldset id="q3">
        <legend>Vraag 3</legend>
        <legend>Uit welk jaar stamt de oudste (bekende) vermelding van de plaats Oss?</legend>  
        <label><input type="radio" name="q3" value="0" />1098</label>
        <br/> 
        <label><input type="radio" name="q3" value="0" />1215</label>
        <br/>
        <label><input type="radio" name="q3" value="1" />1161</label>
        <br/>
        <label><input type="radio" name="q3" value="0" />1387</label>
        <br/>
        <label><input type="radio" name="q3" value="0" />1412</label>
        <br/>
</fieldset> 

<br/>
 <fieldset id="q4">
        <legend>Vraag 4</legend>
        <legend>Wat was de gemiddelde jaartemperatuur van Nederland in 2019?</legend>  
        <label><input type="radio" name="q4" value="1" />11,2 graden</label>
        <br/> 
        <label><input type="radio" name="q4" value="0" />9,4 graden</label>
        <br/>
        <label><input type="radio" name="q4" value="0" />13,7 graden</label>
        <br/>
        <label><input type="radio" name="q4" value="0" />12,9 graden</label>
        <br/>
        <label><input type="radio" name="q4" value="0" />10,1 graden</label>
        <br/>
</fieldset> 

<br/>

*/
?>



