<?php


$first_name = $_POST['first_name'] ?? "";
$last_name = $_POST['last_name'] ?? "";
$username = $_POST['username'] ?? "";
$verify_username = $_POST['verify_username'] ?? "";
$password = $_POST['password'] ?? "";
$verify_password = $_POST['verify_password'] ?? "";

$parms = compact('first_name', 'last_name', 'username', 'verify_username', 'password', 'verify_password');
$errors = [];

foreach ($parms as $parm => $value) {
    if (strlen($value) < 1) {
        $errors[$parm] = "$parm is empty";
    }
}

if (strlen($first_name) < 3) {
    $errors['first_name'] = "first_name must be at least three characters";
}

if (strlen($last_name) < 3) {
    $errors['last_name'] = "last_name must be at least three characters";
}

if ($username != $verify_username) {
    $errors['user_name'] = "username does not equal verify_username";
}

if ($password != $verify_password) {
    $errors['password'] = "password does not equal verify_password";
}


if (count($errors) > 0) {
    $_SESSION["errors"] = $errors;
//    header("HTTP/1.1 303 See other");
    header("Location: /register.php");
} else {
    echo "<p>You posted $first_name $last_name [$username]</p>";
}
