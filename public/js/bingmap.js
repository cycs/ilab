var infobox, map;
function GetMap() {
    console.log("get map");
    console.log(Microsoft.Maps.Events);
    console.log(document.getElementById('myMap'));

    // Custom map --> https://msdn.microsoft.com/en-us/library/mt823636.aspx
    var bingStyle = {
      "elements": {
          "water": { "fillColor": "#c7ecff" },
          "waterPoint": { "iconColor": "#7fc490" },
          "transportation": { "visible": false, "strokeColor": "#ddb99f" },
          "road": { "fillColor": "#d6f2df" },
          "railway": { "strokeColor": "#3e6949" },
          "structure": { "fillColor": "#ffffff" },
          "runway": { "fillColor": "#9effc4" },
          "area": { "visible": false, "fillColor": "#ffffff", "labelVisible": false},
          "political": { "borderStrokeColor": "#90cd92", "borderOutlineColor": "transparent" },
          "point": { "visible":false, "labelVisible": false },
          "transit": { "fillColor": "#50e092" },
          "forest": { "visible": false },
          "naturalPoint": { "visible": false },
          "military": { "visible": false },
          "medicalBuilding": { "visible": false },
          "medical": { "visible": false },
          "foodPoint": { "visible": false },
          "educationBuilding": { "visible": false },
          "education": { "visible": false },
          "waterPoint": { "visible": false },

          "mapElement": {
              "labelVisible": false,
          }
      },
      "settings": {
          "landColor": "#e0ffdb",
          "shadedReliefVisible":  true
      },
    };

    map = new Microsoft.Maps.Map('#myMap', {
        credentials: 'AtubFyYmW6LqLX9baFR4eYZB61CYObCVHAaa-33fRvhwVhRwEXnsKijb_3a5yDgM',
        center: new Microsoft.Maps.Location(50.5011, 4.465),
        customMapStyle : bingStyle,
        showDashboard: false,
        allowHidingLabelsOfRoad: true,
        //mapTypeId: Microsoft.Maps.MapTypeId.grayscale,
        zoom: 7,
    });

    //map.setView({ labelOverlay: Microsoft.Maps.LabelOverlay.hidden});

    infobox = new Microsoft.Maps.Infobox(map.getCenter(), {
        visible: false
    });
    infobox.setMap(map);


    var soils = fetch('./api/soils').then(response => response.json()).then(display);

    function display(edenias){
        console.log(edenias);
        edenias.forEach(edenia => {
            let location = new Microsoft.Maps.Location(edenia.lat, edenia.long);
            let pin = new Microsoft.Maps.Pushpin(location, {
                icon: './svg/logo_aplat.svg',
                title: edenia.name
            });

            pin.metadata = {
                title:  edenia.name,
                address: edenia.address
            };

            Microsoft.Maps.Events.addHandler(pin, 'click', pushpinClicked);
            map.entities.push(pin);

        });

    }

    // Custom infobox -> https://msdn.microsoft.com/en-us/library/mt750271.aspx
    function pushpinClicked(e){
        console.log(e.target.metadata);
        console.log(e.target.getLocation());

        infobox.setOptions({
            location: e.target.getLocation(),
            title: e.target.metadata.title,
            description: e.target.metadata.address,
            visible: true
        });
    }

}
