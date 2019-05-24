<?php
$title = $_POST['title'];
$data = file_get_contents('data.json');
$json_arr = json_decode($data, true);
$json_arr[] = array('title'=>''.$title.'');
file_put_contents('data.json', json_encode($json_arr));
?>
