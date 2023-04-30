        <?php include( '../../includes/meta.php'); ?>

        <title>iOS Game Brick Breaker - Erik Paluka</title>
        <meta name="description" content="Brick Breaker game for iOS">
        <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
    </head>
    
    <body onLoad="play();">
        <div class="container">
            <?php include( '../../includes/header.php'); ?>
            <div class="researchTitle">
            <h1>iPhone Brick Breaker Game</h1>
                Mobile Devices &mdash; Fall 2011
            </div>
            <div class="researchContent" style="margin-left: auto; margin-right: auto; width: 700px;">
                <div id="brickbreakerText">
                Implemented Brick Breaker for the iOS platform (iPhone/iPad) in Objective-C
                <br><br>
                Features
                <ul>
                    <li>Paddle controlled by dragging gesture</li>
                    <li>Full sound effects and different music for each level</li>
                    <li>Settings that allow changing of volume</li>
                    <li>Save/Load game state</li>
                    <li>5 custom-designed levels that increase in difficulty</li>
                    <li>Colorful backgrounds and icons</li>
                    <li>3 different power-ups (extra life, faster ball, reverse movement)</li>
                </ul>
                </div>
                <img src="../../img/projects/brickbreaker-nophone2.jpg" class="brickbreaker" alt="Brick Breaker" width="261" height="395">
                <br><br>
                        You can find the source code on <a href="https://github.com/paluka/BrickBreaker-iOS" target="_blank"><img id="onGithub" src="../../img/socialIcons/github.png" alt="GitHub" width="56" height="25"></a>
            </div>
            <?php include( '../../includes/footer.php'); ?>
        </div>
        
        <script>
            var slideshow = ["../../img/projects/brickbreaker-nophone2.jpg",
                    "../../img/projects/brickbreaker-nophone3.jpg",
                    "../../img/projects/brickbreaker-nophone4.jpg",
                    "../../img/projects/brickbreaker-nophone.jpg",
                    "../../img/projects/brickbreaker-nophone5.jpg"
            ];
            var iFrame = null, index = 0, time = 3000;

            function play() {
                if (iFrame === null) {
                    iFrame = document.getElementsByClassName("brickbreaker")[0];
                    setInterval("play()", time);
                }
                (index >= slideshow.length - 1) ? index = 0 : index++;
                iFrame.src = slideshow[index];
            }
        </script>
    </body>

</html>
<?php include( '../../includes/compress.php'); ?>