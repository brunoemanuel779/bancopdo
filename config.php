
<?php
spl_autoload_register(function($nomeClasse){
    $dirclass="Classes";
    $filename=$dirclass.DIRECTORY_SEPARATOR.$nomeClasse.".php";
    if(file_exists(($filename))){
        require_once($filename);
    }
});

?>



