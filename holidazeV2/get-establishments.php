<?php
header('Access-Control-Allow-Origin: *'); 
$establishmentsList = file_get_contents('./client/public/establishments.json');


header('Content-Type: application/json');
echo ($establishmentsList);

?>