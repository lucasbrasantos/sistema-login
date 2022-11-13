<?php

require_once './src/header.php';

?>

<!-- html -->


<?php

if (isset($_SESSION['SessionId'])) {
    
    require_once './src/site.php';

}else{
    Header('Location: login.php');
}



?>


<!--  -->

<?php

require_once './src/footer.php';

?>