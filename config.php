<?php

/**
 * Configuration for database connection
 *
 */

$host       = "3.94.68.5";
$username   = "dcregg";
$password   = "password";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
