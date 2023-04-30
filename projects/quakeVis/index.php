<?php include( '../../includes/meta.php'); ?>
<title>QuakeVis - Erik Paluka</title>

<meta name="description" content="QuakeVis: Visualization of past earthquakes on Earth using real-time data">

<link rel="stylesheet" type="text/css" href="../../css/style.css" />
<link rel="stylesheet" type="text/css" href="plugins/datepicker/datepicker.css" />
<link rel="stylesheet" type="text/css" href="plugins/slider/luna.css" />


</head>

<body onload="setup();">
    <div class="container">
        <?php include( '../../includes/header.php'); ?>

        <div class="center maxHeightL">
            <h1>QuakeVis</h1>
            August 2013<br><br>
            A vector (SVG/VML) based visualization of Past Earthquakes on Earth
            <br>Using real-time data from the
            <a href="http://earthquake.usgs.gov/earthquakes/feed/" target="_blank">United States Geological Survey (USGS)</a> agency
            <br>
            <br>
            Hover over or touch the visualization to get the location, date, and magnitude of each earthquake<br>
            <span style="font-weight: 700;">Warning: The website providing this information can be very slow when performing new queries!</span>
            <br><br>
            Choose Minimum Date
            <input id='begDate' type='text' value='' />
            Choose Maximum Date
            <input id='endDate' type='text' value='' />
            <br>
            <br>Choose the Maximum Number of Results
            <input id='maxResults' type='text' value='100' />
            <br>
            <br>
            <div>
                <span>Choose Minimum Magnitude:</span>
                <span id="minMag">5.0</span>
                <div class="slider" id="slider-1" tabIndex="1">
                    <input class="slider-input" id="slider-input-1" name="slider-input-1">
                </div>
            </div>
            <br>
            <div>
                <span>Choose Maximum Magnitude:</span>
                <span id="maxMag">10.0</span>
                <div class="slider" id="slider-2" tabIndex="1">
                    <input class="slider-input" id="slider-input-2" name="slider-input-2">
                </div>
            </div>
            <br>
            <div class='button center'>Get Data</div>

            <div id="svgTarget">Your browser does not support SVG or VML. Try using Google Chrome.</div>
        </div>
        <?php include( '../../includes/footer.php'); ?>
    </div>

    <script src="plugins/jquery-1.7.2.min.js"></script>
    <script src="quakeScript.js"></script>
    <script src="plugins/raphael-min.js"></script>
    <script src="plugins/spin.min.js"></script>
    <script src="plugins/datepicker/datepicker.js"></script>
    <script src="plugins/slider/range.js"></script>
    <script src="plugins/slider/slider.js"></script>
    <script src="plugins/slider/timer.js"></script>
</body>

</html>
<?php include( '../../includes/compress.php'); ?>