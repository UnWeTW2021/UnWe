let listWrapper = document.getElementsByClassName("list-wrapper")[0];
let table = document.getElementById("list");
let tableResponsive=document.getElementsByClassName("table-responsive")[0];
let adminSelect=document.getElementsByClassName("admin-select-form")[0];
var data1="";

let form=document.getElementById("admin-form")
let grupaVarstaAdmin=document.getElementsByClassName("grupa-varsta-admin")[0];
let medieRezidentaAdmin=document.getElementsByClassName("medie-rezidenta-admin")[0];
let nivelulEducatieiAdmin=document.getElementsByClassName("nivelul-educatiei-admin")[0];
let rateSomajAdmin=document.getElementsByClassName("rate-somaj-admin")[0];
let errorMessage = document.getElementsByClassName("error-message")[0];

let apiUrl
import {getapi, postData} from "../js/utils.js";
const medieVarsta=["judet","TOTAL","Sub_25_ani","25_29_ani","30_39_ani","40_49_ani","50_55_ani","peste_55_ani","luna","an"]
const medieRezidenta=["JUDET","NUMAR_TOTAL_SOMERI","NUMAR_TOTAL_SOMERI_FEMEI","NUMAR_TOTAL_SOMERI_BARBATI","NUMAR_TOTAL_SOMERI_DIN_MEDIUL_URBAN","NUMAR_SOMERI_FEMEI_DIN_MEDIUL_URBAN","NUMAR_SOMERI_BARBATI_DIN_MEDIUL_URBAN","NUMAR_TOTAL_SOMERI_DIN_MEDIUL_RURAL","NUMAR_SOMERI_FEMEI_DIN_MEDIUL_RURAL","NUMAR_SOMERI_BARBATI_DIN_MEDIUL_RURAL","luna","an"]
const nivelEducatie=["JUDET","Total_someri_din_care","fara_studii","invatamant_primar","invatamant_gimnazial","invatamant_liceal","invatamant_postliceal","invatamant_profesionalarte_si_meserii","invatamant_universitar","luna","an"]
const rateSomaj=["JUDET","Numar_total_someri","Numar_total_someri_femei","Numar_total_someri_barbati","Numar_someri_indemnizati","Numar_someri_neindemnizati","Rata_somajului_","Rata_somajului_Feminina_","Rata_somajului_Masculina_","luna","an"]

form.classList.add("hidden");
grupaVarstaAdmin.classList.add("hidden");
medieRezidentaAdmin.classList.add("hidden");
nivelulEducatieiAdmin.classList.add("hidden");
rateSomajAdmin.classList.add("hidden");

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
let tables=document.querySelectorAll("table");
    [...tables].forEach(item=>{
        item.remove(item.selectedIndex);
    })
    let adminSelectValue=parseInt(adminSelect.value);
    let newTable=document.createElement("table")
    let thead=document.createElement("thead");
    let tr=document.createElement("tr");
    let tbody=document.createElement("tbody");
    if(adminSelectValue===1){
  form.classList.remove("hidden")

  grupaVarstaAdmin.classList.remove("hidden")


      apiUrl="http://localhost/UnWe/api/grupa_varsta/read.php"
     for (let i=0;i<medieVarsta.length;i++)
     {
         let th=document.createElement("tr");
         th.innerText=medieVarsta[i];
         tr.appendChild(th);
     }
     thead.appendChild(tr);
     newTable.appendChild(thead);
        data1 = await getapi(apiUrl);
        if(data1!=="")
        {



            console.warn("aici2")
            console.log(data1)
            console.warn(data1.grupa_varsta.length)
            // table.innerHTML = "";


            for (let i = 0; i < data1.grupa_varsta.length; i++) {
                console.warn("aici3")
                let row = document.createElement("tr");
                row.innerHTML = ' <th scope="col">' +
                    data1.grupa_varsta[i].judet + '</th>  <th scope="col">' +
                    data1.grupa_varsta[i].TOTAL + '</th> <th scope="col">' +
                    data1.grupa_varsta[i].Sub_25_ani + '</th>  <th scope="col">' +
                    data1.grupa_varsta[i]._25_29_ani + ' </th> <th scope="col">' +
                    data1.grupa_varsta[i]._30_39_ani + ' </th> <th scope="col">' +
                    data1.grupa_varsta[i]._40_49_ani + ' </th> <th scope="col">' +
                    data1.grupa_varsta[i]._50_55_ani + '</th>';
                tbody.appendChild(row);
            }
            newTable.appendChild(tbody);
            tableResponsive.appendChild(newTable)
        }
    }
    else if(adminSelectValue===2){
        form.classList.remove("hidden")
        medieRezidentaAdmin.classList.remove("hidden")
        apiUrl="http://localhost/UnWe/api/medie_rezidenta/read.php"
        for (let i=0;i<medieRezidenta.length;i++)
        {
            let th=document.createElement("tr");
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
                row.innerHTML = ' <th scope="col">' +
                    data1.medie_rezidenta[i].JUDET + '</th>  <th scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_SOMERI_BARBATI_DIN_MEDIUL_RURAL + '</th> <th scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_SOMERI_BARBATI_DIN_MEDIUL_URBAN + '</th>  <th scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_SOMERI_FEMEI_DIN_MEDIUL_RURAL + ' </th> <th scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_SOMERI_FEMEI_DIN_MEDIUL_URBAN + ' </th> <th scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_TOTAL_SOMERI + ' </th> <th scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_TOTAL_SOMERI_BARBATI + ' </th> <th scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_TOTAL_SOMERI_DIN_MEDIUL_RURAL + ' </th> <th scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_TOTAL_SOMERI_DIN_MEDIUL_URBAN + ' </th> <th scope="col">' +
                    data1.medie_rezidenta[i].NUMAR_TOTAL_SOMERI_FEMEI + ' </th> <th scope="col">' +
                    data1.medie_rezidenta[i].luna + ' </th> <th scope="col">' +
                    data1.medie_rezidenta[i].an + '</th>';
                tbody.appendChild(row);
            }
            newTable.appendChild(tbody);
            tableResponsive.appendChild(newTable)
        }


    }
    else if(adminSelectValue===3){
        form.classList.remove("hidden")
        nivelulEducatieiAdmin.classList.remove("hidden")
        apiUrl="http://localhost/UnWe/api/nivelul_educatiei/read.php"
        for (let i=0;i<nivelEducatie.length;i++)
        {
            let th=document.createElement("tr");
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
                row.innerHTML = ' <th scope="col">' +
                    data1.nivelul_educatiei[i].JUDET + '</th>  <th scope="col">' +
                    data1.nivelul_educatiei[i].TOTAL + '</th> <th scope="col">' +
                    data1.nivelul_educatiei[i].fara_studii + '</th>  <th scope="col">' +
                    data1.nivelul_educatiei[i].invatamant_primar + ' </th> <th scope="col">' +
                    data1.nivelul_educatiei[i].invatamant_gimnazial + ' </th> <th scope="col">' +
                    data1.nivelul_educatiei[i].invatamant_liceal + ' </th> <th scope="col">' +
                    data1.nivelul_educatiei[i].invatamant_postliceal + ' </th> <th scope="col">' +
                    data1.nivelul_educatiei[i].invatamant_profesional_arte_si_meserii + ' </th> <th scope="col">' +
                    data1.nivelul_educatiei[i].invatamant_universitar + ' </th> <th scope="col">' +
                    data1.nivelul_educatiei[i].luna + ' </th> <th scope="col">' +
                    data1.nivelul_educatiei[i].an + '</th>';
                tbody.appendChild(row);
            }
            newTable.appendChild(tbody);
            tableResponsive.appendChild(newTable)
        }


    }    else if(adminSelectValue===4){
        form.classList.remove("hidden")
        rateSomajAdmin.classList.remove("hidden")
        apiUrl="http://localhost/UnWe/api/rate_somaj/read.php"
        for (let i=0;i<rateSomaj.length;i++)
        {
            let th=document.createElement("tr");
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
                row.innerHTML = ' <th scope="col">' +
                    data1.rate_somaj[i].judet + '</th>  <th scope="col">' +
                    data1.rate_somaj[i].TOTAL + '</th> <th scope="col">' +
                    data1.rate_somaj[i].total_someri_femei + '</th>  <th scope="col">' +
                    data1.rate_somaj[i].total_someri_barbati + ' </th> <th scope="col">' +
                    data1.rate_somaj[i].Numar_someri_indemnizati + ' </th> <th scope="col">' +
                    data1.rate_somaj[i].Numar_someri_neindemnizati + ' </th> <th scope="col">' +
                    data1.rate_somaj[i].Rata_somajului_ + ' </th> <th scope="col">' +
                    data1.rate_somaj[i].Rata_somajului_Feminina_ + ' </th> <th scope="col">' +
                    data1.rate_somaj[i].Rata_somajului_Masculina_ + ' </th> <th scope="col">' +
                    data1.rate_somaj[i].luna + ' </th> <th scope="col">' +
                    data1.rate_somaj[i].an + '</th>';
                tbody.appendChild(row);
            }
            newTable.appendChild(tbody);
            tableResponsive.appendChild(newTable)
        }


    }
    else{
  errorMessage.innerText="Selecteaza macar un dataset";
    }



}

form.addEventListener('submit', (event) => {
    event.preventDefault();
    console.log("trimis");
    let sendData=[]
    let adminSelectValue=parseInt(adminSelect.value);
    if(adminSelectValue===1){

    }
    else if(adminSelectValue===2){

    }else if(adminSelectValue===3){

    }else if(adminSelectValue===4){

    }


    postData('http://localhost/UnWe/api/login/login.php', sendData)
        .then(data => {
            console.log(data);
            if(data.success===0) {

                errorMessage.innerText=data.message;

            }
            if(data.success===1){
                errorMessage.innerText=data.message;
            }
        });

});
