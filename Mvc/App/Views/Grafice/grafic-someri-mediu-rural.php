<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="grafic-general.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <title>Șomeri-Mediu Rural</title>
</head>
<body>

   <div class="container">
    <canvas id="someriRuralChart"></canvas>
  </div> 

  <script>
    let someriRuralChart = document.getElementById('someriRuralChart').getContext('2d');

    Chart.defaults.global.defaultFontFamily = 'Tahoma';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';

    let someri4Chart = new Chart(someriRuralChart, {
      type:'horizontalBar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Total Șomeri Mediu Rural', 'Șomeri Femei-Rural ', 'Șomeri Bărbați-Rural'],
        datasets:[{
          label:'Șomeri',
          data:[
            7786,
            3373,
            4413
          ],
        
          backgroundColor:[
            '#69F1EF',
            '#21BCBA',
            '#0C918F'
            
                      
          ],
        }]
      },
      options:{
        title:{
          display:true,
          text:'Șomeri Iași feb. 2021 - Mediu Rural',
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