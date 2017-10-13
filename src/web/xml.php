<?php
namespace peeto\tribute;

use peeto\DarkChat;

include 'getconfig.php';

DarkChat\Chat::load([
    'config' => $config,
    'route' => '?room=' . $room,
    'xml_message_route' => '?xml&room=' . $room,
    'xml_send_message_route' => '?xml&room=' . $room
]);
