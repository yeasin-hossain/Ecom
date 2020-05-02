<?php
SESSION_START();

$db = new mysqli('localhost', 'root', '','bazar');

    if($db->connect_error){
        die('Database Issue!');
    }
