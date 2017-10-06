<?php
/**
 * Default environment configuration
 * 
 * Customise by copying to environment.php
 * Allows adaptation to production environments without Composer updates
 * destroying everything
 */

// Set path to Composer autoloader
$autoLoader = dirname(__DIR__) . '/vendor/autoload.php';

// Set path to database directory
$databaseLocation = __DIR__ . '/database/';

// Set path to UI directory
$uiLocation = dirname(__DIR__) . '/vendor/peeto/dark-chat/src/';
