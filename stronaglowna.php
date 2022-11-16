<html>
    <head>
        
    </head>
    <body>
        <?php
            if(empty($_COOKIE["id"]))
                header('Location: '.'index.php');  
        $con = new mysqli("localhost", "root", "", "zspshop");
        $sql = "SELECT o.ID, o.name, o.category, o.price FROM `offers` AS o JOIN user as u ON o.User_ID=u.ID WHERE u.ID = ".$_COOKIE["id"].";";
        
            $zap = $con->query($sql);
            $wyp = $zap->fetch_all(MYSQLI_ASSOC);
            echo "Twoje oferty:". "<br>";
        
            for ($i = 0; $i < count($wyp); $i++) {
                echo $wyp[$i]["name"]."<a href='szczegoly.php?offer_id=".$wyp[$i]['ID']."'>Szczegóły oferty</a> <br>";
            }
        ?>
        <a href="DodajOferte.php">Dodaj kolejną ofertę</a><br><br>
        <a href="Oferty.php">Poznaj inne oferty</a><br><br>
        <a href="Zakupy.php">Historia</a>
    </body>
</html>