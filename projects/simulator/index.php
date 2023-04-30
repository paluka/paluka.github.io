        <?php include( '../../includes/meta.php'); ?>

        <title>2D Collisions - Erik Paluka</title>
        <meta name="description" content="Simulation of multiple rigid bodies colliding in 2D">
        <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
    </head>
    
    <body>
        <div class="container">
            <?php include( '../../includes/header.php'); ?>
            <div class="researchTitle">
            <h1>Simulation of Multiple Rigid Bodies Colliding in 2D</h1>
            Simulation and Modelling &mdash; Fall 2011
                <br />Implemented in Java using the Open Source Physics framework
            </div>
                <div class="tube"><iframe width="306" height="255" frameborder="0" src="http://www.youtube.com/embed/52Z0Ip_S5J0" id="video4" scrolling="no"></iframe></div>
            
                
            
                <div class="researchContent">
            <div class="researchSection" id="perceptTCont">

                
                <p class="researchParagraph center" style="float: none;">The most difficult aspect of rigid body simulation is modelling collisions. Modelling collisions requires the detection of contact points and computing the collision forces. Each body has a mass, position, velocity, orientation and angular velocity associated with it. Using Newton's Law of Restitution for Instantaneous Collisions, rigid body collisions can be accurately modelled.
                </p>
                    <div style="width: 400px; margin: 20px auto;">
                    
                    Features
                    
                    <ul>
                        <li>Uses ordinary differential equations (ODE) to model body dynamics</li>
                        <li>Uses the fourth order Runge-Kutta method (RK4) for the ODE solver</li>
                        <li>When a collision is detected, the post-collision velocities and angles are resolved by calculating the impulse of the collision, and applying the impulse to the respective bodies at the time of collision</li>
                        <li>The time of the collision is found through a binary search. The ODE solver 'steps back time' to find the point of the collision</li>
                        <li>Calculates and graphs the total energy and the total momentum of the system</li>
                    </ul>
                        
                        <br>
                        You can find the source code on <a href="https://github.com/paluka/2DCollisionSimulator" target="_blank"><img id="onGithub" src="../../img/socialIcons/github.png" alt="GitHub" width="56" height="25"></a>
                </div></div></div>
           
            <?php include( '../../includes/footer.php'); ?>
        </div>
    </body>

</html>
        <?php include( '../../includes/compress.php'); ?>