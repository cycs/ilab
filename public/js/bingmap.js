var infobox, map;
function GetMap() {
    console.log("get map");
    console.log(Microsoft.Maps.Events);

    // Custom map --> https://msdn.microsoft.com/en-us/library/mt823636.aspx
    var bingStyle = {
      "elements": {
          "water": { "fillColor": "#a1e0ff" },
          "waterPoint": { "iconColor": "#a1e0ff" },
          "transportation": { "strokeColor": "#aa6de0" },
          "road": { "fillColor": "#3e6949" },
          "railway": { "strokeColor": "#a495b2" },
          "structure": { "fillColor": "#ffffff" },
          "runway": { "fillColor": "#ff7fed" },
          "area": { "fillColor": "#f39ebd", "labelVisible":false},
          "political": { "borderStrokeColor": "#fe6850", "borderOutlineColor": "#000000" },
          "point": { "iconColor": "#ffffff", "fillColor": "#FF6FA0", "strokeColor": "#DB4680", "labelVisible":false },
          "transit": { "fillColor": "#AA6DE0" }
      },
      "settings": {
          "landColor": "#FFFFFF",
          "shadedReliefVisible":  true
      },
    };

    map = new Microsoft.Maps.Map('#myMap', {
        credentials: 'AtubFyYmW6LqLX9baFR4eYZB61CYObCVHAaa-33fRvhwVhRwEXnsKijb_3a5yDgM',
        center: new Microsoft.Maps.Location(50.5011, 4.465),
        customMapStyle : bingStyle,
        showDashboard: false,
        //mapTypeId: Microsoft.Maps.MapTypeId.grayscale,
        zoom: 7
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
