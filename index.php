<html>
    <head>
        <meta charset="utf-8">
        <title>fajnezakupki.pl</title>
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <?php
        $con = new mysqli("localhost", "root", "", "zspshop");
         if(!empty($_COOKIE["id"]))
                header('Location: '.'stronaglowna.php');   
        

        if(isset($_POST["login"]) && !empty($_POST["login"]) && isset($_POST["password"]) && !empty($_POST["password"])){  
            $sql = "SELECT ID FROM `user` WHERE UserPass='".$_POST['password']."' and UserLogin='".$_POST['login']."';";
            $wys = $con->query($sql);
            $wynik = $wys->fetch_array();
            if(!empty($wynik["ID"])){
                setcookie("id", $wynik["ID"]);
                 header('Location: '.'stronaglowna.php');   
            }
            
        }
        
        if(isset($_COOKIE["logged"]) && !empty($_COOKIE["logged"])){
            echo "<div class='miner'>
                    <a href='essabaza.php''><img src='Noeloelo.png' style='width:100px;'></a>
                </div>
                <table class='center'>
                    <tr>
                        <th><a href='TwojeOferty.php'>Twoje oferty</a></th>
                        <th><a href='TwojesZakupy.php'>Twoje zakupy</a></th>
                        <th><a href='DodajOferte.php'>Dodaj oferte</a></th>
                        <th><a href='Lolessa.php'>Opinie</a></th>
                        <th><a href='Lolessa.php'>Świeże Wiadomości</a></th>
                        <th><a href='Lolessa.php'>Ale mi sie nie chce</a></th>
                    </tr>
                </table>";
            
        }
        else{
            echo "<h1>LOGOWANIE</h1>
                <br>
                <br>
                <form method='post'>
                    <h3>Podaj login:</h3>
                    <input type='text' name='login'><br>
                    <h3>Podaj haslo:</h3>
                    <input type='password'' name='password''><br>
                    <br><input type='submit' value='Zaloguj'>
                </form>";
        }
        
        $con->close();
        ?>        
    </body>
</html>
