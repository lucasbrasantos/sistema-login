<?php

require_once '../src/views/header.php';

?>

<!-- html -->


<?php

if (isset($_SESSION['SessionId'])) {
    
    require_once './src/site.php';

}else{
    Header('Location: ../src/login/login.php');
}



?>


<!--  -->

<?php

require_once '../src/views/footer.php';

?>