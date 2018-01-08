<?php

    $pasta = 'upload';

    //isset -> verifica se a variavel existe
    //file_exists -> Verifica se um arquivo ou diretório existe
    if(isset($_GET['file']) && file_exists("{$pasta}/".$_GET['file'])){
        $file = $_GET['file'];
        
        
        header("Content-Disposition: attachment; filename=$file");
        readfile("{$pasta}/{$file}");
        exit;
    }
