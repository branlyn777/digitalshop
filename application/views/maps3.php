<!DOCTYPE html>
<html>
<head>
   <title></title>
       <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<body>


      <h3>Desarrollado por Branlyn Mamani Oyardo</h3>
          <div id="map"></div>
      <script type="text/javascript">
      var divmapa=document.getElementById("map");



      // Initialize and add the map
      function initMap() {
         var options={
            zoom:13,
            center:{lat: -17.388360, lng: -66.155764}
         }
         //nuevo mapa
         var map=new google.maps.Map(divmapa,options);

         //Agregando un Macardor

           var plazacolon = {lat: -17.388360, lng: -66.155764};
           var marker = new google.maps.Marker({
            position: plazacolon, 
            map: map, 
            icon:'https://www.freepnglogos.com/uploads/lokasi-logo-png/lokasi-logo-house-location-marker-icon-transparent-png-svg-vector-24.png'
         });
           //Agrendo una ventana de Información
           var infoWindow = new google.maps.infoWindow({
            content: '<h1>Plaza Colón</h1>';
           });
           marker.addListener('click',function(){
            infoWindow.open(map,marker);
           });
           google.maps.event.trigger(marker,'click');


      }
    </script>

        <script defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc_XblPUysUdhmPcu_2klBO3STmS1Vdrw&callback=initMap">
       </script>

</body>
</html>