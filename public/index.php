<?php

require_once '../src/views/header.php';

?>

<!-- html -->


<?php



if (isset($_SESSION['userid'])) {

    session_start();
    ''
    require_once '../src/site/site.php';


}else{
    Header('Location: ../src/login/login.php');
}



?>


<!--  -->

<?php

require_once '../src/views/footer.php';

?>