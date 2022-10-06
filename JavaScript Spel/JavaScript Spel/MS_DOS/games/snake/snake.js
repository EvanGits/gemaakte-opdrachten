class snake extends base
{
	constructor()
	{
		super();
		
		let json = {
			"tag": "div",
			"id": "snake",
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
					"id": "SNK_area",
					"children":
					[
						{
							"tag": "div",
							"id": "SNK_menu-text",
							"children":
							[
								{
									"tag": "p",
									"id": "SNK_title",
									"text": "snake"
								},
								{
									"tag": "p",
									"id": "SNK_menu-start",
									"text": "Press SPACEBAR to start"
								}
							]
						},
						{
							"tag": "div",
							"id": "SNK_loading-div",
							"children":
							[
								{
									"tag": "div",
									"id": "SNK_loading-text"
								}
							]
						},
						{
							"tag": "div",
							"id": "SNK_gameover-text",
							"children":
							[
								{
									"tag": "p",
									"id": "SNK_title",
									"text": "GAME OVER",
								},
								{
									"tag": "p",
									"text": "Snake length: ",
									"children":
									[
										{
											"tag": "span"
										}
									]
								},
								{
									"tag": "p",
									"text": "Press SPACEBAR to continue"
								}
							]
						},
						{
							"tag": "div",
							"id": "SNK_snake-length",
							"text": "snake length: ",
							"children":
							[
								{
									"tag": "span"
								}
							]
						}
					]
				}
			]
		};
		this.CreateGamePopup("snake", json);
	}

	OnLoad()
	{
		this.SNK_GamePlaying;
		this.SNK_Interval;
		this.SNK_FinalLoad;
		
		this.SNK_Cells = 64;
		this.SNK_Dir = "";
		this.SNK_FoodEaten = 0;
		this.SNK_SnakeLength = 3;
		this.SNK_SnakeArray = [];
		
		PopupController("snake");
		$("#snake").width( $("#snake").height() );
		$("#snake").css("left", (($("html").width() - $("#snake").width()) /2));
		
		SNK_Start();
	}
	
	OnKeyDown(code)
	{
		var that = window.snakeObj;
		
		switch(code)
		{
			case "ArrowLeft":
			case "KeyA":
				if(that.SNK_GamePlaying === 2 && that.SNK_SnakeArray[0][0]-1 !== that.SNK_SnakeArray[1][0])
				{
					that.SNK_Dir = "left";
				}
				break;
				
			case "ArrowUp":
			case "KeyW":
				if(that.SNK_GamePlaying === 2 && that.SNK_SnakeArray[0][1]-1 !== that.SNK_SnakeArray[1][1])
				{
					that.SNK_Dir = "up";
				}
				break;
				
			case "ArrowRight":
			case "KeyD":
				if(that.SNK_GamePlaying === 2 && that.SNK_SnakeArray[0][0]+1 !== that.SNK_SnakeArray[1][0])
				{
					that.SNK_Dir = "right";
				}
				break;
				
			case "ArrowDown":
			case "KeyS":
				if(that.SNK_GamePlaying === 2 && that.SNK_SnakeArray[0][1]+1 !== that.SNK_SnakeArray[1][1])
				{
					that.SNK_Dir = "down";
				}
				break;
				
			case "Space":
				if(that.SNK_GamePlaying === 0)
				{
					SNK_Loading();
				}
				else if(that.SNK_GamePlaying === 3)
				{
					$(".SNK_box").css("visibility", "hidden");
					$("#SNK_gameover-text").css("visibility", "hidden");
					SNK_Start();
				}
				break;
				
			case "F12":
			case "Escape":
				window.activeObject = "loading";
				PopupController("snake");
				clearTimeOut(that.SNK_FinalLoad);
				clearInterval(that.SNK_Interval);
				break;
		}
	}
	
	OnClick(target)
	{
		if(target.childNodes[0] !== undefined && $.inArray("close-x", target.childNodes[0].classList) !== -1)
		{
			this.OnKeyDown("F12");
		}
	}
}