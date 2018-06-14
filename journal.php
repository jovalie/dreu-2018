<?php
    include_once "resources/template.php";
    
    function print_entries() {
        $path='journal_entries';
        $files=scandir($path);

        foreach ($files as $key => $value) {
            if($value!="." && $value!="..")
            {
                print_r(file_get_contents($path."/".$value));
                echo "<hr>";
            }
        }
    }
    
    $variables = array(
        'print_entires' => $print_entries
    );
  
    render_layout("content/journal.php", $variables)  
?>

