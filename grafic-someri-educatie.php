<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="grafic-general.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <title>Șomeri-Educație</title>
</head>
<body>

   <div class="container">
    <canvas id="someriEducatieChart"></canvas>
  </div> 

  <script>
    let someriEducatieChart = document.getElementById('someriEducatieChart').getContext('2d');

    Chart.defaults.global.defaultFontFamily = 'Tahoma';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';

    let someri5Chart = new Chart(someriEducatieChart, {
      type:'pie', 
      data:{
        labels:['Fără Studii', 'Învățământ Primar','Învățământ Gimnazial','Învățământ Liceal','Învățământ Postliceal','Învățământ Profesional','Învățământ Universitar'],
        datasets:[{
          label:'Șomeri',
          data:[
            607,
            1854,
            3082,
            1061,
            96,
            2562,
            548
          ],
        
          backgroundColor:[
            '#CFEC85',
            '#85ADEC',
            '#ECB885',
            '#D36DBC',
            '#74D36D',
            '#AE8ED8',
            '#8ED8C5'
            
                      
          ],
        }]
      },
      options:{
        title:{
          display:true,
          text:'Șomeri Iași feb. 2021 - Nivel Educație',
          fontSize:18,
         
          
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0,
        
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
</body>
</html>