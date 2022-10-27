<?php

require_once './assets/header.php';

?>

<!-- html -->

    <div class="registerFrm">
        <form action="assets/register-inc.php" name="register" id="register">

            <h1 class="formTitle">Cadastrar</h1>
            

            <div class="grid">

                <div class="grid1">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Nome">
                </div>
                
                <div class="grid2">
                    <label for="lastName">Sobrenome</label>
                    <input type="text" name="lastName" id="lastName" placeholder="Sobrenome">
                </div>
                
                <div class="grid3">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="example@example.com">
                </div>
                
                <div class="grid4 passwordContainer">
                    <label for="pwd">Senha</label>
                    <input type="password" class="pwdInputs" name="pwd" id="pwd" placeholder="Senha">
                    <ion-icon name="eye-off-outline" class="eye pwd-eye"></ion-icon>
                </div>

                <div class="grid5 passwordContainer">
                    <label for="pwd2">Confirmar senha</label>
                    <input type="password" class="pwdInputs" name="pwd2" id="pwd2" placeholder="Confirmar senha">
                    <ion-icon name="eye-off-outline" class="eye pwd-eye"><title>eae</title></ion-icon>
                </div>

            </div>

            

            <button class="submit" name="submit" type="submit">Cadastrar</button>
            
            
            <!-- <div class="intersection">
                <hr>
                <p>ou</p>
                <hr>
            </div> -->

        </form>
    </div>

<!--  -->

<?php

require_once './assets/footer.php';

?>