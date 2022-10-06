
  <!DOCTYPE html>
  <html>
  <head>
      <meta charset="utf-8">
      <meta name="" content="width=device-width, initial-scale=1">
      <title>Opdracht 2</title>
  </head>
  <body>



<form>

  <label for="straat">Straat: </label><br>
  <input type="text" id="straat" name="straat" ><br>
  
  <label for="stad">Stad: </label><br>
  <input type="text" id="stad" name="stad" ><br><br>
  
  <input type="button" onclick="myFunction()" value="Submit">

</form>

 

  

</body>
</html> 

<script> 

function myFunction(){
   let formData = new FormData();  


   let straat = document.querySelector("#straat").value;
   let stad = document.querySelector("#stad").value; 


   formData.append('Straat', straat); 
   formData.append('Stad', stad); 

   fetch("object.php",  

   {    
        method:"POST",
        body: formData
   })

   .then(response => response.json())
   .then(result => {
    console.log("Success: "+ result); 
   })

   .catch(error => {
    console.log("Error: "+ error); 
   })
};

/*
<input type="radio" id="Molenstraat" name="straat" value="Molenstraat">
<label for="Molenstraat">Molenstraat</label><br>

<input type="radio" id="Kerstraat" name="straat" value="Kerkstraat">
<label for="Kerstraat">Kerkstraat</label><br>

<input type="radio" id="Wilheminaplein" name="straat" value="Wilheminaplein">
<label for="Wilheminaplein">Wilheminaplein</label><br>



<input type="radio" id="Amsterdam" name="stad" value="Amsterdam">
<label for="Amsterdam">Amsterdam</label><br>

<input type="radio" id="Breda" name="stad" value="Breda">
<label for="Breda">Breda</label><br>

<input type="radio" id="Groningen" name="stad" value="Groningen">
<label for="Groningen">Groningen</label><br>

<br>
<input type="button"  value= "Verzenden"><br>


*/


</script>

