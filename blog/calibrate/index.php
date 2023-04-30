<?php include( '../../includes/meta.php'); ?>
    <title>Calibrating Multiple Leap Motion Controllers - Erik Paluka</title>
    <meta name="description" content="Calibrating Multiple Leap Motion Controllers To Work On a Single Computer">

    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />

</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">
            
              <div class="blogEntry" id="Calibrate">
                <div class="blogTitle">
                    <h1>Calibrating Multiple Leap Motion Controllers</h1>
                    
                    
                    <div class='bDate'>Date: February 16, 2015</div>
                </div>

                <div class="blogText">
                    <p>
                       At the current time, Leap Motion does not support using multiple Leap Motion controllers connected to a single computer. Developers can still get around this issue by employing the Web Sockets protocol along with a second computer or a virtual machine, as described in my <a href="../multiple-leap-controllers/index.php" target="_blank" title="">earlier post</a>. If these Leap Motion devices are used along side one another, it is beneficial to place them within the same frame of reference (coordinate system). This can be accomplished with the use of a touch-enabled visual display.
                        
                        <br><br>
                        
Within a calibration mode, multiple small touch-enabled targets can be drawn on-screen at corners of the display. By programmatically determining the size and resolution of this display, all target positions in milimetres (mm) from the bottom-left corner can be calculated. A milimetre-based coordinate system is used as the Leap Motion devices output positional data in mm from the centre of each device. 
                        
                        <br><br>To place each device within this coordinate system, a human can select each target with their index finger one-at-a-time for a certain duration. Since each target is touch-enabled, the system knows when a target is being touched. For the duration that a target is being touched, the system can then calculate the average distance in mm from a Leap Motion device to the index finger that is touching the target. 
                        
                        <br><br>
                        After all targets have been touched, the system will know the distance from the bottom-left corner of the display to each corner of the display, then to the centre of each Leap Motion device. Now when a hand is placed within a Leap Motion controller's field of view, the system will be able to convert the Leap Motion's positional data from its local frame of reference to the newly created global frame of reference. This allows multiple Leap Motion controllers to be employed, as well as allowing further devices to be easily integrated into the system.
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