<?php

require_once './assets/header.php';

?>

<!-- html -->


<?php

if (isset($_SESSION['SessionId'])) {
    
    require_once './assets/site.php';

}else{
    Header('Location: login.php');
}



?>


<!--  -->

<?php

require_once './assets/footer.php';

?>