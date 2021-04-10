<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="Components/header-styles.css">
  <link rel="stylesheet" href="Components/footer-styles.css">
  <link rel="stylesheet" href="Grafice/grafic-general.css">
  <!-- <?php #include('Components/header-include.php');?> -->
  <?php echo '<title>Grafice ' .  $data . ' feb. 2021</title>'; ?>
</head>
<body>

<?php include('Components/header.php');?>

<section class="setari_generale">

  <div class="grafic_pie_doughnut">
    <?php include('Grafice/grafic-someri-sex.php');?>
  </div>

  <div class="grafic_general">
    <?php include('Grafice/grafic-someri-indemnizatii.php');?>  
  </div>

  <div class="grafic_pie_doughnut">
    <?php include('Grafice/grafic-someri-mediu-urban.php');?>  
  </div>

  <div class="grafic_general">
    <?php include('Grafice/grafic-someri-mediu-rural.php');?>  
  </div>

  <div class="grafic_pie_doughnut">
    <?php include('Grafice/grafic-someri-educatie.php');?>  
  </div>

  <div class="grafic_general">
    <?php include('Grafice/grafic-someri-varsta.php');?>  
  </div>

  <?php
    #echo $data;?>

</section>

<?php include('Components/footer.php');?>
<script src="Components/header.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
</body>
</html>



