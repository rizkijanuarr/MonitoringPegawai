<?php
    $server = "localhost"; // Mendefinisikan alamat server yang digunakan, di sini adalah 'localhost' yang merupakan server lokal.

    $user   = "ikyy"; // Mendefinisikan nama pengguna untuk login ke database, di sini nama penggunanya adalah 'ikyy'.

    $pass   = "password"; // Mendefinisikan password yang digunakan untuk autentikasi dengan database.

    $db     = "db_monitoring_pegawai"; // Mendefinisikan nama database yang akan digunakan, di sini namanya adalah 'db_monitoring_pegawai'.

    $connect = new mysqli($server, $user, $pass, $db); // Membuat objek mysqli baru untuk melakukan koneksi ke database MySQL.
                                                      // Objek ini menggunakan variabel yang sudah didefinisikan sebelumnya untuk server, pengguna, password, dan nama database.
?>
