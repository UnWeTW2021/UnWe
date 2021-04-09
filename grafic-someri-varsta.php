<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="grafic-general.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <title>Șomeri-Vârste</title>
</head>
<body>

   <div class="container">
    <canvas id="someriVarsteChart"></canvas>
  </div> 

  <script>
    let someriVarsteChart = document.getElementById('someriVarsteChart').getContext('2d');

    Chart.defaults.global.defaultFontFamily = 'Tahoma';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';

    let someri6Chart = new Chart(someriVarsteChart, {
      type:'line', 
      data:{
        labels:['Sub 25 ani', '25-29 ani', '30-39 ani','40-49 ani','50-55 ani','peste 55 ani'],
        datasets:[{
          label:'Șomeri',
          data:[
            854,
            276,
            1430,
            2805,
            2057,
            2388

          ],
        
          backgroundColor:[
            '#C0F3E8'          
          ],
        }]
      },
      options:{
        title:{
          display:true,
          text:'Șomeri Iași feb. 2021 - Vârste',
          fontSize:18,
         
          
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#157078'
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