var codeFlag = true;


//window.onload = function() {
var codeView = document.getElementById("latexCode");
    codeView.style.fontSize = "12px";
    codeView.innerHTML = exampleCode;
    
    document.getElementById("latexBtn").onclick = function(e) {
        
        if (!codeFlag) {
            codeView.innerHTML = exampleCode;
             //codeView.style.fontSize = "inherit";
        } else {
            codeView.innerHTML = thesisCode;
             //codeView.style.fontSize = "12px";
        }
        
        codeFlag = !codeFlag;
        
    };
//}