
    var trigger = true;
    var navbut = document.getElementById('nav_but');
    var menu = document.getElementById('burger_nav');
    var side = document.querySelector('.sidebar');

    // navbut.addEventListener('click',()=>{
    //     if(trigger === true){
    //         menu.style.transform = 'translateX(0)';
    //         trigger = false;
    //     }
    //     else{
    //         menu.style.transform = 'translateX(110%)';
    //         trigger =true;
    //     }

    // });

   


// var links =document.getElementsByTagName('a');
// Array.prototype.forEach.call(links, child => {
//      child.addEventListener('click', (event)=>{
//          event.preventDefault();
//      });
// });

function initMap() {
    // Styles a map in night mode.
    var pos ={lat:50.444607 , lng:30.509784};
   
    var myMap = new google.maps.Map(document.getElementById("map"), {
      center: pos,
      zoom: 17,
      styles: [
        {elementType: 'geometry', stylers: [{color: '#282828'}]},
        {elementType: 'labels.text.stroke', stylers: [{color: '#fff'}]},
        {elementType: 'labels.text.fill', stylers: [{color: '#ffffff'}]},
        {
          featureType: 'administrative.locality',
          elementType: 'labels.text.fill',
          stylers: [{color: '#ffffff'}]
        },
        {
          featureType: 'poi',
          elementType: 'labels.text.fill',
          stylers: [{color: '#ffffff'}]
        },
        {
          featureType: 'poi.park',
          elementType: 'geometry',
          stylers: [{color: '#282828'}]
        },
        {
          featureType: 'poi.park',
          elementType: 'labels.text.fill',
          stylers: [{color: '#ffffff'}]
        },
        {
          featureType: 'road',
          elementType: 'geometry',
          stylers: [{color: '#383838'}]
        },
        {
          featureType: 'road',
          elementType: 'geometry.stroke',
          stylers: [{color: '#000'}]
        },
        {
          featureType: 'road',
          elementType: 'labels.text.fill',
          stylers: [{color: '#fff'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry',
          stylers: [{color: '#383838'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry.stroke',
          stylers: [{color: '#3838381f2835'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'labels.text.fill',
          stylers: [{color: '#fff'}]
        },
        {
          featureType: 'transit',
          elementType: 'geometry',
          stylers: [{color: '#282828'}]
        },
        {
          featureType: 'transit.station',
          elementType: 'labels.text.fill',
          stylers: [{color: '#ffffff'}]
        },
        {
          featureType: 'water',
          elementType: 'geometry',
          stylers: [{color: '#eeb111'}]
        },
        {
          featureType: 'water',
          elementType: 'labels.text.fill',
          stylers: [{color: '#ffffff'}]
        },
        {
          featureType: 'water',
          elementType: 'labels.text.stroke',
          stylers: [{color: '#eeb111'}]
        }
      ]
    });

var icon = {
url: "https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678111-map-marker-512.png", // url
scaledSize: new google.maps.Size(50, 50), // scaled size

};
var marker = new google.maps.Marker({
position: pos,
map: myMap,
title:"Київський коледж зв'язку",
icon: icon,
size: new google.maps.Size(100, 100),
animation: google.maps.Animation.DROP,
    });
  }
