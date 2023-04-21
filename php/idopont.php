<?php
include_once "fogl.php";

$kepki ="";
$kiterj = [];
$message = "";

if (isset($_GET["foglal"])) {

    if (!isset($_GET["sex"]) || !isset($_GET["nev"]) || !isset($_GET["mail"]) || !isset($_GET["tel"]) || !isset($_GET["date"]) || !isset($_GET["time"])) {
        die("<strong>HIBA:</strong> Nem töltöttél ki minden mezőt! <a href='idopont.php'>Vissza az időpontfoglaláshoz!</a>");
    }else{
        if (isset($_FILES["frizurapic"]))
        {
            $kiterj = ["jpg" , "png"];
            $kepki = strtolower(pathinfo($_FILES["frizurapic"]["nev"], PATHINFO_EXTENSION));
            if (in_array($kepki, $kiterj)) {
                if ($_FILES["frizurapic"]["error"] === 0) {
                    if ($_FILES["frizurapic"]["size"] <= 31457280) {
                        $cel = "kepek/" . $_GET["nev"].".".$kepki;
                        if (move_uploaded_file($_FILES["frizurapic"]["tmp_name"], $cel)) {
                            $message .= "Sikeres fájl feltöltés!";
                        } else {
                            die("<strong>HIBA:</strong> A kép mozgatása nem sikreült! <a href='idopont.php'>Vissza az időpontfoglaláshoz!</a>");
                        }
                    } else {
                        die("<strong>HIBA:</strong> A kép mérete túl nagy! <a href='idopont.php'>Vissza az időpontfoglaláshoz!</a>");
                    }
                } else {
                    die("<strong>HIBA:</strong> A fájl feltöltése során hiba lépett fel! <a href='idopont.php'>Vissza az időpontfoglaláshoz!</a>");
                }
            } else {
                die("<strong>HIBA:</strong> Nem megfelő a fájl kiterjesztése! <a href='idopont.php'>Vissza az időpontfoglaláshoz!</a>");
            }
        }
        $ujak = new Foglal($_GET["sex"], $_GET["nev"], $_GET["mail"], $_GET["tel"], $_GET["date"], $_GET["time"], $_GET["link"], $_GET["nev"].".".$kepki, $_GET["text"]);
        array_push($_SESSION["foglaltak"],$ujak);
        $ujak->foglal();
        echo "<p>Sikeres foglalás!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Eke Beáta, Hrivnák Renáta" />
    <meta name="description" content="A legjobb szegedi fodrászat" />
    <meta name="keywords" content="fodrászat, fodrász, haj, hajvágás, frizura, hajfestés, dauer, melír, ombre, egyenes, göndör" />

    <title>Időpontfoglalás</title>
    <link rel="icon" href="../img/logo1.jpg" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/idopontfoglalas.css" />
</head>
<body>

<header>
    <!--navbar-->
    <?php include "header.php"; ?>
    <nav>
        <ul>
            <li><a href="index.php">Kezdőlap</a></li>
            <li><a href="araink.php">Áraink</a></li>
            <li><a href="szalon.php">Szalon</a></li>
            <li><a href="klubkartya.php">Klubkártya</a></li>
            <li ><a href="idopont.php" class="current">Időpontfoglalás</a></li>
            <li ><a href="bejelentkezes.php">Profil</a></li>
        </ul>
    </nav>
    <!--navbar-->
</header>
<main>
    <section>
        <figure>
            <div class="avatar"><img src="../img/avatar2.png" alt="avatar2" title="illusztráció" width="150" /></div>
            <img src="../img/avatar.png" alt="avatar" title="illusztráció" width="150" />
        </figure>
    </section>
    <article>
        <form action="idopont.php" method="get" enctype="multipart/form-data">
            <fieldset>
                <legend><em>Személyes adatok</em></legend>
                <div id="nem">
                    <label>Férfi:
                        <input type="radio" id="op1" name="sex" value="m"/></label>
                    <label>Nő:
                        <input type="radio" id="op2" name="sex" value="f"/></label>
                </div>

                <div class="inputbox">
                    <label>
                        <input type="text" name="nev" placeholder="Név">
                    </label>
                </div>

                <div class="inputbox">
                    <label>
                        <input type="email" name="mail" placeholder="Email cím">
                    </label>
                </div>

                <div class="inputbox">
                    <label>
                        <input type="tel" name="tel" placeholder="Telefonszám">
                    </label>
                </div>
            </fieldset>
            <fieldset>
                <legend><em>Foglalható időpontok</em></legend>
                <div class="inputbox">
                    <label>
                        <input type="date" name="date">
                    </label>
                </div>
                <div class="inputbox">
                    <label>
                        <input type="time" name="time">
                    </label>
                </div>
            </fieldset>

            <fieldset>
                <legend><em>Egyéb infromációk</em></legend>
                <div class="inputbox">
                    <label>
                        <input type="url" name="link" placeholder="Esetleges fénykép linkje"/>
                    </label>
                </div>
            </fieldset>
            <div class="inputbox-bottom">
                <p>Frizura: </p>
                <label for="frizurapic">
                    <input type="file" id="frizurapic" name="frizurapic" accept="image/*"/>
                </label><br/>
                <label>
                    <input type="hidden">
                </label>
            </div>

            <fieldset>
                <legend><em>Szolgáltatás, amit szeretnél</em></legend>
                <div class="inputbox">
                    <label>
                        <select>
                            <option value="vagas">Hajvágás</option>
                            <option value="festes">Hajfestés</option>
                            <option value="igazitas">Igazítás</option>
                            <option value="alkalmi">Alkalmi frizura</option>
                            <option value="nemtud">Még nem tudom</option>
                            <option value="egyeb" selected>Egyéb</option>
                        </select>
                    </label>
                </div>
            </fieldset>
            <div id="one" class="inputbox">
                <label>
            <textarea name="text" rows="5" cols="50" maxlength="200"
                      placeholder="Írd le nekünk milyen frizurát szeretnél!"></textarea>
                </label> <br/>
            </div>
            <div id="two" class="inputbox">
                <input type="submit" name="foglal" value="Foglalás!">
            </div>

            <div class="inputbox">
                <input type="reset">
            </div>

        </form>
    </article>
    <aside><p>Ezt csak azért tettük ide, hogy legyen oldalsáv is.</p></aside>


    <div class="footer-dark">
        <?php include "footer.php"; ?>
    </div>
</main>
</body>
</html>
