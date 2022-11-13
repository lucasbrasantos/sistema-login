<?php

require_once './src/header.php';

?>

<!-- html -->

    <div class="loginFrm">
        <form action="assets/login-inc.php" name="login" id="login">

            <h1 class="formTitle">Login</h1>
            

            <div>
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" placeholder="insira seu nome" required>
            </div>
            <div class="passwordContainer">
                <label for="pwd">Senha</label>
                <input type="password" class="pwdInputs" name="pwd" id="pwd" placeholder="insira sua senha" required>
                <ion-icon name="eye-off-outline" class="eye pwd-eye"></ion-icon>
            </div>
            <a href="forgotpwd.php">Esqueceu sua senha?</a>
            

            <button class="submit" name="submit" type="submit">Logar</button>
            
            
            <!-- <div class="intersection">
                <hr>
                <p>ou</p>
                <hr>
            </div> -->

            <p class="registerText">não possui uma conta? <a href="register.php">cadastre-se</a></p>
        </form>
    </div>


<!--  -->

<?php

require_once './src/footer.php';

?>