
document.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#mapa')) {
        // const lat = 19.465764;
        // const lng = -99.2216225;
        const lat = 19.4657145;
        const lng = -99.2212442;

        const mapa = L.map('mapa').setView([lat, lng], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mapa);
    
        let marker;

        // agregar el pin
        marker = new L.marker([lat, lng], {
            // draggable:true,
            // autoPan:true
        }).addTo(mapa);
        
    }

    
  
});