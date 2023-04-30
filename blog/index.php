<?php include( '../includes/meta.php'); ?>
<title>Blog - Erik Paluka</title>
<meta name="description" content="Erik Paluka's blog where he posts information, videos, and links of cool technology">

<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
</head>

<body>
    <div class="container">
        <?php include( '../includes/header.php'); ?>
        <div id="blog">

            
           
            
            <div class="blogEntry" id="Haptic">
                <div class="blogTitle">
                    <h1>Employing Physics to Create Haptic &amp; Tactile <br> Feedback in Human-Computer Interaction</h1>
                    
                    
                    <div class='bDate'>Date: February 25, 2015</div>
                </div>

                <div class="blogText">
                    
                    When creating a user-interface, whether it be hardware or software-based, or even a mix between the two, feedback from the computing device is critical for the user to understand the state of the system. Auditory, visual and mechanical feedback systems tend to dominate as the most popular feedback mechanisms, but any will suffice as long as communication is in some form that humans can sense. Therefore in theory, any single or combinatorial grouping of sense evoking changes or modalities can be employed as feedback. For example, one creative project, entitled  <a href="http://big.cs.bris.ac.uk/projects/sensabubble" target="_blank" title="SensaBubble: A Chrono-Sensory Mid-Air Display of Sight and Smell">SensaBubble</a>,  employed the use of touch, sight and smell to create a mid-air display <span class="bold">[1]</span>.
                       
                        
                        <br><br>
                        
                        <a href="haptics/">Click here to read more...</a>
                    
                </div>
            </div>
            
         <div class="blogEntry" id="Calibrate">
                <div class="blogTitle">
                    <h1>Calibrating Multiple Leap Motion Controllers</h1>
                    
                    
                    <div class='bDate'>Date: February 16, 2015</div>
                </div>

                <div class="blogText">
                    
                       At the current time, Leap Motion does not support using multiple Leap Motion controllers connected to a single computer. Developers can still get around this issue by employing the Web Sockets protocol along with a second computer or a virtual machine, as described in my <a href="./multiple-leap-controllers/index.php" target="_blank" title="">earlier post</a>. If these Leap Motion devices are used along side one another, it is beneficial to place them within the same frame of reference (coordinate system). This can be accomplished with the use of a touch-enabled visual display.
                        
                        <br><br>
                        
                        <a href="calibrate/">Click here to read more...</a>
                </div>
            </div>
        
            <div class="blogEntry" id="Rooting">
                <div class="blogTitle">
                    <h1>Installing Custom ROM on Samsung Devices <br> &amp; Gaining Root Access</h1>
                    
                    
                    
                    <div class='bDate'>Date: February 10, 2015</div>
                </div>

                <div class="blogText">
                    
                    As of right now, Android is my favourite mobile operating system for one main reason. It is open enough and legal for developers to customize and create their own flavours of Android. With certain limitations, it is even possible to use a custom forked version of Android in a commercial product, as Amazon.com has done with the Fire OS. Although this creates further competition for Google, openess has vaulted Android into the number one mobile OS spot in terms of popularity.
                       <br><br>
                        
                        <a href="root/">Click here to read more...</a>
                    
                    
                </div>
            </div>
            
            <div class="blogEntry" id="Latex">
                <?php include( 'latex/exCode.php'); ?>
                <div class="blogTitle">
                    <h1>Writing Beautiful Documents With LaTeX</h1>
                    
                    
                    <div class='bDate'>Date: February 9, 2015</div>
                </div>

                <div class="blogText">
                       When writing technical papers, the go to format is 
                    <a href="http://www.latex-project.org/" target="_blank" title="LaTeX">
                      
                        <img style="top: 12px; position: relative;" src="../img/blog/latex.png" alt="LaTeX" width="96" height="40"> </a> due to its high-quality typesetting abilities,  <a href="http://latex-project.org/lppl/" target="_blank" title="LPPL">free software license</a> and low-level design control. WYSIWYG word-processing systems are easy to use, but they cannot create documents as beautiful as the LaTeX system can, especially when it comes to working with mathematical formulae. For reasons such as these, academic theses and scientific research papers are usually produced using this technology. 
                       <br><br>
                        
                        <a href="latex/">Click here to read more...</a>
                                    
                </div>
            </div>
            
            <div class="blogEntry" id="RST">
                <div class="blogTitle">
                    <h1>Algorithms for 2D Multi-Touch Rotate, <br> Scale &amp; Translate (RST) Gestures</h1>
                <div class='bDate'>Date: July 8, 2014</div>
                </div>

                <div class="blogText">
                    <h2>Homogeneous Coordinate System</h2>
<p>Before getting started, a mathematical coordinate system needs to be chosen. Instead of working with the usual Cartesian coordinate system, as used in Euclidean geometry, the computer graphics field employs homogeneous coordinates for projective geometry. Doing so allows common operations to be implemented as matrix operations, which can then be represented as a single matrix. <a href="http://sunshine2k.blogspot.ca/2011/12/reason-for-homogeneous-4d-coordinates.html" target="_blank" title="Why go homogeneous">See here for the reasons why</a>.</p>
                    
                      <div class="center">
                          <br>
                         <img src="../img/blog/coordinates.jpg" width="464" height="130"/>
                          <br>
                    </div>
                   
                    
                    <h2>Transformation Matrices</h2>
                    <p>In a multi-touch gesture, there are three main types of transformations involved: rotation, scaling and translation. To represent those transformations mathematically, we use matrices.</p>
                        
                        <div class="center">
                          <br>
                         <img src="../img/blog/translation.jpg" width="450" height="153"/>
                          <br>
                    </div>
                               
                     <br>
                        
                        <a href="rst/">Click here to read more...</a>
                </div>
            </div>
            
            <div class="blogEntry" id="JanusVR">
                <div class="blogTitle">
                    <h1>Janus VR: Virtual Reality Web Browser</h1>
                    <a href="http://janusvr.com/" target="_blank" title="Janus VR">JanusVR.com</a>
                    <div class='bDate'>Date: June 8, 2014</div>
                </div>

                <div class="blogText">
                    <p>
                       Inspired by the novel Snow Crash, <a href="http://www.dgp.toronto.edu/~mccrae/" target="_blank" title="James McCrae">James McCrae</a> has created the beginning of the future; a new way to consume and interact with the internet. It is called Janus VR, and instead of putting the web into your hands, it brings you <span class="bold">into the web</span>. It uses the Oculus Rift to give the viewer a new, 3D and immersive experience. Imagine being able to interact with websites and their content as if they were stores, restaurants, etc., in real life. Well, Janus VR is getting us there! In their system, webspages are rooms and hyperlinks connect them as doorways. The whole thing reminds me of the internet in the television show Futurama.
                        <br><br>
                       <a href="../img/blog/I-dated-a-robot-ebay.jpg" target="_blank" title="Futurama">
                           <div class="center"><img src="../img/blog/I-dated-a-robot-ebay.jpg" alt="Futurama" width="320" height="240"></div>
                        </a>
                        <a href="../img/blog/JanusVR.jpg" target="_blank" title="Futurama"><img src="../img/blog/JanusVR.jpg" alt="Janus VR" width="527" height="200"></a>
                        Futurama &copy; 20th Century Fox Television
                    </p>
                </div>
            </div>

            <div class="blogEntry" id="MultLeap">
                <div class="blogTitle">
                    <h1>Using Multiple Leap Motion Controllers
                        <br>On the Same Computer <br>
                    <span style="color:#FFF; font-size: 10px; line-height: 10px;max-height: 10px;display: block;">Using Multiple Leap Motion Controllers On a Single Computer</span></h1>
                    <a href="https://www.leapmotion.com/" target="_blank">www.leapmotion.com</a>
                    <div class='bDate'>Date: February 12, 2014</div>
                </div>

                <div class="blogText">
                    
                    <p>At the moment, Leap Motion does not officially support using two or more Leap Motion controllers on the same computing device. To get around this, you can set up a virtual machine (VM) on your computer (host). With my setup, I installed...
                        <br>
                        <br>
                        <a href="multiple-leap-controllers/">Click here to read more...</a>
                    </p>
                </div>
            </div>
            
            <div class="blogTitle">
                <h1>Page &nbsp;&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.erikpaluka.com/blog/2.php">2</a></h1>
                <br>
            </div>
            
        </div>
        <?php include( 'linkBar.php'); ?>
        <?php include( '../includes/footer.php'); ?>
    </div>
    
    <script type="text/javascript" src="script.js"></script>
    
</body>

</html>
<?php include( '../includes/compress.php'); ?>
