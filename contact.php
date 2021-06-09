<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contact.css">
   <?php include('Components/header-include.php');?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="">
 


</head>

<body>
<?php
    include('Components/header.php');
    ?>
    <section class="project-info">
        <h1 class="project-title">UnWe (Unemployment Web Visualizer) / M </h1>
        <p>Recurgând la un API REST/GraphQL propriu, să se realizeze un instrument Web de vizualizare și de comparare multi-criteriala (pe județe, nivel de educație, grupe de vârstă, mediu, perioadă de timp etc.) a
            <a href="https://data.gov.ro/dataset?q=somaj&amp;sort=metadata_modified+desc">datelor publice referitoare la șomajul din România</a> pe ultimele N luni (minim 12).</p>
        <p>Statisticile, plus vizualizările generate – minim 3 maniere, plus cele cartografice pe baza unor servicii Web de profil – vor putea fi exportate in formatele CSV, SVG si PDF.</p>
        <p>Resurse suplimentare despre vizualizarea datelor:<a href="https://profs.info.uaic.ro/~busaco/teach/courses/cliw/web-film.html#week4">click-aici</a></p>

    </section>

    <section class="map-contact">
        <h1>Contacteaza-ne la sediul nostru</h1>
        <div id="image-contact"></div>

    </section>
    <section class="form-wrapper">
        <form class="form" id="contact-form" action="contact_mail.php" method="GET">
            <label for="name">Numele tau
            <input type="text" name="name" required>

        </label>
            <label for="email">Email-ul tau
            <input type="email" name="email" required>
            
        </label>
            <label for="tel">Numarul tau de telefon
            <input type="phone-num" name="tel" required>
            
        </label>
            <label for="mesaj">Mesajul tau
                <textarea id="mesaj" name="mesaj" required></textarea>
         </label>
            <button type="submit" name="submit" id="submit-form-button">Trimte Mesajul</button>


        </form>
        <p id="error-message"></p>
    </section>
    <?php
    include('Components/footer.php');
    ?>
       <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script type="module" src="js/contact.js"></script>
</body>

</html>