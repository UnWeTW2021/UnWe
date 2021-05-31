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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <script src="Grafice/grafice.js" defer ></script>
</head>
<body>

<?php include('Components/header.php');?>

<h1 id="judet">
<?= $data ?>
</h1>

<section class="setari_generale">

  <div class="grafic_pie_doughnut">
    <div class="container">
    <canvas id="someriSexChart" ></canvas>
    </div>
  </div>

  <div class="grafic_general">
    <div class="container">
    <canvas id="someriIndChart"></canvas>
    </div> 
  </div>

  <div class="grafic_pie_doughnut">
    <div class="container">
    <canvas id="someriUrbChart"></canvas>
    </div> 
  </div>

  <div class="grafic_general">  
    <div class="container">
    <canvas id="someriRuralChart"></canvas>
    </div> 
  </div>

  <div class="grafic_pie_doughnut">  
    <div class="container">
    <canvas id="someriEducatieChart"></canvas>
    </div>
  </div>

  <div class="grafic_general">
    <?php include('Grafice/grafic-someri-varsta.php');?>
    <div class="container">
    <canvas id="someriVarsteChart"></canvas>
    </div>    
  </div>

</section>

<?php include('Components/footer.php');?>
<script src="Components/header.js" defer></script>
</body>
</html>



