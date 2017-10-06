<?php

 if (file_exists(dirname(__DIR__) . '/config/config.php')) {
     $config = dirname(__DIR__) . '/config/config.php';
 } else {
     $config = dirname(__DIR__) . '/config/config_default.php';
 }
