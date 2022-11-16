<html>

<head>

</head>

<body>
    <?php
        if (empty($_COOKIE["id"]))
            header('Location: ' . 'index.php');
        $con = new mysqli("localhost", "root", "", "zspshop");
        $sql = "SELECT o.ID, o.name, o.category, o.price FROM `userhistory` AS uh JOIN offers as o ON uh.Offers_ID=o.ID JOIN user as u ON uh.User_ID=u.ID WHERE u.ID = '".$_COOKIE["id"]."'";

        $zap = $con->query($sql);
        $wyp = $zap->fetch_all(MYSQLI_ASSOC);
        echo "Twój zakup:" . "<br>";

        for ($i = 0; $i < count($wyp); $i++) {
            echo $wyp[$i]["name"] . "<a href='szczegoly2.php?offer_id=" . $wyp[$i]['ID'] . "'>Szczegóły oferty</a> <br>";
        }
        ?>
</body>

</html>