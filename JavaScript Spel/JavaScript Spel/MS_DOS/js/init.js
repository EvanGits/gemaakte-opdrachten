$(document).ready(function()
{
	window.commandHistory = [];
	window.commandHistoryPos = -1;
	
	window.loadedPrograms = [];
	window.availablePrograms = [];
	ProgramHandler("scan");
	
	window.activeObject = "commands";
	window.activePopup = "";
	
	window.commands.restart();
});

$(document).keydown(function()
{
	if(window.activeObject !== "loading")
	{
		if(activeObject !== "commands" && activeObject !== "popup")
		{
			event.preventDefault();
			window[activeObject + "Obj"].OnKeyDown(event.code);
		}
		else
		{
			switch(true)
			{
				case event.code === "KeyR" && event.shiftKey === true && event.ctrlKey === true:
				case event.code === "F5" && event.ctrlKey === true:
					break;
				
				case event.code === "F1":
				case event.code === "F2":
				case event.code === "F3":
				case event.code === "F4":
				case event.code === "F5":
				case event.code === "F6":
				case event.code === "F7":
				case event.code === "F8":
				case event.code === "F9":
				case event.code === "F10":
				case event.code === "F11":
				case event.code === "F12":
					event.preventDefault();
					PopupController(event.code + "_popup");
					break;
					
				case event.code === "Insert":
					event.preventDefault();
					$("#command_line").html("connect4.exe");
					window.commands.execute();
					break;
				
				case event.code === "ArrowUp":
					if(activeObject !== "popup")
					{
						event.preventDefault();
						CommandHistory("up");
					}
					break;
					
				case event.code === "ArrowDown":
					if(activeObject !== "popup")
					{
						event.preventDefault();
						CommandHistory("down");
					}
					break;
				
				case event.code === "Space":
					if(activeObject !== "popup")
					{
						event.preventDefault();
						$("#command_line").append(" ");
					}
					break;
				
				case event.code === "Period":
					if(activeObject !== "popup")
					{
						event.preventDefault();
						$("#command_line").append(".");
					}
					break;
				
				case $.inArray(event.code[event.code.length - 1], "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890") !== -1:
					if(activeObject !== "popup")
					{
						event.preventDefault();
						$("#command_line").append(event.code[event.code.length - 1].toLowerCase());
					}
					break;
				
				case event.code === "Backspace":
					if(activeObject !== "popup")
					{
						event.preventDefault();
						$("#command_line").html($("#command_line").html().slice(0, -1));
					}
					break;
				
				case event.code === "Enter":
					if(activeObject !== "popup")
					{
						event.preventDefault();
						window.commands.execute();
					}
					break;
			}
		}
	}
});

$(document).click(function()
{
	if(window.activeObject !== "loading")
	{
		if(activeObject !== "commands" && activeObject !== "popup")
		{
			event.preventDefault();
			window[activeObject + "Obj"].OnClick(event.target);
		}
		else
		{
			if($.inArray("close-x", event.target.classList) !== -1)
			{
				PopupController(window.activePopup);
			}
		}
	}
});




