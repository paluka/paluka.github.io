<?php
$exCode = "
\documentclass{<span class=\"codeV\">article</span>} 
<br>
\\title{<span class=\"codeV\">My Document</span>}
<br>
\author{<span class=\"codeV\">Erik Paluka</span>}
<br>
\date{<span class=\"codeV\">January 2015</span>}
<br><br>
\begin{<span class=\"codeV\">document</span>}
<br>
<span class=\"CodeTab\">\maketitle</span>
<br>
<span class=\"CodeTab\"  style=\"color:#095;\">The content of my document.</span>
<br>
\\end{<span class=\"codeV\">document</span>}";

$thesisCode = "
  \input{<span class=\"codeV\">preamble</span>}<br>
<br>                       
                            \begin{<span class=\"codeV\">document</span>}<br>
<br>
<span class=\"latexComment\">% title page</span><br>
\\thesisTitle<br>
  {<span class=\"codeV\">Erik Paluka</span>}<br>
  {<span class=\"codeV\">Enhancing Tandem Language Learning \\\Using an Interactive Tabletop</span>}<br>
  {<span class=\"codeV\">Honours Bachelor of Science</span>}<br>
  {<span class=\"codeV\">Computer Science</span>}<br>
  {<span class=\"codeV\">University of Ontario Institute of Technology</span>}<br>
  {<span class=\"codeV\">2012</span>}<br>
<br>

                            \include{<span class=\"codeV\">acknowledgements</span>}<br>
                            \include{<span class=\"codeV\">abstract</span>}<br>
<br>
\singlespacing<br>
                            \begin{<span class=\"codeV\">spacing</span>}{<span class=\"codeV\">0.95</span>}<br>
\\tableofcontents<br>
                            \\end{<span class=\"codeV\">spacing</span>}<br>
<br>
\listoffigures<br>
\printglossary[<span class=\"codeV\">style=list</span>]<br>
\clearpage<br>
<br>
\doublespacing<br>
\setlength{<span class=\"codeV\">\parskip</span>}{<span class=\"codeV\">\baselineskip</span>}<br>
                            \pagenumbering{<span class=\"codeV\">arabic</span>}<br>
<br>
<span class=\"latexComment\">% importing main document content - chapters</span><br>
                            \include{<span class=\"codeV\">introduction</span>}<br>
                            \include{<span class=\"codeV\">background</span>}<br>
                            \include{<span class=\"codeV\">study</span>}<br>
                            \include{<span class=\"codeV\">design</span>}<br>
                            \include{<span class=\"codeV\">implementation</span>}<br>
                            \include{<span class=\"codeV\">futureWork</span>}<br>
                            \include{<span class=\"codeV\">conclusion</span>}<br>
<br>
<span class=\"latexComment\">% bibliography</span><br>
                            \begin{<span class=\"codeV\">spacing</span>}{<span class=\"codeV\">0.95</span>}<br>
                            \bibliographystyle{<span class=\"codeV\">acm</span>}<br>
                            \bibliography{<span class=\"codeV\">references</span>}<br>
                            \\end{<span class=\"codeV\">spacing</span>}<br>
<br>
                            \include{<span class=\"codeV\">appendix</span>}<br>
<br>
                            \\end{<span class=\"codeV\">document</span>}";
?>

<script>
var exampleCode = <?php echo json_encode($exCode) ?>;
var thesisCode = <?php echo json_encode($thesisCode) ?>;
</script>

