<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"/>
<title>test_vragen</title>

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
	{ if (radios[i].value=="x" )  
		{ if (radios[i].checked==true) { right++; radios[i].parentNode.parentNode.className='rightans' ; } 
		else { wrong++; radios[i].parentNode.parentNode.className='wrongans' ; } } } var pcnt=(100 * right / (wrong + right)).toFixed(1); document.getElementById("score").innerHTML='Correct: ' + right + '<br/>Incorrect: ' + wrong + '<br/>Percent Correct: ' + pcnt + '%' ; }

function clear() { var radios = document.getElementById("quiz").getElementsByTagName("INPUT"); for (var i = 0, len = radios.length; i < len; i++) { radios[i].checked = false; if (radios[i].value == "x") { radios[i].parentNode.parentNode.className = ''; } } document.getElementById("score").innerHTML = ''; }
</script>
</head>
</body>
<div id="quiz">
    <h1>Quiz</h1>
    <fieldset id="q1">
        <legend>Question 1</legend>
        <legend>What is the answer to this question?</legend> 
        <label><input type="radio" name="q1" value="p" />Wrong answer1</label>
        <br/> 
        <label><input type="radio" name="q1" value="x" />Correct answer</label>
        <br/>
         <label><input type="radio" name="q1" value="y" />Wrong answer2</label>
         <br/> 
         <label><input type="radio" name="q1" value="m" />Wrong answer3</label>
         <br/> 
         <label><input type="radio" name="q1" value="f" />Wrong answer4</label>

    </fieldset> 
    <fieldset id="q2">
        <legend>Question 2</legend>
        <legend>What is the answer to this question?</legend>
        <label><input type="radio" name="q2" value="r" />Wrong answer1</label>
        <br/>
        <label><input type="radio" name="q2" value="s" />Wrong answer2</label>
        <br/> 
        <label><input type="radio" name="q2" value="l" />Wrong answer3</label>
        <br/> 
        <label><input type="radio" name="q2" value="x" />Correct answer</label>
        <br/> 
        <label><input type="radio" name="q2" value="r" />Wrong answer4</label>

    </fieldset>
    <fieldset id="q3">
        <legend>Question 3</legend>
        <legend>What is the answer to this question?</legend> 
        <label><input type="radio" name="q3" value="d" />Wrong answer1</label>
        <br/> 
        <label><input type="radio" name="q3" value="g" />Wrong answer2</label>
        <br/> 
        <label><input type="radio" name="q3" value="j" />Wrong answer3</label>
        <br/> 
        <label><input type="radio" name="q3" value="e" />Wrong answer4</label>
        <br/> 
        <label><input type="radio" name="q3" value="x" />Correct answer</label>
    </fieldset>

</div><input type="button" id="btn" value="Check Answers" /><input type="button" id="btnclr" value="Clear"/>
<h2 id="score"></h2>
</body>

</html>