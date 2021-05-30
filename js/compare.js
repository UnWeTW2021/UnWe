let selects = document.querySelectorAll("select");
let city1 = document.getElementById("city1")
let month1 = document.getElementById("month1");
let city2 = document.getElementById("city2")
let month2 = document.getElementById("month2");
let view = document.getElementById("view");
let data = document.getElementById("data");
let errorMessage = document.getElementsByClassName("error-message")[0];
var url = new URL;

let apiUrl = "";


[...selects].forEach(item => {
    item.addEventListener('change', event => {
        renderPage(event);
    })
})

async function getapi(url) {


    const response = await fetch(url);


    var data = await response.json();
    console.log(data);
    if (response) {

    }

}

function renderPage(e) {
    console.log(e)
    let city1Value = city1.value;
    let month1Value = month1.value;
    let city2Value = city2.value;
    let month2Value = month2.value;
    let viewValue = view.value;
    let dataValue = parseInt(data.value);
    console.log(dataValue)
    if (dataValue === 1) {

        apiUrl = "http://localhost:3000/api/grupa_varsta/read_luna.php"
    } else if (dataValue === 2) {
        apiUrl = "http://localhost:3000/api/grupa_varsta/read_luna.php"

    } else if (dataValue === 3) {
        apiUrl = "http://localhost:3000/api/grupa_varsta/read_luna.php"
    } else if (dataValue === 4) {
        apiUrl = "http://localhost:3000/api/grupa_varsta/read_luna.php"
    } else {

        errorMessage.innerText = "Alegeti un dataset!"
        return
    }
url=apiUrl;
    var search_params = url.searchParams;
    if (viewValue === "line") {

        apiUrl = "http://localhost:3000/api/grupa_varsta/read_luna.php"
    } else if (viewValue === "bar") {
        apiUrl = "http://localhost:3000/api/grupa_varsta/read_luna.php"

    } else if (viewValue === "radar") {
        apiUrl = "http://localhost:3000/api/grupa_varsta/read_luna.php"
    } else if (viewValue === "donut") {
        apiUrl = "http://localhost:3000/api/grupa_varsta/read_luna.php"
    } else {

        errorMessage.innerText = "Alegeti un tip de view!"
        return
    }

if(city1Value===""){
    errorMessage.innerText = "Selecteaza macar un oras"
    return
}else{
    search_params.set("judet",city1Value)
}

if (month1Value === "") {
        errorMessage.innerText = "Selecteaza o luna"
        return
}else {
    search_params.set("luna1",month1Value)
}




}

// getapi(apiUrl);