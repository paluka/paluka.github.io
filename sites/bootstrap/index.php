<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Erik Paluka is a graduate student in the visualization for information analysis lab (vialab) at the University of Ontario Insitute of Technology (UOIT).">
        <meta name="keywords" content="computer science human computer interaction multi-touch">
        <meta name="author" content="Erik Paluka">
        <link rel="shortcut icon" href="http://www.erikpaluka.com/img/favicon.ico">
        <title>Erik Paluka's Website</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/main.css">
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
        
        <!-- Google Analytics -->
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-32905413-2']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
    </head>
    
    <body data-responsejs='{"create" : {"mode" : "src", "prefix" : "src"}}'>
                
        <div id="carousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
                <li data-target="#carousel" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/TandemTable.jpg" alt="TandemTable">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>TandemTable</h1>
                            <br>
                            <p>Multi-touch tabletop system designed to aid tandem language learners.</p>
                            <!-- <p>
              A computer-assisted language learning system designed for dyadic co-located tandem language learners. It employs an interactive tabletop to share curated digital artifacts to learners.</p>-->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/SMT.jpg" alt="Simple Multi-Touch (SMT)">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Simple Multi-Touch</h1>
                            <br>
                            <p>A Processing/Java library designed to simplify multi-touch development and prototyping.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div data-src0='<img src=img/RayTracing-small.jpg alt="Ray Tracing">' data-src961='<img src=img/RayTracing.jpg alt="Ray Tracing">'></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Ray Tracing Experiment</h1>
                            <br>
                            <p>JavaScript ray tracing implementation that supports spheres and planes.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/MidPoint.jpg" alt="Midpoint Displacement Algorithm">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Random Terrain Generation</h1>
                            <br>
                            <p>Random terrain generation using the midpoint displacement algorithm in WebGL.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/Perception.jpg" alt="Perception Study">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Perception Study</h1>
                            <br>
                            <p>Evaluating the perceived relative depth of stereoscopically rendered two-dimensional shapes.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div data-src0='<img src=img/QuakeVis-small.jpg alt="QuakeVis">' data-src961='<img src=img/QuakeVis.jpg alt="QuakeVis">'></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>QuakeVis</h1>
                            <br>
                            <p>A visualization of past earthquakes on Earth using real-time data from the United States Geological Survey agency.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <div class="container marketing">
            <div class="row">
                <div id="aboutMeNav" class="col-xs-4 col-sm-4 col-md-4 mainButton">
                    <img class="img-circle" src="img/Circle500.jpg" data-src="img/Circle500.jpg" alt="Erik Paluka" width="140" height="140">
                    <br>
                    <p class="btn btn-lg btn-info">About Me</p>
                </div>
                <div id="researchNav" class="col-xs-4 col-sm-4 col-md-4 mainButton">
                    <img class="img-circle" src="img/projects.png" data-src="img/projects.png" alt="Research" width="140" height="140">
                    <br>
                    <p class="btn btn-lg btn-success">Research</p>
                </div>
                <div id="projectsNav" class="col-xs-4 col-sm-4 col-md-4 mainButton">
                    <img class="img-circle" src="img/rocket.png" data-src="img/rocket.png" alt="Projects" width="140" height="140">
                    <br>
                    <p class="btn btn-lg btn-warning">Projects</p>
                </div>
            </div>
            
            <div id="bio" class="row"></div>
            
            <div id="research" class="row">
                <div id="innerResearch">
                    <div id="tandemTable" class="col-xs-4 col-sm-4 col-md-4 mainButton">
                        <div class="innerButton">
                            <div class="innerClick" id="TLLClick">
                                <img id="TLLimg" src="img/TandemTable.jpg" data-src="img/TandemTable.jpg" alt="Erik Paluka" width="140" height="140">
                                <br>
                                <p id="TLLp" class="btn btn-lg btn-info researchButton">TandemTable</p>
                            </div>
                        </div>
                    </div>
                    <div id="smt" class="col-xs-4 col-sm-4 col-md-4 mainButton">
                        <div class="innerButton">
                            <div class="innerClick" id="SMTClick">
                                <img id="SMTimg" src="img/hand.jpg" data-src="img/hand.jpg" alt="SMT" width="140" height="140">
                                <br>
                                <p id="SMTp" class="btn btn-lg btn-info researchButton">Simple
                                    <br>Multi-Touch</p>
                            </div>
                        </div>
                    </div>
                    <div id="s3D" class="col-xs-4 col-sm-4 col-md-4 mainButton">
                        <div class="innerButton">
                            <div class="innerClick" id="S3DClick">
                                <img id="S3Dimg" src="img/Perception.jpg" data-src="img/Perception.jpg" alt="S3D" width="140" height="140">
                                <br>
                                <p id="S3Dp" class="btn btn-lg btn-info researchButton">Stereoscopic
                                    <br>3D Study</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="projects" class="row"></div>
            <hr class="featurette-divider">
            <div class="row">
                <div id="mainPRow" class="col-lg-12">
                    <a id="twitterBootLink" class="twitter-timeline" href="https://twitter.com/ErikPaluka" data-widget-id="347096223758573568" width="500" height="300" lang="EN" data-chrome="nofooter">Tweets by @ErikPaluka</a>
                </div>
            </div>
            <hr class="featurette-divider">
            <footer>
                <div id="licenseInfo" class="alert alert-success" style="display: none;">
                    <ul>
                        <li>The rocket ship image and both hand images have been modified.</li>
                        <li style="list-style: none;">The original rocket ship was created by the user
                            <a href="http://www.vecteezy.com/members/webape" target="_blank">webape</a>and is licensed under
                            <a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank">Creative Commons</a>.</li>
                        <li style="list-style: none;">The original pinch hand was created by the user
                            <a href="http://www.flaticon.com/authors/freepik" target="_blank">Freepik</a>and is licensed under
                            <a href="http://creativecommons.org/licenses/by/3.0/legalcode" target="_blank">Creative Commons</a>.</li>
                        <li style="list-style: none;">The original hand palm was created by the user
                            <a href="http://www.freedigitalphotos.net/images/view_photog.php?photogid=2020" target="_blank">twobee</a>from
                            <a href="http://www.freedigitalphotos.net/" target="_blank">www.freedigitalphotos.net</a>.</li>
                    </ul>
                </div>
                <p class="pull-right">
                    <a id="toTop" href="">Back to top</a>
                </p>
                <p>&copy; 2012-2013. Erik Paluka &middot;
                    <span id="info">Info</span>
                </p>
            </footer>
        </div>
        
        <a style="visibility: hidden;" href="https://plus.google.com/114064655173059994291?rel=author">Google</a>
        <script src="js/jquery-2.0.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/response.min.js"></script>
        <script src="js/site.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
    </body>

</html>