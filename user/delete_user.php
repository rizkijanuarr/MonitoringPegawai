<?php
    include '../connection.php';

    $id_user= $_POST['id_user'];

    $sql = "DELETE FROM tb_user WHERE id_user='$id_user'";
    $result = $connect->query($sql);

    echo json_encode(array("success"=>$result));
?>