function validasi(){
	var kota = document.getElementById('kota');
	if(madeSelectionKota(kota,"Silahkan Pilih Kota")){
		return true;}
	else{
		return false;
	}
}
function madeSelectionKota(elem, helperMsg){
	if(elem.value == "Kota"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}