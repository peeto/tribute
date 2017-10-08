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
        <link href="images/home.svg" rel="icon" />
    </head>
    <body>

        <h1 class="centertext"><a href="<?php echo dirname($_SERVER['PHP_SELF']); ?>">Tribute</a></h1>
        
        <h2><?php echo $roomname; ?></h2>
        
        <p><a href="?map">&larr; Select another room</a></p>
        
 <?php

include 'getconfig.php';

DarkChat\Chat::load([
    'config' => $config,
    'route' => '?room=' . $room,
    'xml_message_route' => '?xml&room=' . $room,
    'xml_send_message_route' => '?xml&room=' . $room
]);

?>
        
    </body>
</html>