<?php include( '../../includes/meta.php'); ?>
    <title>Employing Physics to Create Haptic and Tactile Feedback in Human-Computer Interaction - Erik Paluka</title>
    <meta name="description" content="Employing Physics to Create Haptic and Tactile Feedback in Human-Computer Interaction">

    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />

</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">
            
              <div class="blogEntry" id="Haptic">
                <div class="blogTitle">
                    <h1>Employing Physics to Create Haptic &amp; Tactile <br> Feedback in Human-Computer Interaction</h1>
                    
                    
                    <div class='bDate'>Date: February 25, 2015</div>
                </div>

                <div class="blogText">
                    <p>
                    When creating a user-interface, whether it be hardware or software-based, or even a mix between the two, feedback from the computing device is critical for the user to understand the state of the system. Auditory, visual and mechanical feedback systems tend to dominate as the most popular feedback mechanisms, but any will suffice as long as communication is in some form that humans can sense. Therefore in theory, any single or combinatorial grouping of sense evoking changes or modalities can be employed as feedback. For example, one creative project, entitled  <a href="http://big.cs.bris.ac.uk/projects/sensabubble" target="_blank" title="SensaBubble: A Chrono-Sensory Mid-Air Display of Sight and Smell">SensaBubble</a>,  employed the use of touch, sight and smell to create a mid-air display <span class="bold">[1]</span>.
                       
                        
                        <h2>Human Senses</h2>
                        Senses involve organs with specialized receptor cells that, along with the nervous system, interpret external and internal stimuli. There is much debate to the number of senses that humans have, such as the existence of magnetoception <span class="bold">[2, 3]</span>, although some of the generally accepted senses by the scientific community include:
                    <ul>
                        <li>Touch - Tactation
                        <ul>
                            <li>Pressure - Mechanoreception</li>
                            <li>Temperature - Thermoreception</li>
                            <li>Pain - Nociception</li>
                            </ul>
                        </li>
                        <li>Balance - Equilibrioception</li>
                        
                        <li>Limb  &amp; Body Position - Proprioception</li>
                        <li>Hearing - Audioception</li>
                        <li>Taste - Gustation</li>
                        <li>Sight - Ophthalmoception</li>
                        <li>Smell - Olfaction</li>
                        
                        
                    </ul>
                    
                    <h2>Feedback Using Sound, Vortices &amp; Electricity</h2>
                    With the proliferation of mobile and touch devices, creating feedback mechanisms for these computing systems has become a source of innovation. These devices mostly employ visual and auditory feedback, but others are possible as well. For example, researchers have looked at using mechanical vibration to augment voice messages with vibro-tactile feedback <span class="bold">[4]</span>. Another interesting technique exploits the principle of electrovibration to create differences in electrostatic friction on a surface <span class="bold">[5]</span>. By periodically changing the electric potential difference (voltage) between two mediums, <a href="http://www.disneyresearch.com/project/teslatouch/" target="_blank" title="TeslaTouch: electrovibration for touch surfaces">Electrostatic Vibration</a> can be used to create different tactile sensations, such as changing the texture of different virtual elements.
                    
                    <br><br>
                    When interactions move off the surface, it can be quite difficult to design them with haptic feedback without user instrumentation. Most techniques involve quickly changing the pressure of a gaseous medium. For example, <a href="http://big.cs.bris.ac.uk/projects/ultrahaptics" target="_blank" title="UltraHaptics: Haptic Feedback Powered by Ultrasound">UltraHaptics</a> employs ultrasonic sound waves that are localized to displace regions of air <span class="bold">[6]</span>. Other techniques, like <a href="http://www.disneyresearch.com/project/aireal/" target="_blank" title="Aireal: Interactive Tactile Experiences in Free Air">Aireal</a> &amp; <a href="http://research.microsoft.com/en-us/um/redmond/groups/cue/AirWave/" target="_blank" title="">AirWave</a>, utilize vortices of air that collapse upon hitting a user, thus imparting a sense of touch <span class="bold">[7, 8]</span>.
                      
                    </p>
                <br>
              Papers:
                <br>
                <ol style="font-size: 0.8em;">
                    <li>
                        <a class="bold" href="http://doi.acm.org/10.1145/2556288.2557087" target="_blank">SensaBubble: a chrono-sensory mid-air display of sight and smell</a>. Sue Ann Seah, Diego Martinez Plasencia, Peter D. Bennett, Abhijit Karnik, Vlad Stefan Otrocol, Jarrod Knibbe, Andy Cockburn, and Sriram Subramanian. In Proceedings of CHI 2014.
                    </li>
                    <li>
                        <a class="bold" href="http://dx.doi.org/10.1016/j.neuroscience.2006.08.068" target="_blank">Evidence of a nonlinear human magnetic sense</a>. Carrubba, Frilot, Chesson &amp; Marino. Neuroscience. 2007.
                    </li>
                    <li>
                        <a class="bold" href="http://dx.doi.org/10.1016/S0003-3472(87)80105-7" target="_blank">Human navigation and magnetoreception: the Manchester experiments do replicate</a>. Robin Baker. Animal behaviour. 1987.
                    </li>
                    
                    <li>
                        <a class="bold" href="http://doi.acm.org/10.1145/2380116.2380185" target="_blank">Pressages: augmenting phone calls with non-verbal messages</a>. Eve Hoggan, Craig Stewart, Laura Haverinen, Giulio Jacucci, and Vuokko Lantz. In Proceedings of UIST 2012.
                    </li>
                    <li>
                        <a class="bold" href="http://doi.acm.org/10.1145/1866029.1866074" target="_blank">TeslaTouch: electrovibration for touch surfaces</a>. Olivier Bau, Ivan Poupyrev, Ali Israr and Chris Harrison. In Proceedings of UIST 2010.
                    </li>
                    <li>
                        <a class="bold" href="http://doi.acm.org/10.1145/2501988.2502018" target="_blank">UltraHaptics: Multi-Point Mid-Air Haptic Feedback for Touch Surfaces</a>. Tom Carter, Sue Ann Seah, Benjamin Long, Bruce Drinkwater, and Sriram Subramanian. In Proceedings of UIST 2013.
                    </li>
                    <li>
                        <a class="bold" href="http://doi.acm.org/10.1145/2461912.2462007" target="_blank">AIREAL: interactive tactile experiences in free air</a>. Rajinder Sodhi, Ivan Poupyrev, Matthew Glisson, and Ali Israr. In ACM Transactions on Graphics 2013.
                    </li>
                    <li>
                        <a class="bold" href="http://doi.acm.org/10.1145/2493432.2493463" target="_blank">AirWave: non-contact haptic feedback using air vortex rings</a>. Sidhant Gupta, Dan Morris, Shwetak N. Patel, and Desney Tan. In Proceedings of UbiComp 2013.
                    </li>
                </ol>
                </div>
            </div>
            
            
            
        </div>
        <?php include( '../linkBar.php'); ?>
        <?php include( '../../includes/footer.php'); ?>
    </div>
</body>

</html>
<?php include( '../../includes/compress.php'); ?>