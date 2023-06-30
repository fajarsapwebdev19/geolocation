<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .map{
            max-width: 100%;
            width: 100%;
        }
    </style>
</head>
<body>

<iframe class="map" src="https://www.google.com/maps?q=-6.1305192,106.6243826&h1=id;z=14&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <h1 id="view"></h1>

    latitude : <input type="text" id="lat">
    <br>
    longitute : <input type="text" id="long">

<script>
    if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        console.log("Koordinat: (" + latitude + ", " + longitude + ")");
        
        var view = document.getElementById("view");

        var long = document.getElementById("long");
        var lat = document.getElementById("lat");

        long.value = longitude;
        lat.value = latitude;

        view.innerHTML = "Titik Kordinat Anda : " + latitude + "," + longitude;
    }, function(error) {
        console.log("Gagal mengambil koordinat: " + error.message);
    });
    } else {
    console.log("Geolocation tidak didukung oleh browser ini");
    }
</script>
</body>
</html>