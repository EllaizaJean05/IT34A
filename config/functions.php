<?php

fuction redirect($path){
    header("Location:" . BAASE_URL . $path);
    exit;
}

?>
