class connect4 extends base
{
	constructor()
	{
		super();
		
		let json = {
			"tag": "div",
			"id": "connect4",
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
					"id": "CON_area",
					"children":
					[
						{
							"tag": "div",
							"id": "CON_menu-text",
							"children":
							[
								{
									"tag": "p",
									"id": "Connect4_title",
									"text": "Connect 4"

								},
								{
									"tag": "p",
									"id": "CON_menu-start",
									"text": "Druk op SPACEBAR om te starten" 


								}
							]
						},
						{
							"tag": "div",
							"id": "CON_loading-div",
							"children":
							[
								{
									"tag": "div",
									"id": "CON_loading-text"
								}
							]
						},
						{
							"tag": "div",
							"id": "CON_gameover-text",
							"children":
							[
								{
									"tag": "p",
									"id": "CON_title",
									"text": "HELAAS",
									
								}
							]
						}
					]
				}
			] 
		};
		this.CreateGamePopup("connect4", json);
	}
	

	OnLoad()
	
	{
		this.CON_GamePlaying;
		this.CON_FinalLoad;
		this.CON_player = 1
		

		PopupController("connect4");
		document.getElementById("connect4").style.width = document.getElementById("connect4").clientHeight + "px";
		document.getElementById("connect4").style.left = (document.getElementsByTagName("html")[0].clientWidth - document.getElementById("connect4").clientWidth) / 2 + "px";
		
		CON_Start();
	
	}

	OnKeyDown(code)
	{
		var that = window.connect4Obj;

		switch(code)
		{
			case "Space":
				if(that.CON_GamePlaying === 0)
				{
					CON_Loading(); 

				}
				else if(that.CON_GamePlaying === 3)
				{
					$(".CON_box").css("visibility", "hidden");
					$("#CON_gameover-text").css("visibility", "hidden");
					CON_Start();
				}
				break;


				case "F12": 
				case "Escape":
				window.activeObject = "loading";
				PopupController("connect4"); 
				clearTimeout(that.CON_FinalLoad);

				break;
		}
	}

	
	OnClick(target)
	{
		var that = window.connect4Obj;

		//$speler(1)=("CON_rode_schijf");
		//$speler(2)=("CON_gele_schijf");  

		if($(target).attr("y") == 1 && !$(target).hasClass("CON_rode_schijf") && !$(target).hasClass("CON_gele_schijf"))
		{ 

			if (that.CON_player == 1) {

				console.log(target);
				$(target).addClass("CON_rode_schijf"); 
				CON_Gravity(target, "CON_rode_schijf");
				
				that.CON_player = 2;
			}
			else if (that.CON_player == 2) {
				console.log(target);
				$(target).addClass("CON_gele_schijf"); 
				CON_Gravity(target, "CON_gele_schijf");
			
 				that.CON_player = 1;
 			}
 			
 

		}
			



		if(target.childNodes[0] !== undefined && $.inArray("close-x", target.childNodes[0].classList) !== -1)
		{
			this.OnKeyDown("F12");

			

			

			}
		}
	}



 