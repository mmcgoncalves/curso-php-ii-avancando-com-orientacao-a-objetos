<?php
require  'config/config.php';

// load composer autoload
require 'vendor/autoload.php';

// boot database
require  'config/database.php';

new Database;