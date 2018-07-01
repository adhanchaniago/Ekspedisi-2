$(document).ready(function () {
    $("#myForm").validate({
        rules: {
            namaPengirim: {
                required: true
            },
            teleponPengirim: {
                required: true,
                digits: true,
                minlength: 6,
                maxlength: 14
            },
            namaPenerima: {
                required: true
            },
            teleponPenerima: {
                required: true,
                digits: true,
                minlength: 6,
                maxlength: 14
            },
            alamatPenerima: {
                required: true
            },
            posPenerima: {
                required: true
            },
            namaBarang: {
                required: true
            },
            jenisBarang: {
                required: true
            },
            beratBarangn: {
                required: true
            },
            jenisTransaksi: {
                required: true
            }
            tglKirim: {
                required: true
            }
        },
        messages: {
             namaPengirim: {
                required:  "<p style='color:red;'>*Masukkan nama pengirim.</p>"
            },
            teleponPengirim: {
                required:  "<p style='color:red;'>*Masukkan nomor pengirim.</p>",
                digits: "<p style='color:red;'>*Masukkan nomor telepon pengirim dengan angka.</p>",
                minlength: "<p style='color:red;'>*Nomor telepon minimal 6 angka.</p>",
                maxlength: "<p style='color:red;'>*Nomor telepon minimal 14 angka.</p>"
            },
            namaPenerima: {
                required: "<p style='color:red;'>*Masukkan nama penerima.</p>"
            },
            teleponPenerima: {
                required: "<p style='color:red;'>*Masukkan nomor penerima.</p>",
                digits:  "<p style='color:red;'>*Masukkan nomor telepon penerima dengan angka.</p>",
                minlength: "<p style='color:red;'>*Nomor telepon minimal 6 angka.</p>",
                maxlength: "<p style='color:red;'>*Nomor telepon minimal 14 angka.</p>"
            },
            alamatPenerima: {
                required: "<p style='color:red;'>*Masukkan alamat penerima.</p>"
            },
            posPenerima: {
                required: "<p style='color:red;'>*Masukkan kode pos penerima.</p>"
            },
            namaBarang: {
                required: "<p style='color:red;'>*Masukkan nama barang.</p>"
            },
            jenisBarang: {
                required: "<p style='color:red;'>*Masukkan jenis barang.</p>"
            },
            beratBarangn: {
                required: "<p style='color:red;'>*Masukkan berat barang.</p>"
            },
            jenisTransaksi: {
                required: "<p style='color:red;'>*Masukkan jenis transaksi.</p>"
            },
            tglKirim: {
                required: "<p style='color:red;'>*Masukkan tanggal kirim.</p>"
            }
           
        }
    });
});