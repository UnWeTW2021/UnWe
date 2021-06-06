if(localStorage.getItem('token')==null)
    window.location.replace("login.php");

let listWrapper = document.getElementsByClassName("list-wrapper")[0];
let table = document.getElementById("list");
let tableResponsive=document.getElementsByClassName("table-responsive")[0];
let adminSelect=document.getElementsByClassName("admin-select-form")[0];
var data1="";

let form=document.getElementById("admin-form-wrapper")
let grupaVarstaAdmin=document.getElementById("grupa-varsta");
let medieRezidentaAdmin=document.getElementById("medie-rezidenta");
let nivelulEducatieiAdmin=document.getElementById("nivelul-educatiei");
let rateSomajAdmin=document.getElementById("rate-somaj");
let errorMessage = document.getElementsByClassName("error-message")[0];
var deleteURL=""
let apiUrl
import {getapi, postData,deleteData} from "../js/utils.js";
const medieVarsta=["judet","TOTAL","Sub 25 ani","25 29 ani","30 39 ani","40 49 ani","50 55 ani","peste 55 ani","luna","an"]
const medieRezidenta=["JUDET","NUMAR TOTAL SOMERI","NUMAR TOTAL SOMERI FEMEI","NUMAR TOTAL SOMERI BARBATI","NUMAR TOTAL SOMERI DIN MEDIUL URBAN","NUMAR SOMERI FEMEI DIN MEDIUL URBAN","NUMAR SOMERI BARBATI DIN MEDIUL URBAN","NUMAR TOTAL SOMERI DIN MEDIUL RURAL","NUMAR SOMERI FEMEI DIN MEDIUL RURAL","NUMAR SOMERI BARBATI DIN MEDIUL RURAL","luna","an"]
const nivelEducatie=["JUDET","Total someri din care","fara studii","invatamant primar","invatamant gimnazial","invatamant liceal","invatamant postliceal","invatamant profesionalarte si meserii","invatamant universitar","luna","an"]
const rateSomaj=["JUDET","Numar total someri","Numar total someri femei","Numar total someri barbati","Numar someri indemnizati","Numar someri neindemnizati","Rata somajului ","Rata somajului Feminina ","Rata somajului Masculina ","luna","an"]

var page=1;
var number=25;
if(screen.width<1100)
    number=5;
var params = {page:page, number:number}
var results ;
const prevBtn=document.getElementById("prev");
const nextBtn=document.getElementById("next");
let pagination=document.getElementsByClassName("pagination")[0];




form.classList.add("hidden");
grupaVarstaAdmin.classList.add("hidden");
medieRezidentaAdmin.classList.add("hidden");
nivelulEducatieiAdmin.classList.add("hidden");
rateSomajAdmin.classList.add("hidden");
pagination.classList.add("hidden")
function removeLine(i){
    console.log("delete")
}
prevBtn.addEventListener('click',event=>{

    if(page!==1)
    {
    page=page-1;
     params = {page:page, number:number}
    renderPage()
    }
})
nextBtn.addEventListener('click',event=>{
console.log(page,"actuialpage")
   if(results/number>page-1) {
       console.log(results,"oldres")
       page = page + 1;
       params = {page: page, number: number}
       renderPage()
   }
})


adminSelect.addEventListener('change', event => {
    renderPage(event);
})


async function renderPage(e) {


    errorMessage.innerText="";
    form.classList.add("hidden");
    grupaVarstaAdmin.classList.add("hidden");
    medieRezidentaAdmin.classList.add("hidden");
    nivelulEducatieiAdmin.classList.add("hidden");
    rateSomajAdmin.classList.add("hidden");
    pagination.classList.add("hidden")
let tables=document.querySelectorAll("table");
    [...tables].forEach(item=>{
        item.remove(item.selectedIndex);
    })
    let adminSelectValue=parseInt(adminSelect.value);
    let newTable=document.createElement("table")
    newTable.classList.add("table")
    let thead=document.createElement("thead");
    let tr=document.createElement("tr");
    let tbody=document.createElement("tbody");




    if(adminSelectValue===1){
deleteURL="http://localhost/UnWe/api/grupa_varsta/delete.php"
newTable.classList.add("grupa")
  grupaVarstaAdmin.classList.remove("hidden")

        pagination.classList.remove("hidden")
      apiUrl=new URL("http://localhost/UnWe/api/grupa_varsta/read_paginate.php");
        Object.keys(params).forEach(key => apiUrl.searchParams.append(key, params[key]))
        console.log(apiUrl)
     for (let i=0;i<medieVarsta.length;i++)
     {
         let th=document.createElement("th");
         th.innerText=medieVarsta[i];
         tr.appendChild(th);
     }
     thead.appendChild(tr);
     newTable.appendChild(thead);
        data1 = await getapi(apiUrl);
        console.log(data1)
        if(data1!=="")
        {
  results=data1.results;
  console.log(results,"resits")


            console.warn("aici2")
            console.log(data1)
            console.warn(data1.grupa_varsta.length,"length")
            // table.innerHTML = "";


            for (let i = 0; i < data1.grupa_varsta.length; i++) {
                console.warn("aici3")
                let row = document.createElement("tr");
                row.innerHTML = ' <td scope="col">' +
                    data1.grupa_varsta[i].judet + '</td>  <td scope="col">' +
                    data1.grupa_varsta[i].TOTAL + '</td> <td scope="col">' +
                    data1.grupa_varsta[i].Sub_25_ani + '</td>  <td scope="col">' +
                    data1.grupa_varsta[i]._25_29_ani + ' </td> <td scope="col">' +
                    data1.grupa_varsta[i]._30_39_ani + ' </td> <td scope="col">' +
                    data1.grupa_varsta[i]._40_49_ani + ' </td> <td scope="col">' +
                    data1.grupa_varsta[i]._50_55_ani + ' </td> <td scope="col">' +
                    data1.grupa_varsta[i].peste_55_ani + ' </td> <td scope="col">' +
                    data1.grupa_varsta[i].luna + ' </td> <td scope="col">' +
                    data1.grupa_varsta[i].an + ' </td> <td scope="col">' +
                    '  <form class=deleteRow id="row'+i+'">' +
                    '<input class="hidden" type="text" name="judet" value='+data1.grupa_varsta[i].judet+'> ' +
                    '<input class="hidden"  type="number" name="luna" value='+data1.grupa_varsta[i].luna+'> '+
                    '<input  class="hidden" type="number" name="an" value='+data1.grupa_varsta[i].an+'> '+
                    '<button type=submit>Delete</button></td>';




                tbody.appendChild(row);
            }
            newTable.appendChild(tbody);
            tableResponsive.appendChild(newTable)
            form.classList.remove("hidden")
        }
    }
    else if(adminSelectValue===2){
        deleteURL="http://localhost/UnWe/api/medie_rezidenta/delete.php"
        newTable.classList.add("medie")
        pagination.classList.remove("hidden")
        form.classList.remove("hidden")
        medieRezidentaAdmin.classList.remove("hidden")
        apiUrl=new URL("http://localhost/UnWe/api/medie_rezidenta/read_paginate.php")
        Object.keys(params).forEach(key => apiUrl.searchParams.append(key, params[key]))
        for (let i=0;i<medieRezidenta.length;i++)
        {
            let th=document.createElement("th");
            th.innerText=medieRezidenta[i];
            tr.appendChild(th);
        }
        thead.appendChild(tr);
        newTable.appendChild(thead);

        data1 = await getapi(apiUrl);
        if(data1!=="")
        {



            console.warn("aici2")
            console.log(data1)
            console.warn(data1.medie_rezidenta.length)
            // table.innerHTML = "";


            for (let i = 0; i < data1.medie_rezidenta.length; i++) {
                console.warn("aici3")
                let row = document.createElement("tr");
                row.innerHTML = ' <td scope="col">' +
                    data1.medie_rezidenta[i].JUDET + '</td>  <td scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_SOMERI_BARBATI_DIN_MEDIUL_RURAL + '</td> <td scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_SOMERI_BARBATI_DIN_MEDIUL_URBAN + '</td>  <td scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_SOMERI_FEMEI_DIN_MEDIUL_RURAL + ' </td> <td scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_SOMERI_FEMEI_DIN_MEDIUL_URBAN + ' </td> <td scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_TOTAL_SOMERI + ' </td> <td scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_TOTAL_SOMERI_BARBATI + ' </td> <td scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_TOTAL_SOMERI_DIN_MEDIUL_RURAL + ' </td> <td scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_TOTAL_SOMERI_DIN_MEDIUL_URBAN + ' </td> <td scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_TOTAL_SOMERI_FEMEI + ' </td> <td scope="col">' +
                    data1.medie_rezidenta[i].luna + ' </td> <td scope="col">' +
                    data1.medie_rezidenta[i].an + ' </td> <td scope="col">' +
                    '  <form class=deleteRow id="row'+i+'">' +
                    '<input class="hidden" type="text" name="judet" value='+data1.medie_rezidenta[i].JUDET+'> ' +
                    '<input class="hidden"  type="number" name="luna" value='+data1.medie_rezidenta[i].luna+'> '+
                    '<input  class="hidden" type="number" name="an" value='+data1.medie_rezidenta[i].an+'> '+
                    '<button type=submit>Delete</button></td>';
                tbody.appendChild(row);
            }
            newTable.appendChild(tbody);
            tableResponsive.appendChild(newTable)
        }


    }
    else if(adminSelectValue===3){
        deleteURL="http://localhost/UnWe/api/nivelul_educatiei/delete.php"
        newTable.classList.add("nivel")
        pagination.classList.remove("hidden")
        form.classList.remove("hidden")
        nivelulEducatieiAdmin.classList.remove("hidden")
        apiUrl=new URL("http://localhost/UnWe/api/nivelul_educatiei/read_paginate.php");
        Object.keys(params).forEach(key => apiUrl.searchParams.append(key, params[key]))
        for (let i=0;i<nivelEducatie.length;i++)
        {
            let th=document.createElement("th");
            th.innerText=nivelEducatie[i];
            tr.appendChild(th);
        }
        thead.appendChild(tr);
        newTable.appendChild(thead);

        data1 = await getapi(apiUrl);
        if(data1!=="")
        {



            console.warn("aici2")
            console.log(data1)
            // console.warn(data1.nivel_educatie.length)
            // table.innerHTML = "";


            for (let i = 0; i < data1.nivelul_educatiei.length; i++) {
                console.warn("aici3")
                let row = document.createElement("tr");
                row.innerHTML = ' <td scope="col">' +
                    data1.nivelul_educatiei[i].JUDET + '</td>  <td scope="col">' +
                    data1.nivelul_educatiei[i].TOTAL + '</td> <td scope="col">' +
                    data1.nivelul_educatiei[i].fara_studii + '</td>  <td scope="col">' +
                    data1.nivelul_educatiei[i].invatamant_primar + ' </td> <td scope="col">' +
                    data1.nivelul_educatiei[i].invatamant_gimnazial + ' </td> <td scope="col">' +
                    data1.nivelul_educatiei[i].invatamant_liceal + ' </td> <td scope="col">' +
                    data1.nivelul_educatiei[i].invatamant_postliceal + ' </td> <td scope="col">' +
                    data1.nivelul_educatiei[i].invatamant_profesional_arte_si_meserii + ' </td> <td scope="col">' +
                    data1.nivelul_educatiei[i].invatamant_universitar + ' </td> <td scope="col">' +
                    data1.nivelul_educatiei[i].luna + ' </td> <td scope="col">' +
                    data1.nivelul_educatiei[i].an + ' </td> <td scope="col">' +
                    '  <form class=deleteRow id="row'+i+'">' +
                    '<input class="hidden" type="text" name="judet" value='+data1.nivelul_educatiei[i].JUDET+'> ' +
                    '<input class="hidden"  type="number" name="luna" value='+data1.nivelul_educatiei[i].luna+'> '+
                    '<input  class="hidden" type="number" name="an" value='+data1.nivelul_educatiei[i].an+'> '+
                    '<button type=submit>Delete</button></td>';
                tbody.appendChild(row);
            }
            newTable.appendChild(tbody);
            tableResponsive.appendChild(newTable)
        }


    }    else if(adminSelectValue===4){
        deleteURL="http://localhost/UnWe/api/rate_somaj/delete.php"
        newTable.classList.add("rate")
        pagination.classList.remove("hidden")
        form.classList.remove("hidden")
        rateSomajAdmin.classList.remove("hidden")
        apiUrl=new URL("http://localhost/UnWe/api/rate_somaj/read_paginate.php");
        Object.keys(params).forEach(key => apiUrl.searchParams.append(key, params[key]))
        for (let i=0;i<rateSomaj.length;i++)
        {
            let th=document.createElement("th");
            th.innerText=rateSomaj[i];
            tr.appendChild(th);
        }
        thead.appendChild(tr);
        newTable.appendChild(thead);

        data1 = await getapi(apiUrl);
        if(data1!=="")
        {



            console.warn("aici2")
            console.log(data1)
            // console.warn(data1.nivel_educatie.length)
            // table.innerHTML = "";


            for (let i = 0; i < data1.rate_somaj.length; i++) {
                console.warn("aici3")
                let row = document.createElement("tr");
                row.innerHTML = ' <td scope="col">' +
                    data1.rate_somaj[i].judet + '</td>  <td scope="col">' +
                    data1.rate_somaj[i].TOTAL + '</td> <td scope="col">' +
                    data1.rate_somaj[i].total_someri_femei + '</td>  <td scope="col">' +
                    data1.rate_somaj[i].total_someri_barbati + ' </td> <td scope="col">' +
                    data1.rate_somaj[i].Numar_someri_indemnizati + ' </td> <td scope="col">' +
                    data1.rate_somaj[i].Numar_someri_neindemnizati + ' </td> <td scope="col">' +
                    data1.rate_somaj[i].Rata_somajului_ + ' </td> <td scope="col">' +
                    data1.rate_somaj[i].Rata_somajului_Feminina_ + ' </td> <td scope="col">' +
                    data1.rate_somaj[i].Rata_somajului_Masculina_ + ' </td> <td scope="col">' +
                    data1.rate_somaj[i].luna + ' </td> <td scope="col">' +
                    data1.rate_somaj[i].an + ' </td> <td scope="col">' +
                    '  <form class=deleteRow id="row'+i+'">' +
                    '<input class="hidden" type="text" name="judet" value='+data1.rate_somaj[i].judet+'> ' +
                    '<input class="hidden"  type="number" name="luna" value='+data1.rate_somaj[i].luna+'> '+
                    '<input  class="hidden" type="number" name="an" value='+data1.rate_somaj[i].an+'> '+
                    '<button type=submit>Delete</button></td>';
                tbody.appendChild(row);
            }
            newTable.appendChild(tbody);
            tableResponsive.appendChild(newTable)
        }


    }
    else{
  errorMessage.innerText="Selecteaza macar un dataset";
    }
    var deleteForms=document.querySelectorAll('.deleteRow');
    [...deleteForms].forEach(item => {
        item.addEventListener('submit', event => {
            event.preventDefault();
            console.log(item.id)
            const data = getData(item.id);
            console.log(JSON.stringify(data));

            deleteData(deleteURL,data)
                .then(data => {
                    console.log(data);
                    if(data.success===0) {

                        errorMessage.innerText=data.message;

                    }
                    if(data.success===1){
                        errorMessage.innerText=data.message;

                    }
                    renderPage();
                    errorMessage.innerText="Sters cu SUCCES"
                });

            setTimeout(function(){
                errorMessage.innerText="";
            }, 3000);
        })
    })
    if(page===1){
        prevBtn.classList.add("hidden")
    }
    else{prevBtn.classList.remove("hidden")}
    if(results/number<page) {nextBtn.classList.add("hidden")
    }
    else {
        nextBtn.classList.remove("hidden")
    }
if(screen.width<1100)
{
    console.log("tabel res")
    window.setMobileTable("table")
}
}

grupaVarstaAdmin.addEventListener('submit', (event) => {
    event.preventDefault();
    const data = getData('grupa-varsta');
    console.log(JSON.stringify(data));
    postData('http://localhost/UnWe/api/grupa_varsta/create.php',data)
        .then(data => {
            console.log(data);
            if(data.success===0) {

                message.innerText=data.message;

            }
            if(data.success===1){
                message.innerText=data.message;

            }
            renderPage()
            errorMessage.innerText="Creat in baza de date";
        });



    setTimeout(function(){
        errorMessage.innerText="";
        }, 3000);


});
medieRezidentaAdmin.addEventListener('submit', (event) => {
    event.preventDefault();
    const data = getData('medie-rezidenta');
    console.log(JSON.stringify(data));
    errorMessage.innerText="Creat in baza de date";
    postData('http://localhost/UnWe/api/medie_rezidenta/create.php',data)
        .then(data => {
            console.log(data);
            if(data.success===0) {

                message.innerText=data.message;

            }
            if(data.success===1){
                message.innerText=data.message;

            }
            renderPage()
            errorMessage.innerText="Creat in baza de date";
        });
    setTimeout(function(){
        errorMessage.innerText="";
    }, 3000);

});
nivelulEducatieiAdmin.addEventListener('submit', (event) => {
    event.preventDefault();
    const data = getData('nivelul-educatiei');
    console.log(JSON.stringify(data));
    postData('http://localhost/UnWe/api/nivelul_educatiei/create.php',data)
        .then(data => {
            console.log(data);
            if(data.success===0) {

                message.innerText=data.message;

            }
            if(data.success===1){
                message.innerText=data.message;

            }
            renderPage()
            errorMessage.innerText="Creat in baza de date";
        });

    setTimeout(function(){
        errorMessage.innerText="";
    }, 3000);

});
rateSomajAdmin.addEventListener('submit', (event) => {
    event.preventDefault();
    const data = getData('rate-somaj');
    console.log(JSON.stringify(data));
    postData('http://localhost/UnWe/api/rate_somaj/create.php',data)
        .then(data => {
            console.log(data);
            if(data.success===0) {

                message.innerText=data.message;

            }
            if(data.success===1){
                message.innerText=data.message;

            }
            renderPage()
            errorMessage.innerText="Creat in baza de date";
        });

    setTimeout(function(){
        errorMessage.innerText="";
    }, 3000);

});

const generateObj = (obj, arr, val) => {
    if (arr.length === 1) {
        obj[arr[0]] = val;
        return;
    }
    if (!obj[arr[0]]) {
        obj[arr[0]] = {};
    }
    const restArr = arr.splice(1);
    generateObj(obj[arr[0]], restArr, val);
}
const getData = (id) => {
    const form = document.getElementById(id);
    const inputCollection = form.getElementsByTagName('input');
    const inputArray = [...inputCollection];
    const data = {};
    inputArray.map(input => {
        const { name, value } = input;
        const splitName = name.split('.');
        generateObj(data, splitName, value);
    })
    return data;
}

window.setMobileTable = function(selector) {
    // if (window.innerWidth > 600) return false;
    const tableEl = document.querySelector(selector);
    console.log(tableEl)
    const thEls = tableEl.querySelectorAll('thead th');
    const tdLabels = Array.from(thEls).map(el => el.innerText);
    console.log(tdLabels)
    tableEl.querySelectorAll('tbody tr').forEach( tr => {
        Array.from(tr.children).forEach(
            (td, ndx) => {
                if (tdLabels[ndx] !== undefined)
                    td.setAttribute('label', tdLabels[ndx])
                else td.setAttribute('label'," ")
            } );
    });
}