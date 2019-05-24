<?php
$id = $_POST['id'];
$data = file_get_contents('data.json');
$json_arr = json_decode($data, true);
foreach ($json_arr as $key => $value) {
    if ($value['id'] == $id) {
        $json_arr[$key]['title'] = $_POST['title'];
        }
}
file_put_contents('data.json', json_encode($json_arr));
}
?>
