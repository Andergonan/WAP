<?php
    $db_server = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'project_api';

    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
    $response = array();

    if($conn) {
        $mysql = "SELECT * FROM review";
        $result = mysqli_query($conn, $mysql);

        if ($result) {
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                //$response[$i]['id'] = $row ['id'];
                $response[$i]['text'] = $row ['text'];
                $i++;
            }
            echo json_encode($response, JSON_UNESCAPED_UNICODE);
        }
    } else {
        echo 'error';
    }
?>