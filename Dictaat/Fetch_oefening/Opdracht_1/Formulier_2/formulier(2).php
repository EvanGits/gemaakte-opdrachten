<form action="">
  <label for="cijfer">Vul een cijfer in:</label>
  <input type="number" id="cijfer" name="cijfer"><br><br>
  <input type="button" onclick= "promiseNumber()" value="show number">
</form>

<div id="laatzien">
	
</div>

<script>
function promiseNumber()
{
	let num = parseInt(document.querySelector("#cijfer").value);  
			let MyPromise = new Promise(function(MyResolve, MyReject)
			{
				let result
				if(num !== undefined && Number.isInteger(num))
				{

					result = true;
				}

				if (result === true) 
				{
					MyResolve("OK"); 
				}
				else
				{
					MyReject("Error"); 
				}0.
			});

			MyPromise.then(
				function(value)
				{
					console.log(value);
					showNumber(num); 
				},
				function(error)
				{
					console.log(error); 
				}
				); 

		} 
		


	
</script>
