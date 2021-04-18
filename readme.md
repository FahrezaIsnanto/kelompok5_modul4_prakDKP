# ROBOT5_KEL5.PHP

Tugas Modul 4 Function & Method Praktikum DKP Kelompok 5

## DIBUAT OLEH ANGGOTA KELOMPOK 5 PRAK DKP

Muhammad Fahreza Isnanto,Andra Putra Nurrafi,Fitriya Nur Saidah,Dhea Rahma Putri Teknik Komputer 2020 Universitas Diponegoro

## CARA KERJA

Dimulai dengan tag html form yang berisikan satu input submit yang digunakan untuk menyalakan robot. Saat user menekan tombol tersebut php akan memanggil fungsi ambil menu yang berisikan perintah untu menampilkan semua menu dalam bentuk input submit, menu terdiri dari matikan robot, ambil tanggal dan pengulangan. Apabila user menekan ambil tanggal maka akan mengambil method ambil_hari dan ambil tanggal dari sebuah objek robot5 yang sudah dibuat dari perwujudan class robot. Method ambil_hari mengembalikan fungsi php date dengan parameter N yang merupakan pengambilan hari berdasarkan nomor urutnya, digunakan parameter ini dengan tujuan untuk mengonversikan nomor urut hari yang didapatkan ke nama hari sebenarnya array dalam bahasa indonesia. Kemudian untuk ambil_tanggal mengembalikan date dengan parameter d F Y yang merupakan tanggal bulan tahun. Kemudian apabila user menekan fungsi pengulangan maka akan mengambil method ulang yang berisikan parameter input bertipe integer yang merupakan batas dari pengulangan. Dan Apabila user menekan matikan robot maka program akan muncul peringatan robot dimatikan dan web akan direfresh ke semula.