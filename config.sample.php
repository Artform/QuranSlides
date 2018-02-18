<?php
// Database abstraction library
require("lib.idiorm.php");

// Connection settings
ORM::configure('mysql:host=localhost;dbname=DATABASE');
ORM::configure('username', 'USERNAME');
ORM::configure('password', 'PASSWORD');

// Default to first ayah
$id = $_GET['id'] ? $_GET['id'] : 1;
