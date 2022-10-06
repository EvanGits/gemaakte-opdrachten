class base
{
	constructor()
	{
		
	}
	
	OnLoad()
	{
		
	}
	
	OnKeyDown()
	{
		
	}
	
	OnKeyUp()
	{
		
	}
	
	OnClick()
	{
		
	}
	
	OnKeyDown()
	{
		
	}
	
	CreateGamePopup(game, json, parentElement = "body", index = 0)
	{
		if(json["tag"] !== undefined)
		{
			let node = document.createElement(json["tag"]);
			
			if(json["id"] !== undefined)
			{
				node.setAttribute("id", json["id"]);
			}
			if(json["class"] !== undefined)
			{
				node.setAttribute("class", json["class"]);
				if(json["class"] === "popup")
				{
					node.style.display = "none";
				}
			}
			if(json["text"] !== undefined)
			{
				let textnode = document.createTextNode(json["text"]);
				node.appendChild(textnode);
			}
			
			document.querySelector(parentElement).appendChild(node);
			
			if(json["svg"] !== undefined)
			{
				GetSVG(game);
			}
			
			if(json["children"] !== undefined)
			{
				for(let i = 0; i < json["children"].length; i++)
				{
					if(json["children"][i]["tag"] !== undefined)
					{
						if(parentElement === "body")
						{
							this.CreateGamePopup(game, json["children"][i], "#" + game, i);
						}
						else
						{
							this.CreateGamePopup(game, json["children"][i], (parentElement + ">" + json["tag"] + ":nth-child(" + (index+1) + ")"), i);
						}
					}
				}
			}
		}
	}
} 