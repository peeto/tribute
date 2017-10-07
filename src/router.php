<?php
namespace peeto\tribute;


require 'loadenvironment.php';
require $autoLoader;
require 'getroom.php';
 
if (isset($_GET['xml'])) {
    include 'web/xml.php';
} elseif ($room!='') {
    include 'web/chat.php';
} elseif (isset($_GET['map'])) {
    include 'web/map.php';
} else {
    include 'web/home.php';
}