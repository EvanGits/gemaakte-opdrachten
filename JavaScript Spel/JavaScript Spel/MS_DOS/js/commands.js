$(document).ready(function()
{
	var loaderArray;
	var loaderIndex;
	var loaderInterval;
	var cursorInterval;
	
	var blockedCommands = ["init1", "init2", "init3", "initCursor"];
	var commandLine;
	
	window.commands = 
	{
		"execute": function()
		{
			if($("#command_line").html().replace(" ", "").length > 0)
			{
				$("#history").append($("#cursor div:first-child").html() + $("#command_line").html() + "<br>");
				window.commandHistory.unshift($("#command_line").html());
				window.commandHistoryPos = -1;
				
				commandLine = $("#command_line").html().split(" ");
				let command = commandLine.shift();
				$("#command_line").html("");
				
				if($.inArray(command, blockedCommands) === -1)
				{
					if($.inArray(command, window.availablePrograms) !== -1)
					{
						ProgramHandler("load", command.split(".")[0]);
					}
					else
					{
						try
						{
							window.commands[command]();
						}
						catch(e)
						{
							$("#history").append("Bad command or filename<br>");
						}
					}
				}
				else
				{
					$("#history").append("Bad command or filename<br>");
				}
			}
			else
			{
				$("#command_line").html("");
			}
		},
		
		"restart": function()
		{
			window.activeObject = "loading";
			window.commandHistory = [];
			window.commandHistoryPos = -1;
			
			let delay = 3000;
			let year = new Date();
			year = year.getFullYear();
			
			loaderArray = ['|', '/', '-', '\\'];
			loaderIndex = 0;
			loaderInterval = setInterval(function()
			{
				$("#loader").html(loaderArray[loaderIndex]);
				if(loaderIndex + 1 >= loaderArray.length)
				{
					loaderIndex = 0;
				}
				else
				{
					loaderIndex++;
				}
			}, 100);
			$("#loader").css("display", "block");
			$("#cursor").css("display", "none");
			
			window.commands.initCursor();
			window.commands.init1(year, delay);
		},
		
		"init1": function(year, delay)
		{
			$("#history").html("");
			
			let content = [
				"Loading...Complete.<br>",
				"User/Rel/Mod<br>",
				"Driver..........:  520<br>",
				"System..........:  500 XPF/500 SLIC<br>",
				"Owner...........:  Mark B. Ellson<br>",
				"Install date....:  11-05-2021<br>",
				"System usage....:  512kB<br>",
				"Sec level.......:  3<br><br>"
			];
			
			let init1Interval = setInterval(function()
			{
				if(content.length > 0)
				{
					$("#history").append(content.shift());
				}
				else
				{
					clearInterval(init1Interval);
					setTimeout(function()
					{
						window.commands.init2(year, delay);
					}, delay);
				}
			}, 200);
		},

		"init2": function(year, delay)
		{
			let content = "";
			content += " _____            ____                    ____             _           <br>";
			content += "|_   _| ___  ___ |    \\  ___  _ _ _  ___ |    \\  ___  ___ |_| ___  ___<br>";
			content += "  | |  | . || . ||  |  || . || | | ||   ||  |  || -_||_ -|| || . ||   |<br>";
			content += "  |_|  |___||  _||____/ |___||_____||_|_||____/ |___||___||_||_  ||_|_|<br>";
			content += "            |_|                                              |___|     <br>";
			content += "<br><br>";
			content += "TopDownDesign (R) DOS Emulator Version 3.0<br>";
			content += "(C) TopDownDesign.eu " + year + "<br>";
			
			$("#history").html(content);
			
			setTimeout(function()
			{
				window.commands.init3(year);
			}, delay);
		},

		"init3": function(year)
		{
			let content = "";
			content += "<br>";
			content += "TopDownDesign (R) DOS Emulator Version 3.0<br>";
			content += "(C) TopDownDesign.eu " + year + "<br>";
			content += "<br>";
			content += "Type HELP for a list of available commands.<br><br>";

			$("#history").html(content);
			$("#loader").css("display", "none");
			$("#cursor").css("display", "block");
			clearInterval(loaderInterval);
			
			window.activeObject = "commands";
			window.commands.initCursor();
		},
		
		"initCursor": function()
		{
			clearInterval(cursorInterval);
			
			if(window.activeObject === "commands")
			{
				cursorInterval = setInterval(function()
				{
					if($("#cursor>div:last-child").css("display") === "block")
					{
						$("#cursor>div:last-child").css("display", "none")
					}
					else
					{
						$("#cursor>div:last-child").css("display", "block")
					}
				}, 750);
			}
		},
		
		"help": function()
		{
			let content = "";
			content += "+------------+<br>";
			content += "|    HELP    |<br>";
			content += "+------------+<br><br>";
			content += "Supported commands:<br>";
			content += "<table>";
			content += "<tr><td>  HELP</td><td> | See this page</td></tr>";
			content += "<tr><td>  COLOR [hex ###/######]</td><td> | Change the color of the system</td></tr>";
			content += "<tr><td>  COLOR [rgb ### ### ###]</td><td> | Change the color of the system</td></tr>";
			content += "<tr><td>  COLOR [txt]</td><td> | Change the color of the system</td></tr>";
			content += "<tr><td>  ECHO [txt]</td><td> | Write your own text</td></tr>";
			content += "<tr><td>  CLS</td><td> | Clear the screen</td></tr>";
			content += "<tr><td>  PROGRAMS</td><td> | Show all executable programs</td></tr>";
			content += "<tr><td>  MEM</td><td> | Show all loaded programs</td></tr>";
			content += "<tr><td>  RESTART</td><td> | Restart the DOS</td></tr>";
			content += "</table><br>";

			$("#history").append(content);
		},
		
		"programs": function()
		{
			let content = "";
			if(window.availablePrograms.length > 0)
			{
				content += "+------------+<br>";
				content += "|  PROGRAMS  |<br>";
				content += "+------------+<br><br>";
				content += "Executable programs:<br>";
				content += "<table>";
				for(let i = 0; i < window.availablePrograms.length; i++)
				{
					content += "<tr><td>" + window.availablePrograms[i] + "</td></tr>";
				}
				content += "</table><br>";
			}
			else
			{
				content += "No executable programs available";
			}
			$("#history").append(content);
		},
		
		"cls": function()
		{
			$("#history").html("");
		},
		
		"echo": function()
		{
			let content = "";
			
			if(commandLine.length > 0)
			{
				content += commandLine.join(" ")
				content += "<br>";
				
			}
			else
			{
				content += "No text string given<br>";
			}
			$("#history").append(content);
		},
		
		"mem": function()
		{
			let content = "";
			
			if(window.loadedPrograms.length > 0)
			{
				content += "+------------+<br>";
				content += "|   MEMORY   |<br>";
				content += "+------------+<br><br>";
				content += "Loaded programs:<br>";
				for(let i = 0; i < window.loadedPrograms.length; i++)
				{
					content += "  " + window.loadedPrograms[i] + ".exe<br>";
				}
				content += "<br><br>";
			}
			else
			{
				content += "No programs loaded<br>";
			}
			$("#history").append(content);
		},
		
		"color": function()
		{
			let color = "null";
			
			if(commandLine[0] != undefined && commandLine[0].length > 0)
			{
				if(commandLine[0] == "hex" && (commandLine[1].length == 3 || commandLine[1].length == 6))
				{
					color = "#" + commandLine[1];
				}
				else if(commandLine[0] == "rgb")
				{
					if(commandLine[1] !== undefined && commandLine[2] !== undefined && commandLine[3] !== undefined)
					{
						color = "rgb(" + commandLine[1] + "," + commandLine[2] + ","+ commandLine[3]  + ")";
					}
				}
				else if(jQuery.inArray(commandLine[0] ,CSS_COLOR_NAMES) !== -1)
				{
					color = commandLine[0];
				}
			}
			
			if(color !== "null")
			{
				$(document.documentElement).attr("style","--primaryDosColor:" + color);
			}
			else
			{
				$(document.documentElement).attr("style","--primaryDosColor: #2c2");
			}
		}
	}
});