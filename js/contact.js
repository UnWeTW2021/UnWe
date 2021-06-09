const mymap = L.map('image-contact').setView([47.157179425453954, 27.587091255892698], 16);
import {getapi, getapi2} from "../js/utils.js";

L.tileLayer('https://api.mapbox.com/styles/v1/bobo23/ckirtoy5p0b6f19ozjboyriot/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoiYm9ibzIzIiwiYSI6ImNraXJxdXdpNjBxaXMzMW55a2poeGZvNmQifQ.H30CPV7ZbMWi_XClZYEVHg', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);
var marker = L.marker([47.157179425453954, 27.587091255892698]).addTo(mymap);
marker.bindPopup("<h1>UnWe</h1>").openPopup();


let url=new URL("https://unwe.herokuapp.com/contact_mail.php")
let errorMessage=document.getElementById('error-message')
let contactForm=document.getElementById('contact-form');

contactForm.addEventListener('submit',event => submitForm(event));

async  function submitForm(event){
    event.preventDefault();
   let obj= Object.values(contactForm).reduce((obj,field) => { obj[field.name] = field.value; return obj }, {})
console.log(obj)


    Object.keys(obj).forEach(key => url.searchParams.append(key, obj[key]))
        console.log(url)

     let   data1 = await getapi2(url);
        console.log(data1.status)
        // url.searchParams.append()
if(data1.status===200){
    errorMessage.innerText="Trimis cu succes"
}
        else errorMessage.innerText="A aparut o problema la trimitere"

}

// const form = document.getElementById('contact-form');
// form.addEventListener('submit', mysubmitHandler);

// function mysubmitHandler(event) {
//     event.preventDefault();
// }