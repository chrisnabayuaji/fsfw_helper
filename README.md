# Fsfw Helper V 1.0.0

**Fsfw Helper** adalah sebuah helper untuk framework codeigniter 3.*, berisi kumpulan fungsi yang sehari hari digunakan programmer khususnya programmer Indonesia.

## Kebutuhan

Helper ini sudah di uji coba untuk Framework Codeigniter 3.*.

## Instalasi

Penggunakan helper ini cukup mudah

 1. Salin file fsfw.php ke dalam folder application/helper/
 2. Muat helper ini dengan manambahkan di file application/config/autoload.php dengan menambahkan
    $autoload['helper'] = array('fsfw');

## Fungsi-fungsi 

Berikut adalah fungsi-fungsi yang dapat digunakan

- isUrlExist (string url)
Untuk memastikan apakah url ada atau tidak.
- dateSys2dateId(string yyyy-mm-dd)
Merubah tanggal dari format sistem (yyyy-mm-dd) menjadi format Indonesia (dd-mm-yyyy)
- dateId2dateSys(string yyyy-mm-dd)
Merubah tanggal dari format Indonesia (dd-mm-yyyy) menjadi format sistem (yyyy-mm-dd)
- dateDifference(string yyyy-mm-dd, string yyyy-mm-dd)
Mencari selisih antara dua tanggal
- monthId(int m)
Merubah angka bulan menjadi nama bulan dalam bahasa Indonesia.
- listMonthId()
Berisi array daftar nama bulan dalam bahasa Indonesia.
- dateId(string yyyy-mm-dd)
Merubah tanggal sistem (yyyy-mm-dd) menjadi tanggal lengkap dalam bahasa Indonesia. Contoh : 2019-12-12 -> 12 Desember 2019
- timeElapsed(timestamp)
Untuk mengetahui waktu yang sudah terlewat dari waktu yang ditentukan ke waktu sekarang. Hasil : 2 detik lalu, 3 jam lalu, 1 bulan lalu.
- wordLimiter(string str, int limit)
Memotong string dengan batas yang ditentukan.
- numSys2numId(float x)
Merubah format angka dari format sistem ke format Indonesia.
- numId2numSys(string x)
Merubah format angka dari format Indonesia ke format sistem. 