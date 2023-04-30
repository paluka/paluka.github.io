<?php include( '../../includes/meta.php'); ?>
    <title>Writing Beautiful Documents With LaTeX - Erik Paluka</title>
    <meta name="description" content="Writing Beautiful Documents With LaTeX">

    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
</head>

<body>
    <div class="container">
        <?php include( '../../includes/header.php'); ?>
        <div id="blog">
            
              <div class="blogEntry" id="Latex">
                <?php include( 'exCode.php'); ?>
                <div class="blogTitle">
                    <h1>Writing Beautiful Documents With LaTeX</h1>
                    
                    
                    <div class='bDate'>Date: February 9, 2015</div>
                </div>

                <div class="blogText">
                       When writing technical papers, the go to format is 
                    <a href="http://www.latex-project.org/" target="_blank" title="LaTeX">
                      
                        <img style="top: 12px; position: relative;" src="../../img/blog/latex.png" alt="LaTeX" width="96" height="40"> </a> due to its high-quality typesetting abilities,  <a href="http://latex-project.org/lppl/" target="_blank" title="LPPL">free software license</a> and low-level design control. WYSIWYG word-processing systems are easy to use, but they cannot create documents as beautiful as the LaTeX system can, especially when it comes to working with mathematical formulae. For reasons such as these, academic theses and scientific research papers are usually produced using this technology. 
                        <br><br>
                        Document creation is command-based and might seem strange at first, but after getting over the initial learning curve, you will want all your imortant papers to be produced using LaTeX.
                        As shown below with my undergraduate thesis, it will even make one's simple title page look aesthetically pleasing (at least more so!). 
                        
                             <br> <br>                  
                        <div class="center" style="background-color: #111;">
                            <a href="../../img/blog/thesis-b.png" target="_blank" title="Thesis">
                            <img id="thesisImg" src="../../img/blog/thesis-b.png" alt="Thesis" width="215" height="266">
                            </a>
                        </div>
                    <br>
                    The only caveat is that creating a LaTeX-based document requires one to make a script using macros to "program" and compile their document. The code below is a very basic example. Click the button to see the main file used in the compilation of my undergraduate thesis.
                    <br><br>
                    <div id="latexBtn">Toggle LaTeX Code</div>
                        <code id="latexCode"></code> 
                        
                    <h2>LaTeX vs TeX</h2>
                    LaTeX is actually a set of macros (format) built for the TeX system. In a nutshell, TeX is the core typesetting technology which provides a set of primitive commands to format a document with great detail, and specialized algorithms to compute the optimal flow of text in that document. TeX is able to be extended by employing its macro language to bundle lists of commands, which has resulted in various different formats, including:
                    <ul id="latexFormats">
                        <li><a href="http://www.ctan.org/tex-archive/macros/plain" target="_blank" title="Plain TeX">Plain TeX</a></li>
                        <li><a href="http://www.latex-project.org/" target="_blank" title="LaTeX">LaTeX</a></li>
                        <li><a href="http://www.ctan.org/tex-archive/macros/psizzl" target="_blank" title="PSIZZL">PSIZZL</a></li>
                         <li><a href="http://www.ctan.org/tex-archive/macros/musictex" target="_blank" title="MusicTeX">MusicTeX</a></li>
                    <li><a href="http://www.ctan.org/tex-archive/macros/startex" target="_blank" title="StartTeX">StarTeX</a></li>
                       
                        <li><a href="www.contextgarden.net/" target="_blank" title="ConTeXt">ConTeXt</a></li>
                    </ul>
                    For other formats or related information,  check the <a href="http://www.ctan.org/" target="_blank" title="CTAN">Comprehensive TEX Archive Network</a> (CTAN) and the <a href="http://tug.org/" target="_blank" title="TUG">TeX Users Group</a>.
                    <br><br>
    <h2>Installing LaTeX</h2>                
                    The easiest way to install LaTeX is to install a TeX distribution which contains a large collections of TeX related software. In windows, there is <a href="http://miktex.org/" target="_blank" title="MikTex">MiKTeX</a> and <a href="https://www.tug.org/protext/" target="_blank" title="proTeXt">proTeXt</a>, for Mac OS, there is <a href="https://tug.org/mactex/" target="_blank" title="MacTeX">MacTeX</a> and for Unix/Linux, one can check out <a href="https://www.tug.org/texlive/" target="_blank" title="TeX Live">TeX Live</a>.
                                    
                </div>
            </div>
            
            
            
        </div>
        <?php include( '../linkBar.php'); ?>
        <?php include( '../../includes/footer.php'); ?>
    </div>
    
        <script type="text/javascript" src="codeScript.js"></script>

</body>

</html>
<?php include( '../../includes/compress.php'); ?>