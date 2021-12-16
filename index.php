<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['subject'];
    $subject = $_POST['email'];
    $message = $_POST['message'];

    $sendTo = "mymail@fakemail.com";
}