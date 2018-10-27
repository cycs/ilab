var map;
console.log(map);
function GetMap() {
    console.log("get map");
    map = new Microsoft.Maps.Map('#myMap', {
        credentials: 'AtubFyYmW6LqLX9baFR4eYZB61CYObCVHAaa-33fRvhwVhRwEXnsKijb_3a5yDgM',
        center: new Microsoft.Maps.Location(41.264675, -96.041927),
        mapTypeId: Microsoft.Maps.MapTypeId.aerial,
        zoom: 8
    });

}

