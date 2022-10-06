function TIC_CheckWin(target, overrideTEN = "false")
{
	
	var that = window.tictactoeObj;
	let parentClass = "";
	let coords = $(target).attr("x")+"-"+$(target).attr("y");
	let win = "no winner";
	let baseClass;
	
	if(that.TIC_GameMode === "TEN" && overrideTEN === "false")
	{
		parentClass = ".TIC_TEN-grid-box-"+$($(target)[0].parentElement).attr("x")+"-"+$($(target)[0].parentElement).attr("y")+" ";
		baseClass = parentClass+".TIC_grid-box";
	}
	else if(that.TIC_GameMode === "TEN" && overrideTEN === "true")
	{
		baseClass = ".TIC_TEN-grid-box";
	}
	else
	{
		baseClass = ".TIC_grid-box";
	}
	
	
	
	for(let i = 0; i < that.TIC_AllowedRows.length; i++ )
	{
		if($.inArray(coords,that.TIC_AllowedRows[i]) !== -1)
		{
			let count = 0;
			for(let n = 0; n < that.TIC_AllowedRows[i].length; n++)
			{
				if(overrideTEN === "true" && $(baseClass+"-"+that.TIC_AllowedRows[i][n]).hasClass("TIC_symbol-"+that.TIC_Symbol["player"+that.TIC_ActivePlayer]))
				{
					count++;
				}
				else if(overrideTEN === "false" && $(baseClass+"-"+that.TIC_AllowedRows[i][n]).hasClass("TIC_symbol-"+that.TIC_Symbol["player"+that.TIC_ActivePlayer]))
				{
					count++;
				}
			}
			
			if(count === that.TIC_AllowedRows[i].length)
			{
				win = "winner";
				if(that.TIC_GameMode === "TEN" && overrideTEN === "false")
				{
					TIC_CheckWinTEN(parentClass, win)
				}
				else
				{
					TIC_GameOver("Player "+ that.TIC_ActivePlayer + " ("+that.TIC_Symbol["player"+that.TIC_ActivePlayer]+") wins");
				}
			}
		}
	}
	
	if(win === "no winner")
	{
		let count = 0;
		$(baseClass).each(function()
		{
			for(let i = 1; i <= Object.keys(that.TIC_Symbol).length; i++)
			{
				if($(this).hasClass("TIC_symbol-"+that.TIC_Symbol["player"+i]))
				{
					count++;
					break;
				}
			}
		});
		
		if(count === $(baseClass).length)
		{
			win = "fullgrid";
			if(that.TIC_GameMode === "TEN" && overrideTEN === "false")
			{
				TIC_CheckWinTEN(parentClass, win);
			}
			else
			{
				TIC_GameOver("The game has ended without a winner");
			}
		}
		else
		{
			if(that.TIC_ActivePlayer === 1)
			{
				that.TIC_ActivePlayer = 2;
			}
			else
			{
				that.TIC_ActivePlayer = 1;
			}
		}
	}
}

function TIC_CheckWinTEN(parentClass, win)
{
	var that = window.tictactoeObj;
	let winner;
	
	if(win === "fullgrid")
	{
		let symbols = [];
		$(parentClass+".TIC_grid-box").each(function()
		{
			for(let i = 1; i <= Object.keys(that.TIC_Symbol).length; i++)
			{
				if($(this).hasClass("TIC_symbol-"+that.TIC_Symbol["player"+i]))
				{
					if(symbols[i] == undefined)
					{
						symbols[i] = [i, 1];
					}
					else
					{
						symbols[i][1]++;
					}
					break;
				}
			}
		});
		
		symbols.sort(function(a, b) {
			return b[1] - a[1];
		});
		winner = symbols[0][0];
	}
	else
	{
		winner = that.TIC_ActivePlayer;
	}
	$(parentClass).addClass("TIC_symbol-"+that.TIC_Symbol["player"+winner]);
	$(parentClass).append("<div class=\"TIC_TEN-block-winner TIC_symbol-"+that.TIC_Symbol["player"+winner]+"\"></div>");
	$(parentClass+".TIC_grid-box").css("opacity", 0.55);
	
	TIC_CheckWin(parentClass, "true");
}