<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Process</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">    
</head>
<body>
    <h1>Comp Languages Survey</h1>
    <div id="wrapper">
        <form action="./form_process.php" method="post">
            <fieldset class="user-info">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
    
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
    
                <label for="student_number">Student Number</label>
                <input type="text" name="student_number" id="student_number" placeholder="A0nnnnnnn">

                <div class="gender-info">
                    <h3>Gender</h3>
                
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="gender_male" value="male">
        
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="gender_female" value="female">
        
                    <label for="not_listed">Not Listed</label>
                    <input type="radio" name="gender" id="gender_not_listed" value="not_listed">
                </div>
            </fieldset>
            <fieldset class="lang_info">
                <div class="programming-langs">
                    <h3>Studying any computer languages?</h3>
                    <label for="javascript">JavaScript</label>
                    <input type="checkbox" name="programming_languages[]" id="" value="javascript">
        
                    <label for="c++">C++</label>
                    <input type="checkbox" name="programming_languages[]" id="" value="c++">
        
                    <label for="java">Java</label>
                    <input type="checkbox" name="programming_languages[]" id="" value="java">
        
                    <label for="python">Python</label>
                    <input type="checkbox" name="programming_languages[]" id="" value="python">
        
                    <label for="c#">C#</label>
                    <input type="checkbox" name="programming_languages[]" id="" value="c#">
        
                    <label for="ruby">Ruby</label>
                    <input type="checkbox" name="programming_languages[]" id="" value="ruby">
                </div>
            </fieldset>

            <input type="submit" value="Submit">
        </form>

        <?php 
            session_start();

            if(isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                echo "<p class='error-message'>$error</p>";
                unset($_SESSION['error']);
            }            
        ?>
    </div>
    
</body>
</html>