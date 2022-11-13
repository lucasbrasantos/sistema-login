<?php



if (isset($_POST['submit'])) {

    require '../../database/connection.php';

    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwd2 = $_POST['pwd2'];


    if (empty($name) || empty($lastName) || empty($email) || empty($pwd) || empty($pwd2)){
        //empty fields
        Header('Location: ./register.php?error=emptyfields');
        exit();
    }else if (preg_match("/([^a-zA-Z])/", $name)) {
        Header('Location: ./register.php?error=invalidusername');
        
    }else if (preg_match("/([^a-zA-Z])/", $lastName)) {
        Header('Location: ./register.php?error=invalidlastname');
        
    }else if ($pwd !== $pwd2) {
        Header('Location: ./register.php?error=passwordsdonotmatch');
    }else{


        // $fullName = "$name $lastName";
        $md5 = md5($pwd);
                
        
        $sql = "insert into user (nome, sobrenome, senha, email) values (?, ?, ?, ?)";
        
        $stmt = $con->prepare($sql);
        // $stmt->execute([$name, $lastName, $md5, $email]);
        
        
        include './random-values-register.php';
        $_md5 = md5($_senha[array_rand($_senha, 1)]);
        $stmt->execute([$_nome[array_rand($_nome, 1)], $_unome[array_rand($_unome, 1)], $_md5, $_email[array_rand($_email, 1)]]);
        //random values from array
        

        // header("Location: ./register.php?success");
        header("Location: ../login/login.php");


    }
}





?>