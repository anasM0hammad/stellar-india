
 var map;
 function initMap() {
   map = new google.maps.Map(document.getElementById('map'), {
     zoom: 5,
     center: new google.maps.LatLng(22.9734, 78.6569),
     mapTypeId: 'roadmap'
   });

   var iconBase = './img/map-logo.png';
   var icons = {
     info: {
       icon: iconBase 
     }
   };

   var features = [
     {
       position: new google.maps.LatLng(28.7041, 77.1025),
       type: 'info'
     }, {
       position: new google.maps.LatLng(12.9716, 77.5946),
       type: 'info'
     }, {
       position: new google.maps.LatLng(31.3260, 75.5762),
       type: 'info'
     }, {
       position: new google.maps.LatLng(23.0225, 72.5714),
       type: 'info'
     }, {
       position: new google.maps.LatLng(17.3850, 78.4867),
       type: 'info'
     }, {
       position: new google.maps.LatLng(18.5204, 73.8567),
       type: 'info'
     }, {
       position: new google.maps.LatLng(19.0760, 72.8777),
       type: 'info'
     }, {
       position: new google.maps.LatLng(17.6868, 83.2185),
       type: 'info'
     },
      {
       position: new google.maps.LatLng(17.6868, 83.2185),
       type: 'info'
     }
   ];

   // Create markers.
   features.forEach(function(feature) {
     var marker = new google.maps.Marker({
       position: feature.position,
       icon: icons[feature.type].icon,
       map: map
     });
   });
 }

