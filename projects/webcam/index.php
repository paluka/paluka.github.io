    <?php include( '../../includes/meta.php'); ?>

    <title>Web Camera - Erik Paluka</title>
    <meta name="description" content="Take a picture that you can download by using your webcam.">
<link rel="image_src" href="../../img/projects/webcam-small.jpg">
    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen">
</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div class="researchTitle">
            <h1>Take A Picture Using Your Webcam</h1>
             <br>December 2013<br><br>
            
            <span style="font-weight: 700;">*Chrome and Opera now require a secure connection (eg. HTTPS) to access the user's webcam*</span>
            <!--*Only works in <a href="http://www.mozilla.org/" target="_blank">Mozilla FireFox</a> and Chromium-based web browsers, such as <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">Google Chrome</a>, <a href="http://www.opera.com/" target="_blank">Opera</a> and <a href="http://www.torchbrowser.com/" target="_blank">Torch</a>.*-->
            <br>
            Note: I do not save any of the pictures or send them to anyone.<br><br>
            <div class="button center" id="button">Take Picture</div>
        </div>
        <div class="center" id="webcamContents">
            <div id="filmRoll"></div>

            <video id="video" muted autoplay width="500" height="500"></video>
            
        </div>
        <div class="center fullWidth">
            <canvas id="webcamCanvas"></canvas>
        </div>
        <?php include( '../../includes/footer.php'); ?>

    </div>
</body>

</html>

<script type="text/javascript" src="webcam.js"></script>
    
</body>

</html>
    <?php include( '../../includes/compress.php'); ?>
