<?php
include_once "felh.php";

if (isset($_POST["login"])) {
    if (isset($_POST["fnev"]) && isset($_POST["psw"])) {
        $belep = false;
        foreach ($_SESSION["regisztraltak"] as $rfh) {
            if ($rfh -> getUsername() == $_POST["fnev"] && $rfh -> getPassword() == $_POST["psw"]) {
                $belep = true;
                $_SESSION["user"]=$rfh;
                break;
            }
        }
        if (!$belep) {
            die("<strong>HIBA:</strong> Helytelen valamelyik adatod! <a href='bejelentkezes.php'>Vissza a bejelentkezéshez!</a>");
        }
    }else {
        die("<strong>HIBA:</strong> Nem töltöttél ki minden mezőt! <a href='bejelentkezes.php'>Vissza a bejelentkezéshez!</a>");
    }
}
if (isset($_POST["exit"])) {
    session_unset();
    session_destroy();

}


?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Az első PHP programom</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/idopontfoglalas.css"/>
   </head>
<body>
<main>
    <?php include "header.php"; ?>

    <nav>
        <ul>
            <li><a href="index.php">Kezdőlap</a></li>
            <li><a href="araink.php">Áraink</a></li>
            <li><a href="szalon.php">Szalon</a></li>
            <li><a href="klubkartya.php">Klubkártya</a></li>
            <li ><a href="idopont.php">Időpontfoglalás</a></li>
            <li ><a href="bejelentkezes.php" class="current">Profil</a></li>
        </ul>
    </nav>

    <?php
    if (!isset($_SESSION["user"])) {
        echo '
                <form action="bejelentkezes.php" method="post">
                    <div id="bejelentkezes">
                        <fieldset>
                            <legend><em>Jelentkezz be!</em></legend>
                            <div class="inputbox">
                                <label>
                                    <input required type="text" name="fnev" placeholder="Felhasználónév">
                                </label>
                            </div>
        
                            <div class="inputbox">
                                <label>
                                    <input type="password" name="psw" placeholder="Jelszó">
                                </label>
                            </div>
                        </fieldset>
                        <div id="two" class="inputbox" >
                                <input type="submit" value="Bejelentkezés!" name="login">
                        </div>
                    </div>
                </form>
        
            <div id="regiszt"><h4><a href="regisztracio.php">Regisztrálok</a></h4></div>
        ';
    }else{
        echo '
         <fieldset>
         <legend>Személyes adatok</legend>
           <div class="inputbox" >
            <p>Név: '.$_SESSION["user"]->getName().'</p>
            <p>Felhasználónév: '.$_SESSION["user"]->getUsername().'</p>
            <p>Nem: '.$_SESSION["user"]->getSex().'</p>
            <p>Kor: '.$_SESSION["user"]->getAge().'</p>
            <p>Email: '.$_SESSION["user"]->getEmail().'</p>
            </div>
         </fieldset>
            <form action="bejelentkezes.php" method="post">
            <div class="inputbox">
            <input type="submit" value="Kijelentkés" name="exit"/>
            <br/>
            </div>
            </form> 
        ';
    }

    ?>


    <div class="footer-dark">
        <?php include "footer.php"; ?>
    </div>
</main>
</body>
</html>
