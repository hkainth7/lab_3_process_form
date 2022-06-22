<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Process</title>
</head>
<body>
    <div>
        <form action="./form_process.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <label for="student_number">Student Number</label>
            <input type="text" name="student_number" id="student_number" placeholder="A0nnnnnnn">

            <label for="gender">Gender</label>
        
            <input type="radio" name="gender" id="gender_male" value="male">
            <label for="male">Male</label>

            <input type="radio" name="gender" id="gender_female" value="female">
            <label for="female">Female</label>

            <input type="radio" name="gender" id="gender_not_listed" value="not_listed">
            <label for="not_listed">Not Listed</label>

            <label for="programming_languages">Studying any computer languages?</label>
            
            <input type="checkbox" name="programming_languages[]" id="" value="javascript">
            <label for="javascript">JavaScript</label>

            <input type="checkbox" name="programming_languages[]" id="" value="c++">
            <label for="c++">C++</label>

            <input type="checkbox" name="programming_languages[]" id="" value="java">
            <label for="java">Java</label>

            <input type="checkbox" name="programming_languages[]" id="" value="python">
            <label for="python">Python</label>

            <input type="checkbox" name="programming_languages[]" id="" value="c#">
            <label for="c#">C#</label>

            <input type="checkbox" name="programming_languages[]" id="" value="ruby">
            <label for="ruby">Ruby</label>

            <input type="submit" value="Submit">
        </form>
        
    </div>
    <?php 
        session_start();
        

        if(isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        
    ?>
</body>
</html>