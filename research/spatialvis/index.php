        <?php include( '../../includes/meta.php'); ?>

        <title>SpatialVis - Erik Paluka</title>
        <meta name="description" content="SpatialVis: Visualization of Spatial Interaction Data">
        <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
    </head>

    <body>
        <div class="container">
            <?php include( '../../includes/header.php'); ?>
            <div class="researchTitle">
                <h1>SpatialVis:
                    <br><span style="font-size:0.8em">Web-based Visualization System for Analyzing Logged Spatial Interaction Data</span></h1>

                    January 2015 &ndash; April 2015
                <br><br><span class="bold">Technologies:</span> <a href="https://d3js.org/" title="Data-Driven Documents" target="_blank">D3.js</a>, JavaScript, HTML/CSS, <a href="http://www.processing.org/" target="_blank">Processing</a>, <a href="https://www.leapmotion.com/" target="_blank">Leap Motion</a>
            </div>

            <br>
            <div class="pub-small">
                <span class="bold">Publication</span> <br>
                <a href="http://livvil.github.io/workshop/" target="_blank" title="Workshop Website">SpatialVis: Visualization of Spatial Gesture Interaction Logs</a>
                <div class="font-small"><span class="bold">Erik Paluka</span>, Christopher Collins
                    <br>Logging Interactive Visualizations &amp; Visualizing Interaction Logs Workshop <br> at the IEEE VIS 2016 Research Conference
                </div>
            </div>

                <div class="researchContent">

                     <div class="center" style="margin-top: 50px; margin-bottom: 50px;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/yMh_xrCozac" frameborder="0" allowfullscreen></iframe>
        </div>

            <div class="researchSection center" style="margin-bottom:20px;">

                <p class="researchParagraph center" style="float: none;">
                    A common practice in interface design and development is to log the associated input and event data for future analysis to help refine the design and fix software bugs. Most often, this data is textual which makes it difficult to analyze. To mitigate this problem, I developed a web-based application that takes this information and visualizes it for the analyst. Specifically designed for spatial interaction data, also known as mid-air gestures, the application temporally and positionally visualizes event and 3D interaction data over a video screen capture of the associated display to see their effects on the graphical user interface.

                    <br><br>
                    <span style="font-weight:700;">Features:</span>
                    <br>
                    Gesture &amp; Event Visualizations, Heatmaps, Interaction Graphs &#43; Brushing &amp; Linking, Saving &amp; Loading Visualization States, Video Timeline, User Annotation, etc.
                </p></div></div>


            <div class="center">
                <a href="../../img/projects/spatialvis2.png" target="_blank" title="Web-based Visualization System for Analyzing Logged Spatial Interaction Data">
                    <img class="researchImg" src="../../img/projects/spatialvis2-small.png" alt="Web Application" width="721" height="548"></a>
            </div>
            <div class="center" id="ackSection">
                <h2>Acknowledgements</h2>

                <a href="https://vialab.ca/" target="_blank" title="University of Ontario Institute of Technology vialab research group"><img src="../../img/logos/vialab.png" alt="University of Ontario Institute of Technology vialab research group" width="145" height="52"></a>

            </div>
            <?php include( '../../includes/footer.php'); ?>

            </div>
    </body>

</html>
        <?php include( '../../includes/compress.php'); ?>
