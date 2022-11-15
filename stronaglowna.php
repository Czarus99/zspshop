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
            for ($i = 0; $i < count($wyp); $i++) {
                echo $wyp[$i]["name"] . "<br>";
            }
        ?>
    </body>
</html>