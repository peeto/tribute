<?php
namespace peeto\tribute;

use peeto\DarkChat;

DarkChat\Chat::load([
    'config' => dirname(__DIR__) . '/config/' . $room . '.php',
    'route' => '?room=' . $room,
    'xml_message_route' => '?xml&room=' . $room,
    'xml_send_message_route' => '?xml&room=' . $room
]);