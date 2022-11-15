<?php

require_once '../views/header.php';
require_once '../views/nav2.php';

?>

<!-- html -->

<?php

if (isset($_COOKIE['error']) == "email em uso") {
    setcookie("error", "", time()-3600);
    echo "<script>window.alert('email já usado, tente novamente')</script>";
}

?>

    <div class="registerFrm">
        <form action="./register-inc.php" method="post" name="register" id="register">

            <h1 class="formTitle">Cadastrar</h1>
            
<!--
            <div class="grid">

                <div class="grid1">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Nome" required>
                </div>
                
                <div class="grid2">
                    <label for="lastName">Sobrenome</label>
                    <input type="text" name="lastName" id="lastName" placeholder="Sobrenome" required>
                </div>
                
                <div class="grid3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="example@example.com" required>
                </div>
                
                <div class="grid4 passwordContainer">
                    <label for="pwd">Senha</label>
                    <input type="password" class="pwdInputs" name="pwd" id="pwd" placeholder="Senha" required>
                    <ion-icon name="eye-off-outline" class="eye pwd-eye"></ion-icon>
                </div>

                <div class="grid5 passwordContainer">
                    <label for="pwd2">Confirmar senha</label>
                    <input type="password" class="pwdInputs" name="pwd2" id="pwd2" placeholder="Confirmar senha" required>
                    <ion-icon name="eye-off-outline" class="eye pwd-eye"><title>eae</title></ion-icon>
                </div>

            </div>
              -->
            <div class="grid">

                <div class="grid1">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Nome" value="aaa" required>
                </div>
                
                <div class="grid2">
                    <label for="lastName">Sobrenome</label>
                    <input type="text" name="lastName" id="lastName" placeholder="Sobrenome" value="aaa" required>
                </div>
                
                <div class="grid3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="example@example.com" value="aaa@gmail.com" required>
                </div>
                
                <div class="grid4 passwordContainer">
                    <label for="pwd">Senha</label>
                    <input type="password" class="pwdInputs" name="pwd" id="pwd" placeholder="Senha" value="aaa" required>
                    <ion-icon name="eye-off-outline" class="eye pwd-eye"></ion-icon>
                </div>

                <div class="grid5 passwordContainer">
                    <label for="pwd2">Confirmar senha</label>
                    <input type="password" class="pwdInputs" name="pwd2" id="pwd2" placeholder="Confirmar senha" value="aaa" required>
                    <ion-icon name="eye-off-outline" class="eye pwd-eye"><title>eae</title></ion-icon>
                </div>

            </div>

            

            <button class="submit" name="submit" type="submit">Cadastrar</button>
            
            
            <!-- <div class="intersection">
                <hr>
                <p>ou</p>
                <hr>
            </div> -->

            <p class="registerText">já possui conta? <a href="login.php">logar</a></p>

        </form>
    </div>

<!--  -->

<?php

require_once '../views/footer.php';

?>