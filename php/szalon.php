<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Eke Beáta, Hrivnák Renáta" />
    <meta name="description" content="A legjobb szegedi fodrászat" />
    <meta name="keywords" content="fodrászat, fodrász, haj, hajvágás, frizura, hajfestés, dauer, melír, ombre, egyenes, göndör" />

    <title>Szalon</title>
    <link rel="icon" href="../img/logo1.jpg" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/szalon.css" />
</head>
<body>

<header>
    <?php include "header.php"; ?>
    <!--navbar-->
    <nav>
        <ul>
            <li><a href="index.php">Kezdőlap</a></li>
            <li><a href="araink.php">Áraink</a></li>
            <li><a href="szalon.php" class="current">Szalon</a></li>
            <li><a href="klubkartya.php">Klubkártya</a></li>
            <li ><a href="idopont.php">Időpontfoglalás</a></li>
            <li ><a href="bejelentkezes.php">Profil</a></li>
        </ul>
    </nav>
    <!--navbar-->
</header>
<main>
    <section><h2>Szalonunk</h2></section>
    <article><p>Szalonunkban 15 éve szolgáljuk ki vásárlóink különböző igényet.<br/> Lehet idős, vagy fiatal, biztosítjuk róla, hogy találunk, és elkészítjük Önnek azt a frizurát amit megálmodott.<br/>
            Ha esetleg nincs még konkrét elképzelése, abban is tudunk segíteni.<br/> Alkalmazásunkkal<wbr> virtuálisan kipróbálhat különböző színű és fazonú hajviseleteket.<br/>
            Sőt, ha szeretné, <i>stílustanácsadóink</i> segítenek a döntésben, hogy az Ön életkorához, <wbr>testalkatához, arcberendezéséhez milyen frizura passzol leginkább. </p></article>
    <aside><p>Ezt csak azért tettük ide, hogy legyen oldalsáv is.</p></aside>
    <table>
        <caption>Nyitvatartás</caption>
        <thead>
        <tr>
            <th id="oszlop-nev1">Nap</th>
            <th id="oszlop-nev2">Óra</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td headers="oszlop-nev1">Hétfő</td>
            <td headers="oszlop-nev2">7:30-18:30</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Kedd</td>
            <td headers="oszlop-nev2">7:30-18:30</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Szerda</td>
            <td headers="oszlop-nev2">7:30-18:30</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Csütörtök</td>
            <td headers="oszlop-nev2">7:30-18:30</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Péntek</td>
            <td headers="oszlop-nev2">27:30-18:30</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Szombat</td>
            <td headers="oszlop-nev2">8:30-13:30</td>
        </tr>
        </tbody>
    </table>
</main>

<div class="footer-dark">
    <?php include "footer.php"; ?>
</div>
</body>
</html>
