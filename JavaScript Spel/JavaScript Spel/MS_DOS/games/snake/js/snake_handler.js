function SNK_Move()
{
	let that = window.snakeObj;
	
	if(that.SNK_Dir !== "")
	{
		let dead = 1;
		let lastSnake = that.SNK_SnakeArray[that.SNK_SnakeArray.length-1];
		
		if(that.SNK_Dir === "up" && SNK_Collision(0, -1))
		{
			that.SNK_SnakeArray.unshift([that.SNK_SnakeArray[0][0], that.SNK_SnakeArray[0][1]-1]);
			dead = 0;
		}
		else if(that.SNK_Dir === "down" && SNK_Collision(0, 1))
		{
			that.SNK_SnakeArray.unshift([that.SNK_SnakeArray[0][0], that.SNK_SnakeArray[0][1]+1]);
			dead = 0;
		}
		else if(that.SNK_Dir === "left" && SNK_Collision(-1, 0))
		{
			that.SNK_SnakeArray.unshift([that.SNK_SnakeArray[0][0]-1, that.SNK_SnakeArray[0][1]]);
			dead = 0;
		}
		else if(that.SNK_Dir === "right" && SNK_Collision(1, 0))
		{
			that.SNK_SnakeArray.unshift([that.SNK_SnakeArray[0][0]+1, that.SNK_SnakeArray[0][1]]);
			dead = 0;
		}
		
		if(dead === 0)
		{
			$(".SNK_box.x" + that.SNK_SnakeArray[0][0] + ".y" + that.SNK_SnakeArray[0][1]).addClass("SNK_body");
			$(".SNK_box.x" + lastSnake[0] + ".y" + lastSnake[1]).removeClass("SNK_body");
			that.SNK_SnakeArray.pop();
			SNK_SnakeFood();
		}
	}
}

function SNK_Collision(x, y)
{
	let that = window.snakeObj;
	
	let newX = that.SNK_SnakeArray[0][0] + x;
	let newY = that.SNK_SnakeArray[0][1] + y;
	
	if(newX <= 0 || newX > that.SNK_Cells || newY <= 0 || newY > that.SNK_Cells || $(".SNK_box.x" + newX + ".y" + newY).hasClass("SNK_body"))
	{
		SNK_GameOver();
		return false;
	}
	else if($(".SNK_box.x" + newX + ".y" + newY).hasClass("SNK_food"))
	{
		that.SNK_FoodEaten = 1;
		return true;
	}
	else
	{
		return true;
	}
}

function SNK_SnakeFood()
{
	let that = window.snakeObj;
	
	if(that.SNK_FoodEaten === 1)
	{
		that.SNK_SnakeLength++;
		$("#SNK_snake-length span").html(that.SNK_SnakeLength);
		
		that.SNK_SnakeArray.push(that.SNK_SnakeArray[that.SNK_SnakeArray.length - 1]);
		$(".SNK_box").removeClass("SNK_food");
		that.SNK_FoodEaten = 0;
	}
	
	if($(".SNK_food").length <= 0)
	{
		let x = Math.floor(Math.random() * that.SNK_Cells);
		let y = Math.floor(Math.random() * that.SNK_Cells);
		$(".SNK_box.x" + x + ".y" + y).addClass("SNK_food");
	}
}