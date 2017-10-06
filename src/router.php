<?php
namespace peeto\tribute;
// Autoload files using Composer autoload
require_once dirname(__DIR__) . '/vendor/autoload.php';


include 'getroom.php';
 
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