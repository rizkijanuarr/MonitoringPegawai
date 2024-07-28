<?php
    include '../connection.php';

    $id_user= $_POST['id_user']; 
    $name = $_POST['name'];
    $nohp = $_POST['nohp'];
    $role = $_POST['role'];
    $address = $_POST['address'];
    $id_job = $_POST['id_job'];

    $sql = "UPDATE tb_user
            SET
            name='$name',
            nohp='$nohp',
            role='$role',
            address='$address',
            id_job='$id_job'
            WHERE
            id_user='$id_user'
            ";
    $result = $connect->query($sql);
    echo json_encode(array("success"=>$result));
?>