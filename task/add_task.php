<?php
    include '../connection.php';

    $task_name = $_POST['task_name'];
    $description = $_POST['description'];
    $id_user = $_POST['id_user'];
    $progress = 0.0;

    $sql = "INSERT INTO tb_task
            SET
            task_name='$task_name',
            description='$description',
            progress='$progress',
            id_user='$id_user'
            ";
    $result = $connect->query($sql);
    echo json_encode(array("success"=>$result));
?>