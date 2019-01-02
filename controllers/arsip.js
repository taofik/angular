/**
 * Modul "arsipApp"
 * Controller "arsipController"
 */
angular.module('arsipApp', []).controller('arsipController', function() {
  // variabel "arsip" merujuk kepada objek/instance dari "arsipController"
  var arsip = this;

  // controller "arsipController" memiliki property/anggota "data" untuk menampung data arsip
  arsip.data = [];

  // metode "tambah" untuk menambahkan data arsip
  arsip.tambah = function() {
    arsip.data.push({kode: arsip.inputKode, judul:arsip.inputJudul});
    arsip.inputJudul = '';
    arsip.inputKode = '';
  };

  // metode "hapus" untuk menghapus data arsip terpilih
  arsip.hapus = function() {
    var konf = confirm('Yakin akan menghapus data ini?');
    if (konf) {
      arsip.data.splice(this.$index, 1);
    }
  };

  // metode "total" untuk mendapatkan jumlah total data arsip
  arsip.total = function() {
    var count = arsip.data.length;
    return count;
  };
});