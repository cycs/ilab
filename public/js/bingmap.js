var map;
function GetMap() {
    console.log("get map");

    var bingStyle = {
      "elements": {
          "road" : { "fillColor": "#b892db" },
      }
    };

    map = new Microsoft.Maps.Map('#myMap', {
        credentials: 'AtubFyYmW6LqLX9baFR4eYZB61CYObCVHAaa-33fRvhwVhRwEXnsKijb_3a5yDgM',
        center: new Microsoft.Maps.Location(50.5011, 4.465),
        customMapStyle : bingStyle,
        mapTypeId: Microsoft.Maps.MapTypeId.grayscale,
        zoom: 7,
        showDashboard: false
    });

    map.setView({ labelOverlay: Microsoft.Maps.LabelOverlay.hidden});
    // map.Polygon
    // console.log(Microsoft.Maps);

    var soils = fetch('./api/soils').then(response => response.json()).then(display);
    function display(edenias){
        console.log(edenias);
        edenias.forEach(edenia => {
            let location = new Microsoft.Maps.Location(edenia.lat, edenia.long);
            let pin = new Microsoft.Maps.Pushpin(location, {
                title: edenia.name
            });

            map.entities.push(pin);

        });

    }

}
