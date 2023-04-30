<?php include( '../../includes/meta.php'); ?>
    <title>How To Create Multi-Touch Gesture Algorithms - Erik Paluka</title>
    <meta name="description" content="How to create multi-touch gesture algorithms (RST) using math, which includes transformation matrices and homogeneous coordinates">

    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="../MathJax-2.6.1/MathJax.js?config=TeX-AMS_HTML"></script>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@ErikPaluka">
<meta name="twitter:creator" content="@ErikPaluka">
<meta name="twitter:title" content="Algorithms for 2D Multi-Touch Rotate, Scale and Translate (RST) Gestures">
<meta name="twitter:description" content="Explains the math involved in creating a 2D multi-touch gesture algorithm that simultaneously rotates, scales and translates (RST) an element.">
<meta name="twitter:image:src" content="http://www.erikpaluka.com/blog/rst/gestureMath.png">

</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">
            
            
            <!--<img src="http://www.erikpaluka.com/blog/rst/gestureMath.png" width="522" height="409" style="display:none;">-->

            
             <div class="blogEntry" id="RST">
                <div class="blogTitle">
                    <h1>Algorithms for 2D Multi-Touch Rotate, <br> Scale &amp; Translate (RST) Gestures</h1>
                <div class='bDate'>Date: July 8, 2014</div>
                </div>

                <div class="blogText">
                    <h2>Homogeneous Coordinate System</h2>
<p>Before getting started, a mathematical coordinate system needs to be chosen. Instead of working with the usual Cartesian coordinate system, as used in Euclidean geometry, the computer graphics field employs homogeneous coordinates for projective geometry. Doing so allows common operations to be implemented as matrix operations, which can then be represented as a single matrix. <a href="http://sunshine2k.blogspot.ca/2011/12/reason-for-homogeneous-4d-coordinates.html" target="_blank" title="Why go homogeneous">See here for the reasons why</a>.</p>
                    
                      <div class="center">
                          \[Cartesian \ \ Coordinates
                          \ \ \ \ \ \ \ \ \ \ \
                         Homogeneous \ \ Coordinates  \]
                              
                        <div class="fl" style="margin-left: 20%;">
                                                    \[\begin{bmatrix}
x \\ 
y  
\end{bmatrix}\]</div>
                          <div class="fl" style="margin-left: 20%; font-size: 150%;">
                          \[\longrightarrow \]
                              </div>
                             <div class="fl" style="margin-left: 20%;">
                         \[\begin{bmatrix}
x \\ 
y \\
w
\end{bmatrix} \]</div>
                          <div class="clear"></div>
                    </div>
                   
                    
                    <h2>Transformation Matrices</h2>
                    <p>In a multi-touch gesture, there are three main types of transformations involved: rotation, scaling and translation. To represent those transformations mathematically, we use matrices.</p>
                        
                        <div class="sym">
                            <div class="fr">
                                \[Translation \ Matrix = \begin{bmatrix}
                                1 & 0 & 0 \\ 
                                0 & 1 & 0 \\ 
                                T_x & T_y & 1
                                \end{bmatrix} \]
                               
                            </div>
                            <div class="fl">
                                \[T_x = Translaion \ Along \ x \ Axis
                                \\
                                T_y = Translaion \ Along \ y \ Axis\]
                            </div>
                           
                            <div class="clear"></div>
                        </div>
                               
                     <div class="sym">
                         <div class="fr">
                            \[Scaling \ Matrix = \begin{bmatrix}
                                S_x & 0 & 0 \\ 
                                0 & S_y & 0 \\ 
                                0 & 0 & 1
                                \end{bmatrix} \]
                        </div>
                         <div class="fl">
                            \[S_x = Scaling \ Along \ x \ Axis
                             \\
                           S_y = Scaling \ Along \ y \ Axis\]
                        </div>
                         
                         <div class="clear"></div>
                    </div>
                    
                    <div class="sym">                        
                        <div class="fr">
                            \[Rotation \ Matrix = \begin{bmatrix}
\cos(\theta)& \sin(\theta)& 0 \\ 
-\sin(\theta) & \cos(\theta) & 0\\ 
0 & 0 & 1
\end{bmatrix}\]
                        </div>
                        
                        <div class="fl">
                         \[\theta = Clockwise \ Angle \ of \ Rotation\]
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                       
                    <h2>Multi-Touch Gestures</h2>
                    <p>There are many different strategies used to implement transformation based gestures. A classic example is the work by <span class="inlineMath">\(Kruger \ et \ al.\)</span>, where they designed and implemented a gesture called RNT <span class="inlineMath">\([3]\)</span>. It combines rotation and translation and only requires a single source of input (eg. finger, stylus, etc.) to trigger the transformations. Its variant, TNT, was found to be faster and more preferred by participants in a user study <span class="inlineMath">\([4]\)</span>. <span class="inlineMath">\(Wobbrock \ et \ al.\)</span> took a great approach to gesture design by employing an end-user elicitation methodology where 1080 gestures were elicited from 20 non-technical users for 27 different commands <span class="inlineMath">\([7]\)</span>. A follow up study revealed that this design approach is better than having a small number of system designers select the interaction technique since participants preferred gestures authored by larger groups of end-users <span class="inlineMath">\([5]\)</span>. In the work by <span class="inlineMath">\(Hancock \ et \ al.\)</span>, they surveyed five different rotation and translation techniques based on a number of factors including their degrees of freedom (DOF), precision, and completeness <span class="inlineMath">\([2]\)</span>. 
                        These examples have dealt with transformations along two dimensions. For full 3D interaction, <span class="inlineMath">\(Hancock \ et \ al.\)</span> designed the first force-based interaction paradigm that supports full 6DOF manipulation on interactive surfaces <span class="inlineMath">\([1]\)</span>. <span class="inlineMath">\(Reisman \ et \ al.\)</span> also enabled interacting with 3D content on a 2D surface by extending the principles of RST (the simultaneous rotate, scale, and translate gesture described in this blog post) into three dimensions <span class="inlineMath">\([6]\)</span>.</p>
                    <br>
                    <ol style="font-size: 0.8em;">
                        <li>Hancock, M., Cate, T.T., and Carpendale, S. <span class="bold">Sticky tools: Full 6DOF force-based interaction for multi-touch tables</span>. In Proceedings of ITS 2009. <a href="http://doi.acm.org/10.1145/1731903.1731930" target="_blank" title="Paper">Link</a></li>
                        <li>Hancock, M., Carpendale, S., Vernier, F.D., Wigdor, D., and Shen, C.<span class="bold">Rotation and translation mechanisms for tabletop interaction</span>. In Proceedings of TABLETOP 2006. <a href="http://dx.doi.org/10.1109/TABLETOP.2006.26" target="_blank" title="Paper">Link</a></li>
                        <li>Kruger, R., Carpendale, S., Scott, S.D., and Tang, A. <span class="bold">Fluid integration of rotation and translation</span>. In Proceedings of CHI 2005. <a href="http://doi.acm.org/10.1145/1054972.1055055" target="_blank" title="Paper">Link</a></li>
                        <li>Liu, J., Pinelle, D., Sallam, S., Subramanian, S., and Gutwin, C. <span class="bold">TNT: Improved rotation and translation on digital tables</span>. In Proceedings of GI 2006. <a href="http://dl.acm.org/citation.cfm?id=1143084" target="_blank" title="Paper">Link</a></li>
                        <li>Morris, M.R., Wobbrock, J.O., and Wilson, A.D. <span class="bold">Understanding users' preferences for surface gestures</span>. In Proceedings of GI 2010. <a href="http://dl.acm.org/citation.cfm?id=1839260" target="_blank" title="Paper">Link</a></li>
                        <li>Reisman, J.L., Davidson, P.L., and Han, J.Y. <span class="bold">A screen-space formulation for 2D and 3D direct manipulation</span>. In Proceedings of UIST 2009. <a href="http://doi.acm.org/10.1145/1622176.1622190" target="_blank" title="Paper">Link</a></li>
                        <li>Wobbrock, J.O., Morris, M.R., and Wilson, A.D. <span class="bold">User-defined gestures for surface computing</span>. In Proceedings of CHI 2009. <a href="http://doi.acm.org/10.1145/1518701.1518866" target="_blank" title="Paper">Link</a></li>
                    </ol>
                    <br>
                    <h2>Designing a 4DOF Multi-Touch Gesture</h2>
                    <p>In our example, we will design a 4DOF gesture that rotates, scales and translates an object using more than one source of input (eg. finger). These transformations will only take place on a static z-plane, thus they are two-dimensional. Let's say that a rotating pinch gesture has been performed on an object using multiple fingers (<span class="inlineMath">\(n \geq 2\)</span>). At <span class="inlineMath">\(time = 1\)</span>, we will assume that you have an array encapsulating a minimum of two touches: <br><br>
                        <div class="center">
                             \[\left[
                            touch_{1, \ t = 1}(x_1, y_1, w_1),
                            \
                            touch_{2, \ t = 1}(x_2, y_2, w_2)
                                \right]\]
                        </div>
                        <br>The same goes for 
                        <span class="inlineMath">\(time = 2\)</span>, <br><br>
                        <div class="center">
                             \[\left[
                            touch_{1, \ t = 2}(x_1, y_1, w_1),
                            \
                            touch_{2, \ t = 2}(x_2, y_2, w_2)
                                \right]\]
                        </div>
                    </p> 
                    
                     <p>
                         Our gesture algorithm uses the following math:
                         <div class="sym" style="min-height: 0px;">
                             \[M' = T'SR\, TM\]
                        </div>
                 
                        where <span class="inlineMath">\(M\)</span> is the object's original transformation matrix, <span class="inlineMath">\(T\)</span> is a translation matrix from the object's current position to the World's origin, <span class="inlineMath">\(R\)</span> is a rotation matrix, <span class="inlineMath">\(S\)</span> is a scale matrix, <span class="inlineMath">\(T'\)</span> is a translation matrix from the World's origin to the object's new position, and <span class="inlineMath">\(M'\)</span> is the object's new transformation matrix.
                        
                    <br><br>
                 You might be wondering why there are two translation matrices. When rotating an object, we must first select the centre or point of rotation. The same holds true when performing a scaling transformation. The rotation matrix in its current state only rotates around the World's origin. If we want an object to rotate around itself, we must first translate the object to the World's origin, perform the rotation, then translate the object back to its original or new position. Therefore, in our algorithm, <span class="inlineMath">\(T\)</span> is constructed by using the negative of <span class="inlineMath">\(touch_{1, \ t = 1}\)</span>'s values.
                 
                 <div class="sym">
                        
                        \[T_x = -x_{1, \ t = 1}\] 
                     \[T_y = -y_{1, \ t = 1}\]
                    </div>
                 
                 and <span class="inlineMath">\(T'\)</span> is constructed by using <span class="inlineMath">\(touch_{1, \ t = 2}\)</span>'s values. By only using the first touch's positional vectors, our algorithm does not require more than one touch for translation transformations.
                 
                 <div class="sym">
                        
                        \[T'_x = x_{1, \ t = 2}\] 
                     \[T'_y = y_{1, \ t = 2}\]
                    </div>
                 
                
                 In the calculation of both <span class="inlineMath">\(R\)</span> and <span class="inlineMath">\(S\)</span>, two vectors are requred: the line between the first and the second touch point at <span class="inlineMath">\(time = 1\)</span> and at <span class="inlineMath">\(time = 2\)</span>. These are calculated by subtracting <span class="inlineMath">\(touch_{2, \ t = 1}\)</span> by <span class="inlineMath">\(touch_{1, \ t = 1}\)</span> and by subtracting <span class="inlineMath">\(touch_{2, \ t = 2}\)</span> by <span class="inlineMath">\(touch_{1, \ t = 2}\)</span>. Let's call the resulting vectors <span class="inlineMath">\(L_{t = 1}\)</span> and <span class="inlineMath">\(L_{t = 2}\)</span>. 
                 <div class="sym">
                        
                        \[L = touch_2 - touch_1 = \left\lgroup\matrix{x_2\cr y_2\cr w_2}\right\rgroup - \left\lgroup\matrix{x_1\cr y_1\cr w_1}\right\rgroup\]
                    </div>
                 
                 We can determine the rotation angle that is needed for <span class="inlineMath">\(R\)</span> by calculating the angle between these two vectors. This is accomplished by first normalizing <span class="inlineMath">\(L_{t = 1}\)</span> and <span class="inlineMath">\(L_{t = 2}\)</span>, then calculating the dot product and taking the inverse cosine of the result.
                 
                 <div class="sym" style="min-height: 0px;">
                        
                        \[\theta = \cos^{-1}(\hat L_{t = 1} \cdot \hat L_{t = 2})\] 
                    </div>
            
                 The uniform scale factor for <span class="inlineMath">\(S\)</span> is calculated by dividing the magnitude of <span class="inlineMath">\(L_{t = 2}\)</span> by the magnitude of <span class="inlineMath">\(L_{t = 1}\)</span>. For example, by pinching one's fingers, the magnitude (length) of the vector <span class="inlineMath">\(L_{t = 2}\)</span> will be smaller than <span class="inlineMath">\(L_{t = 1}\)</span>, resulting in a scale factor smaller than 1. This would cause the object to shrink, which is the standard action associated with the pinch gesture.
                 
                 <div class="sym" style="min-height: 0px;">
                        
                        \[ S_x = S_y = \frac{ || L_{t = 2} || }{ || L_{t = 1}|| } \] 
                    </div>
                 
                 Finally, the object's new transformation matrix <span class="inlineMath">\(M'\)</span> is calculated by multiplying all these matrices together.
                    </p>

                </div>
            </div>
            
            
            
        </div>
        <?php include( '../linkBar.php'); ?>
        <?php include( '../../includes/footer.php'); ?>
    </div>
</body>

</html>
<?php include( '../../includes/compress.php'); ?>