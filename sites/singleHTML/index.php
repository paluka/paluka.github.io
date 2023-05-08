<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Erik Paluka - Second Home Page</title>
        <meta name="description" content="Erik Paluka's JavaScript website using only one HTML file.">
        <link rel="shortcut icon" href="http://www.erikpaluka.com/img/favicon.ico">
        <link id="css" rel="stylesheet" type="text/css" href="index.css">
        
        <!-- Google Analytics -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-32905413-2']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    </head>
    
    <body>
        <div id="UICircle"></div>
        <div class="UIIcon" id="HomeIcon">
            <div class="borderUI" id="HomeBorder"></div>
            <span class="IconTitle" id="HomeTitle">Home</span>
        </div>
        <div class="UIIcon" id="BioIcon">
            <div class="borderUI" id="BioBorder"></div>
            <span class="IconTitle" id="BioTitle">Bio</span>
        </div>
        <div class="UIIcon" id="ResearchIcon">
            <div class="borderUI" id="ResearchBorder"></div>
            <span class="IconTitle" id="ResearchTitle">Research</span>
        </div>
        <div class="UIIcon" id="ContactIcon">
            <div class="borderUI" id="ContactBorder"></div>
            <span class="IconTitle" id="ContactTitle">Contact</span>
        </div>
        <div id="miniIcons">
            <a href="https://github.com/paluka" target="_blank">
                <img src="img/github.png" width="56" height="25"/>
            </a>
            <a href="http://ca.linkedin.com/pub/erik-paluka/36/212/29b" target="_blank">
                <img src="img/LinkedIn_IN_Icon_25px.png" width="25" height="25"/>
            </a>
            
            <a href="http://scholar.google.ca/citations?user=563USoAAAAAJ" target="_blank">
                <img src="img/googleScholar.png" width="25px" height="25px" />
            </a>
            
            <a href="http://vialab.ca/portfolio/erik-paluka" target="_blank">
                <img src="img/vialab.png" width="70" height="25"/>
            </a>
            
            <a href="http://twitter.com/#!/ErikPaluka" target="_blank">
                <img src="img/twitter.png" width="25" height="25"/>
            </a>
            <a href="http://www.flickr.com/photos/77791941@N07/" target="_blank">
                <img src="img/flickr-25px.jpg" width="25px" height="25px" alt="flickr account"/>
            </a>
        </div>
        <div id="resize">
            <span>Resize</span>
        </div>
        <div id="hide">
            <span>Toggle</span>
        </div>
        <div class="Content textContent" id="HomeContent">
            <div class="RowDivider" style="height: 150px;">
                <div class="CellDivider">Hello, my name is Erik Paluka. I am a graduate student in computer science.</div>
                <div class="CellDivider"></div>
            </div>
            <div class="RowDivider">
                <div class="CellDivider" id="develop">
                    <p>I generally develop using these languages/APIs:</p>English - Native Language
                    <br>French - 12 years of French Immersion
                    <br><br>Java &#42;
                    <br>
                    <a href="http://processing.org/" target="_blank">Processing</a> &#42;
                    <br>JavaScript &#42;
                    <br>C++ and OpenGL
                    <br><br>
                    &#42; Languages of Choice
                </div>
                <div class="CellDivider" id="News">
                    <div id="NewsTitle">Recent News
                        <br>
                        <br>
                    </div>
                    <div class="NewsItem">
                            <div class="NewsDate">03/2014</div>
                            <div class="NewsText">Our <a href="http://www.erikpaluka.com/research/percept/" target="_blank" title="Evaluating the Perceived Relative Depth of Stereoscopically Rendered Two-Dimensional Shapes">stereoscopic 3D &#43; information visualization study</a>, was presented at the 2014 University of Ontario Institute of Technology's Graduate Student Research Conference</a>
                        </div>
                    </div>
                    <div class="NewsItem">
                            <div class="NewsDate">03/2014</div>
                            <div class="NewsText">Attended the
                           <a href="http://chi2014.acm.org/" target="_blank" title="CHI 2014">2014 CHI Research Conference on Human Factors in Computing Systems</a> in Toronto, Canada
                        </div>
                    </div>
                    <div class="NewsItem">
                            <div class="NewsDate">10/2013</div>
                            <div class="NewsText">Attended the
                            <a href="http://www.acm.org/uist/uist2013/" target="_blank" title="UIST 2013">2013 User Interface Software and Technology (UIST)</a> research conference in St Andrews, Scotland
                        </div>
                    </div>
                    <div class="NewsItem">
                            <div class="NewsDate">10/2013</div>
                            <div class="NewsText">Presented <a href="http://doi.acm.org/10.1145/2512349.2514922" target="_blank">TandemTable</a> at the <a href="http://its2013.org/" target="_blank">Interactive Tabletops and Surfaces (ITS)</a> research conference in St Andrews, Scotland
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Content" id="bioImgContainer">
            <img id="bioImg" />
        </div>
        <div class="Content textContent" id="BioContent">I am currently working on my
            <a href="http://www.gradstudies.uoit.ca/" title="UOIT Graduate Studies" target="_blank">master's degree in computer science</a> at the Univerisity of Ontario Institute of Technology (UOIT). I have been a member of the Visualization for Information Analysis lab (<a href="http://vialab.ca/" target="_blank" title="vialab research group">vialab</a>) under the supervision of
            <a href="http://vialab.ca/portfolio/christopher-m-collins" target="_blank">Dr. Christopher Collins</a> since May 2011.
            <br>
            <br>I received my Bachelor of Science (B.Sc. Honours) in Computer Science specializing in Digital Media from the Univerisity of Ontario Institute of Technology (UOIT) in 2012. My senior honours thesis project, "Enhancing Tandem Language Learning Using an Interactive Tabletop", dealt with the tandem language learning model and interactive surfaces.
            <br>
            <br>My research interests lie within the realm of human-computer interaction, specifically interactive surfaces (multi-touch devices) and user interface/experience design. I am also interested in ubiquitous computing, interaction techniques, information visualization, augmented and virtual reality, and robotics.
            <br>
            <br>I am a member of the vialab research reading group at the University of Ontario Institute of Technology.
            <a href="../../papers.php">Click here</a> to see a few of the Computer Science research papers that I have read.
            <br>
        </div>
        <div class="Content textContent" id="ResearchContent">
            <div class="RowDivider">
                <div class="CellDivider" style="text-align: center; float:left; width: 306px;height:250px;"><a href="http://vialab.ca/portfolio/tandemtable" target="_blank">Tandem Table<br>Honours Undergraduate Thesis</a>
                    <br>
                    <br>Supervised by:
                    <br>Dr. Christopher Collins (UOIT)
                    <br>
                    <br>Implemented in Java using my toolkit
                    <br>(The Simple Multi-Touch Toolkit)</div>
                <div class="CellDivider" style="text-align: center;">
                    <img id="TLLimg" src="img/TandLangLearn.jpg" />
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="RowDivider">
                <div class="CellDivider">
                    <span style="float:left; width: 306px;text-align: center;height:250px;">
                        <a href="http://vialab.ca/portfolio/smt-toolkit" target="_blank">The Simple Multi-Touch (SMT) Toolkit</a>
                        <br>
                        <br>Supervised by:
                        <br>Dr. Christopher Collins (UOIT)
                        <br>&amp; Dr. Mark Hancock (UW)</span>
                </div>
                <div class="CellDivider" style="width: 306px; height:255px;">
                    <iframe id="video" width="1" height="1" frameborder="0" src="http://www.youtube.com/embed/A49yhZPMfjA" scrolling="no" allowTransparency="true"></iframe>
                </div>
            </div>
        </div>
        <div class="Content textContent" id="ContactContent">You can e-mail me at
            <b>erik[dot]paluka[at]uoit[dot]ca</b>
            <br>
            <br>You can also find me on
                            <a href="http://scholar.google.ca/citations?user=563USoAAAAAJ" target="_blank">Google Scholar</a>,
                            <a href="http://www.mendeley.com/profiles/erik-paluka/" target="_blank">mendeley</a>,
                            <a href="https://github.com/paluka" target="_blank">GitHub</a>,
                            <a href="http://uoit.academia.edu/ErikPaluka" target="_blank">academia.edu</a>,
                            <a href="http://www.researchgate.net/profile/Erik_Paluka/" target="_blank">ResearchGate</a>,
                            <a href="http://ca.linkedin.com/pub/erik-paluka/36/212/29b" target="_blank">LinkedIn</a>, 
                            <a href="http://www.flickr.com/photos/77791941@N07/" target="_blank">flickr</a>, 
                            <a href="http://vialab.ca/portfolio/erik-paluka" target="_blank">vialab research group</a>, and
                            <a href="http://twitter.com/#!/ErikPaluka" target="_blank">Twitter</a>.</div>
    </body>
    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/index2Script.js"></script>
    

</html>