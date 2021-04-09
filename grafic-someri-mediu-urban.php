<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="grafic-general.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <title>Șomeri-mediu urban</title>
</head>
<body>

   <div class="container">
    <canvas id="someriUrbChart"></canvas>
  </div> 

  <script>
    let someriUrbChart = document.getElementById('someriUrbChart').getContext('2d');

    Chart.defaults.global.defaultFontFamily = 'Tahoma';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';

    let someri3Chart = new Chart(someriUrbChart, {
      type:'doughnut', 
      data:{
        labels:[ 'Șomeri Femei-Urban ', 'Șomeri Bărbați-Urban'],
        datasets:[{
          label:'Șomeri',
          data:[
     
            1108,
            916
          ],
        
          backgroundColor:[
            '#88C0E6',
            '#f4f4f4'
                      
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:2,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Șomeri Iași feb. 2021 - Mediu Urban',
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