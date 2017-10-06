<?php
namespace peeto\tribute;


require 'loadenvironment.php';
require $autoLoader;
require 'getroom.php';
 
if (isset($_GET['xml'])) {
    include 'web/xml.php';
} elseif ($room!='') {
    include 'web/chat.php';
} else {
    $loc = isset($_GET['l']) ? $_GET['l'] : '';
    switch ($loc) {
        case 'map':
            include 'web/map.php';
            break;
        default:
            include 'web/home.php';
            break;
    }
}