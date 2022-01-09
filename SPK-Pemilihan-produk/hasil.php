<?php 
session_start();
include('koneksi.php');

$W1	= $_POST['vendorProduk'];
$W2	= $_POST['jenisProduk'];
$W3	= $_POST['skalaProduk'];
$W4	= $_POST['harga'];
$W5	= $_POST['kuantitas'];

//Pembagi Normalisasi
function pembagiNM($matrik){
	for($i=0;$i<5;$i++){
		$pangkatdua[$i] = 0;
		for($j=0;$j<sizeof($matrik);$j++){
			$pangkatdua[$i] = $pangkatdua[$i] + pow($matrik[$j][$i],2);}
		$pembagi[$i] = sqrt($pangkatdua[$i]);
	}
	return $pembagi;
}

//Normalisasi
function Transpose($squareArray) {

    if ($squareArray == null) { return null; }
    $rotatedArray = array();
    $r = 0;

    foreach($squareArray as $row) {
        $c = 0;
        if (is_array($row)) {
            foreach($row as $cell) { 
                $rotatedArray[$c][$r] = $cell;
                ++$c;
            }
        }
        else $rotatedArray[$c][$r] = $row;
        ++$r;
    }
    return $rotatedArray;
}

function JarakIplus($aplus,$bob){
	for ($i=0;$i<sizeof($bob);$i++) {
		$dplus[$i] = 0;
		for($j=0;$j<sizeof($aplus);$j++){
			$dplus[$i] = $dplus[$i] + pow(($aplus[$j] - $bob[$i][$j]),2);
		}
		$dplus[$i] = round(sqrt($dplus[$i]),4);
	}
	return $dplus;
}

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Sistem Pendukung Keputusan Pemilihan produk</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
	<div class="navbar-fixed">
		<nav>
			<div class="container">

				<div class="nav-wrapper">
				<ul class="left" style="margin-left: -52px;">
									<li><a class="active" href="index.php">Rekomendasi</a></li>
								</ul>
				</div>

			</div>
		</nav>
	</div>
	<!-- Body Start -->

	<!-- Daftar Laptop Start -->
	<div style="background-color: #efefef">
		<div class="container">
			<div class="section-card" style="padding: 20px 0px">
				<!--   Icon Section   -->


				<center>
					<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">HASIL REKOMENDASI PRODUK TRANSPORTASI</h4>
				</center>
				<ul>
					<li>
						<div class="row">
							<div class="card">
								<div class="card-content">
									<h5 style="margin-bottom: 16px; margin-top: -6px;">Matrik produk</h5>
									<table class="responsive-table">

										<thead style="border-top: 1px solid #d0d0d0;">
											<tr>
												<th><center>Alternatif</center></th>
												<th><center>Nama Produk (Benefit)</center></th>
												<th><center>Jenis Produk (Benefit)</center></th>
												<th><center>Skala Produk (Benefit)</center></th>
												<th><center>Harga (Benefit)</center></th>
												<th><center>Kuantitas (Benefit)</center></th>
											</tr>
										</thead>
										<tbody>
											<?php
											$query=mysqli_query($selectdb,"SELECT * FROM fakta_prodak");
											$no=1;
											while ($fakta_prodak=mysqli_fetch_array($query)) {
												$Matrik[$no-1]=array($fakta_prodak['vendorProduk_angka'],$fakta_prodak['jenisProduk_angka'],$fakta_prodak['skalaProduk_angka'],$fakta_prodak['harga_angka'],$fakta_prodak['kuantitas_angka'] );
												?>
												<tr>
													<td><center><?php echo $fakta_prodak['namaProduk'] ?></center></td>
													<td><center><?php echo $fakta_prodak['vendorProduk_angka'] ?></center></td>
													<td><center><?php echo $fakta_prodak['jenisProduk_angka'] ?></center></td>
													<td><center><?php echo $fakta_prodak['skalaProduk_angka'] ?></center></td>
													<td><center><?php echo $fakta_prodak['harga_angka'] ?></center></td>
													<td><center><?php echo $fakta_prodak['kuantitas_angka'] ?></center></td>
												</tr>
												<?php
												$no++;
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</li>
				</ul>


				<center>
					<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">Matriks ternormalisasi, R:</h4>
				</center>
				<ul>
					<li>
						<div class="row">
							<div class="card">
								<div class="card-content">
									<h5 style="margin-bottom: 16px; margin-top: -6px;">Matriks Normalisasi "R"</h5>
									<table class="responsive-table">

										<thead style="border-top: 1px solid #d0d0d0;">
											<tr>
												<th><center>Alternatif</center></th>
												<th><center>C1 (Benefit)</center></th>
												<th><center>C2 (Benefit)</center></th>
												<th><center>C3 (Benefit)</center></th>
												<th><center>C4 (Benefit)</center></th>
												<th><center>C5 (Benefit)</center></th>
											</tr>
										</thead>
										<tbody>
											<?php
											$query=mysqli_query($selectdb,"SELECT * FROM fakta_prodak");
											$no=1;
											$pembagiNM=pembagiNM($Matrik);
											while ($fakta_prodak=mysqli_fetch_array($query)) {

												$MatrikNormalisasi[$no-1]=array($fakta_prodak['vendorProduk_angka']/$pembagiNM[0],
													$fakta_prodak['jenisProduk_angka']/$pembagiNM[1],
													$fakta_prodak['skalaProduk_angka']/$pembagiNM[2],
													$fakta_prodak['harga_angka']/$pembagiNM[3],
													$fakta_prodak['kuantitas_angka']/$pembagiNM[4]);

													?>
													<tr>
														<td><center><?php echo $fakta_prodak['namaProduk']  ?></center></td>
														<td><center><?php echo round($fakta_prodak['vendorProduk_angka']/$pembagiNM[0],6)?></center></td>
														<td><center><?php echo round($fakta_prodak['jenisProduk_angka']/$pembagiNM[1],6) ?></center></td>
														<td><center><?php echo round($fakta_prodak['skalaProduk_angka']/$pembagiNM[2],6) ?></center></td>
														<td><center><?php echo round($fakta_prodak['harga_angka']/$pembagiNM[3],6) ?></center></td>
														<td><center><?php echo round($fakta_prodak['kuantitas_angka']/$pembagiNM[4],6) ?></center></td>
													</tr>
													<?php
													$no++;
												}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</li>
					</ul>


					<center>
						<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">BOBOT (W)</h4>
					</center>
					<ul> 
						<li>
							<div class="row">
								<div class="card">
									<div class="card-content">
									<h5 style="margin-bottom: 16px; margin-top: -6px;">BOBOT (W)</h5>
										<table class="responsive-table">
											<thead>
												<tr>
													<th><center>Value Kriteria vendor Produk</center></th>
													<th><center>Value Kriteria Jenis produk</center></th>
													<th><center>Value Kriteria skala Produk</center></th>
													<th><center>Value Kriteria Harga</center></th>
													<th><center>Value Kriteria kuantitas</center></th>
												</tr>
											</thead>
											<tbody>
												<!--count($W)-->
												<tr>
													<td><center><?php echo($W1);?></center></td>
													<td><center><?php echo($W2);?></center></td>
													<td><center><?php echo($W3);?></center></td>
													<td><center><?php echo($W4);?></center></td>
													<td><center><?php echo($W5);?></center></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</li>
					</ul>


					<center>
						<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">Matriks ternormalisasi terbobot, Y:</h4>
					</center>
					<ul>
						<li>
							<div class="row">
								<div class="card">
									<div class="card-content">
										<h5 style="margin-bottom: 16px; margin-top: -6px;">Matriks Normalisasi terBobot "Y"</h5>
										<table class="responsive-table">

											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>Alternatif</center></th>
													<th><center>C1 (Benefit)</center></th>
													<th><center>C2 (Benefit)</center></th>
													<th><center>C3 (Benefit)</center></th>
													<th><center>C4 (Benefit)</center></th>
													<th><center>C5 (Benefit)</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM fakta_prodak");
												$no=1;
												$pembagiNM=pembagiNM($Matrik);
												while ($fakta_prodak=mysqli_fetch_array($query)) {
													
													$NormalisasiBobot[$no-1]=array(
														$MatrikNormalisasi[$no-1][0]*$W1,
														$MatrikNormalisasi[$no-1][1]*$W2,
														$MatrikNormalisasi[$no-1][2]*$W3,
														$MatrikNormalisasi[$no-1][3]*$W4,
														$MatrikNormalisasi[$no-1][4]*$W5 );

														?>
														<tr>
															<td><center><?php echo $fakta_prodak['namaProduk']  ?></center></td>
															<td><center><?php echo round($MatrikNormalisasi[$no-1][0]*$W1,6) ?></center></td>
															<td><center><?php echo round($MatrikNormalisasi[$no-1][1]*$W2,6) ?></center></td>
															<td><center><?php echo round($MatrikNormalisasi[$no-1][2]*$W3,6) ?></center></td>
															<td><center><?php echo round($MatrikNormalisasi[$no-1][3]*$W4,6) ?></center></td>
															<td><center><?php echo round($MatrikNormalisasi[$no-1][4]*$W5,6) ?></center></td>
														</tr>
														<?php
														$no++;
													}
													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</li>
						</ul>


						<center>
							<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">Matrik Solusi ideal positif dan negatif
							</h4>
						</center>
						<ul>
							<li>
								<div class="row">
									<div class="card">
										<div class="card-content">
											<h5 style="margin-bottom: 16px; margin-top: -6px;">Matrik Solusi ideal positif "A+" dan negatif "A-"
											</h5>
											<table class="responsive-table">

												<thead style="border-top: 1px solid #d0d0d0;">
													<tr>
														<th><center></center></th>
														<th><center>Y1 (Benefit)</center></th>
														<th><center>Y2 (Benefit)</center></th>
														<th><center>Y3 (Benefit)</center></th>
														<th><center>Y4 (Benefit)</center></th>
														<th><center>Y5 (Benefit)</center></th>
													</tr>
												</thead>
												<tbody>
													<?php
													$NormalisasiBobotTrans = Transpose($NormalisasiBobot);
													?>
													<tr>
														<?php  
														$idealpositif=array(max($NormalisasiBobotTrans[0]),max($NormalisasiBobotTrans[1]),min($NormalisasiBobotTrans[2]),max($NormalisasiBobotTrans[3]),min($NormalisasiBobotTrans[4]));
														?>
														<td><center><?php echo "Y+" ?> </center></td>
														<td><center><?php echo(round(max($NormalisasiBobotTrans[0]),6));?>&nbsp(max)</center></td>
														<td><center><?php echo(round(max($NormalisasiBobotTrans[1]),6));?>&nbsp(max)</center></td>
														<td><center><?php echo(round(min($NormalisasiBobotTrans[2]),6));?>&nbsp(max)</center></td>
														<td><center><?php echo(round(max($NormalisasiBobotTrans[3]),6));?>&nbsp(max)</center></td>
														<td><center><?php echo(round(min($NormalisasiBobotTrans[4]),6));?>&nbsp(max)</center></td>
													</tr>
													<tr>
														<?php  
														$idealnegatif=array(min($NormalisasiBobotTrans[0]),min($NormalisasiBobotTrans[1]),max($NormalisasiBobotTrans[2]),min($NormalisasiBobotTrans[3]),max($NormalisasiBobotTrans[4]));
														?>
														<td><center><?php echo "Y-" ?> </center></td>
														<td><center><?php echo(round(min($NormalisasiBobotTrans[0]),6));?>&nbsp(min)</center></td>
														<td><center><?php echo(round(min($NormalisasiBobotTrans[1]),6));?>&nbsp(min)</center></td>
														<td><center><?php echo(round(max($NormalisasiBobotTrans[2]),6));?>&nbsp(min)</center></td>
														<td><center><?php echo(round(min($NormalisasiBobotTrans[3]),6));?>&nbsp(min)</center></td>
														<td><center><?php echo(round(max($NormalisasiBobotTrans[4]),6));?>&nbsp(min)</center></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</li>
						</ul>


						<center>
							<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">Jarak antara nilai terbobot setiap alternatif terhadap solusi ideal positif												
							</h4>
						</center>
						<ul>
							<li>
								<div class="row">
									<div class="card" style="margin-left: 320px;margin-right: 320px;">
										<div class="card-content">
											<table class="responsive-table" >

												<thead style="border-top: 1px solid #d0d0d0;">
													<tr>
														<th><center></center></th>
														<th><center>D+</center></th>
														<th><center>D-</center></th>
													</tr>
												</thead>
												<tbody>
													<?php
													$query=mysqli_query($selectdb,"SELECT * FROM fakta_prodak");
													$no=1;
													$Dplus=JarakIplus($idealpositif,$NormalisasiBobot);
													$Dmin=JarakIplus($idealnegatif,$NormalisasiBobot);
													while ($fakta_prodak=mysqli_fetch_array($query)) {

														?>
														<tr>
															<td><center><?php echo $fakta_prodak['namaProduk']  ?></center></td>
															<td><center><?php echo round($Dplus[$no-1],6) ?></center></td>
															<td><center><?php echo round($Dmin[$no-1],6) ?></center></td>
														</tr>
														<?php
														$no++;
													}
													?>
												</tbody>
											</table>

										</div>
									</div>
								</div>
							</li>
						</ul>


						<center>
							<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">Nilai Preferensi untuk Setiap alternatif (V)												
							</h4>
						</center>
						<ul>
							<li>
								<div class="row">
									<div class="card" style="margin-left: 320px;margin-right: 320px;">
										<div class="card-content">
											<table class="responsive-table" >

												<thead style="border-top: 1px solid #d0d0d0;">
													<tr>
														<th><center>Nilai Preferensi "V"</center></th>
														<th><center>Nilai</center></th>
													</tr>
												</thead>
												<tbody>
													<?php
													$query=mysqli_query($selectdb,"SELECT * FROM fakta_prodak");
													$no=1;
													$nilaiV = array();
													while ($fakta_prodak=mysqli_fetch_array($query)) {
														
														array_push($nilaiV, $Dmin[$no-1]/($Dmin[$no-1]+$Dplus[$no-1]));
														?>
														<tr>
															<td><center><?php echo $fakta_prodak['namaProduk'] ?></center></td>
															<td><center><?php echo $Dmin[$no-1]/($Dmin[$no-1]+$Dplus[$no-1]); ?></center></td>
														</tr>
														<?php
														$no++;
													}
													

													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</li>
						</ul>


						<center>
							<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">Nilai Preferensi tertinggi
							</h4>
						</center>
						<ul>
							<li>
								<div class="row">
									<div class="card" style="margin-left: 300px;margin-right: 300px;">
										<div class="card-content">
											<table class="responsive-table" >

												<thead style="border-top: 1px solid #d0d0d0;">
													<tr>
														<th><center>Nilai Preferensi tertinggi</center></th>
														<th></th>
														<th><center>Alternatif Transportasi terpilih</center></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<?php
														$testmax = max($nilaiV);
														for ($i=0; $i < count($nilaiV); $i++) { 
															if ($nilaiV[$i] == $testmax) {
																$query=mysqli_query($selectdb,"SELECT * FROM fakta_prodak where id = $i+1");
																?>
																<td><center><?php echo "V".($i+1); ?></center></td>
																<td><center><?php echo $nilaiV[$i]; ?></center></td>
																<?php while ($user=mysqli_fetch_array($query)) { ?>
																<td><center><?php echo $user['namaProduk']; ?></center></td>
																<?php
															}
														}
													} ?>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<div class="row center" \>
						<a href="index.php" id="download-button" class="waves-effect waves-light btn" style="margin-top: 0px">Hitung Rekomendasi Ulang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Daftar Laptop End -->
		<!-- Body End -->

		<!-- Footer Start -->
		<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
			<div class="container">
				<p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan produk 2021.</p>
			</div>
		</div>
		<!-- Footer End -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.parallax').parallax();
				$('.modal').modal();
			});
		</script>
	</body>
	</html>