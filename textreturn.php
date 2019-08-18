<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require('config.php');
if ($_GET['text']) :

    $text=$_GET['text'];
    if (mysql_query("UPDATE `text` SET `text`='$text'")) {
        echo "Updated to $text";
    } else {
        echo "Error,Try again";
    }
                        
                    
        //echo 'Returned Text :'.$_GET['text'];
    endif;
