var infoFlag = false,
    researchFlag = false,
    aboutMeFlag = false,
    projectFlag = false,
    bioLoaded = false,
    resLoaded = false,
    proLoaded = false,
    quakeFlag = false;


$(document).ready(function () {
    
    var chgB = function(event) {
        $("#twitterBootLink").css('width', $("#projects").width());
    };
    window.onresize = chgB;
    
    var customLoad = function(event) {
        setTimeout(function() {
            $("#twitterBootLink").css('transition', 'width 1s')
                .css('width', $("#projects").width())
                .css('min-height', 300)
                .css('min-height', 300);
        }, 500);
    };
    window.onload = customLoad;
    
    /*Twitter*/
    (function(d, s, id) {
        
        var js, fjs = d.getElementsByTagName(s)[0],
            p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            fjs.parentNode.insertBefore(js, fjs);            
            js.src = p + "://platform.twitter.com/widgets.js";
        }
    })(document, "script", "twitter-wjs");
                 
    /* Set carousel/slide interval */
    $('.carousel').carousel({
        interval: 5200
    })

    $('#toTop').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('body').offset().top
        }, 1000, 'easeInOutQuad');

    });

    $('#info').click(function () {
        //$('#licenseInfo').css('display', 'block');
        if (!infoFlag) {
            $('#licenseInfo').slideDown(800);
        } else {
            $('#licenseInfo').slideUp(800);
        }
        infoFlag = !infoFlag;

    });

    $('#back').click(function (e) {
        window.location = "../index.php";

    });
    
    $('#backSD').click(function (e) {
        window.location = "index.php";

    });

    /*$('#licenseInfo').click(function () {
        if (infoFlag) {
            $('#licenseInfo').slideUp(800);
            infoFlag = !infoFlag;
        }
        

    });*/

    $('#aboutMeNav').click(function () {

        if (!researchFlag) {
            if (!aboutMeFlag) {
                if (!bioLoaded) {
                    $.ajax({
                        url: "bio.php",
                        dataType: "text",
                        async: false,
                        success: function (data) {
                            $("#bio").html(data);
                            bioLoaded = true;

                        }
                    });
                }

                $('#bio').slideDown(1500);
                $('html, body').animate({
                    scrollTop: $('#bioTop').offset().top
                }, 1000, 'easeInOutQuad');


            } else {
                $('#bio').slideUp(1500);
            }

            aboutMeFlag = !aboutMeFlag;
        }




    });

    $('#researchNav').click(function (e) {

        if (!researchFlag) {
            $('#research').css('display', 'block');

        } else {
            $('#research').css('display', 'none');
        }

        researchFlag = !researchFlag;

        e.stopPropagation();
    });

    $('#projectsNav').click(function () {
        if (!researchFlag) {
            if (!projectFlag) {
                if (!proLoaded) {
                    $.ajax({
                        url: "projects.php",
                        dataType: "text",
                        async: false,
                        success: function (data) {
                            $("#projects").html(data);
                            proLoaded = true;

                            $('#quakeVis').click(function () {
                                if (!quakeFlag) {
                                    $('#quakeInfo').slideDown(800);
                                } else {
                                    $('#quakeInfo').slideUp(800);
                                }
                                quakeFlag = !quakeFlag;

                            });
                        }
                    });
                }

                $('#projects').slideDown(800);
                $('html, body').animate({
                    scrollTop: $('#projects').offset().top
                }, 1000, 'easeInOutQuad');


            } else {
                $('#projects').slideUp(1500);
            }

            projectFlag = !projectFlag;
        }


    });


    /* Research */
    $(document).click(function (e) {
        if (researchFlag && $(e.target).closest('.innerClick').length === 0) {
            $('#research').css('display', 'none');
            researchFlag = false;
        }
    });

    $('#TLLClick').click(function (e) {
        if (researchFlag) 
            window.location.href = 'http://vialab.science.uoit.ca/portfolio/tandemtable';

    });

    $('#SMTClick').click(function (e) {
        if (researchFlag)
            window.location.href = 'http://vialab.science.uoit.ca/portfolio/smt-toolkit';

    });
    
    $('#S3DClick').click(function (e) {
        if (researchFlag)
            window.location.href = 'http://www.erikpaluka.com/research/percept/';

    });

   
    setTimeout(function(){$("#twitterBootLink").css('width', $("#mainPRow").width())}, 200);  
});


function brickbreaker() {

    var slideshow = ["images/brickbreaker-nophone2.jpg",
                    "images/brickbreaker-nophone3.jpg",
                    "images/brickbreaker-nophone4.jpg",
                    "images/brickbreaker-nophone.jpg",
                    "images/brickbreaker-nophone5.jpg"
    ];
    var iFrame = null;
    var index = 0;
    var time = 4000;

    function play() {
        if (iFrame === null) {
            iFrame = document.getElementById("breaker2");
            if (window.navigator.appName == "Microsoft Internet Explorer") {

            }
            setInterval("play()", time);
        }
        if (index >= slideshow.length - 1) {
            index = 0;
        } else {
            index++;
        }
        iFrame.src = slideshow[index];

    }
}

$('#TLLClick').mouseenter(function () {
    $("#TLLimg").animate({width: "160px", height: "160px"} ,"slow");
    $("#TLLp").animate({'max-width': "160px", width: "160px"} ,"slow");
});

$('#TLLClick').mouseleave(function () {
    $("#TLLimg").animate({width: "140px", height: "140px"} ,"slow");
    $("#TLLp").animate({'max-width': "140px", width: "140px"} ,"slow");
});


$('#SMTClick').mouseenter(function () {
    $("#SMTimg").animate({width: "160px", height: "160px"} ,"slow");
    $("#SMTp").animate({'max-width': "160px", width: "160px"} ,"slow");
});

$('#SMTClick').mouseleave(function () {
    $("#SMTimg").animate({width: "140px", height: "140px"} ,"slow");
    $("#SMTp").animate({'max-width': "140px", width: "140px"} ,"slow");
});

$('#S3DClick').mouseenter(function () {
    $("#S3Dimg").animate({width: "160px", height: "160px"} ,"slow");
    $("#S3Dp").animate({'max-width': "160px", width: "160px"} ,"slow");
});

$('#S3DClick').mouseleave(function () {
    $("#S3Dimg").animate({width: "140px", height: "140px"} ,"slow");
    $("#S3Dp").animate({'max-width': "140px", width: "140px"} ,"slow");
});
