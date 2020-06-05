<?php
require (__DIR__. "/idiorm.php");
ORM::configure(array(
    'connection_string' => 'mysql:host=localhost;dbname=todo',
    'username' => 'root',
    'password' => ''
));
?>