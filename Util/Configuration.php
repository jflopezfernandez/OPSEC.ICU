<?php

/**
 * Database Configuration Constants
 */
define('DATABASE_USERNAME', filter_input(INPUT_SERVER, 'DATABASE_USERNAME', FILTER_SANITIZE_STRING));
define('DATABASE_PASSWORD', filter_input(INPUT_SERVER, 'DATABASE_PASSWORD', FILTER_SANITIZE_STRING));
