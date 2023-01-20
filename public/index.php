<?php

require '../src/views/header.php';
require '../src/views/nav1.php';

?>

<!-- html -->


<?php

session_start();

if (isset($_SESSION['sessionid'])) {

    // require '../src/site/site.php';
    Header('Location: ../src/site/site.php');

}else{
    // Header('Location: ../src/login/login.php');
}



?>

<h1>nao esta logado</h1>
<!--  -->

<?php

require '../src/views/footer.php';

?>