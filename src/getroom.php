<?php
namespace peeto\tribute;

$room = '';
 $roomname = '';
 if (isset($_GET['room'])) {
     switch ($_GET['room']) {
        case 'foyer':
            $room = $_GET['room'];
            $roomname = 'Foyer';
            break;
        case 'bedroom':
            $room = $_GET['room'];
            $roomname = 'Bedroom';
            break;
        case 'guestroom':
            $room = $_GET['room'];
            $roomname = 'Guest Room';
            break;
        case 'closet':
            $room = $_GET['room'];
            $roomname = 'Closet';
            break;
        case 'toyroom':
            $room = $_GET['room'];
            $roomname = 'Toy Room';
            break;
        case 'theater':
            $room = $_GET['room'];
            $roomname = 'Theater';
            break;
        case 'toilet':
            $room = $_GET['room'];
            $roomname = 'Toilet';
            break;
        case 'bathroom':
            $room = $_GET['room'];
            $roomname = 'Bathroom';
            break;
        case 'dungeon':
            $room = $_GET['room'];
            $roomname = 'Dungeon';
            break;
        case 'pantry':
            $room = $_GET['room'];
            $roomname = 'Pantry';
            break;
        case 'basement':
            $room = $_GET['room'];
            $roomname = 'Basement';
            break;
        case 'kitchen':
            $room = $_GET['room'];
            $roomname = 'Kitchen';
            break;
        case 'backyard':
            $room = $_GET['room'];
            $roomname = 'Back Yard';
            break;
        case 'shed':
            $room = $_GET['room'];
            $roomname = 'Shed';
            break;
    }
 }
