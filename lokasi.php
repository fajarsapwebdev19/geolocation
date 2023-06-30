<!DOCTYPE html>
<html>
<head>
  <title>Mendapatkan Lokasi Geografis dengan jQuery</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  <h1>Lokasi Anda:</h1>
  <p id="location"></p>

  

  <script>
    // Fungsi untuk menampilkan lokasi
    function showLocation(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;

      // Menampilkan koordinat lokasi pengguna
      $('#location').text('Latitude: ' + latitude + ', Longitude: ' + longitude);
    }

    // Fungsi untuk menampilkan pesan kesalahan
    function showError(error) {
      switch(error.code) {
        case error.PERMISSION_DENIED:
          $('#location').text('Akses geolokasi ditolak oleh pengguna.');
          break;
        case error.POSITION_UNAVAILABLE:
          $('#location').text('Informasi lokasi tidak tersedia.');
          break;
        case error.TIMEOUT:
          $('#location').text('Waktu permintaan geolokasi habis.');
          break;
        case error.UNKNOWN_ERROR:
          $('#location').text('Terjadi kesalahan yang tidak diketahui.');
          break;
      }
    }

    // Menggunakan jQuery untuk mendapatkan lokasi geografis
    $(document).ready(function() {
      if (navigator.geolocation) {
        // Menggunakan metode geolocation untuk mendapatkan lokasi
        navigator.geolocation.getCurrentPosition(showLocation, showError);
      } else {
        $('#location').text('Geolocation tidak didukung oleh browser Anda.');
      }
    });
  </script>
</body>
</html>
