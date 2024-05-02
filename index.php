<?php
//Require Class
require 'func/Calculate.php';

if (isset($_POST['calculate'])) {
    $name = htmlentities(ucfirst($_POST['name']));
    $year = htmlspecialchars($_POST['year']);

    if (!empty($name) && !empty($year)) {
        $result = Calculate::MyAge($year);
        if ($result === 1) {
            $message = $name . ', you\'re 1 year old';
        } else {
            $message = $name . ', you\'re ' . $result . ' years old';
        }
    } else {
        $error = "Please fill out the form";
    }
}

//Require html view
require 'html.php';