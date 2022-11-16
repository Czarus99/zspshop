<html>

<head>

</head>

<body>
    <?php
    if (empty($_COOKIE["id"]))
        header('Location: ' . 'index.php');
    $con = new mysqli("localhost", "root", "", "zspshop");
    print_r($_GET);
    if(isset($_POST["nazwa"]) && isset($_POST["kategoria"])&& isset($_POST["cena"])){
        $con->query('UPDATE offers SET `name`="'.$_POST["nazwa"].'", `category`="'.$_POST["kategoria"].'", `price`="'.$_POST["cena"].'" WHERE id = '.$_GET["offer_id"]);
    }

    $p = "SELECT name, category, price FROM `offers` WHERE id=$_GET[offer_id]";
    $zap = $con->query($p);
    $ez = $zap->fetch_array();

    ?>
    <form method="post">
        <input type="text" name="nazwa" value="<?php echo $ez['name']; ?>">
        <input type="text" name="kategoria" value="<?php echo $ez['category']; ?>">
        <input type="text" name="cena" value="<?php echo $ez['price']; ?>">
    </form>
</body>

</html>