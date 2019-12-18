<?php
	require_once("includes/header.php");
?>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="includes/style.css">
    <script type="text/javascript"
          src="https://maps.googleapis.com/maps/api/js?key="></script>
  <script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
		<title>SpaceX Raketų Sistema</title>
		<meta content="">
</head>

<body style="text-align:center">
<h1 >Pasirinkite pakilimo vietą</h1>
<div class="container" id="map"></div>
<div><br>
<button id="confirmPosition">Patvirtinti poziciją</button>
<br>
<label>Dabartinė pozicija: <span id="onIdlePositionView"></span></label>
<br>
<label>Pasirinkta pozicija: <span id="onClickPositionView"></span></label>
<br>
<a href='index.php' class="btn btn-dark"> Atgal </a> <a href='index.php' class="btn btn-dark"> Toliau </a>
</div>
<script>
  // Get element references
  var confirmBtn = document.getElementById('confirmPosition');
  var onClickPositionView = document.getElementById('onClickPositionView');
  var onIdlePositionView = document.getElementById('onIdlePositionView');

  // Initialize locationPicker plugin
  var lp = new locationPicker('map', {
    setCurrentPosition: true, // You can omit this, defaults to true
  }, {
    zoom: 15 // You can set any google map options here, zoom defaults to 15
  });

  // Listen to button onclick event
  confirmBtn.onclick = function () {
    // Get current location and show it in HTML
    var location = lp.getMarkerPosition();
    onClickPositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
  };

  // Listen to map idle event, listening to idle event more accurate than listening to ondrag event
  google.maps.event.addListener(lp.map, 'idle', function (event) {
    // Get current location and show it in HTML
    var location = lp.getMarkerPosition();
    onIdlePositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
  });
</script>

</body>
<?php
	require_once("includes/footer.php");
?>