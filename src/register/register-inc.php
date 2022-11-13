<?php



if (isset($_POST['submit'])) {

    require '../../database/database.php';

    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwd2 = $_POST['pwd2'];


    if (empty($name) || empty($lastName) || empty($email) || empty($pwd) || empty($pwd2)){
        //empty fields
        Header('Location: ./register.php?error=emptyfields');
        exit();
    }else if (preg_match("/([^a-zA-Z0-9-_])/", $name)) {
        Header('Location: ./register.php?error=invalidusername');
        
    }else if (preg_match("/([^a-zA-Z])/", $lastName)) {
        Header('Location: ./register.php?error=invalidlastname');
        
    }else if ($pwd !== $pwd2) {
        Header('Location: ./register.php?error=passwordsdonotmatch');
    }else{


               
        



    }
}





?>