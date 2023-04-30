// Original left positions for slide menu and its handle
var OLMenuX = -220;
var OLHandX = -155;
var startingHandX = -195;
// Left X position for handle when slide menu is shown
var leftH = 50;

// Left X positions for slide menu and its handle
var leftXM = OLMenuX;
var leftXH = OLHandX;

var mouseDownFlag = false;
// Starting touch
    var startT;
    // Last change in x
    var lastDelta;


var sliderShown = false;


function setUpMenu(){
    setUpSlideMenu();
   
    d3.select('html').on("touchstart", function(d){
            hideSliderMenu();
            d3.select("#grades").style("visibility", "hidden");
        }).on("mousedown", function(d){
            if(mouseDownFlag) {
                slideTransition("off");
                d3.event.preventDefault();
                var coordinates = [0, 0];
                coordinates = d3.mouse(this);
                var x = coordinates[0];

                startT = x;
                lastDelta = 0;

                d3.event.stopPropagation();
            } else if(sliderShown) {
                hideSliderMenu();
                d3.select("#grades").style("visibility", "hidden");
            }
        }).on("mousemove", function(d){
            
            if(mouseDownFlag) {
                d3.event.preventDefault();
                var coordinates = [0, 0];
                coordinates = d3.mouse(this);
                var x = coordinates[0];

                var delta = (x - startT);
                var moveX = delta - lastDelta;

                if((leftXM + moveX <= 0) && (leftXM + moveX >= OLMenuX) && moveX != 0){
                    leftXM += moveX;
                    leftXH += moveX;
                    lastDelta = delta;

                    d3.select("#menu").style("left", leftXM + "px");
                    d3.select("#handle").style("left", leftXH + "px");
                }
                d3.event.stopPropagation();
            }
        }).on("mouseup", function(d){
            if(mouseDownFlag) {
                mouseDownFlag = false;
                slideMenu();
            } 
        });
}


function updateProgressBar(){
    var tempKnown = 8,
        tempAll = 10;
    
    
    var percentage = (tempKnown/tempAll)*100;
    d3.select("#innerProgressBar").style("width", percentage + "%").
        html("<span>" + tempKnown + "/" + tempAll + "</span>");
}

/////////////////////////////////////
// Hides/resets the slide menu
/////////////////////////////////////
function hideSliderMenu(){
    slideTransition("on");
    d3.select("#gradesSliderMenu").style("visibility", "hidden");
    d3.select("#menu").style("left", OLMenuX + "px");
    d3.select("#handle").style("left", OLHandX + "px");
    leftXM = OLMenuX;
    leftXH = OLHandX;
    
    setTimeout(function() {
         slideTransition("off");
    }, 400);
}

///////////////////////////////////////////////////////
// Change CSS transitions for handle and slide menu
//////////////////////////////////////////////////////
function slideTransition(state){
    if(state == 'on'){         
        d3.select("#handle").classed("transition", true);
        d3.select("#menu").classed("transition", true);

    } else {
        d3.select("#handle").classed("transition", false);
        d3.select("#menu").classed("transition", false);
    }
}

/////////////////////////////////////////////
// Changes slide menu's height when page loads
// and when window orientation changes
////////////////////////////////////////////
function chgSlideMenuHeight(){
    //d3.select("#menu").style("height", window.innerHeight + "px");
    d3.select("#handle").style("top", ((window.innerHeight/2)-100) + "px");
}
//////////////////////////////////////////////////
// Set up the slide menu and its handle
/////////////////////////////////////////////////
function setUpSlideMenu(){
    d3.select("#menu").style("visibility", "visible");
    d3.select("#handle").style("visibility", "visible");
    chgSlideMenuHeight();
    updateProgressBar();
    
    $(window).resize(function() {
        chgSlideMenuHeight();
    });
    
    
    
    d3.select("#menu").on("mousedown", function(d) {
        d3.event.preventDefault();
        d3.event.stopPropagation();
    }).on("touchstart", function(d) {
        d3.event.preventDefault();
        d3.event.stopPropagation();
    });
    

    
    d3.select("#handle").on("touchstart", function(d){
        slideTransition("off");
        d3.event.preventDefault();
        elementSpringStop('#handle');
        startT = d3.event.targetTouches[0].clientX;
        lastDelta = 0;
        
        d3.event.stopPropagation();
    }).on("touchmove", function(d){
        d3.event.preventDefault();
        var delta = (event.targetTouches[0].clientX - startT);
        var moveX = delta - lastDelta;

        if((leftXM + moveX <= 0) && (leftXM + moveX >= OLMenuX) && moveX != 0){
            leftXM += moveX;
            leftXH += moveX;
            lastDelta = delta;
           
            d3.select("#menu").style("left", leftXM + "px");
            d3.select("#handle").style("left", leftXH + "px");
        }
        d3.event.stopPropagation();
    }).on("touchend", function(d){
        slideMenu();
    }).on("mousedown", function(d){
        mouseDownFlag = true;
        slideTransition("off");
        elementSpringStop('#handle');
    }).on("mouseup", function(d){
        mouseDownFlag = false;
        slideMenu();
    });
    
    
    function hideGrades() {
        if(d3.select("#gradesSliderMenu").style("visibility") == "hidden"){
            d3.select("#gradesSliderMenu").style("visibility", "visible");
        } else {
            d3.select("#gradesSliderMenu").style("visibility", "hidden");
        }
        d3.event.stopPropagation();
    };
    
    d3.select("#cLevelMenu").style("visibility", "visible")
        .on("touchend", function(){
            hideGrades();
        }).on("click", function(){
            hideGrades();
        });
    
    d3.selectAll("#gradesSliderMenu > li")
        .on("touchend", function(){
            d3.event.stopPropagation();
        }).on("click", function(){
            d3.event.stopPropagation();
        });
};

function slideMenu() {
    d3.event.preventDefault();
    slideTransition("on");


    if(leftXM < OLMenuX/2){
        leftXM = OLMenuX;
        leftXH = OLHandX;
        sliderShown = false;
    } else {
        leftXM = 0;
        leftXH = leftH;
        sliderShown = true;
    }
    d3.select("#menu").style("left", leftXM + "px");
    d3.select("#handle").style("left", leftXH + "px");
    d3.event.stopPropagation();
    setTimeout(slideTransition, 800, "off");
};
