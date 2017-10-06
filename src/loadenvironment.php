<?php

/**
 * Load environment settings
 */

if (file_exists('environment.php')) {
    require 'environment.php';
} else {
    require 'environment_default.php';
}
