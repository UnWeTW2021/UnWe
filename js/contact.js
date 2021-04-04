const mymap = L.map('image-contact').setView([47.157179425453954, 27.587091255892698], 16);

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