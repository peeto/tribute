<?php
namespace peeto\tribute;


use peeto\DarkChat;
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $roomname; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/tribute.css" />
    </head>
    <body>

        <h1 class="centertext"><a href="/">Tribute</a></h1>
        
        <h2><?php echo $roomname; ?></h2>
        
        <p><a href="?l=map">&larr; Select another room</a></p>
        
 <?php

 if (file_exists(dirname(__DIR__) . '/config/config.php')) {
     $config = dirname(__DIR__) . '/config/config.php';
 } else {
     $config = dirname(__DIR__) . '/config/config_default.php';
 }
 
DarkChat\Chat::load([
    'config' => $config,
    'route' => '?room=' . $room,
    'xml_message_route' => '?xml&room=' . $room,
    'xml_send_message_route' => '?xml&room=' . $room
]);

?>
        
    </body>
</html>