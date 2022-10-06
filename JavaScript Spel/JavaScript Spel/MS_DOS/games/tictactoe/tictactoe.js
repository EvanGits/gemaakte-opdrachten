class tictactoe extends base
{
	constructor()
	{
		super();
		
		let json = {
			"tag": "div",
			"id": "tictactoe",
			"class": "popup",
			"children":
			[
				{
					"tag": "div",
					"class": "close-box",
					"svg": true
				},
				{
					"tag": "div",
					"id": "TIC_area",
					"children":
					[
						{
							"tag": "div",
							"id": "TIC_menu-text",
							"children":
							[
								{
									"tag": "p",
									"id": "TIC_title",
									"text": "TIC TAC TOE"
								},
								{
									"tag": "p",
									"id": "TIC_menu-standard",
									"text": "Standard mode"
								},
								{
									"tag": "p",
									"id": "TIC_menu-TEN",
									"text": "TEN mode"
								},
								{
									"tag": "p",
									"id": "TIC_menu-start",
									"text": "Press SPACEBAR to start"
								}
							]
						},
						{
							"tag": "div",
							"id": "TIC_loading-div",
							"children":
							[
								{
									"tag": "div",
									"id": "TIC_loading-text"
								}
							]
						},
						{
							"tag": "div",
							"id": "TIC_gameover-div",
							"children":
							[
								{
									"tag": "div",
									"id": "TIC_gameover-text"
								}
							]
						},
						{
							"tag": "div",
							"id": "TIC_playing-field"
						}
					]
				}
			]
		};
		this.CreateGamePopup("tictactoe", json);
	}
	
	OnLoad()
	{
		this.TIC_GamePlaying;
		this.TIC_FinalLoad = "";
		
		this.TIC_GameMode = "";
		
		this.TIC_ActivePlayer = 1;
		this.TIC_Symbol = [];
		this.TIC_Symbol["player1"] = ["X"];
		this.TIC_Symbol["player2"] = ["O"];
		
		this.TIC_AllowedRows = [
			["1-1","1-2","1-3"],
			["1-1","2-1","3-1"],
			["1-3","2-3","3-3"],
			["3-1","3-2","3-3"],
			["2-1","2-2","2-3"],
			["1-2","2-2","3-2"],
			["1-1","2-2","3-3"],
			["3-1","2-2","1-3"]
		];
		
		PopupController("tictactoe");
		$("#tictactoe").width($("#tictactoe").height());
		$("#tictactoe").css("left", (($("html").width() - $("#tictactoe").width()) /2));
		
		TIC_Start();
	}
	
	OnKeyDown(code)
	{
		var that = window.tictactoeObj;
		
		switch(code)
		{	
			case "ArrowDown":
				if(that.TIC_GamePlaying == 0)
				{
					that.TIC_GameMode = "TEN";
					$("#TIC_menu-standard").removeClass("TIC_menu-selected-option");
					$("#TIC_menu-TEN").addClass("TIC_menu-selected-option");
				}
				break;

			case "ArrowUp":
				if(that.TIC_GamePlaying == 0)
				{
					that.TIC_GameMode = "";
					$("#TIC_menu-TEN").removeClass("TIC_menu-selected-option");
					$("#TIC_menu-standard").addClass("TIC_menu-selected-option");
				}
				break;
			
			case "Space":
				if(that.TIC_GamePlaying == 0)
				{
					TIC_Loading();
				}
				else if(that.TIC_GamePlaying == 3)
				{
					$("#TIC_gameover-div").css("z-index", "0");
					$("#TIC_playing-field").css("visibility", "hidden");
					$("#TIC_gameover-text").css("visibility", "hidden");
					$("#TIC_menu-text").css("visibility", "initial");
					
					$("#TIC_menu-TEN").removeClass("TIC_menu-selected-option");
					$("#TIC_menu-standard").addClass("TIC_menu-selected-option");
					
					that.TIC_ActivePlayer = 1;
					that.TIC_GamePlaying = 0;
				}
				break;
			
			case "F12":
			case "Escape":
				window.activeObject = "loading";
				PopupController("tictactoe");
				clearInterval(that.TIC_FinalLoad);
				break;
		}
	}
	
	OnClick(target)
	{
		var that = window.tictactoeObj;

		if(that.TIC_GamePlaying == 2)
		{
			if($(target).hasClass("TIC_grid-box") && $(target).attr("player") == 0)
			{
				if(that.TIC_ActivePlayer === 1)
				{
					$(target).attr("player", 1);
					$(target).addClass("TIC_symbol-X");
				}
				else
				{
					$(target).attr("player", 2);
					$(target).addClass("TIC_symbol-O");
				}
				TIC_CheckWin(target);
			}
		}
		else if(target.childNodes[0] !== undefined && $.inArray("close-x", target.childNodes[0].classList) !== -1)
		{
			this.OnKeyDown("F12");
		}
	}
}