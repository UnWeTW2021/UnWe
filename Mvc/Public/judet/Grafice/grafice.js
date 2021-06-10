async function getapi(url) {
  const response = await fetch(url);
  var data = await response.json();
  return data;
}

async function generateSomeriSex() {
  let someriSexChart = document
    .getElementById('someriSexChart')
    .getContext('2d');
  let judet = document.getElementById('judet');
  judet = judet.innerText;
  // console.log(judet);

  let callUrl = new URL(
    'http://localhost/UnWe/api/medie_rezidenta/read_one.php'
  );
  let search_params = callUrl.searchParams;
  search_params.set('judet', judet);
  callUrl.search = search_params.toString();
  let dataApi = await getapi(callUrl.toString());
  // console.log(dataApi);

  Chart.defaults.global.defaultFontFamily = 'Tahoma';
  Chart.defaults.global.defaultFontSize = 12;
  Chart.defaults.global.defaultFontColor = '#777';

  let someri1Chart = new Chart(someriSexChart, {
    type: 'pie',
    data: {
      labels: ['Total Șomeri Femei', 'Total Șomeri Bărbați'],
      datasets: [
        {
          label: 'Șomeri',
          data: [
            dataApi['TOTAL_SOMERI_FEMEI'],
            dataApi['TOTAL_SOMERI_BARBATI'],
          ],

          backgroundColor: ['#DF9BF6', '#EFF69B'],
          borderWidth: 1,
          borderColor: '#777',
          hoverBorderWidth: 2,
          hoverBorderColor: '#9BAFF6',
        },
      ],
    },
    options: {
      title: {
        display: true,
        text: 'Șomeri în funcție de Sex',
        fontSize: 18,
      },
      legend: {
        display: false,
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
  });
}

async function generateSomeriIndemnizati() {
  let someriIndChart = document
    .getElementById('someriIndChart')
    .getContext('2d');

  let judet = document.getElementById('judet');
  judet = judet.innerText;
  // console.log(judet);

  let callUrl = new URL('http://localhost/UnWe/api/rate_somaj/read_one.php');
  let search_params = callUrl.searchParams;
  search_params.set('judet', judet);
  callUrl.search = search_params.toString();
  let dataApi = await getapi(callUrl.toString());
  // console.log(dataApi);

  Chart.defaults.global.defaultFontFamily = 'Tahoma';
  Chart.defaults.global.defaultFontSize = 12;
  Chart.defaults.global.defaultFontColor = '#777';

  let someri2Chart = new Chart(someriIndChart, {
    type: 'bar',
    data: {
      labels: ['Total Șomeri', 'Șomeri Îndemnizați ', 'Șomeri Neîndemnizați'],
      datasets: [
        {
          label: 'Șomeri',
          data: [
            dataApi['total'],
            dataApi['someri_indemnizati'],
            dataApi['someri_neindemnizati'],
          ],

          backgroundColor: ['#C0D2F3', '#EDADE6', '#ABF69B'],
          borderWidth: 1,
          borderColor: '#44103F',
          hoverBorderWidth: 2,
          hoverBorderColor: '#781534',
        },
      ],
    },
    options: {
      title: {
        display: true,
        text: 'Șomeri - Îndemnizați/Neîndemnizați',
        fontSize: 18,
      },
      legend: {
        display: false,
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
  });
}

async function generateMediuUrban() {
  let someriUrbChart = document
    .getElementById('someriUrbChart')
    .getContext('2d');

  let judet = document.getElementById('judet');
  judet = judet.innerText;
  // console.log(judet);

  let callUrl = new URL(
    'http://localhost/UnWe/api/medie_rezidenta/read_one.php'
  );
  let search_params = callUrl.searchParams;
  search_params.set('judet', judet);
  callUrl.search = search_params.toString();
  let dataApi = await getapi(callUrl.toString());
  // console.log(dataApi);

  Chart.defaults.global.defaultFontFamily = 'Tahoma';
  Chart.defaults.global.defaultFontSize = 12;
  Chart.defaults.global.defaultFontColor = '#777';

  let someri3Chart = new Chart(someriUrbChart, {
    type: 'doughnut',
    data: {
      labels: ['Șomeri Femei-Urban ', 'Șomeri Bărbați-Urban'],
      datasets: [
        {
          label: 'Șomeri',
          data: [
            dataApi['SOMERI_FEMEI_DIN_MEDIUL_URBAN'],
            dataApi['SOMERI_BARBATI_DIN_MEDIUL_URBAN'],
          ],

          backgroundColor: ['#88C0E6', '#f4f4f4'],
          borderWidth: 1,
          borderColor: '#777',
          hoverBorderWidth: 2,
          hoverBorderColor: '#000',
        },
      ],
    },
    options: {
      title: {
        display: true,
        text: 'Șomeri - Mediu Urban',
        fontSize: 18,
      },
      legend: {
        display: false,
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
  });
}

async function generateMediuRural() {
  let someriRuralChart = document
    .getElementById('someriRuralChart')
    .getContext('2d');

  let judet = document.getElementById('judet');
  judet = judet.innerText;
  // console.log(judet);

  let callUrl = new URL(
    'http://localhost/UnWe/api/medie_rezidenta/read_one.php'
  );
  let search_params = callUrl.searchParams;
  search_params.set('judet', judet);
  callUrl.search = search_params.toString();
  let dataApi = await getapi(callUrl.toString());
  // console.log(dataApi);

  Chart.defaults.global.defaultFontFamily = 'Tahoma';
  Chart.defaults.global.defaultFontSize = 12;
  Chart.defaults.global.defaultFontColor = '#777';

  let someri4Chart = new Chart(someriRuralChart, {
    type: 'horizontalBar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
    data: {
      labels: [
        'Total Șomeri Mediu Rural',
        'Șomeri Femei-Rural ',
        'Șomeri Bărbați-Rural',
      ],
      datasets: [
        {
          label: 'Șomeri',
          data: [
            dataApi['TOTAL_SOMERI_DIN_MEDIUL_RURAL'],
            dataApi['SOMERI_FEMEI_DIN_MEDIUL_RURAL'],
            dataApi['SOMERI_BARBATI_DIN_MEDIUL_RURAL'],
          ],

          backgroundColor: ['#69F1EF', '#21BCBA', '#0C918F'],
        },
      ],
    },
    options: {
      title: {
        display: true,
        text: 'Șomeri - Mediu Rural',
        fontSize: 18,
      },
      legend: {
        display: false,
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
  });
}

async function generateNivelEducatie() {
  let someriEducatieChart = document
    .getElementById('someriEducatieChart')
    .getContext('2d');

  let judet = document.getElementById('judet');
  judet = judet.innerText;
  // console.log(judet);

  let callUrl = new URL(
    'http://localhost/UnWe/api/nivelul_educatiei/read_one.php'
  );
  let search_params = callUrl.searchParams;
  search_params.set('judet', judet);
  callUrl.search = search_params.toString();
  let dataApi = await getapi(callUrl.toString());
  // console.log(dataApi);

  Chart.defaults.global.defaultFontFamily = 'Tahoma';
  Chart.defaults.global.defaultFontSize = 12;
  Chart.defaults.global.defaultFontColor = '#777';

  let someri5Chart = new Chart(someriEducatieChart, {
    type: 'pie',
    data: {
      labels: [
        'Fără Studii',
        'Învățământ Primar',
        'Învățământ Gimnazial',
        'Învățământ Liceal',
        'Învățământ Postliceal',
        'Învățământ Profesional',
        'Învățământ Universitar',
      ],
      datasets: [
        {
          label: 'Șomeri',
          data: [
            dataApi['fara_studii'],
            dataApi['invatamant_primar'],
            dataApi['invatamant_gimnazial'],
            dataApi['invatamant_liceal'],
            dataApi['invatamant_postliceal'],
            dataApi['invatamant_profesional_arte_si_meserii'],
            dataApi['invatamant_universitar'],
          ],

          backgroundColor: [
            '#CFEC85',
            '#85ADEC',
            '#ECB885',
            '#D36DBC',
            '#74D36D',
            '#AE8ED8',
            '#8ED8C5',
          ],
        },
      ],
    },
    options: {
      title: {
        display: true,
        text: 'Șomeri - Nivel Educație',
        fontSize: 18,
      },
      legend: {
        display: false,
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
  });
}

async function generateVarsta() {
  let someriVarsteChart = document
    .getElementById('someriVarsteChart')
    .getContext('2d');

  let judet = document.getElementById('judet');
  judet = judet.innerText;
  // console.log(judet);

  let callUrl = new URL('http://localhost/UnWe/api/grupa_varsta/read_one.php');
  let search_params = callUrl.searchParams;
  search_params.set('judet', judet);
  callUrl.search = search_params.toString();
  let dataApi = await getapi(callUrl.toString());
  // console.log(dataApi);

  Chart.defaults.global.defaultFontFamily = 'Tahoma';
  Chart.defaults.global.defaultFontSize = 12;
  Chart.defaults.global.defaultFontColor = '#777';

  let someri6Chart = new Chart(someriVarsteChart, {
    type: 'line',
    data: {
      labels: [
        'Sub 25 ani',
        '25-29 ani',
        '30-39 ani',
        '40-49 ani',
        '50-55 ani',
        'peste 55 ani',
      ],
      datasets: [
        {
          label: 'Șomeri',
          data: [
            dataApi['Sub_25_ani'],
            dataApi['25_29_ani'],
            dataApi['30_39_ani'],
            dataApi['40_49_ani'],
            dataApi['50_55_ani'],
            dataApi['peste_55_ani'],
          ],

          backgroundColor: ['#C0F3E8'],
        },
      ],
    },
    options: {
      title: {
        display: true,
        text: 'Șomeri - Vârste',
        fontSize: 18,
      },
      legend: {
        display: false,
        position: 'right',
        labels: {
          fontColor: '#157078',
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
  });
}

generateVarsta();
generateNivelEducatie();
generateMediuRural();
generateMediuUrban();
generateSomeriIndemnizati();
generateSomeriSex();
