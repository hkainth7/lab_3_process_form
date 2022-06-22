<?php

    session_start();

    function iterateProgrammingArray($arr) {
        echo "<ul>";
        foreach ($arr as $item){
            echo "<li>$item</li>";
        };
        echo "</ul>";
    };

    // create constants
    const MIN_USERNAME_LEN = 2;
    const PASSWORD = "bcit";
    const student_number_regex = "/^[A]{1}[0]{1}[0-9]{7}$/";
    
    
    // declare variables 

    $username = "";
    $password = "";
    $student_number = "";
    $programming_lang_array = [''];
    $gender = false;
    $prefix = "";


    // normalize data 

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $student_number = trim($_POST["student_number"]);
    $programming_lang_array = $_POST["programming_languages"];
    $gender = $_POST["gender"];
    


    // check data exists

    if (!isset($username) || !isset($password) || !isset($student_number)){
        die("The form field(s) username, password, or student number do not exist");
    };

    // check conditions 

    if (strlen($username) < MIN_USERNAME_LEN) {
    
        $_SESSION['error'] = "The username entered is too short. Must be 2 characters or longer";
        die(header("location:index.php"));
    };

    if ($password != PASSWORD) {
        $_SESSION['error'] = "The password is incorrect";
        die(header("location:index.php"));
    };

    if (preg_match(student_number_regex, $student_number) != 1){
        $_SESSION['error'] = "The student number does not match the format: A0nnnnnnn";
        die(header("location:index.php"));
        
    };

    if ($gender == false){
        $_SESSION['error'] = "A gender must be selected";
        die(header("location:index.php"));
        
    };

    if ($gender == "male"){
        global $prefix;
        $prefix = "Mr.";
    } else {
        
        $prefix = "Ms.";
    };

    echo "<h1>Welcome, $prefix $username!</h1>";
   

    if(isset($programming_lang_array) == false){
        echo "<p>You are studying 0 computer languages</p>";
    } else if(count($programming_lang_array) <= 1){
        $length = count($programming_lang_array);
        echo "<p>You are studying $length computer language";
        iterateProgrammingArray($programming_lang_array);
    } else if(count($programming_lang_array) >= 2 && count($programming_lang_array) < 5){
        $length = count($programming_lang_array);
        echo "<p>You are studying $length computer languages! You are multilingual";
        iterateProgrammingArray($programming_lang_array);
    } else if(count($programming_lang_array) >= 5){
        $length = count($programming_lang_array);
        echo "<p>You are studying $length computer languages! Very impressive!";
        iterateProgrammingArray($programming_lang_array);
    }