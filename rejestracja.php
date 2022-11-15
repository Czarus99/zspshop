<html>
    <head>
        <title>Rejestracja</title>
        <link rel="stylesheet" href="styl.css">
    </head>
    
    
    <body>
        <?php
        $con = new mysqli("localhost", "root", "", "zspshop");
        if(isset($_POST["email"]) && isset($_POST["login"]) && isset($_POST["haslo"]) && isset($_POST["nazwa"])){
            $sql = "INSERT INTO `user`(`ID`, `UserEmail`, `UserLogin`, `UserPass`, `Username`, `ItemsSelling`, `Admin`, `Recomendations`, `Reports`, `Verification`) VALUES ('NULL','".$_POST["email"]."','".$_POST["login"]."','".$_POST["haslo"]."','".$_POST["nazwa"]."','','0','','','')";
            $con->query($sql);
                
            header('Location: '.'index.php');    
        }

        ?>
        <form method="post">
            <p>Podaj email:</p>
            <input name="email">
            <p>Podaj login:</p>
            <input name="login">
            <p>Podaj hasło:</p>
            <input name="haslo" type="password">
            <p>Podaj nazwe:</p>
            <input name="nazwa"><br><br>
            <input type="submit" value="Zarejestruj Esse">
        </form>    
    </body>
    
    
    
</html>