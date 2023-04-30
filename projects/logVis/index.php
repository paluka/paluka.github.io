<?php #include( '../../includes/meta.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head prefix="og: http://ogp.me/ns#">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="http://www.erikpaluka.com/img/favicon.ico">
    <meta name="keywords" content="human-computer interaction, computer science, erik paluka, technology, development">
    <meta name="author" content="Erik Paluka">




    <title>LogVis - Erik Paluka</title>
    <meta name="description" content="InfoVis">

    <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/fileDrop.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/vis.css" type="text/css" media="screen" />

</head>

<body>
    <?php #include( '../../includes/header.php'); ?>

    <div id="logVisContainer" class="grnBack">
        <div id="leftSideBar">
            <div id="title">
                Visualization of Logged Spatial Interaction Data

            </div>
            <div id="options">
                <div id="timeCont">
                    <span id="timeTitle" class="optionTitle">Time</span>
                    <div id="vidTime">
                        <div id="vidTimeCurr">0.00s&nbsp;</div>
                        <div id="vidTimeDura">33.50s&nbsp;</div>
                    </div>
                </div>
                <div id="states">
                    <div id="stateTitle">Global Heatmap</div>
                    <div id="glbState"></div>
                    <div id="saveState" class="controlButtons">Save State</div>
                    <div id="localStates">
                        <div id="divLoad1">
                            <img id="imgState1" alt="Saved visualization state" src="img/savedVisState.png" width="256" height="160">
                            <div id="stateBut1">
                                <div id="loadState1" class="controlButtons stateB">Load State</div>
                                <a id="stateLink1" target="_blank" download>
                                    <div id="saveImg1" class="controlButtons stateB right">
                                     Save Image     
                                    </div>
                                </a>
                            </div>
                            <canvas id="state1"></canvas>
                        </div>
                        <div id="divLoad2">
                            <img id="imgState2" alt="Saved visualization state" src="img/savedVisState.png" width="256" height="160">
                            <div id="stateBut2">
                                <div id="loadState2" class="controlButtons stateB">Load State</div>
                                <a id="stateLink2" target="_blank" download>
                                    <div id="saveImg2" class="controlButtons stateB right">
                                        Save Image
                                    </div>
                                </a>
                            </div>
                            <canvas id="state2"></canvas>
                        </div>
                        <div id="divLoad3">
                            <img id="imgState3" alt="Saved visualization state" src="img/savedVisState.png" width="256" height="160">
                            <div id="stateBut3">
                                <div id="loadState3" class="controlButtons stateB">Load State</div>
                                <a id="stateLink3" target="_blank" download>
                                    <div id="saveImg3" class="controlButtons stateB right">
                                        Save Image
                                    </div>
                                </a>
                            </div>
                            <canvas id="state3"></canvas>
                        </div>
                    </div>
                </div>

                <div id="butOptions">
                    <div>
                        <span class="optionTitle">Visualization</span>

                        <div class="box">
                            <span class="btnName">Show</span>
                            <div class="toggle" id="shViz"></div>
                        </div>

                        <div class="box slideBox">
                            <div>
                                <span class="slideTitle">Opacity Level of Initial Detection Point</span>
                            </div>
                            <div>
                                <input class="slider" id="transDetect" type="range" min="0.0" max="1.0" value="0.6" step ="0.01">
                            </div>
                        </div>
                    </div>


                    <div>
                        <span class="optionTitle">Video</span>

                        <div class="box">
                            <span class="btnName">Show</span>
                            <div class="toggle" id="shVideo"></div>
                        </div>

                        <div class="box">
                            <span class="btnName">Play Entire Video</span>
                            <div class="toggle off" id="fullVidPlay"></div>
                        </div>

                        <div class="box">
                            <span class="btnName">Video Speed</span>
                            <input class="input" id="videoSpeedCont" value="1.0" type="number" min="0.01" max="100" step="0.1">
                        </div>

                        <div class="box slideBox">
                            <span class="slideTitle">Opacity</span>
                            <input class="slider" id="vidOSlider" type="range" min="0.0" max="1.0" value="0.75" step ="0.01">
                        </div>
                    </div>


                    <div>
                        <span class="optionTitle">Trail Visualization</span>

                        <div class="box">
                            <span class="btnName">Render Entire Trail</span>
                            <div class="toggle off" id="trailFlag"></div>
                        </div>

                        <div class="box">
                            <span class="btnName">Length of Trail in Frames</span>
                            <input class="input" id="trailLengthCont" value="125" type="number" min="1">
                        </div>

                        <div class="box slideBox">
                            <span class="slideTitle">Opacity</span>
                            <input class="slider" id="transTrail" type="range" min="0.0" max="1.0" value="0.5" step ="0.01">
                        </div>
                    </div>


                    <div>
                        <span class="optionTitle">Gesture Visualization</span>

                        <div class="box">
                            <span class="btnName">Show</span>
                            <div class="toggle" id="shGest"></div>
                        </div>

                        <div class="box slideBox">
                            <span class="slideTitle">Gesture Outer Opacity</span>
                            <input class="slider" id="gestOutSlider" type="range" min="0.0" max="1.0" value="0.1" step ="0.01">
                        </div>

                        <div class="box slideBox">
                            <span class="slideTitle">Gesture Inner Opacity</span>
                            <input class="slider" id="gestInSlider" type="range" min="0.0" max="1.0" value="0.3" step ="0.01">
                        </div>
                    </div>


                    <div>
                        <span class="optionTitle">Heatmap</span>

                        <div class="box">
                            <span class="btnName">Show</span>
                            <div class="toggle" id="renderHeat"></div>
                        </div>

                        <div class="box">
                            <span class="btnName">Use Total Data</span>
                            <div class="toggle off" id="totalDataHeat"></div>
                        </div>

                        <div class="box">
                            <span class="btnName">Animate Heatmap</span>
                            <div class="toggle off" id="animHeatFlag"></div>
                        </div>

                        <div class="box">
                            <span class="btnName">Length of Heatmap in Frames</span>
                            <input class="input" id="heatLengthCont" value="125" type="number" min="1">
                        </div>
                    </div>


                    <div>
                        <span class="optionTitle">Annotations</span>

                        <div class="box">
                            <span class="btnName">Show</span>
                            <div class="toggle" id="shAnn"></div>
                        </div>

                        <div class="box">
                            <span class="btnName">Colour</span>
                            <input class="input color" id="annoColour" value="FFFFFF" type="text">
                        </div>

                        <div class="box">
                            <div class="controlButtons" id="clear">Clear All</div>
                        </div>
                    </div>


                    <div class="mono" id="zDepthLegend">
                        <span id="zDepthTitle">Z-Depth Legend</span>
                        <span id="chgLengend">Change Colour</span>
                        <div id="zColours" class="mono"></div>
                        <div id="legendDepth">
                            <span class="zDLSpace">&lt;-200</span>
                            <span class="zDLSpace">-150</span>
                            <span class="zDLSpace">-100</span>
                            <span class="zDLSpace">-50</span>
                            <span class="zDLSpace">0</span>
                            <span class="zDLSpace">+50</span>
                            <span class="zDLSpace">+100</span>
                            <span class="zDLSpace">+150</span>
                            +200&gt;
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="middleContainer" class="grnBack">
            <div id="dropMask"></div>
            <div id="dropInfo">
                <div id="logFileElements">
                    <p class="dropText">Drag 'n Drop a
                        <strong>Log File in JSON format</strong>
                        <br>or
                        <br>Use the File Upload Element
                    </p>
                    <br>
                    <input id="fileInput" type="file" multiple="false">
                    <p id="fileInfo"></p>
                    <div id="fileSubmit">Submit Logfile</div>
                </div>
                <div id="videoFileElements">
                    <p class="dropText">Drag 'n Drop a
                        <strong>UI Video File</strong>,
                        <br>or
                        <br>Use the File Upload Element 
                    </p>
                    <br>
                    <input id="videoInput" type="file" multiple="false">
                    <p id="videoInfo"></p>
                    <div id="videoSubmit">Submit Video File</div>
                </div>
                <div id="progressBar">
                    <span id="loadProgress">0&#37; Loaded</span>
                </div>
            </div>
        </div>
    </div>
    <?php #include( '../../includes/footer.php'); ?>

    <script src="js/lib/d3.v3.min.js"></script>
    <script src="js/transferFiles.js"></script>
    <script src="js/main.js"></script>
    <script src="js/trailVis.js"></script>
    <script src="js/eventBinding.js"></script>
    <script src="js/lib/heatmap.js"></script>
    <script src="js/myHeatmap.js"></script>
    <script src="js/graphData.js"></script>
    <script src="js/video.js"></script>
    <script src="js/visState.js"></script>
    <script src="js\lib\jscolor\jscolor.js"></script>
</body>

</html>
<?php #include( '../../includes/compress.php'); ?>