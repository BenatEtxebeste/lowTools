// Wait for Leaflet to be loaded before initializing the map
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(() => {
      var map = L.map('map').setView([43.3112, -2.0984], 10); 
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
        maxZoom: 19,
    }).addTo(map);  
    }, 500);
    
    // Puedes agregar marcadores aquí
});

