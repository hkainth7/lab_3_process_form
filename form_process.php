<?php

    // create constants
    const MIN_USERNAME_LEN = 2;
    const PASSWORD = "bcit";
    const student_number_regex = "/^[A]{1}[0]{1}[0-9]{7}$/";
    
    
    // declare variables 

    $username = "";
    $password = "";
    $student_number = "";
    $programming_lang_array = [];
    $gender = false;


    // normalize data 

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $student_number = trim($_POST["student_number"]);
    $programming_lang_array = $_POST["programming_languages"];
    $gender = $_POST["gender"];


    if (!isset($username) || !isset($password) || !isset($student_number)){
        die("The form field(s) username, password, or student number do not exist");
    };

    if (strlen($username) < MIN_USERNAME_LEN) {
        die("The username entered is too short. Must be 2 characters or longer");
    };

    if ($password != PASSWORD) {
        die("The password entered is incorrect");
    };

    if (preg_match(student_number_regex, $student_number) != 1){
        die("The student number does not match the format: A0nnnnnnn");
    }