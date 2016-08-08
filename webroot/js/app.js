$(document).foundation();

var map = L.map('mapid', {
    center: [46.66107, 0.37462],
    zoom: 15
});

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


var greenturtleIcon = L.icon({
    iconUrl: '../img/marked_footprint.svg',
    shadowUrl: '../img/marked_shadow_footprint.svg',
    iconSize: [175, 200], // size of the icon
    shadowSize: [175, 200], // size of the shadow
    iconAnchor: [73, 145], // point of the icon which will correspond to marker's location
    shadowAnchor: [73, 145], // the same for the shadow
    popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([46.66107, 0.37462], {icon: greenturtleIcon}).addTo(map);
