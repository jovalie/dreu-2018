<?php
    include_once "resources/template.php";
    
   function example_function() {
       echo "Hello World!";
   }
    
    $variables = array(
        'example_function' => $example_function
    );
  
    render_layout("content/index.php", $variables)  
?>

