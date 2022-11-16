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

                $row = $stmt->fetch();
                $userid = $row['userid'];
                $name = $row['nome'];
                $lastname = $row['sobrenome'];
                $email = $row['email'];
                $md5pwd = $row['senha'];
                

                if (md5($pwd) == $md5pwd) {
                    
                    session_start();

                    $_SESSION["loggedin"] = true;
                    $_SESSION["sessionid"] = $userid;
                    $_SESSION["name"] = strtoupper($name);
                    $_SESSION["lastname"] = strtoupper($lastname);
                    header("Location: ../../public/index.php");
                    // exit();

                }else{
                    
                    header("Location: ./login.php?error=wrongpassword");
                }
            
            }else{
                header("Location: ./login.php?error=wrongusername");
            }


        }
        

    }
}



?>