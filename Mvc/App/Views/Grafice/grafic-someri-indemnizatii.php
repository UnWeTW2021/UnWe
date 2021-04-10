<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="grafic-general.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <title>Șomeri-îndemnizații</title>
</head>
<body>

   <div class="container">
    <canvas id="someriIndChart"></canvas>
  </div> 

  <script>
    let someriIndChart = document.getElementById('someriIndChart').getContext('2d');

    Chart.defaults.global.defaultFontFamily = 'Tahoma';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';

    let someri2Chart = new Chart(someriIndChart, {
      type:'bar', 
      data:{
        labels:['Total Șomeri', 'Șomeri Îndemnizați ', 'Șomeri Neîndemnizați'],
        datasets:[{
          label:'Șomeri',
          data:[
            9810,
            2153,
            7657
          ],
        
          backgroundColor:[
            '#C0D2F3',
            '#EDADE6',
            '#ABF69B'          
          ],
          borderWidth:1,
          borderColor:'#44103F',
          hoverBorderWidth:2,
          hoverBorderColor:'#781534'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Șomeri Iași feb. 2021 - Îndemnizații',
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