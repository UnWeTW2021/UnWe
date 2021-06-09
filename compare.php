<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/compare.css">
    <?php include('Components/header-include.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js" async></script>
    <script type="text/javascript" src="js/canvas2svg.js"></script>

</head>
<body>
<?php
include('Components/header.php');
?>
<section class="page-wrapper">


<section class="filter-wrapper">

    <form class="filter-form">
        <div class="city first">
            <select name="city1" id="city1">
                <option value="">Judet</option>
                <option value="Alba">Alba</option>
                <option value="Arad">Arad</option>
                <option value="Arges">Arges</option>
                <option value="Bacau">Bacau</option>
                <option value="Bihor">Bihor</option>
                <option value="Bistrita-Nasaud">Bistrita Nasaud</option>
                <option value="Botosani">Botosani</option>
                <option value="Brasov">Brasov</option>
                <option value="Braila">Braila</option>
                <option value="Bucuresti">Bucuresti</option>
                <option value="Buzau">Buzau</option>
                <option value="Caras-Severin">Caras Severin</option>
                <option value="Calarasi">Calarasi</option>
                <option value="Cluj">Cluj</option>
                <option value="Constanta">Constanta</option>
                <option value="Covasna">Covasna</option>
                <option value="Dambovita">Dambovita</option>
                <option value="Dolj">Dolj</option>
                <option value="Galati">Galati</option>
                <option value="Giurgiu">Giurgiu</option>
                <option value="Gorj">Gorj</option>
                <option value="Harghita">Harghita</option>
                <option value="Hunedoara">Hunedoara</option>
                <option value="Ialomita">Ialomita</option>
                <option value="Iasi">Iasi</option>
                <option value="Ilfov">Ilfov</option>
                <option value="Maramures">Maramures</option>
                <option value="Mehedinti">Mehedinti</option>
                <option value="Mures">Mures</option>
                <option value="Neamt">Neamt</option>
                <option value="Olt">Olt</option>
                <option value="Prahova">Prahova</option>
                <option value="Satu-Mare">Satu Mare</option>
                <option value="Salaj">Salaj</option>
                <option value="Sibiu">Sibiu</option>
                <option value="Suceava">Suceava</option>
                <option value="Teleorman">Teleorman</option>
                <option value="Timis">Timis</option>
                <option value="Tulcea">Tulcea</option>
                <option value="Vaslui">Vaslui</option>
                <option value="Valcea">Valcea</option>
                <option value="Vrancea">Vrancea</option>
            </select>
            <div class="time-wrapper">


            <div class="time-select">
                <select name="month1" class="month" id="month1">
                    <option value="">Month</option>
                    <option value="01">Jan</option>
                    <option value="02">Feb</option>
                    <option value="03">Mar</option>
                    <option value="04">Apr</option>
                    <option value="05">May</option>
                    <option value="06">Jun</option>
                    <option value="07">Jul</option>
                    <option value="08">Aug</option>
                    <option value="09">Sep</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                </select>
                <select name="year1" class="year" id="year1">
                    <option value="">Year</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>

                </select>
            </div>
            <div class="time-select">
                <select name="month2" class="month" id="month2">
                    <option value="">Month</option>
                    <option value="01">Jan</option>
                    <option value="02">Feb</option>
                    <option value="03">Mar</option>
                    <option value="04">Apr</option>
                    <option value="05">May</option>
                    <option value="06">Jun</option>
                    <option value="07">Jul</option>
                    <option value="08">Aug</option>
                    <option value="09">Sep</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                </select>
                <select name="year2" class="year" id="year2">
                    <option value="">Year</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>

                </select>
            </div>
            </div>
        </div>
        <div class="settings">
            <select name="data" id="data" required>
                <option value="">Tipul de date</option>
                <option value="1">Grupa Varsta</option>
                <option value="2">Medie Rezidenta</option>
                <option value="3">Nivelul Educatiei</option>
                <option value="4">Rate Somaj</option>
            </select>
       <select name="view" id="view" required>
           <option value="">Tipul vizualizarii</option>
           <option value="line">Line Chart</option>
           <option value="bar">Bar Chart</option>
           <option value="radar">Radar Chart</option>
           <option value="doughnut">Donut Chart</option>
       </select>


        </div>
        <div class="city second">
            <select name="city2" id="city2">
                <option value="">Judet</option>
                <option value="Alba">Alba</option>
                <option value="Arad">Arad</option>
                <option value="Arges">Arges</option>
                <option value="Bacau">Bacau</option>
                <option value="Bihor">Bihor</option>
                <option value="Bistrita-Nasaud">Bistrita Nasaud</option>
                <option value="Botosani">Botosani</option>
                <option value="Brasov">Brasov</option>
                <option value="Braila">Braila</option>
                <option value="Bucuresti">Bucuresti</option>
                <option value="Buzau">Buzau</option>
                <option value="Caras-Severin">Caras Severin</option>
                <option value="Calarasi">Calarasi</option>
                <option value="Cluj">Cluj</option>
                <option value="Constanta">Constanta</option>
                <option value="Covasna">Covasna</option>
                <option value="Dambovita">Dambovita</option>
                <option value="Dolj">Dolj</option>
                <option value="Galati">Galati</option>
                <option value="Giurgiu">Giurgiu</option>
                <option value="Gorj">Gorj</option>
                <option value="Harghita">Harghita</option>
                <option value="Hunedoara">Hunedoara</option>
                <option value="Ialomita">Ialomita</option>
                <option value="Iasi">Iasi</option>
                <option value="Ilfov">Ilfov</option>
                <option value="Maramures">Maramures</option>
                <option value="Mehedinti">Mehedinti</option>
                <option value="Mures">Mures</option>
                <option value="Neamt">Neamt</option>
                <option value="Olt">Olt</option>
                <option value="Prahova">Prahova</option>
                <option value="Satu-Mare">Satu Mare</option>
                <option value="Salaj">Salaj</option>
                <option value="Sibiu">Sibiu</option>
                <option value="Suceava">Suceava</option>
                <option value="Teleorman">Teleorman</option>
                <option value="Timis">Timis</option>
                <option value="Tulcea">Tulcea</option>
                <option value="Vaslui">Vaslui</option>
                <option value="Valcea">Valcea</option>
                <option value="Vrancea">Vrancea</option>
            </select>
            <div class="time-wrapper">
                <div class="time-select">
                    <select name="month2" class="month" id="month3">
                        <option value="">Month</option>
                        <option value="01">Jan</option>
                        <option value="02">Feb</option>
                        <option value="03">Mar</option>
                        <option value="04">Apr</option>
                        <option value="05">May</option>
                        <option value="06">Jun</option>
                        <option value="07">Jul</option>
                        <option value="08">Aug</option>
                        <option value="09">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>
                    <select name="year2" class="year" id="year3">
                        <option value="">Year</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>

                    </select>
                </div>
                <div class="time-select">
                    <select name="month2" class="month" id="month4">
                        <option value="">Month</option>
                        <option value="01">Jan</option>
                        <option value="02">Feb</option>
                        <option value="03">Mar</option>
                        <option value="04">Apr</option>
                        <option value="05">May</option>
                        <option value="06">Jun</option>
                        <option value="07">Jul</option>
                        <option value="08">Aug</option>
                        <option value="09">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>
                    <select name="year2" class="year" id="year4">
                        <option value="">Year</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>

                    </select>
                </div>
            </div>

        </div>
    </form>
    <p class="error-message"></p>

</section>

<section class="download-buttons">
    <a href="#" id="pdf-button">Download PDF⬇</a>
    <a href="#" id="csv-button">Download CSV⬇</a>
    <a href="#" id="svg-button">Download SVG⬇</a>
</section>

<section class="container-wrapper">
    <div class="container" id="chart-wrapper">
        <canvas id="chart1"></canvas>

    </div>
</section>

</section>
<?php
include('Components/footer.php');
?>
<script src="js/compare.js"></script>
</body>
</html>