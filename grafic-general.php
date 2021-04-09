<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="header-styles.css">
  <link rel="stylesheet" href="footer-styles.css">
  <link rel="stylesheet" href="grafic-general.css">
  <?php include('header-include.php');?>
  <script src="header.js" defer></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <title>Grafice Iași feb. 2021</title>
</head>
<body >

<?php include('header.php');?>

<section class="setari_generale">

  <div class="grafic_pie_doughnut">
    <?php include('grafic-someri-sex.php');?>
  </div>

  <div class="grafic_general">
    <?php include('grafic-someri-indemnizatii.php');?>  
  </div>

  <div class="grafic_pie_doughnut">
    <?php include('grafic-someri-mediu-urban.php');?>  
  </div>

  <div class="grafic_general">
    <?php include('grafic-someri-mediu-rural.php');?>  
  </div>

  <div class="grafic_pie_doughnut">
    <?php include('grafic-someri-educatie.php');?>  
  </div>

  <div class="grafic_general">
    <?php include('grafic-someri-varsta.php');?>  
  </div>


</section>

<?php include('footer.php');?>
</body>
</html>
