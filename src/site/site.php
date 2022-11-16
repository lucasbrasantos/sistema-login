<?php

require '../views/header.php';
require '../views/nav2.php';

session_start();
?>

<!-- html -->


<body>
    
<?php

echo "<h2>Bem vindo: " . $_SESSION['name'] . ' ' .$_SESSION['lastname'];
echo "</h2>"

?>

</body>


<!--  -->

<?php

require '../views/footer.php';

?>