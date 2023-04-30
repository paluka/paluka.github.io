    <?php include( '../includes/meta.php'); ?>
<title>Projects - Erik Paluka</title>
    <meta name="description" content="Computer science projects that Erik Paluka has worked on">

    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
</head>

<body onload="play();">
    <div class="container">
        <?php include( '../includes/header.php'); ?>

        <h1 class="projectCategory">Various Projects</h1>
        <div class="projectRow">

            <a href="react-flickr/">
                <div class="researchProject">
                    <img alt="Flickr Photo App" src="../img/projects/flickr-react.jpg" width="250" height="250">
                    <div class="projectTitle">Flickr Photo Web App Using ReactJS</div>
                </div>
            </a>

            <a href="mouse-glove/">
                <div class="researchProject">
                    <img alt="Mouse Glove" src="../img/projects/glove/gloveBottom-small.jpg" width="250" height="250">
                    <div class="projectTitle">Mouse Glove
                        <br>Input Device</div>
                </div>
            </a>
            <a href="quakeVis/">
                <div class="researchProject">
                    <img alt="QuakeVis" src="../img/projects/quakeVis-small.jpg" width="250" height="250">
                    <div class="projectTitle">QuakeVis: Visualization of Earthquake Data</div>
                </div>
            </a>
        </div>
        <br>
        <div class="projectRow">
            <a href="midpoint/">
                <div class="researchProject">
                    <img alt="Random Terrain Generation" src="../img/projects/midpoint-small.jpg" width="250" height="250">
                    <div class="projectTitle">JavaScript &amp; WebGL
                        <br>Random Terrain Generation</div>
                </div>
            </a>
            <a href="rayTracer/">
                <div class="researchProject">
                    <img alt="Ray Tracer" src="../img/projects/raytracing-250.jpg" width="250" height="250">
                    <div class="projectTitle">JavaScript
                        <br>Ray Tracer</div>
                </div>
            </a>
            <a href="uist2012/">
                <div class="researchProject">
                    <img alt="UIST Student Innovation Contest" src="../img/projects/ForcePad.jpg" width="250" height="250">
                    <div class="projectTitle">UIST 2012
                        <br>Student Innovation Contest</div>
                </div>
            </a>
        </div>

        <h1 class="projectCategory">Undergraduate Projects</h1>
        <div class="projectRow">

            <a href="openglmovie/">
                <div class="researchProject">
                    <img alt="OpenGL Movie" src="../img/projects/graphicsYoutube.jpg" width="250" height="250">
                    <div class="projectTitle">Travelling Through a Scene
                        <br>Interactive OpenGL Movie</div>
                </div>
            </a>
            <a href="simulator/">
                <div class="researchProject">
                    <img alt="Simulating Multiple 2D Rigid Body Collisions" src="../img/projects/simYoutube.jpg" width="250" height="250">
                    <div class="projectTitle">Simulating Multiple 2D Rigid Body Collisions</div>
                </div>
            </a>
            <a href="brickbreaker/">
                <div class="researchProject">
                    <img alt="iPhone Brick Breaker" src="../img/projects/brickbreaker-nophone.jpg" width="250" height="250" id="breaker">
                    <div class="projectTitle">iPhone
                        <br>Brick Breaker Game</div>
                </div>
            </a>
        </div>

        <!--<h1 class="projectCategory">Websites</h1>-->
        <!--<div class="projectRow">-->

        <!--    <a href="http://www.whatwakepark.com/">-->
        <!--        <div class="researchProject">-->
        <!--            <img alt="What Wake Park" src="../img/projects/wwp-site.png" width="250" height="250">-->
        <!--            <div class="projectTitle">www.WhatWakePark.com</div>-->
        <!--        </div>-->
        <!--    </a>-->

        <!--    <a href="http://www.torontokirtan.ca/">-->
        <!--        <div class="researchProject">-->
        <!--            <img alt="Toronto Kirtan Community" src="../img/projects/tkc.png" width="250" height="250">-->
        <!--            <div class="projectTitle">Toronto Kirtan-->
        <!--                <br>Community Website</div>-->
        <!--        </div>-->
        <!--    </a>-->

        <!--    <a href="http://vialab.science.uoit.ca/smt/">-->
        <!--        <div class="researchProject">-->
        <!--            <img alt="Simple Multi-Touch Website" src="../img/projects/SMT-Web.jpg" width="250" height="250">-->
        <!--            <div class="projectTitle">Simple Multi-Touch-->
        <!--                <br>Website</div>-->
        <!--        </div>-->
        <!--    </a>-->
        <!--</div>-->
        <!--<h1 class="projectCategory">Personal Websites</h1>-->
        <!--<div class="projectRow">-->

        <!--    <a href="http://www.erikpaluka.com/">-->
        <!--        <div class="researchProject">-->
        <!--            <img alt="ErikPaluka.com" src="../img/projects/website.jpg" width="250" height="250">-->
        <!--            <div class="projectTitle">www.ErikPaluka.com</div>-->
        <!--        </div>-->
        <!--    </a>-->
        <!--    <a href="http://www.erikpaluka.com/sites/bootstrap/">-->
        <!--        <div class="researchProject">-->
        <!--            <img alt="Fluid Site" src="../img/projects/fluidSite-small.jpg" width="250" height="250">-->
        <!--            <div class="projectTitle">Fluid Website</div>-->
        <!--        </div>-->
        <!--    </a>-->
        <!--    <a href="http://www.erikpaluka.com/sites/singleHTML/">-->
        <!--        <div class="researchProject">-->
        <!--            <img alt="Single Dynamic HTML Page" src="../img/projects/1PageSite.jpg" width="250" height="250">-->
        <!--            <div class="projectTitle">Single Dynamic-->
        <!--                <br>HTML Page Website-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </a>-->
        <!--</div>-->

<br>
        <?php include( '../includes/footer.php'); ?>
    </div>


    <script>
        var slideshow = ["../img/projects/brickbreaker-nophone2.jpg",
            "../img/projects/brickbreaker-nophone3.jpg",
            "../img/projects/brickbreaker-nophone4.jpg",
            "../img/projects/brickbreaker-nophone.jpg",
            "../img/projects/brickbreaker-nophone5.jpg"];
        var iFrame = null, index = 0, time = 4000;

        function play() {
            if (iFrame === null) {
                iFrame = document.getElementById("breaker");
                setInterval("play()", time);
            }
            (index >= slideshow.length - 1)? index = 0 : index++;
            iFrame.src = slideshow[index];
        }
    </script>
</body>

</html>
    <?php include( '../includes/compress.php'); ?>
