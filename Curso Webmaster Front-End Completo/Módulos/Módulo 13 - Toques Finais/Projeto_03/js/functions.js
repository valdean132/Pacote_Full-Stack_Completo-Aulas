window.onload = function(){
    
    var map;

    function initialize(){
        var mapProp = {
            center: new google.maps.LatLng(-3.1024402,-60.0582169),
            scrollwheel: true,
            zoom: 12,
            mapTypeId:google.maps.MapTypeId.RAOUND//SATELLITE
        }

        map = new google.maps.Map(document.getElementById('mapa'),mapProp);
    }

    function addMarKer(lat, long, icon, content, click){
        var latLng = {'lat':lat, 'lng':long}

        var marker = new google.maps.Marker({
            position:latLng,
            map:map,
            icon:icon
        });

        var infoWindow = new google.maps.InfoWindow({
            content:content,
            maxWidth:200,
            pixeOffset: new google.maps.Size(0, 20)
        });

        if(click == true){
            google.maps.event.addListener(marker, 'click', () => {
                infoWindow.open(map, marker);
            });
        }else{
            infoWindow.open(map, marker);
        }
        
        
    }

    initialize();
    var conteudo = '<p style="color:black;font-size:13px;padding:10px 0;border-bottom:1px solid black;">Meu endereço</p>';
    addMarKer(-3.100241, -60.063170, '', conteudo, true);

    setTimeout(function() {
        map.panTo({'lat':-23.550520, 'lng':-46.633309});
        map.setZoom(8);
    },4000);
   
}