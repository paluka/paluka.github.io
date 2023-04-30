<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Erik Paluka is a graduate student in the visualization for information analysis lab (vialab) at the University of Ontario Insitute of Technology (UOIT).">
    <meta name="keywords" content="computer science human computer interaction multi-touch">
    <meta name="author" content="Erik Paluka">
    
    <link rel="shortcut icon" href="www.erikpaluka.com/img/taz.ico">

    <title>Ray Tracing in JavaScript</title>

    
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/main.css">
    
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
        
        <script type="text/javascript" src="raytracer.js"></script>
        <script>
            function changeDisabled(target) {

                if (target.id == "randSphereMin") {
                    if (document.getElementById(target.id).checked) {
                        document.getElementById("minSpheres").disabled = true;
                    } else {
                        document.getElementById("minSpheres").disabled = false;
                    }
                }

                if (target.id == "randSphereMax") {
                    if (document.getElementById(target.id).checked) {
                        document.getElementById("maxSpheres").disabled = true;
                    } else {
                        document.getElementById("maxSpheres").disabled = false;
                    }
                }

                if (target.id == "randMinRefl") {
                    if (document.getElementById(target.id).checked) {
                        document.getElementById("minRefl").disabled = true;
                    } else {
                        document.getElementById("minRefl").disabled = false;
                    }
                }

                if (target.id == "randL1") {
                    if (document.getElementById(target.id).checked) {
                        document.getElementById("l1R").disabled = true;
                        document.getElementById("l1G").disabled = true;
                        document.getElementById("l1B").disabled = true;
                    } else {
                        document.getElementById("l1R").disabled = false;
                        document.getElementById("l1G").disabled = false;
                        document.getElementById("l1B").disabled = false;
                    }
                }

                if (target.id == "randL2") {
                    if (document.getElementById(target.id).checked) {
                        document.getElementById("l2R").disabled = true;
                        document.getElementById("l2G").disabled = true;
                        document.getElementById("l2B").disabled = true;
                    } else {
                        document.getElementById("l2R").disabled = false;
                        document.getElementById("l2G").disabled = false;
                        document.getElementById("l2B").disabled = false;
                    }
                }

                if (target.id == "randL1Pos") {
                    if (document.getElementById(target.id).checked) {
                        document.getElementById("l1X").disabled = true;
                        document.getElementById("l1Y").disabled = true;
                        document.getElementById("l1Z").disabled = true;
                    } else {
                        document.getElementById("l1X").disabled = false;
                        document.getElementById("l1Y").disabled = false;
                        document.getElementById("l1Z").disabled = false;
                    }
                }

                if (target.id == "randL2Pos") {
                    if (document.getElementById(target.id).checked) {
                        document.getElementById("l2X").disabled = true;
                        document.getElementById("l2Y").disabled = true;
                        document.getElementById("l2Z").disabled = true;
                    } else {
                        document.getElementById("l2X").disabled = false;
                        document.getElementById("l2Y").disabled = false;
                        document.getElementById("l2Z").disabled = false;
                    }
                }

                if (target.id == "randPPos") {
                    if (document.getElementById(target.id).checked) {
                        document.getElementById("pX").disabled = true;
                        document.getElementById("pY").disabled = true;
                        document.getElementById("pZ").disabled = true;
                    } else {
                        document.getElementById("pX").disabled = false;
                        document.getElementById("pY").disabled = false;
                        document.getElementById("pZ").disabled = false;
                    }
                }
            }
        </script>
       
    </head>
    
    <body onload="startRayTracing();">
        <div class="container">
            <div class="row">
        
        <div id="back" class="col-xs-4 col-sm-4 col-md-4 mainButton">
          <img class="img-circle" src="../img/elephant.jpg" data-src="../img/elephant.jpg" alt="Back" width="140" height="140">
          <br>
          <p class="btn btn-lg btn-info">Back</p>
        </div>
        
        
        
      </div>
            
            
            
            
            
            <div class="row">
                <div class="col-md-12 minWidth" style="text-align: center">
                    
                       
                        <h1>Ray Tracing using JavaScript</h1>
                            <h2>Supports Spheres and Planes</h2>
                            <h3>Computes the Lambertian Reflection &amp; Blinn-Phong Reflection</h3>
                        <p>Change the settings and click the button to render the scene again</p>
                        <p>Resources:
                                <br />
                                <a href="http://www.cc.gatech.edu/~phlosoft/photon/" target="_blank">1</a>,
                                <a href="http://www.cs.unc.edu/~rademach/xroads-RT/RTarticle.html" target="_blank">2</a>,
                                <a href="http://graphics.stanford.edu/courses/cs148-10-summer/docs/2006--degreve--reflection_refraction.pdf" target="_blank">3</a>,
                                <a href="http://web.cs.wpi.edu/~gogo/courses/cs543/slides/cs543_23_RayTracing_4.pdf" target="_blank">4</a>,
                                <a href="http://www.codermind.com/articles/Raytracer-in-C++-Part-I-First-rays.html" target="_blank">5</a>,
                                <a href="http://www.ccs.neu.edu/home/fell/CSU540/programs/RayTracingFormulas.htm" target="_blank">6</a>,
                                <a href="http://wiki.cgsociety.org/index.php/Ray_Sphere_Intersection" target="_blank">7</a>,
                                <a href="http://www.flipcode.com/archives/Raytracing_Topics_Techniques-Part_1_Introduction.shtml" target="_blank">8</a>,
                                <a href="http://fuzzyphoton.tripod.com/rtalgo.htm" target="_blank">9</a>,
                                <a href="http://www.cs.uiuc.edu/class/fa05/cs418/archive/spring2005/notes/16-RayTracing.pdf" target="_blank">10</a>
                            </p>
                        </div>
                    </div>
                
                
                         <div class="row" style="text-align:center;">
                        <canvas id="tracer" align="center" width="400px" height="400"></canvas>
                        </div>
                
                        <div class="row">
                                <div class="col-md-12 minWidth" style="text-align: center">
                        
                       
                            
                                <div id="rayProp"><span>Number of Spheres (min: 1 - max:20):<input id="numSpheres" value="12"></span>
                                    <br/><span>Minimum Radius of the Spheres (min: 1 - max: 200):
                                        <input id="minSpheres" value="30" disabled>Random
                                        <input onchange="changeDisabled(event.target);" type="checkbox" id="randSphereMin" checked>
                                    </span>
                                    <br><span>Maximum Radius of the Spheres (min: 1 - max: 200):
                                        <input id="maxSpheres" value="100" disabled>Random
                                        <input onchange="changeDisabled(event.target);" type="checkbox" id="randSphereMax" checked>
                                    </span>
                                    <br><span>Width of the Canvas (min: 100px - max: 900px):<input id="width" value="400"></span>
                                    <br/><span>Height of the Canvas (min: 100px - max: 400px):<input id="height" value="400"></span>
                                    <br/><span>Minimum Sphere Reflection Ratio (min: 0.10 - max: 1.00):
                                        <input id="minRefl" value="0.55">Random
                                        <input onchange="changeDisabled(event.target);" type="checkbox" id="randMinRefl">
                                    </span>
                                    <br/><span>Light 1 Colour (R, G, B - min: 0.00 - max: 1.00):
                                        <input id="l1R" value="0.75">
                                        <input id="l1G" value="0.65">
                                        <input id="l1B" value="0.80">Random
                                        <input onchange="changeDisabled(event.target);" type="checkbox" id="randL1">
                                    </span>
                                    <br/><span>Light 2 Colour (R, G, B - min: 0.00 - max: 1.00):
                                        <input id="l2R" value="0.75">
                                        <input id="l2G" value="0.85">
                                        <input id="l2B" value="0.90">Random
                                        <input onchange="changeDisabled(event.target);" type="checkbox" id="randL2">
                                    </span>
                                    <br/><span>Light 1 Position (X, Y, Z):
                                        <input id="l1X" value="-500">
                                        <input id="l1Y" value="400">
                                        <input id="l1Z" value="-300">Random
                                        <input onchange="changeDisabled(event.target);" type="checkbox" id="randL1Pos">
                                    </span>
                                    <br><span>Light 2 Position (X, Y, Z):
                                        <input id="l2X" value="200">
                                        <input id="l2Y" value="-150">
                                        <input id="l2Z" value="100">Random
                                        <input onchange="changeDisabled(event.target);" type="checkbox" id="randL2Pos">
                                    </span>
                                    <br><span>Include Specular Reflection:<input class="checkBox" type="checkbox" id="includeSpec" checked></span>
                                    <br><span>Include Shadows:<input class="checkBox" type="checkbox" id="includeShadows"></span>
                                    <br><span>Include Plane:<input class="checkBox" type="checkbox" id="includePlane" checked></span>
                                    <br><span>Plane Position (X, Y, Z):
                                        <input id="pX" value="200">
                                        <input id="pY" value="-150">
                                        <input id="pZ" value="400">Random
                                        <input onchange="changeDisabled(event.target);" type="checkbox" id="randPPos">
                                    </span>
                                    <br><span>Plane Normal (nX, nY, nZ - min: -1.00 - max: 1.00):
                                        <input id="pnX" value="0">
                                        <input id="pnY" value="-1.0">
                                        <input id="pnZ" value="-1.0">
                                    </span>
                                    <br><span>Plane Reflection Ratio (min: 0.10 - max: 1.00):<input id="planeRefl" value="0.55"></span>
                                    </div>
                               
                            
                           
                                <div class="button" onclick="restartRayTracing();">Click here to Ray Trace</div>
                           
                            
                        
                   
                </div>
            </div>
            
            
            
            
            
        <hr class="featurette-divider">
      
      <footer>
        <div id="licenseInfo" class="alert alert-success" style="display: none;">
        The elephant picture has been modified. The original image is by &copy; <a href="http://dkeats.openphoto.net">Derek W. Keats</a> for <a href="http://openphoto.net/gallery/image/linkback/8482">openphoto.net</a>. It is licensed under Creative Commons <a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank">Attribution-ShareAlike</a>.
      </div>
        <p class="pull-right"><a id="toTop" href="">Back to top</a></p>
        <p>&copy; 2012-2013 Erik Paluka &middot; 
        <span id="info" >Info</span></p>
      </footer>

    </div>

  

    
    
    <script src="../js/jquery-2.0.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/response.min.js"></script>
    <script src="../js/site.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    
    
    <script type="text/javascript" src="gl-matrix-min.js"></script>
    <script type="text/javascript" src="webgl-utils.js"></script>
    <script type="text/javascript" src="terrain.js"></script>
</body>
</html>