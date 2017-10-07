<?php

/**
 * Load environment settings
 */

if (file_exists(__DIR__ . '/environment.php')) {
    require 'environment.php';
} else {
    require 'environment_default.php';
}
