// Circle Active Flag
var uiFlag = false,

// Browser window width theshold for resizing
wThresh = 1300,

// Active page
page,

// Icon border rotation degrees
degree = 0,

// Current interval for icon borders
interval,

// Browser window width
width,

//	CSS toggle flag
wideCSS = false,

// Circle Wide CSS active
cWHeight = "850px",
cWLeft = "-300px",
cWTop = "-100px",

// Circle Wide CSS inactive
cWHeightS = "500px",
cWLeftS = "-200px",
cWTopS = "-200px",

// Circle Narrow CSS active
cNHeight = "425px",
cNLeft = "-150px",
cNTop = "-50px",

// Circle Narrow CSS inactive
cNHeightS = "250px",
cNLeftS = "-100px",
cNTopS = "-100px";			


$(window).resize(function () {
	width = $(window).width();
	resizing();
});

// Change CSS and animate change
function resizing() {
	
	if (!uiFlag) {
		if(width > wThresh){
			if(wideCSS != true){
				wideCSS = true;

				$("#UICircle").animate({
						top: cWTopS, left: cWLeftS,
						width: cWHeightS, height: cWHeightS
					}, "slow");
					
				$(".UIIcon").css({left:'-100px', width: '100px', height: '100px'});
				
				$(".IconTitle").css({'font-size': '1em', 'line-height': '100px'});
			
				$("#HomeIcon").css({top: "100px"});
				$("#BioIcon").css({top: "250px"});
				$("#ResearchIcon").css({top: "400px"});
				$("#ContactIcon").css({top: "550px"});
				
				$(".textContent").css({left: "800px"});
				$("#bioImgContainer").css({left: "820px"});
				$("#miniIcons").css({left: "510px", top: "700px"});
				$("#resize").animate({left: "550px", top: "600px"} ,"slow");
				$("#hide").animate({left: "640px", top: "600px"} ,"slow");
				 
			}
		} else {
			if(wideCSS == true){
				wideCSS = false;
				
				$("#UICircle").animate({
						top: cNTopS, left: cNLeftS,
						width: cNHeightS, height: cNHeightS
					}, "slow");
				
				$(".UIIcon").css({left:'-100px', width: '50px', height: '50px'});
				$(".IconTitle").css({'font-size': '10px', 'line-height': '50px'});
				
				$("#HomeIcon").css({top: "50px"});
				$("#BioIcon").css({top: "125px"});
				$("#ResearchIcon").css({top: "200px"});
				$("#ContactIcon").css({top: "275px"});


				$(".textContent").css({left: "300px"});
				$("#bioImgContainer").css({left: "320px"});
				$("#miniIcons").css({left: "30px", top: "500px"});
				$("#resize").animate({left: "50px", top: "400px"} ,"slow");
				$("#hide").animate({left: "140px", top: "400px"} ,"slow");

			}
		}
	} else {
		if(width > wThresh){
			if(wideCSS != true){
				wideCSS = true;

				$("#UICircle").animate({
					top: cWTop, left: cWLeft,
					width: cWHeight, height: cWHeight
					}, "slow");

				$(".UIIcon").animate({
					left:'200px', 
					width: "100px", height: "100px"
					}, "slow");
				
				$(".IconTitle").animate({'font-size': '1em', 'line-height': '100px'}, "slow");
					
				 $("#HomeIcon").animate({top: "100px"}, "slow");
				 $("#BioIcon").animate({top: "250px"}, "slow");
				 $("#ResearchIcon").animate({top: "400px"}, "slow");
				 $("#ContactIcon").animate({top: "550px"}, "slow");
				 
				 $(".textContent").animate({left: "800px"}, "slow");
				 $("#bioImgContainer").animate({left: "820px"}, "slow");
				 $("#miniIcons").animate({left: "510px", top: "700px"}, "slow");
				 $("#resize").animate({left: "550px", top: "600px"} ,"slow");
				 $("#hide").animate({left: "640px", top: "600px"} ,"slow");

			}
		} else {
			if(wideCSS == true){
				wideCSS = false;

				$("#UICircle").animate({
					top: cNTop, left: cNLeft,
					width: cNHeight, height: cNHeight
				}, "slow");
				
				$(".UIIcon").animate({
					left: "100px", 
					width: "50px", height: "50px"
					}, "slow");
				
				$(".IconTitle").animate({'font-size': '10px', 'line-height': '50px'}, "slow");
				
				$("#HomeIcon").animate({top: "50px"}, "slow");
				$("#BioIcon").animate({top: "125px"}, "slow");
				$("#ResearchIcon").animate({top: "200px"}, "slow");
				$("#ContactIcon").animate({top: "275px"}, "slow");


				$(".textContent").animate({left: "300px"}, "slow"); 
				$("#bioImgContainer").animate({left: "320px"}, "slow"); 
				$("#miniIcons").animate({left: "30px"}, "slow");
				$("#resize").animate({left: "50px"} ,"slow");
				$("#hide").animate({left: "140px"} ,"slow");
				
				// Seperated for cool animation - left movement, then top movement
				$("#miniIcons").animate({top: "500px"}, "slow");
				$("#resize").animate({top: "400px"} ,"slow");
				$("#hide").animate({top: "400px"} ,"slow");
	
			}
		}
	}
};

// Main function
$(window).load(function () {
	width = $(window).width();
	
	if(width <= wThresh) wideCSS = true;
	
	$(".Content").css("visibility", "visible");
	$(".Content").css("opacity", "0");
	videoBugFF();
	
	setTimeout(function(){ 
        showContent(); 
        resizing();
    }, 1500);
	
	
	
	$("#hide").click(function (e) {
		
		/* Click only in circle 
			var centerX = img_pos.left + (img_width/2);
			var centerY = img_pos.top + (img_height/2);
			Math.sqrt(Math.pow(e.clientX-centerX, 2) + Math.pow(e.clientY-centerY, 2)) < (element_radius)*/

		/*var centerX = parseInt($("#UICircle").css('left')) + (parseInt($("#UICircle").css('width'))/2),
			centerY = parseInt($("#UICircle").css('top')) + (parseInt($("#UICircle").css('height'))/2);
		
		if(Math.sqrt(Math.pow(e.clientX-centerX, 2) + Math.pow(e.clientY-centerY, 2)) < parseInt($("#UICircle").css('width'))/2){*/
			if (uiFlag) {
				videoBugFF();
				$(".Content").animate({opacity:'0'}, "slow");
				$(".Content").css('z-index', '-1');
				$("#miniIcons").animate({opacity:'0'}, "slow");
		

				if(width > wThresh){
					
					$("#UICircle").animate({
						top: cWTopS, left: cWLeftS,
						width: cWHeightS, height: cWHeightS
					}, "slow");

					$(".UIIcon").animate({
						opacity:'0', left:'-100px'}, "slow");									
						
				} else {
					$("#UICircle").animate({
						top: cNTopS, left: cNLeftS,
						width: cNHeightS, height: cNHeightS
					}, "slow");

					$(".UIIcon").animate({
						opacity:'0', left:'-100px'}, "slow");
				}

				uiFlag = false;
				page = null;
			} else if (!uiFlag){
				showContent();
				$("#miniIcons").animate({opacity:'1'}, 1500);						
			}
		//}
		
	});
				 
	
	$("#resize").click(function () {
		if(wideCSS){
			width = wThresh - 200;
		} else {
			width = wThresh + 200;
		}
		
		resizing();
	});
					
	$(".UIIcon").hover(function(){
		var func;
		
		if(this == $("#HomeIcon")[0]){
			$("#HomeBorder").css('border-left-color', 'RED');
			rotate($("#HomeBorder"), degree);
			func = function(){
				rotate($("#HomeBorder"), degree);
				degree++;};
		} else if(this == $("#BioIcon")[0]){
			$("#BioBorder").css('border-left-color', 'RED');
			rotate($("#BioBorder"), degree);
			func = function(){
				rotate($("#BioBorder"), degree);
				degree++;};
		} else if(this == $("#ResearchIcon")[0]){
			$("#ResearchBorder").css('border-left-color', 'RED');
			rotate($("#ResearchBorder"), degree);
			func = function(){
				rotate($("#ResearchBorder"), degree);
				degree++;};
		} else if(this == $("#ContactIcon")[0]){
			$("#ContactBorder").css('border-left-color', 'RED');
			rotate($("#ContactBorder"), degree);
			func = function(){
				rotate($("#ContactBorder"), degree);
				degree++;};
		}
		
		interval = setInterval(func, 1);
	}, function() {
		resetBorder();
	});
	
	$("#HomeIcon").click(function () {
		videoBugFF();
		displayHome();
	});

	$("#BioIcon").click(function () {
		videoBugFF();
		displayBio();
	});
	
	$("#ResearchIcon").click(function () {
		displayResearch();
	});
	
	
	$("#ContactIcon").click(function () {
		videoBugFF();
		displayContact();
	});

});

function showContent(){
	if(width > wThresh){
		$("#UICircle").animate({
			top: cWTop, left: cWLeft,
			width: cWHeight, height: cWHeight
		}, "slow");

		$(".UIIcon").animate({
			opacity:'1', left:'200px'}, "slow");
			
	} else {
		$("#UICircle").animate({
			top: cNTop, left: cNLeft,
			width: cNHeight, height: cNHeight
		}, "slow");

		$(".UIIcon").animate({
			opacity:'1', left:'100px'}, "slow");
			
	}

	displayHome();

	page = "Home";
	uiFlag = true;

}

/* Firefox Bug - iframe opacity and visibility functions
					not working*/				
function videoBugFF(){
	//if(!window.chrome)
		//$("#video").css('visibility', 'hidden');//attr('src', '');
        $("#video").animate({width: '1'}); 
        $("#video").animate({height: '1'}); 
}


	
function resetBorder(){
	clearInterval(interval);
	$("#HomeBorder").css('border-left-color', '#5CB3FF');
	$("#BioBorder").css('border-left-color', '#5CB3FF');
	$("#ResearchBorder").css('border-left-color', '#5CB3FF');
	$("#ContactBorder").css('border-left-color', '#5CB3FF');
}

						
function rotate(oj, deg){
	oj.css({
		'-webkit-transform': 'rotate(' + deg + 'deg)',
		'-moz-transform': 'rotate(' + deg + 'deg)',
		'-ms-transform': 'rotate(' + deg + 'deg)',
		'-o-transform': 'rotate(' + deg + 'deg)',
		'transform': 'rotate(' + deg + 'deg)'});	
}

function displayBio(){					
	if(page != "Bio"){
		$(".Content").animate({opacity:'0'}, "slow");
		$(".Content").css('z-index', '-1');

		$("#BioContent").css('z-index', '1');
		$("#BioContent").animate({opacity:'1'}, "slow");


		$("#bioImg").attr('src', 'img/erik2.jpg');
		$("#bioImgContainer").animate({opacity:'1'}, "slow");
		page = "Bio";
	}
}
	
function displayResearch(){
	if(!window.chrome && page != "Research")
			$("#video").css('display', 'inherit');//attr('src', 'http://www.youtube.com/embed/A49yhZPMfjA');
	
	
	if(page != "Research"){
		$(".Content").animate({opacity:'0'}, "slow");
		$(".Content").css('z-index', '-1');

		$("#ResearchContent").css('z-index', '1');
		$("#ResearchContent").animate({opacity:'1'}, "slow");
		page = "Research";
        $("#video").css('width', '306'); 
        $("#video").css('height', '255');
	}
}


function displayContact(){
	if(page != "Contact"){
		$(".Content").animate({opacity:'0'}, "slow");
		$(".Content").css('z-index', '-1');

		$("#ContactContent").css('z-index', '1');
		$("#ContactContent").animate({opacity:'1'}, "slow");
		page = "Contact";
	}
}

function displayHome() {
	if(page != "Home"){
		$(".Content").animate({opacity:'0'}, "slow");
		$(".Content").css('z-index', '-1');

		$("#HomeContent").css('z-index', '1');
		$("#HomeContent").animate({opacity:'1'}, "slow");
		page = "Home";
	}
}
