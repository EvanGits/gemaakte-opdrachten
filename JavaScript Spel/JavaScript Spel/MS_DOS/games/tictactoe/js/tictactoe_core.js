function TIC_Start()
{
	var that = window.tictactoeObj;
	that.TIC_GamePlaying = 0;
	
	$("#TIC_menu-text").css("visibility", "initial");
	$("#TIC_menu-standard").addClass("TIC_menu-selected-option");
}

function TIC_Loading()
{
	var that = window.tictactoeObj;
	that.TIC_GamePlaying = 1;
	TIC_BuildGrid();
	
	$("#TIC_menu-text").css("visibility", "hidden");
	$("#TIC_loading-text").css("z-index", "4");
	
	setTimeout(function()
	{
		$("#TIC_loading-text").css("visibility", "initial");
		$("#TIC_loading-text").html("Game starts in 3 seconds");
	},1000);
	
	setTimeout(function()
	{
		$("#TIC_loading-text").html("Game starts in 2 seconds");
	},2000);
	
	setTimeout(function()
	{
		$("#TIC_loading-text").html("Game starts in 1 second&nbsp;");
	},3000);
	
	that.TIC_FinalLoad = setTimeout(function()
	{
		$("#TIC_loading-text").css("visibility", "hidden");
		$("#TIC_loading-text").css("z-index", "0");
		$("#TIC_playing-field").css("visibility", "initial");
		TIC_StartGame();
	},4000);
}

function TIC_StartGame()
{
	var that = window.tictactoeObj;
	that.TIC_GamePlaying = 2;
}

function TIC_GameOver(msg)
{
	var that = window.tictactoeObj;
	that.TIC_GamePlaying = 3;
	
	$("#TIC_gameover-text").html("<p>"+msg+"</p><p>Press SPACEBAR to go to the title screen</p>");
	$("#TIC_gameover-div").css("z-index", "4");
	$("#TIC_gameover-text").css("visibility", "initial");
}

function TIC_BuildGrid()
{
	var that = window.tictactoeObj;
	$("#TIC_playing-field").html("");
	
	for(let x = 1; x <= 3; x++)
	{
		for(let y = 1; y <= 3; y++)
		{
			if(that.TIC_GameMode === "TEN")
			{
				$("#TIC_playing-field").append("<div class=\"TIC_TEN-grid-box TIC_TEN-grid-box-"+x+"-"+y+"\" x="+x+" y="+y+"></div>");
				for(let subx = 1; subx <= 3; subx++)
				{
					for(let suby = 1; suby <= 3; suby++)
					{
						$(".TIC_TEN-grid-box-"+x+"-"+y).append("<div class=\"TIC_grid-box TIC_grid-box-"+subx+"-"+suby+"\" x="+subx+" y="+suby+" player=0></div>");
					}
				}
			}
			else
			{
				$("#TIC_playing-field").append("<div class=\"TIC_grid-box TIC_grid-box-"+x+"-"+y+"\" x="+x+" y="+y+" player=0></div>");
			}
		}
	}
	$(".TIC_grid-box").css("font-size", parseFloat($(".TIC_grid-box").css("width")) / 2);
}