        <?php include( '../../includes/meta.php'); ?>
        <title>Midpoint Displacement - Erik Paluka</title>
         <meta name="description" content="Random terrain generation using the midpoint displacement algorithm in WebGL">
         
        <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
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
        <div class="container">
            <?php include( '../../includes/header.php'); ?>
            
            <div class="researchTitle">
            <h1>Random Terrain Generation in WebGL</h1>
                August 2012<br><br>
                Uses the midpoint displacement algorithm<br>
                            Vertex normals are calculated to perform the directional lighting
                        <br />
                        Change the settings and click the button to render the terrain again
                        <br><br>
                        Use 'A' and 'Z' to move along the Z axis<br>Use 'S' and 'X' to move along the X axis<br>Use 'T' and 'Y' to move along the Y axis<br>Use 'R' and 'E' to rotate about the X axis<br>Use 'F' and 'D' to rotate about the Y axis<br>Use 'V' and 'C' to rotate about the Z axis
                        <br /><br>
                        References:
                            <a href="http://www.cescg.org/CESCG97/marak/node3.html">1</a>,
                            <a href="http://doi.acm.org/10.1145/358523.358553">2</a>
                        </div>
                        <br>
                        <canvas id="midpointCanvas" ></canvas>
            <div id="midpointText">
                       <div class="researchContent center">
                            <span class="bold">X Translation:</span>
                            <span id="xTrans"></span>
                            <span class="bold">Y Translation:</span>
                            <span id="yTrans"></span>
                            <span class="bold">Z Translation:</span>
                            <span id="zTrans"></span>
                            <br>
                            <span class="bold">X Rotation:</span>
                            <span id="xRot"></span>
                            <span class="bold">Y Rotation:</span>
                            <span id="yRot"></span>
                            <span class="bold">Z Rotation:</span>
                            <span id="zRot"></span>
                        </div>
                        <h2>Settings:</h2>
                        <table class="midpointTable" >
                            <tr>
                                <td class="bold">Mid Steps (0 to 5):
                                    <input type="text" id="midSteps" value="3" />
                                    <td class="bold">Step X:
                                        <input type="text" id="stepX" value="40" />
                                        <td class="bold">Step Y:
                                            <input type="text" id="stepY" value="40" />
                                            <td class="bold">Displacement Low:
                                                <input type="text" id="disLow" value="1" />
                                                <td class="bold">Displacement High:
                                                    <input type="text" id="disHigh" value="2" />
                            </tr>
                        </table>
                        <div onclick="webGLStart();" class="button center">Draw Terrain</div>
                               
                        
                        <h2>Light:</h2>
                        <table class="midpointTable">
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
                        <h2>Original Terrain:</h2>
                        <table>
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
               
                <?php include( '../../includes/footer.php'); ?>
            
            </div>
    </body>
    <script type="text/javascript" src="gl-matrix-min.js"></script>
    <script type="text/javascript" src="webgl-utils.js"></script>
    <script type="text/javascript" src="terrain.js"></script>

</html>
        <?php include( '../../includes/compress.php'); ?>