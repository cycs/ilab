@extends('layouts.app')

@section('styleSite')
    <link href="{{ asset('css/site.css') }}"  rel="stylesheet"></link>
    @endsection
@section('content')
    <div id="myMap" style='position:relative;width:1200px;height:400px;'></div>
    <div class="hello"></div>
@endsection

@section('bingmap_script')
    <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AtubFyYmW6LqLX9baFR4eYZB61CYObCVHAaa-33fRvhwVhRwEXnsKijb_3a5yDgM' async defer></script>
    <script type="text/javascript">
       /* var map;

        function GetMap() {
            console.log("get map");
            map = new Microsoft.Maps.Map('#myMap', {
                credentials: 'AtubFyYmW6LqLX9baFR4eYZB61CYObCVHAaa-33fRvhwVhRwEXnsKijb_3a5yDgM',
                center: new Microsoft.Maps.Location(41.264675, -96.041927),
                mapTypeId: Microsoft.Maps.MapTypeId.aerial,
                zoom: 10
            });

            console.log(map);

        }*/
    </script>
    <script src="{{ asset('js/bingmap.js') }}"></script>
    <script src="{{ asset('js/site.js') }}"></script>
@endsection