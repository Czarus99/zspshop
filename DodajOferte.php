<html>

<head>
    <meta charset="utf-8">
    <title>fajnezakupki.pl</title>
    <link rel="stylesheet" href="essabaza.css">
</head>

<body>
    <?php
        $con = new mysqli("localhost", "root", "", "zspshop");
        if (isset($_POST["name"]) && isset($_POST["category"]) && isset($_POST["price"]) && isset($_POST["condition"])) {
            $sql = "INSERT INTO `offers`(`name`, `category`, `price`, `condition`, `description`, `shipment`, `payment`, `User_ID`) VALUES ('" . $_POST["name"] . "','" . $_POST["category"] . "','" . $_POST["price"] . "','" . $_POST["condition"] . "','','0','',$_COOKIE[id])";
            $con->query($sql);
        }
        ?>
        <form method="post">
            <p>Nazwa</p>
            <input name="name">
            <p>Kategoria</p>
            <input name="category">
            <p>Cena</p>
            <input name="price">
            <p>Stan</p>
            <input name="condition"><br><br>
            <input type="submit" value="Dodaj oferte">
        </form>    
</body>

</html>