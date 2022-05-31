<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('HistoricMapBar') }}
        </h2>	
    </x-slot>
			<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          height: 470px;
		  width: 700px;
        }
    </style>
</head>
<body>
<div id="artykuly">
                <a href="/article/1" >Artykuł 1</a>
				<hr>
				 <a href="/article/2" >Artykuł 2</a>
				 <hr>
				  <a href="/article/3" >Artykuł 3</a>
				  <hr>
				   <a href="/article/4" >Artykuł 4</a>
				   <hr>
				    <a href="/article/5" >Artykuł 5</a>
					<hr>
					 <a href="/article/6" >Artykuł 6</a>
					 <hr>
					  <a href="/article/7" >Artykuł 7</a>
		</div>
					
		<style type="text/css">
        #artykuly{
        float: right; 
		font-size: 18px;
		  background-color: #ccc;
		  width: 645px;
        }
		</style>
		
    <div class="container mt-5">
        <div id="map"></div>
    </div>
  
    <script type="text/javascript">
        function initMap() {
          const myLatLng = { lat: 50.0541, lng: 19.9354 };
		  const myLatLng2 = { lat: 51.759445, lng: 19.457216};
		  const myLatLng3 = { lat: 53.1324886, lng: 23.1688403 };
		  const myLatLng4 = { lat: 53.428543, lng: 14.552812};
		  const myLatLng5 = { lat: 54.372158, lng: 18.638306 };
          const map = new google.maps.Map(document.getElementById("map"), {
			mapId: "7657aa4d539d898d",
            zoom: 6,
            center: myLatLng2,
          });
  
          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "",
          });
		  new google.maps.Marker({
            position: myLatLng2,
            map,
            title: "",
          });
		  new google.maps.Marker({
            position: myLatLng3,
            map,
            title: "",
          });
		  new google.maps.Marker({
            position: myLatLng4,
            map,
            title: "",
          });
		  new google.maps.Marker({
            position: myLatLng5,
            map,
            title: "",
          });
        }
  
        window.initMap = initMap;
    </script>
  
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
		
		<div class="block mb-8">
                <a href="/contact-us" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-1 rounded">Zgłoś błąd</a>
            </div>
</body>
</x-app-layout>
