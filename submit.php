<?php
    date_default_timezone_set("Asia/Calcutta");
    if(!empty($_POST['data'])){
        $data = $_POST['data'];
        $fname = date("M-d-Y h-i-s A") . ".txt";//generates random name
        
        $file = fopen("contact/" .$fname, 'w');//creates new file
        echo 'Done';
        fwrite($file, $data);
        fclose($file);
    }
?>