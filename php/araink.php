<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Eke Beáta, Hrivnák Renáta" />
    <meta name="description" content="A legjobb szegedi fodrászat" />
    <meta name="keywords" content="fodrászat, fodrász, haj, hajvágás, frizura, hajfestés, dauer, melír, ombre, egyenes, göndör" />

    <title>Áraink</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/araink.css">
    <link rel="icon" href="../img/logo1.jpg" />
</head>
<body>
<header>
    <?php include "header.php"; ?>
    <nav>
        <ul>
            <li><a href="index.php">Kezdőlap</a></li>
            <li><a href="araink.php" class="current">Áraink</a></li>
            <li><a href="szalon.php">Szalon</a></li>
            <li><a href="klubkartya.php">Klubkártya</a></li>
            <li ><a href="idopont.php">Időpontfoglalás</a></li>
            <li ><a href="bejelentkezes.php">Profil</a></li>
        </ul>
    </nav>
</header>
<main>
    <!--táblázat -->
    <table id="araink-table">
        <caption><h1>Áraink</h1></caption>

        <colgroup>
            <col id="araink-table-first-column" />
            <col />
        </colgroup>
        <thead>
        <tr>
            <th id="oszlop-nev1">Szolgáltatások</th>
            <th id="oszlop-nev2">Árak</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td headers="oszlop-nev1">Férfi hajvágás (mosással, szárítással)</td>
            <td headers="oszlop-nev2">3590 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Gépi hajvágás - egy hosszra (mosással)</td>
            <td headers="oszlop-nev2">1590 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Szakállvágás géppel vagy ollóval</td>
            <td headers="oszlop-nev2">1200 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Szakállformázás kontúrgéppel és pengével</td>
            <td headers="oszlop-nev2">2360 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Női hajvágás (mosással, szárítással)</td>
            <td headers="oszlop-nev2">4390 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Női hajszárítás (mosással)</td>
            <td headers="oszlop-nev2">2790 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Hajvasalás</td>
            <td headers="oszlop-nev2">1290 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Hajsütés</td>
            <td headers="oszlop-nev2">1590 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Alkalmi frizura (mosással, vágással, szárítással)</td>
            <td headers="oszlop-nev2">7790 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Alkalmi frizura (mosással, szárítással)	</td>
            <td headers="oszlop-nev2">6490 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Gyerek hajvágás (mosással, szárítással, 6 éves korig)</td>
            <td headers="oszlop-nev2">2650 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Fejmasszázs</td>
            <td headers="oszlop-nev2">430 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Hajszeszes kezelés</td>
            <td headers="oszlop-nev2">550 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Hajpakolás</td>
            <td headers="oszlop-nev2">950 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Hajmosás</td>
            <td headers="oszlop-nev2">1200 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Hajhullás elleni kezelés</td>
            <td headers="oszlop-nev2">1990 Ft</td>
        </tr>
        <tr>
            <td headers="oszlop-nev1">Hajfestés</td>
            <td headers="oszlop-nev2">6490 Ft</td>
        </tr>
        </tbody>

    </table>
    <aside><p>Ezt csak azért tettük ide, hogy legyen oldalsáv is.</p></aside>
    <p id="gomb"><a href="#top">Vissza a tetejére</a></p>
</main>
<div class="footer-dark">
    <?php include "footer.php"; ?>
</div>


</body>
</html>
