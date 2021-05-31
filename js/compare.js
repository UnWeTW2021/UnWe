let selects = document.querySelectorAll("select");
let city1 = document.getElementById("city1")
let city2 = document.getElementById("city2")
let month1 = document.getElementById("month1");
let year1 = document.getElementById("year1")
let month2 = document.getElementById("month2");
let year2 = document.getElementById("year2")
let month3 = document.getElementById("month3");
let year3 = document.getElementById("year3")
let month4 = document.getElementById("month3");
let year4 = document.getElementById("year4")
let view = document.getElementById("view");
let data = document.getElementById("data");
let errorMessage = document.getElementsByClassName("error-message")[0];
let chart1 = document.getElementById('chart1').getContext('2d');
let chart2 = document.getElementById('chart2').getContext('2d');
let chart3 = document.getElementById('chart3').getContext('2d');
let chart4 = document.getElementById('chart4').getContext('2d');

var data1,data2;
let apiUrl = "";
let baseUrl="";

Chart.defaults.global.defaultFontFamily = 'Tahoma';
Chart.defaults.global.defaultFontSize = 12;
Chart.defaults.global.defaultFontColor = '#777';




[...selects].forEach(item => {
    item.addEventListener('change', event => {
        renderPage(event);
    })
})

async function getapi(url) {


    const response = await fetch(url);


    var data = await response.json();

  return data;

}

async function renderPage(e) {


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
    console.log(dataValue)
    if (dataValue === 1) {

        baseUrl = "http://localhost/UnWe/api/grupa_varsta/"
    } else if (dataValue === 2) {
        baseUrl = "http://localhost/UnWe/api/grupa_varsta/"

    } else if (dataValue === 3) {
        baseUrl = "http://localhost/UnWe/api/grupa_varsta/"
    } else if (dataValue === 4) {
        baseUrl = "http://localhost/UnWe/api/grupa_varsta/"
    } else {

        errorMessage.innerText = "Alegeti un dataset!"
        return
    }

    if (viewValue ===""){

        errorMessage.innerText = "Alegeti un tip de view!"
        return
    }
    apiUrl = baseUrl + "read_one.php"
    var url = new URL(apiUrl);
    var search_params = url.searchParams;
    if (city1Value === "") {
        errorMessage.innerText = "Selecteaza macar un oras"
        return
    } else {
        errorMessage.innerText = ""
        search_params.set("judet", city1Value)
    }

    if (month1Value === "") {

    } else {
        apiUrl = baseUrl + "read_luna.php"
        url = new URL(apiUrl);
        search_params = url.searchParams;
        search_params.set("judet", city1Value)
        errorMessage.innerText = ""
        search_params.set("luna1", month1Value)
    }
    if (month2Value !== "" && year1Value !== "" && year2Value !== "") {
        search_params.set("an1", year1Value)
        search_params.set("luna2", month2Value)
        search_params.set("an2", year2Value)
        errorMessage.innerText = ""
    } else {
        if (month1Value !== "")
        {
            errorMessage.innerText = "Alegeti un interval corect";
            return;
        }

    }

    url.search = search_params.toString();
    // search_params.set("an1",2019)
    // search_params.set("luna2",2)
    // search_params.set("an2",2019)
    console.log(url.search)
    var new_url = url.toString();
    data1 = await getapi(new_url);
    apiUrl = "";
    if (month1Value === "" && month2Value ===  "" && year1Value === "" && year2Value ===  "" && city2Value !== "") {


        apiUrl=baseUrl + "read_one.php";
        url1 = new URL(apiUrl);
        search_params1 = url1.searchParams;
        search_params1.set("judet", city2Value)
        new_url1 = url1.toString();
        data2 = await getapi(new_url1);

    }
    else if (month1Value !== "" && month2Value !==  "" && year1Value !== "" && year2Value !==  "" && city2Value !== "" && month3Value !== "" && month4Value !==  "" && year3Value !== "" && year4Value !==  ""){
        apiUrl=baseUrl + "read_luna.php";
        url1 = new URL(apiUrl);
        search_params1 = url1.searchParams;
        search_params1.set("judet", city2Value)
        search_params1.set("luna1", month3Value)
        search_params1.set("an1", year3Value)
        search_params1.set("luna2", month4Value)
        search_params1.set("an2", year4Value)
        new_url1 = url1.toString();
        console.log(new_url1)
        data2 = await getapi(new_url1);

    }
    else {data2=""}


    console.log(data1)
    console.log(data2,"outside")
    renderChart(dataValue,viewValue,data1,data2);

}

function renderChart(dataValue,viewValue,data1,data2){

console.warn(dataValue)

    let iframes=document.querySelectorAll("iframe");
  [...iframes].forEach(item=>{
      item.remove(item.selectedIndex);
  })



    let chart100 = new Chart(chart1, {
        type:viewValue,
        data:{
            labels:[ 'Șomeri Femei-Urban ', 'Șomeri Bărbați-Urban'],
            datasets:[{
                label:'Șomeri',
                data:[

                    data1["TOTAL"],
                    data1["25_29_ani"]
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

}