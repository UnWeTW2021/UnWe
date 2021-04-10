<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="Mapa/mapdata.js"></script>
    <script type="text/javascript" src="Mapa/countrymap.js"></script>
    <!-- <link rel="stylesheet" href="Components/header-styles.css">
    <link rel="stylesheet" href="Components/footer-styles.css">
    <script src="Components/header.js" defer></script> -->
    <?php include('Components/header-include.php'); ?>
    <link rel="stylesheet" href="landingPage.css">
    <title>LandingPage</title>
</head>
<body>
    <?php
    include('Components/header.php');
    ?>
    <div class="harta">
    <div id="map" ></div>
    </div>
    <?php
    include('Components/footer.php');
    ?>
</body>
</html>