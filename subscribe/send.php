<?php
require 'database.php';
require 'Newsletter.class.php';
if (!empty($_POST)) {
    $email = $_POST['signup-email'];
    Newsletter::register($email);
}