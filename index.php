<?php include( 'includes/meta.php'); ?>
    <title>Home Page - Erik Paluka</title>
    <meta name="description" content="Master of Science in Computer Science specializing in Human-Computer Interaction (Spatial & Multi-Touch Interaction) and Information Visualization.">

<!-- FB Open Graph -->        
<meta property="og:title" content="Home Page - Erik Paluka">
<meta property="og:url" content="http://www.erikpaluka.com/">

    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/slider/slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/slider/themes/light/light.css" type="text/css" media="screen" /> 

<style>
        #cover {
            width:100%;
            height: 100%;
            position: relative;
            margin:auto;
            z-index: 100;
            top: inherit;
            opacity: 0;
            transition: all 1s;
           
            
        }
        #cover img {
            transition: all 0.4s;
        }
    
        #coverContainer {
            position: fixed;
            left: 0px;
            top: 0px;
            width:  100%;
            height: 100%;
            z-index: 200;
            transition: top 1s;
        }
  

    #mask {
        background-color: aliceblue;
        opacity: 1;
        transition: opacity 500ms;
        position: fixed;
        height: 1595px;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 150;
    }
    </style> 
</head>

<body id="mainBody">
    <div id="mask"></div>
    <div style="display: none;">
        <div id="menu">
            <ul>
                <li>
                    <span id="progBarTitle">Fun side bar that I made. <br><br> Push a keyboard button to show a picture</span>
                </li>
                <li class="menuButtons" id="progressBar">
                    <div id="innerProgressBar"></div>
                </li>
                <li class="menuButtons" id="cLevelMenu"><span id="menuSpan">Menu</span>
                    <ul id="gradesSliderMenu">
                        <li id="B2Menu">.</li>
                        <li id="B6Menu">.</li>
                        <li id="A6Menu">.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="handle"></div>
    </div>
    
   
    
        <div class="container">
            <?php include( 'includes/header.php'); ?>



            <div id="sliderCont" class="slider-wrapper theme-light">
                <div id="coverContainer">
                    <div id="cover"></div>
                </div>
                <div id="slider" class="nivoSlider">

                    <a href="research/tandemtable/">
                        <img id="tllImg" src="img/TandemTable/TLL-mini.png" data-thumb="img/TandemTable/TLL.jpg" alt="TandemTable" title="#TLLcaption" width="900" height="400" />
                    </a>
                    
                    <a href="research/off-screen-desktop/">
                        <img id="offScreenImg" src="img/off-screen-mini.png" data-thumb="img/off-screen.png" alt="Off-Screen Desktop" title="#OffScreencaption" width="900" height="400" />
                    </a>
                    
                    <a href="research/affectvis/">
                        <img id="affectImg" src="img/edr-mini.jpg" data-thumb="img/edr-big.jpg" alt="Affective Computing Study" title="#Affectcaption" width="900" height="400" />
                    </a>
                    
                    <a href="research/percept/">
                        <img id="S3DImg" src="img/Perception-mini.png" data-thumb="img/Perception.jpg" alt="S3D Study" title="#Perceptcaption" width="900" height="400" />
                    </a>
                    <a href="research/smt/">
                        <img id="SMTImg" src="img/SMT/SMT-mini.png" data-thumb="img/SMT/SMT.jpg" alt="Simple Multi-Touch" title="#SMTcaption" width="900" height="400" />
                    </a>
                    <a href="projects/rayTracer/">
                        <img id="rayImg" src="img/raytracer-mini.png" data-thumb="img/raytracer.jpg" alt="Ray Tracer" title="#raycaption" width="900" height="400" />
                    </a>
                    <a href="projects/quakeVis/">
                        <img id="qukImg" src="img/quakeVis-mini.png" data-thumb="img/quakeVis.jpg" alt="QuakeVis" title="#quakecaption" width="900" height="400" />
                    </a>
                    <a href="projects/midpoint/">
                        <img id="midImg" src="img/midpoint-mini.png" data-thumb="img/midpoint.jpg" alt="Random Terrain Generation" title="#midpointcaption" width="900" height="400" />
                    </a>
                    <a href="projects/mouse-glove/">
                        <img id="mogImg" src="img/projects/glove/gloveSlider-mini.png" data-thumb="img/projects/glove/gloveSlider.jpg" alt="Mouse Glove Input Device" title="#glovecaption" width="900" height="400" />
                    </a> 
                </div>

                <div id="glovecaption" class="nivo-html-caption">
                    <a href="projects/mouse-glove/">Mouse Glove Input Device</a></div>
                
                <div id="Affectcaption" class="nivo-html-caption">
                    <a href="research/affectvis/">Physiological (Affective) Study of Information Visualizations</a></div>
                
                <div id="Perceptcaption" class="nivo-html-caption">
                    <a href="research/percept/">Stereoscopic 3D Perception Study</a></div>
                <div id="quakecaption" class="nivo-html-caption">
                    <a href="projects/quakeVis/">Earthquake Visualization using real-time data</a></div>

                <div id="midpointcaption" class="nivo-html-caption">
                    <a href="projects/midpoint/">Random Terrain Generation Experiment</a></div>
                <div id="raycaption" class="nivo-html-caption">
                    <a href="projects/rayTracer/">Ray Tracing Experiment</a></div>

                <div id="SMTcaption" class="nivo-html-caption">
                    <a href="research/smt/">Simple Multi-Touch (SMT) Toolkit</a>
                </div>
                
                <div id="OffScreencaption" class="nivo-html-caption">
                    <a href="research/off-screen-desktop/">Off-Screen Desktop &mdash; Master's Thesis</a>
                </div>
                
                <div id="TLLcaption" class="nivo-html-caption">
                    <a href="research/tandemtable/">TandemTable &mdash; Honours Undergraduate Thesis</a>
                </div>
            </div>

            <div>   
                <div id="News">
                     <div id="NewsTitle">News</div>
                     <iframe id="newsFrame" src="news.php"></iframe>
                    
                </div>


                <div id="twitterContainer">
                    <a class="twitter-timeline" data-lang="en" data-width="449" data-height="303" data-theme="light" href="https://twitter.com/ErikPaluka?ref_src=twsrc%5Etfw">Tweets by ErikPaluka</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                </div>

                <div class="clear"></div>
            </div> 

            
            <?php include( 'includes/footer.php'); ?>
        </div>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/d3.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/springTo.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/landing.js"></script>
</body>

</html>
<?php include( 'includes/compress.php'); ?>