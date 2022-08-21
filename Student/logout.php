<?php
// session_start();
// unset($_SESSION['loggedin']);
// unset($_SESSION['username']);
// header("Location : index.php");
// exit;
?>

<?php
session_start();
session_destroy();
// unset($_SESSION['loggedin']);
// unset($_SESSION['username']);

 header("Location: index.php");
exit;
?>