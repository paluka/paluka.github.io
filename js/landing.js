var cover = null,
  websiteShown = false,
  sprung = false,
  shrunk = false,
  cName = "E_qw12_12",
  cookie = null,
  visitThresh = false,
  d = null, // date
  now = 0;

var randomSlide = Math.floor(Math.random() * 2); //0; //Math.floor(Math.random() * $("#slider a").length),

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i].trim();
    if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
  }
  return "";
}

function screenSaver(e) {
  var code = e.keyCode || e.which;

  if (code == 123 || !shrunk || (code >= 37 && code <= 40)) {
    return;
  } else if (sliderShown) {
    hideSliderMenu();
    setTimeout(screenSaverCSS, 500);
  } else {
    screenSaverCSS();
  }
}

function screenSaverCSS() {
  shrunk = false;
  elementSpringStop("#handle");
  elementSpringTo(
    "#handle",
    startingHandX,
    parseInt($("#handle").css("top"), 10),
    [100, 10, 1]
  );
  $("#coverContainer").css("position", "fixed");
  $("#coverContainer").css("top", 0);
  $("#coverContainer").css("left", 0);

  $("#cover").css("width", parseInt($(window).width(), 10) + "px");
  $("#cover").css("height", parseInt($(window).height(), 10) + "px");

  $(window).unbind("keyup", screenSaver);
  $(window).keyup(shrink);
  $("#coverContainer").click(shrink);
}

function shrink(e) {
  var code = e.keyCode || e.which;

  if (code == 123 || shrunk || (code >= 37 && code <= 40)) {
    return;
  } else if (sliderShown) {
    hideSliderMenu();
    setTimeout(shrinkCSS, 500);
  } else {
    shrinkCSS();
  }
}

function shrinkCSS() {
  shrunk = true;
  $("#cover img").css("width", "100%");
  $("#cover img").css("height", "100%");
  $("#cover").css("overflow", "hidden");
  $("#cover").css("width", 0);
  $("#cover").css("height", 0);
  $("#coverContainer").css("top", 400); //parseInt($('body').css('height'), 10));

  $(window).unbind("keyup", shrink);
  $(window).keyup(screenSaver);
  springHandle();

  setTimeout(function () {
    $("#coverContainer").css("top", parseInt($("body").css("height"), 10));
  }, 800);
}

function showWebsite(e) {
  var code = e.keyCode || e.which;

  if (code == 123 || websiteShown) {
    return;
  } else if (sliderShown) {
    hideSliderMenu();
    setTimeout(showWebsiteCSS, 500, e);
  } else {
    showWebsiteCSS(e);
  }
}

function showWebsiteCSS(e) {
  websiteShown = true;
  $(window).unbind("keyup", showWebsite);
  $("#coverContainer").unbind("click", showWebsite);
  shrink(e);
  $("#mask").css("opacity", 0);

  //$('#cover').css('border-radius', 25);

  setTimeout(function () {
    $("#mask").remove();
    //$('#coverContainer').remove();
  }, 500);
}

$(document).ready(function () {
  cookie = getCookie(cName);
  cover = new Image();
  d = new Date();
  now = d.getTime();

  if (cookie > 10 && now - cookie < 1200000) {
    visitThresh = true;
    $("#mask").remove();
    $("#coverContainer").css("opacity", 0);
    $("#cover").css("opacity", 0);
  } else {
    loadCover();
  }
});

function loadCover() {
  function start() {
    $("#cover").append(cover);
    $("#coverContainer").css("opacity", 1);
    /*$('#cover').css('background', 'url(\'../img/cover.jpg\') repeat center center'); 
         background: url('') repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;*/
  }

  if ($(window).width() > 1000) {
    if (randomSlide == 0) {
      cover.src = "../img/cover.jpg";
      cover.width = 2253;
      cover.height = 1200;
    } else if (randomSlide == 1) {
      cover.src = "../img/cover-off-screen.jpg";
      cover.width = 2253;
      cover.height = 1402;
    }

    if ($(window).height() > 1200) {
      cover.width = 2253 * ($(window).height() / cover.height);
      cover.height = $(window).height();
    }
  } else if ($(window).width() > 500) {
    if (randomSlide == 0) {
      cover.src = "../img/cover-med.jpg";
      cover.width = 1000;
      cover.height = 532;
    } else if (randomSlide == 1) {
      cover.src = "../img/cover-off-screen-med.jpg";
      cover.width = 1000;
      cover.height = 622;
    }
  } else {
    if (randomSlide == 0) {
      cover.src = "../img/cover-small.jpg";
      cover.width = 500;
      cover.height = 266;
    } else if (randomSlide == 1) {
      cover.src = "../img/cover-off-screen-small.jpg";
      cover.width = 500;
      cover.height = 311;
    }
  }
  cover.onLoad = start();

  $("#cover img").css("width", "100%");
  $("#cover img").css("height", "100%");
  $("#cover img").css("background-color", "transparent");

  //var mult = 0.5327;
  //$('#mask').css('height', mult*parseInt($('#coverContainer').css('width'), 10));
  //$('#coverContainer').css('height', mult*parseInt($('#coverContainer').css('width'), 10));
  $("#coverContainer").click(showWebsite);
  d3.select("#coverContainer").on("touchstart", showWebsite);
  $(window).keyup(showWebsite);
}

function springHandle() {
  $("#handle").css("z-index", 1000);
  $("#menu").css("z-index", 2000);

  if (sprung) {
    elementSpringStop("#handle");
  }

  setTimeout(function () {
    //$('#mask').remove();
    //$('#coverContainer').remove();

    elementSpringTo(
      "#handle",
      OLHandX,
      parseInt($("#handle").css("top"), 10),
      [100, 10, 1]
    );

    sprung = true;
  }, 1000);
}

window.onload = function () {
  $(window).keydown(function (e) {
    var code = e.keyCode || e.which;

    if (code == 32) {
      e.preventDefault();
      e.stopPropagation();
    }
  });
  $("#cover").css("opacity", 1);

  //console.log(cookie + ' ' + now);
  var e = jQuery.Event("keyup");
  if (visitThresh) {
    showWebsite(e);
    setTimeout(function () {
      loadCover();
    }, 1000);

    //console.log('Hello Again Visitor');
  } else {
    document.cookie = cName + "=" + now;
    //console.log('Hello There Visitor');

    setTimeout(function () {
      showWebsite(e);
    }, 1000);
  }
  setUpMenu();

  // Set height of Twitter widget based on height of news column
  // document.getElementById('twitAnchor').setAttribute('height', 300); // document.getElementById('News').clientHeight - 8);

  var startSlide = function () {
    //Initialize the slider
    $("#slider").nivoSlider({
      effect: "fade",
      slices: 15,
      boxCols: 8,
      boxRows: 4,
      animSpeed: 500,
      pauseTime: 6000,
      directionNav: true,
      controlNav: true,
      controlNavThumbs: false,
      pauseOnHover: false,
      manualAdvance: false,
      prevText: "Prev",
      nextText: "Next",
      startSlide: randomSlide,
      randomStart: false,
    });
  };

  ////////////////////////////////////////
  // Progressive load
  ///////////////////////////////////////
  var imgNum = -1;

  switch (randomSlide) {
    case 0:
      var imgTLL = new Image();
      imgTLL.onload = function () {
        $("#tllImg").attr("src", imgTLL.src);
        imgNum = 0;
        startSlide();
        loadOtherImgs(imgNum);
      };

      imgTLL.src = "/../img/TandemTable/TLL.jpg";
      break;
    case 1:
      // Off-Screen Desktop
      var imgOSD = new Image();
      imgOSD.onload = function () {
        $("#offScreenImg").attr("src", imgOSD.src);
        imgNum = 1;
        startSlide();
        loadOtherImgs(imgNum);
      };

      imgOSD.src = "/../img/off-screen.jpg";
      break;
    /*case 1:
             // Affective
             var imgS3D = new Image();
             imgS3D.onload = function () {
                 $('#S3DImg').attr("src", imgS3D.src);
                 imgNum = 1;
                 startSlide();
                 loadOtherImgs(imgNum);
             };

             imgS3D.src = '/../img/edr-big.jpg';
             break;
        case 1:
             // S3D Perception
             var imgS3D = new Image();
             imgS3D.onload = function () {
                 $('#S3DImg').attr("src", imgS3D.src);
                 imgNum = 1;
                 startSlide();
                 loadOtherImgs(imgNum);
             };

             imgS3D.src = '/../img/Perception.jpg';
             break;
             
        case 2:
             // SMT
             var imgSMT = new Image();
             imgSMT.onload = function () {
                 $('#SMTImg').attr("src", imgSMT.src);
                 imgNum = 2;
                 startSlide();
                 loadOtherImgs(imgNum);
             };

             imgSMT.src = '/../img/SMT/SMT.jpg';
             break;
        case 3:
             // Ray Tracer
             var imgRay = new Image();
             imgRay.onload = function () {
                 $('#rayImg').attr("src", imgRay.src);
                 imgNum = 3;
                 startSlide();
                 loadOtherImgs(imgNum);
             };

             imgRay.src = '/../img/raytracer.jpg';
             break;
        case 4:
             //Quake Vis
             var imgQuk = new Image();
             imgQuk.onload = function () {
                 $('#qukImg').attr("src", imgQuk.src);
                 imgNum = 4;
                 startSlide();
                 loadOtherImgs(imgNum);
             };

             imgQuk.src = '/../img/quakeVis.jpg';
             break;
        case 5:
             // Midpoint displacement algorithm
             var imgMid = new Image();
             imgMid.onload = function () {
                 $('#midImg').attr("src", imgMid.src);
                 imgNum = 5;
                 startSlide();
                 loadOtherImgs(imgNum);
             };

             imgMid.src = '/../img/midpoint.jpg';
             break;
        case 6:
              // Mouse Glove Input Device
             var imgMog = new Image();
             imgMog.onload = function () {
                 $('#mogImg').attr("src", imgMog.src);
                 imgNum = 6;
                 startSlide();
                 loadOtherImgs(imgNum);
             };

             imgMog.src = '/../img/projects/glove/gloveSlider.jpg';
             break;
        */
    default:
      break;
  }

  loadTwitter();
};

function loadOtherImgs(loaded) {
  if (loaded != 0) {
    var imgTLL = new Image();
    imgTLL.onload = function () {
      $("#tllImg").attr("src", imgTLL.src);
    };

    imgTLL.src = "/../img/TandemTable/TLL.jpg";
  }

  if (loaded != 1) {
    var imgOSD = new Image();
    imgOSD.onload = function () {
      $("#offScreenImg").attr("src", imgOSD.src);
    };

    imgOSD.src = "/../img/off-screen.jpg";
  }

  if (loaded != 2) {
    var imgAff = new Image();
    imgAff.onload = function () {
      $("#affectImg").attr("src", imgAff.src);
    };

    imgAff.src = "/../img/edr-big.jpg";
  }

  if (loaded != 3) {
    // S3D Perception
    var imgS3D = new Image();
    imgS3D.onload = function () {
      $("#S3DImg").attr("src", imgS3D.src);
    };

    imgS3D.src = "/../img/Perception.jpg";
  }

  if (loaded != 4) {
    // SMT
    var imgSMT = new Image();
    imgSMT.onload = function () {
      $("#SMTImg").attr("src", imgSMT.src);
    };

    imgSMT.src = "/../img/SMT/SMT.jpg";
  }

  if (loaded != 5) {
    // Ray Tracer
    var imgRay = new Image();
    imgRay.onload = function () {
      $("#rayImg").attr("src", imgRay.src);
    };

    imgRay.src = "/../img/raytracer.jpg";
  }

  if (loaded != 6) {
    //Quake Vis
    var imgQuk = new Image();
    imgQuk.onload = function () {
      $("#qukImg").attr("src", imgQuk.src);
    };

    imgQuk.src = "/../img/quakeVis.jpg";
  }

  if (loaded != 7) {
    // Midpoint displacement algorithm
    var imgMid = new Image();
    imgMid.onload = function () {
      $("#midImg").attr("src", imgMid.src);
    };

    imgMid.src = "/../img/midpoint.jpg";
  }

  if (loaded != 8) {
    // Mouse Glove Input Device
    var imgMog = new Image();
    imgMog.onload = function () {
      $("#mogImg").attr("src", imgMog.src);
    };

    imgMog.src = "/../img/projects/glove/gloveSlider.jpg";
  }
}

function loadTwitter() {
  //Twitter Widget Function
  (function (d, s, id) {
    var js,
      fjs = d.getElementsByTagName(s)[0],
      p = /^http:/.test(d.location) ? "http" : "https";

    if (!d.getElementById(id)) {
      js = d.createElement(s);
      js.id = id;
      js.src = p + "://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);
    }
  })(document, "script", "twitter-wjs");

  // $("iframe#twitter-widget-0").waitUntilExists(function(){
  //     $("iframe#twitter-widget-0").contents().find('head').append(
  //     '<style>::-webkit-scrollbar {-webkit-appearance: none; background-color: rgba(0, 0, 0, 0.1);} ::-webkit-scrollbar:vertical {width: 12px;} ::-webkit-scrollbar:horizontal {height: 12px;} ::-webkit-scrollbar-thumb { border-radius: 4px; background-color: rgba(0,0,0,.3); -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);} body {border: 1px solid #e8e8e8}</style>');
  // });
}

$.fn.waitUntilExists = function (handler, shouldRunHandlerOnce, isChild) {
  var found = "found";
  var $this = $(this.selector);
  var $elements = $this
    .not(function () {
      return $(this).data(found);
    })
    .each(handler)
    .data(found, true);

  if (!isChild) {
    (window.waitUntilExists_Intervals = window.waitUntilExists_Intervals || {})[
      this.selector
    ] = window.setInterval(function () {
      $this.waitUntilExists(handler, shouldRunHandlerOnce, true);
    }, 500);
  } else if (shouldRunHandlerOnce && $elements.length) {
    window.clearInterval(window.waitUntilExists_Intervals[this.selector]);
  }

  return $this;
};
