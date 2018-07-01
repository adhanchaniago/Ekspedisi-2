<!DOCTYPE html>
<html>
<head>
	<title>Detail Transaksi</title>
	<link rel="stylesheet" type="text/css" href="Views/styles/global.css" />
    <script src="Views/js/update.js"></script>  
</head>
<body>
	<div id="header">
        <div class="logo">
            <img id="icon-logo" src="Views/images/nos.png">
        </div>

        <div class="navMenu">
            <ul class="menu">
                <li><a href="#">Admin</a></li>
            </ul>
        </div>
	</div>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li class="add"><a href="index.php?operation=add">Add</a></li>
				<li class="list"><a href="index.php?operation=list">List</a></li>
			</ul>
		</div>

		<div class="content">
            <h1>Update Transaksi <?php print $lists->no_resi; ?></h1>
 
            <div class="wrapper">
             <form id="myForm" role="form" action="" method="POST" onsubmit="return validasi()">
                <p id="section">Pengirim</p> <br>
                    <p id="label">Nama <p>
                    <input type="text" id="namaPengirim" name="namaPengirim" 
                    value="<?php print $lists->nama_pengirim; ?>">
                    <br><br> 

                    <p id="label">Telepon<p>
                    <input type="tel" id="teleponPengirim" name="teleponPengirim"
                    value="<?php print $lists->telepon_pengirim; ?>">
                    <br><br>
                
                <p id="section">Penerima</p> <br>
                    <p id="label">Nama<p>
                    <input type="text" id="namaPenerima" name="namaPenerima"
                    value="<?php print $lists->nama_penerima; ?>">
                    <br><br> 

                    <p id="label">Telepon<p>
                    <input type="tel" id="teleponPenerima" name="teleponPenerima"
                    value="<?php print $lists->telepon_penerima; ?>">
                    <br><br>

                    <p id="label">Alamat Penerima<p>
                    <input type="text" id="alamatPenerima" name="alamatPenerima"
                    value="<?php print $lists->alamat_penerima; ?>">
                    <br><br>

                    <p id="label">Kode Pos<p>
                    <input type="text" id="posPenerima" name="kodePos"
                    value="<?php print $lists->kode_pos; ?>">
                    <br><br>

                <p id="section">Barang</p><br>
                    <p id="label">Nama Barang<p>
                    <input type="text" id="namaBarang" name="namaBarang"
                    value="<?php print $lists->nama_barang; ?>">
                    <br><br> 
                    
                    <p id="label">Jenis Barang<p>
                    <input type="text" id="jenisBarang" name="jenisBarang"
                    value="<?php print $lists->jenis_barang; ?>">
                    <br><br> 

                    <p id="label">Berat<p>
                    <input type="text" id="beratBarang" name="beratBarang"
                    value="<?php print $lists->berat_barang; ?>">
                    <span id="label">Kg<span>
                    <br><br>

                <p id="section">Transaksi</p><br>
                    <p id="label">Jenis Paket<p>
                    <select id="jenisTransaksi" name="jenisTransaksi">
                        <option>Regular</option>
                        <option>Express</option>
                        <option>Flash</option>
                    </select>
                    <br><br>
                    <p id="label">Asal Kota<p>
                    <select id="asalKota" name="asalKota">
                        <option>Batu</option>
                        <option>Bangkalan</option>
                        <option>Banyuwangi</option>
                        <option>Blitar</option>
                        <option>Jember</option>
                        <option>Kediri</option>
                        <option>Lamongan</option>
                        <option>Lumajang</option>
                        <option>Madiun</option>
                        <option>Malang</option>
                        <option>Pasuruan</option>
                        <option>Probolinggo</option>
                        <option>Sidoarjo</option>
                        <option>Situbondo</option>
                        <option>Surabaya</option>
                    </select>
                    <br><br> 

                    <p id="label">Tujuan Kota<p>
                    <select id="tujuan" name="tujuanKota">
                        <option>Batu</option>
                        <option>Bangkalan</option>
                        <option>Banyuwangi</option>
                        <option>Blitar</option>
                        <option>Jember</option>
                        <option>Kediri</option>
                        <option>Lamongan</option>
                        <option>Lumajang</option>
                        <option>Madiun</option>
                        <option>Malang</option>
                        <option>Pasuruan</option>
                        <option>Probolinggo</option>
                        <option>Sidoarjo</option>
                        <option>Situbondo</option>
                        <option>Surabaya</option>
                    </select>
                    <br/><br/>

                    <p id="label">Tanggal Kirim<p>
                    <input type="date" id="tglKirim" name="tglKirim"
                    value="<?php print $lists->tgl_kirim; ?>">
                    <br><br>                    

                    <p id="label">Tanggal Terima<p>
                    <input type="date" id="tglTerima" name="tglTerima"
                    value="<?php print $lists->tgl_terima; ?>">
                    <br><br>                    

					<p id="label">Status<p>
                    <input type="date" id="status" name="status"
                    value="<?php print $lists->status; ?>">
                    <br><br>                                        
                    <input type="hidden" name="idPengirim" value="<?php print $lists->id_pengirim; ?>" />
                    <input type="hidden" name="idPenerima" value="<?php print $lists->id_penerima; ?>" />
                    <input type="hidden" name="idBarang" value="<?php print $lists->id_barang; ?>" />
                    <input type="hidden" name="noResi" value="<?php print $lists->no_resi; ?>" />
                    <input type="hidden" name="form-submitted" value="1" />
                    <p1><input type="submit" name="submit" value="Update"></p1><br>
            </form>
        </div>
    </div>
	</div>
</body>
</html>