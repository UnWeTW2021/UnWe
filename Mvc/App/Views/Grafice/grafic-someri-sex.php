<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="grafic-general.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <title>Șomeri-sex</title>
</head>
<body>

   <div class="container">
    <canvas id="someriSexChart" ></canvas>
  </div> 

  <script>
    let someriSexChart = document.getElementById('someriSexChart').getContext('2d');

    Chart.defaults.global.defaultFontFamily = 'Tahoma';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';

    let someri1Chart = new Chart(someriSexChart, {
      type:'pie',
      data:{
        labels:['Total Șomeri Femei', 'Total Șomeri Bărbați'],
        datasets:[{
          label:'Șomeri',
          data:[
            4481,
            5329
          ],
        
          backgroundColor:[
            '#DF9BF6',
            '#EFF69B'
                     
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:2,
          hoverBorderColor:'#9BAFF6'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Șomeri Iași feb. 2021 - Sex',
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
            top:0
          
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