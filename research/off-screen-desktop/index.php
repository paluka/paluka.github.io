<?php include( '../../includes/meta.php'); ?>
    <title>Off-Screen Desktop - Erik Paluka</title>
    <meta name="description" content="Off-Screen Desktop: Off-screen spatial navigation system and techniques">

    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />

<style>
    ol > li {
        padding-left: 30px;
    }
</style>
</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>

        <div class="researchTitle">
            <h1>Off-Screen Desktop &mdash; Master's Thesis
                <br><span style="font-size:0.8em">A Spatial &amp; Multi-Touch Interaction System  That Supports <br>the Manipulation of Off-Screen Content</span></h1>
            September 2014 &ndash; August 2015
            <br><br>
            <span class="bold">Technologies:</span> Java, <a href="http://www.processing.org/" target="_blank">Processing</a>, <a href="https://www.leapmotion.com/" target="_blank">Leap Motion</a>
            <p>
                Lab Project Page: <a href="http://vialab.science.uoit.ca/portfolio/off-screen-desktop" target="_blank">http://vialab.science.uoit.ca/portfolio/off-screen-desktop</a> 
                </p>
        </div>
        
        <br>
            <div class="pub-small">  
                <span class="bold">Publications</span> 
                <br>                
                    
                <a href="http://www.erikpaluka.com/files/2015-Paluka-Master-Thesis.pdf" target="_blank" title="Download file">Spatial Peripheral Interaction Techniques for Viewing and Manipulating <br>Off-Screen Digital Content</a>
                    <br>
                    <div class="font-small">
                <span class="bold">Erik Paluka</span>
                        <br>
Master's Thesis &mdash; University of Ontario Institute of Technology
                </div>
                <br>      
               <span class="bold">Patents</span> 
                <br> 
               System and Method For Spatial Interaction For Viewing and Manipulating <br>Off-Screen Content
                <br>
                <div class="font-small">
                <span class="bold">Erik Paluka</span>, Christopher Collins
                    <br>United States Patent Application No. 15/427,631
                    <br>Canadian Patent Application No. 2,957,383
                </div>

            </div>
        
        <div class="center" style="margin-top: 50px; margin-bottom: 50px;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/2rDxgAI6E9o" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <div class="researchContent"> 
            
            <div class="researchSection">
                                <img class="center" style="margin-bottom: 50px;" src="../../img/spatialInteract/study-setup-800px.jpg" alt="Off-Screen Desktop Setup" width="800" height="497">

                <span class="bold upFont">Contributions</span>
                <ol>
                    <li>A formalized descriptive framework of the off-screen interaction space that divides the around-device space into separate interaction volumes.</li>
                    <li>The design of spatial off-screen navigation techniques that enable one to view and interact with off-screen content.</li>
                    <li>The design and implementation of Off-Screen Desktop, an off-screen interaction system, along with several use case prototypes.</li>
                    <li>The results from a comparative evaluation between three of my spatial off-screen navigation techniques and traditional mouse panning using a 2x2x4 factorial within-subjects study design.</li>
                </ol>
            </div>
            
            <div class="researchSection">
                
                <span class="bold upFont">Spatial Off-Screen Navigation Techniques</span><br><br><br>
                
                <img src="../../img/spatialInteract/direct-manip.png" alt="Spatial Direct Manipulation" width="800" height="">
                
               <p class="researchParagraph" style="margin: auto; margin-top: 30px; float: none;">                
                    For my thesis, I designed a set of spatial interaction techniques that allows one to explore, navigate, and directly manipulate an information space (eg. desktop, map, blue grid in image) that is larger than the display. By treating the information space as if it extended past the boundaries of the screen, users can place their hand beside the display to view off-screen content at that location, as well a directly manipulate it with a spatial selection technique (eg. tap). 
                   
                   <br><br>To accomplish this, the techniques geometrically transform (eg. scale, translate) the visual presentation of the information space without affecting its spatial interaction space. Direct manipulation is supported by employing a direct 1:1 mapping between the physical world (motor space) and the information space. Other mappings are supported as well, including ones that take into account the biomechanical properties of the human arm and the overall size of the information space.
                </p>
                
            </div>
            
            <div class="researchSection">    
                <div style="float: right; max-width: 360px;">
                    <img style="float: right;" src="../../img/spatialInteract/Paper-Distortion.png" alt="Paper Distortion" width="300" height="243">
                    <img style="float: right; margin-top: 30px;" src="../../img/spatialInteract/Paper-Distortion-1touch.png" alt="Paper Distortion Single Touch" width="300" height="231">
                    <img style="float: right; margin-top: 30px;" src="../../img/spatialInteract/Paper-Distortion-2touch.png" alt="Paper Distortion Double Touch" width="300" height="215">
                </div>
                <p class="researchParagraph">
                    <span class="bold">Paper Distortion</span><br><br>
                    The Paper Distortion technique employs a paper pushing metaphor to display off-screen content. If we imagine the 2D information space as a sheet of paper that is larger than the display, the user can push the paper from the side towards the display to bring off-screen content into the viewport. This causes the section of paper that is over the screen to crumple (distort); therefore creating enough room for the off-screen content by only scaling down the original on-screen content.
                    <br><br>
                    Instead of distorting all of the content on-screen, the user can touch a location on the display whilst performing the pushing gesture to define a starting point of the distortion. The end point will automatically be the closest on-screen location to the performed push gesture. For example, if one pushes horizontally from the right side and touches the middle of the screen, then only on-screen content that is on the middle right side of the display will become distorted. 
                    
                    <br><br>Similarly, the user has the option to define the end point of the distortion region as well. By touching two locations with one hand and performing the push gesture, only content within those two locations will become distorted. 
                </p>
            </div>
            
            <div class="researchSection" style="clear: both; padding-top: 50px;">
                
                <div style="float: left; max-width: 360px;">
                    <img src="../../img/spatialInteract/Dynamic-Distortion.png" alt="Dynamic Distortion" width="300">
                    <img style="margin-top: 30px;" src="../../img/spatialInteract/Dynamic-Distortion-Corner.png" alt="Dynamic Distortion Corner" width="300">
                </div>
               <p class="researchParagraph" style="float: right;"><span class="bold">Dynamic Distortion</span><br><br>
                
                    With Dynamic Distortion the user is able to continuously change the amount of distortion by adjusting his hand location in relation to the side of the display. To invoke this technique, the user only has to place their hand in an off-screen area. By moving one’s hand further away from the side of the display, the amount of distortion increases since more of the off-screen information space needs to fit on-screen. 
                   <br><br>
                   To be able to view off-screen content past the corner of the display, the on-screen content is distorted horizontally and vertically.
                </p>
            </div>
            
            <div class="researchSection" style="clear: both; padding-top: 50px;"> 
                 <img style="float: right; margin-top: 50px;" src="../../img/spatialInteract/content-aware-distortion.png" alt="Content-Aware Distortion" width="300">
                
                <p class="researchParagraph"><span class="bold">Content-Aware Distortion</span>
                    <br><br>
                    To provide further control on how Paper and Dynamic Distortion transform the information space, I developed Content-Aware Distortion. This transformation technique takes into account the energy or importance of pixels to minimize the loss of important information when distorting an information space. Regions with a high amount of energy are only translated, whereas regions with a low amount of energy are distorted to make room for off-screen content. For example in a map-based interface, if oceans had low energy and continents had high energy, then this technique would only distort the oceans. In the image below, Paper Distortion combined with Content-Aware Distortion is used to bring portions of Russia and the Middle East on-screen by distorting a large section of the Atlantic Ocean to less than a pixel wide. 
                </p>
                <a href="../../img/spatialInteract/map-content-aware-distort.jpg" target="_blank">
                  <img style="padding: 10px; margin-top: 50px;" src="../../img/spatialInteract/map-content-aware-distort-small.jpg" alt="Content-Aware Distortion Map" width="780">
                </a>
            </div>
            
            <div class="researchSection" style="clear: both;">    
                <img style="float: right; margin-top: 50px;" src="../../img/spatialInteract/Peephole.png" alt="Dynamic Peephole Inset" width="300">
                <p class="researchParagraph"><span class="bold">Dynamic Peephole Inset</span>
                    <br><br>
                    The Dynamic Peephole Inset technique displays off-screen content that is located underneath the user’s hand in an inset/viewport. This viewport is situated on-screen at the edge of the display with many options for its exact placement. The viewport can be fixed at the closest corner to the hand, the centre of the closest edge, or continuously follow the location of the hand.
                </p>
            </div>
            
            <div class="researchSection" style="clear: both;">
                
                <img style="float: left; margin-top: 50px;" src="../../img/spatialInteract/Point2Pan.png" alt="Point2Pan" width="300">
               <p class="researchParagraph" style="float: right;">
                   <span class="bold">Point2Pan</span><br><br>
                
                   Point2Pan is a ray-casting technique similar to the ones designed for interacting with distant objects in 3D environments. When a user points to a section of the information space that lies off-screen, the system translates (pans) the information space to show this section on-screen. The user can then manipulate the content using touch or the mouse for example, or end the pointing gesture to translate the information space back to its original location. This allows one to quickly explore the surrounding off-screen area without much physical effort. 
                </p>
            </div>
            
            <div class="researchSection" style="clear: both;">
                
                <img style="float: right; margin-top: 50px;" src="../../img/spatialInteract/Spatial-Panning.png" alt="Spatial Panning" width="300">
               <p class="researchParagraph" style="float: left;">
                   <span class="bold">Spatial Panning</span><br><br>
                
                    The Spatial Panning technique translates (pans) the information space to show off-screen content. By directly placing one’s hand in the information space that resides off-screen, the system will translate the environment to show on-screen the information space that is located at the position of the user’s hand. For example, on the right side of the screen, the vertical panning amount can be calculated based on the distance between the hand and the vertical centre of the screen. Similarly, the horizontal panning amount can be calculated based on the distance between the hand and right side of the screen.
                </p>
                
                <div style="clear: both; width: 800px"></div>
            </div>
            
            <div class="researchSection">
                
                <span class="bold upFont">Off-Screen Desktop: An Off-Screen Interaction System</span><br><br>
                <img class="center" src="../../img/spatialInteract/study-setup-800px.jpg" alt="Off-Screen Desktop Setup" width="800" height="497">
               <p class="researchParagraph" style="margin-left: auto; margin-right: auto; float: none;">
                  
                    To be able to unleash content from the boundaries of the display into the surrounding space, I created Off-Screen Desktop. It is a multimodal 2D zoomable user interface (ZUI) that enables the manipulation of on-screen and off-screen objects. Off-Screen Desktop integrates all of the aforementioned off-screen navigation techniques with support for spatial, mouse and touch-based interaction. To build Off-Screen Desktop, I employed a multi-touch monitor along with two motion sensors (Leap Motion).
                </p>
            </div>
            
            <div class="researchSection">
                
                <span class="bold" style="font-size: 1.05em;">Visualization of Off-Screen Content</span><br><br>
                
                <p class="researchParagraph" style="float: none; margin: 20px auto;">
                  
                    To provide the user with knowledge of off-screen content without requiring one to explore the off-screen information space, I integrated various off-screen visualization techniques from the human-computer interaction/information visualization literature into the system.
                </p>
                
                <div style="padding-top: 30px;">
                    <span class="bold vizTitle">Wedge</span>
                    <br>
                    <div class="vizDescrip">
                        Each wedge is an acute isosceles triangle with its tip located near the off-screen object, and the other two corners of the wedge appearing on-screen.<br><br>
                        <span style="font-size: 0.8em;">
                    Wedge: Clutter-free visualization of off-screen locations.
                    Gustafson, S., Baudisch, P., Gutwin, C., and Irani, P. (2008).  In Proceedings of the SIGCHI Conference on
                            Human Factors in Computing Systems, CHI ’08.</span>
                    </div>
                    <a href="../../img/spatialInteract/viz/wedge.png" target="_blank">
                    <img style="float: right; max-width: 410px;" src="../../img/spatialInteract/viz/viz-wedge.png" alt="Wedge Visualization" width="400" height="225">
                    </a>
                    <div style="clear: both; width: 800px;"></div>
                </div> 
                
                <div style="padding-top: 30px;">
                    <span class="bold vizTitle">EdgeRadar</span>
                    <br>
                    <div class="vizDescrip">
                        EdgeRadar displays miniaturized versions of the off-screen objects in bands located at the edge of the screen. Each band represents part of the off-screen information space.
                        <br><br>
                        <span style="font-size: 0.8em;">
                    Comparing visualizations for tracking off-screen moving targets. 
                        Gustafson, S. G. and Irani, P. P. (2007). In CHI ’07 Extended Abstracts on Human Factors in
                            Computing Systems, CHI EA ’07. </span>   
                    </div>
                    <a href="../../img/spatialInteract/viz/edgeradar.png" target="_blank">
                    <img style="float: right; max-width: 410px;" src="../../img/spatialInteract/viz/viz-edgeradar.png" alt="Wedge Visualization" width="400" height="225">
                    </a>
                    <div style="clear: both; width: 800px;"></div>
                </div>
                
                <div style="padding-top: 30px;">
                    <span class="bold vizTitle">Halo</span>
                    <br>
                    <div class="vizDescrip">
                        For each off-screen object, Halo displays a circle that is centred at the object’s location.
                        <br><br>
                        <span style="font-size: 0.8em;">
                        Halo: A technique for visualizing off-screen objects. 
                            Baudisch, P. and Rosenholtz, R. (2003). In Proceedings of the SIGCHI Conference on Human Factors in Computing Systems, CHI ’03. </span>
                    </div>
                    <a href="../../img/spatialInteract/viz/halo.png" target="_blank">
                    <img style="float: right; max-width: 410px;" src="../../img/spatialInteract/viz/viz-halo.png" alt="Wedge Visualization" width="400" height="225">
                    </a>
                    <div style="clear: both; width: 800px;"></div>
                </div>
                    
                <div style="padding-top: 30px;">
                    <span class="bold vizTitle" style="margin-left: 70px;">Overview + Detail (Minimap)</span>
                    <br>
                    <div class="vizDescrip">The inset image displays the entire information space with its viewfinder depicting the area that is shown on-screen. Users can translate the information space by moving the viewfinder within the inset or by clicking/touching a location within the inset.
                        <br><br>
                    <span style="font-size: 0.8em;">
                        
                        A review of overview+detail, zooming, and focus+context interfaces.
                     Cockburn, A., Karlson, A., and Bederson, B. B. (2009). ACM Comput. Surv.</span>
                    </div>
                    <a href="../../img/spatialInteract/viz/minimap.png" target="_blank">
                    <img style="float: right; max-width: 410px;" src="../../img/spatialInteract/viz/viz-minimap.png" alt="Wedge Visualization" width="400" height="225">
                    </a>
                    <div style="clear: both; width: 800px;"></div>
                </div>
                    
                <div style="padding-top: 30px;">
                    <span class="bold vizTitle">ToEdge</span>
                    <br>
                    <div class="vizDescrip">
                     To save screen space, I created the ToEdge on-demand visualization technique. By closing one’s hand into a fist, all objects that lie off-screen are visualized at the edge of the screen.   
                    </div>
                    <a href="../../img/spatialInteract/viz/toEdge.png" target="_blank">
                    <img style="float: right; max-width: 410px;" src="../../img/spatialInteract/viz/viz-toEdge.png" alt="Wedge Visualization" width="400" height="225">
                    </a>
                    <div style="clear: both; width: 800px;"></div>
                </div> 
                    
                <div style="padding-top: 30px;">
                    <span class="bold vizTitle">Arrows</span>
                    <br>
                    <div class="vizDescrip">Off-screen objects are represented by semi-transparent arrows at the edge of the screen.
                        <br><br>
                        <span style="font-size: 0.8em;">
                        Visualization of off-screen objects in mobile augmented reality. 
                     Schinke, T., Henze, N., and Boll, S. (2010). In Proceedings of the 12th International Conference
                        on Human Computer Interaction with Mobile Devices and Services, MobileHCI ’10.</span>
                    </div>
                    <a href="../../img/spatialInteract/viz/arrows.png" target="_blank">
                    <img style="float: right; max-width: 410px;" src="../../img/spatialInteract/viz/viz-arrows.png" alt="Wedge Visualization" width="400" height="225">
                    </a>
                    <div style="clear: both; width: 800px;"></div>
                </div>
                
                <div style="padding-top: 30px;">
                    <span class="bold vizTitle">City Lights</span>
                    <br>
                    <div class="vizDescrip">The City Lights visualization draws semi-transparent thick lines at the edge of the display to represent off-screen content. The length of the lines depend on the actual size of the objects.
                        <br><br>
                    <span style="font-size: 0.8em;">
                        City lights: Contextual views in minimal space. 
                     Zellweger, P. T., Mackinlay, J. D., Good, L., Stefik, M., and Baudisch, P. (2003). In CHI ’03 Extended Abstracts on
                        Human Factors in Computing Systems, CHI EA ’03.</span> 
                    </div>
                    <a href="../../img/spatialInteract/viz/citylights.png" target="_blank">
                    <img style="float: right; max-width: 410px;" src="../../img/spatialInteract/viz/viz-citylights.png" alt="Wedge Visualization" width="400" height="225">
                    </a>
                    <div style="clear: both; width: 800px;"></div>
                </div>
                    
            </div>
            
            <div class="researchSection">
                
                <span class="bold upFont">Use Cases</span><br><br>
                <span class="bold upFont" style="font-size: 1.05em;">Desktop</span><br><br>
                <a href="../../img/spatialInteract/desktop-before-after-1600px.png" target="_blank">
                <img src="../../img/spatialInteract/desktop-before-after-800px.jpg" alt="Desktop Before and After" width="800" height="225">
                </a>
                
               <p class="researchParagraph" style="float: none; margin: 20px auto 40px auto;"> 
                  My desktop application is shown here with a before and after sequence of its information space being distorted to view the Twitter feed that is located off-screen.
                </p>
            
                
                <span class="bold upFont" style="font-size: 1.05em;">Maps</span><br><br>
                <a href="../../img/spatialInteract/gmap-combined.png" target="_blank">
                <img src="../../img/spatialInteract/gmap-combined-small.jpg" alt="Google Maps" width="800" height="225">
                </a>
                
               <p class="researchParagraph" style="float: none; margin: 20px auto 40px auto;"> 
                  The left image shows a planned route that is too long for the size of the screen at the current zoom level. The right image shows the same route, but employs the Dynamic Distortion technique to show the entire route without zooming out and losing detailed information.
                </p>
                
                <a href="../../img/spatialInteract/gmap-detailcontext.png" target="_blank">
                <img src="../../img/spatialInteract/gmap-detailcontext-small.jpg" alt="Google Maps" width="800" height="321">
                </a>
                
               <p class="researchParagraph" style="float: none; margin: 20px auto 40px auto;"> 
                  In this map application, the on-screen section of the information space provides a higher level of detail than the off-screen sections; thus modifying the concept of an overview + detail interface.
                </p>
                
                <span class="bold upFont" style="font-size: 1.05em;">Off-Screen Toolbars</span><br><br>
                <a href="../../img/spatialInteract/off-screen_toolbar-before-after.png" target="_blank">
                <img src="../../img/spatialInteract/off-screen_toolbar-before-after-small.jpg" alt="Off-Screen Toolbars" width="800" height="391">
                </a>
                
               <p class="researchParagraph" style="float: none; margin: 20px auto 40px auto;"> 
                  System or application specific toolbars can be located off-screen to save screen space, and be brought on screen only when needed, as shown here by using the Dynamic Distortion technique.
                </p>
                
                <span class="bold upFont" style="font-size: 1.05em;">Document Exploration and Navigation</span><br><br>
                <a href="../../img/spatialInteract/index_search.png" target="_blank">
                <img src="../../img/spatialInteract/index_search-small.jpg" alt="Document Exploration and Navigation" width="800" height="450">
                </a>
                
               <p class="researchParagraph" style="float: none; margin: 20px auto 40px auto;"> 
                  In this application, the Dynamic Peephole Inset technique is being employed to explore a document while maintaining a view of its index page. Therefore, the user does not have to flip back and forth between the index page and the search pages when trying to find the target content.
                </p>
            </div>
            
             <div class="researchSection">
                
                <span class="bold upFont">Study: Evaluation of the Spatial Off-Screen Navigation Techniques</span><br><br>
                
                
               <p class="researchParagraph" style="margin: 20px auto 50px auto; float: none;">
                  To evaluate my techniques, I performed a comparative evaluation between three of my spatial off-screen navigation techniques and traditional mouse panning using a 2x2x4 factorial within-subjects study design. Read my master's thesis for more information.
                    
                </p>
                 
                 <div style="width: 600px; margin:auto;">
                     <a href="../../img/spatialInteract/StudyProcessDiagram.png" target="_blank">
                        <img src="../../img/spatialInteract/StudyProcessDiagram.png" alt="Study Process Diagram" width="600" height="595">
                         </a>
                 </div>
            </div>
            
        </div>
        
        <div id="ackSection" class="center" style="clear: both;">
                <h2>Acknowledgements</h2>
                
                <a href="http://www.nserc-crsng.gc.ca/" target="_blank" title="Natural Sciences and Engineering Research Council of Canada"><img class="ackLogo" src="../../img/logos/NSERC.png" alt="Natural Sciences and Engineering Research Council of Canada" width="124" height="50"></a>
                
              
                
                <a href="http://vialab.science.uoit.ca/" target="_blank" title="University of Ontario Institute of Technology vialab research group"><img class="ackLogo" src="../../img/logos/vialab.png" alt="University of Ontario Institute of Technology vialab research group" width="145" height="52"></a>

        </div>
        <?php include( '../../includes/footer.php'); ?>
    </div>
</body>

</html>
<?php include( '../../includes/compress.php'); ?>