<?php
    include 'connection.php'; // Menginkludkan file connection.php yang berisi koneksi ke database

    $nohp = $_POST['nohp']; // Mengambil nilai nomor handphone dari form yang dikirim via POST
    $pass = md5($_POST['pass']); // Mengambil password dari form yang dikirim via POST dan mengenkripsinya menggunakan MD5

    // Membuat string SQL untuk mengambil data user yang memiliki nomor handphone dan password yang cocok
    $sql = "SELECT * FROM tb_user CROSS JOIN tb_job
            ON
            tb_user.id_job=tb_job.id_job
            WHERE
            tb_user.nohp='$nohp' AND tb_user.pass='$pass'
            ";
    $result = $connect->query($sql); // Menjalankan query SQL dan menyimpan hasilnya di variabel $result

    if ($result->num_rows > 0) { // Memeriksa jika hasil query memiliki satu baris atau lebih
        $user = array(); // Membuat array untuk menyimpan data user
        while ($row = $result->fetch_assoc()) { // Mengambil setiap baris hasil query sebagai array asosiatif
            $user[] = $row; // Menambahkan baris ke dalam array $user
        }
        echo json_encode(array( // Mengencode data user menjadi JSON dan mencetaknya
            "success"=> true,
            "user"=>$user[0], // Mengambil data user pertama dari array
        ));
    }else {
        echo json_encode(array( // Jika tidak ada user yang cocok, kirim JSON dengan success false
            "success"=> false,
        ));
    }
?>
