<?php
    function render_layout($contentFile, $variables = array()){
        
        $contentFilePath = $contentFile ;
        
        if (count($variables) > 0) {
            foreach ($variables as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }
        
        require_once "templates/header.php";
        
        echo "<div id=\"container\">\n";
        
        // require_once "templates/sidebar.php" ;
        
        echo "\t<div id=\"content\">\n";
        
        if (file_exists($contentFilePath)) {
            require_once $contentFilePath ;
        } else {
            require_once "../content/error.php";
        }
        
        echo "\t</div>\n"; // for content
        
        echo "</div>\n"; // for container
        
        require_once "templates/footer.php" ;
    }
?>