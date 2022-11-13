<?php



if (isset($_POST['submit'])) {

    require '../../database/connection.php';

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];


    if (empty($email) || empty($pwd)){
        //empty fields
        Header('Location: ./register.php?error=emptyfields');
        exit();
    }else{
                        
        $sql = "select * from user where email = ?";    
        $stmt = $con->prepare($sql);
        if ($stmt->execute([$email])) {
                
            if ($stmt->rowCount() == 1) {

                
            }

        }
        

    }
}



?>