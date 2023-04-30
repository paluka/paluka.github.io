<?php
    $buffer = compress_page(ob_get_clean());
    // function to compress page.
    function compress_page($buffer) {
        // remove comments, tabs, spaces, newlines, etc.
        $search = array(
            "/ +/" => " ",
            "/<!--(.*?)-->|[\t\r\n]|<!--|-->|\/\/ <!--|\/\/ -->|<!\[CDATA\[|\/\/ \]\]>|\]\]>|\/\/\]\]>|\/\/<!\[CDATA\[/" => ""
        );
        $buffer = preg_replace(array_keys($search), array_values($search), $buffer);
        return $buffer;
    }
     
    // turn off output buffering and output the page.
    echo $buffer
?>