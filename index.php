<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Õpetaja PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">

</head>
<body>
<?php
//päis
include ('header.php');
?>
<?php
//navigeerimismenüü
include ('nav.php');
?>
<div class ="flex-container">
    <div>
        <?php
        if(isset($_GET["link"])){
            include ('content/'.$_GET["link"]);
        } else {
            include ('content/Avaleht.php');
        }
        ?>
    </div>
    <div>
        <img src="image/pilt.png" alt="pilt vabal valikul">
    </div>
</div>
<?php
include ('footer.php');
?>
<script src ="js/musicJs.js"></script>
</body>
</html>