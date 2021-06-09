let selects = document.querySelectorAll('select');
let city1 = document.getElementById('city1');
let city2 = document.getElementById('city2');
let month1 = document.getElementById('month1');
let year1 = document.getElementById('year1');
let month2 = document.getElementById('month2');
let year2 = document.getElementById('year2');
let month3 = document.getElementById('month3');
let year3 = document.getElementById('year3');
let month4 = document.getElementById('month3');
let year4 = document.getElementById('year4');
let view = document.getElementById('view');
let data = document.getElementById('data');
var showText = '';
let errorMessage = document.getElementsByClassName('error-message')[0];
// let chart1 = document.getElementById('chart1').getContext('2d');
// let chart2 = document.getElementById('chart2').getContext('2d');
// let chart3 = document.getElementById('chart3').getContext('2d');
// let chart4 = document.getElementById('chart4').getContext('2d');
var chartWrapper = document.getElementById('chart-wrapper');
const grupaVarsta = [
  'TOTAL',
  'Sub 25 ani',
  '25 29 ani',
  '30 39 ani',
  '40 49 ani',
  '50 55 ani',
  'peste 55 ani',
];
const medieRezidenta = [
  ' TOTAL SOMERI',
  ' TOTAL SOMERI FEMEI',
  ' TOTAL SOMERI BARBATI',
  ' TOTAL SOMERI DIN MEDIUL URBAN',
  ' SOMERI FEMEI DIN MEDIUL URBAN',
  ' SOMERI BARBATI DIN MEDIUL URBAN',
  ' TOTAL SOMERI DIN MEDIUL RURAL',
  ' SOMERI FEMEI DIN MEDIUL RURAL',
  ' SOMERI BARBATI DIN MEDIUL RURAL',
];
const nivelEducatie = [
  'Total someri din care',
  'fara studii',
  'invatamant primar',
  'invatamant gimnazial',
  'invatamant liceal',
  'invatamant postliceal',
  'invatamant profesionalarte si meserii',
  'invatamant universitar',
];
const rateSomaj = [
  ' total someri',
  ' total someri femei',
  ' total someri barbati',
  ' someri indemnizati',
  ' someri neindemnizati',
  'Rata somajului ',
  'Rata somajului Feminina ',
  'Rata somajului Masculina ',
];

var LABELS;
var data1, data2;
let apiUrl = '';
let baseUrl = '';

Chart.defaults.global.defaultFontFamily = 'Tahoma';
Chart.defaults.global.defaultFontSize = 12;
Chart.defaults.global.defaultFontColor = '#777';

[...selects].forEach((item) => {
  item.addEventListener('change', (event) => {
    renderPage(event);
  });
});

async function getapi(url) {
  const response = await fetch(url);

  var data = await response.json();

  return data;
}

async function renderPage(e) {
  showText = '';
  let city1Value = city1.value;
  let city2Value = city2.value;

  let month1Value = month1.value;
  let year1Value = year1.value;
  let year2Value = year2.value;
  let month2Value = month2.value;
  let year3Value = year3.value;
  let month3Value = month3.value;
  let year4Value = year4.value;
  let month4Value = month4.value;
  let viewValue = view.value;
  let dataValue = parseInt(data.value);
  console.log(dataValue);
  if (dataValue === 1) {
    baseUrl = 'https://unwe.herokuapp.com/api/grupa_varsta/';
    LABELS = grupaVarsta;
  } else if (dataValue === 2) {
    baseUrl = 'https://unwe.herokuapp.com/api/medie_rezidenta/';
    LABELS = medieRezidenta;
  } else if (dataValue === 3) {
    baseUrl = 'https://unwe.herokuapp.com/api/nivelul_educatiei/';
    LABELS = nivelEducatie;
  } else if (dataValue === 4) {
    baseUrl = 'https://unwe.herokuapp.com/api/rate_somaj/';
    LABELS = rateSomaj;
  } else {
    errorMessage.innerText = 'Alegeti un dataset!';
    return;
  }

  if (viewValue === '') {
    errorMessage.innerText = 'Alegeti un tip de view!';
    return;
  }
  apiUrl = baseUrl + 'read_one.php';
  var url = new URL(apiUrl);
  var search_params = url.searchParams;
  if (city1Value === '') {
    errorMessage.innerText = 'Selecteaza macar un oras';
    return;
  } else {
    errorMessage.innerText = '';
    search_params.set('judet', city1Value);
  }

  if (month1Value === '') {
  } else {
    apiUrl = baseUrl + 'read_luna.php';
    url = new URL(apiUrl);
    search_params = url.searchParams;
    search_params.set('judet', city1Value);
    errorMessage.innerText = '';
    search_params.set('luna1', month1Value);
  }
  if (month2Value !== '' && year1Value !== '' && year2Value !== '') {
    search_params.set('an1', year1Value);
    search_params.set('luna2', month2Value);
    search_params.set('an2', year2Value);
    errorMessage.innerText = '';
  } else {
    if (month1Value !== '') {
      errorMessage.innerText = 'Alegeti un interval corect';
      return;
    }
  }

  url.search = search_params.toString();
  // search_params.set("an1",2019)
  // search_params.set("luna2",2)
  // search_params.set("an2",2019)
  console.log(url.search);
  var new_url = url.toString();
  data1 = await getapi(new_url);
  apiUrl = '';
  if (
    month1Value !== '' &&
    month2Value !== '' &&
    year1Value !== '' &&
    year2Value !== '' &&
    city2Value !== '' &&
    month3Value === '' &&
    month4Value === '' &&
    year3Value === '' &&
    year4Value === ''
  ) {
    errorMessage.innerText =
      'Alegeti un interval corect : un al doilea oras plus intervalul aferent';
    return;
  }
  if (
    month1Value !== '' &&
    month2Value !== '' &&
    year1Value !== '' &&
    year2Value !== '' &&
    city2Value !== '' &&
    (month3Value === '' ||
      month4Value === '' ||
      year3Value === '' ||
      year4Value === '')
  ) {
    errorMessage.innerText = 'Alegeti un interval corect pentru al doilea oras';
    return;
  }
  if (
    city2Value === '' &&
    (month3Value !== '' ||
      month4Value !== '' ||
      year3Value !== '' ||
      year4Value !== '')
  ) {
    errorMessage.innerText = 'Alegeti un oras pentru al doilea interval';
    return;
  }

  if (
    month1Value === '' &&
    month2Value === '' &&
    year1Value === '' &&
    year2Value === '' &&
    city2Value !== ''
  ) {
    showText = city2.value;
    console.error('primul if');
    apiUrl = baseUrl + 'read_one.php';
    url1 = new URL(apiUrl);
    search_params1 = url1.searchParams;
    search_params1.set('judet', city2Value);
    new_url1 = url1.toString();
    data2 = await getapi(new_url1);
  } else if (
    month1Value !== '' &&
    month2Value !== '' &&
    year1Value !== '' &&
    year2Value !== '' &&
    city2Value !== '' &&
    month3Value !== '' &&
    month4Value !== '' &&
    year3Value !== '' &&
    year4Value !== ''
  ) {
    showText = city2.value;
    console.error('2 if');
    apiUrl = baseUrl + 'read_luna.php';
    url1 = new URL(apiUrl);
    search_params1 = url1.searchParams;
    search_params1.set('judet', city2Value);
    search_params1.set('luna1', month3Value);
    search_params1.set('an1', year3Value);
    search_params1.set('luna2', month4Value);
    search_params1.set('an2', year4Value);
    new_url1 = url1.toString();
    console.log(new_url1);
    data2 = await getapi(new_url1);
  } else {
    data2 = '';
  }

  console.log(data1);
  console.log(data2, 'outside');
  renderChart(dataValue, viewValue, data1, data2);
}

function tweakLib() {
  C2S.prototype.getContext = function (contextId) {
    if (contextId == '2d' || contextId == '2D') {
      return this;
    }
    return null;
  };

  C2S.prototype.style = function () {
    return this.__canvas.style;
  };

  C2S.prototype.getAttribute = function (name) {
    return this[name];
  };

  C2S.prototype.addEventListener = function (
    type,
    listener,
    eventListenerOptions
  ) {
    console.log('canvas2svg.addEventListener() not implemented.');
  };
}

function renderChart(dataValue, viewValue, data1, data2) {
  console.warn(dataValue);

  let iframes = document.querySelectorAll('iframe');
  [...iframes].forEach((item) => {
    item.remove(item.selectedIndex);
  });

  let newData1 = [];
  let newData2 = [];
  for (const [key, value] of Object.entries(data1)) {
    if (key !== 'judet' && key !== 'JUDET' && key !== 'luna' && key !== 'an')
      newData1.push(value);
  }
  for (const [key, value] of Object.entries(data2)) {
    if (key !== 'judet' && key !== 'JUDET' && key !== 'luna' && key !== 'an')
      newData2.push(value);
  }

  let chart = document.getElementById('chart1');
  chart.remove();
  console.log(newData1, 'newdata');
  var chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    random: 'rgb(113, 50, 155)',
    random2: 'rgb(193, 99, 195)',
    grey: 'rgb(231,233,237)',


  };
  let chart1 = document.createElement('canvas');
  chart1.setAttribute('id', 'chart1');
  chartWrapper.appendChild(chart1);
  console.log("INTERIOR RENDER")
  console.log(showText)
  let chartData = {
    type: viewValue,
    data: {
      labels: LABELS,
      datasets: [
        {
          label: city1.value,
          data: newData1,
          fill: false,
          backgroundColor: viewValue === 'doughnut'? Object.values(chartColors): chartColors.red,
          borderWidth: 1,
          borderColor: '#777',
          hoverBorderWidth: 2,
          hoverBorderColor: '#000',
        },
        {
          label: city2.value,
          data: newData2,
          fill: false,
          backgroundColor: viewValue === 'doughnut'? Object.values(chartColors): chartColors.blue,
          borderWidth: 1,
          borderColor: '#3B729F',
          hoverBorderWidth: 2,
          hoverBorderColor: '#FFFFFF',
        },
      ],
    },
    options: {
      title: {
        display: true,
        text: showText !== '' ? city1.value + ' vs ' + city2.value : city1.value,
        fontSize: 18,
      },
      legend: {
        display: true,
        position: 'right',
        labels: {
          fontColor: '#000',
        },
      },
      layout: {
        padding: {
          left: 0,
          right: 0,
          bottom: 0,
          top: 0,
        },
      },
      tooltips: {
        enabled: true,
      },
    },
  };



  let chart100 = new Chart(chart1, chartData);

  let pdfButton = document.getElementById('pdf-button');
  let csvButton = document.getElementById('csv-button');
  let svgButton = document.getElementById('svg-button');

  pdfButton.onclick = function (event) {
    let containerGrafice = document.getElementsByClassName('container')[0];
    let reportHeight = containerGrafice.clientHeight;
    let reportWidth = containerGrafice.clientWidth;

    let pdfCanvas = document.createElement('canvas');
    pdfCanvas.setAttribute('id', 'pdfCanvas');
    pdfCanvas.setAttribute('width', reportWidth);
    pdfCanvas.setAttribute('height', reportHeight);

    let pdfctx = pdfCanvas.getContext('2d');
    let pdfctxX = 0;
    let pdfctxY = 0;
    let buffer = 100;

    let canvas = document.getElementById('chart1');

    pdfctx.drawImage(
        canvas,
        pdfctxX,
        pdfctxY,
        canvas.clientWidth,
        canvas.clientHeight
    );

    let pdf = new jsPDF('l', 'pt', [reportWidth + 300, reportHeight + 300]);

    pdfctxY += canvas.clientHeight;

    pdf.addImage(pdfCanvas, 'PNG', 10, 0);

    pdfctxYCopy = pdfctxY;

    for (key in data1) {
      let value = data1[key];
      if (key !== 'luna' && key !== 'an') {
        pdf.text(pdfctxX + 10, pdfctxY, key + ' : ' + value);
        pdfctxY += 20;
      }
    }

    if (data2['judet'] !== undefined) {
      for (key in data2) {
        let value = data2[key];
        if (key !== 'luna' && key !== 'an') {
          pdf.text(500, pdfctxYCopy, key + ' : ' + value);
          pdfctxYCopy += 20;
        }
      }
    }

    pdf.save(
        data2['judet'] !== undefined
            ? data1['judet'] + '-' + data2['judet'] + '.pdf'
            : data1['judet'] + '.pdf'
    );
  };

  csvButton.onclick = function (event) {
    let jsonString = [];

    let row = [];
    for (key in data1) {
      if (key !== 'luna' && key !== 'an') {
        row.push(key);
      }
    }
    jsonString.push(row);

    row = [];
    for (key in data1) {
      let value = data1[key];
      if (key !== 'luna' && key !== 'an') {
        row.push(value);
      }
    }
    jsonString.push(row);

    if (data2['judet'] !== undefined) {
      row = [];
      for (key in data2) {
        let value = data2[key];
        if (key !== 'luna' && key !== 'an') {
          row.push(value);
        }
      }
      jsonString.push(row);
    }

    let csvContent = 'data:text/csv;charset=utf-8,';

    jsonString.forEach(function (rowArray) {
      let row = rowArray.join(',');
      csvContent += row + '\r\n';
    });

    let encodedUri = encodeURI(csvContent);
    let link = document.createElement('a');
    link.setAttribute('href', encodedUri);
    link.setAttribute(
        'download',
        data2['judet'] !== undefined
            ? data1['judet'] + '-' + data2['judet'] + '.csv'
            : data1['judet'] + '.csv'
    );
    document.body.appendChild(link); // Required for FF
    link.click();
  };

  svgButton.onclick = function (event) {
    let context = document.getElementById('chart1').getContext('2d');

    tweakLib();
    chartData.options.responsive = false;
    chartData.options.animation = false;

    let svgContext = C2S(1600, 1000);
    svgContext.width = 800;
    svgContext.height = 400;
    // console.log(svgContext);
    let mySvg = new Chart(svgContext, chartData);
    // console.log(svgContext.getSvg());

    let dl = document.createElement('a');
    // document.body.appendChild(dl); // This line makes it work in Firefox.
    let svg = svgContext.getSvg();
    if (window.ActiveXObject) {
      svgString = svg.xml;
    } else {
      var oSerializer = new XMLSerializer();
      svgString = oSerializer.serializeToString(svg);
    }
    dl.download =
        data2['judet'] !== undefined
            ? data1['judet'] + '-' + data2['judet'] + '.svg'
            : data1['judet'] + '.svg';
    //   return "data:image/svg+xml," + encodeURIComponent(svgAsXML);
    dl.href = 'data:image/svg+xml;utf8,' + encodeURIComponent(svgString);
    dl.click();
  };
}
