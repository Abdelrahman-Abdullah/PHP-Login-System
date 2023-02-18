<?php include "../partial/header.php" ?>
<?php if (isset($_SESSION['name'])) :

 include "../includes/HomePage.php";
else:
header("location: index.php");
endif;
?>
<?php include "../partial/footer.php" ?>

