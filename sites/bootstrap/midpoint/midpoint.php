<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Erik Paluka is a graduate student in the visualization for information analysis lab (vialab) at the University of Ontario Insitute of Technology (UOIT).">
    <meta name="keywords" content="computer science human computer interaction multi-touch">
    <meta name="author" content="Erik Paluka">
    
    <link rel="shortcut icon" href="www.erikpaluka.com/img/taz.ico">

    <title>Random Terrain Generation</title>

    
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
    
  <script id="shader-fs" type="x-shader/x-fragment">
            precision mediump float;

            varying vec4 vColor;
            varying vec3 vLightWeighting;

            void main(void) {
                gl_FragColor = vec4(vColor.rgb * vLightWeighting, vColor.a);
            }
        </script>
        <script id="shader-vs" type="x-shader/x-vertex">
            attribute vec3 aVertexPosition;
            attribute vec4 aVertexColor;
            attribute vec3 aVertexNormal;

            uniform mat4 uMVMatrix;
            uniform mat4 uPMatrix;
            uniform mat3 uNMatrix;

            uniform vec3 uAmbientColor;
            uniform vec3 uLightingDirection;
            uniform vec3 uDirectionalColor;

            varying vec4 vColor;
            varying vec3 vLightWeighting;

            void main(void) {
                gl_Position = uPMatrix * uMVMatrix * vec4(aVertexPosition, 1.0);
                vColor = aVertexColor;

                vec3 transformedNormal = uNMatrix * aVertexNormal;
                float directionalLightWeighting = max(dot(transformedNormal, uLightingDirection), 0.0);
                vLightWeighting = uAmbientColor + uDirectionalColor * directionalLightWeighting;

            }
        </script>
    </head>
    
    <body onload="webGLStart();">
  
 <div class="container marketing">

      <div class="row">
        
        <div id="back" class="col-xs-4 col-sm-4 col-md-4 mainButton">
          <img class="img-circle" src="../img/elephant.jpg" data-src="../img/elephant.jpg" alt="Back" width="140" height="140">
          <br>
          <p class="btn btn-lg btn-info">Back</p>
        </div>
        
        
        
      </div>

       
      <div id="midpoint" class="row">
         <div class="col-md-12 minWidth" style="text-align: center">
                        <br />
                        <h1>Random Terrain Generation</h1>
                            <h2>Midpoint displacement algorithm in WebGL</h2>
                            <h3>Vertex normals are calculated to perform the directional lighting</h3>
                        <br />
                        <p>Change the <strong>settings</strong> and <strong>click/touch</strong> the button to render the terrain again<br> <strong>References:</strong>
                            <a href="http://www.cescg.org/CESCG97/marak/node3.html">1</a>,
                            <a href="http://doi.acm.org/10.1145/358523.358553">2</a>
                        </p>
                        <br>
    </div>
    <div class="col-md-12 minWidth" style="text-align: center;">
                        <canvas id="canvas1" class="minWidth" style="width:100%;max-width:900px;">Your browser does not support HTML5. Try Google Chrome.</canvas>
                        <br/>
    
                        <div class="minWidth">
                            <span style="font-weight:bold;">X Translation:</span>
                            <span id="xTrans"></span>
                            <span style="font-weight:bold;">Y Translation:</span>
                            <span id="yTrans"></span>
                            <span style="font-weight:bold;">Z Translation:</span>
                            <span id="zTrans"></span>
                            <br>
                            <span style="font-weight:bold;">X Rotation:</span>
                            <span id="xRot"></span>
                            <span style="font-weight:bold;">Y Rotation:</span>
                            <span id="yRot"></span>
                            <span style="font-weight:bold;">Z Rotation:</span>
                            <span id="zRot"></span>
                        </div>
                        </div>
                       
                         <div class="col-md-6 minWidth" style="text-align: center">
        <p>Use 'A' and 'Z' to move along the Z axis</p>
                        <p>Use 'S' and 'X' to move along the X axis</p>
                        <p>Use 'T' and 'Y' to move along the Y axis</p>
                        </div>
                         <div class="col-md-6 minWidth" style="text-align: center">
                        <p>Use 'R' and 'E' to rotate about the X axis</p>
                        <p>Use 'F' and 'D' to rotate about the Y axis</p>
                        <p>Use 'V' and 'C' to rotate about the Z axis</p>
                        </div>
                    
                        
    </div>
    <div class="col-md-12 minWidth" style="text-align: center;">
                        
                        <h3>Settings:</h3>
                        <table class="table">
                            <tr>
                                <td><span class="midSettings">Mid Steps (0 to 5):</span>
                                    <input type="text" id="midSteps" value="3" />
                                    <td><span class="midSettings">Step X:</span>
                                        <input type="text" id="stepX" value="40" />
                                        <td><span class="midSettings">Step Y:</span>
                                            <input type="text" id="stepY" value="40" />
                                            <td class="displacement"><span class="midSettings">Displacement Low:</span>
                                                <input type="text" id="disLow" value="1" />
                                                <td class="displacement"><span class="midSettings">Displacement High:</span>
                                                    <input type="text" id="disHigh" value="2" />
                            </tr>
                        </table>
                        <table style="width:100%;">
                            <tr>
                                <td>
                                    <span onclick="webGLStart();" class="button">Click here to draw terrain</span>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h3>Light:</h3>
                        <table class="table">
                            <tr>
                                <td>
                                    <b>Ambient Light Colour (0.0 to 1.0):</b>
                                </td>
                                <td>R:
                                    <input type="text" id="ambientR" value="0.0" />
                                    <td>G:
                                        <input type="text" id="ambientG" value="0.5" />
                                        <td>B:
                                            <input type="text" id="ambientB" value="0.0" />
                            </tr>
                            <tr>
                                <td>
                                    <b>Directional Light Direction:</b>
                                </td>
                                <td>X:
                                    <input type="text" id="lightDirectionX" value="-0.25" />
                                    <td>Y:
                                        <input type="text" id="lightDirectionY" value="-0.25" />
                                        <td>Z:
                                            <input type="text" id="lightDirectionZ" value="-1.0" />
                            </tr>
                            <tr>
                                <td>
                                    <b>Directional Light Colour (0.0 to 1.0):</b>
                                </td>
                                <td>R:
                                    <input type="text" id="directionalR" value="0.0" />
                                    <td>G:
                                        <input type="text" id="directionalG" value="0.3" />
                                        <td>B:
                                            <input type="text" id="directionalB" value="0.0" />
                            </tr>
                        </table>
                        <h3>Original Terrain:</h3>
                        <table class="table">
                            <tr>
                                <td>
                                    <input type="text" id="t1" value="-5" />
                                    <td>
                                        <input type="text" id="t2" value="-5" />
                                        <td>
                                            <input type="text" id="t3" value="-5" />
                                            <td>
                                                <input type="text" id="t4" value="-5" />
                                                <td>
                                                    <input type="text" id="t5" value="-5" />
                                                    <td>
                                                        <input type="text" id="t6" value="-5" />
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" id="t7" value="9" />
                                    <td>
                                        <input type="text" id="t8" value="15" />
                                        <td>
                                            <input type="text" id="t9" value="-9" />
                                            <td>
                                                <input type="text" id="t10" value="-12" />
                                                <td>
                                                    <input type="text" id="t11" value="17" />
                                                    <td>
                                                        <input type="text" id="t12" value="8" />
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" id="t13" value="13" />
                                    <td>
                                        <input type="text" id="t14" value="4" />
                                        <td>
                                            <input type="text" id="t15" value="-12" />
                                            <td>
                                                <input type="text" id="t16" value="-3" />
                                                <td>
                                                    <input type="text" id="t17" value="-5" />
                                                    <td>
                                                        <input type="text" id="t18" value="-4" />
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" id="t19" value="3" />
                                    <td>
                                        <input type="text" id="t20" value="-3" />
                                        <td>
                                            <input type="text" id="t21" value="-12" />
                                            <td>
                                                <input type="text" id="t22" value="-1" />
                                                <td>
                                                    <input type="text" id="t23" value="6" />
                                                    <td>
                                                        <input type="text" id="t24" value="5" />
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" id="t25" value="7" />
                                    <td>
                                        <input type="text" id="t26" value="14" />
                                        <td>
                                            <input type="text" id="t27" value="-12" />
                                            <td>
                                                <input type="text" id="t28" value="-9" />
                                                <td>
                                                    <input type="text" id="t29" value="15" />
                                                    <td>
                                                        <input type="text" id="t30" value="3" />
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" id="t31" value="10" />
                                    <td>
                                        <input type="text" id="t32" value="5" />
                                        <td>
                                            <input type="text" id="t33" value="-12" />
                                            <td>
                                                <input type="text" id="t34" value="-10" />
                                                <td>
                                                    <input type="text" id="t35" value="5" />
                                                    <td>
                                                        <input type="text" id="t36" value="12" />
                            </tr>
                        </table>
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