<?php

define('DB_HOST', 'db');
define('DB_NAME', 'my_db');
define('DB_USER', 'root');
define('DB_PASSWORD', 'secret');

$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, 3306) or die('Failed to connect to the database, died with error:');

echo "Hello world";
