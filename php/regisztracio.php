<?php
include_once "felh.php";
$age = "";
$pass = "";
$pass2 = "";
$username = "";

$felh_foglalt=false;

if (isset($_POST["signup"])) {

    $age = $_POST["age"];
    $pass = $_POST["password"];
    $pass2 = $_POST["password2"];
    $username = $_POST["username"];

    if (!isset($_POST["sex"]) || !isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["age"]) || !isset($_POST["username"]) || !isset($_POST["password"]) || !isset($_POST["password2"])) {
        die("<strong>HIBA:</strong> Nem töltöttél ki minden mezőt! <a href='regisztracio.php'>Vissza a regisztrációhoz!</a>");
    }
    if ($age < 15) {
        die("<strong>HIBA:</strong> Csak 15 éves kortól lehet regisztrálni! <a href='regisztracio.php'>Vissza a regisztrációhoz!</a>");
    }
    if (strlen($username) < 5) {
        die("<strong>HIBA:</strong> A felhasználónév túl rövid! <a href='regisztracio.php'>Vissza a regisztrációhoz!</a>");
    }
    for ($i=0; $i<count($_SESSION["regisztraltak"]);$i++){
        if ($_SESSION["regisztraltak"][$i]->getUsername() == $_POST["username"]) {
            $felh_foglalt = true;
        }
    }
    if (strlen($pass) < 5) {
        die("<strong>HIBA:</strong> A jelszó túl rövid! Legyen legalább 5 karakter!<a href='regisztracio.php'>Vissza a regisztrációhoz!</a>");
    }
    if (!preg_match('/[A-Z]/',$pass) ||  !preg_match('/[a-z]/',$pass) || !preg_match('/[0-9]/',$pass)) {
        die("<strong>HIBA:</strong> A jelszó tartalmazon kisbetűt, nagybetűt és számjegyet egyaránt! <a href='regisztracio.php'>Vissza a regisztrációhoz!</a>");
    }
    if ($pass !== $pass2) {
        die("<strong>HIBA:</strong> A két jelszó nem egyezik! <a href='regisztracio.php'>Vissza a regisztrációhoz!</a>");
    }
    if ($felh_foglalt){
        die("<strong>HIBA:</strong> A felhasználónév már foglalt! <a href='regisztracio.php'>Vissza a regisztrációhoz!</a>");
    }else{
        $ujfelh = new User($_POST["sex"], $_POST["name"], $_POST["email"], $_POST["age"], $_POST["username"], $_POST["password"]);
        array_push($_SESSION["regisztraltak"],$ujfelh);
        $ujfelh->adatok();
        echo "<p>Sikeres regisztráció! Kérlek jelentkezz be! <a href='bejelentkezes.php'>Bejelentkezek!</a></p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Eke Beáta, Hrivnák Renáta" />
    <meta name="description" content="A legjobb szegedi fodrászat" />
    <meta name="keywords" content="fodrászat, fodrász, haj, hajvágás, frizura, hajfestés, dauer, melír, ombre, egyenes, göndör" />

    <title>Regisztrácó</title>
    <link rel="icon" href="../img/logo1.jpg" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/idopontfoglalas.css" />

</head>
<body>
<header>
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
</header>
<section>
    <form action="regisztracio.php" method="post">
        <fieldset>
            <legend><em>Regisztráció</em></legend>
            <div id="nem">
                <label>Férfi:
                    <input type="radio" id="op1" name="sex" value="m"/></label>
                <label>Nő:
                    <input type="radio" id="op2" name="sex" value="f"/></label>
            </div>

            <div class="inputbox">
                <label>
                    <input type="text" name="name" placeholder="Teljes név">
                </label>
            </div>

            <div class="inputbox">
                <label>
                    <input type="email" name="email" placeholder="Email cím">
                </label>
            </div>

            <div class="inputbox">
                <label>
                    <input type="number" name="age" placeholder="Életkor">
                </label>
            </div>
            <div class="inputbox">
                <label>
                    <input type="text" name="username" placeholder="Felhasználónév">
                </label>
            </div>
            <div class="inputbox">
                <label>
                    <input type="password" name="password" placeholder="Jelszó">
                </label>
            </div>
            <div class="inputbox">
                <label>
                    <input type="password" name="password2" placeholder="Jelszó mégegyszer">
                </label>
            </div>
        </fieldset>
        <div id="two" class="inputbox">
            <input type="submit" name="signup" value="Regisztrálok!">
        </div>
    </form>


</section>
<div class="footer-dark">
    <?php include "footer.php"; ?>
</div>
</body>
</html>
