<html>

<head>

</head>

<body>
    <?php
    if (empty($_COOKIE["id"]))
        header('Location: ' . 'index.php');
    $con = new mysqli("localhost", "root", "", "zspshop");
    print_r($_GET);
    if(isset($_POST["kupuje"]) && $_POST["kupuje"]==1){
      $sql = "INSERT INTO `userhistory`(`ID`, `UserPurchases`, `UserSells`, `Offers_id`, `User_ID`) VALUES ('NULL','NULL','NULL','$_GET[offer_id]','".$_COOKIE['id']."')";
      $con->query($sql);
    }

    $p = "SELECT name, category, price FROM `offers` WHERE id=$_GET[offer_id]";
    $zap = $con->query($p);
    $ez = $zap->fetch_array();

    ?>
    <form method="post">
        <input type="text" name="nazwa" value="<?php echo $ez['name']; ?>">
        <input type="text" name="kategoria" value="<?php echo $ez['category']; ?>">
        <input type="text" name="cena" value="<?php echo $ez['price']; ?>">
        <input type="submit" value="Czy napewno chcesz to kupić?">
        <input type="hidden" name="kupuje" value="1">
    </form>
</body>

</html>