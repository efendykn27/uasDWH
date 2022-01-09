<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan prodak</title>
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
        <div style="background-color: #efefef">
		
	</div>
		
        <div style="background-color: #efefef">
            <div class="container">
                <div class="section-card" style="padding: 32px 0px 20px 0px">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col s3">
                                </div>
                                <div class="col s6">      
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="row">
                                                <center><h4>Masukan Bobot</h4></center>
                                                <br>
                                                <form class = "col s12" method="POST" action="hasil.php">
                                                    <div class = "row">
                                                        <div class="col s12">

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Vendor Produk</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="vendorProduk">
                                                                    <option value = "" disabled selected style="color: #eceff1;"><i>Vendor Produk</i></option>
                                                                    <option value = "1">1</option>
                                                                    <option value = "2">2</option>
                                                                    <option value = "3">3</option>
                                                                    <option value = "4">4</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                            <b>Jenis produk</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="jenisProduk">
                                                                    <option value = "" disabled selected>Jenis Produk</option> 
                                                                    <option value = "1">1</option>
                                                                    <option value = "2">2</option>
                                                                    <option value = "3">3</option>
                                                                    <option value = "4">4</option>

                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Skala Produk</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="skalaProduk">
                                                                    <option value = "" disabled selected>Skala Produk</option>
                                                                    <option value = "1">1</option>
                                                                    <option value = "2">2</option>
                                                                    <option value = "3">3</option>
                                                                    <option value = "4">4</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Harag</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="harga">
                                                                    <option value = "" disabled selected>Harga</option>
                                                                    <option value = "1">1</option>
                                                                    <option value = "2">2</option>
                                                                    <option value = "3">3</option>
                                                                    <option value = "4">4</option>

                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Kuantitas</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="kuantitas">
                                                                    <option value = "" disabled selected>Kuantitas</option>
                                                                    <option value = "1">1</option>
                                                                    <option value = "2">2</option>
                                                                    <option value = "3">3</option>
                                                                    <option value = "4">4</option>
                                                                </select>
                                                            </div>
                                                            
                                                        </div>  
                                                    <center><button type="submit" class="waves-effect waves-light btn" style="margin-bottom:-46px;">Hitung</button></center>	
                                                </form>       
                                            </div>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="col s3">
                                </div>
                            </div>
                        </li>
                    </ul>	     
                </div>
            </div>
            <div class="container">
		    <div class="section-card" style="padding:20px 20% 24px 20%;">
				<ul>
				    <li>
						<div class="row">
						<div class="card">
						<div class="card-content">
									<center><h4 style="margin-bottom: 15px; margin-top: 8px;">Keterangan Bobot</h4></center>
									<table  class="hover dataTablesCustom" style="width:100% ; padding-top: 20px;">
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>Bobot </center></th>
													<th><center>Keterangan</center></th>
												</tr>
											</thead>
											<tbody>											
												<tr>
													<td><center>1</center></td>
													<td><center>Tidak terlalu Penting</center></td>					
												</tr>
                                                <tr>
													<td><center>2</center></td>
													<td><center>Cukup Penting</center></td>					
												</tr>
                                                <tr>
													<td><center>3</center></td>
													<td><center>Penting</center></td>					
												</tr>
                                                <tr>
													<td><center>4</center></td>
													<td><center>Sangat Penting</center></td>					
												</tr>
											
											</tbody>
									</table>
									</div>
									
							</div>
							
                        </div>
				    </li>
				</ul>	     
	    	</div>
		</div>
        </div>
        <!-- Rekomendasi Laptop End -->
    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan prodak 2021.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  $(document).ready(function(){
	      $('.parallax').parallax();
          $('select').material_select();
          $('.modal').modal();
	    });
    </script>
</body>
</html>