function ProgramHandler(type, program = "null")
{
	window.activeObject = "loading";
	
	if(type === "scan")
	{
		$.ajax({
			url: "js/scripts/program_handler.php",
			method: "POST",
			async: true,
			data:
			{
				"type" : "scan"
			},
			success: function(data)
			{
				if(data !== false)
				{
					window.availablePrograms = data;
				}
				else
				{
					window.activeObject = "commands";
					$("#history").append("Program file could not be found");
				}
			},
			error: function(e){console.log(e);},
			dataType:"json"
		});
	}
	else if(type === "load")
	{
		if($.inArray(program, window.loadedPrograms) === -1)
		{
			$.ajax({
				url: "js/scripts/program_handler.php",
				method: "POST",
				async: true,
				data:
				{
					"type" : "load",
					"game" : program
				},
				success: function(data)
				{
					if(data !== false)
					{
						$.each(data["css"], function(key, value){
							let stylesheet = $("<link>", {
								rel: "stylesheet",
								type: "text/css",
								href: value
							});
							$("head").append(stylesheet);
						});
						
						$.getScript(data["js"].shift()).done(function()
						{
							window[program + "Obj"] = (Function("return new "+program))();
							window.loadedPrograms.push(program);
							
							LoadScripts(data, program);
						});
					}
					else
					{
						window.activeObject = "commands";
						$("#history").append("Program file could not be found");
					}
				},
				dataType:"json"
			});
		}
		else
		{
			window.activeObject = program;
			window[program+"Obj"].OnLoad();
		}
		window.commands.initCursor();
	}
}

function LoadScripts(data, program)
{
	$.getScript(data["js"].shift()).done(function()
	{
		if(data["js"].length <= 0)
		{
			window.activeObject = program;
			window[program + "Obj"].OnLoad();
		}
		else
		{
			LoadScripts(data, program);
		}
	});
}

function MenuKeys(key)
{
	if(window.activeObject === "commands" || window.activeObject === "popup")
	{
		PopupController(key + "_popup");
	}
}

function PopupController(value)
{
	if(value !== "")
	{
		if($("#" + value).css("display") === "none")
		{
			if($.inArray(window.activeObject, window.loadedPrograms) !== -1 && value !== window.activeObject)
			{
				
			}
			else
			{
				if($.inArray(value, window.loadedPrograms) === -1)
				{
					window.activeObject = "popup";
				}
				window.activePopup = value;
				$(".popup").css("display", "none");
				$("#" + value).css("display", "block");
			}
		}
		else
		{
			window.activeObject = "commands"
			window.commands.initCursor();
			window.activePopup = "";
			$("#" + value).css("display", "none");
		}
	}
}

function CommandHistory(dir)
{
	if(window.commandHistory.length > 0)
	{
		let newPos;
		if(dir === "up")
		{
			newPos = window.commandHistoryPos + 1;
		}
		else
		{
			newPos = window.commandHistoryPos - 1;
		}
		
		if(newPos >= 0 && window.commandHistory[newPos] !== undefined)
		{
			$("#command_line").html(window.commandHistory[newPos]);
			window.commandHistoryPos = newPos;
		}
		else if(newPos < 0)
		{
			window.commandHistoryPos = -1;
			$("#command_line").html("");
		}
	}
}

function GetSVG(game)
{
	$("#" + game + " .close-box").append("<svg viewbox='0 0 40 40'><path class='close-x' d='M 10,10 L 30,30 M 30,10 L 10,30'></svg>");
}

function Copy(origin)
{
	let tmp = origin;
	let copy = origin;
	origin = tmp;
	return copy;
}