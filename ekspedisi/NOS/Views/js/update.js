
function validasi() {
	var namaPengirim = document.getElementById('namaPengirim');
	var teleponPengirim = document.getElementById('teleponPengirim');
	var namaPenerima = document.getElementById('namaPenerima');
	var teleponPenerima = document.getElementById('teleponPenerima');
	var alamatPenerima = document.getElementById('alamatPenerima');
	var kodePos = document.getElementById('posPenerima');
	var namaBarang = document.getElementById('namaBarang');
	var jenisBarang = document.getElementById('jenisBarang');
	var berat = document.getElementById('beratBarang');
	
	
		if(notEmpty(namaPengirim,"Harap tuliskan NAMA PENGIRIM")){
			if(notEmpty(teleponPengirim, "Harap tuliskan NOMOR TELEPON PENGIRIM")){
				if(isNumeric(teleponPengirim, "Inputan pada NOMOR TELEPON harus berupa NUMERIK")){
					if(notEmpty(namaPenerima, "Harap tuliskan NAMA PENERIMA")){
						if(notEmpty(teleponPenerima, "Harap tuliskan NOMOR TELEPON PENERIMA")){
							if(isNumeric(teleponPenerima, "Inputan pada NOMOR TELEPON harus berupa NUMERIK")){
								if(notEmpty(alamatPenerima, "Harap tuliskan ALAMAT PENERIMA")){
									if(notEmpty(kodePos, "Harap tuliskan KODE POS")){
										if(isNumeric(kodePos, "Inputan pada KODE POS harus berupa NUMERIK")){
											if(notEmpty(namaBarang, "Harap tuliskan NAMA BARANG")){
												if(notEmpty(jenisBarang, "Harap tuliskan JENIS BARANG")){
													if(notEmpty(Berat, "Harap tuliskan BERAT BARANG")){
													
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
		return false;
}

function notEmpty(elem, output){
    if(elem.value.length == 0){
    alert(output);
	elem.focus();
    return false;
    }
	return true;
}


function isNumeric(elem, output){
    var numericExpression = /^[0-9]+$/;
    if(elem.value.match(numericExpression)){
        return true;
    }
	else{
		alert(output);
		elem.focus();
		return false;
    }
}


 function check(elem, output){
    for (var i = 0, len = elem.length; i < len; i++) {
          if (radios[i].checked) {
			return true;
		}
    }
	alert(output);
    return false;
 }