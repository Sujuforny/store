<!DOCTYPE html>
<html lang="en">
<?php include "includes/head.php" ?>
<?php 
$page = "home.php";

$about_feature = false;
$hero = true;
$feature = true;
if (isset($_GET['p'])){
     $p = $_GET['p'];
     switch ($p) {
        case "home":
            $page = "home.php";
            $hero = true;
            $feature = true;
            break;
        case "shop":
            $page = "shop.php";
            $hero = false;
            $feature = false;
            break;
        case "about":
            $page = "about.php";
            $hero = false;
            $feature = false;
            $about_feature = true;
            break;
        case "blog":
            $page = "blog.php";
            $hero = false;
            $feature = false;
            break;
        case "contact":
            $page = "contact.php";
            $hero = false; 
            $feature = false;
            break; 
        case "cart":
            $page = "cart.php";
            $hero = false; 
            $feature = false;
            break;       

            
     }


}

?>
<body>
    <?php include "includes/header.php"   ?>
    <?php if ($hero) include "includes/hero.php" ?>
    <?php if ($feature) include "includes/feature.php" ?>
    <?php include "$page" ?>
    <?php if ($about_feature) include "includes/feature.php" ?>
    <?php include "includes/new.php" ?>
    <?php include "includes/footer.php" ?>
    <script src="js/javaS.js"></script>

</body>
</html>