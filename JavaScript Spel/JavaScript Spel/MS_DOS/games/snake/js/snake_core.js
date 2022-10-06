function SNK_Start()
{
	let that = window.snakeObj;
	that.SNK_GamePlaying = 0;
	
	$("#SNK_menu-text").css("visibility", "initial");
}

function SNK_Loading()
{
	let that = window.snakeObj;
	that.SNK_GamePlaying = 1;
	SNK_BaseSettings();
	
	$("#SNK_snake-length span").html(that.SNK_SnakeLength);
	$("#SNK_menu-text").css("visibility", "hidden");
	
	setTimeout(function()
	{
		$("#SNK_loading-text").css("visibility", "initial");
		$("#SNK_loading-text").html("Game starts in 3 seconds");
	},1000);
	
	setTimeout(function()
	{
		$("#SNK_loading-text").html("Game starts in 2 seconds");
	},2000);
	
	setTimeout(function()
	{
		$("#SNK_loading-text").html("Game starts in 1 second&nbsp;");
	},3000);
	
	that.SNK_FinalLoad = setTimeout(function()
	{
		$("#SNK_loading-text").css("visibility", "hidden");
		$("#SNK_snake-length").css("visibility", "initial");
		$(".SNK_box").css("visibility", "initial");
		SNK_StartGame();
	},4000);
}

function SNK_StartGame()
{
	let that = window.snakeObj;
	that.SNK_GamePlaying = 2;
	
	that.SNK_Interval = setInterval(function()
	{
		SNK_Move();
	}, 100);
}

function SNK_GameOver()
{
	var that = window.snakeObj;
	
	that.SNK_GamePlaying = 3;
	clearInterval(that.SNK_Interval);
	
	$('#SNK_snake-length').css("visibility", "hidden");
	$('#SNK_gameover-text').css("visibility", "initial");
	$("#SNK_gameover-text span").html(that.SNK_SnakeLength);
}

function SNK_BaseSettings()
{
	let that = window.snakeObj;
	
	that.SNK_Dir = "";
	that.SNK_FoodEaten = 0;
	that.SNK_SnakeLength = 3;
	that.SNK_SnakeArray = [ 
		[(that.SNK_Cells - 1), (that.SNK_Cells - 3)],
		[(that.SNK_Cells - 1), (that.SNK_Cells - 2)],
		[(that.SNK_Cells - 1), (that.SNK_Cells - 1)]
	];
	
	if(that.SNK_Cells * that.SNK_Cells !== $(".SNK_box").length)
	{
		$(".SNK_box").remove();
		for(let y = 1; y <= that.SNK_Cells; y++)
		{
			for(let x = 1; x <= that.SNK_Cells; x++)
			{

				$("#SNK_area").append("<div class='SNK_box x" + x + " y" + y + "'></div>");
		

			}
		}
		
		$(".SNK_box").css("height", parseFloat($("#SNK_area").css("height")) / that.SNK_Cells - 2.01);
		$(".SNK_box").css("width", parseFloat($("#SNK_area").css("width")) / that.SNK_Cells - 2.01);
	}
	else	
	{
		$(".SNK_box").removeClass("SNK_body");
		$(".SNK_box").removeClass("SNK_food");
	}
	
	for(let i = 0; i < that.SNK_SnakeArray.length; i++)
	{
		$(".SNK_box.x" + that.SNK_SnakeArray[i][0] + ".y" + that.SNK_SnakeArray[i][1]).addClass("SNK_body");
	}
	
	SNK_SnakeFood();
}