<?php
//Pour le css
$dir_css = '../css';
$list_css = (scandir($dir_css));

//Pour le js
$dir_js = '../js';
$list_js = (scandir($dir_js));


function load_css($list_css){
    foreach($list_css as $value){
    if($value != "." && $value != ".." && strpos($value,".css")) {
          echo $value;echo'<br>';// Ajouter <link>
    }
    }
}

function load_js($list_js){
    foreach($list_js as $value){
    if($value != "." && $value != ".." && strpos($value,".js")) {
          echo $value;echo'<br>'; // Ajouter <script>
    }
    }
}



function load_bootstrap(){
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';
}



load_css($list_css);
load_js($list_js);
load_bootstrap();


?>
