<?php 
$data = json_encode($_POST);
file_put_contents('../data/last_message.json', $data);
 ?>