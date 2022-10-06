function CON_Start()
{
	let that = window.connect4Obj;
	that.CON_GamePlaying = 0;
}

function CON_Loading()
{
	let that = window.connect4Obj
	that.CON_GamePlaying = 1;

	$("#CON_menu-text").css("visibility", "hidden");
	CON_BaseSettings();
	
	setTimeout(function()
	{
		$("#CON_loading-text").css("visibility", "initial");
		$("#CON_loading-text").html("Game start in 3 seconden");
	},1000);
	
	setTimeout(function()
	{
		$("#CON_loading-text").html("Game start in 2 seconden");
	},2000);
	
	setTimeout(function()
	{
		$("#CON_loading-text").html("Game start in 1 seconde &nbsp;");
	},3000);
	
	that.CON_FinalLoad = setTimeout(function()
	{
		$("#CON_loading-text").css("visibility", "hidden");
		$(".CON_box").css("visibility", "initial");
		//CON_StartGame();
		
	},4000);
}

 function CON_BaseSettings()
 {
 	let that = window.connect4Obj	
	$(".CON_box").remove();
 	for(let y = 1; y <= 6; y++)
	{
		for(let x = 1; x <= 7; x++)
		{
			$("#CON_area").append("<div class= 'CON_box x" + x + " y" + y + "' x="+x+" y="+y+"></div>");
		}
	}


	$(".CON_box").css("height", parseFloat($("#CON_area").css("height")) / 6 - 10.01);
	$(".CON_box").css("width", parseFloat($("#CON_area").css("width")) / 7 - 10.01);
}

/*function CON_timer(target, CON_rode_schijf, CON_gele_schijf) {
    this.type = type;
    this.width = width;
    this.height = height;
    this.x = x;
    this.y = y;    
    this.speedX = 0;
    this.speedY = 0;    
    this.gravity = 0.005;
    this.gravitySpeed = 0;
    this.update = function() {
        ctx = CON_area.context;
        ctx.fillStyle = color;
        ctx.fillRect(this.x, this.y, this.width, this.height);
 }
*/


function CON_Gravity(target, schijf){
	let x = $(target).attr("x");
	for (let y = 2;  y <= 6; y++) {

		if(!$(".CON_box.x" + x + ".y" + y).hasClass("CON_rode_schijf") && !$(".CON_box.x" + x + ".y" + y).hasClass("CON_gele_schijf"))
		{
			$(".CON_box.x" + x + ".y" + (y -1)).removeClass(schijf);
			$(".CON_box.x" + x + ".y" + y ).addClass(schijf);
		}
		else
		{
			break;
		}

	}
	Victory();
}

//}



function Victory()
{
	//x, y
	let arr = [
		[ [0,0], [1,1], [2,2], [3,3] ],//rechtsboven
		[ [0,0], [1,0], [2,0], [3,0] ],//rechts
		[ [0,0], [1,-1], [2,-2], [3,-3] ],//rechtsonder
		[ [0,0], [0,-1], [0                                                          ,-2], [0,-3] ], //onder
		[ [0,0], [-1,-1], [-2,-2], [-3,-3] ],//linksonder
		[ [0,0], [-1,0], [-2,0], [-3,0] ],//links
		[ [0,0], [-1,-1], [-2,-2], [-3,-3] ] //linksboven

	];

	console.log(arr);

}



//for (var i = Victory.length + 1; i >= 7; i++) {
//	Victory[]



//}






        
    



		