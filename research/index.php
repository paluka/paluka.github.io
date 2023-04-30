<?php include( '../includes/meta.php'); ?>
    <title>Research - Erik Paluka</title>
    <meta name="description" content="Computer science research projects that Erik Paluka has worked on">

    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/galleria/galleria-1.3.6.min.js"></script>
    <script src="../js/galleria/plugins/flickr/galleria.flickr.min.js"></script>
</head>

<body>
    <div class="container">
        <?php include( '../includes/header.php'); ?>

        <div class="researchRow">
            <a href="off-screen-desktop/">
                <div class="researchProject">
                    <img alt="Spatial Interaction" src="../img/spatialInteract/tom.jpg" width="250" height="250">
                    <div class="projectTitle">Off-Screen Desktop &mdash; Master's Thesis on Spatial Interaction</div>
                </div>
            </a>
            
            <a href="tandemtable/">
                <div class="researchProject">
                    <img alt="TandemTable" src="../img/TandemTable/TandLangLearn.jpg" width="250" height="250">
                    <div class="projectTitle">TandemTable &mdash; Honours Undergraduate Thesis</div>
                </div>
            </a>
            
            <a href="spatialvis/">
                <div class="researchProject">
                    <img alt="Visualization of Logged Spatial Interaction Data" src="../img/projects/spatialvis-small.jpg" width="250" height="250">
                    <div class="projectTitle">SpatialVis: <br> Web-based Visualization System</div>
                </div>
            </a>
            
        </div>
        
        <div class="researchRow" style="margin-top: 20px;">
            
           <a href="smt/">
                <div class="researchProject">
                    <img alt="Simple Multi-Touch Toolkit" src="../img/SMT/SMT-PCSketch.jpg" width="250" height="250">
                    <div class="projectTitle">The Simple Multi-Touch
                        <br>(SMT) Toolkit</div>
                </div>
            </a>
            
            <a href="wall-of-gray/">
                <div class="researchProject">
                    <img alt="Reading Comprehension App" src="../img/projects/wall-of-gray-small2.jpg" width="250" height="250">
                    <div class="projectTitle">Reading Comprehension <br> in Mobile Devices<br></div>
                </div>
            </a>
            
            <a href="affectvis/">
                <div class="researchProject">
                    <img alt="Affective InfoVis Study" src="../img/edr-small.jpg" width="250" height="250">
                    <div class="projectTitle">The Emotional Effect of Embellishments in Visualizations</div>
                </div>
            </a>
            
        </div>
        
        <div class="researchRow" style="margin-top: 20px;">
            
            <a href="percept/">
                <div class="researchProject">
                    <img alt="S3D InfoVis Study" src="../img/Perceptsmall.jpg" width="250" height="250">
                    <div class="projectTitle">Stereoscopic 3D &amp; Information <br> Visualization Perception Study</div>
                </div>
            </a>
            
        </div>
        
        
        
        <div id="gallery"></div>
        <script src="script.js"></script>
        
        <?php include( '../includes/footer.php'); ?>
    </div>
</body>

</html>
<?php include( '../includes/compress.php'); ?>