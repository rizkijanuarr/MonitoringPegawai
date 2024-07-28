<?php
    include '../connection.php';

    $id_task= $_POST['id_task'];
    $progress = $_POST['progress'];

    $sql = "UPDATE tb_task
            SET
            progress='$progress'
            WHERE
            id_task='$id_task'
            ";
    $result = $connect->query($sql);
    echo json_encode(array("success"=>$result));
?>