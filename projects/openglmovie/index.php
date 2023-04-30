        <?php include( '../../includes/meta.php'); ?>

        <title>OpenGL Interactive Movie - Erik Paluka</title>
        <meta name="description" content="Travelling Through a Scene - An OpenGL interactive movie">
        <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
    </head>
    
    <body>
        <div class="container">
            <?php include( '../../includes/header.php'); ?>            
            <div class="researchTitle">
                <h1>Travelling Through a Scene &mdash; An Interactive Movie</h1>
            Advanced Computer Graphics &mdash; Fall 2011
                <br />Implemented in C++ using OpenGL &amp; <a href="http://www.opengl.org/resources/libraries/glut/" target="_blank" title="OpenGL Utility Toolkit">GLUT</a>
            </div>
        
            <div class="tube">
        <iframe width="306" height="255" frameborder="0" src="http://www.youtube.com/embed/qAD8vIOqvOM" scrolling="no"></iframe></div>
                    
                <div class="researchContent">
            <div class="researchSection" id="perceptTCont">

                
                <p class="researchParagraph center" style="float: none;">This project creates a winter scene consisting of an infinite path, a moving lake, snowflakes falling from the sky, and trees. The journey begins at dusk and as the user travels through the scene, the sun rises (lighting up the scene) and eventually turns to dusk once again. The user is given limited control of the camera for exploration through the scene and can adjust the speed of travel.
                    <br><br>In the first part of the movie, the trees are rendered using the billboarding technique. Before the movie begins, a tree is rendered from different angles to the back buffer. The back buffer is read after each rendering to create textures of the tree at different angles. These textures are then used to create the trees in the scene. The view direction of the user determines which texture is used to render each tree. This creates the illusion that the trees are three dimensional. In the second part of the movie, all the trees are procedurally drawn.</p>
                    
                <div style="width: 400px; margin: 20px auto;">
                    Features
                    
                    <ul>
                        <li>Particle System (Snow)</li>
                        <li>Sky Box</li>
                        <li>Billboarding</li>
                        <li>L-Systems</li>
                        <li>User can control the number of trees to render, and if the path should be straight or curve back and forth</li>
                        <li>Scene is rendered as a giant cylinder to create an infinite path</li>
                    </ul>
                        <br>
                        You can find the source code on <a href="https://github.com/paluka/InfiniteScene-OpenGL" target="_blank"><img id="onGithub" src="../../img/socialIcons/github.png" alt="GitHub" width="56" height="25"></a>
                </div> </div></div>
            <?php include( '../../includes/footer.php'); ?>
       
            </div>
    </body>

</html>
        <?php include( '../../includes/compress.php'); ?>
