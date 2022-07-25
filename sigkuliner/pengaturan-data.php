
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tambah Data</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="js/jquery.js"></script>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyD-E7EVcl6AGEbgXxbULpoWIyxtrsqVFxA"></script>
  <script>
    function initialize(){
      
      // Variabel untuk menyimpan informasi (desc)
      var infoWindow = new google.maps.InfoWindow;
      
      var lokasi = new google.maps.LatLng(-1.8456323,109.977800);
      var myOptions = {
        zoom: 16,
        center: lokasi,
        mapTypeId: 'roadmap'
      };
      var peta = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
 

      //posisi awal marker   
      var latLng = new google.maps.LatLng(-1.8456323,109.977800);
      /* buat marker yang bisa di drag lalu 
        panggil fungsi updateMarkerPosition(latLng)
       dan letakan posisi terakhir di id=latitude dan id=longitude
       */
      
      function updateMarkerPosition(latLng) {
        var lat = ""+[latLng.lat()]+"";
        var lng = ""+[latLng.lng()]+"";
        document.getElementById('latitude').value = lat.substring(0, 10);
        document.getElementById('longitude').value = lng.substring(0,10);
      }
      var marker = new google.maps.Marker({
          position : lokasi,
          title : 'lokasi',
          map : peta,
          draggable : true
        });
         
      updateMarkerPosition(latLng);
      google.maps.event.addListener(marker, 'drag', function() {
       // ketika marker di drag, otomatis nilai latitude dan longitude
       //menyesuaikan dengan posisi marker 
         updateMarkerPosition(marker.getPosition());
      });

      $("#bersihakan").click(function(){
        $("#nama").val("");
        $("#alamat").val("");
        $("#latitude").val("");
        $("#longitude").val("");
        $("#harga").val("");
        $("#jamBuka").val("");
        $("#jamTutup").val("");
        $("#deskripsi").val("");
      });
      
    }
  </script>
</head>
<body onload="initialize()">
  </header>
  <!-- HEADER -->
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="logo text-center">
          <img src="gambar/kuliner.png" alt="">
						<h1>SISTEM INFORMASI GEOGRAFIS <br>KULINER KETAPANG</h1>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /header -->
	<!-- NAVBAR -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php?rangeHarga=&filter=Filter">SIG Nasi Goreng</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="pengaturan-data.php">Pengaturan Data</a></li>
				<li><a href="tentang-kami.php">Tentang Kami</a></li> 
			</ul>
     
    </div>
  </nav>

  <section>
    <div class="container">
      <div class="row" id="tambah-data">
        <!-- Input data -->
        <div class="col-md-6">
          <form class="form-horizontal" method="post" action="tambahData.php" enctype="multipart/form-data">
            <fieldset>

            <!-- Form Name -->
            <legend>Tambah data lokasi warung</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nama">Nama Warung</label>  
              <div class="col-md-6">
              <input id="nama" name="nama" placeholder="masukkan nama" class="form-control input-md" required="" type="text">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="alamat">Alamat</label>  
              <div class="col-md-8">
              <input id="alamat" name="alamat" placeholder="masukkan alamat" class="form-control input-md" required="" type="text">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="latitude">Latitude</label>  
              <div class="col-md-5">
              <input id="latitude" name="latitude" placeholder="masukkan latitude" class="form-control input-md" required="" type="text">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="longitude">Longitude</label>  
              <div class="col-md-5">
              <input id="longitude" name="longitude" placeholder="masukkan longitude" class="form-control input-md" required="" type="text">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="harga">Harga</label>  
              <div class="col-md-5">
              <input id="harga" name="harga" placeholder="masukkan kisaran harga" class="form-control input-md" required="" type="text">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="jamBuka">Jam Buka</label>  
              <div class="col-md-4">
              <input id="jamBuka" name="jamBuka" placeholder="masukkan jam buka" class="form-control input-md" required="" type="text">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="jamTutup">Jam Tutup</label>  
              <div class="col-md-4">
              <input id="jamTutup" name="jamTutup" placeholder="masukkan jam tutup" class="form-control input-md" required="" type="text">
                
              </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="deskripsi">Deskripsi</label>
              <div class="col-md-4">                     
                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
              </div>
            </div>

            <!-- File Button --> 
            <div class="form-group">
              <label class="col-md-4 control-label" for="gambar">Foto Warung</label>
              <div class="col-md-4">
                <input id="upload_gambar" name="upload_gambar" class="input-file" type="file">
              </div>

            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="simpan"></label>
              <div class="col-md-8">
                <input type="submit" id="simpan" name="simpan" value="Simpan" class="btn btn-success">
                <input type="button" id="bersihakan" name="bersihkan" value="Bersihkan" class="btn btn-danger">
              </div>
            </div>

            </fieldset>
          </form>
        </div>

        <!-- Peta -->
        <div class="col-md-6">
          <div  id="map_canvas" style="width:100%; height:500px"></div>
        </div>
      </div>
    </div>
  </section>

 
  <!-- FOOTER -->
  <!-- FOOTER -->
	<footer>
		<div class="container-fluid">
			<div class="col-md-12">
				<p class="text-center">Copyright @2022 - Dela, Herdianti, Dati</p>
			</div>
		</div>
	</footer>
  
</body>
</html>




