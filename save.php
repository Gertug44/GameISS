<?php 
    $file = file_get_contents('data.json'); 
    unset($file); 
    $data = $_POST['j'];
    file_put_contents('data.json',$data); 
    die("OK");