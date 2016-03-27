<script
src="http://maps.googleapis.com/maps/api/js">
</script>
<script>
  var myCenter=new google.maps.LatLng(-5.23215,119.50951);

  function initialize()
  {
  var mapProp = {
    center:myCenter,
    zoom:13,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    };

  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

  var marker=new google.maps.Marker({
    position:myCenter,
    });

  marker.setMap(map);

  var infowindow = new google.maps.InfoWindow({
    content:"Hello World!"
    });

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="container" class="opacity">
	<h2>Peta Lokasi</h2>
	<div id="googleMap" style="width:100%;height:380px;"></div>
	<div class="content">
		<br><br>
		<h2>Contact Us</h2>
		<p>Cras vehicula, enim ac rutrum imperdiet, tellus nibh sodales magna, at mollis odio mi a urna. Aliquam augue augue, sodales eu condimentum a, scelerisque eget purus. Sed suscipit mattis.</p>
		<br><br><br>
		
		<div class="form-container">
			<form class='forminput' method="post">
				<fieldset>
					<ol>
						<li class="form-row text-input-row">
							<label>Name*</label>
							<input type="text" name="name" value="" class="text-input required" required/>
						</li>
						<li class="form-row text-input-row">
							<label>Email*</label>
							<input type="email" name="email" value="" class="text-input required email" required/>
						</li>
						<li class="form-row text-area-row">
							<label>Message*</label>
							<textarea name="message" class="text-area required" required></textarea>
						</li>
						<li class="form-row hidden-row">
							<input type="hidden" name="hidden"/>
						</li>
						<li class="button-row">
							<input type="submit" value="Submit" name="submit" class="btn-submit"/>
						</li>
					</ol>
				</fieldset>
			</form>
			<div class="response"></div>
		</div>
		<br>
	</div>

<div class="sidebar">
    <div class="sidebar-box">
		<br><br>
		<h4>Address</h4>
		<p>
			Jl. Raya Malino KM 18 borongloe Kab. Gowa Kode Pos: 92172
			<br>
			<br>
			<span class="lite1">Fax:</span> (0411)861712<br>
			<span class="lite1">Tel:</span> (0411)8210088<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(0411)8210001<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(0411)8210333<br>
			<span class="lite1">E-mail:</span> upt_makassar@postel.go.id
		</p>
    </div>
</div>
<div class="clear"></div>

<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$waktu = date('Y-m-d H:i:s');
		
		$sql = "INSERT INTO contact(name,email,message,waktu,new) VALUES('$nama','$email','$message','$waktu',0)";
		$result = $conn->query($sql);
		
		echo "<script> window.location.href=''; </script>";
	}
?>